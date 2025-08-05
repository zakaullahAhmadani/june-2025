<style>
:root {
    /* Brand Identity Colors */
    --primary: #0A66C2;     /* Blue - Plumbing */
    --secondary: #FFD700;   /* Yellow - Electrical */
    --accent: #28A745;      /* Green - Painting */
    --renovation: #8B4513;  /* Brick Brown - Renovation */
    --appliance: #A9A9A9;   /* Grey - Home Appliances */
    --ceiling: #F5F5F5;     /* Off White - False Ceiling */
    --light-bg: #f9f9f9;
    --white: #FFFFFF;
    --text-color: #222222;
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
    color:black;
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
    border: 1px solid rgba(10, 102, 194, 0.1);
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
    background-color: var(--secondary);
    color: white;
    transform: translateY(-2px);
}

.service-btn i {
    margin-right: 8px;
}

.specialty-badge {
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
            <h2 class="section-title"> Services in Dubai</h2>
            <p class="section-subtitle">
                Comprehensive home and commercial maintenance solutions available across Dubai. Our certified technicians provide professional plumbing, electrical, painting, false ceiling installation, and renovation services. Call now: <strong>056 282 3168</strong>
            </p>
        </div>

        <div class="row g-4">
            <!-- Plumbing Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/plumbing-service.webp" alt="Plumbing Services Dubai" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Plumbing Services</h3>
                        <p class="service-desc">Professional plumbing solutions for homes and businesses including repairs, installations, and maintenance.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Emergency plumbing services</div>
                            <div class="feature-item">Drain cleaning & unclogging</div>
                            <div class="feature-item">Water heater repair</div>
                            <div class="feature-item">Pipe installation</div>
                        </div>

                        <div class="mb-3">
                            <span class="specialty-badge">24/7 Service</span>
                            <span class="specialty-badge">Expert Plumbers</span>
                            <span class="specialty-badge">Quick Response</span>
                        </div>

                        <a href="tel:+971562823168" class="service-btn">
                            <i class="fas fa-phone-alt"></i> Call Plumber
                        </a>
                    </div>
                </div>
            </div>

            <!-- Electrical Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/electrical-service.webp" alt="Electrical Services Dubai" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Electrical Services</h3>
                        <p class="service-desc">Certified electrical contractors for all your wiring, lighting, and electrical maintenance needs.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Electrical installations</div>
                            <div class="feature-item">Wiring & rewiring</div>
                            <div class="feature-item">Lighting solutions</div>
                            <div class="feature-item">Panel upgrades</div>
                        </div>

                        <div class="mb-3">
                            <span class="specialty-badge">Certified</span>
                            <span class="specialty-badge">Safety First</span>
                            <span class="specialty-badge">Reliable</span>
                        </div>

                        <a href="tel:+971562823168" class="service-btn">
                            <i class="fas fa-bolt"></i> Call Electrician
                        </a>
                    </div>
                </div>
            </div>

            <!-- Painting Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/painting-service.webp" alt="Painting Services Dubai" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Painting Services</h3>
                        <p class="service-desc">Professional interior and exterior painting for villas, apartments, and commercial spaces.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Wall painting services</div>
                            <div class="feature-item">Villa painting</div>
                            <div class="feature-item">Office painting</div>
                            <div class="feature-item">Quality finishes</div>
                        </div>

                        <div class="mb-3">
                            <span class="specialty-badge">Premium Paints</span>
                            <span class="specialty-badge">Neat Work</span>
                            <span class="specialty-badge">Affordable</span>
                        </div>

                        <a href="tel:+971562823168" class="service-btn">
                            <i class="fas fa-paint-roller"></i> Get Quote
                        </a>
                    </div>
                </div>
            </div>

          <!-- False Ceiling -->
<div class="col-md-6 col-lg-4">
    <div class="service-card">
        <img src="images/false-ceiling.webp" alt="False Ceiling Installation" class="service-img">
        <div class="service-body">
            <h3 class="service-name">False Ceiling Installation</h3>
            <p class="service-desc">Professional gypsum board ceiling installation and repair services for homes and offices.</p>
            
            <div class="service-features">
                <div class="feature-item">Gypsum ceiling service</div>
                <div class="feature-item">Custom designs</div>
                <div class="feature-item">Lighting integration</div>
                <div class="feature-item">Quick installation</div>
            </div>

            <div class="mb-3">
                <span class="specialty-badge">Modern Designs</span>
                <span class="specialty-badge">Quality Materials</span>
                <span class="specialty-badge">Expert Team</span>
            </div>

            <a href="tel:+971562823168" class="service-btn">
                <i class="fas fa-border-style"></i> Enquire Now
            </a>
        </div>
    </div>
</div>

<!-- Home Appliances -->
<div class="col-md-6 col-lg-4">
    <div class="service-card">
        <img src="images/appliance-repair.webp" alt="Home Appliance Repair" class="service-img">
        <div class="service-body">
            <h3 class="service-name">Appliance Services</h3>
            <p class="service-desc">Professional repair and maintenance for all home appliances and systems.</p>
            
            <div class="service-features">
                <div class="feature-item">AC repair & maintenance</div>
                <div class="feature-item">Refrigerator service</div>
                <div class="feature-item">Washing machine repair</div>
                <div class="feature-item">Oven & stove servicing</div>
            </div>

            <div class="mb-3">
                <span class="specialty-badge">Same Day</span>
                <span class="specialty-badge">Genuine Parts</span>
                <span class="specialty-badge">Warranty</span>
            </div>

            <a href="tel:+971562823168" class="service-btn">
                <i class="fas fa-tools"></i> Schedule Service
            </a>
        </div>
    </div>
</div>

<!-- Renovation Services -->
<div class="col-md-6 col-lg-4">
    <div class="service-card">
        <img src="images/renovation-service.webp" alt="Home Renovation Dubai" class="service-img">
        <div class="service-body">
            <h3 class="service-name">Renovation Services</h3>
            <p class="service-desc">Complete home and office renovation solutions from concept to completion.</p>
            
            <div class="service-features">
                <div class="feature-item">Villa renovation</div>
                <div class="feature-item">Apartment makeovers</div>
                <div class="feature-item">Office refurbishment</div>
                <div class="feature-item">Quality craftsmanship</div>
            </div>

            <div class="mb-3">
                <span class="specialty-badge">Turnkey</span>
                <span class="specialty-badge">Custom Designs</span>
                <span class="specialty-badge">On Time</span>
            </div>

            <a href="tel:+971562823168" class="service-btn">
                <i class="fas fa-home"></i> Free Consultation
            </a>
        </div>
    </div>
</div>

<!-- AC Installation -->
<div class="col-md-6 col-lg-4">
    <div class="service-card">
        <img src="images/ac-installation.webp" alt="AC Installation Service" class="service-img">
        <div class="service-body">
            <h3 class="service-name">AC Installation</h3>
            <p class="service-desc">Professional installation of all AC types including split, window, and central systems.</p>
            
            <div class="service-features">
                <div class="feature-item">Split AC installation</div>
                <div class="feature-item">Window AC setup</div>
                <div class="feature-item">Central AC systems</div>
                <div class="feature-item">Ducting solutions</div>
            </div>

            <div class="mb-3">
                <span class="specialty-badge">Expert Technicians</span>
                <span class="specialty-badge">Energy Efficient</span>
                <span class="specialty-badge">Warranty</span>
            </div>

            <a href="tel:+971562823168" class="service-btn">
                <i class="fas fa-snowflake"></i> Get Quote
            </a>
        </div>
    </div>
</div>

<!-- AC Maintenance -->
<div class="col-md-6 col-lg-4">
    <div class="service-card">
        <img src="images/ac-maintenance.webp" alt="AC Maintenance Service" class="service-img">
        <div class="service-body">
            <h3 class="service-name">AC Maintenance</h3>
            <p class="service-desc">Regular maintenance plans to keep your AC running efficiently and extend its lifespan.</p>
            
            <div class="service-features">
                <div class="feature-item">Annual contracts</div>
                <div class="feature-item">Chemical cleaning</div>
                <div class="feature-item">Filter replacement</div>
                <div class="feature-item">Performance check</div>
            </div>

            <div class="mb-3">
                <span class="specialty-badge">Preventive Care</span>
                <span class="specialty-badge">24/7 Support</span>
                <span class="specialty-badge">Save Energy</span>
            </div>

            <a href="tel:+971562823168" class="service-btn">
                <i class="fas fa-calendar-alt"></i> Book Maintenance
            </a>
        </div>
    </div>
</div>

<!-- AC Repair -->
<div class="col-md-6 col-lg-4">
    <div class="service-card">
        <img src="images/ac-repair.webp" alt="AC Repair Service" class="service-img">
        <div class="service-body">
            <h3 class="service-name">AC Repair</h3>
            <p class="service-desc">Emergency repair services for all AC problems with guaranteed same-day service.</p>
            
            <div class="service-features">
                <div class="feature-item">Gas leakage repair</div>
                <div class="feature-item">Electrical issues</div>
                <div class="feature-item">Water leakage</div>
                <div class="feature-item">Compressor problems</div>
            </div>

            <div class="mb-3">
                <span class="specialty-badge">Emergency</span>
                <span class="specialty-badge">Same Day</span>
                <span class="specialty-badge">Diagnosis</span>
            </div>

            <a href="tel:+971562823168" class="service-btn">
                <i class="fas fa-ambulance"></i> Emergency Call
            </a>
        </div>
    </div>
</div>
        </div>
    </div>
</section>