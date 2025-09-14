<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>neochibu - 眠れない夜に、ひとりじゃない安心を</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>tailwind.config={theme:{extend:{colors:{primary:'#57b5e7',secondary:'#8dd3c7'},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; }
        .gradient-night { background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4c1d95 100%); }
        .gradient-dawn { background: linear-gradient(135deg, #1e1b4b 0%, #7c3aed 30%, #f59e0b 70%, #fbbf24 100%); }
        .floating { animation: float 6s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-20px); } }
        .fade-in { opacity: 0; transform: translateY(30px); transition: all 0.8s ease; }
        .fade-in.visible { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body class="bg-white text-gray-900">
    <nav class="fixed top-0 w-full bg-white/90 backdrop-blur-sm z-50 border-b border-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="flex items-center h-full">
                    <img src="img/neochibu-logob..png" alt="neochibu logo" class="h-10">
                </a>
                <div class="hidden md:flex space-x-8">
                    <a href="#rooms" class="text-gray-700 hover:text-primary transition-colors">ルーム</a>
                    <a href="#features" class="text-gray-700 hover:text-primary transition-colors">特徴</a>
                    <a href="#shop" class="text-gray-700 hover:text-primary transition-colors">ショップ</a>
                    <a href="#contact" class="text-gray-700 hover:text-primary transition-colors">お問い合わせ</a>
                </div>
                <button class="bg-primary text-white px-6 py-2 !rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">今すぐ始める</button>
            </div>
        </div>
    </nav>

    <section class="gradient-night relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0" style="background-image: url('img/header.jpg'); background-size: cover; background-position: center; opacity: 0.3;"></div>

        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
            <div class="floating">
                <div class="w-16 h-16 mx-auto mb-8 flex items-center justify-center">
                    <i class="ri-moon-line ri-3x text-yellow-200"></i>
                </div>
            </div>

            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                眠れない夜に、<br>
                <span class="text-yellow-200">ひとりじゃない安心</span>を。
            </h1>

            <p class="text-xl md:text-2xl mb-12 text-gray-200 leading-relaxed">
                人・AI・音が寄り添う、やさしい眠りのための空間
            </p>

            <div class="flex flex-col items-center gap-4">
                <a href="/" class="inline-block bg-white p-8 rounded shadow">
                    <img src="img/neochibu-logob..png" alt="neochibu logo" class="h-16">
                </a>

                <button class="bg-primary text-white px-16 py-4 text-xl !rounded-button hover:bg-primary/90 transition-all transform hover:scale-105 whitespace-nowrap shadow-2xl">
                    今すぐ試す
                </button>
            </div>

            <div class="mt-16 animate-bounce">
                <div class="w-6 h-6 mx-auto flex items-center justify-center">
                    <i class="ri-arrow-down-line ri-lg text-gray-300"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50" id="problems">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">世界の 3 人に 1 人が、<br>眠りに悩みを抱えています</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">現代社会では多くの人が睡眠に関する問題を抱えており、その原因は様々です。</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg text-center fade-in hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center bg-red-300 rounded-full">
                        <i class="ri-emotion-unhappy-line ri-2x text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">不安で眠れない</h3>
                    <p class="text-gray-600">心配事や不安が頭から離れず、なかなか眠りにつけない状態が続いています。</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg text-center fade-in hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center bg-blue-300 rounded-full">
                        <i class="ri-user-line ri-2x text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">孤独感で心細い</h3>
                    <p class="text-gray-600">一人でいる時間が長く、誰かと話したい気持ちが強くなってしまいます。</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg text-center fade-in hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center bg-yellow-300 rounded-full">
                        <i class="ri-refresh-line ri-2x text-yellow-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">睡眠不足の連鎖</h3>
                    <p class="text-gray-600">眠れない日が続くことで、さらに眠りにくくなる悪循環に陥っています。</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg text-center fade-in hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center bg-purple-300 rounded-full">
                        <i class="ri-brain-line ri-2x text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">情報過多で頭が休まらない</h3>
                    <p class="text-gray-600">日中の情報や刺激が多すぎて、脳が休息モードに入れない状態です。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white" id="solution">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">neochibu とは？</h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    neochibu は、眠れない夜に安心を届ける分散型プラットフォーム。<br>
                    3 つのルームから、あなたに合った「やすらぎ」を選べます。
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in">
                    <img src="img/app.jpg"
                        alt="neochibu アプリ画面"
                        class="w-full rounded-2xl shadow-2xl object-cover">
                </div>

                <div class="space-y-8 fade-in">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center bg-primary/10 rounded-full flex-shrink-0">
                            <i class="ri-user-heart-line ri-lg text-primary"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">人との対話ルーム</h3>
                            <p class="text-gray-600">占い師やカウンセラー、優しい話し相手があなたの不安に寄り添います。</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center bg-secondary/10 rounded-full flex-shrink-0">
                            <i class="ri-robot-line ri-lg text-secondary"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">AI との会話ルーム</h3>
                            <p class="text-gray-600">24 時間いつでも、やさしい AI があなたの話し相手になります。</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center bg-green-100 rounded-full flex-shrink-0">
                            <i class="ri-music-line ri-lg text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">音楽・環境音ルーム</h3>
                            <p class="text-gray-600">心地よい音楽や自然の音が、自然な眠りを誘導します。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50" id="rooms">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">3 つのルームで、あなたに合った安らぎを</h2>
                <p class="text-xl text-gray-600">それぞれ異なるアプローチで、快適な睡眠をサポートします。</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in hover:shadow-xl transition-shadow">
                    <div class="h-48" style="background-image: url('img/person.jpg')"> </div>
                    <div class="p-8">
                        <div class="w-12 h-12 mb-4 flex items-center justify-center bg-primary/10 rounded-full">
                            <i class="ri-user-heart-line ri-lg text-primary"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">人との対話ルーム</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            不安な夜に、人の声がそっと寄り添う。占い師・カウンセラー・友人感覚の話し相手などを募集。有料/無料を選べて、入室ごと/時間単位で報酬設定が可能。
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-500">
                                <div class="w-4 h-4 mr-2 flex items-center justify-center">
                                    <i class="ri-coin-line"></i>
                                </div>
                                有料・無料選択可能
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <div class="w-4 h-4 mr-2 flex items-center justify-center">
                                    <i class="ri-time-line"></i>
                                </div>
                                入室料金・時間料金設定
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <div class="w-4 h-4 mr-2 flex items-center justify-center">
                                    <i class="ri-star-line"></i>
                                </div>
                                プロの占い師・カウンセラー在籍
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in hover:shadow-xl transition-shadow">
                    <div class="h-48" style="background-image: url('img/AI.jpg'); background-size: cover; background-position: center;"></div>
                    <div class="p-8">
                        <div class="w-12 h-12 mb-4 flex items-center justify-center bg-secondary/10 rounded-full">
                            <i class="ri-robot-line ri-lg text-secondary"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">AI との会話ルーム</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            24 時間、やさしい AI が話し相手に。人より安価に利用できる AI チャットで安心感を得られる。いつでもあなたの心に寄り添います。
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-500">
                                <div class="w-4 h-4 mr-2 flex items-center justify-center">
                                    <i class="ri-time-line"></i>
                                </div>
                                24 時間対応
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <div class="w-4 h-4 mr-2 flex items-center justify-center">
                                    <i class="ri-price-tag-3-line"></i>
                                </div>
                                人間より安価な料金設定
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <div class="w-4 h-4 mr-2 flex items-center justify-center">
                                    <i class="ri-shield-check-line"></i>
                                </div>
                                プライベートで安全な会話
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in hover:shadow-xl transition-shadow">
                    <div class="h-48" style="background-image: url('img/music.jpg'); background-size: cover; background-position: center;"></div>
                    <div class="p-8">
                        <div class="w-12 h-12 mb-4 flex items-center justify-center bg-green-100 rounded-full">
                            <i class="ri-music-line ri-lg text-green-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">音楽・環境音ルーム</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            自然な音が、眠りを誘う。心地よい音楽・環境音を無料で利用可能。雨音、波音、森の音など、あなたの好みに合わせて選択できます。
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-500">
                                <div class="w-4 h-4 mr-2 flex items-center justify-center">
                                    <i class="ri-gift-line"></i>
                                </div>
                                完全無料
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <div class="w-4 h-4 mr-2 flex items-center justify-center">
                                    <i class="ri-playlist-line"></i>
                                </div>
                                豊富な音源ライブラリ
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <div class="w-4 h-4 mr-2 flex items-center justify-center">
                                    <i class="ri-timer-line"></i>
                                </div>
                                タイマー機能付き
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">安心と報酬の循環で、<br>やさしいコミュニティが育つ</h2>
                <p class="text-xl text-gray-600">透明性の高いシステムで、すべての参加者が安心して利用できます。</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">
                <div class="space-y-8 fade-in">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center bg-yellow-300 rounded-full flex-shrink-0">
                            <i class="ri-coin-line ri-lg text-yellow-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">コインシステム</h3>
                            <p class="text-gray-600">ルーム提供者には「コイン」で報酬が発生。公平で透明な報酬システムです。</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center bg-blue-300 rounded-full flex-shrink-0">
                            <i class="ri-search-line ri-lg text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">検索上位表示</h3>
                            <p class="text-gray-600">多くのコインを投資することで、ルームが検索されやすくトップに表示されます。</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center bg-green-300 rounded-full flex-shrink-0">
                            <i class="ri-star-line ri-lg text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">評価システム</h3>
                            <p class="text-gray-600">利用者はルームごとに評価を残せるため、信頼性の高いサービスが育ちます。</p>
                        </div>
                    </div>
                </div>

                <div class="fade-in">
                    <img src="img/coin.jpg"
                        alt="コインシステム"
                        class="w-full rounded-2xl shadow-2xl object-cover">
                </div>
            </div>

            <div class="bg-gray-50 rounded-2xl p-8 lg:p-12 fade-in">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold mb-4">セキュリティ & プライバシー</h3>
                    <p class="text-xl text-gray-600">あなたの安心を最優先に考えた設計</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-blue-300 rounded-full">
                            <i class="ri-shield-check-line ri-2x text-blue-600"></i>
                        </div>
                        <h4 class="text-lg font-semibold mb-2">セキュア設計</h4>
                        <p class="text-gray-600">暗号化技術により、すべての通信が安全に保護されています。</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-purple-300 rounded-full">
                            <i class="ri-eye-off-line ri-2x text-purple-600"></i>
                        </div>
                        <h4 class="text-lg font-semibold mb-2">プライバシー保護</h4>
                        <p class="text-gray-600">外部解析は一切行わず、あなたの個人情報を厳重に保護します。</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-green-300 rounded-full">
                            <i class="ri-history-line ri-2x text-green-600"></i>
                        </div>
                        <h4 class="text-lg font-semibold mb-2">透明なコイン利用</h4>
                        <p class="text-gray-600">利用履歴はいつでも確認でき、完全に透明な取引システムです。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50" id="shop">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold mb-6">もっと快適に眠るためのアイテム</h2>
                <p class="text-xl text-gray-600">アプリ内から購入可能。必要に応じて体験を拡張できます。</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white rounded-xl p-6 shadow-lg text-center fade-in hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-blue-100 rounded-full">
                        <i class="ri-headphone-line ri-2x text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">骨伝導スピーカー</h3>
                    <p class="text-gray-600">耳を塞がずに音楽を楽しめる、睡眠に最適なスピーカー</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg text-center fade-in hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-green-100 rounded-full">
                        <i class="ri-hotel-bed-line ri-2x text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">オリジナル枕</h3>
                    <p class="text-gray-600">快適な睡眠をサポートする、ergonomic デザインの枕</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg text-center fade-in hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-purple-100 rounded-full">
                        <i class="ri-mic-line ri-2x text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">ASMR 用ダミーヘッドマイク</h3>
                    <p class="text-gray-600">高品質な ASMR 録音を可能にする専用マイク</p>
                </div>
            </div>

            <div class="text-center fade-in">
                <button class="bg-gray-800 text-white px-8 py-3 !rounded-button hover:bg-gray-700 transition-colors whitespace-nowrap">
                    詳細を見る
                </button>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in">
            <div class="w-16 h-16 mx-auto mb-8 flex items-center justify-center">
                <i class="ri-lock-line ri-2x text-red-400"></i>
            </div>
            <h2 class="text-3xl font-bold mb-6">秘密の、もう一つの居場所</h2>
            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                18 歳以上限定の特別なルームをご用意しています。<br>
                年齢認証が必要な、プライベートな空間です。
            </p>
            <button class="bg-pink-600 text-white px-8 py-3 !rounded-button hover:bg-pink-0 transition-colors whitespace-nowrap">
                年齢認証して入室
            </button>
        </div>
    </section>

    <section class="gradient-dawn relative py-32 text-white text-center">
        <div class="absolute inset-0" style="background-image: url('img/morning.jpg'); background-size: cover; background-position: center; opacity: 0.3;"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 fade-in">
            <h2 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                今夜から、<br>
                <span class="text-yellow-200">ひとりじゃない眠り</span>を。
            </h2>

            <p class="text-2xl mb-12 text-gray-200 leading-relaxed">
                心に寄り添う安心が、あなたを朝まで導きます。
            </p>

            <div class="space-y-6">
                <button class="bg-white text-gray-900 px-12 py-4 text-xl font-semibold !rounded-button hover:bg-gray-100 transition-all transform hover:scale-105 whitespace-nowrap shadow-2xl">
                    今すぐ neochibu を始める
                </button>
            </div>

                                    @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif


        </div>
    </section>

    <footer class="bg-gray-900 text-white py-16" id="contact">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <a href="/" class="inline-block bg-white p-2 rounded shadow">
                        <img src="img/neochibu-logob..png" alt="neochibu logo" class="h-10">
                    </a>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        眠れない夜に、ひとりじゃない安心を届ける。<br>
                        人・AI・音が寄り添う、やさしい眠りのための空間。
                    </p>
                    <div class="flex space-x-4">
                        <div class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-gray-700 transition-colors cursor-pointer">
                            <i class="ri-twitter-x-line"></i>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">サービス</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="conditions.html" class="hover:text-white transition-colors">利用規約</a></li>
                        <li><a href="privacy.html" class="hover:text-white transition-colors">プライバシーポリシー</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy;neochibu.</p>
            </div>
        </div>
    </footer>

    <script id="scroll-animations">
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });
        });
    </script>

    <script id="smooth-scroll">
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
</body>











