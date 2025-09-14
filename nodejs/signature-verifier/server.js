// signature-verifier/server.js
const express = require('express');
const { ethers } = require('ethers');
const cors = require('cors');

const app = express();
app.use(cors());
app.use(express.json());

app.post('/verify-signature', (req, res) => {
    try {
        const { message, signature, address } = req.body;
        
        if (!message || !signature || !address) {
            return res.status(400).json({ 
                valid: false, 
                error: 'Missing required parameters' 
            });
        }

        const recoveredAddress = ethers.utils.verifyMessage(message, signature);
        const valid = recoveredAddress.toLowerCase() === address.toLowerCase();
        
        res.json({ valid });
    } catch (error) {
        console.error('Verification error:', error);
        res.json({ valid: false, error: error.message });
    }
});

const PORT = process.env.PORT || 3001;
app.listen(PORT, () => {
    console.log(`Signature verification service running on port ${PORT}`);
});


