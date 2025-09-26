@extends('layouts.app')

@section('content')
<!-- Enhanced Hero Section -->
<section class="hero how-works-hero">
    <div class="container">
        <div class="hero-content fade-in-up text-center">
            <div class="hero-badge">
                <span class="badge-text">
                    <i class="bi bi-cpu me-2"></i>
                    AI-Powered Journey
                </span>
            </div>
            <h1>How SkillCrafter Works</h1>
            <p>Discover the science behind personalized learning. Our AI-driven platform transforms how you acquire new skills through intelligent adaptation and continuous optimization.</p>
           
            <!-- Enhanced Hero Stats -->
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-list-ol"></i>
                    </div>
                    <div class="stat-number">6</div>
                    <div class="stat-label">Simple Steps</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Success Rate</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-robot"></i>
                    </div>
                    <div class="stat-number">AI-Driven</div>
                    <div class="stat-label">Personalization</div>
                </div>
            </div>
            <!-- Process Overview -->
            <div class="process-overview">
                <div class="overview-badge">
                    <i class="bi bi-lightbulb me-2"></i>
                    <span>Learn Smart, Not Hard</span>
                </div>
                <p class="overview-text">
                    From initial assessment to certification, experience learning that adapts to you
                </p>
            </div>
        </div>
    </div>
   
    <!-- Enhanced Hero Decorations -->
    <div class="hero-decoration">
        <div class="floating-element element-1">
            <i class="bi bi-brain"></i>
        </div>
        <div class="floating-element element-2">
            <i class="bi bi-graph-up"></i>
        </div>
        <div class="floating-element element-3">
            <i class="bi bi-trophy"></i>
        </div>
        <div class="floating-element element-4">
            <i class="bi bi-gear"></i>
        </div>
    </div>
</section>
<!-- Enhanced Step-by-Step Process -->
<section class="how-it-works">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge light">Learning Process</div>
            <h2>Your Personalized Learning Journey</h2>
            <p>Experience education reimagined through artificial intelligence. Every step is designed to maximize your learning potential while minimizing time to mastery.</p>
        </div>
        <div class="learning-path">
            <!-- Step 1 -->
            <div class="journey-step animate-on-scroll" style="--delay: 0s">
                <div class="step-visual">
                    <div class="step-circle">
                        <i class="bi bi-person-plus"></i>
                    </div>
                    <div class="step-connector"></div>
                    <div class="step-number">01</div>
                </div>
                <div class="step-content">
                    <div class="content-header">
                        <div class="step-badge">Getting Started</div>
                        <h3>Create Your Learning Profile</h3>
                    </div>
                    <p>Begin your journey by setting up a comprehensive learner profile. Tell us about your goals, preferred learning style, available time, and current skill level.</p>
                    <div class="step-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Goal-based setup</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Learning style assessment</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Time preference configuration</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="journey-step animate-on-scroll" style="--delay: 0.2s">
                <div class="step-visual">
                    <div class="step-circle">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <div class="step-connector"></div>
                    <div class="step-number">02</div>
                </div>
                <div class="step-content">
                    <div class="content-header">
                        <div class="step-badge">AI Analysis</div>
                        <h3>Intelligent Skill Assessment</h3>
                    </div>
                    <p>Our advanced AI conducts a comprehensive analysis of your existing knowledge, learning patterns, and skill gaps to create a perfectly tailored curriculum.</p>
                    <div class="step-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Knowledge gap analysis</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Learning pattern recognition</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Personalized path generation</span>
                        </div>
                    </div>
                    <div class="ai-visualization">
                        <div class="ai-badge">
                            <i class="bi bi-robot"></i>
                            <span>AI Processing</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="journey-step animate-on-scroll" style="--delay: 0.4s">
                <div class="step-visual">
                    <div class="step-circle">
                        <i class="bi bi-book-open"></i>
                    </div>
                    <div class="step-connector"></div>
                    <div class="step-number">03</div>
                </div>
                <div class="step-content">
                    <div class="content-header">
                        <div class="step-badge">Active Learning</div>
                        <h3>Engage with Dynamic Content</h3>
                    </div>
                    <p>Dive into interactive lessons, hands-on projects, and immersive learning experiences. Our content adapts in real-time based on your progress and comprehension.</p>
                    <div class="step-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Interactive video lessons</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Hands-on projects</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Real-time content adaptation</span>
                        </div>
                    </div>
                    <div class="content-types">
                        <div class="content-type">
                            <i class="bi bi-play-circle"></i>
                            <span>Videos</span>
                        </div>
                        <div class="content-type">
                            <i class="bi bi-file-text"></i>
                            <span>Reading</span>
                        </div>
                        <div class="content-type">
                            <i class="bi bi-code-square"></i>
                            <span>Practice</span>
                        </div>
                        <div class="content-type">
                            <i class="bi bi-puzzle"></i>
                            <span>Quizzes</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 4 -->
            <div class="journey-step animate-on-scroll" style="--delay: 0.6s">
                <div class="step-visual">
                    <div class="step-circle">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <div class="step-connector"></div>
                    <div class="step-number">04</div>
                </div>
                <div class="step-content">
                    <div class="content-header">
                        <div class="step-badge">Smart Feedback</div>
                        <h3>Get Instant AI-Powered Feedback</h3>
                    </div>
                    <p>Receive immediate, personalized feedback on your performance. Our AI identifies mistakes, suggests improvements, and reinforces correct understanding instantly.</p>
                    <div class="step-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Instant error correction</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Performance analysis</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Improvement recommendations</span>
                        </div>
                    </div>
                    <div class="feedback-demo">
                        <div class="demo-item correct">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Excellent! You've mastered this concept.</span>
                        </div>
                        <div class="demo-item suggestion">
                            <i class="bi bi-lightbulb-fill"></i>
                            <span>Try this approach for better results...</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 5 -->
            <div class="journey-step animate-on-scroll" style="--delay: 0.8s">
                <div class="step-visual">
                    <div class="step-circle">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <div class="step-connector"></div>
                    <div class="step-number">05</div>
                </div>
                <div class="step-content">
                    <div class="content-header">
                        <div class="step-badge">Analytics</div>
                        <h3>Track Your Learning Progress</h3>
                    </div>
                    <p>Visualize your growth with comprehensive analytics. See your learning velocity, skill development, and areas for improvement through intuitive dashboards.</p>
                    <div class="step-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Progress visualization</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Skill level tracking</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Learning velocity metrics</span>
                        </div>
                    </div>
                    <div class="progress-demo">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 75%"></div>
                        </div>
                        <div class="progress-stats">
                            <span class="stat">75% Complete</span>
                            <span class="stat">12 Skills Mastered</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 6 -->
            <div class="journey-step animate-on-scroll" style="--delay: 1s">
                <div class="step-visual">
                    <div class="step-circle">
                        <i class="bi bi-award"></i>
                    </div>
                    <div class="step-number">06</div>
                </div>
                <div class="step-content">
                    <div class="content-header">
                        <div class="step-badge">Achievement</div>
                        <h3>Earn Verified Certifications</h3>
                    </div>
                    <p>Complete your learning journey with industry-recognized certificates. Showcase your newly acquired skills to employers, clients, and your professional network.</p>
                    <div class="step-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Industry-recognized certificates</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>LinkedIn integration</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Employer verification</span>
                        </div>
                    </div>
                    <div class="certificate-preview">
                        <div class="certificate-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="certificate-info">
                            <span class="cert-title">Professional Certificate</span>
                            <span class="cert-issuer">Issued by SkillCrafter</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Enhanced Key Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge">Why It Works</div>
            <h2>The Science Behind Effective Learning</h2>
            <p>Our approach combines proven educational research with cutting-edge AI technology to create the most effective learning experience possible.</p>
        </div>
        <div class="benefits-grid">
            <div class="benefit-card animate-on-scroll" style="--delay: 0s">
                <div class="benefit-visual">
                    <div class="benefit-icon">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <div class="benefit-metric">
                        <span class="metric-number">3x</span>
                        <span class="metric-label">Faster</span>
                    </div>
                </div>
                <div class="benefit-content">
                    <h3>Personalized Learning Paths</h3>
                    <p>No two learners are the same. Our AI creates unique learning journeys tailored to your cognitive patterns, learning style, and pace preferences.</p>
                    <div class="benefit-features">
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Adaptive content difficulty</span>
                        </div>
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Learning style optimization</span>
                        </div>
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Progress-based adjustments</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-card animate-on-scroll" style="--delay: 0.2s">
                <div class="benefit-visual">
                    <div class="benefit-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div class="benefit-metric">
                        <span class="metric-number">95%</span>
                        <span class="metric-label">Accuracy</span>
                    </div>
                </div>
                <div class="benefit-content">
                    <h3>Data-Driven Optimization</h3>
                    <p>Every interaction generates insights. Our algorithms continuously refine your learning experience based on performance data and engagement patterns.</p>
                    <div class="benefit-features">
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Real-time performance tracking</span>
                        </div>
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Predictive learning analytics</span>
                        </div>
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Continuous optimization</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-card animate-on-scroll" style="--delay: 0.4s">
                <div class="benefit-visual">
                    <div class="benefit-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="benefit-metric">
                        <span class="metric-number">60%</span>
                        <span class="metric-label">Time Saved</span>
                    </div>
                </div>
                <div class="benefit-content">
                    <h3>Efficient Skill Acquisition</h3>
                    <p>Skip redundant content and focus on what matters most. Our smart algorithms identify knowledge gaps and optimize your learning sequence.</p>
                    <div class="benefit-features">
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Prerequisite optimization</span>
                        </div>
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Smart content skipping</span>
                        </div>
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Focus area identification</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-card animate-on-scroll" style="--delay: 0.6s">
                <div class="benefit-visual">
                    <div class="benefit-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="benefit-metric">
                        <span class="metric-number">24/7</span>
                        <span class="metric-label">Support</span>
                    </div>
                </div>
                <div class="benefit-content">
                    <h3>Collaborative Learning Environment</h3>
                    <p>Learn alongside a global community of motivated learners. Share insights, collaborate on projects, and accelerate your growth together.</p>
                    <div class="benefit-features">
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Peer collaboration tools</span>
                        </div>
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Expert mentorship</span>
                        </div>
                        <div class="feature-point">
                            <i class="bi bi-arrow-right"></i>
                            <span>Community challenges</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Technology Stack -->
        <div class="tech-showcase animate-on-scroll">
            <div class="tech-header">
                <h3>Powered by Advanced Technology</h3>
                <p>The cutting-edge technologies that make personalized learning possible</p>
            </div>
            <div class="tech-grid">
                <div class="tech-item">
                    <i class="bi bi-robot"></i>
                    <span>Machine Learning</span>
                </div>
                <div class="tech-item">
                    <i class="bi bi-graph-up"></i>
                    <span>Predictive Analytics</span>
                </div>
                <div class="tech-item">
                    <i class="bi bi-chat-square-text"></i>
                    <span>Natural Language Processing</span>
                </div>
                <div class="tech-item">
                    <i class="bi bi-eye"></i>
                    <span>Computer Vision</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Success Metrics Section -->
<section class="metrics-section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge light">Results</div>
            <h2>Proven Learning Outcomes</h2>
            <p>Real data from thousands of learners who have transformed their skills with SkillCrafter</p>
        </div>
        <div class="metrics-grid">
            <div class="metric-card animate-on-scroll" style="--delay: 0s">
                <div class="metric-icon">
                    <i class="bi bi-speedometer2"></i>
                </div>
                <div class="metric-value">3.2x</div>
                <div class="metric-label">Faster Skill Acquisition</div>
                <p>Compared to traditional learning methods</p>
            </div>
            <div class="metric-card animate-on-scroll" style="--delay: 0.2s">
                <div class="metric-icon">
                    <i class="bi bi-trophy-fill"></i>
                </div>
                <div class="metric-value">89%</div>
                <div class="metric-label">Course Completion Rate</div>
                <p>Higher than industry average of 15%</p>
            </div>
            <div class="metric-card animate-on-scroll" style="--delay: 0.4s">
                <div class="metric-icon">
                    <i class="bi bi-briefcase-fill"></i>
                </div>
                <div class="metric-value">73%</div>
                <div class="metric-label">Career Advancement</div>
                <p>Of learners report job improvements</p>
            </div>
            <div class="metric-card animate-on-scroll" style="--delay: 0.6s">
                <div class="metric-icon">
                    <i class="bi bi-heart-fill"></i>
                </div>
                <div class="metric-value">4.8/5</div>
                <div class="metric-label">Learner Satisfaction</div>
                <p>Average rating from 50,000+ reviews</p>
            </div>
        </div>
    </div>
</section>

<style>
    /* Enhanced CSS Variables */
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea, #764ba2);
        --secondary-gradient: linear-gradient(135deg, #4facfe, #00f2fe);
        --accent-gradient: linear-gradient(135deg, #f093fb, #f5576c);
        --success-gradient: linear-gradient(135deg, #11998e, #38ef7d);
        --dark-gradient: linear-gradient(135deg, #2c3e50, #34495e);
        --warm-gradient: linear-gradient(135deg, #fa709a, #fee140);
        --border-radius-sm: 8px;
        --border-radius-md: 12px;
        --border-radius-lg: 16px;
        --border-radius-xl: 24px;
        --shadow-sm: 0 4px 6px rgba(0, 0, 0, 0.05);
        --shadow-md: 0 10px 25px rgba(0, 0, 0, 0.1);
        --shadow-lg: 0 20px 40px rgba(0, 0, 0, 0.15);
        --shadow-xl: 0 25px 50px rgba(0, 0, 0, 0.25);
    }
    /* Enhanced Hero Section */
    .how-works-hero {
        background: linear-gradient(135deg,
            rgba(102, 126, 234, 0.1) 0%,
            rgba(118, 75, 162, 0.1) 30%,
            rgba(79, 172, 254, 0.1) 60%,
            rgba(0, 242, 254, 0.1) 100%);
        position: relative;
        overflow: hidden;
        padding: 140px 0 100px;
        min-height: 90vh;
        display: flex;
        align-items: center;
    }
    .how-works-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 20% 20%, rgba(102, 126, 234, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(79, 172, 254, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 50% 50%, rgba(118, 75, 162, 0.1) 0%, transparent 70%);
        animation: backgroundPulse 20s ease-in-out infinite;
    }
    @keyframes backgroundPulse {
        0%, 100% { transform: scale(1) rotate(0deg); opacity: 0.8; }
        33% { transform: scale(1.05) rotate(1deg); opacity: 1; }
        66% { transform: scale(0.98) rotate(-1deg); opacity: 0.9; }
    }
    /* Enhanced Hero Badge */
    .hero-badge {
        display: inline-flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.25);
        backdrop-filter: blur(20px);
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-xl);
        padding: 1rem 2rem;
        margin-bottom: 2rem;
        box-shadow: var(--shadow-md);
        animation: fadeInUp 1s ease-out 0.2s both;
        position: relative;
        overflow: hidden;
    }
    .hero-badge::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        animation: shimmer 3s ease-in-out infinite;
    }
    @keyframes shimmer {
        0% { left: -100%; }
        100% { left: 100%; }
    }
    /* Enhanced Hero Stats */
    .hero-stats {
        display: flex;
        justify-content: center;
        gap: 4rem;
        margin-top: 4rem;
        animation: fadeInUp 1s ease-out 0.9s both;
    }
    .hero-stats .stat-item {
        text-align: center;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: var(--border-radius-lg);
        padding: 2rem 1.5rem;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
    }
    .hero-stats .stat-item:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: var(--shadow-lg);
        background: rgba(255, 255, 255, 0.15);
    }
    .hero-stats .stat-icon {
        width: 50px;
        height: 50px;
        background: var(--primary-gradient);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 1.5rem;
        color: #fff;
        box-shadow: var(--shadow-md);
        transition: all 0.4s ease;
    }
    .hero-stats .stat-item:hover .stat-icon {
        transform: scale(1.1) rotate(10deg);
        background: var(--secondary-gradient);
    }
    .process-overview {
        margin-top: 2rem;
        animation: fadeInUp 1s ease-out 1.2s both;
    }
    .overview-badge {
        display: inline-flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: var(--border-radius-lg);
        padding: 1rem 2rem;
        margin-bottom: 1rem;
        color: #2d3748;
        font-weight: 600;
    }
    .overview-text {
        color: #718096;
        font-size: 1rem;
    }
    /* Enhanced Floating Elements */
    .floating-element {
        position: absolute;
        width: 80px;
        height: 80px;
        background: rgba(102, 126, 234, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(102, 126, 234, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: #667eea;
        animation: advancedFloat 12s ease-in-out infinite;
        box-shadow: var(--shadow-md);
    }
    .element-1 {
        top: 15%;
        left: 8%;
        animation-delay: 0s;
    }
    .element-2 {
        top: 25%;
        right: 12%;
        animation-delay: 3s;
    }
    .element-3 {
        bottom: 35%;
        left: 15%;
        animation-delay: 6s;
    }
    .element-4 {
        top: 70%;
        right: 20%;
        animation-delay: 9s;
    }
    @keyframes advancedFloat {
        0%, 100% {
            transform: translateY(0px) translateX(0px) rotate(0deg);
            opacity: 0.6;
        }
        25% {
            transform: translateY(-30px) translateX(15px) rotate(90deg);
            opacity: 0.9;
        }
        50% {
            transform: translateY(20px) translateX(-10px) rotate(180deg);
            opacity: 0.4;
        }
        75% {
            transform: translateY(-15px) translateX(20px) rotate(270deg);
            opacity: 0.7;
        }
    }
    /* Enhanced How It Works Section */
    .how-it-works {
        background: var(--primary-gradient);
        color: #fff;
        padding: clamp(80px, 12vw, 120px) 0;
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
            radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 70% 70%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
            linear-gradient(45deg, transparent 40%, rgba(255, 255, 255, 0.02) 50%, transparent 60%);
        animation: visionAnimation 25s ease-in-out infinite;
    }
    @keyframes visionAnimation {
        0%, 100% { transform: translateX(0) translateY(0); }
        25% { transform: translateX(20px) translateY(-10px); }
        50% { transform: translateX(-15px) translateY(15px); }
        75% { transform: translateX(25px) translateY(5px); }
    }
    .how-it-works .section-header h2,
    .how-it-works .section-header p {
        color: #fff;
    }
    .learning-path {
        margin-top: 4rem;
        position: relative;
        z-index: 2;
    }
    .journey-step {
        display: flex;
        align-items: flex-start;
        gap: 3rem;
        padding: 2.5rem;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: var(--border-radius-lg);
        margin-bottom: 2rem;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        animation-delay: var(--delay);
        position: relative;
        overflow: hidden;
    }
    .journey-step::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.05);
        transition: left 0.5s ease;
        z-index: -1;
    }
    .journey-step:hover::before {
        left: 0;
    }
    .journey-step:hover {
        transform: translateX(10px);
        box-shadow: var(--shadow-xl);
    }
    .step-visual {
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .step-circle {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: #fff;
        box-shadow: var(--shadow-md);
        transition: all 0.4s ease;
        position: relative;
    }
    .step-circle::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        background: var(--secondary-gradient);
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: -1;
    }
    .journey-step:hover .step-circle {
        transform: scale(1.1) rotate(15deg);
    }
    .journey-step:hover .step-circle::after {
        opacity: 0.3;
    }
    .step-connector {
        width: 3px;
        height: 60px;
        background: rgba(255, 255, 255, 0.3);
        margin-top: 1rem;
    }
    .journey-step:last-child .step-connector {
        display: none;
    }
    .step-number {
        font-size: 1.5rem;
        font-weight: 800;
        color: rgba(255, 255, 255, 0.3);
        margin-top: 1rem;
    }
    .step-content {
        flex: 1;
    }
    .content-header {
        margin-bottom: 1rem;
    }
    .step-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: var(--border-radius-xl);
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 1rem;
    }
    .step-content h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 1rem;
    }
    .step-content p {
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.7;
        margin-bottom: 1.5rem;
        font-size: 1rem;
    }
    .step-features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
        margin-bottom: 1.5rem;
    }
    .feature-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        background: rgba(255, 255, 255, 0.1);
        padding: 0.75rem;
        border-radius: var(--border-radius-md);
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.9rem;
    }
    .feature-item i {
        color: #4ade80;
        font-size: 1rem;
    }
    .ai-visualization, .content-types, .feedback-demo, .progress-demo, .certificate-preview {
        margin-top: 1.5rem;
    }
    .ai-badge {
        display: inline-flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.2);
        padding: 0.5rem 1rem;
        border-radius: var(--border-radius-lg);
        gap: 0.5rem;
        font-weight: 600;
    }
    .content-types {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }
    .content-type {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        padding: 0.5rem 1rem;
        border-radius: var(--border-radius-lg);
    }
    .feedback-demo {
        display: grid;
        gap: 1rem;
    }
    .demo-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        border-radius: var(--border-radius-md);
        background: rgba(255, 255, 255, 0.05);
    }
    .correct i {
        color: #10b981;
    }
    .suggestion i {
        color: #ffd700;
    }
    .progress-demo .progress-bar {
        height: 8px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: var(--border-radius-sm);
        overflow: hidden;
    }
    .progress-fill {
        height: 100%;
        background: var(--success-gradient);
        transition: width 0.5s ease;
    }
    .progress-stats {
        display: flex;
        gap: 1rem;
        margin-top: 0.5rem;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
    }
    .certificate-preview {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.1);
        border-radius: var(--border-radius-md);
    }
    .certificate-icon {
        font-size: 2rem;
        color: #ffd700;
    }
    .certificate-info {
        display: flex;
        flex-direction: column;
    }
    .cert-title {
        font-weight: 600;
    }
    .cert-issuer {
        font-size: 0.8rem;
        opacity: 0.8;
    }
    /* Enhanced Benefits Section */
    .benefits-section {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 50%, #e2e8f0 100%);
        padding: clamp(80px, 12vw, 120px) 0;
        position: relative;
        overflow: hidden;
    }
    .benefits-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 10% 20%, rgba(102, 126, 234, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 90% 80%, rgba(79, 172, 254, 0.05) 0%, transparent 50%);
    }
    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2.5rem;
        margin-top: 4rem;
        position: relative;
        z-index: 2;
    }
    .benefit-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-lg);
        padding: 2.5rem;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        animation-delay: var(--delay);
        display: flex;
        gap: 2rem;
    }
    .benefit-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg,
            rgba(102, 126, 234, 0.03) 0%,
            rgba(79, 172, 254, 0.03) 100%);
        transition: left 0.6s ease;
        z-index: -1;
    }
    .benefit-card:hover::before {
        left: 0;
    }
    .benefit-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: var(--shadow-xl);
        border-color: rgba(102, 126, 234, 0.2);
    }
    .benefit-visual {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
    }
    .benefit-icon {
        width: 60px;
        height: 60px;
        background: var(--primary-gradient);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: #fff;
        box-shadow: var(--shadow-md);
        transition: all 0.4s ease;
    }
    .benefit-card:hover .benefit-icon {
        transform: scale(1.1) rotate(10deg);
    }
    .benefit-metric {
        text-align: center;
    }
    .metric-number {
        font-size: 1.8rem;
        font-weight: 800;
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .metric-label {
        font-size: 0.9rem;
        color: #a0aec0;
    }
    .benefit-content h3 {
        font-size: 1.4rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 1rem;
    }
    .benefit-content p {
        color: #718096;
        line-height: 1.7;
        margin-bottom: 1.5rem;
        font-size: 1rem;
    }
    .benefit-features {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .feature-point {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        color: #4a5568;
        font-size: 0.95rem;
    }
    .feature-point i {
        color: #10b981;
    }
    /* Technology Showcase */
    .tech-showcase {
        margin-top: 5rem;
        text-align: center;
    }
    .tech-header h3 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 1rem;
    }
    .tech-header p {
        color: #718096;
        margin-bottom: 2rem;
    }
    .tech-grid {
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
    }
    .tech-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-lg);
        padding: 1.5rem;
        transition: all 0.4s ease;
    }
    .tech-item:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
    }
    .tech-item i {
        font-size: 2rem;
        color: #667eea;
    }
    .tech-item span {
        font-weight: 600;
        color: #2d3748;
    }
    /* Metrics Section */
    .metrics-section {
        background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%);
        color: #fff;
        padding: clamp(80px, 12vw, 120px) 0;
        position: relative;
        overflow: hidden;
    }
    .metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2.5rem;
        margin-top: 4rem;
    }
    .metric-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: var(--border-radius-lg);
        padding: 2.5rem;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        animation-delay: var(--delay);
    }
    .metric-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.05);
        transition: left 0.5s ease;
        z-index: -1;
    }
    .metric-card:hover::before {
        left: 0;
    }
    .metric-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
    }
    .metric-icon {
        font-size: 3rem;
        color: #4ade80;
        margin-bottom: 1rem;
    }
    .metric-value {
        font-size: 3rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 0.5rem;
    }
    .metric-label {
        font-size: 1.3rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 1rem;
    }
    .metric-card p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
    }
    /* Enhanced CTA Section */
    .cta-section {
        background: var(--dark-gradient);
        color: #ffffff;
        padding: clamp(100px, 15vw, 140px) 0;
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
            radial-gradient(circle at 80% 80%, rgba(79, 172, 254, 0.1) 0%, transparent 50%);
    }
    .cta-guarantees {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-bottom: 3rem;
        flex-wrap: wrap;
    }
    .guarantee-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: var(--border-radius-lg);
        padding: 1rem 1.5rem;
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.9rem;
    }
    .guarantee-item i {
        color: #4ade80;
        font-size: 1rem;
    }
    .success-preview {
        margin-top: 3rem;
    }
    .success-header h4 {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 1rem;
    }
    .success-avatars {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
    }
    .avatar-item {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 600;
        font-size: 1rem;
        border: 2px solid rgba(255, 255, 255, 0.3);
    }
    .avatar-more {
        width: 40px;
        height: 40px;
        background: var(--primary-gradient);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 600;
        font-size: 0.9rem;
    }
    /* Enhanced CTA Decorations */
    .decoration-orb {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(102, 126, 234, 0.2) 0%, transparent 70%);
        animation: orbFloat 15s ease-in-out infinite;
    }
    .orb-1 {
        width: 300px;
        height: 300px;
        top: 10%;
        right: 5%;
        animation-delay: 0s;
    }
    .orb-2 {
        width: 200px;
        height: 200px;
        bottom: 15%;
        left: 10%;
        animation-delay: 7s;
    }
    @keyframes orbFloat {
        0%, 100% { transform: translateY(0px) scale(1); opacity: 0.3; }
        50% { transform: translateY(-50px) scale(1.1); opacity: 0.6; }
    }
    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-stats {
            flex-direction: column;
            gap: 2rem;
        }
        .benefits-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        .journey-step {
            flex-direction: column;
            text-align: center;
            gap: 1.5rem;
        }
        .step-connector {
            width: 60px;
            height: 3px;
            margin-top: 0;
        }
        .metrics-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        .cta-guarantees {
            flex-direction: column;
            gap: 1rem;
        }
        .floating-element {
            display: none;
        }
    }
    @media (max-width: 576px) {
        .how-works-hero {
            padding: 120px 0 80px;
        }
        .journey-step {
            padding: 2rem;
        }
        .benefit-card {
            flex-direction: column;
            text-align: center;
        }
    }
    /* Animation Delays */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(40px);
        transition: all 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        animation-delay: var(--delay, 0s);
    }
    .animate-on-scroll.animated {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endsection