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

.furniture-service-section {
    position: relative;
    padding: 100px 0;
    background:linear-gradient(135deg,rgba(0,95,115,0.9)0%,rgba(10,147,150,0.9)100%),url('images/contactFurniture-movers.webp') no-repeat center center/cover;
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
    color: var(--accent-color);
}

.service-description {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 35px;
}

.call-btn {
    background-color: var(--accent-color);
    color: var(--white);
    border: none;
    padding: 15px 35px;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 50px;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    box-shadow: 0 5px 15px rgba(255, 94, 0, 0.3);
    text-decoration: none;
}

.call-btn:hover {
    background-color: var(--secondary-color);
    color: var(--primary-color);
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(255, 94, 0, 0.4);
}

.call-btn i {
    margin-right: 10px;
    font-size: 1.3rem;
}

/* Updated Benefits Grid - 2 items per row always */
.benefits-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin: 30px 0;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

.benefit-item {
    background-color: rgba(255,255,255,0.1);
    padding: 25px 15px;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    text-align: center;
    cursor: default;
    min-height: 120px;
}

.benefit-item i {
    font-size: 1.8rem;
    color: var(--secondary-color);
    margin-bottom: 12px;
    transition: all 0.3s ease;
}

.benefit-item span {
    font-size: 0.95rem;
    font-weight: 500;
    display: block;
}

.benefit-item:hover {
    background-color: var(--accent-color);
    transform: scale(1.05);
}

.service-tags {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 40px;
}

.service-tag {
    background-color: rgba(255,255,255,0.1);
    color: var(--white);
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    transition: all 0.3s;
}

.service-tag:hover {
    background-color: var(--accent-color);
}

@media (max-width: 767.98px) {
    .furniture-service-section {
        padding: 30px 0;
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
    
    .benefits-grid {
        margin: 30px auto;
        gap: 10px;
    }
    
    .service-tags {
        margin-top: 30px;
    }
}

@media (max-width: 400px) {
    .benefits-grid {
        grid-template-columns: 1fr;
        max-width: 300px;
    }
}
</style>

<section class="furniture-service-section">
    <div class="service-content">
        <h1 class="service-title">Appliance Pickup Delivery in Dubai</h1>
        <h2 class="service-subtitle">Same-Day Pickup  Delivery Service Across UAE</h2>
        <p class="service-description">
            Need to move appliances? Our professional team provides reliable pickup & delivery services for all your household and office items. We handle everything with care and offer same-day service for urgent needs.
        </p>
        
        <div class="benefits-grid">
            <div class="benefit-item">
                <i class="fas fa-truck"></i>
                <span>Same-day service</span>
            </div>
            <div class="benefit-item">
                <i class="fas fa-shield-alt"></i>
                <span>Safe handling</span>
            </div>
            <div class="benefit-item">
                <i class="fas fa-home"></i>
                <span>Door-to-door</span>
            </div>
            <div class="benefit-item">
                <i class="fas fa-dollar-sign"></i>
                <span>Affordable rates</span>
            </div>
        </div>
        
        <a href="tel:0589125005" class="call-btn">
            <i class="fas fa-phone-alt"></i> Call Now: 058 912 5005
        </a>
    </div>
</section>