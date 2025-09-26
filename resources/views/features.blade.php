@extends('layouts.app')

@section('content')
<!-- Enhanced Hero Section -->
<section class="hero how-works-hero">
    <div class="container">
        <div class="hero-content fade-in-up text-center">
            <div class="hero-badge">
                <span class="badge-text">
                    <i class="bi bi-rocket-takeoff me-2"></i>
                    Empowering Education
                </span>
            </div>
            <h1>Powerful Features for Smarter Learning</h1>
            <p>Explore how SkillCrafter transforms your learning experience through advanced AI tools and interactive design.</p>
           
            <!-- Enhanced Hero Stats -->
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="stat-number">50K+</div>
                    <div class="stat-label">Learners Empowered</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-globe2"></i>
                    </div>
                    <div class="stat-number">Global</div>
                    <div class="stat-label">Reach</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <div class="stat-number">AI-Driven</div>
                    <div class="stat-label">Learning</div>
                </div>
            </div>
            <!-- Timeline Badge -->
            <div class="timeline-badge">
                <div class="timeline-content">
                    <span class="timeline-year">Founded 2024</span>
                    <span class="timeline-text">Building the future of education</span>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Enhanced Hero Decorations -->
    <div class="hero-decoration">
        <div class="floating-element element-1">
            <i class="bi bi-lightbulb"></i>
        </div>
        <div class="floating-element element-2">
            <i class="bi bi-graph-up-arrow"></i>
        </div>
        <div class="floating-element element-3">
            <i class="bi bi-award"></i>
        </div>
        <div class="floating-element element-4">
            <i class="bi bi-people"></i>
        </div>
    </div>
</section>
<!-- Enhanced Features Details Section -->
<section id="features" class="mission-section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge">Core Features</div>
            <h2>Core Features That Set Us Apart</h2>
            <p>Our intelligent tools are built to help you stay focused, improve faster, and reach your learning goals effectively.</p>
        </div>
       
        <div class="mission-content">
            <div class="mission-grid">
                <div class="mission-card animate-on-scroll" style="--delay: 0s">
                    <div class="card-header">
                        <div class="mission-icon">
                            <i class="bi bi-brain"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="mission-number">01</div>
                    </div>
                    <div class="mission-content-inner">
                        <h3>AI-Powered Personalization</h3>
                        <p>Each learner is unique — our AI continuously analyzes your pace, interests, and performance to tailor content that keeps you engaged and growing.</p>
                        <ul class="mission-features">
                            <li><i class="bi bi-check-circle"></i>Adaptive algorithms</li>
                            <li><i class="bi bi-check-circle"></i>Interest-based recommendations</li>
                            <li><i class="bi bi-check-circle"></i>Performance tracking</li>
                        </ul>
                    </div>
                </div>
                <div class="mission-card animate-on-scroll" style="--delay: 0.2s">
                    <div class="card-header">
                        <div class="mission-icon">
                            <i class="bi bi-bullseye"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="mission-number">02</div>
                    </div>
                    <div class="mission-content-inner">
                        <h3>Adaptive Learning Paths</h3>
                        <p>We dynamically adjust your path as you improve. Whether you're a beginner or intermediate, you’ll always be working at the right level of difficulty.</p>
                        <ul class="mission-features">
                            <li><i class="bi bi-check-circle"></i>Dynamic curriculum</li>
                            <li><i class="bi bi-check-circle"></i>Level progression</li>
                            <li><i class="bi bi-check-circle"></i>Skill-based adjustments</li>
                        </ul>
                    </div>
                </div>
                <div class="mission-card animate-on-scroll" style="--delay: 0.4s">
                    <div class="card-header">
                        <div class="mission-icon">
                            <i class="bi bi-lightning-charge"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="mission-number">03</div>
                    </div>
                    <div class="mission-content-inner">
                        <h3>Real-Time Feedback</h3>
                        <p>Get instant feedback on your exercises and projects. Learn from your mistakes quickly and understand why each answer is right or wrong.</p>
                        <ul class="mission-features">
                            <li><i class="bi bi-check-circle"></i>Instant insights</li>
                            <li><i class="bi bi-check-circle"></i>Mistake analysis</li>
                            <li><i class="bi bi-check-circle"></i>Reinforcement learning</li>
                        </ul>
                    </div>
                </div>
                <div class="mission-card animate-on-scroll" style="--delay: 0.6s">
                    <div class="card-header">
                        <div class="mission-icon">
                            <i class="bi bi-graph-up"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="mission-number">04</div>
                    </div>
                    <div class="mission-content-inner">
                        <h3>Progress Analytics</h3>
                        <p>Track your journey with beautiful progress graphs, strengths & weakness breakdowns, and time-based performance stats.</p>
                        <ul class="mission-features">
                            <li><i class="bi bi-check-circle"></i>Visual tracking</li>
                            <li><i class="bi bi-check-circle"></i>Strength analysis</li>
                            <li><i class="bi bi-check-circle"></i>Performance metrics</li>
                        </ul>
                    </div>
                </div>
                <div class="mission-card animate-on-scroll" style="--delay: 0.8s">
                    <div class="card-header">
                        <div class="mission-icon">
                            <i class="bi bi-controller"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="mission-number">05</div>
                    </div>
                    <div class="mission-content-inner">
                        <h3>Gamified Learning Experience</h3>
                        <p>Level up your skills like a game! Earn badges, unlock new content, and stay motivated through challenges and streaks.</p>
                        <ul class="mission-features">
                            <li><i class="bi bi-check-circle"></i>Achievements system</li>
                            <li><i class="bi bi-check-circle"></i>Daily challenges</li>
                            <li><i class="bi bi-check-circle"></i>Motivation tools</li>
                        </ul>
                    </div>
                </div>
                <div class="mission-card animate-on-scroll" style="--delay: 1s">
                    <div class="card-header">
                        <div class="mission-icon">
                            <i class="bi bi-globe2"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="mission-number">06</div>
                    </div>
                    <div class="mission-content-inner">
                        <h3>Cross-Platform Access</h3>
                        <p>Access your learning dashboard from your laptop, tablet, or mobile device — your progress is always in sync.</p>
                        <ul class="mission-features">
                            <li><i class="bi bi-check-circle"></i>Seamless sync</li>
                            <li><i class="bi bi-check-circle"></i>Multi-device support</li>
                            <li><i class="bi bi-check-circle"></i>Offline capabilities</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Additional Features -->
<section class="vision-section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge light">Bonus Tools</div>
            <h2>Bonus Tools to Boost Productivity</h2>
            <p>Beyond learning paths — use built-in tools designed to accelerate real-world skill development.</p>
        </div>
       
        <div class="vision-journey">
            <div class="journey-step animate-on-scroll" style="--delay: 0s">
                <div class="step-visual">
                    <div class="step-circle">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                    <div class="step-connector"></div>
                </div>
                <div class="step-content">
                    <div class="step-badge">Hands-On</div>
                    <h3>Interactive Projects</h3>
                    <p>Apply what you've learned in real-time with hands-on projects and assignments in tech, business, and design.</p>
                    <div class="step-metrics">
                        <span class="metric"><i class="bi bi-code-slash"></i> Tech Projects</span>
                        <span class="metric"><i class="bi bi-graph-up"></i> Business Cases</span>
                    </div>
                </div>
            </div>
            <div class="journey-step animate-on-scroll" style="--delay: 0.3s">
                <div class="step-visual">
                    <div class="step-circle">
                        <i class="bi bi-robot"></i>
                    </div>
                    <div class="step-connector"></div>
                </div>
                <div class="step-content">
                    <div class="step-badge">Revision</div>
                    <h3>Smart Revision Assistant</h3>
                    <p>Review topics in minutes. Our revision assistant summarizes key lessons and quizzes you for memory retention.</p>
                    <div class="step-metrics">
                        <span class="metric"><i class="bi bi-book"></i> Quick Summaries</span>
                        <span class="metric"><i class="bi bi-question-circle"></i> Practice Quizzes</span>
                    </div>
                </div>
            </div>
            <div class="journey-step animate-on-scroll" style="--delay: 0.6s">
                <div class="step-visual">
                    <div class="step-circle">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                </div>
                <div class="step-content">
                    <div class="step-badge">Scheduling</div>
                    <h3>Learning Scheduler</h3>
                    <p>Build a routine that works. Set weekly learning goals and we’ll keep you on track with reminders and streak tracking.</p>
                    <div class="step-metrics">
                        <span class="metric"><i class="bi bi-bell"></i> Reminders</span>
                        <span class="metric"><i class="bi bi-fire"></i> Streak Tracking</span>
                    </div>
                </div>
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
    .hero {
        background: linear-gradient(135deg,
            rgba(102, 126, 234, 0.1) 0%,
            rgba(118, 75, 162, 0.1) 30%,
            rgba(79, 172, 254, 0.1) 60%,
            rgba(0, 242, 254, 0.1) 100%);
        position: relative;
        overflow: hidden;
        padding: 140px 0 80px;
        min-height: 80vh;
        display: flex;
        align-items: center;
    }
    .hero::before {
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
    /* Enhanced Hero Content */
    .hero-content h1 {
        font-size: clamp(2.5rem, 6vw, 4rem);
        font-weight: 800;
        color: #2d3748;
        margin-bottom: 1.5rem;
    }
    .hero-content p {
        font-size: clamp(1.1rem, 3vw, 1.4rem);
        color: #718096;
        max-width: 600px;
        margin: 0 auto 2rem;
    }
    /* Enhanced Hero Stats */
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
    .timeline-badge {
        display: inline-flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-xl);
        padding: 0.75rem 1.5rem;
        margin-top: 2rem;
        animation: fadeInUp 1s ease-out 1.2s both;
    }
    .timeline-year {
        font-size: 0.9rem;
        font-weight: 600;
        color: #2d3748;
    }
    .timeline-text {
        font-size: 0.9rem;
        color: #718096;
        margin-left: 0.5rem;
    }
    /* Enhanced Floating Elements */
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
        width: 60px;
        height: 60px;
        background: rgba(79, 172, 254, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #4facfe;
        animation: float 8s ease-in-out infinite;
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
    .element-4 {
        bottom: 10%;
        right: 20%;
        animation-delay: 6s;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.6; }
        33% { transform: translateY(-20px) rotate(120deg); opacity: 0.8; }
        66% { transform: translateY(10px) rotate(240deg); opacity: 0.4; }
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
        color: #2d3748;
    }
    /* Enhanced Mission Section (Used for Features) */
    .mission-section {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
        padding: clamp(60px, 10vw, 100px) 0;
        position: relative;
    }
    .mission-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        position: relative;
        z-index: 2;
    }
    .mission-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(20px);
        padding: 2rem;
        border-radius: var(--border-radius-lg);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        animation-delay: var(--delay);
    }
    .mission-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 50px rgba(102, 126, 234, 0.15);
    }
    .card-header {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }
    .mission-icon {
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
    .mission-icon i {
        font-size: 1.5rem;
        color: #fff;
    }
    .mission-number {
        font-size: 2rem;
        font-weight: 800;
        opacity: 0.1;
    }
    .mission-content-inner h3 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 0.75rem;
    }
    .mission-content-inner p {
        color: #718096;
        margin-bottom: 1rem;
        line-height: 1.6;
    }
    .mission-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .mission-features li {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.85rem;
        color: #a0aec0;
        margin-bottom: 0.5rem;
    }
    .mission-features i {
        color: #10b981;
    }
    /* Enhanced Vision Section (Used for Additional Features) */
    .vision-section {
        background: var(--primary-gradient);
        color: #fff;
        padding: clamp(60px, 10vw, 100px) 0;
        position: relative;
        overflow: hidden;
    }
    .vision-section::before {
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
    .vision-section .section-header h2,
    .vision-section .section-header p {
        color: #fff;
    }
    .vision-journey {
        margin-top: 3rem;
        position: relative;
        z-index: 2;
    }
    .journey-step {
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
    .journey-step:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }
    .step-visual {
        position: relative;
        flex-shrink: 0;
    }
    .step-circle {
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
    .journey-step:last-child .step-connector {
        display: none;
    }
    .step-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-xl);
        padding: 0.5rem 1rem;
        margin-bottom: 1rem;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
    }
    .step-content h3 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0.75rem;
    }
    .step-content p {
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.6;
        font-size: 0.95rem;
    }
    .step-metrics {
        display: flex;
        gap: 1rem;
        margin-top: 1rem;
    }
    .metric {
        background: rgba(255, 255, 255, 0.2);
        padding: 0.5rem 1rem;
        border-radius: var(--border-radius-lg);
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
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
    .trust-indicators {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-top: 3rem;
        flex-wrap: wrap;
    }
    .trust-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        padding: 0.75rem 1.5rem;
        border-radius: var(--border-radius-lg);
        font-size: 0.9rem;
    }
    .trust-icon i {
        font-size: 1.2rem;
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
    @keyframes floatShape {
        0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.1; }
        50% { transform: translateY(-30px) rotate(180deg); opacity: 0.2; }
    }
    @keyframes orbFloat {
        0%, 100% { transform: translateY(0px) scale(1); opacity: 0.3; }
        50% { transform: translateY(-50px) scale(1.1); opacity: 0.6; }
    }
    /* Responsive Enhancements */
    @media (max-width: 768px) {
        .hero-stats {
            gap: 2rem;
            flex-direction: column;
        }
        .mission-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        .journey-step {
            flex-direction: column;
            text-align: center;
            gap: 1rem;
        }
        .step-connector {
            display: none;
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
        .trust-indicators {
            flex-direction: column;
            gap: 1rem;
        }
        .floating-element {
            display: none;
        }
    }
    @media (max-width: 576px) {
        .hero-stats {
            gap: 1.5rem;
        }
        .stat-item {
            padding: 0 1rem;
        }
        .mission-card, .journey-step {
            padding: 1.5rem;
        }
    }
    /* Animation Delays */
    .animate-on-scroll {
        animation-delay: var(--delay, 0s);
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

@endsection