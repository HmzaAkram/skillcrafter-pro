@extends('layouts.app')

@section('content')
<!-- Enhanced Hero Section -->
<section class="hero notes-hero">
    <div class="container">
        <div class="hero-content fade-in-up text-center">
            <div class="hero-badge">
                <span class="badge-text">
                    <i class="bi bi-journal-text me-2"></i>
                    Study Resources
                </span>
            </div>
            <h1>Student Notes</h1>
            <p>Access comprehensive study materials and notes curated by our educational experts.</p>

            <!-- Enhanced Search Bar -->
            <div class="search-container mt-4">
                <form method="GET" action="{{ route('notes.index') }}" class="search-form">
                    <div class="search-wrapper">
                        <div class="search-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <input type="text" 
                               name="search" 
                               class="search-input" 
                               placeholder="Search notes by title or content..." 
                               value="{{ request('search') }}"
                               autocomplete="off">
                        <button class="search-button cta-primary" type="submit">
                            <span>Search</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>

                <!-- Enhanced Search Results Info -->
                @if(request('search'))
                    <div class="search-results-info animate-on-scroll">
                        <div class="results-badge">
                            <i class="bi bi-funnel me-2"></i>
                            <span>Filtered Results</span>
                        </div>
                        <p class="results-text">
                            Showing results for: <strong>"{{ request('search') }}"</strong>
                        </p>
                        <a href="{{ route('notes.index') }}" class="clear-search-btn">
                            <i class="bi bi-x-circle me-1"></i>
                            Clear Search
                        </a>
                    </div>
                @endif
            </div>

            <!-- Notes Statistics -->
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="stat-number">{{ $notes->total() }}</div>
                    <div class="stat-label">Total Notes</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-eye"></i>
                    </div>
                    <div class="stat-number">{{ $notes->count() }}</div>
                    <div class="stat-label">Showing</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="bi bi-unlock"></i>
                    </div>
                    <div class="stat-number">Free</div>
                    <div class="stat-label">Access</div>
                </div>
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
        <div class="floating-element element-4">
            <i class="bi bi-pencil-square"></i>
        </div>
    </div>
</section>

<!-- Enhanced Notes Section -->
<section class="notes-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header animate-on-scroll">
            @if(request('search'))
                <div class="section-badge">Search Results</div>
                <h2>Found {{ $notes->total() }} {{ Str::plural('Note', $notes->total()) }}</h2>
                <p>Here are the notes matching your search criteria</p>
            @else
                <div class="section-badge">Library</div>
                <h2>Browse All Notes</h2>
                <p>Explore our comprehensive collection of educational materials</p>
            @endif
        </div>

        <!-- Notes Grid -->
        <div class="notes-grid">
            @forelse($notes as $index => $note)
                <div class="benefit-card animate-on-scroll" style="--delay: {{ $index * 0.1 }}s">
                    <div class="benefit-icon">
                        <i class="bi bi-file-earmark-text"></i>
                        <div class="icon-glow"></div>
                    </div>
                    <div class="benefit-content">
                        <h3>{{ $note->title }}</h3>
                        <p class="note-preview">{{ Str::limit($note->content, 150) }}</p>
                        <div class="note-meta">
                            <div class="meta-item">
                                <i class="bi bi-calendar3"></i>
                                <span>{{ $note->created_at->format('M d, Y') }}</span>
                            </div>
                            @if($note->file_path)
                                <div class="meta-item">
                                    <i class="bi bi-file-earmark"></i>
                                    <span>{{ Str::endsWith($note->file_path, '.pdf') ? 'PDF' : 'Text' }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="benefit-actions">
                        @if($note->file_path && Str::endsWith($note->file_path, '.pdf'))
                            <a href="{{ asset('storage/'.$note->file_path) }}" class="action-btn read-btn" target="_blank">
                                <i class="bi bi-eye me-2"></i>
                                <span>Read PDF</span>
                            </a>
                        @else
                            <a href="{{ route('notes.show', $note) }}" class="action-btn read-btn">
                                <i class="bi bi-book me-2"></i>
                                <span>Read Note</span>
                            </a>
                        @endif
                        @if($note->file_path)
                            <a href="{{ asset('storage/'.$note->file_path) }}" class="action-btn download-btn" download>
                                <i class="bi bi-download me-2"></i>
                                <span>Download</span>
                            </a>
                        @endif
                    </div>
                    <!-- Card Decoration -->
                    <div class="card-decoration">
                        <div class="decoration-dot dot-1"></div>
                        <div class="decoration-dot dot-2"></div>
                        <div class="decoration-dot dot-3"></div>
                    </div>
                </div>
            @empty
                <div class="empty-state animate-on-scroll">
                    <div class="empty-icon">
                        <i class="bi bi-journal-x"></i>
                    </div>
                    <h3>No Notes Found</h3>
                    @if(request('search'))
                        <p>We couldn't find any notes matching "<strong>{{ request('search') }}</strong>".</p>
                        <a href="{{ route('notes.index') }}" class="empty-action-btn">
                            <i class="bi bi-arrow-left me-2"></i>
                            Browse All Notes
                        </a>
                    @else
                        <p>There are no study notes available at the moment.</p>
                        <p class="text-muted">Check back later for new materials!</p>
                    @endif
                </div>
            @endforelse
        </div>

        <!-- Enhanced Pagination -->
        @if($notes->hasPages())
            <div class="pagination-wrapper animate-on-scroll">
                <div class="pagination-info">
                    <span>Showing {{ $notes->firstItem() }} to {{ $notes->lastItem() }} of {{ $notes->total() }} results</span>
                </div>
                <div class="pagination-links">
                    {{ $notes->appends(request()->query())->links() }}

                </div>
            </div>
        @endif
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
    .notes-hero {
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

    .notes-hero::before {
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

    /* Search Container */
    .search-container {
        max-width: 700px;
        margin: 0 auto;
    }

    .search-wrapper {
        display: flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 2px solid rgba(102, 126, 234, 0.3);
        border-radius: var(--border-radius-xl);
        box-shadow: var(--shadow-md);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .search-wrapper:focus-within {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        transform: translateY(-3px);
    }

    .search-icon {
        padding: 0 1.5rem;
        color: #718096;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
    }

    .search-input {
        flex: 1;
        border: none;
        outline: none;
        padding: 1rem 0;
        font-size: 1rem;
        background: transparent;
        color: #2d3748;
    }

    .search-input::placeholder {
        color: #a0aec0;
    }

    .search-button {
        border: none;
        padding: 1rem 2rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 0 var(--border-radius-xl) var(--border-radius-xl) 0;
    }

    /* Search Results Info */
    .search-results-info {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;
        margin-top: 1.5rem;
    }

    .results-badge {
        display: flex;
        align-items: center;
        background: rgba(102, 126, 234, 0.1);
        color: #667eea;
        padding: 0.5rem 1rem;
        border-radius: var(--border-radius-xl);
        font-size: 0.85rem;
        font-weight: 600;
    }

    .results-text {
        font-size: 0.9rem;
        color: #718096;
        margin: 0;
    }

    .clear-search-btn {
        display: flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.8);
        color: #e53e3e;
        padding: 0.5rem 1rem;
        border-radius: var(--border-radius-xl);
        text-decoration: none;
        font-size: 0.85rem;
        font-weight: 500;
        border: 1px solid rgba(229, 62, 62, 0.2);
        transition: all 0.3s ease;
    }

    .clear-search-btn:hover {
        background: rgba(229, 62, 62, 0.1);
        color: #c53030;
        transform: translateY(-2px);
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

    /* Notes Section */
    .notes-section {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 50%, #e2e8f0 100%);
        padding: clamp(60px, 10vw, 100px) 0;
        position: relative;
        overflow: hidden;
    }

    .notes-section::before {
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

    /* Section Header */
    .section-header {
        text-align: center;
        margin-bottom: 3rem;
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

    .section-header h2 {
        font-size: clamp(1.8rem, 4vw, 2.5rem);
        font-weight: 800;
        color: #2d3748;
        margin-bottom: 1rem;
    }

    .section-header p {
        font-size: 1.1rem;
        color: #718096;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Notes Grid */
    .notes-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    /* Note Card */
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

    .note-preview {
        font-size: 0.95rem;
        color: #718096;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .note-meta {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        margin-bottom: 1.5rem;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.85rem;
        color: #a0aec0;
    }

    .meta-item i {
        font-size: 0.9rem;
    }

    .benefit-actions {
        display: flex;
        gap: 0.75rem;
        flex-wrap: wrap;
        margin-top: auto;
    }

    .action-btn {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1rem;
        border-radius: var(--border-radius-lg);
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
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

    .download-btn {
        background: var(--success-gradient);
        color: #fff;
        border: 2px solid transparent;
    }

    .download-btn:hover {
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
        grid-column: 1 / -1;
        text-align: center;
        padding: 4rem 2rem;
        background: rgba(255, 255, 255, 0.6);
        border-radius: var(--border-radius-lg);
        border: 2px dashed rgba(160, 174, 192, 0.3);
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
    }

    .empty-action-btn:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
    }

    /* Pagination */
    .pagination-wrapper {
        margin-top: 4rem;
        text-align: center;
    }

    .pagination-info {
        margin-bottom: 1rem;
        color: #718096;
        font-size: 0.9rem;
    }

    .pagination-links .page-link {
        border-radius: var(--border-radius-sm);
        margin: 0 0.25rem;
        color: #667eea;
        border: 1px solid rgba(102, 126, 234, 0.2);
        transition: all 0.3s ease;
    }

    .pagination-links .page-link:hover {
        background: var(--primary-gradient);
        color: #fff;
        border-color: transparent;
    }

    .pagination-links .page-item.active .page-link {
        background: var(--primary-gradient);
        color: #fff;
        border-color: transparent;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-stats {
            gap: 2rem;
            flex-direction: column;
        }

        .search-wrapper {
            flex-direction: column;
            gap: 0.5rem;
        }

        .search-input {
            padding: 1rem;
            text-align: center;
        }

        .search-button {
            border-radius: var(--border-radius-lg);
            width: 100%;
        }

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
    }

    @media (max-width: 576px) {
        .notes-hero {
            padding: 120px 0 60px;
        }

        .benefit-card {
            padding: 1.5rem;
        }

        .benefit-content h3 {
            font-size: 1.2rem;
        }

        .note-preview {
            font-size: 0.9rem;
        }
    }

    /* Animations */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

@endsection