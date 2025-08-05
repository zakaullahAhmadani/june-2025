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
    box-shadow: 0 5px 15px rgba(0, 43, 91, 0.1);
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
    background-color: var(--accent);
    color: var(--white);
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
        padding: 50px 0;
        text-align: center;
    }
    
    .section-title:after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .contact-box, .experience-badge {
        margin-left: auto;
        margin-right: auto;
        max-width: 300px;
    }
}
</style>
</head>
<body>
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="section-title">Professional Car Battery Services UAE</h2>
                        <p class="about-text">
                            We provide 24/7 mobile battery replacement and jump start services across UAE. Our expert technicians carry all major battery brands and come directly to your location for fast, reliable service. No battery repair services offered - we specialize in quality battery replacements and emergency power solutions.
                        </p>
                        
                        <div class="contact-box text-center">
                            <h3 class="contact-title">Emergency Battery Service</h3>
                            <span class="contact-number">+971 55 585 1570</span>
                            <a href="tel:+971555851570" class="call-btn">
                                <i class="fas fa-phone-alt me-2"></i>Call Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <img src="images/battery-service.webp" alt="Battery Replacement Service" class="img-fluid about-image about-image-left">
                        </div>
                        <div class="col-md-6">
                            <img src="images/jump-start.webp" alt="Jump Start Service" class="img-fluid about-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>