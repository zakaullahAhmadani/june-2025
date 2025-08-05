<section class="about-section py-5" style="background-color: var(--bg-color);" dir="rtl">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image Column -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="image-container">
          <img src="images/Washing Machines.webp" 
               alt="مركز صيانة الغسالات الأوتوماتيكية بجدة" 
               class="img-fluid">
        </div>
      </div>
      
      <!-- Content Column -->
      <div class="col-lg-6">
        <div class="pe-lg-4">
          <h2 class="mb-4" style="color: var(--primary-color); font-weight: 700;">من نحن</h2>
          <h3 class="mb-4" style="color: var(--text-color); font-weight: 600;">مركز متخصص في صيانة الغسالات الأوتوماتيكية بجدة</h3>
          <p class="lead mb-4" style="color: var(--text-secondary);">
            نحن <span style="color: var(--primary-color); font-weight: 600;">أفضل مركز صيانة غسالات بجدة</span>، نقدم <span style="color: var(--primary-color); font-weight: 600;">خدمة منزلية متكاملة</span> و<span style="color: var(--primary-color); font-weight: 600;">إصلاحات فورية</span> لجميع أنواع الغسالات الأوتوماتيكية.
          </p>
          
          <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
              <div class="ms-3" style="width: 40px; height: 40px; background-color: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-check-lg" style="color: var(--white); font-size: 1rem;"></i>
              </div>
              <p style="margin: 0; color: var(--text-color); font-weight: 500;">فنيون متخصصون معتمدون لصيانة جميع ماركات الغسالات الأوتوماتيكية</p>
            </div>
            
            <div class="d-flex align-items-center mb-3">
              <div class="ms-3" style="width: 40px; height: 40px; background-color: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-check-lg" style="color: var(--white); font-size: 1rem;"></i>
              </div>
              <p style="margin: 0; color: var(--text-color); font-weight: 500;">استخدام قطع غيار أصلية مع ضمان لمدة عام على الإصلاح</p>
            </div>
            
            <div class="d-flex align-items-center">
              <div class="ms-3" style="width: 40px; height: 40px; background-color: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-check-lg" style="color: var(--white); font-size: 1rem;"></i>
              </div>
              <p style="margin: 0; color: var(--text-color); font-weight: 500;">خدمة سريعة خلال 24 ساعة لمعظم الأعطال</p>
            </div>
          </div>
          
          <!-- Stats Section -->
          <div class="row mt-4">
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="text-center">
                <h3 class="mb-0" style="color: var(--primary-color); font-weight: 700;">10+</h3>
                <p class="mb-0" style="color: var(--text-secondary); font-weight: 500;">سنوات خبرة</p>
              </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="text-center">
                <h3 class="mb-0" style="color: var(--primary-color); font-weight: 700;">100%</h3>
                <p class="mb-0" style="color: var(--text-secondary); font-weight: 500;">رضا العملاء</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-center">
                <h3 class="mb-0" style="color: var(--primary-color); font-weight: 700;">24</h3>
                <p class="mb-0" style="color: var(--text-secondary); font-weight: 500;">ساعة خدمة</p>
              </div>
            </div>
          </div>
          
          <div class="mt-4">
            <a href="tel:966563476330" class="btn me-2" style="background-color: var(--secondary-color); color: var(--white); padding: 12px 30px; border-radius: 50px; font-weight: 600;">
              <i class="bi bi-telephone-fill me-2"></i>اتصل الآن: 0563476330
            </a>
            <a href="https://wa.me/966563476330" class="btn" style="border: 2px solid var(--secondary-color); color: var(--secondary-color); padding: 10px 25px; border-radius: 50px; font-weight: 600;">
              <i class="bi bi-whatsapp"></i>خدماتنا
            </a>
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
  transition: all 0.3s ease;
}

.image-container:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.image-container img {
  transition: transform 0.5s ease;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

.image-container:hover img {
  transform: scale(1.05);
}

.btn {
  transition: all 0.3s ease;
}

.btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Responsive adjustment for mobile */
@media (max-width: 768px) {
  .image-container {
    height: 300px;
  }
  
  .btn {
    width: 100%;
    margin-bottom: 10px;
    text-align: center;
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