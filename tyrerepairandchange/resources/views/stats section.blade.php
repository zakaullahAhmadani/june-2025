 <style>
        :root {
            --primary: #1A3E72;
            --secondary: #2D2D2D;
            --accent: #FF7D33;
            --light-bg: #F5F5F5;
            --white: #FFFFFF;
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
</head>
<body>
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <!-- Stat 1 -->
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-tire"></i>
                        </div>
                        <div class="stat-number">20<span class="stat-symbol">K+</span></div>
                        <div class="stat-label">Product Sold</div>
                    </div>
                </div>
                
                <!-- Stat 2 -->
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="stat-number">28<span class="stat-symbol">K+</span></div>
                        <div class="stat-label">Customer Ratings</div>
                    </div>
                </div>
                
                <!-- Stat 3 -->
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="stat-number">4.7</div>
                        <div class="stat-label">Years of Experience</div>
                    </div>
                </div>
                
                <!-- Stat 4 -->
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="stat-number">10<span class="stat-symbol">+</span></div>
                        <div class="stat-label">Expert Technicians</div>
                    </div>
                </div>
            </div>
        </div>
    </section>