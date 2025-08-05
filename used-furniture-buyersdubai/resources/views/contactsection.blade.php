<section class="contact-section py-5" style="background-color: white;">
  <div class="container">
    <div class="row">
      <!-- Contact Info Cards -->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="contact-info-card" style="background-color: #f8f9fa; border-radius: 10px; padding: 30px; height: 100%;">
          <h2 class="mb-4" style="color: var(--primary-red);">Contact Us</h2>
          
          <!-- Email Card -->
          <div class="d-flex mb-4">
            <div class="icon-circle" style="background-color: var(--primary-red); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
              <i class="bi bi-envelope-fill" style="color: white; font-size: 1.2rem;"></i>
            </div>
            <div>
              <h5 style="color: black;">Email</h5>
              <p style="color: #6c757d;">info@used-furniture-buyersdubai.com</p>
            </div>
          </div>
          
          <!-- Phone Card -->
          <div class="d-flex mb-4">
            <div class="icon-circle" style="background-color: var(--primary-red); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
              <i class="bi bi-telephone-fill" style="color: white; font-size: 1.2rem;"></i>
            </div>
            <div>
              <h5 style="color: black;">Phone</h5>
              <p style="color: #6c757d;">+971 529639647</p>
            </div>
          </div>
          
          <!-- Location Card -->
          <div class="d-flex">
            <div class="icon-circle" style="background-color: var(--primary-red); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
              <i class="bi bi-geo-alt-fill" style="color: white; font-size: 1.2rem;"></i>
            </div>
            <div>
              <h5 style="color: black;">Location</h5>
              <p style="color: #6c757d;"> Dubai, UAE</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Contact Form -->
      <div class="col-lg-8">
        <div class="contact-form" style="background-color: white; border-radius: 10px; padding: 30px; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
          <h2 class="mb-4" style="color: var(--primary-red);">Send Us a Message</h2>
         
          @include('form')
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Location Map Section -->
<section class="map-section py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <h2 class="text-center mb-5" style="color: var(--primary-red);">Our Location</h2>
    <div class="map-container" style="height: 400px; border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
      <!-- Embed your Google Map here -->
     <iframe loading="lazy"
					src="https://maps.google.com/maps?q=Dubai%2C%20UAE&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near"
					title="Dubai, UAE"
					aria-label="Dubai, UAE"
   width="100%" 
              height="100%" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy"></iframe>
    </div>
  </div>
</section>