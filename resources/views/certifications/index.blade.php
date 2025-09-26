@extends('layouts.app')

@section('content')
<!-- Enhanced Hero Section -->
<section class="hero certifications-hero">
    <div class="container">
        <div class="hero-content fade-in-up text-center">
            <div class="hero-badge">
                <span class="badge-text">
                    <i class="bi bi-award me-2"></i>
                    Your Achievements
                </span>
            </div>
            <h1>Your Certifications</h1>
            <p>Download and showcase your hard-earned achievements from SkillCrafter.</p>

            <!-- Enhanced Stats Section -->
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <div class="stat-number">{{ $certifications->count() }}</div>
                    <div class="stat-label">Certificates Earned</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-book"></i>
                    </div>
                    <div class="stat-number">Courses</div>
                    <div class="stat-label">Completed</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-download"></i>
                    </div>
                    <div class="stat-number">Instant</div>
                    <div class="stat-label">Downloads</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Hero Decorations -->
    <div class="hero-decoration">
        <div class="floating-element element-1">
            <i class="bi bi-award"></i>
        </div>
        <div class="floating-element element-2">
            <i class="bi bi-star-fill"></i>
        </div>
        <div class="floating-element element-3">
            <i class="bi bi-trophy"></i>
        </div>
        <div class="floating-element element-4">
            <i class="bi bi-certificate"></i>
        </div>
    </div>
</section>

<!-- Enhanced Certifications Section -->
<section class="certifications-section">
    <div class="container">
        <div class="row g-4">
            @forelse($certifications as $index => $cert)
                <div class="col-md-4">
                    <div class="benefit-card animate-on-scroll" style="--delay: {{ $index * 0.1 }}s">
                        <div class="benefit-icon">
                            <i class="bi bi-award-fill"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="benefit-content">
                            <h3>{{ $cert->course->name }}</h3>
                            <p class="text-muted">Certified on {{ $cert->created_at->format('M d, Y') }}</p>
                        </div>
                        <div class="benefit-actions">
                            <a href="{{ route('certifications.download', $cert->id) }}" class="cta-button cta-primary">
                                <i class="bi bi-download me-2"></i>
                                <span>Download Certificate</span>
                            </a>
                        </div>
                        <!-- Card Decoration -->
                        <div class="card-decoration">
                            <div class="decoration-dot dot-1"></div>
                            <div class="decoration-dot dot-2"></div>
                            <div class="decoration-dot dot-3"></div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="empty-state animate-on-scroll">
                        <div class="empty-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <h3>No Certifications Yet</h3>
                        <p class="text-muted">Complete courses to earn certificates and showcase your achievements!</p>
                        <a href="{{ route('courses.index') }}" class="empty-action-btn">
                            <i class="bi bi-arrow-right me-2"></i>
                            Explore Courses
                        </a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

<style>
    /* CSS Variables */
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

    /* Hero Section */
    .certifications-hero {
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

    .certifications-hero::before {
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

    /* Hero Stats */
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

    /* Floating Elements */
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

    /* Certifications Section */
    .certifications-section {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 50%, #e2e8f0 100%);
        padding: clamp(60px, 10vw, 100px) 0;
        position: relative;
        overflow: hidden;
    }

    .certifications-section::before {
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

    .benefit-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-lg);
        padding: 2rem;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        animation: fadeInUp 1s ease-out both;
        animation-delay: var(--delay);
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .benefit-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg,
            rgba(102, 126, 234, 0.05) 0%,
            rgba(79, 172, 254, 0.05) 100%);
        transition: left 0.5s ease;
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

    .benefit-icon {
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
        margin: 0 auto 1.5rem;
    }

    .benefit-icon i {
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

    .benefit-card:hover .benefit-icon {
        transform: scale(1.1) rotate(10deg);
    }

    .benefit-card:hover .icon-glow {
        opacity: 0.7;
    }

    .benefit-content h3 {
        font-size: clamp(1.2rem, 2vw, 1.5rem);
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 1rem;
    }

    .benefit-content p {
        font-size: 0.9rem;
        color: #718096;
        margin-bottom: 1.5rem;
    }

    .benefit-actions {
        margin-top: auto;
        display: flex;
        justify-content: center;
    }

    .cta-button {
        background: var(--primary-gradient);
        color: #fff;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: var(--border-radius-lg);
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .cta-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: var(--secondary-gradient);
        transition: left 0.4s ease;
        z-index: -1;
    }

    .cta-button:hover::before {
        left: 0;
    }

    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
    }

    /* Card Decoration */
    .card-decoration {
        position: absolute;
        top: 1rem;
        right: 1rem;
        pointer-events: none;
    }

    .decoration-dot {
        width: 6px;
        height: 6px;
        background: var(--accent-gradient);
        border-radius: 50%;
        opacity: 0.3;
        margin-bottom: 4px;
        animation: pulse 2s infinite;
    }

    .dot-1 { animation-delay: 0s; }
    .dot-2 { animation-delay: 0.5s; }
    .dot-3 { animation-delay: 1s; }

    @keyframes pulse {
        0%, 100% { opacity: 0.3; transform: scale(1); }
        50% { opacity: 0.8; transform: scale(1.5); }
    }

    /* Empty State */
    .empty-state {
        background: rgba(255, 255, 255, 0.6);
        border: 2px dashed rgba(160, 174, 192, 0.3);
        border-radius: var(--border-radius-lg);
        padding: 4rem 2rem;
        text-align: center;
        animation: fadeInUp 1s ease-out both;
    }

    .empty-icon {
        width: 80px;
        height: 80px;
        background: rgba(160, 174, 192, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 2rem;
        color: #a0aec0;
    }

    .empty-state h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #4a5568;
        margin-bottom: 1rem;
    }

    .empty-state p {
        color: #718096;
        margin-bottom: 1rem;
    }

    .empty-action-btn {
        display: inline-flex;
        align-items: center;
        background: var(--primary-gradient);
        color: #fff;
        padding: 0.75rem 1.5rem;
        border-radius: var(--border-radius-xl);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        margin-top: 1rem;
    }

    .empty-action-btn:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
    }

    /* Animations */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-stats {
            gap: 2rem;
            flex-direction: column;
        }
        .row.g-4 {
            gap: 1.5rem !important;
        }
        .benefit-card {
            padding: 1.5rem;
        }
        .floating-element {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .certifications-hero {
            padding: 120px 0 60px;
        }
        .benefit-content h3 {
            font-size: 1.2rem;
        }
        .benefit-content p {
            font-size: 0.85rem;
        }
    }
</style>

@endsection