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

.technical-service-section {
    position: relative;
    padding: 100px 0;
    background: linear-gradient(rgba(10, 102, 194, 0.85), rgba(10, 102, 194, 0.85)), 
                url('images/technical-services-bg.webp') no-repeat center center;
    background-size: cover;
    background-position: center;
    color: var(--white);
    text-align: center;
    overflow: hidden;
}

.service-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
}

.service-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    line-height: 1.3;
}

.service-subtitle {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 25px;
    color: var(--secondary);
}

.service-description {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 35px;
}

.call-btn {
    background-color: var(--accent);
    color: var(--white);
    border: none;
    padding: 15px 35px;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 50px;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
    text-decoration: none;
}

.call-btn:hover {
    background-color: var(--secondary);
    color: var(--text-color);
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(255, 215, 0, 0.4);
}

.call-btn i {
    margin-right: 10px;
    font-size: 1.3rem;
}

.service-features {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    margin: 40px 0;
}

.feature-item {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    padding: 15px 20px;
    min-width: 200px;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.feature-item i {
    color: var(--secondary);
    font-size: 1.5rem;
    margin-bottom: 10px;
}
.feature-item div{
    font-size: 1rem;
    color: var(--white);
    font-weight: 500;
} 

.specialty-logos {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 50px;
}

.specialty-logo {
    height: 40px;
    opacity: 0.9;
    transition: all 0.3s;
}

.specialty-logo:hover {
    opacity: 1;
    transform: scale(1.05);
}

@media (max-width: 767.98px) {
    .technical-service-section {
        padding: 70px 0;
    }
    
    .service-title {
        font-size: 2rem;
    }
    
    .service-subtitle {
        font-size: 1.3rem;
    }
    
    .service-description {
        font-size: 1rem;
    }
    
    .call-btn {
        padding: 12px 25px;
        font-size: 1rem;
        width: 100%;
        justify-content: center;
    }
    
    .service-features {
        gap: 15px;
        margin: 30px 0;
    }
    
    .feature-item {
        min-width: 150px;
        padding: 10px 15px;
    }
    
    .specialty-logos {
        gap: 15px;
        margin-top: 30px;
    }
    
    .specialty-logo {
        height: 30px;
    }
}
</style>

<section class="technical-service-section">
    <div class="service-content">
        <h1 class="service-title">Professional Technical Services in Dubai</h1>
        <h2 class="service-subtitle">Complete Home & Commercial Maintenance Solutions</h2>
        <p class="service-description">
            We provide expert plumbing, electrical, painting, false ceiling installation, home appliance repair, and renovation services across Dubai. Our certified technicians are available 24/7 for emergency services with guaranteed quality workmanship.
        </p>
        
        <div class="service-features">
            <div class="feature-item">
                <i class="fas fa-tools"></i>
                <div>Emergency Plumbing Services</div>
            </div>
            <div class="feature-item">
                <i class="fas fa-bolt"></i>
                <div>Electrical Contractors</div>
            </div>
            <div class="feature-item">
                <i class="fas fa-paint-roller"></i>
                <div>Professional Painting</div>
            </div>
            <div class="feature-item">
                <i class="fas fa-border-style"></i>
                <div>False Ceiling Installation</div>
            </div>
        </div>
        
        <a href="tel:+971562823168" class="call-btn">
            <i class="fas fa-phone-alt"></i> Call Now: 056 282 3168
        </a>
        
        <div class="specialty-logos">
            <div class="logo-group">
                <h3>Our Specializations:</h3>
                <div class="logos-container">
                    <img src="images/plumbing-logo.webp" alt="Plumbing Services Dubai" class="specialty-logo">
                    <img src="images/electrical-logo.webp" alt="Electrical Contractors Dubai" class="specialty-logo">
                    <img src="images/painting-logo.webp" alt="Painting Services Dubai" class="specialty-logo">
                    <img src="images/ceiling-logo.webp" alt="False Ceiling Installation" class="specialty-logo">
                    <img src="images/renovation-logo.webp" alt="Renovation Services" class="specialty-logo">
                </div>
            </div>
        </div>
    </div>
</section>