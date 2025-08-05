<style>
    :root {
        --primary-color: #002B5B;       /* Deep blue - trust and professionalism */
        --secondary-color: #FFD700;     /* Gold - for highlights and accents */
        --accent-color: #FF5E00;        /* Orange - for CTAs and important elements */
        --bg-color: #F7F7F7;            /* Light background */
        --text-color: #1A1A1A;          /* Main text color */
        --white: #ffffff;               /* White */
    }
    
    .stats-section {
        background-color: var(--primary-color);
        color: var(--white);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }
    
    .stat-card {
        text-align: center;
        padding: 30px 20px;
        position: relative;
        z-index: 2;
        transition: transform 0.3s ease;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
    }
    
    .stat-number {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 5px;
        color: var(--secondary-color);
        line-height: 1;
    }
    
    .stat-symbol {
        font-size: 2rem;
        vertical-align: top;
        margin-left: 5px;
        color: var(--white);
    }
    
    .stat-label {
        font-size: 1.1rem;
        font-weight: 500;
        opacity: 0.9;
        letter-spacing: 0.5px;
    }
    
    .stat-icon {
        font-size: 2.5rem;
        color: var(--accent-color);
        margin-bottom: 15px;
    }
    
    /* Decorative elements */
    .stats-section::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, var(--accent-color) 0%, transparent 70%);
        opacity: 0.1;
        z-index: 1;
    }
    
    .stats-section::after {
        content: '';
        position: absolute;
        bottom: -50px;
        left: -50px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, var(--secondary-color) 0%, transparent 70%);
        opacity: 0.1;
        z-index: 1;
    }
    
    @media (max-width: 991.98px) {
        .stat-card {
            margin-bottom: 30px;
        }
        
        .stat-number {
            font-size: 3rem;
        }
    }
    
    @media (max-width: 767.98px) {
        .stats-section {
            padding: 60px 0;
        }
        
        .stat-number {
            font-size: 2.5rem;
        }
        
        .stat-label {
            font-size: 1rem;
        }
        
        .stat-icon {
            font-size: 2rem;
        }
    }
</style>

<section class="stats-section">
    <div class="container">
        <div class="row">
            <!-- Stat 1 -->
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="stat-number">15<span class="stat-symbol">K+</span></div>
                    <div class="stat-label">Items Delivered</div>
                </div>
            </div>
            
            <!-- Stat 2 -->
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <div class="stat-number">100<span class="stat-symbol">%</span></div>
                    <div class="stat-label">Dubai Coverage</div>
                </div>
            </div>
            
            <!-- Stat 3 -->
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-number">24<span class="stat-symbol">/7</span></div>
                    <div class="stat-label">Hour Service</div>
                </div>
            </div>
            
            <!-- Stat 4 -->
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-couch"></i>
                    </div>
                    <div class="stat-number">8<span class="stat-symbol">K+</span></div>
                    <div class="stat-label">Furniture Moves</div>
                </div>
            </div>
        </div>
    </div>
</section>