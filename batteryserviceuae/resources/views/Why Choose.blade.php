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
    background: linear-gradient(rgba(0, 43, 91, 0.85), rgba(0, 43, 91, 0.85)), 
                url('images/battery-service.webp') no-repeat center center;
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
    color: var(--accent);
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
    font-size: 1rem;
}

.contact-btn:hover {
    background-color: var(--accent);
    color: var(--primary-color);
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
}

.contact-btn i {
    margin-right: 10px;
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
                    <h2 class="section-heading">Why Choose Our Battery Services</h2>
                    <h3 class="section-subheading">Premium Battery Solutions Across UAE</h3>
                    <p class="mb-4">
                        When you need emergency battery replacement, jump start service, or professional battery testing in UAE, we're your trusted partner. Our certified technicians provide 24/7 mobile battery services with top-quality brands including Exide, Varta, Bosch, and Amaron.
                    </p>
                    
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h4 class="benefit-title">24/7 Emergency Service</h4>
                            <p class="benefit-desc">Fast response for dead batteries anytime, anywhere in UAE</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-car-battery"></i>
                            </div>
                            <h4 class="benefit-title">Genuine Battery Brands</h4>
                            <p class="benefit-desc">We use only premium quality batteries from top manufacturers</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4 class="benefit-title">Safe Installation</h4>
                            <p class="benefit-desc">Professional installation following manufacturer specifications</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <h4 class="benefit-title">Warranty Protection</h4>
                            <p class="benefit-desc">All batteries come with full manufacturer warranty</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-tags"></i>
                            </div>
                            <h4 class="benefit-title">Competitive Pricing</h4>
                            <p class="benefit-desc">Best prices for quality battery replacement services</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-recycle"></i>
                            </div>
                            <h4 class="benefit-title">Eco-Friendly Disposal</h4>
                            <p class="benefit-desc">Proper recycling of old batteries according to UAE regulations</p>
                        </div>
                    </div>
                    
                    <a href="tel:+971555851570" class="contact-btn">
                        <i class="fas fa-phone-alt"></i> Call Now: +971 55 585 1570
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img src="images/battery-service.webp" alt="Professional Battery Replacement in UAE" class="img-fluid feature-image">
            </div>
        </div>
    </div>
</section>