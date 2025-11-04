<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="theme-color" content="#2B2B35"/>
    
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="/css/plugins/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/plugins/swiper.min.css"/>
    <link rel="stylesheet" href="/css/plugins/fancybox.min.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    
    <title>Portfolio Dimas - @yield('title', 'Home')</title>
</head>
<body>
    <!-- Chat AI Container -->
    <div id="chat-ai-container">
        <button id="chat-ai-toggle" class="chat-ai-btn">
            <i class="fas fa-robot"></i>
        </button>

        <!-- Chat Bubble dengan tombol close -->
        <div id="chat-bubble" class="chat-bubble">
            <button id="chat-bubble-close" class="bubble-close-btn">
                <i class="fas fa-times"></i>
            </button>
            <div class="bubble-content">
                <div class="bubble-text">
                    <strong>Hai! 🤖</strong>
                    <p>Saya AI, bisa bantu jawab tentang Dimas atau apa saja!</p>
                </div>
            </div>
            <div class="bubble-tail"></div>
        </div>

        <!-- Chat Box -->
        <div id="chat-ai-box" class="chat-ai-box">
            <div class="chat-ai-header">
                <div class="header-content">
                    <div class="ai-avatar">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="header-text">
                        <strong>Asisten AI Dimas</strong>
                        <span class="status">Online</span>
                    </div>
                </div>
                <button id="chat-ai-close" class="close-btn">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="chat-ai-body" id="chat-ai-body">
                <div class="chat-message ai-message">
                    <div class="message-avatar">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="message-content">
                        <p>Halo Tuan! 👋 Saya siap membantu menjawab pertanyaan Anda. Ada yang bisa saya bantu?</p>
                    </div>
                </div>
            </div>
            <div class="chat-ai-footer">
                <div class="input-container">
                    <input type="text" id="chat-ai-input" placeholder="Ketik pesan..."/>
                    <button id="chat-ai-send" class="send-btn">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Base Styles */
        #chat-ai-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }

        .chat-ai-btn {
            background: linear-gradient(135deg, #ffc107, #ff9800);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            font-size: 28px;
            cursor: pointer;
            box-shadow: 0 6px 20px rgba(255, 193, 7, 0.4);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .chat-ai-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(255, 193, 7, 0.6);
        }

        /* Chat Bubble Styles */
        .chat-bubble {
            position: absolute;
            bottom: 90px;
            right: 10px;
            background: linear-gradient(135deg, #ffc107, #ff9800);
            color: white;
            padding: 15px 40px 15px 15px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(255, 193, 7, 0.4);
            max-width: 500px;
            animation: bubbleFloat 3s ease-in-out infinite;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: bubbleEnter 0.5s ease forwards 2s, bubbleFloat 3s ease-in-out infinite 2.5s;
        }

        .bubble-close-btn {
            position: absolute;
            top: 8px;
            right: 8px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: none;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            transition: all 0.3s ease;
            z-index: 1;
        }

        .bubble-close-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }

        .chat-bubble:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(255, 193, 7, 0.6);
        }

        .bubble-content {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .bubble-text {
            flex: 1;
        }

        .bubble-text strong {
            display: block;
            font-size: 14px;
            margin-bottom: 2px;
        }

        .bubble-text p {
            margin: 0;
            font-size: 12px;
            opacity: 0.9;
        }

        .bubble-tail {
            position: absolute;
            bottom: -8px;
            right: 20px;
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid #ff9800;
        }

        /* Chat Box Styles */
        .chat-ai-box {
            display: none;
            position: absolute;
            bottom: 90px;
            right: 0;
            width: 380px;
            height: 500px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            overflow: hidden;
            flex-direction: column;
            border: 2px solid #ffc107;
        }

        .chat-ai-header {
            background: linear-gradient(135deg, #ffc107, #ff9800);
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(255, 193, 7, 0.3);
        }

        .header-content {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .ai-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .header-text strong {
            font-size: 16px;
            display: block;
        }

        .status {
            font-size: 11px;
            opacity: 0.9;
            font-weight: normal;
        }

        .close-btn {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .close-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }

        .chat-ai-body {
            padding: 20px;
            height: 360px;
            overflow-y: auto;
            background: #f8f9fa;
            scrollbar-width: thin;
            scrollbar-color: #ffc107 #f1f1f1;
        }

        .chat-ai-body::-webkit-scrollbar {
            width: 6px;
        }

        .chat-ai-body::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .chat-ai-body::-webkit-scrollbar-thumb {
            background: #ffc107;
            border-radius: 3px;
        }

        .chat-ai-body::-webkit-scrollbar-thumb:hover {
            background: #ff9800;
        }

        .chat-message {
            display: flex;
            margin-bottom: 20px;
            animation: fadeInUp 0.3s ease;
        }

        .user-message {
            justify-content: flex-end;
        }

        .ai-message {
            justify-content: flex-start;
        }

        .message-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 12px;
            flex-shrink: 0;
            font-size: 14px;
        }

        .user-message .message-avatar {
            background: #ffc107;
            order: 2;
        }

        .ai-message .message-avatar {
            background: #6c757d;
            color: white;
        }

        .message-content {
            max-width: 75%;
            padding: 12px 16px;
            border-radius: 18px;
            font-size: 14px;
            line-height: 1.5;
            position: relative;
        }

        .user-message .message-content {
            background: linear-gradient(135deg, #ffc107, #ff9800);
            color: white;
            border-bottom-right-radius: 5px;
            box-shadow: 0 2px 8px rgba(255, 193, 7, 0.3);
        }

        .ai-message .message-content {
            background: white;
            color: #333;
            border-bottom-left-radius: 5px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border: 1px solid #e9ecef;
        }

        .message-content p {
            margin: 0;
        }

        .chat-ai-footer {
            background: white;
            padding: 15px 20px;
            border-top: 1px solid #e9ecef;
        }

        .input-container {
            display: flex;
            align-items: center;
            background: #f8f9fa;
            border-radius: 25px;
            padding: 5px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .input-container:focus-within {
            border-color: #ffc107;
            box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.1);
        }

        .chat-ai-footer input {
            flex: 1;
            border: none;
            background: transparent;
            padding: 12px 15px;
            outline: none;
            font-size: 14px;
        }

        .send-btn {
            background: #ffc107;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            font-size: 16px;
        }

        .send-btn:hover {
            background: #ff9800;
            transform: scale(1.05);
        }

        .send-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        /* Typing Indicator */
        .typing-indicator {
            display: flex;
            align-items: center;
            padding: 12px 16px;
            background: white;
            border-radius: 18px;
            border-bottom-left-radius: 5px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            max-width: 75%;
        }

        .typing-dots {
            display: flex;
            gap: 4px;
        }

        .typing-dots span {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #ffc107;
            animation: typing 1.4s infinite ease-in-out;
        }

        .typing-dots span:nth-child(1) {
            animation-delay: -0.32s;
        }
        .typing-dots span:nth-child(2) {
            animation-delay: -0.16s;
        }

        /* Search Suggestions */
        .search-suggestions {
            background: white;
            border-radius: 15px;
            padding: 15px;
            margin: 10px 0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border: 1px solid #e9ecef;
        }

        .suggestions-header {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #f1f1f1;
            color: #ffc107;
            font-weight: 600;
        }

        .suggestions-header i {
            font-size: 16px;
        }

        .suggestion-category {
            margin-bottom: 15px;
        }

        .suggestion-category:last-child {
            margin-bottom: 0;
        }

        .category-title {
            font-size: 12px;
            font-weight: 600;
            color: #6c757d;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .suggestion-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .suggestion-chip {
            background: linear-gradient(135deg, #fff3cd, #ffeaa7);
            color: #856404;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #ffeaa7;
            font-weight: 500;
        }

        .suggestion-chip:hover {
            background: linear-gradient(135deg, #ffc107, #ffb300);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(255, 193, 7, 0.3);
        }

        /* Animations */
        @keyframes bubbleEnter {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bubbleFloat {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes typing {
            0%, 100%, 80% {
                transform: scale(0.8);
                opacity: 0.5;
            }
            40% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* ===== RESPONSIVE DESIGN ===== */

        /* Tablet Devices (768px and below) */
        @media (max-width: 768px) {
            #chat-ai-container {
                bottom: 15px;
                right: 15px;
            }
            
            .chat-ai-box {
                width: 350px;
                height: 450px;
                right: 0;
                bottom: 80px;
            }
            
            .chat-ai-body {
                height: 320px;
                padding: 15px;
            }
            
            .chat-bubble {
                max-width: 280px;
                right: 5px;
                bottom: 80px;
            }
            
            .chat-ai-btn {
                width: 60px;
                height: 60px;
                font-size: 24px;
            }

            .message-content {
                max-width: 80%;
                font-size: 13px;
                padding: 10px 14px;
            }

            .suggestion-chips {
                gap: 6px;
            }

            .suggestion-chip {
                padding: 5px 10px;
                font-size: 11px;
            }
        }

        /* Mobile Devices (480px and below) */
        @media (max-width: 480px) {
            #chat-ai-container {
                bottom: 10px;
                right: 10px;
            }
            
            .chat-ai-box {
                width: calc(100vw - 40px);
                height: 400px;
                right: 0;
                bottom: 70px;
                border-radius: 15px;
            }
            
            .chat-ai-body {
                height: 280px;
                padding: 10px;
            }
            
            .chat-bubble {
                max-width: 250px;
                right: 0;
                bottom: 75px;
                padding: 12px 35px 12px 12px;
            }
            
            .bubble-text strong {
                font-size: 13px;
            }
            
            .bubble-text p {
                font-size: 11px;
            }
            
            .chat-ai-btn {
                width: 55px;
                height: 55px;
                font-size: 22px;
            }
            
            .message-content {
                max-width: 85%;
                font-size: 13px;
                padding: 10px 12px;
            }

            .message-avatar {
                width: 32px;
                height: 32px;
                margin: 0 8px;
                font-size: 12px;
            }

            .chat-ai-header {
                padding: 12px 15px;
            }

            .ai-avatar {
                width: 35px;
                height: 35px;
                font-size: 16px;
            }

            .header-text strong {
                font-size: 14px;
            }

            .status {
                font-size: 10px;
            }

            .close-btn {
                width: 28px;
                height: 28px;
            }

            .chat-ai-footer {
                padding: 12px 15px;
            }

            .chat-ai-footer input {
                padding: 10px 12px;
                font-size: 13px;
            }

            .send-btn {
                width: 36px;
                height: 36px;
                font-size: 14px;
            }

            .search-suggestions {
                padding: 12px;
                margin: 8px 0;
            }

            .suggestions-header {
                font-size: 14px;
                margin-bottom: 12px;
            }

            .suggestion-category {
                margin-bottom: 12px;
            }

            .category-title {
                font-size: 11px;
                margin-bottom: 6px;
            }
        }

        /* Small Mobile Devices (360px and below) */
        @media (max-width: 360px) {
            #chat-ai-container {
                bottom: 8px;
                right: 8px;
            }
            
            .chat-ai-box {
                width: calc(100vw - 30px);
                height: 380px;
                bottom: 65px;
            }
            
            .chat-ai-body {
                height: 260px;
                padding: 8px;
            }
            
            .chat-bubble {
                max-width: 220px;
                bottom: 70px;
                padding: 10px 30px 10px 10px;
            }
            
            .message-content {
                max-width: 90%;
                font-size: 12px;
                padding: 8px 10px;
            }

            .chat-ai-btn {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .suggestion-chips {
                gap: 4px;
            }

            .suggestion-chip {
                padding: 4px 8px;
                font-size: 10px;
            }
        }

        /* Landscape Mode for Mobile */
        @media (max-height: 500px) and (orientation: landscape) {
            .chat-ai-box {
                height: 300px;
                bottom: 70px;
            }
            
            .chat-ai-body {
                height: 200px;
                padding: 10px;
            }
            
            .chat-bubble {
                bottom: 65px;
                max-width: 200px;
            }

            .chat-ai-btn {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .chat-message {
                margin-bottom: 15px;
            }

            .message-content {
                padding: 8px 12px;
                font-size: 12px;
            }
        }

        /* Large Screens (1200px and above) */
        @media (min-width: 1200px) {
            .chat-ai-box {
                width: 420px;
                height: 550px;
            }
            
            .chat-ai-body {
                height: 410px;
            }
            
            .chat-bubble {
                max-width: 350px;
            }
            
            .message-content {
                max-width: 70%;
                font-size: 15px;
                padding: 14px 18px;
            }

            .chat-ai-btn {
                width: 75px;
                height: 75px;
                font-size: 30px;
            }
        }

        /* 4K Screens (2560px and above) */
        @media (min-width: 2560px) {
            #chat-ai-container {
                bottom: 30px;
                right: 30px;
            }
            
            .chat-ai-box {
                width: 500px;
                height: 650px;
                bottom: 100px;
            }
            
            .chat-ai-body {
                height: 510px;
                padding: 25px;
            }
            
            .chat-bubble {
                max-width: 400px;
                bottom: 110px;
                right: 15px;
                padding: 20px 50px 20px 20px;
            }
            
            .bubble-text strong {
                font-size: 16px;
            }
            
            .bubble-text p {
                font-size: 14px;
            }
            
            .chat-ai-btn {
                width: 85px;
                height: 85px;
                font-size: 34px;
            }
            
            .message-content {
                max-width: 65%;
                font-size: 16px;
                padding: 16px 20px;
            }

            .message-avatar {
                width: 44px;
                height: 44px;
                margin: 0 16px;
                font-size: 18px;
            }
        }

        /* Touch Device Optimizations */
        @media (hover: none) and (pointer: coarse) {
            .chat-ai-btn:hover {
                transform: none;
            }
            
            .send-btn:hover {
                transform: none;
            }
            
            .bubble-close-btn:hover {
                transform: none;
            }
            
            .close-btn:hover {
                transform: none;
            }
            
            .suggestion-chip:hover {
                transform: none;
            }
            
            .chat-bubble:hover {
                transform: none;
            }

            /* Increase touch targets for mobile */
            .suggestion-chip {
                padding: 8px 14px;
                min-height: 32px;
            }

            .send-btn {
                min-width: 44px;
                min-height: 44px;
            }

            .bubble-close-btn {
                width: 24px;
                height: 24px;
            }

            .close-btn {
                width: 36px;
                height: 36px;
            }
        }

        /* High DPI Screens */
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .chat-ai-btn,
            .send-btn,
            .close-btn,
            .bubble-close-btn {
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                transform: translateZ(0);
            }
        }

        /* Print Styles */
        @media print {
            #chat-ai-container {
                display: none !important;
            }
        }
    </style>

    <script>
        class ChatAI {
            constructor() {
                this.isLoading = false;
                this.userProfile = this.getUserProfile();
                this.searchSuggestions = this.getSearchSuggestions();
                this.hasShownInitialSuggestions = false;
                this.initBubbleClose();
                this.init();
                this.handleResize();
            }

            handleResize() {
                window.addEventListener('resize', () => {
                    const chatBox = document.getElementById('chat-ai-box');
                    if (chatBox.style.display === 'flex') {
                        this.adjustChatBoxPosition();
                    }
                });
            }

            adjustChatBoxPosition() {
                const chatBox = document.getElementById('chat-ai-box');
                if (window.innerWidth <= 480) {
                    chatBox.style.right = '0';
                    chatBox.style.bottom = '70px';
                } else {
                    chatBox.style.right = '0';
                    chatBox.style.bottom = '90px';
                }
            }

            initBubbleClose() {
                const bubbleCloseBtn = document.getElementById('chat-bubble-close');
                const chatBubble = document.getElementById('chat-bubble');
                
                if (bubbleCloseBtn && chatBubble) {
                    bubbleCloseBtn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        this.hideBubble();
                    });
                }
                
                if (chatBubble) {
                    chatBubble.addEventListener('click', () => {
                        this.openChat();
                        this.hideBubble();
                    });
                }
            }

            hideBubble() {
                const chatBubble = document.getElementById('chat-bubble');
                if (chatBubble) {
                    chatBubble.style.display = 'none';
                }
            }

            getUserProfile() {
                return {
                    name: "DIMAS WAHYU SULISTYO",
                    location: "Surakarta, Jawa Tengah, Indonesia",
                    phone: "(+62) 857-2769-4993",
                    email: "dimastyo219@gmail.com",
                    linkedin: "linkedin.com/in/dimaswahyusulistyo",
                    github: "https://github.com/dimaswahyusulistyo",
                    education: {
                        institution: "Universitas Sebelas Maret",
                        location: "Surakarta, Jawa Tengah",
                        period: "2022-2025",
                        degree: "D3 Teknik Informatika",
                        gpa: "IPK 3.88"
                    },
                    certification: {
                        title: "Programmer",
                        issuer: "LSP Universitas Sebelas Maret (BNSP)",
                        period: "Juli 2025-2028"
                    },
                    experience: [
                        {
                            role: "KPPS",
                            company: "Sirekap",
                            location: "Surakarta",
                            period: "Maret 2024",
                            description: "Berperan dalam digitalisasi Pemilu 2024 dengan menggunakan aplikasi mobile Sir" +
                                "ekap untuk mencatat dan mengirim hasil perhitungan suara."
                        }
                    ],
                    projects: [
                        {
                            name: "Aplikasi Persuratan",
                            client: "Kecamatan Banjarsari",
                            role: "Frontend Developer",
                            period: "Feb 2024 – Agu 2024",
                            description: "Mengembangkan interface responsif menggunakan Vue.js dan Bootstrap untuk siste" +
                                    "m persuratan digital yang mengelola 200+ surat masuk per bulan",
                            technologies: ["Vue.js", "Bootstrap"]
                        }, {
                            name: "Aplikasi Monitoring",
                            client: "DISKOMINFO Karanganyar",
                            role: "Frontend – UI/UX",
                            period: "Sep 2024 – Jan 2025",
                            description: "Mengembangkan aplikasi berbasis web dan mobile untuk memantau program dan kegi" +
                                    "atan DISKOMINFO Karanganyar secara real-time",
                            technologies: ["Vue.js", "Laravel"]
                        }, {
                            name: "Aplikasi Stunting",
                            client: "DISKOMINFO Karanganyar",
                            role: "Fullstack Developer",
                            period: "Jan 2025 – Juli 2025",
                            description: "Mengembangkan aplikasi web untuk mengelola, memantau, dan mengintervensi data " +
                                    "anak stunting dalam rangka percepatan penurunan stunting",
                            technologies: ["Laravel", "Vue.js"]
                        }
                    ],
                    skills: [
                        "Vue.js",
                        "Laravel",
                        "PHP",
                        "JavaScript",
                        "Bootstrap",
                        "UI/UX Design",
                        "Fullstack Development"
                    ]
                };
            }

            getSearchSuggestions() {
                return [
                    {
                        title: "📞 Kontak & Informasi",
                        queries: ["kontak", "email", "telepon", "hubungi dimas"]
                    }, {
                        title: "🎓 Pendidikan",
                        queries: ["pendidikan", "kuliah", "uns", "ipk"]
                    }, {
                        title: "💻 Skills & Teknologi",
                        queries: ["skill", "teknologi", "vue.js", "laravel"]
                    }, {
                        title: "🚀 Proyek & Portfolio",
                        queries: ["proyek", "portfolio", "aplikasi", "pengalaman proyek"]
                    }, {
                        title: "💼 Pengalaman Kerja",
                        queries: ["pengalaman", "kerja", "sirekap", "pengalaman kerja"]
                    }, {
                        title: "📜 Sertifikasi",
                        queries: ["sertifikasi", "sertifikat", "bnsp", "certification"]
                    }, {
                        title: "👨‍💻 Profil Lengkap",
                        queries: ["profil", "tentang saya", "ringkasan", "semua info"]
                    }
                ];
            }

            init() {
                document
                    .getElementById("chat-ai-toggle")
                    .addEventListener("click", () => this.toggleChat());
                document
                    .getElementById("chat-ai-close")
                    .addEventListener("click", () => this.closeChat());
                document
                    .getElementById("chat-ai-send")
                    .addEventListener("click", () => this.sendMessage());
                document
                    .getElementById("chat-ai-input")
                    .addEventListener("keypress", (e) => {
                        if (e.key === 'Enter' && !e.shiftKey) {
                            e.preventDefault();
                            this.sendMessage();
                        }
                    });

                document
                    .getElementById("chat-ai-toggle")
                    .addEventListener("click", () => {
                        setTimeout(() => {
                            document
                                .getElementById("chat-ai-input")
                                .focus();
                            this.showSearchSuggestions();
                        }, 300);
                    });

                document
                    .getElementById("chat-ai-input")
                    .addEventListener("focus", () => {
                        this.showSearchSuggestions();
                    });
            }

            toggleChat() {
                const chatBox = document.getElementById("chat-ai-box");
                if (chatBox.style.display === "flex") {
                    this.closeChat();
                } else {
                    this.openChat();
                }
            }

            openChat() {
                const chatBox = document.getElementById("chat-ai-box");
                chatBox.style.display = "flex";
                this.adjustChatBoxPosition();
                
                document.getElementById("chat-ai-input").focus();
                
                if (window.innerWidth > 768 || window.innerHeight < 500) {
                    this.showSearchSuggestions();
                }
            }

            closeChat() {
                document
                    .getElementById("chat-ai-box")
                    .style
                    .display = "none";
                this.hideSearchSuggestions();
            }

            showSearchSuggestions() {
                if (window.innerWidth <= 360 && window.innerHeight > 500) {
                    return;
                }
                if (this.hasShownInitialSuggestions) {
                    return;
                }
                const chatBody = document.getElementById("chat-ai-body");
                const existingSuggestions = document.getElementById('search-suggestions');

                if (existingSuggestions) {
                    existingSuggestions.remove();
                }

                const suggestionsDiv = document.createElement('div');
                suggestionsDiv.id = 'search-suggestions';
                suggestionsDiv.className = 'search-suggestions';

                let suggestionsHTML = `
            <div class="suggestions-header">
                <i class="fas fa-lightbulb"></i>
                <span>Pertanyaan tentang Dimas</span>
            </div>
        `;

                this
                    .searchSuggestions
                    .forEach(category => {
                        suggestionsHTML += `
                <div class="suggestion-category">
                    <div class="category-title">${category.title}</div>
                    <div class="suggestion-chips">
            `;

                        category
                            .queries
                            .forEach(query => {
                                suggestionsHTML += `
                    <div class="suggestion-chip" onclick="chatAI.useSuggestion('${query}')">
                        ${query}
                    </div>
                `;
                            });

                        suggestionsHTML += `
                    </div>
                </div>
            `;
                    });

                suggestionsDiv.innerHTML = suggestionsHTML;
                chatBody.appendChild(suggestionsDiv);
                chatBody.scrollTop = chatBody.scrollHeight;
                this.hasShownInitialSuggestions = true;
            }

            hideSearchSuggestions() {
                const existingSuggestions = document.getElementById('search-suggestions');
                if (existingSuggestions) {
                    existingSuggestions.remove();
                }
            }

            useSuggestion(query) {
                document.getElementById("chat-ai-input").value = query;
                this.hideSearchSuggestions();
                this.sendMessage();
            }

            async sendMessage() {
                if (this.isLoading) 
                    return;
                
                const input = document.getElementById("chat-ai-input");
                const message = input
                    .value
                    .trim();

                if (!message) 
                    return;
                
                input.value = '';
                this.hideSearchSuggestions();

                this.addMessage(message, 'user');

                const shortcutResponse = this.checkShortcuts(message);
                if (shortcutResponse) {
                    this.addMessage(shortcutResponse, 'ai');
                    setTimeout(() => this.showSearchSuggestions(), 500);
                    return;
                }

                this.showTypingIndicator();

                this.isLoading = true;
                document
                    .getElementById("chat-ai-send")
                    .disabled = true;

                try {
                    const response = await fetch("/chat-ai", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            "Accept": "application/json"
                        },
                        body: JSON.stringify({message})
                    });

                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }

                    const data = await response.json();

                    this.removeTypingIndicator();

                    if (data.status === 'success') {
                        this.addMessage(data.reply, 'ai');
                    } else {
                        this.addMessage(
                            data.reply || 'Maaf, terjadi kesalahan. Silakan coba lagi.',
                            'ai'
                        );
                    }

                } catch (error) {
                    console.error('Chat error:', error);
                    this.removeTypingIndicator();

                    if (error.name === 'TypeError' && error.message.includes('Failed to fetch')) {
                        this.addMessage(
                            'Koneksi terputus. Periksa koneksi internet Anda atau coba refresh halaman.',
                            'ai'
                        );
                    } else {
                        this.addMessage(
                            'Maaf, sedang ada gangguan. Silakan coba lagi dalam beberapa saat.',
                            'ai'
                        );
                    }
                } finally {
                    this.isLoading = false;
                    document
                        .getElementById("chat-ai-send")
                        .disabled = false;
                    input.focus();

                    // setTimeout(() => this.showSearchSuggestions(), 1000);
                }
            }

            checkShortcuts(message) {
                const lowerMessage = message.toLowerCase();

                if (lowerMessage.includes('kontak') || lowerMessage.includes('hubungi') || lowerMessage.includes('email') || lowerMessage.includes('telepon')) {
                    return `📞 **Informasi Kontak Dimas:**\n
• **Telepon:** ${this.userProfile.phone}
• **Email:** ${this.userProfile.email}
• **LinkedIn:** ${this.userProfile.linkedin}
• **GitHub:** ${this.userProfile.github}
• **Lokasi:** ${this.userProfile.location}`;
                }

                if (lowerMessage.includes('pendidikan') || lowerMessage.includes('kuliah') || lowerMessage.includes('uns') || lowerMessage.includes('sebelas maret')) {
                    return `🎓 **Pendidikan Dimas:**\n
• **Institusi:** ${this.userProfile.education.institution}, ${this.userProfile.education.location}
• **Periode:** ${this.userProfile.education.period}
• **Jurusan:** ${this.userProfile.education.degree}
• **IPK:** ${this.userProfile.education.gpa}`;
                }

                if (lowerMessage.includes('skill') || lowerMessage.includes('teknologi') || lowerMessage.includes('kemampuan') || lowerMessage.includes('expertise') || lowerMessage.includes('vue') || lowerMessage.includes('laravel')) {
                    return `💻 **Skills & Teknologi Dimas:**\n
• **Frontend:** Vue.js, JavaScript, Bootstrap, UI/UX Design
• **Backend:** Laravel, PHP
• **Fullstack Development**
• **Tools:** Git, VS Code, Postman

*Teknologi utama: Vue.js, Laravel, PHP, JavaScript, Bootstrap*`;
                }

                if (lowerMessage.includes('proyek') || lowerMessage.includes('project') || lowerMessage.includes('portfolio') || lowerMessage.includes('aplikasi')) {
                    let response = "🚀 **Proyek yang Pernah Dikerjakan:**\n\n";

                    this
                        .userProfile
                        .projects
                        .forEach((project, index) => {
                            response += `**${project.name}** (${project.client})\n`;
                            response += `• Peran: ${project.role}\n`;
                            response += `• Periode: ${project.period}\n`;
                            response += `• Teknologi: ${project
                                .technologies
                                .join(', ')}\n`;
                            response += `• Deskripsi: ${project.description}\n\n`;
                        });

                    return response;
                }

                if (lowerMessage.includes('pengalaman') || lowerMessage.includes('kerja') || lowerMessage.includes('pengalaman kerja') || lowerMessage.includes('sirekap')) {
                    return `💼 **Pengalaman Kerja Dimas:**\n
• **Posisi:** ${this
                        .userProfile
                        .experience[0]
                        .role}
• **Perusahaan:** ${this
                        .userProfile
                        .experience[0]
                        .company}
• **Lokasi:** ${this
                        .userProfile
                        .experience[0]
                        .location}
• **Periode:** ${this
                        .userProfile
                        .experience[0]
                        .period}
• **Deskripsi:** ${this
                        .userProfile
                        .experience[0]
                        .description}`;
                }

                if (lowerMessage.includes('sertifikasi') || lowerMessage.includes('sertifikat') || lowerMessage.includes('certification') || lowerMessage.includes('bnsp')) {
                    return `📜 **Sertifikasi Dimas:**\n
• **Judul:** ${this.userProfile.certification.title}
• **Penerbit:** ${this.userProfile.certification.issuer}
• **Masa Berlaku:** ${this.userProfile.certification.period}`;
                }

                if (lowerMessage.includes('profil') || lowerMessage.includes('tentang saya') || lowerMessage.includes('tentang dimas') || lowerMessage.includes('siapa dimas')) {
                    return `👨‍💻 **Profil Profesional Dimas:**\n
Fresh Graduate D3 Teknik Informatika dengan IPK 3.88 dari Universitas Sebelas Maret. Memiliki keahlian dalam pengembangan aplikasi fullstack menggunakan Vue.js dan Laravel. Berpengalaman dalam mengembangkan sistem informasi untuk pemerintah daerah seperti aplikasi persuratan, monitoring, dan stunting.`;
                }

                if (lowerMessage.includes('semua') || lowerMessage.includes('semua info') || lowerMessage.includes('ringkasan')) {
                    return `📋 **Ringkasan Profil Dimas Wahyu Sulistyo:**\n
**🎓 Pendidikan:** D3 Teknik Informatika - UNS (IPK 3.88)
**💻 Skills:** Vue.js, Laravel, PHP, JavaScript, Bootstrap
**🚀 Proyek:** 
  • Aplikasi Persuratan Kecamatan Banjarsari (Frontend)
  • Aplikasi Monitoring DISKOMINFO Karanganyar (Frontend-UI/UX)  
  • Aplikasi Stunting DISKOMINFO Karanganyar (Fullstack)
**📞 Kontak:** ${this.userProfile.phone} | ${this.userProfile.email}
**📍 Lokasi:** ${this.userProfile.location}`;
                }

                return null;
            }

            addMessage(content, sender) {
                const chatBody = document.getElementById("chat-ai-body");
                const messageDiv = document.createElement('div');
                messageDiv.className = `chat-message ${sender}-message`;

                const avatar = document.createElement('div');
                avatar.className = 'message-avatar';

                const messageContent = document.createElement('div');
                messageContent.className = 'message-content';

                if (sender === 'user') {
                    avatar.innerHTML = '<i class="fas fa-user"></i>';
                    messageContent.innerHTML = `<p>${this.escapeHtml(content)}</p>`;
                    messageDiv.appendChild(messageContent);
                    messageDiv.appendChild(avatar);
                } else {
                    avatar.innerHTML = '<i class="fas fa-robot"></i>';
                    const formattedContent = this.formatProfileResponse(content);
                    messageContent.innerHTML = formattedContent;
                    messageDiv.appendChild(avatar);
                    messageDiv.appendChild(messageContent);
                }

                chatBody.appendChild(messageDiv);
                chatBody.scrollTop = chatBody.scrollHeight;
            }

            formatProfileResponse(text) {
                let formatted = this.escapeHtml(text);

                formatted = formatted.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

                formatted = formatted.replace(/\n/g, '<br>');
                formatted = formatted.replace(/•/g, '•');

                return `<p>${formatted}</p>`;
            }

            showTypingIndicator() {
                const chatBody = document.getElementById("chat-ai-body");
                const typingDiv = document.createElement('div');
                typingDiv.className = 'chat-message ai-message';
                typingDiv.id = 'typing-indicator';

                const avatar = document.createElement('div');
                avatar.className = 'message-avatar';
                avatar.innerHTML = '<i class="fas fa-robot"></i>';

                const typingContent = document.createElement('div');
                typingContent.className = 'typing-indicator';
                typingContent.innerHTML = `
            <div class="typing-dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        `;

                typingDiv.appendChild(avatar);
                typingDiv.appendChild(typingContent);
                chatBody.appendChild(typingDiv);
                chatBody.scrollTop = chatBody.scrollHeight;
            }

            removeTypingIndicator() {
                const typingIndicator = document.getElementById('typing-indicator');
                if (typingIndicator) {
                    typingIndicator.remove();
                }
            }

            escapeHtml(unsafe) {
                return unsafe
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;");
            }
        }

        const chatAI = new ChatAI();
        document.addEventListener('DOMContentLoaded', function () {});
    </script>
    <body>
        <div class="art-app">
            <div class="art-mobile-top-bar"></div>

            <div class="art-app-wrapper">
                <div class="art-app-container">
                    @include('layouts.sidebar')

                    <div class="art-content">
                        <div class="art-curtain"></div>

                        <div
                            class="art-top-bg"
                            style="background-image: url({{ asset('img/bg.jpg') }})">
                            <div class="art-top-bg-overlay"></div>
                        </div>

                        <div class="transition-fade" id="swup">
                            <div id="scrollbar" class="art-scroll-frame">
                                @yield('content')
                            </div>
                        </div>
                    </div>

                    @include('layouts.navbar')
                </div>
            </div>

            <div class="art-preloader">
                <div class="art-preloader-content">
                    <h4>Dimas Wahyu Sulistyo</h4>
                    <div id="preloader" class="art-preloader-load"></div>
                </div>
            </div>
        </div>

        <script src="/js/plugins/jquery.min.js"></script>
        <script src="/js/plugins/anime.min.js"></script>
        <script src="/js/plugins/swiper.min.js"></script>
        <script src="/js/plugins/progressbar.min.js"></script>
        <script src="/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="/js/plugins/overscroll.min.js"></script>
        <script src="/js/plugins/typing.min.js"></script>
        <script src="/js/plugins/isotope.min.js"></script>
        <script src="/js/plugins/fancybox.min.js"></script>
        <script src="/js/plugins/swup.min.js"></script>

        <script src="/js/main.js"></script>

        @stack('scripts')
    </body>
</html>