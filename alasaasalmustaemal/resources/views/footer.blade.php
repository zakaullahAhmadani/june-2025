<!-- Fixed Footer Bar (Mobile CTA) -->
<a href="tel:966501110433" class="fixed-call-btn">
  <i class="bi bi-telephone-fill"></i>
</a>

<!-- WhatsApp Button Fixed Right -->
<a href="https://wa.me/966501110433" target="_blank" class="fixed-whatsapp-btn">
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
    color: #fff;
    font-size: 1.3rem;
    z-index: 9999;
    text-decoration: none;
    transition: all 0.3s ease;
}

/* Call button - left */
.fixed-call-btn {
    left: 20px;
    background-color: #1ebc57;
    border: 2px solid #1ebc57;
}

.fixed-call-btn:hover {
    background-color: #1ebc57;
    border-color: #1ebc57;
    transform: translateY(-2px);
}

/* WhatsApp button - right */
.fixed-whatsapp-btn {
    right: 20px;
    background-color: #25D366;
    border: 2px solid #25D366;
}

.fixed-whatsapp-btn:hover {
    background-color: #1ebc57;
    border-color: #1ebc57;
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
         <li><a href="tel:966501110433"><i class="bi bi-telephone-fill"></i> 0501110433</a></li>
         <li><a href="mailto:info@alasaasalmustaemal.shop"><i class="bi bi-envelope-fill"></i> info@alasaasalmustaemal.shop</a></li>
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
          <li><a href="https://wa.me/966501110433">شراء الأثاث المنزلي المستعمل بالرياض</a></li>
          <li><a href="https://wa.me/966501110433">شراء الأثاث المكتبي المستعمل بالرياض</a></li>
          <li><a href="https://wa.me/966501110433">شراء أثاث الفلل المستعمل بالرياض</a></li>
          <li><a href="https://wa.me/966501110433">شراء الأجهزة الكهربائية المستعملة بالرياض</a></li>
        </ul>
      </div>

      <!-- About -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h5 class="footer-title">من نحن</h5>
        <p class="footer-about">
          نحن رواد في شراء الأثاث المستعمل بالرياض، نقدم أفضل الأسعار نقداً وخدمة خالية من المتاعب. ثق بنا لمعاملة موثوقة وسريعة وشفافة.
        </p>
        <img src="images/Used Furniture Buyers Dubai - fottor.png" alt="شعار الشركة" class="footer-logo mb-3">
      </div>
    </div>
  </div>
</footer>

<!-- Bottom Footer -->
<div class="py-3" style="background-color: var(--primary-red);">
    <div class="container">
      <div class="d-md-flex justify-content-between align-items-center">
        <div class="mb-3 mb-md-0">
          <span class="text-light">© ٢٠٢٥ <strong>الأسعار المستعمل</strong> | صمم بواسطة 
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
  --primary-orange: orangered;
  --primary-red: orangered;
  --primary-red-dark: orangered;
  --primary-black: #000000;
  --primary-white: #ffffff;
  --gray-text: #555555;
}

/* -----------------------
   Full Footer
-------------------------- */
.main-footer {
  background-color: var(--primary-black);
  color: var(--primary-white);
  padding: 60px 0;
}

.footer-title {
  font-weight: 700;
  color: var(--primary-orange);
  margin-bottom: 20px;
}

.footer-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-list li {
  margin-bottom: 10px;
  color: var(--primary-white);
  font-size: 0.95rem;
}

.footer-list li i {
  color: var(--primary-orange);
  margin-right: 8px;
}

.footer-list li a {
  color: var(--primary-white);
  text-decoration: none;
}

.footer-list li a:hover {
  color: var(--primary-orange);
}

.footer-logo {
  max-width: 150px;
}

.footer-about {
  color: var(--primary-white);
  font-size: 0.95rem;
  line-height: 1.6;
}

/* Social icons */
.footer-social a {
  color: var(--primary-white);
  margin-right: 10px;
  font-size: 1.2rem;
  transition: color 0.3s ease;
}

.footer-social a:hover {
  color: var(--primary-orange);
}

/* -----------------------
   Bottom Footer
-------------------------- */
.bottom-footer {
  background-color: var(--primary-red);
  color: var(--primary-white);
  padding: 15px 0;
  font-size: 0.9rem;
}
</style>