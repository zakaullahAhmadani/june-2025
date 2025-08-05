<style>
:root {
    --primary: #002B5B;
    --secondary: #FFD700;
    --accent: #FF5E00;
    --light-bg: #F7F7F7;
    --white: #FFFFFF;
    --text-color: #1A1A1A;
    --text-secondary: #555555;
}

.services-section {
    padding: 80px 0;
    background-color: var(--light-bg);
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-title {
    color: var(--primary);
    font-weight: 700;
    margin-bottom: 15px;
}

.section-subtitle {
    color: var(--secondary);
    font-size: 1.2rem;
    max-width: 800px;
    margin: 0 auto;
}

.service-card {
    background-color: var(--white);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    height: 100%;
    border: 1px solid rgba(0, 43, 91, 0.1);
    margin-bottom: 30px;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    border-color: var(--secondary);
}

.service-img {
    height: 200px;
    object-fit: cover;
    width: 100%;
}

.service-body {
    padding: 25px;
}

.service-name {
    color: var(--primary);
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 1.3rem;
}

.service-desc {
    color: var(--text-color);
    margin-bottom: 20px;
    line-height: 1.6;
}

.service-features {
    margin-bottom: 25px;
}

.feature-item {
    position: relative;
    padding-left: 30px;
    margin-bottom: 10px;
    color: var(--text-secondary);
}

.feature-item:before {
    content: '\f00c';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--accent);
}

.service-btn {
    background-color: var(--accent);
    color: var(--white);
    border: none;
    padding: 10px 25px;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    text-decoration: none;
    font-size: 1rem;
}

.service-btn:hover {
    background-color: var(--accent);
    color: var(--white);
    transform: translateY(-2px);
}

.service-btn i {
    margin-right: 8px;
}

.brand-badge {
    background-color: var(--primary);
    color: var(--white);
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
    display: inline-block;
    margin-right: 5px;
    margin-bottom: 5px;
}

@media (max-width: 767.98px) {
    .services-section {
        padding: 50px 0;
    }
    
    .section-header {
        margin-bottom: 40px;
    }
    
    .service-img {
        height: 180px;
    }
}
</style>

<section class="services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Premium Battery Services in UAE</h2>
            <p class="section-subtitle">
                Emergency battery replacement and jump start services available 24/7 across UAE. We carry all major battery brands and provide professional installation at your location. Call now: <strong>+971 55 585 1570</strong>
            </p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/battery-replacement.webp" alt="Battery Replacement" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Battery Replacement</h3>
                        <p class="service-desc">Professional battery replacement service with top-quality brands. We come to your location with the right battery for your vehicle.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">All major brands available</div>
                            <div class="feature-item">Proper disposal of old battery</div>
                            <div class="feature-item">Warranty on all replacements</div>
                            <div class="feature-item">Expert installation</div>
                        </div>

                        <div class="mb-3">
                            <span class="brand-badge">Exide</span>
                            <span class="brand-badge">Varta</span>
                            <span class="brand-badge">Bosch</span>
                            <span class="brand-badge">Amaron</span>
                        </div>

                        <a href="tel:+971555851570" class="service-btn">
                            <i class="fas fa-phone-alt"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/jump-start.webp" alt="Jump Start Service" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Emergency Jump Start</h3>
                        <p class="service-desc">24/7 emergency jump start service when your battery dies. Our technicians will get you back on the road quickly and safely.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Available 24/7</div>
                            <div class="feature-item">Fast response time</div>
                            <div class="feature-item">Professional equipment</div>
                            <div class="feature-item">All vehicle types</div>
                        </div>

                        <div class="mb-3">
                            <span class="brand-badge">Quick Service</span>
                            <span class="brand-badge">Reliable</span>
                            <span class="brand-badge">Safe</span>
                        </div>

                        <a href="tel:+971555851570" class="service-btn">
                            <i class="fas fa-bolt"></i> Emergency Call
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/battery-testing.webp" alt="Battery Testing" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Battery Testing</h3>
                        <p class="service-desc">Comprehensive battery health check to determine if you need replacement or just a recharge.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Free voltage test</div>
                            <div class="feature-item">Load testing</div>
                            <div class="feature-item">Alternator check</div>
                            <div class="feature-item">Professional advice</div>
                        </div>

                        <div class="mb-3">
                            <span class="brand-badge">Diagnostics</span>
                            <span class="brand-badge">Accurate</span>
                            <span class="brand-badge">Free</span>
                        </div>

                        <a href="tel:+971555851570" class="service-btn">
                            <i class="fas fa-search"></i> Test My Battery
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/premium-batteries.webp" alt="Premium Batteries" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Premium Battery Brands</h3>
                        <p class="service-desc">We carry all top battery brands to ensure optimal performance for your vehicle.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Exide - Long life</div>
                            <div class="feature-item">Varta - High performance</div>
                            <div class="feature-item">Bosch - Reliability</div>
                            <div class="feature-item">Amaron - Durability</div>
                        </div>

                        <div class="mb-3">
                            <span class="brand-badge">DIN66</span>
                            <span class="brand-badge">Maintenance-free</span>
                            <span class="brand-badge">Warranty</span>
                        </div>

                        <a href="tel:+971555851570" class="service-btn">
                            <i class="fas fa-battery-full"></i> Enquire Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/commercial-batteries.webp" alt="Commercial Vehicles" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Commercial Vehicle Batteries</h3>
                        <p class="service-desc">Specialized batteries for trucks, buses, and heavy equipment with higher capacity.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Heavy-duty batteries</div>
                            <div class="feature-item">Commercial grade</div>
                            <div class="feature-item">High CCA ratings</div>
                            <div class="feature-item">Extended warranty</div>
                        </div>

                        <div class="mb-3">
                            <span class="brand-badge">Truck</span>
                            <span class="brand-badge">Bus</span>
                            <span class="brand-badge">Equipment</span>
                        </div>

                        <a href="tel:+971555851570" class="service-btn">
                            <i class="fas fa-truck"></i> Call for Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/Battery Recycling.webp" alt="Battery Recycling" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Battery Recycling</h3>
                        <p class="service-desc">Environmentally responsible disposal of your old batteries in compliance with UAE regulations.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Eco-friendly disposal</div>
                            <div class="feature-item">Certificate provided</div>
                            <div class="feature-item">Free pickup</div>
                            <div class="feature-item">Compliant with UAE laws</div>
                        </div>

                        <div class="mb-3">
                            <span class="brand-badge">Green</span>
                            <span class="brand-badge">Certified</span>
                            <span class="brand-badge">Free</span>
                        </div>

                        <a href="tel:+971555851570" class="service-btn">
                            <i class="fas fa-recycle"></i> Recycle Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>