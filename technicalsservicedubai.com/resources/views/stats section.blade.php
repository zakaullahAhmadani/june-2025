<style>
    :root {
        /* Professional Construction Color Palette */
        --primary: #0A66C2;       /* Trustworthy blue - primary brand color */
        --secondary: #2D2D2D;     /* Dark gray - for text and accents */
        --accent: #FFD700;       /* Gold/yellow - highlights and call-to-action */
        --light-bg: #F5F5F5;     /* Light gray - backgrounds */
        --white: #FFFFFF;        /* Pure white */
        --success: #28A745;      /* Green - for positive stats */
    }
    
    .stats-section {
        background-color: var(--primary);
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
        color: var(--accent);
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
        color: var(--white);
        margin-bottom: 15px;
        opacity: 0.8;
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
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="stat-number">850<span class="stat-symbol">+</span></div>
                    <div class="stat-label">Projects Completed</div>
                </div>
            </div>
            
            <!-- Stat 2 -->
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-number">4.9</div>
                    <div class="stat-label">Customer Rating (Google)</div>
                </div>
            </div>
            
            <!-- Stat 3 -->
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stat-number">12<span class="stat-symbol">+</span></div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>
            
            <!-- Stat 4 -->
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">25<span class="stat-symbol">+</span></div>
                    <div class="stat-label">Skilled Craftsmen</div>
                </div>
            </div>
        </div>
    </div>
</section>