<style>
:root {
    --primary-color: #002B5B;
    --secondary-color: #FFD700;
    --accent-color: #FF5E00;
    --bg-color: #F7F7F7;
    --white: #FFFFFF;
    --text-color: #1A1A1A;
    --text-secondary: #555555;
}

.services-section {
    padding: 80px 0;
    background-color: var(--bg-color);
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-title {
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 15px;
}

.section-subtitle {
    color: var( --text-color);
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
    border-color: var(--secondary-color);
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
    color: var(--primary-color);
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
    color: var(--accent-color);
}

.service-btn {
    background-color: var(--accent-color);
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
}

.service-btn:hover {
    background-color: var(--secondary-color);
    color: var(--primary-color);
    transform: translateY(-2px);
}

.service-btn i {
    margin-right: 8px;
}

.service-badge {
    background-color: var(--primary-color);
    color: var(--white);
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
    display: inline-block;
    margin-right: 5px;
    margin-bottom: 5px;
}

.service-tag {
    background-color: rgba(0, 43, 91, 0.1);
    color: var(--primary-color);
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
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">
                Reliable pickup  delivery for all your furniture and appliances across Dubai. Same-day service available.
            </p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/Furniture-delivery1.webp" alt="Furniture Delivery" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Furniture Pickup  Delivery</h3>
                        <p class="service-desc">Professional moving services for all types of furniture including sofas, beds, tables, and cabinets. We handle with care and deliver safely.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Same-day service available</div>
                            <div class="feature-item">Professional packing</div>
                            <div class="feature-item">Door-to-door delivery</div>
                            <div class="feature-item">Residential & commercial</div>
                        </div>

                        <div class="mb-3">
                            <span class="service-badge">sofa delivery</span>
                            <span class="service-badge">bed transport</span>
                            <span class="service-badge">office furniture</span>
                        </div>

                        <a href="tel:0589125005" class="service-btn">
                            <i class="fas fa-phone-alt"></i> Book Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/appliance-delivery.webp" alt="Appliance Delivery" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Appliance Transport</h3>
                        <p class="service-desc">Safe moving of refrigerators, washing machines, ovens, and other large appliances with proper equipment and care.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Specialized equipment</div>
                            <div class="feature-item">Secure strapping</div>
                            <div class="feature-item">Protective wrapping</div>
                            <div class="feature-item">Installation available</div>
                        </div>

                        <div class="mb-3">
                            <span class="service-badge">fridge transport</span>
                            <span class="service-badge">washing machine</span>
                            <span class="service-badge">oven moving</span>
                        </div>

                        <a href="tel:0589125005" class="service-btn">
                            <i class="fas fa-truck"></i> Schedule Pickup
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/same-day-delivery.webp" alt="Same Day Delivery" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Same Day Service</h3>
                        <p class="service-desc">Urgent pickup  delivery when you need it most. Available 7 days a week with quick response times.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Fast response</div>
                            <div class="feature-item">Available 24/7</div>
                            <div class="feature-item">Immediate dispatch</div>
                            <div class="feature-item">Emergency moves</div>
                        </div>

                        <div class="mb-3">
                            <span class="service-badge">Urgent</span>
                            <span class="service-badge">Quick</span>
                            <span class="service-badge">Reliable</span>
                        </div>

                        <a href="tel:0589125005" class="service-btn">
                            <i class="fas fa-bolt"></i> Emergency Call
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/small-items.webp" alt="Small Items Delivery" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Small Items Transport</h3>
                        <p class="service-desc">Moving chairs, tables, electronics, and other small to medium sized items with our specialized vehicles.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Affordable rates</div>
                            <div class="feature-item">Multiple items</div>
                            <div class="feature-item">Careful handling</div>
                            <div class="feature-item">Tracking available</div>
                        </div>

                        <div class="mb-3">
                            <span class="service-badge">chairs</span>
                            <span class="service-badge">tables</span>
                            <span class="service-badge">electronics</span>
                        </div>

                        <a href="tel:0589125005" class="service-btn">
                            <i class="fas fa-box"></i> Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/apartment-moving.webp" alt="Apartment Moving" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Apartment Moving</h3>
                        <p class="service-desc">Complete moving services for apartments and small homes. We handle everything from packing to setup.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Full-service moving</div>
                            <div class="feature-item">Packing materials</div>
                            <div class="feature-item">Furniture assembly</div>
                            <div class="feature-item">Stress-free experience</div>
                        </div>

                        <div class="mb-3">
                            <span class="service-badge">Studio</span>
                            <span class="service-badge">1BR</span>
                            <span class="service-badge">2BR</span>
                        </div>

                        <a href="tel:0589125005" class="service-btn">
                            <i class="fas fa-home"></i> Plan My Move
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/office-moving.webp" alt="Office Moving" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Office Relocation</h3>
                        <p class="service-desc">Professional business moving services for offices, shops, and commercial spaces with minimal downtime.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">After-hours service</div>
                            <div class="feature-item">IT equipment handling</div>
                            <div class="feature-item">Filing systems</div>
                            <div class="feature-item">Workstation setup</div>
                        </div>

                        <div class="mb-3">
                            <span class="service-badge">Corporate</span>
                            <span class="service-badge">Shop</span>
                            <span class="service-badge">Warehouse</span>
                        </div>

                        <a href="tel:0589125005" class="service-btn">
                            <i class="fas fa-building"></i> Business Inquiry
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>