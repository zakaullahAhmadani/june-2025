<!-- Fixed Footer Bar (Mobile CTA) -->
<a href="tel:966555706976" class="fixed-call-btn">
  <i class="bi bi-telephone-fill"></i>
</a>

<!-- WhatsApp Button Fixed Right -->
<a href="https://wa.me/966555706976" target="_blank" class="fixed-whatsapp-btn">
  <i class="bi bi-whatsapp"></i>
</a>

<style>
/* Common styles for both buttons */
.fixed-call-btn,
.fixed-whatsapp-btn {
    position: fixed;
    bottom: 20px;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: var(--background-light);
    font-size: 1.3rem;
    z-index: 9999;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

/* Call button - left */
.fixed-call-btn {
    left: 20px;
    background-color: var(--secondary-color);
    border: 2px solid var(--secondary-color);
}

.fixed-call-btn:hover {
    background-color: var(--accent-color-1);
    border-color: var(--accent-color-1);
    transform: translateY(-2px);
}

/* WhatsApp button - right */
.fixed-whatsapp-btn {
    right: 20px;
    background-color: var(--color-success);
    border: 2px solid var(--color-success);
}

.fixed-whatsapp-btn:hover {
    background-color: var(--accent-color-1);
    border-color: var(--accent-color-1);
    transform: translateY(-2px);
}

/* Responsive adjustments for smaller screens */
@media (max-width: 576px) {
    .fixed-call-btn,
    .fixed-whatsapp-btn {
        width: 60px;
        height: 60px;
        font-size: 1.1rem;
        bottom: 15px;
    }
}
</style>

<!-- Full Footer -->
<footer class="main-footer">
  <div class="container">
    <div class="row">
      <!-- Contact -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="footer-title">اتصل بنا</h5>
        <ul class="footer-list">
         <li><a href="tel:966555706976"><i class="bi bi-telephone-fill"></i> 0555706976</a></li>
         <li><a href="mailto:info@masterappliancesrepair.shop"><i class="bi bi-envelope-fill"></i> info@masterappliancesrepair.shop</a></li>
         <li><a href="https://maps.google.com/?q=Riyadh,Saudi Arabia" target="_blank"><i class="bi bi-geo-alt-fill"></i> الرياض، السعودية</a></li>
        </ul>
         <div class="footer-social mt-3">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
          <a href="#"><i class="bi bi-youtube"></i></a>
        </div>
      </div>

      <!-- Explore Us -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h5 class="footer-title">تصفح</h5>
        <ul class="footer-list">
          <li><a href="{{ route('home') }}">الرئيسية</a></li>
          <li><a href="{{ route('about') }}">من نحن</a></li>
          <li><a href="{{ route('services') }}">خدماتنا</a></li>
          <li><a href="{{ route('contact') }}">اتصل بنا</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="footer-title">خدماتنا</h5>
        <ul class="footer-list">
          <li><a href="https://wa.me/966555706976">إصلاح وتركيب مكيفات النوافذ</a></li>
          <li><a href="https://wa.me/966555706976">إصلاح وتركيب مكيفات القنوات</a></li>
          <li><a href="https://wa.me/966555706976">إصلاح وتركيب مكيفات السبلت</a></li>
          <li><a href="https://wa.me/966555706976">إصلاح الغسالات</a></li>
          <li><a href="https://wa.me/966555706976">إصلاح الثلاجات</a></li>
        </ul>
      </div>

      <!-- About -->
      <div class="col-lg-4 col-md-6 mb-4">
        <img src="images/ac-repair-logo.png" alt="شعار الشركة" class="footer-logo mb-3">
        <p class="footer-about">
          نحن متخصصون في إصلاح وتركيب جميع أنواع المكيفات (نوافذ، قنوات، سبليت) وكذلك إصلاح الأجهزة المنزلية مثل الغسالات والثلاجات في مدينة الرياض. نقدم خدمات احترافية بأسعار تنافسية.
        </p>
       
      </div>
    </div>
  </div>
</footer>

<!-- Bottom Footer -->
<div class="bottom-footer">
    <div class="container">
      <div class="d-md-flex justify-content-between align-items-center">
        <div class="mb-3 mb-md-0">
          <span class="text-light">© ٢٠٢٥ <strong>ماستر إصلاح الأجهزة</strong> | صمم بواسطة 
             <a href="https://innovative-technologies.net" target="_blank" class="text-light" style="text-decoration:none">Innovative Technologies</a>
          </span>
        </div>
       <div>
          <a href="/privacy-policy" class="text-light" style="text-decoration:none">سياسة الخصوصية</a>
       </div>
      </div>
    </div>
</div>

<style>
  /* -----------------------
     Full Footer
  -------------------------- */
  .main-footer {
    background-color: var(--accent-color-3);
    color: var(--background-light);
    padding: 60px 0;
  }

  .footer-title {
    font-weight: 700;
    color: var(--accent-color-2);
    margin-bottom: 20px;
    font-size: 1.1rem;
  }

  .footer-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .footer-list li {
    margin-bottom: 10px;
    color: var(--background-light);
    font-size: 0.95rem;
  }

  .footer-list li i {
    color: var(--accent-color-2);
    margin-left: 8px;
  }

  .footer-list li a {
    color: var(--background-light);
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-list li a:hover {
    color: var(--accent-color-2);
  }

  .footer-logo {
    max-width: 150px;
    filter: brightness(0) invert(1);
  }

  .footer-about {
    color: var(--background-light);
    font-size: 0.95rem;
    line-height: 1.6;
    opacity: 0.9;
  }

  /* Social icons */
  .footer-social a {
    color: var(--background-light);
    margin-left: 10px;
    font-size: 1.2rem;
    transition: all 0.3s ease;
    display: inline-block;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background-color: rgba(255,255,255,0.1);
    text-align: center;
    line-height: 35px;
  }

  .footer-social a:hover {
    color: var(--accent-color-2);
    background-color: rgba(255,255,255,0.2);
  }

  /* -----------------------
     Bottom Footer
  -------------------------- */
  .bottom-footer {
    background-color: var(--primary-color);
    color: var(--background-light);
    padding: 15px 0;
    font-size: 0.9rem;
  }
  
  .bottom-footer a:hover {
    color: var(--accent-color-2);
  }
</style>