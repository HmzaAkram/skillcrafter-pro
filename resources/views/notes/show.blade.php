@extends('layouts.app')

@section('content')
<!-- Enhanced Hero Section -->
<section class="hero note-hero">
    <div class="container">
        <div class="hero-content fade-in-up text-center">
            <div class="hero-badge">
                <span class="badge-text">
                    <i class="bi bi-journal-text me-2"></i>
                    Study Note
                </span>
            </div>
            <h1>{{ $note->title }}</h1>
            <div class="note-meta">
                <div class="meta-item">
                    <i class="bi bi-calendar3 me-1"></i>
                    <span>{{ $note->created_at->format('M d, Y') }}</span>
                </div>
                @if($note->file_path)
                    <div class="meta-item">
                        <i class="bi bi-file-earmark me-1"></i>
                        <span>{{ Str::endsWith($note->file_path, '.pdf') ? 'PDF' : 'File' }}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Hero Decorations -->
    <div class="hero-decoration">
        <div class="floating-element element-1">
            <i class="bi bi-file-text"></i>
        </div>
        <div class="floating-element element-2">
            <i class="bi bi-book"></i>
        </div>
        <div class="floating-element element-3">
            <i class="bi bi-journal-bookmark"></i>
        </div>
    </div>
</section>

<!-- Enhanced Note Content Section -->
<section class="note-section">
    <div class="container">
        <div class="note-content animate-on-scroll">
            <!-- Text Content -->
            @if($note->content)
                <div class="content-card">
                    <div class="card-header">
                        <div class="content-icon">
                            <i class="bi bi-file-earmark-text"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <h2>Note Content</h2>
                    </div>
                    <div class="content-body">
                        <p style="white-space: pre-line;">{{ $note->content }}</p>
                    </div>
                </div>
            @endif

            <!-- File Content -->
            @if($note->file_path)
                <div class="content-card">
                    <div class="card-header">
                        <div class="content-icon">
                            <i class="bi bi-file-earmark"></i>
                            <div class="icon-glow"></div>
                        </div>
                        <h2>{{ Str::endsWith($note->file_path, '.pdf') ? 'PDF Viewer' : 'Attached File' }}</h2>
                    </div>
                    <div class="content-body">
                        @if(Str::endsWith($note->file_path, '.pdf'))
                            <div class="pdf-viewer">
                                <iframe src="{{ asset('storage/'.$note->file_path) }}#toolbar=0&navpanes=0&scrollbar=0" width="100%" height="600px" class="rounded-3"></iframe>
                            </div>
                            <div class="file-actions">
                                <a href="{{ asset('storage/'.$note->file_path) }}" class="cta-button cta-primary" download>
                                    <i class="bi bi-download me-2"></i>
                                    <span>Download PDF</span>
                                </a>
                                <a href="{{ asset('storage/'.$note->file_path) }}" class="cta-button cta-secondary" target="_blank">
                                    <i class="bi bi-eye me-2"></i>
                                    <span>Open in New Tab</span>
                                </a>
                            </div>
                        @else
                            <div class="file-preview">
                                <img src="{{ asset('storage/'.$note->file_path) }}" alt="File Preview" class="img-fluid rounded-3" style="max-height: 400px;">
                            </div>
                            <div class="file-actions">
                                <a href="{{ asset('storage/'.$note->file_path) }}" class="cta-button cta-primary" download>
                                    <i class="bi bi-download me-2"></i>
                                    <span>Download File</span>
                                </a>
                                <a href="{{ asset('storage/'.$note->file_path) }}" class="cta-button cta-secondary" target="_blank">
                                    <i class="bi bi-eye me-2"></i>
                                    <span>View File</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            <!-- Back Button -->
            <div class="text-center mt-4">
                <a href="{{ route('notes.index') }}" class="cta-button cta-secondary">
                    <i class="bi bi-arrow-left me-2"></i>
                    <span>Back to Notes</span>
                </a>
            </div>
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
    .note-hero {
        background: linear-gradient(135deg,
            rgba(102, 126, 234, 0.1) 0%,
            rgba(118, 75, 162, 0.1) 30%,
            rgba(79, 172, 254, 0.1) 60%,
            rgba(0, 242, 254, 0.1) 100%);
        position: relative;
        overflow: hidden;
        padding: 140px 0 80px;
        min-height: 60vh;
        display: flex;
        align-items: center;
    }

    .note-hero::before {
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

    .hero-badge {
        display: inline-flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.25);
        backdrop-filter: blur(20px);
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-xl);
        padding: 0.75rem 1.5rem;
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

    .note-meta {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
        color: #718096;
    }

    .meta-item i {
        font-size: 1rem;
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

    @keyframes advancedFloat {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); opacity: 0.6; }
        25% { transform: translateY(-30px) translateX(15px) rotate(90deg); opacity: 0.9; }
        50% { transform: translateY(20px) translateX(-10px) rotate(180deg); opacity: 0.4; }
        75% { transform: translateY(-15px) translateX(20px) rotate(270deg); opacity: 0.7; }
    }

    /* Note Section */
    .note-section {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 50%, #e2e8f0 100%);
        padding: clamp(60px, 10vw, 100px) 0;
        position: relative;
        overflow: hidden;
    }

    .note-section::before {
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

    .note-content {
        max-width: 900px;
        margin: 0 auto;
    }

    /* Content Card */
    .content-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-lg);
        padding: 2rem;
        margin-bottom: 2rem;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        animation: fadeInUp 1s ease-out both;
    }

    .content-card::before {
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

    .content-card:hover::before {
        left: 0;
    }

    .content-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-xl);
        border-color: rgba(102, 126, 234, 0.2);
    }

    .card-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .content-icon {
        position: relative;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--primary-gradient);
        border-radius: 50%;
        box-shadow: var(--shadow-md);
        transition: all 0.4s ease;
    }

    .content-icon i {
        font-size: 1.5rem;
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

    .content-card:hover .content-icon {
        transform: scale(1.1) rotate(10deg);
    }

    .content-card:hover .icon-glow {
        opacity: 0.7;
    }

    .card-header h2 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #2d3748;
        margin: 0;
    }

    .content-body p {
        font-size: 1rem;
        color: #4a5568;
        line-height: 1.8;
        margin: 0;
    }

    /* PDF Viewer and File Preview */
    .pdf-viewer, .file-preview {
        margin-bottom: 1.5rem;
    }

    .pdf-viewer iframe {
        border: 1px solid rgba(102, 126, 234, 0.2);
        box-shadow: var(--shadow-sm);
    }

    .file-preview img {
        max-width: 100%;
        border: 1px solid rgba(102, 126, 234, 0.2);
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
    }

    .file-preview img:hover {
        transform: scale(1.02);
        box-shadow: var(--shadow-md);
    }

    .file-actions {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    /* CTA Buttons */
    .cta-button {
        display: inline-flex;
        align-items: center;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: var(--border-radius-lg);
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
    }

    .cta-primary {
        background: var(--primary-gradient);
        color: #fff;
        border: 2px solid transparent;
    }

    .cta-primary::before {
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

    .cta-primary:hover::before {
        left: 0;
    }

    .cta-primary:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
    }

    .cta-secondary {
        background: rgba(255, 255, 255, 0.8);
        color: #667eea;
        border: 2px solid rgba(102, 126, 234, 0.2);
    }

    .cta-secondary:hover {
        background: var(--primary-gradient);
        color: #fff;
        border-color: transparent;
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
        .note-hero {
            padding: 120px 0 60px;
        }

        .note-meta {
            flex-direction: column;
            gap: 0.5rem;
        }

        .file-actions {
            flex-direction: column;
        }

        .cta-button {
            width: 100%;
        }

        .floating-element {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .content-card {
            padding: 1.5rem;
        }

        .card-header h2 {
            font-size: 1.3rem;
        }

        .pdf-viewer iframe {
            height: 400px;
        }
    }
</style>

@endsection