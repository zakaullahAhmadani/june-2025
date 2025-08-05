<section class="contact-section py-5" style="background-color: white;" dir="rtl">
  <div class="container">
    <div class="row">
      <!-- Contact Info Cards -->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="contact-info-card" style="background-color: #f8f9fa; border-radius: 10px; padding: 30px; height: 100%;">
          <h2 class="mb-4" style="color: #2c3e50;">تواصل معنا</h2>
          
          <!-- Email Card -->
          <div class="d-flex mb-4">
            <div class="icon-circle" style="background-color: #2c3e50; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-left: 20px;">
              <i class="bi bi-envelope-fill" style="color: white; font-size: 1.2rem;"></i>
            </div>
            <div>
              <h5 style="color: black;">البريد الإلكتروني</h5>
              <p style="color: #6c757d;">info@masterappliancesrepair.shop</p>
            </div>
          </div>
          
          <!-- Phone Card -->
          <div class="d-flex mb-4">
            <div class="icon-circle" style="background-color: #2c3e50; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-left: 20px;">
              <i class="bi bi-telephone-fill" style="color: white; font-size: 1.2rem;"></i>
            </div>
            <div>
              <h5 style="color: black;">الهاتف</h5>
              <p style="color: #6c757d;" dir="ltr">+966555706976</p>
            </div>
          </div>
          
          <!-- Location Card -->
          <div class="d-flex">
            <div class="icon-circle" style="background-color: #2c3e50; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-left: 20px;">
              <i class="bi bi-geo-alt-fill" style="color: white; font-size: 1.2rem;"></i>
            </div>
            <div>
              <h5 style="color: black;">الموقع</h5>
              <p style="color: #6c757d;">الرياض،  العربية السعودية</p>
              
            </div>
          </div>
        </div>
      </div>
      
      <!-- Contact Form -->
      <div class="col-lg-8">
        <div class="contact-form" style="background-color: white; border-radius: 10px; padding: 30px; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
          <h2 class="mb-4" style="color: #2c3e50;">أرسل لنا رسالة</h2>
         
          @include('form')
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Location Map Section -->
<section class="map-section py-5" style="background-color: #f8f9fa;" dir="rtl">
  <div class="container">
    <h2 class="text-center mb-5" style="color: #2c3e50;">موقعنا</h2>
    <div class="map-container" style="height: 400px; border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
      <iframe loading="lazy"
        src="https://maps.google.com/maps?q=Riyadh%2C%20Saudi%20Arabia&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near"
        title="الرياض، المملكة العربية السعودية"
        aria-label="الرياض، المملكة العربية السعودية"
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy"></iframe>
    </div>
  </div>
</section>