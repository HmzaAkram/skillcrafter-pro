@extends('layouts.app')

@section('content')
    <!-- Enhanced Community Hero Section -->
    <section class="hero community-hero">
        <div class="container">
            <div class="hero-content fade-in-up">
                <div class="hero-badge">
                    <span class="badge-text">
                        <i class="bi bi-people-fill me-2"></i>
                        Community Hub
                    </span>
                </div>
                <h1>Connect & Collaborate</h1>
                <p>Join a vibrant community of learners, share knowledge, ask questions, and grow together through meaningful discussions.</p>
                
                <!-- Community Stats -->
                <div class="community-stats">
                    <div class="stat-item">
                        <div class="stat-number">{{ $posts->total() ?? 0 }}</div>
                        <div class="stat-label">Total Posts</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">Active</div>
                        <div class="stat-label">Community</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Discussions</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Hero Decorations -->
        <div class="hero-decoration">
            <div class="floating-icon icon-1">
                <i class="bi bi-chat-dots"></i>
            </div>
            <div class="floating-icon icon-2">
                <i class="bi bi-lightbulb"></i>
            </div>
            <div class="floating-icon icon-3">
                <i class="bi bi-people"></i>
            </div>
        </div>
    </section>               

    <!-- Enhanced Community Posts Section -->
    <section class="community-section">
        <div class="container">
            @auth
                <!-- Enhanced Post Creation Form -->
                <div class="post-form-container animate-on-scroll">
                    <div class="form-header">
                        <div class="form-icon">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        <div class="form-title">
                            <h3>Create a New Post</h3>
                            <p>Share your ideas, ask questions, or showcase your projects</p>
                        </div>
                    </div>
                    
                    <form action="{{ route('community.post.store') }}" method="POST" class="post-form">
                        @csrf
                        <div class="form-group">
                            <div class="input-wrapper">
                                <input type="text" name="title" placeholder="Write an engaging title..." required class="form-input">
                                <div class="input-border"></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-wrapper">
                                <textarea name="body" placeholder="Share your project, question, or idea in detail..." required class="form-textarea"></textarea>
                                <div class="input-border"></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="select-wrapper">
                                <select name="type" class="form-select">
                                    <option value="question" data-icon="question-circle">Question</option>
                                    <option value="project" data-icon="rocket-takeoff">Project</option>
                                    <option value="discussion" data-icon="chat-dots">Discussion</option>
                                </select>
                                <div class="select-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                                <div class="input-border"></div>
                            </div>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <span>Post to Community</span>
                            <i class="bi bi-send ms-2"></i>
                        </button>
                    </form>
                </div>
            @else
                <!-- Login Prompt for Non-authenticated Users -->
                <div class="login-prompt animate-on-scroll">
                    <div class="prompt-content">
                        <div class="prompt-icon">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <h3>Join the Conversation</h3>
                        <p>Sign up or log in to share your thoughts and connect with the community</p>
                        <div class="prompt-actions">
                            <a href="{{ route('login') }}" class="prompt-btn primary">Login</a>
                            <a href="{{ route('register') }}" class="prompt-btn secondary">Sign Up</a>
                        </div>
                    </div>
                </div>
            @endauth

            <!-- Posts Container -->
            <div class="posts-container">
                @forelse($posts as $index => $post)
                    <article class="post-card animate-on-scroll" style="--delay: {{ $index * 0.1 }}s">
                        <!-- Post Header -->
                        <div class="post-header">
                            <div class="post-author">
                                <div class="author-avatar">
                                    {{ strtoupper(substr($post->user->name, 0, 1)) }}
                                </div>
                                <div class="author-info">
                                    <h4>{{ $post->user->name }}</h4>
                                    <span class="post-time">{{ $post->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div class="post-type">
                                <span class="type-badge {{ $post->type }}">
                                    <i class="bi bi-{{ $post->type == 'question' ? 'question-circle' : ($post->type == 'project' ? 'rocket-takeoff' : 'chat-dots') }}"></i>
                                    {{ ucfirst($post->type) }}
                                </span>
                            </div>
                        </div>

                        <!-- Post Content -->
                        <div class="post-content">
                            <h3 class="post-title">{{ $post->title }}</h3>
                            <p class="post-body">{{ Str::limit($post->body, 200) }}</p>
                            @if(strlen($post->body) > 200)
                                <button class="read-more-btn" data-full-text="{{ $post->body }}">
                                    Read More
                                    <i class="bi bi-chevron-down ms-1"></i>
                                </button>
                            @endif
                        </div>

                        <!-- Post Metrics -->
                        <div class="post-metrics">
                            <div class="metric-item">
                                <i class="bi bi-chat"></i>
                                <span>{{ $post->comments->count() }} Comments</span>
                            </div>
                            <div class="metric-item">
                                <i class="bi bi-clock"></i>
                                <span>{{ $post->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>

                        <!-- Comments Section -->
                        <div class="comments-section">
                            <div class="comments-header">
                                <h4>
                                    <i class="bi bi-chat-left-dots me-2"></i>
                                    Comments ({{ $post->comments->count() }})
                                </h4>
                                @if($post->comments->count() > 3)
                                    <button class="toggle-comments-btn">
                                        Show All
                                        <i class="bi bi-chevron-down ms-1"></i>
                                    </button>
                                @endif
                            </div>
                            
                            <div class="comments-list {{ $post->comments->count() > 3 ? 'collapsed' : '' }}">
                                @forelse($post->comments as $comment)
                                    <div class="comment-item">
                                        <div class="comment-avatar">
                                            {{ strtoupper(substr($comment->user->name, 0, 1)) }}
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-header">
                                                <strong>{{ $comment->user->name }}</strong>
                                                <span class="comment-time">{{ $comment->created_at->diffForHumans() }}</span>
                                            </div>
                                            <p>{{ $comment->body }}</p>
                                        </div>
                                    </div>
                                @empty
                                    <div class="no-comments">
                                        <i class="bi bi-chat"></i>
                                        <p>No comments yet. Be the first to share your thoughts!</p>
                                    </div>
                                @endforelse
                            </div>

                            @auth
                                <!-- Comment Form -->
                                <form action="{{ route('community.comment.store', $post->id) }}" method="POST" class="comment-form">
                                    @csrf
                                    <div class="comment-input-wrapper">
                                        <div class="commenter-avatar">
                                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                        </div>
                                        <div class="comment-input-container">
                                            <textarea name="body" placeholder="Share your thoughts..." required class="comment-input"></textarea>
                                            <button type="submit" class="comment-submit-btn">
                                                <i class="bi bi-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <div class="comment-login-prompt">
                                    <p>
                                        <a href="{{ route('login') }}">Login</a> to join the discussion
                                    </p>
                                </div>
                            @endauth
                        </div>
                    </article>
                @empty
                    <!-- Enhanced Empty State -->
                    <div class="empty-state">
                        <div class="empty-icon">
                            <i class="bi bi-chat-square-dots"></i>
                        </div>
                        <h3>Start the Conversation</h3>
                        <p>Be the first to share your ideas, questions, or projects with the community!</p>
                        @auth
                            <button class="empty-action-btn" onclick="document.querySelector('.post-form-container').scrollIntoView({behavior: 'smooth'})">
                                <i class="bi bi-plus-circle me-2"></i>
                                Create First Post
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="empty-action-btn">
                                <i class="bi bi-person-plus me-2"></i>
                                Join Community
                            </a>
                        @endauth
                    </div>
                @endforelse
            </div>

            <!-- Enhanced Pagination -->
            @if($posts->hasPages())
                <div class="pagination-wrapper">
                    <div class="pagination-info">
                        Showing {{ $posts->firstItem() }} to {{ $posts->lastItem() }} of {{ $posts->total() }} posts
                    </div>
                    <div class="pagination-links">
                        {{ $posts->links() }}
                    </div>
                </div>
            @endif
        </div>
    </section>


<style>
    /* Community Hero Section */
    .community-hero {
        background: linear-gradient(135deg, 
            rgba(139, 92, 246, 0.1) 0%, 
            rgba(59, 130, 246, 0.1) 50%, 
            rgba(16, 185, 129, 0.1) 100%);
        position: relative;
        overflow: hidden;
        padding: 140px 0 80px;
    }

    .community-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 30% 20%, rgba(139, 92, 246, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 70% 80%, rgba(16, 185, 129, 0.1) 0%, transparent 50%);
        animation: backgroundFloat 25s ease-in-out infinite;
    }

    /* Community Stats */
    .community-stats {
        display: flex;
        justify-content: center;
        gap: 3rem;
        margin-top: 3rem;
        animation: fadeInUp 1s ease-out 0.9s both;
    }

    .community-stats .stat-item {
        text-align: center;
    }

    .community-stats .stat-number {
        font-size: clamp(1.5rem, 4vw, 2rem);
        font-weight: 800;
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0.5rem;
    }

    .community-stats .stat-label {
        font-size: 0.9rem;
        color: #718096;
        font-weight: 500;
    }

    /* Floating Icons */
    .floating-icon {
        position: absolute;
        width: 60px;
        height: 60px;
        background: rgba(139, 92, 246, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #8b5cf6;
        animation: floatIcon 10s ease-in-out infinite;
    }

    .icon-1 {
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .icon-2 {
        top: 60%;
        right: 15%;
        animation-delay: 3s;
    }

    .icon-3 {
        bottom: 30%;
        left: 20%;
        animation-delay: 6s;
    }

    @keyframes floatIcon {
        0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.6; }
        33% { transform: translateY(-25px) rotate(120deg); opacity: 0.9; }
        66% { transform: translateY(15px) rotate(240deg); opacity: 0.4; }
    }

    /* Community Section */
    .community-section {
        padding: clamp(60px, 10vw, 100px) 0;
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
        position: relative;
    }

    /* Enhanced Post Form */
    .post-form-container {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-lg);
        padding: 2.5rem;
        margin-bottom: 3rem;
        box-shadow: 0 20px 40px rgba(139, 92, 246, 0.1);
        transition: all 0.4s ease;
    }

    .post-form-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 30px 60px rgba(139, 92, 246, 0.15);
    }

    .form-header {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .form-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #fff;
        box-shadow: 0 8px 20px rgba(139, 92, 246, 0.3);
    }

    .form-title h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #2d3748;
        margin: 0;
    }

    .form-title p {
        color: #718096;
        margin: 0.5rem 0 0 0;
        font-size: 0.9rem;
    }

    /* Enhanced Form Inputs */
    .form-group {
        margin-bottom: 1.5rem;
    }

    .input-wrapper, .select-wrapper {
        position: relative;
    }

    .form-input, .form-textarea, .form-select {
        width: 100%;
        padding: 1rem 1.25rem;
        border: 2px solid rgba(139, 92, 246, 0.2);
        border-radius: var(--border-radius-lg);
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        font-size: 1rem;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        outline: none;
    }

    .form-input:focus, .form-textarea:focus, .form-select:focus {
        border-color: #8b5cf6;
        background: rgba(255, 255, 255, 0.95);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(139, 92, 246, 0.15);
    }

    .form-textarea {
        height: 120px;
        resize: vertical;
        min-height: 80px;
        max-height: 200px;
    }

    .input-border {
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .form-input:focus + .input-border,
    .form-textarea:focus + .input-border,
    .form-select:focus + .input-border {
        width: 100%;
    }

    .select-wrapper {
        position: relative;
    }

    .select-icon {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #718096;
        font-size: 1.2rem;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .form-select:focus + .select-icon {
        color: #8b5cf6;
        transform: translateY(-50%) rotate(180deg);
    }

    /* Submit Button */
    .submit-btn {
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        color: #fff;
        padding: 1rem 2rem;
        border: none;
        border-radius: var(--border-radius-lg);
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        box-shadow: 0 8px 20px rgba(139, 92, 246, 0.3);
        position: relative;
        overflow: hidden;
    }

    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #10b981, #059669);
        transition: left 0.4s ease;
        z-index: -1;
    }

    .submit-btn:hover::before {
        left: 0;
    }

    .submit-btn:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 35px rgba(139, 92, 246, 0.4);
    }

    /* Login Prompt */
    .login-prompt {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-lg);
        padding: 3rem;
        margin-bottom: 3rem;
        text-align: center;
        box-shadow: 0 20px 40px rgba(139, 92, 246, 0.1);
    }

    .prompt-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 2rem;
        color: #fff;
        box-shadow: 0 10px 25px rgba(139, 92, 246, 0.3);
    }

    .prompt-content h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 1rem;
    }

    .prompt-content p {
        color: #718096;
        margin-bottom: 2rem;
    }

    .prompt-actions {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .prompt-btn {
        padding: 0.75rem 1.5rem;
        border-radius: var(--border-radius-lg);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .prompt-btn.primary {
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        color: #fff;
        box-shadow: 0 4px 15px rgba(139, 92, 246, 0.3);
    }

    .prompt-btn.primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(139, 92, 246, 0.4);
        color: #fff;
    }

    .prompt-btn.secondary {
        background: transparent;
        color: #8b5cf6;
        border: 2px solid #8b5cf6;
    }

    .prompt-btn.secondary:hover {
        background: #8b5cf6;
        color: #fff;
        transform: translateY(-2px);
    }

    /* Posts Container */
    .posts-container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    /* Enhanced Post Cards */
    .post-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-lg);
        padding: 2rem;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        animation-delay: var(--delay);
    }

    .post-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, 
            rgba(139, 92, 246, 0.05) 0%, 
            rgba(59, 130, 246, 0.05) 100%);
        transition: left 0.5s ease;
        z-index: -1;
    }

    .post-card:hover::before {
        left: 0;
    }

    .post-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(139, 92, 246, 0.15);
        border-color: rgba(139, 92, 246, 0.2);
    }

    /* Post Header */
    .post-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .post-author {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .author-avatar {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 700;
        font-size: 1.2rem;
        box-shadow: 0 4px 12px rgba(139, 92, 246, 0.3);
    }

    .author-info h4 {
        font-size: 1rem;
        font-weight: 600;
        color: #2d3748;
        margin: 0;
    }

    .post-time {
        font-size: 0.85rem;
        color: #a0aec0;
    }

    .type-badge {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: var(--border-radius-xl);
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .type-badge.question {
        background: rgba(249, 115, 22, 0.1);
        color: #f97316;
        border: 1px solid rgba(249, 115, 22, 0.2);
    }

    .type-badge.project {
        background: rgba(16, 185, 129, 0.1);
        color: #10b981;
        border: 1px solid rgba(16, 185, 129, 0.2);
    }

    .type-badge.discussion {
        background: rgba(139, 92, 246, 0.1);
        color: #8b5cf6;
        border: 1px solid rgba(139, 92, 246, 0.2);
    }

    /* Post Content */
    .post-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 1rem;
        line-height: 1.4;
    }

    .post-body {
        color: #718096;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .read-more-btn {
        background: none;
        border: none;
        color: #8b5cf6;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        padding: 0.5rem 0;
    }

    .read-more-btn:hover {
        color: #7c3aed;
        transform: translateX(5px);
    }

    /* Post Metrics */
    .post-metrics {
        display: flex;
        gap: 2rem;
        margin: 1.5rem 0;
        padding: 1rem 0;
        border-top: 1px solid rgba(160, 174, 192, 0.2);
        border-bottom: 1px solid rgba(160, 174, 192, 0.2);
    }

    .metric-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #a0aec0;
        font-size: 0.9rem;
    }

    .metric-item i {
        font-size: 1rem;
    }

    /* Comments Section */
    .comments-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1rem;
    }

    .comments-header h4 {
        font-size: 1.1rem;
        font-weight: 600;
        color: #2d3748;
        margin: 0;
        display: flex;
        align-items: center;
    }

    .toggle-comments-btn {
        background: none;
        border: none;
        color: #8b5cf6;
        font-size: 0.85rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.25rem;
    }

    .toggle-comments-btn:hover {
        color: #7c3aed;
    }

    .comments-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        max-height: 400px;
        overflow-y: auto;
        margin-bottom: 1.5rem;
    }

    .comments-list.collapsed {
        max-height: 240px;
    }

    .comment-item {
        display: flex;
        gap: 1rem;
        padding: 1rem;
        background: rgba(248, 250, 252, 0.8);
        border-radius: var(--border-radius-lg);
        border: 1px solid rgba(226, 232, 240, 0.5);
        transition: all 0.3s ease;
    }

    .comment-item:hover {
        background: rgba(248, 250, 252, 1);
        transform: translateX(5px);
    }

    .comment-avatar {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #a0aec0, #718096);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 600;
        font-size: 0.9rem;
        flex-shrink: 0;
    }

    .comment-content {
        flex: 1;
    }

    .comment-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 0.5rem;
    }

    .comment-header strong {
        color: #2d3748;
        font-size: 0.9rem;
    }

    .comment-time {
        font-size: 0.8rem;
        color: #a0aec0;
    }

    .comment-content p {
        color: #4a5568;
        margin: 0;
        line-height: 1.5;
    }

    .no-comments {
        text-align: center;
        padding: 2rem;
        color: #a0aec0;
        background: rgba(248, 250, 252, 0.5);
        border-radius: var(--border-radius-lg);
        border: 2px dashed rgba(160, 174, 192, 0.3);
    }

    .no-comments i {
        font-size: 2rem;
        margin-bottom: 1rem;
        display: block;
    }

    /* Comment Form */
    .comment-form {
        margin-top: 1rem;
    }

    .comment-input-wrapper {
        display: flex;
        gap: 1rem;
        align-items: flex-start;
    }

    .commenter-avatar {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 600;
        font-size: 0.9rem;
        flex-shrink: 0;
        box-shadow: 0 2px 8px rgba(139, 92, 246, 0.3);
    }

    .comment-input-container {
        flex: 1;
        position: relative;
    }

    .comment-input {
        width: 100%;
        padding: 1rem;
        border: 2px solid rgba(139, 92, 246, 0.2);
        border-radius: var(--border-radius-lg);
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        resize: vertical;
        min-height: 80px;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        outline: none;
    }

    .comment-input:focus {
        border-color: #8b5cf6;
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 4px 15px rgba(139, 92, 246, 0.15);
    }

    .comment-submit-btn {
        position: absolute;
        bottom: 1rem;
        right: 1rem;
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        color: #fff;
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(139, 92, 246, 0.3);
    }

    .comment-submit-btn:hover {
        transform: scale(1.1) rotate(10deg);
        box-shadow: 0 4px 15px rgba(139, 92, 246, 0.4);
    }

    .comment-login-prompt {
        text-align: center;
        padding: 1rem;
        background: rgba(248, 250, 252, 0.5);
        border-radius: var(--border-radius-lg);
        border: 1px solid rgba(226, 232, 240, 0.5);
        margin-top: 1rem;
    }

    .comment-login-prompt a {
        color: #8b5cf6;
        text-decoration: none;
        font-weight: 600;
    }

    .comment-login-prompt a:hover {
        text-decoration: underline;
    }

    /* Enhanced Empty State */
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: rgba(255, 255, 255, 0.6);
        border-radius: var(--border-radius-lg);
        border: 2px dashed rgba(160, 174, 192, 0.3);
        margin: 2rem 0;
    }

    .empty-icon {
        width: 80px;
        height: 80px;
        background: rgba(139, 92, 246, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 2rem;
        color: #8b5cf6;
    }

    .empty-state h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 1rem;
    }

    .empty-state p {
        color: #718096;
        margin-bottom: 2rem;
        font-size: 1rem;
    }

    .empty-action-btn {
        display: inline-flex;
        align-items: center;
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        color: #fff;
        padding: 1rem 2rem;
        border-radius: var(--border-radius-lg);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.4s ease;
        box-shadow: 0 8px 20px rgba(139, 92, 246, 0.3);
        border: none;
        cursor: pointer;
        font-size: 1rem;
    }

    .empty-action-btn:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 35px rgba(139, 92, 246, 0.4);
        color: #fff;
    }

    /* Enhanced Pagination */
    .pagination-wrapper {
        margin-top: 4rem;
        text-align: center;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: var(--border-radius-lg);
        padding: 2rem;
        box-shadow: 0 10px 25px rgba(139, 92, 246, 0.1);
    }

    .pagination-info {
        margin-bottom: 1.5rem;
        color: #718096;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .pagination-links {
        display: flex;
        justify-content: center;
    }

    /* Advanced Animations */
    @keyframes backgroundFloat {
        0%, 100% { 
            transform: translateX(0) translateY(0) rotate(0deg); 
            opacity: 0.8; 
        }
        25% { 
            transform: translateX(20px) translateY(-15px) rotate(1deg); 
            opacity: 1; 
        }
        50% { 
            transform: translateX(-10px) translateY(20px) rotate(-1deg); 
            opacity: 0.9; 
        }
        75% { 
            transform: translateX(30px) translateY(-5px) rotate(0.5deg); 
            opacity: 0.95; 
        }
    }

    /* CSS Variables for enhanced theming */
    :root {
        --border-radius-lg: 16px;
        --border-radius-xl: 24px;
    }

    /* Enhanced Responsive Design */
    @media (max-width: 768px) {
        .community-stats {
            gap: 2rem;
            flex-wrap: wrap;
        }

        .post-form-container,
        .login-prompt {
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .form-header {
            flex-direction: column;
            text-align: center;
            gap: 1rem;
        }

        .post-card {
            padding: 1.5rem;
        }

        .post-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }

        .post-metrics {
            flex-wrap: wrap;
            gap: 1rem;
        }

        .comment-input-wrapper {
            flex-direction: column;
            gap: 1rem;
        }

        .comment-input-container {
            width: 100%;
        }

        .comment-submit-btn {
            position: relative;
            bottom: auto;
            right: auto;
            margin-top: 1rem;
            align-self: flex-end;
        }

        .comments-list {
            max-height: 300px;
        }

        .floating-icon {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .community-hero {
            padding: 120px 0 60px;
        }

        .community-stats {
            flex-direction: column;
            gap: 1.5rem;
            text-align: center;
        }

        .post-form-container,
        .login-prompt {
            padding: 1.5rem;
        }

        .form-header {
            margin-bottom: 1.5rem;
        }

        .form-icon {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }

        .post-card {
            padding: 1.25rem;
        }

        .empty-state {
            padding: 3rem 1.5rem;
        }

        .pagination-wrapper {
            padding: 1.5rem;
        }
    }

    /* Animation Delays and Scroll Triggers */
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

    /* Performance Optimizations */
    .post-card,
    .comment-item,
    .submit-btn,
    .prompt-btn,
    .empty-action-btn {
        will-change: transform;
    }

    .community-hero::before,
    .post-card::before {
        will-change: transform, opacity;
    }

    /* Enhanced Focus States for Accessibility */
    .form-input:focus,
    .form-textarea:focus,
    .form-select:focus,
    .comment-input:focus {
        outline: 2px solid #8b5cf6;
        outline-offset: 2px;
    }

    .submit-btn:focus,
    .prompt-btn:focus,
    .empty-action-btn:focus,
    .comment-submit-btn:focus {
        outline: 2px solid #ffffff;
        outline-offset: 2px;
    }

    /* Dark Mode Support */
    @media (prefers-color-scheme: dark) {
        .community-section {
            background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
        }

        .post-form-container,
        .login-prompt,
        .post-card,
        .pagination-wrapper {
            background: rgba(45, 55, 72, 0.9);
            border-color: rgba(255, 255, 255, 0.1);
        }

        .form-title h3,
        .prompt-content h3,
        .post-title,
        .comments-header h4 {
            color: #f7fafc;
        }

        .form-title p,
        .prompt-content p,
        .post-body {
            color: #cbd5e0;
        }
    }

    /* Print Styles */
    @media print {
        .hero-decoration,
        .floating-icon,
        .submit-btn,
        .comment-form,
        .pagination-wrapper {
            display: none !important;
        }

        .post-card,
        .comment-item {
            break-inside: avoid;
            box-shadow: none !important;
            border: 1px solid #e2e8f0 !important;
        }
    }
</style>

@endsection