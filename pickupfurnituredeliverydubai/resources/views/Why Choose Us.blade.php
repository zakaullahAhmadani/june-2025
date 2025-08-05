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

.about-section {
    background-color: var(--white);
    padding: 20px 0;
    position: relative;
    overflow: hidden;
}

.section-title {
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 1.5rem; /* Changed from px to rem for responsiveness */
    position: relative;
    display: inline-block;
    font-size: clamp(1.25rem, 5vw, 1.5rem); /* Responsive font sizing */
    line-height: 1.3; /* Better readability */
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
    background-color: var(--primary-color);
    color: var(--white);
    padding: 25px;
    border-radius: 10px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(10,147,150,0.9);
}

.contact-title {
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 1.2rem;
    color: var(--secondary-color);
}

.contact-number {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--secondary-color);
    margin-bottom: 15px;
    display: block;
}

.experience-badge {
    background-color: var(--accent-color);
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
    background-color: var(--accent-color);
    color: var(--white);
    border: none;
    padding: 12px 25px;
    border-radius: 6px;
    font-weight: bold;
    transition: 0.3s ease;
    display: inline-block;
    text-decoration: none;
}

.call-btn:hover {
    background-color: var(--secondary-color);
    color: var(--primary-color);
    transform: translateY(-2px);
}

.service-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin: 20px 0;
}

.service-tag {
    background-color: var(--bg-color);
    color: var(--primary-color);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.85rem;
    border: 1px solid rgba(0, 43, 91, 0.1);
}

@media (min-width: 768px) {
    .about-section {
        padding: 20px 0;
    }
    .about-image-left {
        margin-bottom: 0;
    }
    
    .about-content {
        padding-right: 30px;
    }
}

@media (max-width: 767.98px) {
   
    .about-section {
        padding: 0px 0;
        text-align: center;
    }
    
    .contact-box, .experience-badge {
        margin-left: auto;
        margin-right: auto;
        max-width: 300px;
    }
    
    .service-tags {
        justify-content: center;
    }
}
</style>

<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="hero-title" style="color:black;"> Furniture Pickup Delivery in Dubai</h2>
                    <p class="about-text">
                        We provide reliable pickup  delivery services for all types of furniture and appliances across Dubai. Our experienced team handles everything from single items to full home relocations with care and professionalism. Available for same-day service when you need urgent transport solutions.
                    </p>
                    
                    
                    
                    <div class="contact-box text-center">
                        <h3 class="contact-title">24/7 Pickup & Delivery Service</h3>
                        <span class="contact-number">058 912 5005</span>
                        <a href="tel:0589125005" class="call-btn">
                            <i class="fas fa-phone-alt me-2"></i>Call Now
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-md-6">
                        <img src="images/furniture-delivery.webp" alt="Furniture Delivery Service" class="img-fluid about-image about-image-left">
                    </div>
                    <div class="col-md-6">
                        <img src="images/appliance-movers.webp" alt="Appliance Moving Service" class="img-fluid about-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>