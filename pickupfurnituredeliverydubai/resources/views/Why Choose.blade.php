<style>
:root {
  --primary-color: #002B5B;
  --secondary-color: #FFD700;
  --accent-color: #FF5E00;
  --bg-color: #F7F7F7;
  --text-color: #1A1A1A;
  --text-secondary: #555555;
  --white: #ffffff;
}

.why-choose-section {
    position: relative;
    padding: 100px 0;
     background:linear-gradient(135deg,rgba(0,95,115,0.9)0%,rgba(10,147,150,0.9)100%),url('images/WhyChoose.webp') no-repeat center center/cover;
    background-size: cover;
    background-position: center;
    color: var(--white);
    overflow: hidden;
}

.why-choose-content {
    position: relative;
    z-index: 2;
}

.section-heading {
    font-weight: 700;
    margin-bottom: 20px;
    color: var(--white);
}

.section-subheading {
    font-size: 1.5rem;
    margin-bottom: 30px;
    font-weight: 600;
    color: var(--secondary-color);
}

.benefits-list {
    margin-bottom: 40px;
}

.benefit-item {
    position: relative;
    padding-left: 50px;
    margin-bottom: 25px;
}

.benefit-icon {
    position: absolute;
    left: 0;
    top: 0;
    width: 40px;
    height: 40px;
    background-color: var(--accent-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.benefit-title {
    font-weight: 600;
    margin-bottom: 5px;
    font-size: 1.1rem;
        color: var(--text-color);

}

.benefit-desc {
    opacity: 0.9;
    font-size: 0.95rem;
}

.feature-image {
    border-radius: 10px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    height: 100%;
    min-height: 300px;
    object-fit: cover;
}

.contact-btn {
    background-color: var(--accent-color);
    color: var(--white);
    border: none;
    padding: 12px 30px;
    font-weight: 600;
    border-radius: 30px;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    text-decoration: none;
}

.contact-btn:hover {
    background-color: var(--secondary-color);
    color: var(--primary-color);
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
}

.contact-btn i {
    margin-right: 10px;
}

.service-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin: 30px 0;
}

.service-tag {
    background-color: rgba(255,255,255,0.1);
    color: var(--white);
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 0.85rem;
    transition: all 0.3s;
}

.service-tag:hover {
    background-color: var(--accent-color);
}

@media (max-width: 991.98px) {
    .why-choose-section {
        padding: 80px 0;
        text-align: center;
    }
    
    .benefit-item {
        padding-left: 0;
        padding-top: 50px;
        text-align: center;
    }
    
    .benefit-icon {
        left: 50%;
        transform: translateX(-50%);
        top: 0;
    }
    
    .feature-image {
        margin-top: 50px;
        max-height: 400px;
    }
    
    .service-tags {
        justify-content: center;
    }
}

@media (max-width: 767.98px) {
    .why-choose-section {
        padding: 60px 0;
    }
    
    .section-heading {
        font-size: 1.8rem;
    }
    
    .section-subheading {
        font-size: 1.2rem;
    }
    
    .contact-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<section class="why-choose-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="why-choose-content">
                    <h2 class="section-heading">Why Choose</h2>
                    <h3 class="section-subheading"> Pickup  Delivery Across Dubai</h3>
                    <p class="mb-4">
                        We provide reliable, safe, and affordable furniture and appliance Pickup  Delivery  services throughout Dubai. Our experienced team handles everything from single items to full home relocations with care and professionalism.
                    </p>
                    
                    <div class="service-tags">
                        <span class="service-tag">sofa delivery</span>
                        <span class="service-tag">fridge transport</span>
                        <span class="service-tag">washing machine</span>
                        <span class="service-tag">office furniture</span>
                        <span class="service-tag">same day service</span>
                        <span class="service-tag">local movers</span>
                    </div>
                    
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4 class="benefit-title">Same-Day Service Available</h4>
                            <p class="benefit-desc">Quick response for urgent furniture moving needs</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4 class="benefit-title">Professional Handling</h4>
                            <p class="benefit-desc">Proper packing and secure transport of all items</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <h4 class="benefit-title">Door-to-Door Service</h4>
                            <p class="benefit-desc">We come to your location for pickup and delivery</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <h4 class="benefit-title">Transparent Pricing</h4>
                            <p class="benefit-desc">No hidden fees with upfront quotes</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <h4 class="benefit-title">Residential & Commercial</h4>
                            <p class="benefit-desc">Serving homes, offices, and businesses</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h4 class="benefit-title">Experienced Team</h4>
                            <p class="benefit-desc">Trained professionals handling your valuable items</p>
                        </div>
                    </div>
                    
                    <a href="tel:0589125005" class="contact-btn">
                        <i class="fas fa-phone-alt"></i> Call Now: 058 912 5005
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img src="images/furniture-movers.webp" alt="Professional Furniture Delivery in Dubai" class="img-fluid feature-image">
            </div>
        </div>
    </div>
</section>