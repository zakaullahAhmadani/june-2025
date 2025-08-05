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

.services-hero {
    position: relative;
    padding: 100px 0;
     background:linear-gradient(135deg,rgba(0,95,115,0.9)0%,rgba(10,147,150,0.9)100%),url('images/ourServices.webp') no-repeat center center/cover;
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
    color: var(--accent-color);
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
    color: var(--secondary-color);
}

.service-btn {
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

.service-btn:hover {
    background-color: var(--secondary-color);
    color: var(--primary-color);
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(255, 94, 0, 0.4);
}

.service-btn i {
    margin-right: 10px;
    font-size: 1.2rem;
}

.service-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin: 25px 0;
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
    .services-hero {
        padding: 80px 0;
        text-align: center;
    }
    
    .service-image {
        margin-top: 40px;
        max-height: 350px;
        width: 100%;
    }
    
    .service-tags {
        justify-content: center;
    }
}

@media (max-width: 767.98px) {
    .services-hero {
        padding: 30px 0;
    }
    
    .service-subheading {
        font-size: 1.3rem;
    }
    
    .service-btn {
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
                    <h2 class="section-heading"> Furniture & Appliance Pickup  Delivery </h2>
                    <h3 class="service-subheading" style="color:var(--accent-color);">Same-Day Pickup  Delivery Across Dubai</h3>
                    <p class="service-description">
                        Reliable moving services for all your furniture and appliances. We handle everything from single items to full home relocations with care and professionalism. Available 24/7 for urgent transport needs.
                    </p>
                    
                    <ul class="service-list">
                        <li>Furniture pickup  delivery</li>
                        <li>Appliance transport & installation</li>
                        <li>Same-day service available</li>
                        <li>Professional packing & wrapping</li>
                        <li>Door-to-door service</li>
                        <li>Residential & commercial moves</li>
                    </ul>
                    
                    <div class="service-tags">
                        <span class="service-tag">sofa delivery</span>
                        <span class="service-tag">fridge transport</span>
                        <span class="service-tag">washing machine</span>
                        <span class="service-tag">office furniture</span>
                        <span class="service-tag">same day service</span>
                        <span class="service-tag">local movers</span>
                    </div>
                    
                    <a href="tel:0589125005" class="service-btn">
                        <i class="fas fa-phone-alt"></i>
                        Call Now: 058 912 5005
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img src="images/furniture-movers.webp" alt="Furniture Pickup and Delivery Service" class="img-fluid service-image">
            </div>
        </div>
    </div>
</section>