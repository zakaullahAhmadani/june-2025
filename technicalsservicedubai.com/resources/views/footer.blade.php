<style>
    :root {
      /* Brand Identity */
      --primary-color: #0A66C2;     /* Blue - Plumbing */
      --secondary-color: #FFD700;   /* Yellow - Electrical */
      --accent-color: #28A745;      /* Green - Painting */
      --renovation-color: #8B4513;  /* Brick Brown - Renovation */
      --appliance-color: #A9A9A9;   /* Grey - Home Appliances */
      --ceiling-color: #F5F5F5;     /* Off White - False Ceiling */
    
      /* Text Colors */
      --text-color: #222222;
      --text-light: #555555;
      --text-white: #ffffff;
    
      /* Background Colors */
      --bg-light: #f9f9f9;
      --bg-dark: #1e1e1e;
      --bg-image-overlay: rgba(0, 0, 0, 0.5);
    
      /* Button Styles */
      --btn-bg: var(--primary-color);
      --btn-color: var(--text-white);
      --btn-hover-bg: var(--accent-color);
      --btn-hover-color: var(--text-white);
    
      /* Border and Shadow */
      --border-color: #dddddd;
      --box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    
    .footer {
        background-color: var(--primary-color);
        color: var(--text-white);
        padding: 60px 0 0;
    }
    
    .footer-logo {
        max-width: 180px;
        margin-bottom: 20px;
    }
    
    .footer-about p {
        color: rgba(255,255,255,0.8);
        margin-bottom: 20px;
    }
    
    .social-icons a {
        color: var(--text-white);
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
        background: var(--accent-color);
        transform: translateY(-3px);
    }
    
    .footer-heading {
        color: var(--text-white);
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
        color: var(--text-white);
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

    /* Floating Contact Buttons */
    .contact-button {
        position: fixed;
        bottom: 30px;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--text-white);
        font-size: 24px;
        box-shadow: var(--box-shadow);
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
        background: var(--primary-color);
    }

    .whatsapp-button {
        right: 30px;
        background: #25D366; /* WhatsApp brand color */
    }

    .contact-label {
        position: absolute;
        right: 70px;
        background: var(--text-color);
        color: var(--text-white);
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

    /* Mobile responsiveness */
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

    /* Animation for attention */
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
                <img src="{{ asset('images/Technical Service Dubai  Logo fotor.png') }}" alt="Dubai Ceiling Experts Logo" class="footer-logo">
                
               <p>Leading Dubai ceiling experts specializing in gypsum false ceilings.  
Full property services: plumbing, electrical, painting, appliances & renovations.</p>
                <div class="social-icons d-flex">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <!-- Quick Links Column -->
            <div class="col-lg-3 col-md-6 footer-col">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/services">Our Services</a></li>
                    
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            
            <!-- Services Column -->
           <div class="col-lg-3 col-md-6 footer-col">
    <h4 class="footer-heading">Our Services</h4>
    <ul class="footer-links">
        <li><a href="https://wa.me/+971562823168">Gypsum Ceiling Installation</a></li>
        <li><a href="https://wa.me/+971562823168">Plumbing Services</a></li>
        <li><a href="https://wa.me/+971562823168">Electrical Works</a></li>
        <li><a href="https://wa.me/+971562823168">Painting Services</a></li>
        <li><a href="https://wa.me/+971562823168">Home Renovation</a></li>
         <li><a href="https://wa.me/+971562823168">AC Repair</a></li>
    </ul>
</div>
            
            <!-- Contact Column -->
            <div class="col-lg-3 col-md-6 footer-col">
                <h4 class="footer-heading">Contact Us</h4>
                <ul class="contact-inf">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+971562823168">+971 56 282 3168</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:Fmubashiriqbal605@gmail.com">Fmubashiriqbal605@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Italy Cluster 21, Dubai, UAE</span>
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
                <p class="copyright">Copyright © 2025 Dubai Technical services, All rights reserved <strong>  <a Style="color:white;text-decoration:none" href="https://innovative-technologies.net/">Innovative Technologies </a></strong> </p>
                <div class="footer-policies">
                    <a href="privacy-policy">Terms of Service</a>
                    <span>|</span>
                    <a href="privacy-policy">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Contact Buttons -->
<a href="tel:+971562823168" class="contact-button call-button pulse-animation">
    <i class="fas fa-phone"></i>
    <span class="contact-label">Call Us Now</span>
</a>

<a href="https://wa.me/+971562823168" target="_blank" class="contact-button whatsapp-button">
    <i class="fab fa-whatsapp"></i>
    <span class="contact-label">Chat on WhatsApp</span>
</a>