@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content fade-in-up">
                <div class="hero-badge">
                    <span class="badge-text">🚀 New AI Features Available</span>
                </div>
                <h1>Master Any Skill with AI-Powered Learning</h1>
                <p>Personalized learning paths, adaptive exercises, and real-time feedback to accelerate your skill development journey.</p>
                <div class="hero-buttons">
                    <a href="{{ route('courses.index') }}" class="cta-button">
                        <span>Start Learning Free</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="#demo" class="btn-secondary">
                        <i class="bi bi-play-fill me-2"></i>
                        <span>Watch Demo</span>
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number">50K+</div>
                        <div class="stat-label">Active Learners</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">200+</div>
                        <div class="stat-label">Skills Available</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Success Rate</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-decoration">
            <div class="floating-element element-1"></div>
            <div class="floating-element element-2"></div>
            <div class="floating-element element-3"></div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge">Features</div>
                <h2>Intelligent Learning Features</h2>
                <p>Our AI adapts to your learning style and pace, creating a personalized experience that maximizes your potential.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card animate-on-scroll" style="--delay: 0s">
                    <div class="feature-icon">
                        <i class="bi bi-brain"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3>AI-Powered Personalization</h3>
                    <p>Advanced algorithms analyze your learning patterns and adapt content to match your unique style and pace.</p>
                    <div class="feature-arrow">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
                <div class="feature-card animate-on-scroll" style="--delay: 0.1s">
                    <div class="feature-icon">
                        <i class="bi bi-bullseye"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3>Adaptive Learning Paths</h3>
                    <p>Dynamic curricula that evolve based on your progress, ensuring optimal challenge levels at every step.</p>
                    <div class="feature-arrow">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
                <div class="feature-card animate-on-scroll" style="--delay: 0.2s">
                    <div class="feature-icon">
                        <i class="bi bi-lightning-charge"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3>Real-Time Feedback</h3>
                    <p>Instant insights and corrections help you learn from mistakes and reinforce correct understanding immediately.</p>
                    <div class="feature-arrow">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
                <div class="feature-card animate-on-scroll" style="--delay: 0.3s">
                    <div class="feature-icon">
                        <i class="bi bi-graph-up"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3>Progress Analytics</h3>
                    <p>Detailed insights into your learning journey with visual progress tracking and performance metrics.</p>
                    <div class="feature-arrow">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
                <div class="feature-card animate-on-scroll" style="--delay: 0.4s">
                    <div class="feature-icon">
                        <i class="bi bi-controller"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3>Gamified Experience</h3>
                    <p>Engaging challenges, achievements, and rewards that make learning addictive and fun.</p>
                    <div class="feature-arrow">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
                <div class="feature-card animate-on-scroll" style="--delay: 0.5s">
                    <div class="feature-icon">
                        <i class="bi bi-globe2"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3>Multi-Platform Access</h3>
                    <p>Learn anywhere, anytime with seamless synchronization across all your devices.</p>
                    <div class="feature-arrow">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="features-decoration">
            <div class="decoration-circle circle-1"></div>
            <div class="decoration-circle circle-2"></div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="how-it-works">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge light">Process</div>
                <h2>How SkillCrafter Works</h2>
                <p>Get started in minutes and begin your personalized learning journey with our AI-powered platform.</p>
            </div>
            <div class="steps">
                <div class="step animate-on-scroll" style="--delay: 0s">
                    <div class="step-number">
                        <span>1</span>
                        <div class="step-connector"></div>
                    </div>
                    <div class="step-content">
                        <h3>Choose Your Skill</h3>
                        <p>Select from hundreds of skills across technology, business, creative arts, and personal development.</p>
                        <div class="step-icon">
                            <i class="bi bi-search"></i>
                        </div>
                    </div>
                </div>
                <div class="step animate-on-scroll" style="--delay: 0.2s">
                    <div class="step-number">
                        <span>2</span>
                        <div class="step-connector"></div>
                    </div>
                    <div class="step-content">
                        <h3>AI Assessment</h3>
                        <p>Our AI evaluates your current knowledge level and learning preferences to create your personalized path.</p>
                        <div class="step-icon">
                            <i class="bi bi-cpu"></i>
                        </div>
                    </div>
                </div>
                <div class="step animate-on-scroll" style="--delay: 0.4s">
                    <div class="step-number">
                        <span>3</span>
                        <div class="step-connector"></div>
                    </div>
                    <div class="step-content">
                        <h3>Learn & Practice</h3>
                        <p>Engage with interactive lessons, hands-on exercises, and real-world projects tailored to your goals.</p>
                        <div class="step-icon">
                            <i class="bi bi-book"></i>
                        </div>
                    </div>
                </div>
                <div class="step animate-on-scroll" style="--delay: 0.6s">
                    <div class="step-number">
                        <span>4</span>
                    </div>
                    <div class="step-content">
                        <h3>Master & Advance</h3>
                        <p>Track your progress, earn certifications, and unlock advanced topics as you build expertise.</p>
                        <div class="step-icon">
                            <i class="bi bi-trophy"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="features benefits-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge">Benefits</div>
                <h2>Why Students Love SkillCrafter</h2>
                <p>We make learning simple, fun, and effective for every student.</p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card animate-on-scroll" style="--delay: 0s">
                    <div class="benefit-icon">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Easy to Understand</h3>
                        <p>Concepts explained in simple language with examples anyone can follow.</p>
                        <div class="benefit-metric">
                            <span class="metric-number">98%</span>
                            <span class="metric-label">Comprehension Rate</span>
                        </div>
                    </div>
                </div>
                <div class="benefit-card animate-on-scroll" style="--delay: 0.1s">
                    <div class="benefit-icon">
                        <i class="bi bi-clock"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Learn at Your Pace</h3>
                        <p>Study when you want, where you want. Pause and continue anytime.</p>
                        <div class="benefit-metric">
                            <span class="metric-number">24/7</span>
                            <span class="metric-label">Access Available</span>
                        </div>
                    </div>
                </div>
                <div class="benefit-card animate-on-scroll" style="--delay: 0.2s">
                    <div class="benefit-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Practical Skills</h3>
                        <p>Hands-on projects ensure you can apply what you learn in real life.</p>
                        <div class="benefit-metric">
                            <span class="metric-number">500+</span>
                            <span class="metric-label">Real Projects</span>
                        </div>
                    </div>
                </div>
                <div class="benefit-card animate-on-scroll" style="--delay: 0.3s">
                    <div class="benefit-icon">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Boost Your Career</h3>
                        <p>Earn certificates that add value to your resume and career journey.</p>
                        <div class="benefit-metric">
                            <span class="metric-number">85%</span>
                            <span class="metric-label">Career Growth</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge light">Reviews</div>
                <h2>What Students Say</h2>
                <div class="testimonials-rating">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <span class="rating-text">4.9/5 from 10,000+ reviews</span>
                </div>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card animate-on-scroll" style="--delay: 0s">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>
                        <p>"SkillCrafter made coding easy and fun. The gamified learning kept me motivated throughout my journey!"</p>
                        <div class="testimonial-rating">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <span>A</span>
                        </div>
                        <div class="author-info">
                            <strong>Ayesha Khan</strong>
                            <span>CS Student</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll" style="--delay: 0.2s">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>
                        <p>"The AI feedback improved my English in just weeks. Super helpful for preparing for exams and interviews."</p>
                        <div class="testimonial-rating">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <span>A</span>
                        </div>
                        <div class="author-info">
                            <strong>Ahmed Ali</strong>
                            <span>High School Student</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll" style="--delay: 0.4s">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>
                        <p>"Certificates from SkillCrafter boosted my CV and helped me land an amazing internship at a top company."</p>
                        <div class="testimonial-rating">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <span>S</span>
                        </div>
                        <div class="author-info">
                            <strong>Sana Malik</strong>
                            <span>University Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge">FAQ</div>
                <h2>Frequently Asked Questions</h2>
                <p>Everything you need to know about SkillCrafter</p>
            </div>
            <div class="faq-grid">
                <div class="faq-card animate-on-scroll" style="--delay: 0s">
                    <div class="faq-question">
                        <div class="faq-icon">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <h3>Is SkillCrafter free?</h3>
                        <div class="faq-toggle">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! You can start learning free with access to basic courses. Premium content with advanced features and certifications is available with our paid plans.</p>
                    </div>
                </div>
                <div class="faq-card animate-on-scroll" style="--delay: 0.1s">
                    <div class="faq-question">
                        <div class="faq-icon">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <h3>Can I learn at my own pace?</h3>
                        <div class="faq-toggle">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely! Study anytime, pause anytime, continue anytime. Our platform adapts to your schedule and learning rhythm.</p>
                    </div>
                </div>
                <div class="faq-card animate-on-scroll" style="--delay: 0.2s">
                    <div class="faq-question">
                        <div class="faq-icon">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <h3>Do I get certificates?</h3>
                        <div class="faq-toggle">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! Every completed course comes with a recognized certificate that you can add to your LinkedIn profile and resume.</p>
                    </div>
                </div>
                <div class="faq-card animate-on-scroll" style="--delay: 0.3s">
                    <div class="faq-question">
                        <div class="faq-icon">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <h3>What devices can I use?</h3>
                        <div class="faq-toggle">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>SkillCrafter works on all devices - desktop, laptop, tablet, and mobile. Your progress syncs automatically across all platforms.</p>
                    </div>
                </div>
                <div class="faq-card animate-on-scroll" style="--delay: 0.4s">
                    <div class="faq-question">
                        <div class="faq-icon">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <h3>How does the AI personalization work?</h3>
                        <div class="faq-toggle">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Our AI analyzes your learning patterns, progress, and preferences to customize content difficulty, pacing, and teaching methods specifically for you.</p>
                    </div>
                </div>
                <div class="faq-card animate-on-scroll" style="--delay: 0.5s">
                    <div class="faq-question">
                        <div class="faq-icon">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <h3>Is there community support?</h3>
                        <div class="faq-toggle">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! Join our vibrant community of learners, participate in discussions, get help from peers, and connect with mentors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="get-started">
        <div class="container">
            <div class="cta-content animate-on-scroll">
                <div class="cta-badge">
                    <i class="bi bi-rocket-takeoff me-2"></i>
                    <span>Start Your Journey Today</span>
                </div>
                <h2>Ready to Transform Your Learning?</h2>
                <p>Join thousands of learners who are already mastering new skills with SkillCrafter's AI-powered platform.</p>
                <div class="cta-buttons">
                    <a href="{{ route('courses.index') }}" class="cta-button cta-primary">
                        <span>Start Your Free Trial</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="#" class="cta-button cta-secondary">
                        <i class="bi bi-calendar-check me-2"></i>
                        <span>Schedule Demo</span>
                    </a>
                </div>
                <div class="cta-features">
                    <div class="cta-feature">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>No credit card required</span>
                    </div>
                    <div class="cta-feature">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Free for 30 days</span>
                    </div>
                    <div class="cta-feature">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Cancel anytime</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-decoration">
            <div class="decoration-shape shape-1"></div>
            <div class="decoration-shape shape-2"></div>
            <div class="decoration-shape shape-3"></div>
        </div>
    </section>

    <style>
        /* Hero Section Enhancements */
        .hero-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: var(--border-radius-xl);
            padding: 0.75rem 1.5rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .badge-text {
            font-size: 0.9rem;
            font-weight: 600;
            color: #2d3748;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 3rem;
            animation: fadeInUp 1s ease-out 0.9s both;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: clamp(1.5rem, 4vw, 2.5rem);
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #718096;
            font-weight: 500;
        }

        .hero-decoration {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .floating-element {
            position: absolute;
            width: 100px;
            height: 100px;
            background: var(--primary-gradient);
            border-radius: 50%;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .element-1 {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .element-2 {
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .element-3 {
            bottom: 30%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-20px) rotate(120deg); }
            66% { transform: translateY(10px) rotate(240deg); }
        }

        /* Section Badges */
        .section-badge {
            display: inline-block;
            background: var(--primary-gradient);
            color: #fff;
            padding: 0.5rem 1.25rem;
            border-radius: var(--border-radius-xl);
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 1rem;
        }

        .section-badge.light {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Enhanced Feature Cards */
        .feature-card {
            position: relative;
            overflow: hidden;
        }

        .feature-icon {
            position: relative;
            z-index: 2;
        }

        .feature-icon i {
            font-size: 2rem;
            color: #fff;
            z-index: 3;
            position: relative;
        }

        .icon-bg {
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: var(--primary-gradient);
            border-radius: 50%;
            z-index: 1;
            transition: all 0.4s ease;
        }

        .feature-card:hover .icon-bg {
            background: var(--secondary-gradient);
            transform: scale(1.1) rotate(10deg);
        }

        .feature-arrow {
            position: absolute;
            bottom: 1.5rem;
            right: 1.5rem;
            width: 40px;
            height: 40px;
            background: rgba(102, 126, 234, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transform: translateX(20px);
            transition: all 0.4s ease;
        }

        .feature-card:hover .feature-arrow {
            opacity: 1;
            transform: translateX(0);
        }

        .features-decoration {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }

        .decoration-circle {
            position: absolute;
            border-radius: 50%;
            background: var(--primary-gradient);
            opacity: 0.05;
        }

        .circle-1 {
            width: 300px;
            height: 300px;
            top: 10%;
            left: -5%;
            animation: rotate 20s linear infinite;
        }

        .circle-2 {
            width: 200px;
            height: 200px;
            bottom: 20%;
            right: -5%;
            animation: rotate 15s linear infinite reverse;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Enhanced Steps */
        .steps {
            position: relative;
        }

        .step {
            display: flex;
            align-items: flex-start;
            gap: 2rem;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-lg);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            animation-delay: var(--delay);
        }

        .step-number {
            position: relative;
            flex-shrink: 0;
        }

        .step-number span {
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
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.4s ease;
        }

        .step-connector {
            position: absolute;
            top: 70px;
            left: 50%;
            width: 2px;
            height: 60px;
            background: rgba(255, 255, 255, 0.3);
            transform: translateX(-50%);
        }

        .step:last-child .step-connector {
            display: none;
        }

        .step-content {
            flex: 1;
            position: relative;
        }

        .step-icon {
            position: absolute;
            top: -10px;
            right: -10px;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0.7;
        }

        .step:hover .step-number span {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }

        /* Benefits Section */
        .benefits-section {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            position: relative;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            position: relative;
            z-index: 2;
        }

        .benefit-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            padding: 2rem;
            border-radius: var(--border-radius-lg);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            animation-delay: var(--delay);
        }

        .benefit-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 50px rgba(102, 126, 234, 0.15);
        }

        .benefit-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        .benefit-icon i {
            font-size: 1.5rem;
            color: #fff;
        }

        .benefit-content {
            flex: 1;
        }

        .benefit-content h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 0.75rem;
        }

        .benefit-content p {
            color: #718096;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .benefit-metric {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .metric-number {
            font-size: 1.5rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .metric-label {
            font-size: 0.85rem;
            color: #a0aec0;
            font-weight: 500;
        }

        /* Testimonials Section */
        .testimonials-section {
            background: var(--primary-gradient);
            color: #fff;
            padding: clamp(60px, 10vw, 100px) 0;
            position: relative;
            overflow: hidden;
        }

        .testimonials-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
        }

        .testimonials-section .section-header h2,
        .testimonials-section .section-header p {
            color: #fff;
        }

        .testimonials-rating {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }

        .stars {
            display: flex;
            gap: 0.25rem;
        }

        .stars i {
            color: #ffd700;
            font-size: 1.2rem;
        }

        .rating-text {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
            position: relative;
            z-index: 2;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            animation-delay: var(--delay);
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .testimonial-content {
            margin-bottom: 1.5rem;
        }

        .quote-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .quote-icon i {
            font-size: 1.2rem;
            color: #fff;
        }

        .testimonial-content p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 1rem;
        }

        .testimonial-rating {
            margin-bottom: 1rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            color: #fff;
        }

        .author-info strong {
            display: block;
            color: #fff;
            font-size: 1rem;
            margin-bottom: 0.25rem;
        }

        .author-info span {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }

        /* FAQ Section */
        .faq-section {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            padding: clamp(60px, 10vw, 100px) 0;
            position: relative;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .faq-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: var(--border-radius-lg);
            overflow: hidden;
            transition: all 0.4s ease;
            animation-delay: var(--delay);
        }

        .faq-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.1);
        }

        .faq-question {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .faq-question:hover {
            background: rgba(102, 126, 234, 0.05);
        }

        .faq-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .faq-icon i {
            color: #fff;
            font-size: 1.1rem;
        }

        .faq-question h3 {
            flex: 1;
            font-size: 1.1rem;
            font-weight: 600;
            color: #2d3748;
            margin: 0;
        }

        .faq-toggle {
            width: 30px;
            height: 30px;
            background: rgba(102, 126, 234, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .faq-toggle i {
            color: #667eea;
            transition: transform 0.3s ease;
        }

        .faq-answer {
            padding: 0 1.5rem 1.5rem;
            color: #718096;
            line-height: 1.7;
        }

        /* Enhanced CTA Section */
        .cta-section {
            background: var(--dark-gradient);
            color: #ffffff;
            padding: clamp(80px, 12vw, 120px) 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--border-radius-xl);
            padding: 0.75rem 1.5rem;
            margin-bottom: 2rem;
            color: #fff;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .cta-section h2 {
            font-size: clamp(2.5rem, 6vw, 4rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
        }

        .cta-section p {
            font-size: clamp(1.1rem, 3vw, 1.4rem);
            margin-bottom: 3rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 3rem;
        }

        .cta-primary {
            background: var(--primary-gradient);
            color: #fff;
            padding: 1rem 2.5rem;
            font-size: 1.125rem;
            font-weight: 600;
        }

        .cta-secondary {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 1rem 2.5rem;
            font-size: 1.125rem;
            font-weight: 600;
        }

        .cta-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .cta-features {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .cta-feature {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
        }

        .cta-feature i {
            color: #4ade80;
            font-size: 1rem;
        }

        .cta-decoration {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }

        .decoration-shape {
            position: absolute;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(240, 147, 251, 0.1));
            border-radius: 50%;
            animation: floatShape 8s ease-in-out infinite;
        }

        .shape-1 {
            width: 200px;
            height: 200px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .shape-3 {
            width: 100px;
            height: 100px;
            bottom: 20%;
            left: 15%;
            animation-delay: 4s;
        }

        @keyframes floatShape {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.1; }
            50% { transform: translateY(-30px) rotate(180deg); opacity: 0.2; }
        }

        /* Responsive Enhancements */
        @media (max-width: 768px) {
            .hero-stats {
                gap: 2rem;
                flex-direction: column;
            }

            .step {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .step-connector {
                display: none;
            }

            .benefit-card {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .faq-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }

            .cta-features {
                flex-direction: column;
                gap: 1rem;
            }
        }

        @media (max-width: 576px) {
            .hero-stats {
                gap: 1.5rem;
            }

            .stat-item {
                padding: 0 1rem;
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .benefits-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .floating-element {
                display: none;
            }
        }

        /* Animation Delays */
        .animate-on-scroll {
            animation-delay: var(--delay, 0s);
        }

        /* Enhanced Interactive Elements */
        .hero-buttons a,
        .cta-buttons a {
            position: relative;
            overflow: hidden;
        }

        .hero-buttons a::before,
        .cta-buttons a::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        .hero-buttons a:active::before,
        .cta-buttons a:active::before {
            width: 300px;
            height: 300px;
        }
    </style>

@endsection