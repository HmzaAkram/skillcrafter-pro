<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillCrafter – Terms of Service</title>
    <meta name="description" content="Review the Terms of Service for using SkillCrafter, our AI-powered learning platform.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f5f6fa;
            overflow-x: hidden;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: #fff;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: #007bff;
            text-decoration: none;
        }

        .navbar-brand:hover {
            color: #0056b3;
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-link {
            color: #333;
            font-weight: 500;
            font-size: 1rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #007bff;
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .cta-button {
            background: #007bff;
            color: #fff;
            padding: 0.5rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.95rem;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .cta-button:hover {
            background: #0056b3;
        }

        .navbar-toggler {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Main Content */
        .terms-header {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            padding: 4rem 0;
            text-align: center;
        }

        .terms-header h1 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
            color: #1c2526;
            margin-bottom: 1rem;
        }

        .terms-header p {
            font-size: clamp(1rem, 2.5vw, 1.25rem);
            color: #495057;
            max-width: 700px;
            margin: 0 auto;
        }

        .terms-content {
            padding: 3rem 0;
            background: #fff;
        }

        .terms-section {
            margin-bottom: 2rem;
        }

        .terms-section h2 {
            font-size: clamp(1.75rem, 4vw, 2.5rem);
            font-weight: 600;
            color: #007bff;
            margin-bottom: 1rem;
        }

        .terms-section p {
            font-size: 1rem;
            color: #6c757d;
            margin-bottom: 1rem;
        }

        .terms-section ul {
            list-style-type: disc;
            padding-left: 2rem;
        }

        .terms-section ul li {
            margin-bottom: 0.5rem;
            color: #495057;
        }

        .terms-section ul li a {
            color: #007bff;
            text-decoration: none;
        }

        .terms-section ul li a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background: #1c2526;
            color: #fff;
            padding: 2rem 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: #adb5bd;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .footer-section ul li a:hover {
            color: #007bff;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 1rem;
            border-top: 1px solid #495057;
            font-size: 0.85rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                flex-direction: column;
                width: 100%;
                background: #fff;
                padding: 1rem;
                position: absolute;
                top: 100%;
                left: 0;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
                gap: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar container">
            <a class="navbar-brand" href="/">SkillCrafter</a>
            <button class="navbar-toggler" onclick="document.querySelector('.nav-menu').classList.toggle('active')">
                <i class="bi bi-list"></i>
            </button>
            <div class="nav-menu">
                <a class="nav-link" href="{{ route('about') }}">About</a>
                <a class="nav-link" href="{{ route('features') }}">Features</a>
                <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
                <a class="nav-link" href="{{ route('notes.index') }}">Notes</a>
                <a class="nav-link" href="{{ route('how-it-works') }}">How It Works</a>
                <a class="nav-link" href="{{ route('community') }}">Community</a>
            </div>
            <div class="auth-buttons">
                @auth
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="cta-button">Admin Panel</a>
                    @endif
                    <div class="dropdown">
                        <button class="cta-button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('certifications.index') }}">Certifications</a></li>
                        </ul>
                    </div>
                    <form method="POST" action="{{ route('logout') }}" class="m-0">
                        @csrf
                        <button type="submit" class="cta-button">Logout</button>
                    </form>
                @else
                    <a href="{{ route('register') }}" class="cta-button">Register</a>
                    <a href="{{ route('login') }}" class="cta-button">Login</a>
                @endauth
            </div>
        </nav>
    </header>

    <main>
        <section class="terms-header">
            <div class="container">
                <h1>Terms of Service</h1>
                <p>Review the rules and guidelines for using SkillCrafter, our AI-powered learning platform.</p>
                <p><strong>Effective Date:</strong> September 26, 2025</p>
            </div>
        </section>

        <section class="terms-content container">
            <div class="terms-section">
                <h2>Acceptance of Terms</h2>
                <p>By accessing or using SkillCrafter, you agree to be bound by these Terms of Service. If you do not agree, please do not use our platform.</p>
            </div>

            <div class="terms-section">
                <h2>Account Usage</h2>
                <p>You are responsible for maintaining the confidentiality of your account and password.</p>
                <ul>
                    <li>You must be at least 13 years old to use SkillCrafter.</li>
                    <li>You may not share your account with others or use someone else's account.</li>
                    <li>Any unauthorized use of your account may result in termination.</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>Service Limitations</h2>
                <p>SkillCrafter provides educational services with certain limitations.</p>
                <ul>
                    <li>The platform is provided "as is" without warranties of any kind.</li>
                    <li>We reserve the right to modify or discontinue services at our discretion.</li>
                    <li>AI features are subject to availability and may not always be accurate.</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>Payment Terms</h2>
                <p>Certain features may require payment.</p>
                <ul>
                    <li>Subscription fees are billed in advance and non-refundable unless required by law.</li>
                    <li>Prices are subject to change with notice provided via email or on the platform.</li>
                    <li>Free tier usage is limited and subject to quotas.</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>Intellectual Property</h2>
                <p>All content on SkillCrafter, including courses and AI-generated materials, is owned by us or our licensors.</p>
                <ul>
                    <li>You may use content for personal learning purposes only.</li>
                    <li>Reproduction or distribution without permission is prohibited.</li>
                    <li>Trademarks and logos (e.g., SkillCrafter) are protected by law.</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>Termination</h2>
                <p>We may terminate or suspend your account for violation of these terms.</p>
                <ul>
                    <li>Termination may occur with or without notice depending on the severity.</li>
                    <li>Upon termination, you lose access to all services and content.</li>
                    <li>You may request account deletion by contacting support.</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>Governing Law</h2>
                <p>These terms are governed by the laws of Pakistan.</p>
                <ul>
                    <li>Disputes will be resolved in courts located in EduCity, PK.</li>
                    <li>You consent to the jurisdiction of these courts.</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>Changes to Terms</h2>
                <p>We may update these Terms of Service to reflect changes in our practices.</p>
                <ul>
                    <li>Updates will be posted here with the revised effective date.</li>
                    <li>Continued use after changes constitutes acceptance.</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>Contact Us</h2>
                <p>For questions or concerns, reach out to us.</p>
                <ul>
                    <li>Email: <a href="mailto:support@skillcrafter.com">support@skillcrafter.com</a></li>
                    <li>Address: SkillCrafter, 123 Learning Lane, EduCity, PK</li>
                </ul>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-grid">
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
                    <a href="privacy_policy.html" style="color: #adb5bd;">Privacy Policy</a> | 
                    <a href="terms_of_service.html" style="color: #adb5bd;">Terms of Service</a>
                </p>
            </div>

            <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
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
                                <button type="submit" class="cta-button">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
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
    </script>
</body>
</html>