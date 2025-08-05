<!-- Fixed Footer Bar (Mobile CTA) -->

<a href="tel: 971529639647" class="fixed-call-btn">
  <i class="bi bi-telephone-fill"></i>
</a>

<!-- WhatsApp Button Fixed Right -->
<a href="https://wa.me/971529639647" target="_blank" class="fixed-whatsapp-btn">
  <i class="bi bi-whatsapp"></i>
</a><style>
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
    background-color:  #1ebc57;
    border: 2px solid  #1ebc57;
}

.fixed-call-btn:hover {
    background-color: #1ebc57;
    border-color:  #1ebc57;
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
        <h5 class="footer-title">Contact</h5>
        <ul class="footer-list">
         <li><a href="tel:+971529639647"><i class="bi bi-telephone-fill"></i> +971 52 963 9647</a></li>
<li><a href="mailto:info@usedfurniture.com"><i class="bi bi-envelope-fill"></i> info@usedfurniture.com</a></li>
<li><a href="https://maps.google.com/?q=Dubai,UAE" target="_blank"><i class="bi bi-geo-alt-fill"></i> Dubai, UAE</a></li>
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
        <h5 class="footer-title">Explore Us</h5>
        <ul class="footer-list">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">
About Us</a></li>
          <li><a href="{{ route('services') }}">Services</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="footer-title">Services</h5>
        <ul class="footer-list">
          <li><a href="https://wa.me/971529639647">Used Home Furniture Buyers in Dubai</a></li>
          <li><a href="https://wa.me/971529639647">Used Office Furniture Buyers in Dubai</a></li>
          <li><a href="https://wa.me/971529639647">Used Villa Furniture Buyers in Dubai</a></li>
          <li><a href="https://wa.me/971529639647">Used Appliances Buyers in Dubai</a></li>
        </ul>
       
      </div>

      <!-- About -->
      <div class="col-lg-4 col-md-6 mb-4">
       
        <h5 class="footer-title">About Us</h5>
        <p class="footer-about">
          We are leading used furniture buyers in Dubai, offering top cash prices and hassle-free service. Trust us for a reliable, fast, and transparent transaction.
        </p>
     <img src="images/Used Furniture Buyers Dubai - fottor.png" alt="Logo" class="footer-logo mb-3">

      </div>
    </div>
  </div>
</footer>

<!-- Bottom Footer -->
<div class="py-3" style="background-color: var(--primary-red);">
    <div class="container">
      <div class="d-md-flex justify-content-between align-items-center">
        <div class="mb-3 mb-md-0">
          <span class="text-light">© 2025 <strong>UsedFurnitureBuyerDubai</strong> | Designed By 
             <a href="https://innovative-technologies.net" target="_blank" class="text-light" style="text-decoration:none">Innovative Technologies</a>
          </span>
        </div>
       <div>
  <a href="/privacy-policy" class="text-white" style="text-decoration:none">Privacy Policy</a>
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
   Fixed Footer CTA (Mobile)
-------------------------- */

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