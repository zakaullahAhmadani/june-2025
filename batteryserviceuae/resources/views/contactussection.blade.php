<style>
:root {
    --primary: #002B5B;
    --secondary: #FFD700;
    --accent: #FF5E00;
    --light-bg: #F7F7F7;
    --white: #FFFFFF;
    --text-color: #1A1A1A;
    --text-secondary: #555555;
}

.battery-service-section {
    position: relative;
    padding: 100px 0;
    background: linear-gradient(rgba(0, 43, 91, 0.85), rgba(0, 43, 91, 0.85)), 
                url('images/battery-service-bg.webp') no-repeat center center;
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
     /* color: var(--accent); */
}

.service-subtitle {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 25px;
    color: var(--accent);
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
    box-shadow: 0 5px 15px rgba(255, 94, 0, 0.3);
    text-decoration: none;
}

.call-btn:hover {
    background-color: var(--accent);
    color: var(--white);
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(255, 94, 0, 0.4);
}

.call-btn i {
    margin-right: 10px;
    font-size: 1.3rem;
}

.brand-logos {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 50px;
}

.brand-logo {
    height: 40px;
    opacity: 0.9;
    transition: all 0.3s;
}

.brand-logo:hover {
    opacity: 1;
    transform: scale(1.05);
}

@media (max-width: 767.98px) {
    .battery-service-section {
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
    
    .brand-logos {
        gap: 15px;
        margin-top: 30px;
    }
    
    .brand-logo {
        height: 30px;
    }
}
</style>
</head>
<body>
    <section class="battery-service-section">
    <div class="service-content">
        <h1 class="service-title">24/7 Emergency Battery Service Across UAE</h1>
        <h2 class="service-subtitle">Fast Mobile Battery Replacement When You Need It Most</h2>
        <p class="service-description">
            Dead battery? We'll come to you anywhere in UAE within 30 minutes! Our certified technicians provide professional battery replacement and jump start services 24/7. We carry all major brands and guarantee quick, reliable service at competitive prices.
        </p>
        
        <div class="key-benefits">
            <div class="benefit-item">
                <i class="fas fa-bolt"></i>
                <span>Instant jump starts</span>
            </div>
            <div class="benefit-item">
                <i class="fas fa-car"></i>
                <span>At your location</span>
            </div>
            <div class="benefit-item">
                <i class="fas fa-clock"></i>
                <span>24/7 availability</span>
            </div>
        </div>
        
        <a href="tel:+971555851570" class="call-btn">
            <i class="fas fa-phone-alt"></i> Emergency Call: +971 55 585 1570
        </a>
        
        <div class="brand-logos">
            <div class="logo-group">
                <h3>We Carry Top Battery Brands:</h3>
                <div class="logos-container">
                    <img src="images/exide-logo.webp" alt="Exide" class="brand-logo">
                    <img src="images/varta-logo.webp" alt="Varta" class="brand-logo">
                    <img src="images/bosch-logo.webp" alt="Bosch" class="brand-logo">
                    <img src="images/amaron-logo.webp" alt="Amaron" class="brand-logo">
                    <img src="images/din-logo.webp" alt="DIN" class="brand-logo">
                </div>
            </div>
        </div>
    </div>
</section>