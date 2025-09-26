<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillCrafter – AI‑Powered Skill Builder</title>
    <meta name="description" content="Master any skill with AI-powered personalized learning paths, adaptive exercises, and real-time feedback.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            --success-gradient: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            --shadow-primary: 0 20px 60px rgba(102, 126, 234, 0.15);
            --shadow-hover: 0 30px 80px rgba(102, 126, 234, 0.25);
            --border-radius-lg: 20px;
            --border-radius-xl: 30px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            list-style: none;
            padding-left: 0;
            flex-wrap: wrap;
            gap: 8px;
        }

        .pagination li {
            margin: 0;
        }

        .pagination li a,
        .pagination li span {
            color: #667eea;
            padding: 8px 20px;
            text-decoration: none;
            border: 2px solid #667eea;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: inline-block;
            background-color: transparent;
            position: relative;
            overflow: hidden;
        }

        .pagination li a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--primary-gradient);
            transition: left 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: -1;
        }

        .pagination li a:hover::before {
            left: 0;
        }

        .pagination li.active span {
            background: var(--primary-gradient);
            color: #fff;
            border-color: transparent;
            box-shadow: var(--shadow-primary);
        }

        .pagination li a:hover {
            color: #fff;
            transform: translateY(-3px);
            box-shadow: var(--shadow-primary);
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif;
            line-height: 1.7;
            color: #2d3748;
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            overflow-x: hidden;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 15px;
        }

        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        header.scrolled {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
            background: rgba(255, 255, 255, 0.9);
        }

        nav.navbar {
            padding: 0.8rem 0;
        }

        .navbar-brand {
            font-size: clamp(1.5rem, 4vw, 1.75rem);
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-brand::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 3px;
            background: var(--primary-gradient);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform: translateX(-50%);
        }

        .navbar-brand:hover::after {
            width: 100%;
        }

        .navbar-nav {
            gap: 2rem;
        }

        .nav-link {
            color: #4a5568;
            font-weight: 600;
            font-size: clamp(0.9rem, 2.5vw, 1.1rem);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            padding: 0.5rem 0 !important;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary-gradient);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform: translateX(-50%);
        }

        .nav-link:hover {
            color: #667eea;
            transform: translateY(-2px);
        }

        .nav-link:hover::before {
            width: 100%;
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .cta-button {
            background: var(--primary-gradient);
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: var(--border-radius-xl);
            font-weight: 600;
            font-size: clamp(0.85rem, 2vw, 0.95rem);
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-primary);
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--secondary-gradient);
            transition: left 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: -1;
        }

        .cta-button:hover::before {
            left: 0;
        }

        .cta-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: var(--shadow-hover);
            color: #fff;
        }

        .navbar-toggler {
            border: none;
            padding: 0.25rem;
            font-size: 1.25rem;
            position: relative;
        }

        .navbar-toggler-icon {
            background-image: none;
            width: 28px;
            height: 3px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 3px;
            position: relative;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after {
            content: '';
            position: absolute;
            width: 28px;
            height: 3px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 3px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .navbar-toggler-icon::before {
            top: -10px;
        }

        .navbar-toggler-icon::after {
            top: 10px;
        }

        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
            background: transparent;
        }

        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::before {
            transform: rotate(45deg);
            top: 0;
        }

        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::after {
            transform: rotate(-45deg);
            top: 0;
        }

        .hero {
            background: linear-gradient(135deg, 
                rgba(102, 126, 234, 0.1) 0%, 
                rgba(118, 75, 162, 0.1) 50%, 
                rgba(240, 147, 251, 0.1) 100%);
            padding: clamp(60px, 12vw, 120px) 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 25% 25%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(240, 147, 251, 0.1) 0%, transparent 50%),
                linear-gradient(45deg, transparent 40%, rgba(255, 255, 255, 0.1) 50%, transparent 60%);
            animation: heroAnimation 20s ease-in-out infinite;
        }

        @keyframes heroAnimation {
            0%, 100% { transform: translateX(0) translateY(0) rotate(0deg); }
            25% { transform: translateX(20px) translateY(-10px) rotate(1deg); }
            50% { transform: translateX(-10px) translateY(20px) rotate(-1deg); }
            75% { transform: translateX(30px) translateY(10px) rotate(0.5deg); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 800;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, #2d3748 0%, #4a5568 50%, #667eea 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.2;
            text-shadow: none;
            animation: textReveal 1s ease-out;
        }

        @keyframes textReveal {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero p {
            font-size: clamp(1.1rem, 3vw, 1.4rem);
            margin-bottom: 3rem;
            color: #718096;
            max-width: 90%;
            margin-left: auto;
            margin-right: auto;
            font-weight: 400;
            animation: textReveal 1s ease-out 0.3s both;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 3rem;
            animation: textReveal 1s ease-out 0.6s both;
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            color: #2d3748;
            padding: 0.75rem 1.5rem;
            border: 2px solid rgba(102, 126, 234, 0.3);
            border-radius: var(--border-radius-xl);
            font-weight: 600;
            font-size: clamp(0.9rem, 2vw, 1rem);
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .btn-secondary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--primary-gradient);
            transition: left 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: -1;
        }

        .btn-secondary:hover::before {
            left: 0;
        }

        .btn-secondary:hover {
            border-color: transparent;
            color: #fff;
            transform: translateY(-5px) scale(1.05);
            box-shadow: var(--shadow-primary);
        }

        .features {
            padding: clamp(60px, 10vw, 100px) 0;
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            position: relative;
        }

        .features::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(102, 126, 234, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(240, 147, 251, 0.05) 0%, transparent 50%);
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
            z-index: 2;
        }

        .section-header h2 {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #2d3748 0%, #667eea 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-header p {
            font-size: clamp(1rem, 2.5vw, 1.2rem);
            color: #718096;
            max-width: 90%;
            margin: 0 auto;
            font-weight: 400;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            position: relative;
            z-index: 2;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            padding: 2.5rem;
            border-radius: var(--border-radius-lg);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, 
                rgba(102, 126, 234, 0.05) 0%, 
                rgba(240, 147, 251, 0.05) 100%);
            transition: left 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: -1;
        }

        .feature-card:hover::before {
            left: 0;
        }

        .feature-card:hover {
            transform: translateY(-20px) scale(1.02);
            box-shadow: 0 40px 80px rgba(102, 126, 234, 0.15);
            border-color: rgba(102, 126, 234, 0.2);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: #fff;
            box-shadow: var(--shadow-primary);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(10deg);
            background: var(--secondary-gradient);
        }

        .feature-card h3 {
            font-size: clamp(1.2rem, 2.5vw, 1.5rem);
            font-weight: 700;
            margin-bottom: 1rem;
            color: #2d3748;
        }

        .feature-card p {
            color: #718096;
            font-size: clamp(0.9rem, 1.8vw, 1rem);
            line-height: 1.6;
        }

        .how-it-works {
            padding: clamp(60px, 10vw, 100px) 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .how-it-works::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 30% 70%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            animation: backgroundFloat 15s ease-in-out infinite;
        }

        @keyframes backgroundFloat {
            0%, 100% { transform: translateX(0) translateY(0); }
            25% { transform: translateX(10px) translateY(-20px); }
            50% { transform: translateX(-20px) translateY(10px); }
            75% { transform: translateX(20px) translateY(-10px); }
        }

        .how-it-works .section-header h2 {
            color: #fff;
            background: none;
            -webkit-text-fill-color: #fff;
        }

        .how-it-works .section-header p {
            color: rgba(255, 255, 255, 0.9);
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
            position: relative;
            z-index: 2;
        }

        .step {
            text-align: center;
            position: relative;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-lg);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .step:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.5rem;
            margin: 0 auto 1.5rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .step:hover .step-number {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1) rotate(10deg);
        }

        .step h3 {
            font-size: clamp(1.2rem, 2.5vw, 1.4rem);
            font-weight: 700;
            margin-bottom: 1rem;
            color: #fff;
        }

        .step p {
            color: rgba(255, 255, 255, 0.9);
            font-size: clamp(0.9rem, 1.8vw, 1rem);
            line-height: 1.6;
        }

        .cta-section {
            background: var(--dark-gradient);
            color: #ffffff;
            padding: clamp(60px, 10vw, 100px) 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 20%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(240, 147, 251, 0.1) 0%, transparent 50%);
        }

        .cta-section h2 {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
        }

        .cta-section p {
            font-size: clamp(1rem, 2.5vw, 1.2rem);
            margin-bottom: 2rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        footer {
            background: var(--dark-gradient);
            color: #cbd5e0;
            padding: clamp(3rem, 6vw, 4rem) 0 clamp(1.5rem, 3vw, 2rem);
            position: relative;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-size: clamp(1.1rem, 2.5vw, 1.3rem);
            font-weight: 700;
            margin-bottom: 1rem;
            color: #ffffff;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.75rem;
        }

        .footer-section ul li a {
            color: #cbd5e0;
            text-decoration: none;
            font-size: clamp(0.9rem, 1.8vw, 1rem);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .footer-section ul li a::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-gradient);
            transition: width 0.3s ease;
        }

        .footer-section ul li a:hover::before {
            width: 100%;
        }

        .footer-section ul li a:hover {
            color: #667eea;
            transform: translateX(5px);
        }

        .footer-bottom {
            border-top: 1px solid #4a5568;
            padding-top: 1.5rem;
            text-align: center;
            color: #a0aec0;
            font-size: clamp(0.8rem, 1.8vw, 0.9rem);
        }

        .chatbot-toggle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: clamp(60px, 12vw, 70px);
            height: clamp(60px, 12vw, 70px);
            background: var(--primary-gradient);
            box-shadow: var(--shadow-primary);
            border-radius: 50%;
            z-index: 1050;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            align-items: center;
            justify-content: center;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: var(--shadow-primary); }
            50% { box-shadow: var(--shadow-hover); }
            100% { box-shadow: var(--shadow-primary); }
        }

        .chatbot-toggle:hover {
            transform: scale(1.1) rotate(10deg);
            background: var(--secondary-gradient);
        }

        .chatbot-panel {
            position: fixed;
            bottom: clamp(100px, 18vw, 120px);
            right: 30px;
            width: clamp(320px, 90%, 450px);
            max-height: 70vh;
            border-radius: var(--border-radius-lg);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            overflow: hidden;
            z-index: 1050;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            flex-direction: column;
        }

        .chatbot-panel.hidden {
            opacity: 0;
            transform: translateY(30px) scale(0.95);
            pointer-events: none;
        }

        .chatbot-header {
            background: var(--primary-gradient);
            color: #fff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-shrink: 0;
        }

        .chatbot-messages {
            flex: 1;
            background: rgba(248, 250, 252, 0.8);
            overflow-y: auto;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            min-height: 0;
        }

        .chat-message {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 0.75rem 1rem;
            margin-bottom: 0.75rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            font-size: clamp(0.9rem, 1.8vw, 1rem);
            max-width: 85%;
            align-self: flex-start;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .chat-message:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .chat-message.user {
            align-self: flex-end;
            background: var(--primary-gradient);
            color: #fff;
            border-color: rgba(255, 255, 255, 0.2);
        }

        .chatbot-input {
            display: flex;
            padding: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            flex-shrink: 0;
            gap: 0.75rem;
        }

        .chatbot-input input {
            border-radius: var(--border-radius-xl);
            border: 1px solid rgba(102, 126, 234, 0.3);
            flex-grow: 1;
            padding: 0.75rem 1.25rem;
            font-size: clamp(0.9rem, 1.8vw, 1rem);
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .chatbot-input input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            background: rgba(255, 255, 255, 0.95);
        }

        .chatbot-input button {
            background: var(--primary-gradient);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            font-size: 1.1rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
        }

        .chatbot-input button:hover {
            transform: scale(1.1) rotate(10deg);
            background: var(--secondary-gradient);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
        }

        .modal-content {
            border-radius: var(--border-radius-lg);
            border: none;
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.15);
        }

        .modal-header {
            background: var(--primary-gradient);
            color: #fff;
            border-top-left-radius: var(--border-radius-lg);
            border-top-right-radius: var(--border-radius-lg);
            padding: 1.5rem;
        }

        .modal-body {
            padding: 2rem;
        }

        .modal-body input,
        .modal-body textarea {
            border-radius: 12px;
            border: 2px solid rgba(102, 126, 234, 0.2);
            padding: 0.75rem 1rem;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            font-size: clamp(0.9rem, 1.8vw, 1rem);
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }

        .modal-body input:focus,
        .modal-body textarea:focus {
            border-color: #667eea;
            outline: none;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            background: rgba(255, 255, 255, 0.95);
            transform: translateY(-2px);
        }

        .modal-footer {
            padding: 1.5rem 2rem;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .modal-footer .btn {
            border-radius: var(--border-radius-xl);
            padding: 0.75rem 2rem;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        .modal-footer .btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        }

        /* Advanced Hover Effects */
        .feature-card::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: var(--primary-gradient);
            border-radius: var(--border-radius-lg);
            z-index: -2;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .feature-card:hover::after {
            opacity: 1;
        }

        /* Enhanced Typing Animation */
        .typing-dot {
            height: 8px;
            width: 8px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: var(--primary-gradient);
            display: inline-block;
            margin-left: 3px;
            animation: typingAnimation 1.4s infinite ease-in-out both;
        }

        .typing-dot:nth-child(1) { animation-delay: -0.32s; }
        .typing-dot:nth-child(2) { animation-delay: -0.16s; }

        @keyframes typingAnimation {
            0%, 80%, 100% { 
                transform: scale(0);
            } 40% { 
                transform: scale(1);
            }
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-gradient);
        }

        /* Enhanced Responsive Design */
        @media (max-width: 576px) {
            .navbar-nav {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(20px);
                padding: 1rem 0;
                text-align: center;
                border-radius: var(--border-radius-lg);
                margin-top: 0.5rem;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            }
            .navbar-nav .nav-item {
                margin: 0.5rem 0;
            }
            .auth-buttons {
                flex-direction: column;
                align-items: center;
                gap: 0.75rem;
                padding: 1rem 0;
            }
            .navbar-brand {
                font-size: clamp(1.2rem, 4vw, 1.4rem);
            }
            .navbar-collapse {
                padding: 0;
                margin-top: 0;
            }
            .hero {
                padding: clamp(40px, 8vw, 60px) 0;
            }
            .hero-buttons {
                flex-direction: column;
                gap: 1rem;
            }
            .chatbot-panel {
                bottom: clamp(80px, 15vw, 100px);
                width: 95%;
                right: 2.5%;
            }
            .features-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .steps {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .navbar-collapse {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(20px);
                padding: 1rem 0;
                margin-top: 0.5rem;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                border-radius: var(--border-radius-lg);
            }
            .navbar-nav {
                flex-direction: column;
                align-items: center;
            }
            .auth-buttons {
                flex-direction: column;
                align-items: center;
                gap: 0.75rem;
            }
            .hero-buttons {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
            .chatbot-panel {
                width: clamp(320px, 90%, 400px);
            }
        }

        @media (min-width: 769px) and (max-width: 992px) {
            .container {
                padding: 0 20px;
            }
            .navbar-nav {
                gap: 1.5rem;
            }
            .features-grid, .steps {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }
        }

        @media (min-width: 993px) {
            .navbar-nav {
                flex-direction: row;
            }
            .auth-buttons {
                flex-direction: row;
            }
        }

        /* Enhanced Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-60px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(60px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .fade-in-left {
            animation: fadeInLeft 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .fade-in-right {
            animation: fadeInRight 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(60px);
            transition: all 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }

        /* Performance Optimizations */
        .feature-card,
        .step,
        .chat-message,
        .cta-button,
        .btn-secondary {
            will-change: transform;
        }

        .hero::before,
        .features::before,
        .how-it-works::before,
        .cta-section::before {
            will-change: transform;
        }

        /* Dark Mode Support */
        @media (prefers-color-scheme: dark) {
            body {
                background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
                color: #e2e8f0;
            }
            
            header {
                background: rgba(26, 32, 44, 0.95);
                border-bottom-color: rgba(255, 255, 255, 0.1);
            }
            
            .feature-card {
                background: rgba(45, 55, 72, 0.8);
                border-color: rgba(255, 255, 255, 0.1);
            }
            
            .chatbot-panel {
                background: rgba(45, 55, 72, 0.95);
            }
            
            .modal-content {
                background: rgba(45, 55, 72, 0.95);
            }
        }
    </style>
</head>
<body x-data="{ 
    chatbotOpen: false, 
    newMessage: '' 
}" @keydown.escape="chatbotOpen = false">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="/">SkillCrafter</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('features') }}">Features</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('courses.index') }}">Courses</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('notes.index') }}">Notes</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('how-it-works') }}">How It Works</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('community') }}">Community</a></li>
                    </ul>
                    <div class="auth-buttons">
                        @auth
                            @if(auth()->user()->role === 'admin')
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-primary cta-button">Admin Panel</a>
                            @endif
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center"
                                        style="width:40px; height:40px;" data-bs-toggle="dropdown">
                                    <i class="bi bi-person-circle fs-5"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow">
                                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('certifications.index') }}">Certifications</a></li>
                                </ul>
                            </div>
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-primary cta-button">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-sm btn-primary cta-button">Register</a>
                            <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary cta-button">Login</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>SkillCrafter</h3>
                    <p>Empowering learners worldwide with AI-powered skill development.</p>
                </div>
                <div class="footer-section">
                    <h3>Product</h3>
                    <ul>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#integrations">Integrations</a></li>
                        <li><a href="#api">API</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="#careers">Careers</a></li>
                        <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 SkillCrafter. All rights reserved. | 
                    <a href="#privacy" style="color: #9ca3af;">Privacy Policy</a> | 
                    <a href="#terms" style="color: #9ca3af;">Terms of Service</a>
                </p>
            </div>
        </div>

        <!-- Contact Modal -->
        <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 shadow-lg">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" name="subject" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea name="message" class="form-control" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn text-white" style="background: var(--primary-gradient);">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <!-- Chatbot Toggle Button -->
    <div class="chatbot-toggle d-flex align-items-center justify-content-center" @click="chatbotOpen = !chatbotOpen">
        <i class="bi bi-chat-dots-fill fs-3 text-white"></i>
    </div>

    <!-- Chatbot Panel -->
    <div class="chatbot-panel" :class="{ 'hidden': !chatbotOpen }" x-data="chatbot()" x-init="init()">
        <div class="chatbot-header">
            <div class="d-flex align-items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/4712/4712109.png" width="30" height="30" class="me-2 rounded-circle">
                <div>
                    <h6 class="mb-0">TalkToText AI</h6>
                    <small class="opacity-75">Online • Here to assist</small>
                </div>
            </div>
            <button class="btn-close btn-close-white" @click="chatbotOpen = false"></button>
        </div>
        <div class="chatbot-messages" x-ref="messages">
            <template x-for="(message, index) in messages" :key="index">
                <div class="chat-message" :class="{ 'user': message.isUser }" x-transition>
                    <p x-text="message.text"></p>
                    <small class="text-muted d-block text-end" x-text="message.time"></small>
                </div>
            </template>
            <div class="chat-message bot" x-show="isTyping" x-transition>
                <p><span class="typing-dot"></span><span class="typing-dot"></span><span class="typing-dot"></span></p>
            </div>
        </div>
        <form class="chatbot-input" @submit.prevent="sendMessage">
            <input type="text" class="form-control" placeholder="Ask me anything..." x-model="newMessage" x-ref="inputField" @input="checkInput">
            <button type="submit"><i class="bi bi-send-fill"></i></button>
        </form>
    </div>

    <script>
        function chatbot() {
    return {
        messages: [
            { text: "Yo! What's up? How can I help you level up your skills today? Need course suggestions, learning path advice, or help tracking your progress? Let me know what's on your mind!", time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }), isUser: false }
        ],
        newMessage: "",
        isTyping: false,
        init() {
            this.scrollToBottom();
        },
        scrollToBottom() {
            this.$nextTick(() => {
                const el = this.$refs.messages;
                if (el) el.scrollTop = el.scrollHeight;
            });
        },
        sendMessage() {
            if (!this.newMessage.trim()) return;
            this.messages.push({
                text: this.newMessage,
                time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
                isUser: true
            });
            const userMessage = this.newMessage;
            this.newMessage = "";
            this.$refs.inputField.focus();
            this.scrollToBottom();
            this.isTyping = true;
            fetch("/chatbot/handle", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ message: userMessage })
            })
            .then(res => res.json())
            .then(data => {
                this.messages.push({
                    text: data.text || "Sorry, no response from server.",
                    time: data.time || new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
                    isUser: false
                });
                this.scrollToBottom();
            })
            .catch(() => {
                this.messages.push({
                    text: "Error: Could not connect to server.",
                    time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
                    isUser: false
                });
                this.scrollToBottom();
            })
            .finally(() => {
                this.isTyping = false;
                this.$refs.inputField.focus();
            });
        }
    };
}

        // Enhanced smooth scrolling for navigation links
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

        // Enhanced header scroll effect with glassmorphism
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            const scrolled = window.scrollY > 100;
            
            if (scrolled) {
                header.style.background = 'rgba(255, 255, 255, 0.85)';
                header.style.backdropFilter = 'blur(20px)';
                header.classList.add('scrolled');
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(20px)';
                header.classList.remove('scrolled');
            }
        });

        // Enhanced scroll animations with staggered delays
        const observerOptions = { 
            threshold: 0.1, 
            rootMargin: '0px 0px -50px 0px' 
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animated');
                    }, index * 100);
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

        // Enhanced interactive hover effects with performance optimization
        document.querySelectorAll('.feature-card').forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
            
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-20px) scale(1.02) rotateY(5deg)';
                card.style.transition = 'all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0) scale(1) rotateY(0deg)';
            });
        });

        // Enhanced CTA button tracking with analytics
        document.querySelectorAll('.cta-button').forEach(button => {
            button.addEventListener('click', (e) => {
                console.log('CTA clicked:', {
                    text: e.target.textContent,
                    timestamp: new Date().toISOString(),
                    position: e.target.getBoundingClientRect()
                });
                
                // Add click ripple effect
                const ripple = document.createElement('span');
                const rect = e.target.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(255, 255, 255, 0.5)';
                ripple.style.transform = 'scale(0)';
                ripple.style.animation = 'ripple 0.6s linear';
                ripple.style.pointerEvents = 'none';
                
                e.target.style.position = 'relative';
                e.target.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add ripple animation keyframes
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Enhanced parallax effects for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.hero::before');
            if (parallax) {
                const speed = scrolled * 0.5;
                parallax.style.transform = `translateY(${speed}px)`;
            }
        });

        // Performance optimization: Reduce motion for users who prefer it
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            document.documentElement.style.setProperty('--animation-duration', '0.01ms');
        }
    </script>
</body>
</html>