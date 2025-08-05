<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact Us - Premium Tyre Services Dubai</title>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact-Tyre Repair & Change Dubai | 24/7 Mobile Puncture Repair | +971 55 679 0901</title>
   @include('meta')
    <meta name="description" content="Professional mobile tyre repair services across Dubai. We fix punctures, replace tyres, and provide wheel alignment. Call +971 55 679 0901 for fast service.">
    <meta name="keywords" content="tyre repair, tyre replacement, mobile tyre service, Dubai, emergency tyre repair, puncture repair, wheel alignment">
    <meta name="author" content="TyreRepairAndChange.shop">
    <meta name="robots" content="index, follow">
    <style>
    :root {
        --primary: #1A3E72;
        --secondary: #2D2D2D;
        --accent: #FF7D33;
        --light-bg: #F5F5F5;
        --white: #FFFFFF;
    }
    
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: var(--secondary);
        background-color: var(--light-bg);
        margin: 0;
        padding: 0;
    }
    
    /* Navigation */
    nav {
        background-color: var(--primary);
        padding: 1rem;
        color: var(--white);
    }
    
    /* Hero Section */
    .hero-contact {
        background: linear-gradient(rgba(26, 62, 114, 0.8), rgba(26, 62, 114, 0.8)), 
                    url('images/contact.webp') center/cover;
        color: var(--white);
        padding: 3rem 1rem;
        text-align: center;
    }
    
    .hero-contact h1 {
        font-size: 2rem;
        margin-bottom: 1rem;
    }
    
    /* Contact Container */
    .contact-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 1rem;
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    /* Contact Form */
    .contact-form {
        background: var(--white);
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .form-group {
        margin-bottom: 1.2rem;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: bold;
    }
    
    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 0.8rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
    }
    
    .form-group textarea {
        height: 120px;
    }
    
    .submit-btn {
        background-color: var(--accent);
        color: var(--white);
        border: none;
        padding: 0.8rem 1.5rem;
        font-size: 1rem;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 100%;
    }
    
    .submit-btn:hover {
        background-color: #e56d20;
    }
    
    /* Contact Methods */
    .contact-methods {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .contact-card {
        background: var(--white);
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        transition: transform 0.3s;
    }
    
    .contact-card:hover {
        transform: translateY(-3px);
    }
    
    .contact-icon {
        font-size: 1.5rem;
        color: var(--accent);
        margin-right: 1rem;
        min-width: 40px;
        text-align: center;
    }
    
    .contact-info h3 {
        margin: 0 0 0.3rem 0;
        color: var(--primary);
        font-size: 1.1rem;
    }
    
    .contact-info a,
    .contact-info p {
        color: var(--primary)!important;
        font-weight: bold;
        text-decoration: none;
        font-size: 0.9rem;
        margin: 0;
    }
    
    .contact-info a:hover {
        color: var(--accent);
        text-decoration: underline;
    }
    
    /* Success Message */
    #success-message {
        display: none;
        background: #4CAF50;
        color: white;
        padding: 0.8rem;
        border-radius: 5px;
        margin-top: 1rem;
        text-align: center;
    }
    
    /* Desktop Styles */
    @media (min-width: 768px) {
        .hero-contact {
            padding: 5rem 1rem;
        }
        
        .hero-contact h1 {
            font-size: 3rem;
        }
        
        .contact-container {
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin: 3rem auto;
        }
        
        .contact-form {
            padding: 2rem;
        }
        
        .contact-card {
            padding: 2rem;
        }
        
        .contact-icon {
            font-size: 2rem;
            margin-right: 1.5rem;
        }
        
        .submit-btn {
            width: auto;
        }
    }
</style>

<!-- Mobile-Friendly Contact Page Structure -->
<body>
    <!-- Navigation -->
    @include('navbar')
    
    <!-- Hero Section -->
    <section class="hero-contact">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Get in touch with our tyre experts for premium services in Dubai</p>
        </div>
    </section>
    
    <!-- Contact Container -->
    <div class="contact-container">
        <!-- Contact Form (Shows First on Mobile) -->
        <div class="contact-form">
            <h2 style="color: var(--primary); margin-top: 0;">Send Us a Message</h2>
            <form id="contactForm" method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="+971 XX XXX XXXX">
                </div>
                
                <div class="form-group">
                    <label for="service">Service Needed</label>
                    <select id="service" name="service">
                        <option value="Tyre Repair">Tyre Repair</option>
                        <option value="Tyre Change">Tyre Change</option>
                        <option value="Wheel Alignment">Wheel Alignment</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Send Message</button>
                
                <div id="success-message">
                    Thank you! We'll contact you soon.
                </div>
            </form>
        </div>
        
        <!-- Contact Methods -->
        <div class="contact-methods">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-info">
                    <h3>Email Us</h3>
                    <a href="mailto:info@tyrerepairandchange.shop">info@tyrerepairandchange.shop</a>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="contact-info">
                    <h3>WhatsApp</h3>
                    <a href="https://wa.me/+971 55 679 0901" target="_blank">+971 55 679 0901</a>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="contact-info">
                    <h3>Call Us</h3>
                    <a href="tel:+971 55 679 0901">+971 55 679 0901</a>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-info">
                    <h3>Location</h3>
                    <p>Dubai, United Arab Emirates</p>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="contact-info">
                    <h3>Working Hours</h3>
                    <p>24/7 Emergency Services</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Location Section -->
<section class="location-section" style="background-color: var(--light-bg); padding: 40px 0;">
  <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
    <h2 style="color: var(--primary); text-align: center; margin-bottom: 30px; font-size: 1.8rem;">Our Location in Dubai</h2>
    
    <div class="location-container" style="display: grid; grid-template-columns: 1fr; gap: 20px;">
      <!-- Map iframe - Now full width on mobile -->
      <div class="map-iframe" style="height: 300px; border-radius: 10px; overflow: hidden; box-shadow: 0 3px 10px rgba(0,0,0,0.1); order: 2;">
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
      
      <!-- Location Info - Now full width on mobile -->
      <div class="location-info" style="background: var(--white); padding: 20px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); order: 1;">
        <div style="display: flex; align-items: center; margin-bottom: 15px;">
          <div style="background: var(--accent); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
            <i class="fas fa-map-marker-alt" style="color: var(--white); font-size: 1.2rem;"></i>
          </div>
          <div>
            <h3 style="color: var(--primary); margin: 0 0 5px 0; font-size: 1.2rem;">Our Workshop</h3>
            <p style="margin: 0; color: var(--secondary); font-size: 0.9rem;">Dubai, United Arab Emirates</p>
          </div>
        </div>
        
        <div style="margin-top: 20px;">
          <h4 style="color: var(--primary); margin-bottom: 12px; font-size: 1.1rem;">Working Hours</h4>
          <ul style="list-style: none; padding: 0; margin: 0;">
            <li style="display: flex; justify-content: space-between; padding: 6px 0; border-bottom: 1px solid #eee; font-size: 0.9rem;">
              <span style="color: var(--secondary);">Monday - Friday</span>
              <span style="font-weight: bold; color: var(--accent);">8:00 AM - 10:00 PM</span>
            </li>
            <li style="display: flex; justify-content: space-between; padding: 6px 0; border-bottom: 1px solid #eee; font-size: 0.9rem;">
              <span style="color: var(--secondary);">Saturday</span>
              <span style="font-weight: bold; color: var(--accent);">9:00 AM - 8:00 PM</span>
            </li>
            <li style="display: flex; justify-content: space-between; padding: 6px 0; font-size: 0.9rem;">
              <span style="color: var(--secondary);">Emergency Services</span>
              <span style="font-weight: bold; color: var(--accent);">24/7 Available</span>
            </li>
          </ul>
        </div>
        
        <a href="https://goo.gl/maps/..." target="_blank" 
           style="display: block; text-align: center; background: var(--accent); color: var(--white); padding: 10px 20px; border-radius: 50px; text-decoration: none; margin-top: 20px; font-weight: bold; transition: all 0.3s; font-size: 0.9rem;">
          <i class="fas fa-directions" style="margin-right: 6px;"></i> Get Directions
        </a>
      </div>
    </div>
  </div>

  <!-- Desktop Media Query -->
  <style>
    @media (min-width: 768px) {
      .location-section {
        padding: 60px 0 !important;
      }
      .location-container {
        grid-template-columns: 1fr 1fr !important;
        gap: 30px !important;
      }
      .map-iframe {
        height: 400px !important;
        order: 1 !important;
      }
      .location-info {
        padding: 30px !important;
        order: 2 !important;
      }
      .location-info h3 {
        font-size: 1.3rem !important;
      }
      .location-info h4 {
        font-size: 1.2rem !important;
      }
      .location-info ul li {
        font-size: 1rem !important;
        padding: 8px 0 !important;
      }
      .location-info a {
        display: inline-block !important;
        padding: 12px 25px !important;
        font-size: 1rem !important;
      }
      .location-section h2 {
        font-size: 2.2rem !important;
        margin-bottom: 40px !important;
      }
    }
  </style>
</section>
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