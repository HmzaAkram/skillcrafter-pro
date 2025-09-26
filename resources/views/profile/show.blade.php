@extends('layouts.app')

@section('content')
<!-- Enhanced Hero Section -->
<section class="hero profile-hero">
    <div class="container">
        <div class="hero-content fade-in-up text-center">
            <div class="hero-badge">
                <span class="badge-text">
                    <i class="bi bi-person me-2"></i>
                    Personal Dashboard
                </span>
            </div>
            <h1>My Profile</h1>
            <p>Update your personal details, skills, and learning goals to personalize your SkillCrafter experience.</p>
           
            <!-- Enhanced Profile Stats -->
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-person-badge"></i>
                    </div>
                    <div class="stat-number">{{ $user->courses->count() }}</div>
                    <div class="stat-label">Courses Enrolled</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="stat-number">Skills</div>
                    <div class="stat-label">Mastered</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="stat-number">Active</div>
                    <div class="stat-label">Since {{ $user->created_at->format('M Y') }}</div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Enhanced Hero Decorations -->
    <div class="hero-decoration">
        <div class="floating-element element-1">
            <i class="bi bi-person-circle"></i>
        </div>
        <div class="floating-element element-2">
            <i class="bi bi-gear"></i>
        </div>
        <div class="floating-element element-3">
            <i class="bi bi-star"></i>
        </div>
        <div class="floating-element element-4">
            <i class="bi bi-book"></i>
        </div>
    </div>
</section>

<!-- Enhanced Profile Form Section -->
<section class="profile-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mission-card animate-on-scroll" style="--delay: 0s">
                    <div class="card-header">
                        <div class="mission-icon">
                            <i class="bi bi-person-gear"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="mission-number">Profile</div>
                    </div>
                    <div class="mission-content-inner">
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control rounded-3" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control rounded-3" required>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">New Password</label>
                                <input type="password" name="password" class="form-control rounded-3" placeholder="Enter new password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control rounded-3" placeholder="Re-enter new password">
                            </div>

                            <!-- Profile Picture -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Profile Picture</label>
                                <input type="file" name="profile_picture" class="form-control rounded-3">
                                @if($user->profile_picture)
                                    <div class="mt-2 text-center">
                                        <img src="{{ asset('storage/'.$user->profile_picture) }}" alt="Profile" class="img-thumbnail rounded-circle" style="max-width: 120px; height: 120px; object-fit: cover;">
                                    </div>
                                @endif
                            </div>

                            <!-- Skills / Interests -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Skills & Interests</label>
                                <textarea name="skill_interests" rows="3" class="form-control rounded-3">{{ $user->skill_interests }}</textarea>
                            </div>

                            <!-- Learning Goals -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Learning Goals</label>
                                <textarea name="learning_goals" rows="3" class="form-control rounded-3">{{ $user->learning_goals }}</textarea>
                            </div>

                            <!-- Submit -->
                            <div class="text-center">
                                <button type="submit" class="cta-button cta-primary">
                                    <span>Update Profile</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </form>
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
    .profile-hero {
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

    .profile-hero::before {
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

    /* Hero Content */
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

    /* Profile Section */
    .profile-section {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 50%, #e2e8f0 100%);
        padding: clamp(60px, 10vw, 100px) 0;
        position: relative;
        overflow: hidden;
    }

    .profile-section::before {
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

    /* Mission Card for Form */
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

    /* Form Styling */
    .mission-content-inner .form-label {
        font-size: 0.95rem;
        color: #2d3748;
        font-weight: 600;
    }

    .mission-content-inner .form-control {
        background: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(102, 126, 234, 0.2);
        border-radius: var(--border-radius-md);
        transition: all 0.3s ease;
    }

    .mission-content-inner .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }

    .img-thumbnail {
        border-radius: 50%;
    }

    /* CTA Button */
    .cta-button {
        background: var(--primary-gradient);
        color: #fff;
        padding: 1rem 2.5rem;
        font-size: 1.125rem;
        font-weight: 600;
        border-radius: var(--border-radius-lg);
        border: none;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        display: inline-flex;
        align-items: center;
        justify-content: center;
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

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-stats {
            gap: 2rem;
            flex-direction: column;
        }
        .mission-card {
            padding: 2rem;
        }
        .floating-element {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .profile-hero {
            padding: 120px 0 60px;
        }
        .mission-card {
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