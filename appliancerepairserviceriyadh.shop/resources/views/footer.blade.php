<style>
    :root {
        --primary-color: #0077b6;       /* Cool Blue - Air Conditioner */
        --accent-color: #00b4d8;        /* Aqua Blue - Washing freshness */
        --dark-bg: #2a2a2a;
        --footer-text: #e0e0e0;
        --pure-white: #ffffff;
        --border-color: #e0e0e0;
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
        padding: 3rem 0 0;
        line-height: 1.6;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    /* Footer Columns */
    .footer-column {
        margin-bottom: 3rem;
    }

    /* About Section */
    .footer-about .logo {
        display: block;
        margin-bottom: 1.5rem;
    }

    .footer-about .logo img {
        max-width: 200px;
        height: auto;
    }

    .footer-about p {
        font-size: 0.95rem;
        margin-bottom: 1.5rem;
        opacity: 0.9;
    }

    /* Social Icons */
    .social-icons {
        display: flex;
        gap: 0.5rem;
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
        background-color: var(--accent-color);
        transform: translateY(-2px);
    }

    /* Section Titles */
    .footer-title {
        color: var(--pure-white);
        font-size: 1.25rem;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 0.5rem;
    }

    .footer-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 40px;
        height: 2px;
        background-color: var(--accent-color);
    }

    /* Links List */
    .footer-links {
        list-style: none;
    }

    .footer-links li {
        margin-bottom: 1rem;
    }

    .footer-links a {
        color: var(--footer-text);
        text-decoration: none;
        transition: all 0.2s ease;
        display: inline-block;
        font-size: 0.95rem;
    }

    .footer-links a:hover {
        color: var(--accent-color);
        transform: translateX(5px);
    }

    /* Contact Information */
    .contact-inf {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
    }

    .contact-icon {
        color: var(--accent-color);
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
        color: var(--accent-color);
    }

    /* Footer Bottom */
    .footer-bottom {
        background-color: rgba(0, 0, 0, 0.15);
        padding: 1.5rem 0;
        margin-top: 2rem;
    }

    .footer-bottom-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
    }

    .copyright {
        font-size: 0.85rem;
        opacity: 0.8;
    }

    .copyright a {
        color: var(--accent-color);
        text-decoration: none;
    }

    .policy-links {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .policy-links a {
        color: var(--footer-text);
        text-decoration: none;
        font-size: 0.85rem;
        transition: color 0.2s ease;
    }

    .policy-links a:hover {
        color: var(--accent-color);
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .footer {
            padding: 2rem 0 0;
        }
        
        .footer-container {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .footer-column {
            margin-bottom: 2rem;
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
            padding: 1.5rem 0 0;
        }
        
        .footer-links a {
            font-size: 0.9rem;
        }
        
        .contact-item {
            flex-wrap: wrap;
        }
        
        .contact-text {
            min-width: 100%;
            padding-right: 28px;
            word-break: break-word;
        }
        
        .policy-links {
            gap: 1rem;
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
        color: var(--pure-white);
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
        background: var(--primary-color);
    }

    .whatsapp-button {
        right: 30px;
        background: #25D366;
    }

    .contact-label {
        position: absolute;
        right: 70px;
        background: var(--dark-bg);
        color: var(--pure-white);
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

    /* Animation for attention */
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    .pulse-animation {
        animation: pulse 2s infinite;
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
</style>

<footer class="footer" dir="ltr">
    <div class="footer-container">
        <!-- Column 1: About & Social -->
        <div class="footer-column footer-about">
            <a href="#" class="logo">
                <img src="images/-and-Automatic-Washing-Machine-Repair-header.png" alt="City Riyaz">
            </a>
            <p>
                نقدم خدمات صيانة متكاملة للمكيفات والغسالات والثلاجات في الرياض بأعلى معايير الجودة.
            </p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/966501676359"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <!-- Column 2: Explore Links -->
        <div class="footer-column">
            <h3 class="footer-title">روابط سريعة</h3>
            <ul class="footer-links">
                <li><a href="/">الرئيسية</a></li>
                <li><a href="/services">خدماتنا</a></li>
                <li><a href="/about">من نحن</a></li>
                <li><a href="/contact">اتصل بنا</a></li>
            </ul>
        </div>

        <!-- Column 3: Services -->
        <div class="footer-column">
            <h3 class="footer-title">خدماتنا</h3>
            <ul class="footer-links">
                <li><a href="https://wa.me/966501676359">صيانة المكيفات</a></li>
                <li><a href="https://wa.me/966501676359">صيانة الغسالات</a></li>
                <li><a href="https://wa.me/966501676359">صيانة الثلاجات</a></li>
                <li><a href="https://wa.me/966501676359">خدمة طوارئ</a></li>
            </ul>
        </div>

        <!-- Column 4: Contact -->
        <div class="footer-column">
            <h3 class="footer-title">اتصل بنا</h3>
            <div class="contact-inf">
                <div class="contact-item">
                    <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                    <span class="contact-text">الرياض، السعودية</span>
                </div>
                <div class="contact-item">
                    <span class="contact-icon"><i class="fas fa-phone"></i></span>
                    <span class="contact-text"><a href="tel:+966501676359">+966 50 167 6359</a></span>
                </div>
                <div class="contact-item">
                    <span class="contact-icon"><i class="fab fa-whatsapp"></i></span>
                    <span class="contact-text"><a href="https://wa.me/966501676359" target="_blank">+966 50 167 6359</a></span>
                </div>
                <div class="contact-item">
                    <span class="contact-icon"><i class="fas fa-envelope"></i></span>
                    <span class="contact-text"><a href="mailto:info@appliancerepairserviceriyadh.shop">info@appliancerepair <br> serviceriyadh.shop</a></span>
                </div>
                <div class="contact-item">
                    <span class="contact-icon"><i class="fas fa-clock"></i></span>
                    <span class="contact-text">خدمة العملاء: 24/7</span>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-container">
            <div class="copyright">
                &copy; 2025 جميع الحقوق محفوظة لـ <a href="https://innovative-technologies.net/">Innovative Technologies</a>
            </div>
            <div class="policy-links">
                <a href="/privacy-policy">سياسة الخصوصية</a>
                <a href="/privacy-policy">شروط الاستخدام</a>
                <a href="/privacy-policy">سياسة الاسترجاع</a>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Contact Buttons -->
<a href="tel:+966501676359" class="contact-button call-button pulse-animation">
    <i class="fas fa-phone"></i>
    <span class="contact-label">اتصل الآن</span>
</a>

<a href="https://wa.me/966501676359" target="_blank" class="contact-button whatsapp-button">
    <i class="fab fa-whatsapp"></i>
    <span class="contact-label">واتساب</span>
</a>