<style>
   :root {
  /* Color Variables */
  --primary-blue: #005EB8;
  --light-gray: #F4F4F4;
  --accent-gold: #FCBF1E;
  --dark-bg: #2a2a2a;
  --footer-text: #e0e0e0;
  --pure-white: #ffffff;
  
  /* Spacing Variables */
  --space-xs: 0.5rem;
  --space-sm: 1rem;
  --space-md: 1.5rem;
  --space-lg: 2rem;
  --space-xl: 3rem;
}

/* Base Reset */
.footer * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Tajawal', 'Segoe UI', sans-serif;
}

/* Footer Structure */
.footer {
  background-color: var(--dark-bg);
  color: var(--footer-text);
  padding: var(--space-xl) 0 0;
  line-height: 1.6;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 var(--space-md);
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: var(--space-lg);
}

/* Footer Columns */
.footer-column {
  margin-bottom: var(--space-xl);
}

/* About Section */
.footer-about .logo {
  display: block;
  margin-bottom: var(--space-md);
}

.footer-about .logo img {
  max-width: 200px;
  height: auto;
}

.footer-about p {
  font-size: 0.95rem;
  margin-bottom: var(--space-md);
  opacity: 0.9;
}

/* Social Icons */
.social-icons {
  display: flex;
  gap: var(--space-xs);
}

.social-icons a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.08);
  border-radius: 50%;
  color: var(--pure-white);
  transition: all 0.25s ease;
}

.social-icons a:hover {
  background-color: var(--accent-gold);
  transform: translateY(-2px);
}

/* Section Titles */
.footer-title {
  color: var(--pure-white);
  font-size: 1.25rem;
  margin-bottom: var(--space-md);
  position: relative;
  padding-bottom: var(--space-xs);
}

.footer-title::after {
  content: '';
  position: absolute;
  bottom: 0;
  right: 0;
  width: 40px;
  height: 2px;
  background-color: var(--accent-gold);
}

/* Links List */
.footer-links {
  list-style: none;
}

.footer-links li {
  margin-bottom: var(--space-sm);
}

.footer-links a {
  color: var(--footer-text);
  text-decoration: none;
  transition: all 0.2s ease;
  display: inline-block;
  font-size: 0.95rem;
}

.footer-links a:hover {
  color: var(--accent-gold);
  transform: translateX(5px);
}

/* Contact Information */
.contact-inf {
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}

.contact-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-xs);
}

.contact-icon {
  color: var(--accent-gold);
  font-size: 1rem;
  margin-top: 3px;
}

.contact-text {
  flex: 1;
}

.contact-item a {
  color: inherit;
  text-decoration: none;
  transition: color 0.2s ease;
}

.contact-item a:hover {
  color: var(--accent-gold);
}

/* Footer Bottom */
.footer-bottom {
  background-color: rgba(0, 0, 0, 0.15);
  padding: var(--space-md) 0;
  margin-top: var(--space-lg);
}

.footer-bottom-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 var(--space-md);
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  gap: var(--space-sm);
}

.copyright {
  font-size: 0.85rem;
  opacity: 0.8;
}

.copyright a {
  color: var(--accent-gold);
  text-decoration: none;
}

.policy-links {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
}

.policy-links a {
  color: var(--footer-text);
  text-decoration: none;
  font-size: 0.85rem;
  transition: color 0.2s ease;
}

.policy-links a:hover {
  color: var(--accent-gold);
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
  .footer {
    padding: var(--space-lg) 0 0;
  }
  
  .footer-container {
    grid-template-columns: 1fr;
    gap: var(--space-md);
  }
  
  .footer-column {
    margin-bottom: var(--space-lg);
  }
  
  .footer-about .logo img {
    max-width: 180px;
  }
  
  .footer-title {
    font-size: 1.1rem;
  }
  
  .footer-bottom-container {
    flex-direction: column;
    text-align: center;
  }
  
  .policy-links {
    justify-content: center;
  }
}

/* Small Mobile Devices */
@media (max-width: 480px) {
  .footer {
    padding: var(--space-md) 0 0;
  }
  
  .footer-links a {
    font-size: 0.9rem;
  }
  
  .contact-item {
    flex-wrap: wrap;
  }
  
  .contact-text {
    min-width: 100%;
    padding-right: 28px; /* Account for icon */
    word-break: break-word;
  }
  
  .policy-links {
    gap: var(--space-sm);
  }
}

/* RTL Support */
[dir="rtl"] .footer-links a:hover {
  transform: translateX(-5px);
}

[dir="rtl"] .footer-title::after {
  right: auto;
  left: 0;
}

[dir="rtl"] .contact-text {
  padding-right: 0;
  padding-left: 28px;
}
</style>

<footer class="footer" dir="">
    <div class="footer-container">
        <!-- Column 1: About & Social -->
        <div class="footer-column footer-about">
            <a href="#" class="logo">
                <img src="images/AC-and-Automatic-Washing-Machine-Repair-header.png" alt="المكيفات والغسالات">
            
           </a>
            <p>
                نقدم خدمات صيانة متكاملة بأعلى معايير الجودة باستخدام أحدث التقنيات وقطع الغيار الأصلية لضمان رضا عملائنا الكرام.
            </p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <!-- Column 2: Explore Links -->
        <div class="footer-column">
            <h3 class="footer-title">روابط سريعة</h3>
            <ul class="footer-links">
                <li><a href="/">الرئيسية</a></li>
               <li><a href="/services">خدماتنا</a></li>
                <li><a href="/about">من نحن</a></li>
                <li><a href="/contact">اتصل بنا </a></li>
            </ul>
        </div>

        <!-- Column 3: Services -->
        <div class="footer-column">
            <h3 class="footer-title">خدماتنا</h3>
            <ul class="footer-links">
                <li><a href="https://wa.me/966531482186">صيانة المكيفات</a></li>
                <li><a href="https://wa.me/966531482186">صيانة الغسالات</a></li>
                <li><a href="https://wa.me/966531482186">صيانة الثلاجات</a></li>
                <li><a href="https://wa.me/966531482186">صيانة الأفران</a></li>
            </ul>
        </div>

        <!-- Column 4: Contact -->
        <div class="footer-column">
            <h3 class="footer-title">اتصل بنا</h3>
            <div class="contact-inf">
                <div class="contact-item">
                    <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                    <span>الرياض، المملكة العربية السعودية</span>
                </div>
                <div class="contact-item">
    <span class="contact-icon"><i class="fas fa-phone"></i></span>
    <span><a href="tel:+966531482186" style="color: inherit; text-decoration: none;">+966 53 148 2186</a></span>
</div>
<div class="contact-item">
    <span class="contact-icon"><i class="fab fa-whatsapp"></i></span>
    <span><a href="https://wa.me/966531482186" style="color: inherit; text-decoration: none;" target="_blank">+966 53 148 2186</a></span>
</div>
<div class="contact-item">
    <span class="contact-icon"><i class="fas fa-envelope"></i></span>
    <span><a href="mailto:info@automaticwashingmachineandacrepair.shop" style="color: inherit; text-decoration: none;">info@automaticwashingmachine <br>andacrepair.shop</a></span>
</div>
                <div class="contact-item">
                    <span class="contact-icon"><i class="fas fa-clock"></i></span>
                    <span>خدمة العملاء: 24/5</span>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-container">
            <div class="copyright">
              <p>
    &copy; 2025 جميع الحقوق محفوظة. تم التصميم والتطوير بواسطة
    <a href="https://innovative-technologies.net/" target="_blank" style="color: var(--accent-color); text-decoration: none;">
      Innovative Technologies
    </a>
  </p>
            </div>
            <div class="policy-links">
                <a href="/privacy-policy">سياسة الخصوصية</a>
                <a href="/privacy-policy">شروط الاستخدام</a>
                <a href="/privacy-policy">سياسة الاسترجاع</a>
            </div>
        </div>
    </div>
</footer>

<!-- Font Awesome for icons -->
 <!-- whatup and call now buttons -->
      <a href="tel:+966531482186" class="contact-button call-button pulse-animation">
        <i class="fas fa-phone"></i>
        <span class="contact-label">Call Us Now</span>
    </a>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/+966531482186" target="_blank" class="contact-button whatsapp-button">
        <i class="fab fa-whatsapp"></i>
        <span class="contact-label">Chat on WhatsApp</span>
    </a>
    </div>
    <style>
        :root {
            --primary: #005EB8;      /* Deep Blue */
            --secondary: #2D2D2D;    /* Dark Gray */
            --accent: #FF7D33;       /* Orange */
            --whatsapp: #25D366;     /* WhatsApp Green */
            --white: #FFFFFF;        /* White */
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
            background: var(--primary);
        }

        .whatsapp-button {
            right: 30px;
            background: var(--whatsapp);
        }

        .contact-label {
            position: absolute;
            right: 70px;
            background: var(--secondary);
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