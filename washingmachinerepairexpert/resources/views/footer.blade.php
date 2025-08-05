<!-- Fixed Footer Bar (Mobile CTA) -->
<a href="tel:966563476330" class="fixed-call-btn">
  <i class="bi bi-telephone-fill"></i>
</a>

<!-- WhatsApp Button Fixed Right -->
<a href="https://wa.me/966563476330" target="_blank" class="fixed-whatsapp-btn">
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
    color: var(--white);
    font-size: 1.3rem;
    z-index: 9999;
    text-decoration: none;
    transition: all 0.3s ease;
}

/* Call button - left */
.fixed-call-btn {
    left: 20px;
    background-color: var(--primary-color);
    border: 2px solid var(--primary-color);
}

.fixed-call-btn:hover {
    background-color: var(--secondary-color);
    border-color: var(--secondary-color);
    transform: translateY(-2px);
}

/* WhatsApp button - right */
.fixed-whatsapp-btn {
    right: 20px;
    background-color: #25D366;
    border: 2px solid #25D366;
}

.fixed-whatsapp-btn:hover {
    background-color: var(--secondary-color);
    border-color: var(--secondary-color);
    transform: translateY(-2px);
}

/* Responsive adjustments for smaller screens */
@media (max-width: 576px) {
    .fixed-call-btn,
    .fixed-whatsapp-btn {
        width: 60px;
        height:60px;
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
         <li><a href="tel:966563476330"><i class="bi bi-telephone-fill"></i> 0563476330</a></li>
         <li><a href="mailto:info@washingmachinerepairexpert.shop"><i class="bi bi-envelope-fill"></i> info@washingmachine <br> repairexpert.shop</a></li>
         <li><a href="https://maps.google.com/?q=Jeddah,Saudi Arabia" target="_blank"><i class="bi bi-geo-alt-fill"></i> جدة، السعودية</a></li>
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
          <li><a href="https://wa.me/966563476330">إصلاح الغسالات الأوتوماتيكية</a></li>
          <li><a href="https://wa.me/966563476330">صيانة الغسالات الدورية</a></li>
          <li><a href="https://wa.me/966563476330">استبدال قطع الغيار</a></li>
          <li><a href="https://wa.me/966563476330">فحص الغسالات مجاناً</a></li>
        </ul>
      </div>

      <!-- About -->
      <div class="col-lg-4 col-md-6 mb-4">
 <img src="images/washing-machine-repair-logo.png" alt="خبراء إصلاح الغسالات" class="footer-logo mb-3">
        <p class="footer-about">
          نحن خبراء في إصلاح وصيانة الغسالات الأوتوماتيكية في جدة. نقدم خدمة سريعة وموثوقة بأسعار تنافسية، مع ضمان على جميع أعمالنا. فريقنا الفني مؤهل لمعالجة جميع أنواع الأعطال.
        </p>
       
      </div>
    </div>
  </div>
</footer>

<!-- Bottom Footer -->
<div class="py-3" style="background-color: var(--secondary-color);">
    <div class="container">
      <div class="d-md-flex justify-content-between align-items-center">
        <div class="mb-3 mb-md-0">
          <span class="text-light">© ٢٠٢٥ <strong>خبراء إصلاح الغسالات</strong> | صمم بواسطة 
             <a href="https://innovative-technologies.net" target="_blank" class="text-light" style="text-decoration:none">Innovative Technologies</a>
          </span>
        </div>
       <div>
  <a href="/privacy-policy" class="text-white" style="text-decoration:none">سياسة الخصوصية</a>
</div>
      </div>
    </div>
</div>

<style>
  :root {
    --primary-color: #003366;
    --secondary-color: #00AEEF;
    --accent-color: #F4B400;
    --bg-color: #F8FAFC;
    --text-color: #1A1A1A;
    --text-secondary: #4B5563;
    --white: #FFFFFF;
  }

/* -----------------------
   Full Footer
-------------------------- */
.main-footer {
  background-color: var(--primary-color);
  color: var(--white);
  padding: 60px 0;
}

.footer-title {
  font-weight: 700;
  color: var(--accent-color);
  margin-bottom: 20px;
}

.footer-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-list li {
  margin-bottom: 10px;
  color: var(--white);
  font-size: 0.95rem;
}

.footer-list li i {
  color: var(--accent-color);
  margin-right: 8px;
}

.footer-list li a {
  color: var(--white);
  text-decoration: none;
}

.footer-list li a:hover {
  color: var(--accent-color);
}

.footer-logo {
  max-width: 150px;
}

.footer-about {
  color: var(--white);
  font-size: 0.95rem;
  line-height: 1.6;
}

/* Social icons */
.footer-social a {
  color: var(--white);
  margin-right: 10px;
  font-size: 1.2rem;
  transition: color 0.3s ease;
}

.footer-social a:hover {
  color: var(--accent-color);
}
</style>
