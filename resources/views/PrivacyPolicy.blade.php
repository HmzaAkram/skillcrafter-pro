<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillCrafter – Privacy Policy</title>
    <meta name="description" content="Learn about how SkillCrafter collects, uses, and protects your personal information on our AI-powered learning platform.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #8b5cf6;
            --accent: #06b6d4;
            --dark: #0f172a;
            --light: #f8fafc;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: var(--gray-700);
            background: var(--light);
            overflow-x: hidden;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--gray-100); }
        ::-webkit-scrollbar-thumb { background: var(--primary); border-radius: 4px; }

        .container { max-width: 1400px; margin: 0 auto; padding: 0 20px; }

        /* Animated background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.03;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            animation: float 20s infinite ease-in-out;
        }

        .shape-1 { width: 300px; height: 300px; top: 10%; left: 10%; animation-delay: -5s; }
        .shape-2 { width: 200px; height: 200px; top: 70%; right: 20%; animation-delay: -10s; }
        .shape-3 { width: 150px; height: 150px; bottom: 30%; left: 60%; animation-delay: -15s; }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-30px) rotate(120deg); }
            66% { transform: translateY(20px) rotate(240deg); }
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--gray-200);
            transition: all 0.3s ease;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .navbar-brand {
            font-size: 2rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-link {
            color: var(--gray-700);
            font-weight: 500;
            font-size: 1rem;
            text-decoration: none;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary);
            transform: translateY(-2px);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .cta-button {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: #fff;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
            border: none;
            cursor: pointer;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.4);
        }

        .navbar-toggler {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .privacy-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 6rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .privacy-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
            animation: slide 20s linear infinite;
        }

        @keyframes slide {
            0% { transform: translate(0, 0); }
            100% { transform: translate(60px, 60px); }
        }

        .privacy-header h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            color: #fff;
            margin-bottom: 1.5rem;
            opacity: 0;
            animation: fadeInUp 1s ease 0.3s forwards;
        }

        .privacy-header p {
            font-size: clamp(1.1rem, 2.5vw, 1.4rem);
            color: rgba(255, 255, 255, 0.9);
            max-width: 700px;
            margin: 0 auto 1rem;
            opacity: 0;
            animation: fadeInUp 1s ease 0.6s forwards;
        }

        .last-updated {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
            opacity: 0;
            animation: fadeInUp 1s ease 0.9s forwards;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Main Content */
        .privacy-content {
            padding: 4rem 0;
            background: #fff;
            position: relative;
        }

        .privacy-nav {
            background: var(--gray-50);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 3rem;
            border: 1px solid var(--gray-200);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .privacy-nav h3 {
            color: var(--gray-800);
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .nav-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 0.5rem;
        }

        .nav-links a {
            color: var(--gray-600);
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .nav-links a:hover {
            background: var(--primary);
            color: #fff;
            transform: translateX(5px);
        }

        .policy-section {
            margin-bottom: 3rem;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
            background: #fff;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--gray-100);
            position: relative;
            overflow: hidden;
        }

        .policy-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .policy-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 0 2px 2px 0;
        }

        .policy-section h2 {
            font-size: clamp(1.75rem, 4vw, 2.2rem);
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .section-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .policy-section p {
            font-size: 1.1rem;
            color: var(--gray-600);
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .policy-section ul {
            list-style: none;
            padding: 0;
        }

        .policy-section ul li {
            margin-bottom: 1rem;
            color: var(--gray-700);
            position: relative;
            padding-left: 2rem;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .policy-section ul li::before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 0;
            color: var(--primary);
            font-weight: 700;
            width: 20px;
            height: 20px;
            background: rgba(99, 102, 241, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
        }

        .policy-section ul li a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .policy-section ul li a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .contact-card {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: #fff;
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            margin-top: 3rem;
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
        }

        .contact-card h3 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .contact-card p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .contact-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .contact-btn {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 0.75rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .contact-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: #fff;
            padding: 3rem 0;
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--primary), transparent);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
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
            color: #cbd5e1;
            text-decoration: none;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: var(--primary);
            transform: translateX(5px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid var(--gray-800);
            font-size: 0.95rem;
            color: #94a3b8;
        }

        .footer-bottom a {
            color: var(--primary);
            text-decoration: none;
        }

        .footer-bottom a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                flex-direction: column;
                width: 100%;
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(20px);
                padding: 2rem;
                position: absolute;
                top: 100%;
                left: 0;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                border-radius: 0 0 20px 20px;
            }

            .nav-menu.active {
                display: flex;
            }

            .navbar-toggler {
                display: block;
            }

            .auth-buttons {
                flex-direction: column;
                width: 100%;
                gap: 1rem;
                margin-top: 1rem;
            }

            .privacy-header {
                padding: 4rem 0;
            }

            .policy-section {
                padding: 2rem;
                margin-bottom: 2rem;
            }

            .section-icon {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }

            .policy-section h2 {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }

            .contact-buttons {
                flex-direction: column;
            }
        }

        /* Scroll to top button */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: #fff;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            box-shadow: 0 5px 20px rgba(99, 102, 241, 0.3);
            transform: translateY(100px);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .scroll-top.visible {
            transform: translateY(0);
        }

        .scroll-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.4);
        }
    </style>
</head>
<body>
    <div class="animated-bg">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
    </div>

    <header>
        <nav class="navbar container">
            <a class="navbar-brand" href="/">SkillCrafter</a>
            <button class="navbar-toggler" onclick="document.querySelector('.nav-menu').classList.toggle('active')">
                <i class="bi bi-list"></i>
            </button>
            <div class="nav-menu">
                <a class="nav-link" href="#about">About</a>
                <a class="nav-link" href="#features">Features</a>
                <a class="nav-link" href="#courses">Courses</a>
                <a class="nav-link" href="#notes">Notes</a>
                <a class="nav-link" href="#how-it-works">How It Works</a>
                <a class="nav-link" href="#community">Community</a>
            </div>
            <div class="auth-buttons">
                <a href="#register" class="cta-button">Get Started</a>
                <a href="#login" class="cta-button">Login</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="privacy-header">
            <div class="container">
                <h1>Privacy Policy</h1>
                <p>Learn how we collect, use, and protect your personal information on SkillCrafter.</p>
                <p class="last-updated"><strong>Effective Date:</strong> September 26, 2025</p>
            </div>
        </section>

        <section class="privacy-content container">
            <div class="privacy-nav">
                <h3>Quick Navigation</h3>
                <div class="nav-links">
                    <a href="#introduction">Introduction</a>
                    <a href="#information-collect">Information We Collect</a>
                    <a href="#how-we-use">How We Use Your Information</a>
                    <a href="#data-sharing">Data Sharing & Disclosure</a>
                    <a href="#data-security">Data Security</a>
                    <a href="#your-rights">Your Rights & Choices</a>
                    <a href="#cookies">Cookie Policy</a>
                    <a href="#changes">Changes to Policy</a>
                </div>
            </div>

            <div class="policy-section" id="introduction">
                <h2>
                    <div class="section-icon"><i class="bi bi-info-circle"></i></div>
                    Introduction
                </h2>
                <p>Establishing trust with our users is fundamental at SkillCrafter. This Privacy Policy outlines how we collect, use, disclose, and protect your personal information when you use our AI-powered learning platform. By accessing or using SkillCrafter, you agree to the practices described in this policy.</p>
            </div>

            <div class="policy-section" id="information-collect">
                <h2>
                    <div class="section-icon"><i class="bi bi-collection"></i></div>
                    Information We Collect
                </h2>
                <p>Collecting data enables us to personalize your learning experience and improve our services.</p>
                <ul>
                    <li><strong>Personal Information:</strong> We collect names, email addresses, and educational preferences when you register or interact with our platform.</li>
                    <li><strong>Usage Data:</strong> We gather information on how you use the platform, including course selections, progress tracking, and interaction with the AI chatbot.</li>
                    <li><strong>Technical Data:</strong> This includes IP addresses, browser types, and device information to optimize performance and security.</li>
                </ul>
            </div>

            <div class="policy-section" id="how-we-use">
                <h2>
                    <div class="section-icon"><i class="bi bi-gear"></i></div>
                    How We Use Your Information
                </h2>
                <p>Utilizing your data responsibly enhances your learning journey.</p>
                <ul>
                    <li>Providing personalized course recommendations and adaptive learning paths.</li>
                    <li>Improving platform functionality and AI algorithms based on usage patterns.</li>
                    <li>Communicating updates, educational content, and support services via email.</li>
                </ul>
            </div>

            <div class="policy-section" id="data-sharing">
                <h2>
                    <div class="section-icon"><i class="bi bi-share"></i></div>
                    Data Sharing and Disclosure
                </h2>
                <p>Protecting your privacy is our priority; we share data only under specific conditions.</p>
                <ul>
                    <li>With your consent, for third-party educational tools or services.</li>
                    <li>To comply with legal obligations or protect against fraud or security threats.</li>
                    <li>With service providers (e.g., cloud hosting) under strict confidentiality agreements.</li>
                </ul>
            </div>

            <div class="policy-section" id="data-security">
                <h2>
                    <div class="section-icon"><i class="bi bi-shield-check"></i></div>
                    Data Security
                </h2>
                <p>Implementing robust measures ensures your information remains safe.</p>
                <ul>
                    <li>Using encryption to secure data transmission and storage.</li>
                    <li>Regularly updating security protocols to address potential vulnerabilities.</li>
                    <li>Limiting access to personal data to authorized personnel only.</li>
                </ul>
            </div>

            <div class="policy-section" id="your-rights">
                <h2>
                    <div class="section-icon"><i class="bi bi-person-check"></i></div>
                    Your Rights and Choices
                </h2>
                <p>Empowering you with control over your data is essential.</p>
                <ul>
                    <li>Request access to or deletion of your personal information by contacting us at <a href="mailto:privacy@skillcrafter.com">privacy@skillcrafter.com</a>.</li>
                    <li>Opt out of non-essential communications by adjusting your account settings.</li>
                    <li>Review and update your preferences at any time via your dashboard.</li>
                </ul>
            </div>

            <div class="policy-section" id="cookies">
                <h2>
                    <div class="section-icon"><i class="bi bi-cookie"></i></div>
                    Cookie Policy
                </h2>
                <p>Tracking your preferences improves your experience.</p>
                <ul>
                    <li>We use cookies to remember login details and track usage for analytics.</li>
                    <li>You can manage cookie preferences through your browser settings.</li>
                </ul>
            </div>

            <div class="policy-section" id="changes">
                <h2>
                    <div class="section-icon"><i class="bi bi-arrow-clockwise"></i></div>
                    Changes to This Policy
                </h2>
                <p>Keeping you informed about updates is important.</p>
                <ul>
                    <li>We may update this Privacy Policy to reflect changes in our practices or legal requirements.</li>
                    <li>Updates will be posted here with the revised effective date.</li>
                </ul>
            </div>

            <div class="contact-card">
                <h3>Need Help or Have Questions?</h3>
                <p>We're here to help! Reach out to us anytime for support or inquiries about your privacy.</p>
                <div class="contact-buttons">
                    <a href="mailto:privacy@skillcrafter.com" class="contact-btn">
                        <i class="bi bi-envelope"></i> Email Us
                    </a>
                    <a href="#" class="contact-btn">
                        <i class="bi bi-chat-dots"></i> Live Chat
                    </a>
                </div>
                <p style="margin-top: 1.5rem; font-size: 0.95rem; opacity: 0.9;">
                    <i class="bi bi-geo-alt"></i> SkillCrafter, 123 Learning Lane, EduCity, PK
                </p>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>SkillCrafter</h3>
                    <p>Empowering learners worldwide with AI-powered skill development and personalized learning experiences.</p>
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
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#careers">Careers</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="#privacy">Privacy Policy</a></li>
                        <li><a href="#terms">Terms of Service</a></li>
                        <li><a href="#gdpr">GDPR</a></li>
                        <li><a href="#ccpa">CCPA</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 SkillCrafter. All rights reserved. Built with ❤️ for learners worldwide.</p>
            </div>
        </div>
    </footer>

    <button class="scroll-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <i class="bi bi-arrow-up"></i>
    </button>

    <script>
        // Intersection Observer for animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.policy-section').forEach(section => {
            observer.observe(section);
        });

        // Scroll to top button visibility
        const scrollTopBtn = document.querySelector('.scroll-top');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Header scroll effect
        let lastScrollTop = 0;
        const header = document.querySelector('header');
        
        window.addEventListener('scroll', () => {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop) {
                header.style.transform = 'translateY(-100%)';
            } else {
                header.style.transform = 'translateY(0)';
            }
            lastScrollTop = scrollTop;
        });

        // Add click effects to buttons
        document.querySelectorAll('.cta-button, .contact-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(255, 255, 255, 0.3)';
                ripple.style.transform = 'scale(0)';
                ripple.style.animation = 'ripple 600ms linear';
                ripple.style.pointerEvents = 'none';
                
                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add ripple keyframes
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

        // Progressive enhancement for reduced motion
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            document.querySelectorAll('*').forEach(element => {
                element.style.animationDuration = '0.01s !important';
                element.style.animationDelay = '0s !important';
                element.style.transitionDuration = '0.01s !important';
                element.style.transitionDelay = '0s !important';
            });
        }
    </script>
</body>
</html>