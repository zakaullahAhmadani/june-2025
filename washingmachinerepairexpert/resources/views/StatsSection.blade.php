<section class="feature-section py-5 position-relative" dir="rtl">
  <!-- Background Image -->
  <div class="bg-overlay" style="background-image: url('images/washing-machine-bg.webp');"></div>
  
  <div class="container position-relative">
    <div class="row align-items-center">
      <!-- Text Content (Left Side) -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="feature-content p-4" style="background-color: rgba(255, 255, 255, 0.9); border-radius: 10px;">
          <h2 class="mb-4" style="color: var(--primary-color);">
            <i class="bi bi-star-fill me-2" style="color: var(--accent-color);"></i>
            مركز صيانة الغسالات الأوتوماتيكية بجدة
          </h2>
          
          <div class="feature-list">
            <div class="feature-item d-flex mb-3">
              <div class="feature-icon me-3" style="color: var(--accent-color);">
                <i class="bi bi-check-circle-fill fs-5"></i>
              </div>
              <div>
                <p class="mb-0" style="color: var(--text-color);">فنيون متخصصون معتمدون لصيانة جميع الماركات</p>
              </div>
            </div>
            
            <div class="feature-item d-flex mb-3">
              <div class="feature-icon me-3" style="color: var(--accent-color);">
                <i class="bi bi-check-circle-fill fs-5"></i>
              </div>
              <div>
                <p class="mb-0" style="color: var(--text-color);">قطع غيار أصلية مع ضمان لمدة عام</p>
              </div>
            </div>
            
            <div class="feature-item d-flex mb-3">
              <div class="feature-icon me-3" style="color: var(--accent-color);">
                <i class="bi bi-check-circle-fill fs-5"></i>
              </div>
              <div>
                <p class="mb-0" style="color: var(--text-color);">خدمة منزلية سريعة خلال 24 ساعة</p>
              </div>
            </div>
            
            <div class="feature-item d-flex mb-4">
              <div class="feature-icon me-3" style="color: var(--accent-color);">
                <i class="bi bi-check-circle-fill fs-5"></i>
              </div>
              <div>
                <p class="mb-0" style="color: var(--text-color);">أسعار تنافسية وشفافة بدون تكاليف خفية</p>
              </div>
            </div>
            
            <a href="tel:+966563476330" class="btn btn-call" style="background-color: var(--secondary-color); color: var(--white);">
              <i class="bi bi-telephone-fill me-2"></i> اتصل بنا الآن: 0563476330
            </a>
          </div>
        </div>
      </div>
      
      <!-- Image (Right Side) -->
      <div class="col-lg-6">
        <div class="feature-image-container">
          <img src="images/washing-machine-technician.webp" 
               alt="فني صيانة غسالات أتوماتيكية بجدة" 
               class="img-fluid rounded shadow-lg"
               style="border: 5px solid var(--white);">
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* Feature Section Styling */
.feature-section {
  min-height: 500px;
  display: flex;
  align-items: center;
  background-color: var(--bg-color);
}

.bg-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  opacity: 0.2;
  z-index: 0;
}

.feature-content {
  position: relative;
  z-index: 2;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.feature-image-container {
  position: relative;
  z-index: 2;
  text-align: center;
}

.feature-image-container img {
  max-height: 450px;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.feature-image-container:hover img {
  transform: scale(1.03);
}

.feature-list {
  padding: 15px;
}

.btn-call {
  padding: 12px 30px;
  font-weight: 600;
  border-radius: 8px;
  border: none;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.btn-call:hover {
  background-color: var(--primary-color) !important;
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

/* Responsive Design */
@media (max-width: 991.98px) {
  .feature-section {
    min-height: auto;
    padding: 60px 0;
  }
  
  .feature-image-container img {
    max-height: 350px;
    margin-top: 30px;
  }
  
  .feature-content {
    margin-top: 30px;
  }
}

@media (max-width: 767.98px) {
  .feature-image-container img {
    max-height: 300px;
  }
  
  .btn-call {
    width: 100%;
    justify-content: center;
  }
}
</style>