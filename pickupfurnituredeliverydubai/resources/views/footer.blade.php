<style>
    :root {
       --primary:#005f73;
    --primary-light:#0a9396;
    --secondary:#ee9b00;
    --accent:#bb3e03;
    --light-bg:#f8f9fa;
    --white:#ffffff;
    --text:#212529;
    --text-light:#6c757d;
    --shadow-sm:0 1px 3px rgba(0,0,0,0.12);
    --shadow-md:0 4px 6px rgba(0,0,0,0.1);
    --shadow-lg:0 10px 25px rgba(0,0,0,0.1);
    --transition:all 0.3s cubic-bezier(0.25,0.8,0.25,1);
    }
    
    .footer {
        background-color: var(--primary-color);
        color: var(--white);
        padding: 60px 0 0;
        border-top: 5px solid var(--secondary-color);
    }
    
    .footer-logo {
        max-width: 180px;
        margin-bottom: 20px;
    }
    
    .footer-about p {
        color: rgba(255,255,255,0.8);
        margin-bottom: 20px;
        line-height: 1.6;
    }
    
    .social-icons a {
        color: var(--white);
        background: rgba(255,255,255,0.1);
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        transition: all 0.3s;
    }
    
    .social-icons a:hover {
        background: var(--secondary-color);
        transform: translateY(-3px);
    }
    
    .footer-heading {
        color: var(--white);
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }
    
    .footer-heading:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 2px;
        background: var(--secondary-color);
    }
    
    .footer-links {
        list-style: none;
        padding: 0;
    }
    
    .footer-links li {
        margin-bottom: 10px;
    }
    
    .footer-links a {
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        transition: all 0.3s;
        display: inline-block;
    }
    
    .footer-links a:hover {
        color: var(--secondary-color);
        transform: translateX(5px);
    }
    
    .contact-inf {
        list-style: none;
        padding: 0;
    }
    
    .contact-inf li {
        margin-bottom: 15px;
        display: flex;
        align-items: flex-start;
    }
    
    .contact-inf i {
        color: var(--secondary-color);
        margin-right: 10px;
        margin-top: 3px;
    }
    
    .contact-inf a {
        color: var(--white);
        text-decoration: none;
        transition: all 0.3s;
    }
    
    .contact-inf a:hover {
        color: var(--secondary-color);
    }
    
    .footer-bottom {
        background-color: rgba(0,0,0,0.1);
        padding: 20px 0;
        margin-top: 40px;
    }
    
    .copyright {
        color: rgba(255,255,255,0.7);
        text-align: center;
    }
    
    .footer-policies {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 10px;
    }
    
    .footer-policies a {
        color: rgba(255,255,255,0.7);
        text-decoration: none;
        margin: 0 10px;
        transition: all 0.3s;
    }
    
    .footer-policies a:hover {
        color: var(--secondary-color);
    }
    
    .developer-credit {
        color: rgba(255,255,255,0.5);
        text-align: center;
        font-size: 0.9rem;
        margin-top: 10px;
    }
    
    .developer-credit a {
        color: var(--secondary-color);
        text-decoration: none;
    }
    
    @media (max-width: 991.98px) {
        .footer-col {
            margin-bottom: 30px;
        }
    }
    
    @media (max-width: 767.98px) {
        .footer {
            padding: 40px 0 0;
        }
        
        .footer-col {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .footer-heading:after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .footer-links a {
            display: block;
        }
        
        .contact-inf {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .contact-inf li {
            justify-content: center;
        }
        
        .social-icons {
            justify-content: center;
        }
    }
</style>

<style>
    /* Floating Action Buttons */
    :root {
        --whatsapp: #25D366;
        --call: #2A5C8B;
    }

    .contact-button {
        position: fixed;
        bottom: 30px;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-size: 24px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        transition: all 0.3s ease;
        border: none;
    }

    .contact-button:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .call-button {
        left: 30px;
        background: var(--call);
    }

    .whatsapp-button {
        right: 30px;
        background: var(--whatsapp);
    }

    .contact-label {
        position: absolute;
        right: 70px;
        background: var(--neutral-dark);
        color: var(--white);
        padding: 8px 12px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 500;
        white-space: nowrap;
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }

    .call-button .contact-label {
        left: 70px;
        right: auto;
    }

    .contact-button:hover .contact-label {
        opacity: 1;
    }

    @media (max-width: 768px) {
        .contact-button {
            width: 60px;
            height: 60px;
            font-size: 20px;
            bottom: 20px;
        }

        .call-button {
            left: 15px;
        }

        .whatsapp-button {
            right: 15px;
        }

        .contact-label {
            font-size: 12px;
            padding: 6px 10px;
            right: 60px;
        }

        .call-button .contact-label {
            left: 60px;
        }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    .pulse-animation {
        animation: pulse 2s infinite;
    }
</style>

<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- About Column -->
            <div class="col-lg-3 col-md-6 footer-col">
                <img src="images/Pickup Furniture Delivery Dubai  Logo Fottor.png" alt="Fast Furniture Movers Dubai" class="footer-logo">
                
                <p>We provide professional furniture and appliance pickup  delivery services across Dubai. Our team handles everything from sofas to refrigerators with care and efficiency.</p>
                <div class="social-icons d-flex">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            
            <!-- Quick Links Column -->
            <div class="col-lg-3 col-md-6 footer-col">
                <h4 class="footer-heading">Our Services</h4>
                <ul class="footer-links">
                    <li><a href="https://wa.me/+971589125005">Furniture Pickup  Delivery</a></li>
                    <li><a href="https://wa.me/+971589125005">Appliance Delivery</a></li>
                    <li><a href="https://wa.me/+971589125005">Sofa Pickup &Delivery</a></li>
                    <li><a href="https://wa.me/+971589125005">Refrigerator Transport</a></li>
                </ul>
            </div>
            
            <!-- Services Column -->
            <div class="col-lg-3 col-md-6 footer-col">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                  
                </ul>
            </div>
            
            <!-- Contact Column -->
            <div class="col-lg-3 col-md-6 footer-col">
                <h4 class="footer-heading">Contact Us</h4>
                <ul class="contact-inf">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+971589125005">+971 58 912 5005</a>
                    </li>
                    <li>
                        <i class="fab fa-whatsapp"></i>
                        <a href="https://wa.me/+971589125005" target="_blank">+971589125005</a>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@pickupfurnituredeliverydubai.com">info@pickupfurnituredeliverydubai.com</a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Dubai, UAE</span>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span>24/7</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">Copyright © 2025 Pickup Furniture Delivery Dubai, All rights reserved <strong> <a href="https://innovative-technologies.net/">Innovative Technologies </a></strong></p>
                <div class="footer-policies">
                    <a href="/privacy-policy">Terms of Service</a>
                    <span>|</span>
                    <a href="/privacy-policy">Privacy Policy</a>
                   
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Action Buttons -->
<div>
    <a href="tel:+971589125005" class="contact-button call-button pulse-animation">
        <i class="fas fa-phone"></i>
        <span class="contact-label">Call Now</span>
    </a>

    <a href="https://wa.me/+971589125005" target="_blank" class="contact-button whatsapp-button">
        <i class="fab fa-whatsapp"></i>
        <span class="contact-label">WhatsApp Us</span>
    </a>
</div>