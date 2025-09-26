@extends('layouts.app')

@section('content')
<!-- Enhanced Hero Section for Register -->
<section class="hero register-hero">
    <div class="container">
        <div class="hero-content fade-in-up text-center">
            <div class="hero-badge">
                <span class="badge-text">
                    <i class="bi bi-person-plus me-2"></i>
                    Join the Community
                </span>
            </div>
            <h1>Create Your Account</h1>
            <p>Start your learning journey with SkillCrafter by creating a personalized account today.</p>
           
            <!-- Enhanced Register Stats -->
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="stat-number">50K+</div>
                    <div class="stat-label">Learners Joined</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="stat-number">Secure</div>
                    <div class="stat-label">Sign-Up</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-rocket-takeoff"></i>
                    </div>
                    <div class="stat-number">Instant</div>
                    <div class="stat-label">Access</div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Enhanced Hero Decorations -->
    <div class="hero-decoration">
        <div class="floating-element element-1">
            <i class="bi bi-person-plus"></i>
        </div>
        <div class="floating-element element-2">
            <i class="bi bi-star"></i>
        </div>
        <div class="floating-element element-3">
            <i class="bi bi-bookmark-check"></i>
        </div>
        <div class="floating-element element-4">
            <i class="bi bi-key"></i>
        </div>
    </div>
</section>

<!-- Enhanced Register Form Section -->
<section class="register-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mission-card animate-on-scroll" style="--delay: 0s">
                    <div class="card-header">
                        <div class="mission-icon">
                            <i class="bi bi-person-plus-fill"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="mission-number">Register</div>
                    </div>
                    <div class="mission-content-inner">
                        @if ($errors->any())
                            <div class="alert alert-danger rounded-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Full Name</label>
                                <input id="name" type="text" class="form-control rounded-3" name="name" value="{{ old('name') }}" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email Address</label>
                                <input id="email" type="email" class="form-control rounded-3" name="email" value="{{ old('email') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <input id="password" type="password" class="form-control rounded-3" name="password" required>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
                                <input id="password_confirmation" type="password" class="form-control rounded-3" name="password_confirmation" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-lg text-white fw-semibold cta-button cta-primary">
                                    Register
                                </button>
                            </div>

                            <div class="mt-3 text-center">
                                <a href="{{ route('login') }}" class="text-decoration-none" style="color: #667eea;">Already have an account? Login</a>
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
    .register-hero {
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
    .register-hero::before {
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
    /* Register Section (Using Benefits Style) */
    .register-section {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 50%, #e2e8f0 100%);
        padding: clamp(60px, 10vw, 100px) 0;
        position: relative;
        overflow: hidden;
    }
    .register-section::before {
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
    .mission-content-inner .form-label {
        font-size: 0.95rem;
        color: #2d3748;
    }
    .mission-content-inner .form-control {
        background: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(102, 126, 234, 0.2);
        transition: all 0.3s ease;
    }
    .mission-content-inner .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }
    .mission-content-inner .alert {
        margin-bottom: 1.5rem;
    }
    .mission-content-inner a {
        color: #667eea;
        transition: color 0.3s ease;
    }
    .mission-content-inner a:hover {
        color: #764ba2;
    }
    /* Responsive Enhancements */
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
        .register-hero {
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
</style>

@endsection