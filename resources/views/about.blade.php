@extends('layouts.app')

@section('content')
    <!-- Enhanced About Hero Section -->
    <section class="hero about-hero">
        <div class="container">
            <div class="hero-content fade-in-up text-center">
                <div class="hero-badge">
                    <span class="badge-text">
                        <i class="bi bi-rocket-takeoff me-2"></i>
                        Empowering Education
                    </span>
                </div>
                <h1>About SkillCrafter</h1>
                <p>Revolutionizing education through AI-powered personalized learning experiences that adapt, evolve, and empower learners worldwide.</p>
                
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

                <!-- Company Timeline Badge -->
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

    <!-- Enhanced Mission Section -->
    <section id="mission" class="mission-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge">Our Mission</div>
                <h2>Democratizing Quality Education</h2>
                <p>We believe that every individual deserves access to world-class education, regardless of their background, location, or circumstances.</p>
            </div>
            
            <div class="mission-content">
                <div class="mission-grid">
                    <div class="mission-card animate-on-scroll" style="--delay: 0s">
                        <div class="card-header">
                            <div class="mission-icon">
                                <i class="bi bi-universal-access"></i>
                                <div class="icon-glow"></div>
                            </div>
                            <div class="mission-number">01</div>
                        </div>
                        <div class="mission-content-inner">
                            <h3>Accessible Learning</h3>
                            <p>Breaking down barriers to quality education by making it accessible to everyone, everywhere, at any time.</p>
                            <ul class="mission-features">
                                <li><i class="bi bi-check-circle"></i>No geographical limitations</li>
                                <li><i class="bi bi-check-circle"></i>Affordable pricing</li>
                                <li><i class="bi bi-check-circle"></i>Multiple device support</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mission-card animate-on-scroll" style="--delay: 0.2s">
                        <div class="card-header">
                            <div class="mission-icon">
                                <i class="bi bi-people"></i>
                                <div class="icon-glow"></div>
                            </div>
                            <div class="mission-number">02</div>
                        </div>
                        <div class="mission-content-inner">
                            <h3>Community Driven</h3>
                            <p>Building a vibrant ecosystem where learners, educators, and industry experts collaborate and grow together.</p>
                            <ul class="mission-features">
                                <li><i class="bi bi-check-circle"></i>Peer-to-peer learning</li>
                                <li><i class="bi bi-check-circle"></i>Expert mentorship</li>
                                <li><i class="bi bi-check-circle"></i>Knowledge sharing</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mission-card animate-on-scroll" style="--delay: 0.4s">
                        <div class="card-header">
                            <div class="mission-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                                <div class="icon-glow"></div>
                            </div>
                            <div class="mission-number">03</div>
                        </div>
                        <div class="mission-content-inner">
                            <h3>Future-Ready Skills</h3>
                            <p>Staying ahead of industry trends to ensure our learners acquire skills that matter in tomorrow's world.</p>
                            <ul class="mission-features">
                                <li><i class="bi bi-check-circle"></i>Cutting-edge curriculum</li>
                                <li><i class="bi bi-check-circle"></i>Industry partnerships</li>
                                <li><i class="bi bi-check-circle"></i>Continuous updates</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Vision Section -->
    <section id="vision" class="vision-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge light">Our Vision</div>
                <h2>Transforming Lives Through Education</h2>
                <p>Envision a world where learning knows no boundaries, powered by AI and driven by human potential.</p>
            </div>
            
            <div class="vision-journey">
                <div class="journey-step animate-on-scroll" style="--delay: 0s">
                    <div class="step-visual">
                        <div class="step-circle">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <div class="step-connector"></div>
                    </div>
                    <div class="step-content">
                        <div class="step-badge">Innovation</div>
                        <h3>Cutting-Edge Technology</h3>
                        <p>Leveraging the latest advances in artificial intelligence, machine learning, and educational technology to create personalized learning experiences that adapt to each individual's unique needs and learning style.</p>
                        <div class="step-metrics">
                            <span class="metric"><i class="bi bi-cpu"></i> AI-Powered</span>
                            <span class="metric"><i class="bi bi-graph-up"></i> Adaptive</span>
                        </div>
                    </div>
                </div>

                <div class="journey-step animate-on-scroll" style="--delay: 0.3s">
                    <div class="step-visual">
                        <div class="step-circle">
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="step-connector"></div>
                    </div>
                    <div class="step-content">
                        <div class="step-badge">Inspiration</div>
                        <h3>Unleashing Potential</h3>
                        <p>Inspiring learners to discover their passions, overcome challenges, and achieve goals they never thought possible through engaging, gamified, and meaningful learning experiences.</p>
                        <div class="step-metrics">
                            <span class="metric"><i class="bi bi-trophy"></i> Achievement</span>
                            <span class="metric"><i class="bi bi-heart"></i> Passion</span>
                        </div>
                    </div>
                </div>

                <div class="journey-step animate-on-scroll" style="--delay: 0.6s">
                    <div class="step-visual">
                        <div class="step-circle">
                            <i class="bi bi-globe"></i>
                        </div>
                    </div>
                    <div class="step-content">
                        <div class="step-badge">Impact</div>
                        <h3>Global Transformation</h3>
                        <p>Creating lasting positive change in communities worldwide by empowering individuals with the skills, knowledge, and confidence needed to thrive in an ever-evolving digital landscape.</p>
                        <div class="step-metrics">
                            <span class="metric"><i class="bi bi-people"></i> Community</span>
                            <span class="metric"><i class="bi bi-arrows-expand"></i> Growth</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Team Section -->
    <section id="team" class="team-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge">Meet Our Team</div>
                <h2>The Minds Behind SkillCrafter</h2>
                <p>A passionate duo dedicated to revolutionizing education through innovation, creativity, and unwavering commitment to learner success.</p>
            </div>
            
            <div class="team-grid">
                <div class="team-card animate-on-scroll" style="--delay: 0s">
                    <div class="card-background"></div>
                    <div class="team-avatar">
                        <div class="avatar-circle">
                            <span>HA</span>
                        </div>
                        <div class="avatar-status online"></div>
                    </div>
                    <div class="team-content">
                        <h3>Hamza Akram</h3>
                        <div class="team-role">
                            <i class="bi bi-code-slash"></i>
                            <span>Co-Founder & Full-Stack Developer</span>
                        </div>
                        <p>The technical mastermind who transforms complex ideas into elegant, scalable solutions. Hamza's expertise in modern web technologies and AI integration drives SkillCrafter's innovative platform.</p>
                        
                        <div class="team-skills">
                            <span class="skill-tag">Laravel</span>
                            <span class="skill-tag">React</span>
                            <span class="skill-tag">AI/ML</span>
                            <span class="skill-tag">DevOps</span>
                        </div>

                        <div class="team-stats">
                            <div class="stat">
                                <span class="stat-number">5+</span>
                                <span class="stat-label">Years Experience</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">100+</span>
                                <span class="stat-label">Projects Built</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-card animate-on-scroll" style="--delay: 0.3s">
                    <div class="card-background"></div>
                    <div class="team-avatar">
                        <div class="avatar-circle">
                            <span>HA</span>
                        </div>
                        <div class="avatar-status online"></div>
                    </div>
                    <div class="team-content">
                        <h3>Hassan Ali</h3>
                        <div class="team-role">
                            <i class="bi bi-palette"></i>
                            <span>Co-Founder & Creative Director</span>
                        </div>
                        <p>The creative visionary who brings SkillCrafter's mission to life through compelling storytelling, engaging presentations, and user-centered design that makes learning truly enjoyable.</p>
                        
                        <div class="team-skills">
                            <span class="skill-tag">Design</span>
                            <span class="skill-tag">UX/UI</span>
                            <span class="skill-tag">Content</span>
                            <span class="skill-tag">Strategy</span>
                        </div>

                        <div class="team-stats">
                            <div class="stat">
                                <span class="stat-number">4+</span>
                                <span class="stat-label">Years Experience</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">200+</span>
                                <span class="stat-label">Designs Created</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Values -->
            <div class="team-values">
                <div class="values-header animate-on-scroll">
                    <h3>Our Core Values</h3>
                    <p>The principles that guide every decision we make</p>
                </div>
                <div class="values-grid">
                    <div class="value-item animate-on-scroll" style="--delay: 0s">
                        <i class="bi bi-heart"></i>
                        <span>Learner-First</span>
                    </div>
                    <div class="value-item animate-on-scroll" style="--delay: 0.1s">
                        <i class="bi bi-lightbulb"></i>
                        <span>Innovation</span>
                    </div>
                    <div class="value-item animate-on-scroll" style="--delay: 0.2s">
                        <i class="bi bi-shield-check"></i>
                        <span>Integrity</span>
                    </div>
                    <div class="value-item animate-on-scroll" style="--delay: 0.3s">
                        <i class="bi bi-arrows-expand"></i>
                        <span>Growth</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Achievements Section -->
    <section class="achievements-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <div class="section-badge">Milestones</div>
                <h2>Our Journey So Far</h2>
                <p>Key achievements and milestones that mark our progress toward revolutionizing education</p>
            </div>

            <div class="achievements-timeline">
                <div class="timeline-item animate-on-scroll" style="--delay: 0s">
                    <div class="timeline-marker">
                        <i class="bi bi-rocket-takeoff"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-date">2024 Q1</div>
                        <h4>Platform Launch</h4>
                        <p>Successfully launched SkillCrafter with core AI-powered learning features</p>
                    </div>
                </div>

                <div class="timeline-item animate-on-scroll" style="--delay: 0.2s">
                    <div class="timeline-marker">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-date">2024 Q2</div>
                        <h4>Community Growth</h4>
                        <p>Reached our first 10,000 active learners and established vibrant learning communities</p>
                    </div>
                </div>

                <div class="timeline-item animate-on-scroll" style="--delay: 0.4s">
                    <div class="timeline-marker">
                        <i class="bi bi-trophy"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-date">2024 Q3</div>
                        <h4>Industry Recognition</h4>
                        <p>Recognized as an innovative EdTech startup with significant potential for impact</p>
                    </div>
                </div>

                <div class="timeline-item animate-on-scroll" style="--delay: 0.6s">
                    <div class="timeline-marker current">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-date">2024 Q4</div>
                        <h4>Scaling Success</h4>
                        <p>Expanding globally with enhanced AI features and personalized learning paths</p>
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

    /* Enhanced About Hero Section */
    .about-hero {
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

    .about-hero::before {
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

    .timeline-badge {
        margin-top: 2rem;
        animation: fadeInUp 1s ease-out 1.2s both;
    }

    .timeline-content {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: var(--border-radius-lg);
        padding: 1rem 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .timeline-year {
        font-weight: 800;
        font-size: 1.1rem;
        color: #667eea;
    }

    .timeline-text {
        color: #718096;
        font-size: 0.9rem;
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

    /* Enhanced Mission Section */
    .mission-section {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 50%, #e2e8f0 100%);
        padding: clamp(80px, 12vw, 120px) 0;
        position: relative;
        overflow: hidden;
    }

    .mission-section::before {
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

    .mission-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2.5rem;
        margin-top: 4rem;
        position: relative;
        z-index: 2;
    }

    .mission-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-lg);
        padding: 2.5rem;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        animation-delay: var(--delay);
    }

    .mission-card::before {
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

    .mission-card:hover::before {
        left: 0;
    }

    .mission-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: var(--shadow-xl);
        border-color: rgba(102, 126, 234, 0.2);
    }

    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 2rem;
    }

    .mission-icon {
        position: relative;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--primary-gradient);
        border-radius: 50%;
        box-shadow: var(--shadow-md);
        transition: all 0.4s ease;
    }

    .mission-icon i {
        font-size: 1.8rem;
        color: #fff;
        z-index: 2;
    }

    .icon-glow {
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

    .mission-card:hover .mission-icon {
        transform: scale(1.1) rotate(10deg);
    }

    .mission-card:hover .icon-glow {
        opacity: 0.7;
    }

    .mission-number {
        font-size: 2rem;
        font-weight: 800;
        background: linear-gradient(135deg, #a0aec0, #cbd5e0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        opacity: 0.3;
    }

    .mission-content-inner h3 {
        font-size: 1.4rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 1rem;
    }

    .mission-content-inner p {
        color: #718096;
        line-height: 1.7;
        margin-bottom: 1.5rem;
        font-size: 1rem;
    }

    .mission-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mission-features li {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem 0;
        color: #4a5568;
        font-size: 0.9rem;
    }

    .mission-features i {
        color: #10b981;
        font-size: 1rem;
    }

    /* Enhanced Vision Section */
    .vision-section {
        background: var(--primary-gradient);
        color: #fff;
        padding: clamp(80px, 12vw, 120px) 0;
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

    .vision-section .section-header h2,
    .vision-section .section-header p {
        color: #fff;
    }

    .vision-journey {
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

    .step-content {
        flex: 1;
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

    .step-metrics {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
    }

    .metric {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        padding: 0.5rem 1rem;
        border-radius: var(--border-radius-lg);
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.9);
    }

    .metric i {
        font-size: 1rem;
    }

    /* Enhanced Team Section */
    .team-section {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 50%, #e2e8f0 100%);
        padding: clamp(80px, 12vw, 120px) 0;
        position: relative;
        overflow: hidden;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 3rem;
        margin-top: 4rem;
    }

    .team-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-lg);
        padding: 3rem;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        animation-delay: var(--delay);
    }

    .card-background {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, 
            rgba(102, 126, 234, 0.05) 0%, 
            rgba(79, 172, 254, 0.05) 100%);
        transition: left 0.6s ease;
        z-index: -1;
    }

    .team-card:hover .card-background {
        left: 0;
    }

    .team-card:hover {
        transform: translateY(-20px) scale(1.03);
        box-shadow: var(--shadow-xl);
        border-color: rgba(102, 126, 234, 0.2);
    }

    .team-avatar {
        position: relative;
        margin-bottom: 2rem;
        display: flex;
        justify-content: center;
    }

    .avatar-circle {
        width: 100px;
        height: 100px;
        background: var(--primary-gradient);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: 800;
        color: #fff;
        box-shadow: var(--shadow-lg);
        transition: all 0.4s ease;
        position: relative;
        z-index: 2;
    }

    .team-card:hover .avatar-circle {
        transform: scale(1.1) rotate(10deg);
        box-shadow: var(--shadow-xl);
    }

    .avatar-status {
        position: absolute;
        bottom: 5px;
        right: 5px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 3px solid #fff;
        box-shadow: var(--shadow-sm);
    }

    .avatar-status.online {
        background: #10b981;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.2); opacity: 0.7; }
        100% { transform: scale(1); opacity: 1; }
    }

    .team-content h3 {
        font-size: 1.6rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 0.5rem;
        text-align: center;
    }

    .team-role {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        margin-bottom: 1.5rem;
        color: #667eea;
        font-weight: 600;
        font-size: 1rem;
    }

    .team-content p {
        color: #718096;
        line-height: 1.7;
        margin-bottom: 2rem;
        text-align: center;
        font-size: 1rem;
    }

    .team-skills {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 2rem;
        justify-content: center;
    }

    .skill-tag {
        background: rgba(102, 126, 234, 0.1);
        color: #667eea;
        padding: 0.5rem 1rem;
        border-radius: var(--border-radius-xl);
        font-size: 0.85rem;
        font-weight: 600;
        border: 1px solid rgba(102, 126, 234, 0.2);
        transition: all 0.3s ease;
    }

    .skill-tag:hover {
        background: var(--primary-gradient);
        color: #fff;
        transform: translateY(-2px);
    }

    .team-stats {
        display: flex;
        justify-content: center;
        gap: 2rem;
    }

    .team-stats .stat {
        text-align: center;
    }

    .team-stats .stat-number {
        font-size: 1.5rem;
        font-weight: 800;
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: block;
    }

    .team-stats .stat-label {
        font-size: 0.8rem;
        color: #a0aec0;
        margin-top: 0.25rem;
    }

    /* Team Values */
    .team-values {
        margin-top: 5rem;
        text-align: center;
    }

    .values-header h3 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 1rem;
    }

    .values-header p {
        color: #718096;
        margin-bottom: 2rem;
    }

    .values-grid {
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .value-item {
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
        animation-delay: var(--delay);
    }

    .value-item:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
    }

    .value-item i {
        font-size: 2rem;
        color: #667eea;
    }

    .value-item span {
        font-weight: 600;
        color: #2d3748;
    }

    /* Achievements Section */
    .achievements-section {
        background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%);
        color: #fff;
        padding: clamp(80px, 12vw, 120px) 0;
        position: relative;
        overflow: hidden;
    }

    .achievements-timeline {
        position: relative;
        margin-top: 4rem;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .achievements-timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 3px;
        background: rgba(255, 255, 255, 0.3);
        transform: translateX(-50%);
    }

    .timeline-item {
        display: flex;
        align-items: center;
        margin-bottom: 3rem;
        position: relative;
        animation-delay: var(--delay);
    }

    .timeline-item:nth-child(even) {
        flex-direction: row-reverse;
    }

    .timeline-item:nth-child(even) .timeline-content {
        text-align: right;
    }

    .timeline-marker {
        width: 60px;
        height: 60px;
        background: var(--primary-gradient);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #fff;
        box-shadow: var(--shadow-lg);
        position: relative;
        z-index: 2;
        flex-shrink: 0;
        margin: 0 2rem;
    }

    .timeline-marker.current {
        background: var(--success-gradient);
        animation: currentPulse 2s infinite;
    }

    @keyframes currentPulse {
        0% { box-shadow: var(--shadow-lg); }
        50% { box-shadow: 0 0 0 10px rgba(16, 185, 129, 0.3), var(--shadow-lg); }
        100% { box-shadow: var(--shadow-lg); }
    }

    .timeline-content {
        flex: 1;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: var(--border-radius-lg);
        padding: 2rem;
        transition: all 0.4s ease;
    }

    .timeline-content:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-5px);
    }

    .timeline-date {
        font-size: 0.9rem;
        color: #4ade80;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .timeline-content h4 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0.75rem;
    }

    .timeline-content p {
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.6;
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

    .trust-indicators {
        display: flex;
        justify-content: center;
        gap: 3rem;
        margin-top: 3rem;
        flex-wrap: wrap;
    }

    .trust-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: var(--border-radius-lg);
        padding: 1.5rem;
        transition: all 0.4s ease;
    }

    .trust-item:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.1);
    }

    .trust-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #4ade80;
    }

    .trust-item span {
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
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

        .mission-grid,
        .team-grid {
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

        .achievements-timeline::before {
            left: 30px;
        }

        .timeline-item {
            flex-direction: row !important;
            padding-left: 80px;
        }

        .timeline-item .timeline-content {
            text-align: left !important;
        }

        .timeline-marker {
            position: absolute;
            left: 0;
            margin: 0;
        }

        .values-grid {
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .trust-indicators {
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .floating-element {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .about-hero {
            padding: 120px 0 80px;
        }

        .mission-card,
        .team-card {
            padding: 2rem;
        }

        .journey-step {
            padding: 2rem;
        }

        .timeline-content {
            padding: 1.5rem;
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