@extends('layouts.app')

@section('content')
<!-- Enhanced Hero Section -->
<section class="hero courses-hero">
    <div class="container">
        <div class="hero-content fade-in-up text-center">
            <div class="hero-badge">
                <span class="badge-text">
                    <i class="bi bi-mortarboard-fill me-2"></i>
                    Course Details
                </span>
            </div>
            <h1 class="fw-bold">{{ $course->name }}</h1>
            <p class="text-muted">{{ $course->description }}</p>

            <!-- Progress Bar (Uncomment to Enable) -->
            @if($enrolled)
                <div class="progress-wrapper my-4">
                    <div class="progress" style="height: 24px; max-width: 600px; margin: auto; border-radius: var(--border-radius-md); overflow: hidden;">
                        <div class="progress-bar bg-success fw-bold" role="progressbar"
                            style="width: {{ $progressPercentage }}%; background: var(--success-gradient);"
                            aria-valuenow="{{ $progressPercentage }}"
                            aria-valuemin="0"
                            aria-valuemax="100">
                            {{ $progressPercentage }}%
                        </div>
                    </div>
                </div>
            @endif

            <!-- Hero Decorations -->
            <div class="hero-decoration">
                <div class="floating-element element-1">
                    <i class="bi bi-mortarboard"></i>
                </div>
                <div class="floating-element element-2">
                    <i class="bi bi-book"></i>
                </div>
                <div class="floating-element element-3">
                    <i class="bi bi-award"></i>
                </div>
                <div class="floating-element element-4">
                    <i class="bi bi-lightbulb"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Course Content Section -->
<section class="courses-section">
    <div class="container">
        <div class="notes-grid">
            @if(!$enrolled)
                <!-- Enrollment Card -->
                <div class="benefit-card animate-on-scroll text-center">
                    <div class="benefit-icon">
                        <i class="bi bi-rocket-takeoff-fill"></i>
                        <div class="icon-glow"></div>
                    </div>
                    <h3>Enroll in this Course</h3>
                    <p>Unlock access to all course materials, video lessons, and the MCQ test by enrolling now.</p>
                    <form method="POST" action="{{ route('courses.enroll', $course->id) }}">
                        @csrf
                        <button type="submit" class="action-btn enroll-btn mt-3">
                            <i class="bi bi-person-plus me-2"></i>
                            Enroll Now
                        </button>
                    </form>
                    <!-- Card Decoration -->
                    <div class="card-decoration">
                        <div class="decoration-dot dot-1"></div>
                        <div class="decoration-dot dot-2"></div>
                        <div class="decoration-dot dot-3"></div>
                    </div>
                </div>
            @else
                <!-- Course Video -->
                @if($course->video)
                    <div class="benefit-card animate-on-scroll text-center">
                        <div class="benefit-icon">
                            <i class="bi bi-camera-video-fill"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <h3>Course Video</h3>
                        <video controls class="video-player shadow-sm rounded mt-3" style="max-width: 100%;">
                            <source src="{{ asset('storage/' . $course->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="benefit-actions mt-4">
                            <a href="{{ route('courses.mcq.test', $course->id) }}" class="action-btn read-btn">
                                <i class="bi bi-check2-square me-2"></i>
                                Take MCQ Test
                            </a>
                        </div>
                        <!-- Card Decoration -->
                        <div class="card-decoration">
                            <div class="decoration-dot dot-1"></div>
                            <div class="decoration-dot dot-2"></div>
                            <div class="decoration-dot dot-3"></div>
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="get-started">
    <div class="container text-center">
        <div class="animate-on-scroll">
            <div class="section-badge">Continue Your Journey</div>
            <h2>Keep Learning, Keep Growing 🚀</h2>
            <p>Track your progress, complete tests, and unlock certificates as you move forward.</p>
            <a href="{{ route('courses.index') }}" class="action-btn read-btn">
                <i class="bi bi-arrow-left me-2"></i>
                Back to Courses
            </a>
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
    .courses-hero {
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

    .courses-hero::before {
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
        max-width: 700px;
        margin: 0 auto 2rem;
        line-height: 1.6;
    }

    /* Hero Badge */
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

    /* Progress Bar */
    .progress-wrapper {
        max-width: 600px;
        margin: 0 auto;
        animation: fadeInUp 1s ease-out 0.4s both;
    }

    .progress {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .progress-bar {
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: width 0.6s ease;
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

    .element-1 { top: 15%; left: 8%; animation-delay: 0s; }
    .element-2 { top: 25%; right: 12%; animation-delay: 3s; }
    .element-3 { bottom: 35%; left: 15%; animation-delay: 6s; }
    .element-4 { top: 70%; right: 20%; animation-delay: 9s; }

    @keyframes advancedFloat {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); opacity: 0.6; }
        25% { transform: translateY(-30px) translateX(15px) rotate(90deg); opacity: 0.9; }
        50% { transform: translateY(20px) translateX(-10px) rotate(180deg); opacity: 0.4; }
        75% { transform: translateY(-15px) translateX(20px) rotate(270deg); opacity: 0.7; }
    }

    /* Courses Section */
    .courses-section {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 50%, #e2e8f0 100%);
        padding: clamp(60px, 10vw, 100px) 0;
        position: relative;
        overflow: hidden;
    }

    .courses-section::before {
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

    /* Notes Grid (Reused for Courses) */
    .notes-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        max-width: 800px;
        margin: 0 auto;
    }

    /* Course Card */
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
        display: flex;
        flex-direction: column;
        align-items: center;
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

    .benefit-card h3 {
        font-size: clamp(1.2rem, 2vw, 1.5rem);
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 1rem;
    }

    .benefit-card p {
        font-size: 0.95rem;
        color: #718096;
        line-height: 1.6;
        margin-bottom: 1.5rem;
        max-width: 500px;
    }

    .benefit-actions {
        display: flex;
        gap: 0.75rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .action-btn {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1.5rem;
        border-radius: var(--border-radius-lg);
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        min-width: 160px;
    }

    .enroll-btn {
        background: var(--success-gradient);
        color: #fff;
        border: 2px solid transparent;
    }

    .enroll-btn:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
    }

    .read-btn {
        background: rgba(102, 126, 234, 0.1);
        color: #667eea;
        border: 2px solid rgba(102, 126, 234, 0.2);
    }

    .read-btn:hover {
        background: var(--primary-gradient);
        color: #fff;
        border-color: transparent;
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
    }

    /* Video Player */
    .video-player {
        max-width: 100%;
        border: 2px solid rgba(102, 126, 234, 0.2);
        transition: all 0.3s ease;
    }

    .video-player:hover {
        border-color: rgba(102, 126, 234, 0.4);
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

    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 50%, #e2e8f0 100%);
        padding: clamp(60px, 10vw, 100px) 0;
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
            radial-gradient(circle at 10% 20%, rgba(102, 126, 234, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 90% 80%, rgba(79, 172, 254, 0.05) 0%, transparent 50%);
    }

    .cta-section h2 {
        font-size: clamp(1.8rem, 4vw, 2.5rem);
        font-weight: 800;
        color: #2d3748;
        margin-bottom: 1rem;
    }

    .cta-section p {
        font-size: 1.1rem;
        color: #718096;
        max-width: 600px;
        margin: 0 auto 2rem;
    }

    .section-badge {
        display: inline-block;
        background: var(--primary-gradient);
        color: #fff;
        padding: 0.5rem 1.5rem;
        border-radius: var(--border-radius-xl);
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .notes-grid {
            grid-template-columns: 1fr;
        }

        .benefit-actions {
            flex-direction: column;
        }

        .action-btn {
            width: 100%;
        }

        .floating-element {
            display: none;
        }

        .video-player {
            max-width: 100%;
        }
    }

    @media (max-width: 576px) {
        .courses-hero {
            padding: 120px 0 60px;
        }

        .benefit-card {
            padding: 1.5rem;
        }

        .benefit-card h3 {
            font-size: 1.2rem;
        }

        .benefit-card p {
            font-size: 0.9rem;
        }

        .cta-section {
            padding: 60px 0;
        }
    }

    /* Animations */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

@endsection