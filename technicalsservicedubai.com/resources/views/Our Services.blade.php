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

.services-hero {
    position: relative;
    padding: 100px 0;
    background: linear-gradient(rgba(10, 102, 194, 0.85), rgba(10, 102, 194, 0.85)), 
                url('images/technical-services-bg.webp') no-repeat center center;
    background-size: cover;
    background-position: center;
    color: var(--white);
    overflow: hidden;
}

.service-content {
    position: relative;
    z-index: 2;
}

.section-heading {
    font-weight: 700;
    margin-bottom: 20px;
    color: var(--white);
    position: relative;
    display: inline-block;
}

.service-subheading {
    font-size: 1.5rem;
    margin-bottom: 30px;
    font-weight: 600;
    color: var(--secondary);
}

.service-description {
    margin-bottom: 30px;
    line-height: 1.8;
    font-size: 1.05rem;
}

.service-image {
    border-radius: 10px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    height: 100%;
    min-height: 300px;
    object-fit: cover;
}

.service-list {
    list-style: none;
    padding: 0;
    margin: 0 0 30px 0;
}

.service-list li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 15px;
    font-size: 1.05rem;
}

.service-list li:before {
    content: '\f00c';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--secondary);
}

.emergency-btn {
    background-color: var(--accent);
    color: var(--white);
    border: none;
    padding: 12px 30px;
    font-weight: 600;
    border-radius: 30px;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
}

.emergency-btn:hover {
    background-color: var(--secondary);
    color: var(--text-color);
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
}

.emergency-btn i {
    margin-right: 10px;
    font-size: 1.2rem;
}

@media (max-width: 991.98px) {
    .services-hero {
        padding: 80px 0;
        text-align: center;
    }
    
    .section-heading:after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .service-image {
        margin-top: 40px;
        max-height: 350px;
        width: 100%;
    }
}

@media (max-width: 767.98px) {
    .services-hero {
        padding: 60px 0;
    }
    
    .service-subheading {
        font-size: 1.3rem;
    }
    
    .emergency-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<section class="services-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-content">
                    <h2 class="section-heading">0ur Services in Dubai</h2>
                    <h3 class="service-subheading">Complete Home & Commercial Maintenance Solutions</h3>
                    <p class="service-description">
                        We provide expert plumbing, electrical, painting, false ceiling installation, home appliance repair, and renovation services across Dubai. Our certified technicians are available 24/7 for emergency services with guaranteed quality workmanship.
                    </p>
                    
                    <ul class="service-list">
                        <li>Emergency plumbing services in Dubai</li>
                        <li>Professional electrical contractors</li>
                        <li>Villa & apartment painting services</li>
                        <li>Gypsum board false ceiling installation</li>
                        <li>Home appliance maintenance & repair</li>
                        <li>Complete renovation solutions</li>
                    </ul>
                    
                    <button class="emergency-btn">
                        <a href="tel:+971562823168" style="color: inherit; text-decoration: none;">
                            <i class="fas fa-phone-alt"></i>
                            Call Now: 056 282 3168
                        </a>
                    </button>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img src="images/dubai-technical-services.webp" alt="Technical Services in Dubai" class="img-fluid service-image">
            </div>
        </div>
    </div>
</section>