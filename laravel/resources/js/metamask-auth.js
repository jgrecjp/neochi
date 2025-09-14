// resources/js/metamask-auth.js

class MetaMaskAuth {
    constructor(apiUrl = '/api') {
        this.apiUrl = apiUrl;
        this.token = localStorage.getItem('auth_token');
    }

    async connectWallet() {
        if (typeof window.ethereum === 'undefined') {
            throw new Error('MetaMask not installed');
        }

        try {
            const accounts = await window.ethereum.request({
                method: 'eth_requestAccounts'
            });
            
            return accounts[0];
        } catch (error) {
            throw new Error('User rejected connection');
        }
    }

    async login() {
        try {
            const address = await this.connectWallet();
            
            // 1. ノンス取得
            const nonceResponse = await fetch(`${this.apiUrl}/auth/metamask/nonce`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ address })
            });

            const nonceData = await nonceResponse.json();
            
            if (!nonceResponse.ok) {
                throw new Error(nonceData.message || 'Failed to get nonce');
            }

            // 2. メッセージに署名
            const signature = await window.ethereum.request({
                method: 'personal_sign',
                params: [nonceData.message, address]
            });

            // 3. 署名を検証
            const verifyResponse = await fetch(`${this.apiUrl}/auth/metamask/verify`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({
                    address,
                    signature,
                    message: nonceData.message
                })
            });

            const verifyData = await verifyResponse.json();

            if (!verifyResponse.ok) {
                throw new Error(verifyData.message || 'Authentication failed');
            }

            // トークンを保存
            this.token = verifyData.token;
            localStorage.setItem('auth_token', this.token);

            return verifyData.user;

        } catch (error) {
            console.error('Login failed:', error);
            throw error;
        }
    }

    async logout() {
        if (!this.token) return;

        try {
            await fetch(`${this.apiUrl}/auth/metamask/logout`, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${this.token}`,
                    'Accept': 'application/json',
                }
            });
        } finally {
            this.token = null;
            localStorage.removeItem('auth_token');
        }
    }

    isAuthenticated() {
        return !!this.token;
    }

    getAuthHeaders() {
        return this.token ? {
            'Authorization': `Bearer ${this.token}`,
            'Accept': 'application/json',
        } : {};
    }
}

// 使用例
const metamaskAuth = new MetaMaskAuth();

document.getElementById('connect-wallet').addEventListener('click', async () => {
    try {
        const user = await metamaskAuth.login();
        console.log('Logged in as:', user);
        // UI更新など
    } catch (error) {
        alert('Login failed: ' + error.message);
    }
});


