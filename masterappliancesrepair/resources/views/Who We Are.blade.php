<section class="about-section py-5" style="background-color: var(--background-alt);" dir="rtl">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image Column -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="image-container">
          <img src="images/ac-repair-technician.webp" 
               alt="صيانة وتصليح مكيفات بالرياض" 
               class="img-fluid">
        </div>
      </div>
      
      <!-- Content Column -->
      <div class="col-lg-6">
        <div class="pe-lg-4">
          <h2 class="mb-4" style="color: var(--secondary-color); font-weight: 700;">من نحن</h2>
          <h3 class="mb-4" style="color: var(--text-heading); font-weight: 600;">خدمات صيانة وتصليح المكيفات والأجهزة الكهربائية بالرياض</h3>
          <p class="lead mb-4" style="color: var(--text-body);">
            نحن <span style="color: var(--secondary-color); font-weight: 600;">متخصصون في صيانة وتصليح جميع أنواع المكيفات</span>، نقدم <span style="color: var(--secondary-color); font-weight: 600;">خدمة سريعة</span> و<span style="color: var(--secondary-color); font-weight: 600;">إصلاحات مضمونة</span> بأسعار تنافسية.
          </p>
          
          <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
              <div class="ms-3" style="width: 40px; height: 40px; background-color: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-check-lg" style="color: white; font-size: 1rem;"></i>
              </div>
              <p style="margin: 0; color: var(--text-heading); font-weight: 500;">صيانة وتركيب جميع أنواع المكيفات (نافذة، سبليت، دكت)</p>
            </div>
            
            <div class="d-flex align-items-center mb-3">
              <div class="ms-3" style="width: 40px; height: 40px; background-color: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-check-lg" style="color: white; font-size: 1rem;"></i>
              </div>
              <p style="margin: 0; color: var(--text-heading); font-weight: 500;">تصليح الغسالات والثلاجات والأجهزة الكهربائية</p>
            </div>
            
            <div class="d-flex align-items-center">
              <div class="ms-3" style="width: 40px; height: 40px; background-color: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-check-lg" style="color: white; font-size: 1rem;"></i>
              </div>
              <p style="margin: 0; color: var(--text-heading); font-weight: 500;">فنيون متخصصون ذوو خبرة واسعة في مجال التبريد والتكييف</p>
            </div>
          </div>
          
          <!-- Stats Section -->
          <div class="row mt-4">
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="text-center">
                <h3 class="mb-0" style="color: var(--secondary-color); font-weight: 700;">100%</h3>
                <p class="mb-0" style="color: var(--text-body); font-weight: 500;">صيانة المكيفات</p>
              </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="text-center">
                <h3 class="mb-0" style="color: var(--secondary-color); font-weight: 700;">100%</h3>
                <p class="mb-0" style="color: var(--text-body); font-weight: 500;">تركيب المكيفات</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-center">
                <h3 class="mb-0" style="color: var(--secondary-color); font-weight: 700;">100%</h3>
                <p class="mb-0" style="color: var(--text-body); font-weight: 500;">تصليح الأجهزة</p>
              </div>
            </div>
          </div>
          
          <div class="mt-4">
            <a href="https://wa.me/966555706976" class="btn me-2" style="background-color: var(--secondary-color); color: white; padding: 12px 30px; border-radius: 50px; font-weight: 600;">تواصل عبر واتساب</a>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* About Section - RTL */
.about-section {
  font-family: 'Tajawal', sans-serif;
}

.image-container {
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  height: 500px;
  max-width: 100%;
}

.image-container img {
  transition: transform 0.5s ease;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

/* Responsive adjustment for mobile */
@media (max-width: 768px) {
  .image-container {
    height: 250px;
  }
}

/* RTL Adjustments */
[dir="rtl"] .ms-3 {
  margin-right: 1rem !important;
  margin-left: 0 !important;
}

[dir="rtl"] .me-2 {
  margin-left: 0.5rem !important;
  margin-right: 0 !important;
}

[dir="rtl"] .pe-lg-4 {
  padding-left: 1.5rem !important;
  padding-right: 0 !important;
}
</style>