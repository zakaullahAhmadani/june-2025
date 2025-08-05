<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Expert Renovation Services – From False Ceilings to Home Appliances in Dubai | +971 56 282 3168</title>
@include('meta')
<meta name="description" content="Premium False Ceiling Installation & Complete Renovation Services in Dubai. Specialists in JVC, Dubai Marina & all Dubai areas. Gypsum ceilings, painting, plumbing & electrical services. Call +971 56 282 3168">
<meta name="keywords" content="false ceiling Dubai, gypsum contractor Dubai, ceiling installation JVC, Dubai Marina ceilings, gypsum board installation, false ceiling companies, ceiling renovation Dubai, gypsum ceiling service, gypsum board ceiling, gypsum tile ceiling, gypsum wallboard ceiling, installing gypsum ceiling, home renovation Dubai, apartment ceiling installation, villa ceiling design, commercial false ceilings, ceiling lighting solutions, premium ceiling installation, best ceiling contractors, plumbing services Dubai, emergency plumber Dubai, drain cleaning Dubai, water heater repair Dubai, best plumbers Dubai, plumbing contractors Dubai, affordable plumbers Dubai, plumbing maintenance Dubai, painting services Dubai, professional painters Dubai, villa painting Dubai, apartment painting Dubai, wall painting services, interior painting Dubai, exterior painters Dubai, best painting company Dubai, cleaning services Dubai, deep cleaning Dubai, office cleaning Dubai, carpet cleaning Dubai, sofa cleaning Dubai, maid service Dubai, window cleaning Dubai, home cleaning Dubai, electrical services Dubai, electrician Dubai, electrical contractors Dubai, home maintenance Dubai, appliance repair Dubai, renovation services Dubai, home improvement Dubai, JVC renovation services, Dubai Marina home services, Downtown Dubai ceiling installation, Palm Jumeirah gypsum ceilings, Business Bay ceiling contractors, Arabian Ranches home renovation">
<meta name="author" content="DubaiCeilingExperts.com">
<meta name="robots" content="index, follow">

<!-- Mobile-Friendly Contact Page Structure -->
<body>
    <!-- Navigation -->
    @include('navbar')
    
    <!-- Hero Section -->
   <!-- Hero Contact Section with Background Image -->
<section class="hero-contact" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/contact.webp'); background-size: cover; background-position: center; padding: 80px 0; text-align: center;">
  <div class="container">
    <h1 style="color: var(--text-white); font-size: 2.5rem; margin-bottom: 15px;">Contact Us</h1>
    <p style="color: var(--text-white); font-size: 1.2rem; max-width: 700px; margin: 0 auto;">
      Your Trusted Partner for Plumbing, Electrical, Painting, Home Appliances & Renovation
    </p>
  </div>
</section>

<!-- Contact Container -->
<div class="contact-container" style="max-width: 1200px; margin: 40px auto; padding: 0 20px; display: grid; grid-template-columns: 1fr; gap: 30px;">
  <!-- Contact Form -->
  <div class="contact-form" style="background: var(--bg-light); padding: 30px; border-radius: 10px; box-shadow: var(--box-shadow);">
    <h2 style="color: var(--primary-color); margin-top: 0;">Send Us a Message</h2>
    <form id="contactForm" method="POST" action="{{ route('contact.submit') }}">
      @csrf
      <div class="form-group" style="margin-bottom: 20px;">
        <label for="name" style="display: block; margin-bottom: 8px; color: var(--text-light);">Your Name</label>
        <input type="text" id="name" name="name" required style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 5px;">
      </div>
      
      <div class="form-group" style="margin-bottom: 20px;">
        <label for="email" style="display: block; margin-bottom: 8px; color: var(--text-light);">Email Address</label>
        <input type="email" id="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 5px;">
      </div>
      
      <div class="form-group" style="margin-bottom: 20px;">
        <label for="phone" style="display: block; margin-bottom: 8px; color: var(--text-light);">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="+971 XX XXX XXXX" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 5px;">
      </div>
      
      <div class="form-group" style="margin-bottom: 20px;">
        <label for="service" style="display: block; margin-bottom: 8px; color: var(--text-light);">Service Needed</label>
        <select id="service" name="service" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 5px; background: white;">
          <option value="Plumbing">Plumbing</option>
          <option value="Electrical">Electrical</option>
          <option value="Painting">Painting</option>
          <option value="Home Appliances">Home Appliances</option>
          <option value="False Ceiling">False Ceiling</option>
          <option value="Renovation">Renovation</option>
          <option value="Other">Other</option>
        </select>
      </div>
      
      <div class="form-group" style="margin-bottom: 25px;">
        <label for="message" style="display: block; margin-bottom: 8px; color: var(--text-light);">Your Message</label>
        <textarea id="message" name="message" required style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 5px; min-height: 120px;"></textarea>
      </div>
      
      <button type="submit" class="submit-btn" style="background: var(--primary-color); color: var(--text-white); border: none; padding: 12px 25px; border-radius: 5px; font-weight: bold; cursor: pointer; transition: 0.3s; width: 100%;">
        Send Message
      </button>
      
      <div id="success-message" style="display: none; margin-top: 20px; padding: 10px; background: var(--accent-color); color: white; text-align: center; border-radius: 5px;">
        Thank you! We'll contact you soon.
      </div>
    </form>
  </div>
  
  <!-- Contact Methods -->
  <div class="contact-methods" style="display: grid; grid-template-columns: 1fr; gap: 20px;">
    <div class="contact-card" style="background: var(--bg-light); padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow); display: flex; align-items: center;">
      <div class="contact-icon" style="background: var(--primary-color); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
        <i class="fas fa-envelope" style="color: var(--text-white); font-size: 1.2rem;"></i>
      </div>
      <div class="contact-info">
        <h3 style="margin: 0 0 5px 0; color: var(--text-color);">Email Us</h3>
        <a href="mailto:Fmubashiriqbal605@gmail.com" style="color: var(--accent-color); text-decoration: none;">Fmubashiriqbal605@gmail.com</a>
      </div>
    </div>
    
    <div class="contact-card" style="background: var(--bg-light); padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow); display: flex; align-items: center;">
      <div class="contact-icon" style="background: var(--secondary-color); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
        <i class="fab fa-whatsapp" style="color: var(--text-white); font-size: 1.2rem;"></i>
      </div>
      <div class="contact-info">
        <h3 style="margin: 0 0 5px 0; color: var(--text-color);">WhatsApp</h3>
        <a href="https://wa.me/0562823168" target="_blank" style="color: var(--accent-color); text-decoration: none;">056 282 3168</a>
      </div>
    </div>
    
    <div class="contact-card" style="background: var(--bg-light); padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow); display: flex; align-items: center;">
      <div class="contact-icon" style="background: var(--renovation-color); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
        <i class="fas fa-phone-alt" style="color: var(--text-white); font-size: 1.2rem;"></i>
      </div>
      <div class="contact-info">
        <h3 style="margin: 0 0 5px 0; color: var(--text-color);">Call Us</h3>
        <a href="tel:0562823168" style="color: var(--accent-color); text-decoration: none;">056 282 3168</a>
      </div>
    </div>
    
    <div class="contact-card" style="background: var(--bg-light); padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow); display: flex; align-items: center;">
      <div class="contact-icon" style="background: var(--appliance-color); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
        <i class="fas fa-map-marker-alt" style="color: var(--text-white); font-size: 1.2rem;"></i>
      </div>
      <div class="contact-info">
        <h3 style="margin: 0 0 5px 0; color: var(--text-color);">Location</h3>
        <p style="margin: 0; color: var(--text-light);">Italy Cluster 21, Dubai</p>
      </div>
    </div>
    
    <div class="contact-card" style="background: var(--bg-light); padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow); display: flex; align-items: center;">
      <div class="contact-icon" style="background: var(--ceiling-color); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
        <i class="fas fa-clock" style="color: var(--text-color); font-size: 1.2rem;"></i>
      </div>
      <div class="contact-info">
        <h3 style="margin: 0 0 5px 0; color: var(--text-color);">Working Hours</h3>
        <p style="margin: 0; color: var(--text-light);">24/7 Emergency Services</p>
      </div>
    </div>
  </div>
</div>

<!-- Location Section -->
<section class="location-section" style="background-color: var(--bg-light); padding: 40px 0;">
  <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
    <h2 style="color: var(--primary-color); text-align: center; margin-bottom: 30px;">Our Location in Dubai</h2>
    
    <div class="location-container" style="display: grid; grid-template-columns: 1fr; gap: 20px;">
      <!-- Map -->
      <div class="map-iframe" style="height: 300px; border-radius: 10px; overflow: hidden; box-shadow: var(--box-shadow);">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462565.1975811776!2d54.94755498640639!3d25.07508539361346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai!5e0!3m2!1sen!2sae!4v1683034257193!5m2!1sen!2sae" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
      
      <!-- Location Info -->
      <div class="location-info" style="background: white; padding: 20px; border-radius: 10px; box-shadow: var(--box-shadow);">
        <div style="display: flex; align-items: center; margin-bottom: 15px;">
          <div style="background: var(--accent-color); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
            <i class="fas fa-map-marker-alt" style="color: var(--text-white); font-size: 1.2rem;"></i>
          </div>
          <div>
            <h3 style="color: var(--primary-color); margin: 0 0 5px 0;">Technical Services</h3>
            <p style="margin: 0; color: var(--text-light);">Italy Cluster 21, Dubai</p>
          </div>
        </div>
        
        <div style="margin-top: 20px;">
          <h4 style="color: var(--primary-color); margin-bottom: 12px;">Working Hours</h4>
          <ul style="list-style: none; padding: 0; margin: 0;">
            <li style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid var(--border-color);">
              <span style="color: var(--text-light);">Monday - Friday</span>
              <span style="font-weight: bold; color: var(--accent-color);">8:00 AM - 10:00 PM</span>
            </li>
            <li style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid var(--border-color);">
              <span style="color: var(--text-light);">Saturday</span>
              <span style="font-weight: bold; color: var(--accent-color);">9:00 AM - 8:00 PM</span>
            </li>
            <li style="display: flex; justify-content: space-between; padding: 8px 0;">
              <span style="color: var(--text-light);">Emergency Services</span>
              <span style="font-weight: bold; color: var(--accent-color);">24/7 Available</span>
            </li>
          </ul>
        </div>
        
        <a href="https://goo.gl/maps/..." target="_blank" 
           style="display: inline-block; text-align: center; background: var(--accent-color); color: var(--text-white); padding: 10px 20px; border-radius: 50px; text-decoration: none; margin-top: 20px; font-weight: bold; transition: 0.3s;">
          <i class="fas fa-directions" style="margin-right: 6px;"></i> Get Directions
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Responsive Styles -->
<style>
  @media (min-width: 768px) {
    .contact-container {
      grid-template-columns: 1fr 1fr !important;
    }
    .location-container {
      grid-template-columns: 1fr 1fr !important;
    }
    .hero-contact h1 {
      font-size: 3rem !important;
    }
  }
</style>
    <!-- Footer -->
    @include('footer')
    
    <!-- JavaScript for Form Submission -->
    <script>
       document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = e.target;
    const submitBtn = form.querySelector('button[type="submit"]');
    const successMessage = document.getElementById('success-message');
    
    // Disable button to prevent multiple submissions
    submitBtn.disabled = true;
    submitBtn.textContent = 'Sending...';
    
    // Get form data
    const formData = new FormData(form);
    
    // Send AJAX request
    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    })
    .then(response => response.json())
    .then(data => {
        successMessage.style.display = 'block';
        successMessage.textContent = data.message;
        form.reset();
        
        // Hide success message after 5 seconds
        setTimeout(() => {
            successMessage.style.display = 'none';
        }, 5000);
    })
    .catch(error => {
        successMessage.style.display = 'block';
        successMessage.style.backgroundColor = '#f44336';
        successMessage.textContent = 'Error submitting form. Please try again.';
    })
    .finally(() => {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Send Message';
    });
});
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>