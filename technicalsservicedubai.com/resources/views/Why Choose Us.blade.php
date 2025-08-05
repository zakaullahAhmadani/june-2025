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

.about-section {
    background-color: var(--white);
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

.section-title {
    color: var(--primary);
    font-weight: 700;
    margin-bottom: 30px;
    position: relative;
    display: inline-block;
    text-align: center;
}

.about-content {
    position: relative;
    z-index: 2;
}

.about-text {
    color: var(--text-color);
    margin-bottom: 30px;
    font-size: 1.05rem;
    line-height: 1.8;
}

.contact-box {
    background-color: var(--primary);
    color: var(--white);
    padding: 25px;
    border-radius: 10px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(10, 102, 194, 0.1);
}

.contact-title {
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 1.2rem;
}

.contact-number {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 15px;
    display: block;
}

.experience-badge {
    background-color: var(--accent);
    color: var(--white);
    display: inline-block;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: 700;
    font-size: 1.2rem;
    margin-bottom: 30px;
}

.about-image {
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    overflow: hidden;
    height: 100%;
    min-height: 250px;
    object-fit: cover;
}

.about-image-left {
    margin-bottom: 30px;
}

.call-btn {
    background-color: var(--accent);
    color: var(--white);
    border: none;
    padding: 12px 25px;
    border-radius: 6px;
    font-weight: bold;
    transition: 0.3s ease;
    display: inline-block;
}

.call-btn:hover {
    background-color: var(--secondary);
    color: var(--text-color);
    text-decoration: none;
}

@media (min-width: 768px) {
    .about-image-left {
        margin-bottom: 0;
    }
    
    .about-content {
        padding-right: 30px;
    }
}

@media (max-width: 767.98px) {
    .about-section {
        padding: 30px 0px;
        text-align: center;
    }
    
    
    .contact-box, .experience-badge {
        margin-left: auto;
        margin-right: auto;
        max-width: 300px;
    }
}
</style>

<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="section-title"style="text-align:center;"> Technical Services in Dubai</h2>
                    <p class="about-text">
                        We provide comprehensive home and commercial maintenance solutions across Dubai. Our certified technicians specialize in false ceiling installation, plumbing repairs, electrical work, painting services, home appliance maintenance, and complete renovation projects. Available 24/7 for emergency services with guaranteed quality workmanship.
                    </p>
                    
                    <div class="contact-box text-center">
                        <h3 class="contact-title">Emergency Service Hotline</h3>
                        <span class="contact-number">056 282 3168</span>
                        <a href="tel:+971562823168" class="call-btn">
                            <i class="fas fa-phone-alt me-2"></i>Call Now
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-md-6">
                        <img src="images/plumbing-service.webp" alt="Plumbing Services in Dubai" class="img-fluid about-image about-image-left">
                    </div>
                    <div class="col-md-6">
                        <img src="images/false-ceiling.webp" alt="False Ceiling Installation Dubai" class="img-fluid about-image">
                    </div>
                    <div class="col-md-6">
                        <img src="images/painting-service.webp" alt="Professional Painting Dubai" class="img-fluid about-image">
                    </div>
                    <div class="col-md-6">
                        <img src="images/electrical-service.webp" alt="Electrical Contractors Dubai" class="img-fluid about-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>