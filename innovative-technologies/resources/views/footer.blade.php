<footer class="custom-footer">
 <div class="footer-top">
  <div class="footer-column">
    <h4>Saudi Arabia Office</h4>
    <p>Al Hamriya - Jeddah - Saudi Arabia</p>
  </div>
  <div class="footer-column">
    <h4>Head Office</h4>
    <p>Al Muteena - Deira Dubai - UAE</p>
  </div>
  <div class="footer-column">
    <h4>D.G Khan Office</h4>
    <p>Opposite Trama Center Gate Hospital Chowk - D.G Khan- PK</p>
  </div>
  <div class="footer-column">
    <h4>MULTAN Office</h4>
    <p>Shalimar Metro Station - Multan - PK</p>
  </div>
</div>

  <div class="footer-middle">
    <div class="footer-section">
      <h4>Ready To Work With Us?</h4>
      <p>No.1 Dubai’s Government Approved IT Company who has 5 Branches Worldwide and have 150+ Professional Experts in Every Field. We will grow your business online.</p>
      <a href="https://wa.me/+971 50 809 7203" class="footer-button">Get a Quote</a>
    </div>
    
    <div class="footer-section">
      <h4>Explore</h4>
      <div class="footer-divider"></div>
      <ul class="services-list">
        <li><i class="fas fa-chevron-right"></i> <a href="/ourteam">Meet the Team</a></li>
        <li><i class="fas fa-chevron-right"></i> <a href="/">Our Services</a></li>
        <li><i class="fas fa-chevron-right"></i> <a href="/pricing">Pricing</a></li>
        <li><i class="fas fa-chevron-right"></i> <a href="/digital-marketing">Company Marketing</a></li>
        <li><i class="fas fa-chevron-right"></i> <a href="/contact">Contact</a></li>
      </ul>
    </div>
    
    <div class="footer-section">
      <h4>Contact Us</h4>
      <div class="footer-divider"></div>
      <div class="contact-info">
        <div class="contact-item">
          <i class="fas fa-phone-alt"></i>
          <div>
            <h5>Call Us 24/7</h5>
<p>
  <a href="tel:+971508097203">+971 50 809 7203</a>
</p>

          </div>
        </div>
        <div class="contact-item">
          <i class="fas fa-envelope"></i>
          <div>
            <h5>Work with us</h5>
            <p><a href="mailto:info@innovative-technologies.net
">info@innovative-technologies.net
</a></p>
          </div>
        </div>
        <div class="contact-item">
          <i class="fab fa-whatsapp"></i>
          <div>
           <h5>Chat on WhatsApp</h5>
<p>
  <a href="https://wa.me/971508097203" target="_blank">+971 50 809 7203</a>
</p>

          </div>
        </div>
      </div>
    </div>
    
    <div class="footer-section">
      <img src="images/Innovative Technologies  Logo  - Fottor.png" alt="Inovative Technology " class="footer-logo">
      <p>Subscribe our newsletter to get our latest update & news.</p>
      @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form class="newsletter-form" method="POST" action="{{ route('newsletter.submit') }}">
    @csrf
    <input
        type="email"
        name="email"
        placeholder="Type Email......"
        required
        value="{{ old('email') }}"
    >
    @error('email')
        <small class="text-danger d-block">{{ $message }}</small>
    @enderror

    <button type="submit">Submit Now</button>
</form>


    </div>
  </div>
  
 <div class="footer-bottom"> 
    <p>All Rights Reserved! Developed By <a href="https://https://innovative-technologies.net/">INNOVATIVE TECHNOLOGIES</a></p>
    <div style="float: center;">
        <a href="/privacy-policy">Privacy Policy</a>
    </div>
</div>

  <!-- whatup and logo -->
      <style>
    :root {
        --primary-color: #fe3c00; /* SEO Masters orange */
        --whatsapp-color: #25D366;
        --dark-color: #333;
        --light-color: #f9f9f9;
    }
    
    /* Fixed WhatsApp Button */
    .whatsapp-float {
        position: fixed;
        bottom: 30px;
        left: 30px;
        width: 60px;
        height: 60px;
        background-color: var(--whatsapp-color);
        color: white;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        z-index: 100;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        animation: pulse 2s infinite;
    }
    
    .whatsapp-float:hover {
        background-color: #128C7E;
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }
    
    /* Fixed Logo - Updated to be circular and larger */
    .logo-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 100px;  /* Increased size */
        height: 100px;  /* Increased size */
        background-color: white;
        border-radius: 50%;  /* Changed to perfect circle */
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        z-index: 100;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        overflow: hidden;
        border: 2px solid var(--primary-color);
        padding: 5px;  /* Added padding */
    }
    
    .logo-float img {
        width: 100%;  /* Changed to fill container */
        height: 100%;  /* Changed to fill container */
        object-fit: contain;  /* Ensures logo fits nicely */
        border-radius: 50%;  /* Makes image circular */
    }
    
    .logo-float:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    
    /* Pulse animation for WhatsApp */
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
        }
        70% {
            box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
        }
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .whatsapp-float {
            width: 50px;
            height: 50px;
            font-size: 25px;
            bottom: 20px;
            left: 20px;
        }
        
        .logo-float {
            width: 70px;  /* Slightly larger than WhatsApp on mobile */
            height: 70px;
            bottom: 15px;
            right: 20px;
        }
    }
</style>

<!-- Fixed WhatsApp Button -->
<a href="https://wa.me/+971 50 809 7203" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<style>
 .logo-float {
  display: inline-block;
  background-color: white;
  padding: 8px;
  border-radius: 50%;
  border: 2px solid red;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  width: 100px;
  height: 100px;
  animation: zoomBounce 2s ease-in-out infinite;
}

.logo-float img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  object-fit: cover;
}

/* Zoom Animation */
@keyframes zoomBounce {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
}

/* Responsive: smaller on mobile */
@media (max-width: 600px) {
  .logo-float {
    width: 70px;
    height: 70px;
    padding: 4px;
  }
}

</style>

<div class="logo-float">
    <a href="https://www.google.com/partners/agency?id=8076604987" target="_blank">
        <img src="https://www.gstatic.com/partners/badge/images/2025/PartnerBadgeClickable.svg" alt="Google Partner Badge">
    </a>
</div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</footer>

<style>

.custom-footer {
  font-family: 'Arial', sans-serif;
  color: #fff;
    margin-top: -40px;
    
  background-color: #333;
  padding: 40px 20px 20px;
}

.footer-top {
  display: flex;
    
  flex-wrap: wrap;
  justify-content: space-between;
  margin-bottom: 40px;
  padding-bottom: 30px;
  border-bottom: 1px solid #444;
}

.footer-column {
  
   flex: 1 1 calc(25% - 60px);
  margin:  15px 30px;
  padding: 20px;
  background-color: #fe3c00;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.footer-column h4 {
    -top: 40px;
  color: #120602;
  margin-bottom: 10px;
  font-size: 18px;
}

.footer-middle {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-bottom: 20px;
}

.footer-section {
  flex: 1;
  min-width: 250px;
  margin: 0 15px 30px;
}

.footer-section h4 {
  color: #fe3c00;
  margin-bottom: 15px;
  font-size: 18px;
}

.footer-divider {
  height: 2px;
  width: 50px;
  background-color: #fe3c00;
  margin: 10px 0 20px;
}

.services-list {
  list-style: none;
  padding: 0;
}

.services-list li {
  margin-bottom: 10px;
}

.services-list a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s;
}

.services-list a:hover {
  color: #fe3c00;
}

.services-list i {
  color: #fe3c00;
  margin-right: 8px;
  font-size: 12px;
}

.contact-info {
  margin-top: 20px;
}

.contact-item {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.contact-item i {
  font-size: 20px;
  color: #fe3c00;
  margin-right: 15px;
  width: 30px;
  text-align: center;
}

.contact-item h5 {
  margin: 0 0 5px;
  font-size: 16px;
}

.contact-item p {
  margin: 0;
  font-size: 14px;
}

.contact-item a {
  color: #fff;
  text-decoration: none;
}

.contact-item a:hover {
  text-decoration: underline;
}

.footer-logo {
  max-width: 200px;
  margin-bottom: 15px;
}

.footer-button {
  display: inline-block;
  background-color: #fe3c00;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  text-decoration: none;
  font-weight: bold;
  margin-top: 15px;
  transition: background-color 0.3s;
}

.footer-button:hover {
  background-color: #d13200;
}

.newsletter-form {
  display: flex;
  margin-top: 20px;
}

.newsletter-form input {
  flex: 1;
  padding: 10px;
  border: none;
  border-radius: 4px 0 0 4px;
}

.newsletter-form button {
  background-color: #fe3c00;
  color: white;
  border: none;
  padding: 10px 15px;
  border-radius: 0 4px 4px 0;
  cursor: pointer;
  transition: background-color 0.3s;
}

.newsletter-form button:hover {
  background-color: #d13200;
}

.footer-bottom {
  text-align: center;
  padding-top: 20px;
  border-top: 1px solid #444;
  font-size: 14px;
}

.footer-bottom a {
  color: #fe3c00;
  text-decoration: none;
}

.footer-bottom a:hover {
  text-decoration: underline;
}

@media (max-width: 768px) {
  .footer-top, .footer-middle {
    flex-direction: row; /* keep rows, but fewer columns */
    flex-wrap: wrap;
  }

  .footer-column {
    flex: 1 1 calc(50% - 60px); /* Two columns in a row */
    margin: 15px 30px;
  }

}

</style>
<script src="js/main.js"></script>