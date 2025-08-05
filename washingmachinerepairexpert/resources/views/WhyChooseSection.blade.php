<section class="why-choose-us py-5" dir="rtl" style="background-color: var(--bg-color);">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image (Right Side - RTL) -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="image-container text-center">
          <img 
            src="images/washing-machine-repair1.webp" 
            alt="لماذا تختار مركز صيانة الغسالات الأوتوماتيكية بجدة؟" 
            class="img-fluid rounded-lg shadow"
          >
        </div>
      </div>

      <!-- Text Content (Left Side - RTL) -->
      <div class="col-lg-6">
        <h2 class="mb-4" style="color: var(--primary-color); font-weight: 700;">
          لماذا تختار
          <span style="color: var(--secondary-color);">مركز صيانة الغسالات بجدة؟</span>
        </h2>
        
        <div class="features-list">
          <div class="feature-item d-flex mb-4">
            <div class="feature-icon ms-4">
              <i class="bi bi-tools fs-1" style="color: var(--accent-color);"></i>
            </div>
            <div>
              <h5 class="feature-title">فنيون متخصصون</h5>
              <p class="feature-desc mb-0">فريقنا من <strong>الفنيين المؤهلين</strong> لديهم خبرة واسعة في صيانة جميع أنواع الغسالات الأوتوماتيكية.</p>
            </div>
          </div>

          <div class="feature-item d-flex mb-4">
            <div class="feature-icon ms-4">
              <i class="bi bi-house-check fs-1" style="color: var(--accent-color);"></i>
            </div>
            <div>
              <h5 class="feature-title">خدمة منزلية</h5>
              <p class="feature-desc mb-0">نقدم <strong>خدمة الصيانة في المنزل</strong> - لا داعي لنقل الغسالة!</p>
            </div>
          </div>

          <div class="feature-item d-flex mb-4">
            <div class="feature-icon ms-4">
              <i class="bi bi-shield-check fs-1" style="color: var(--accent-color);"></i>
            </div>
            <div>
              <h5 class="feature-title">قطع غيار أصلية</h5>
              <p class="feature-desc mb-0">نستخدم <strong>قطع غيار معتمدة</strong> فقط لضمان جودة الإصلاح.</p>
            </div>
          </div>

          <div class="feature-item d-flex">
            <div class="feature-icon ms-4">
              <i class="bi bi-clock-history fs-1" style="color: var(--accent-color);"></i>
            </div>
            <div>
              <h5 class="feature-title">خدمة سريعة</h5>
              <p class="feature-desc mb-0"><strong>إصلاح فوري</strong> خلال 24 ساعة لمعظم الأعطال!</p>
            </div>
          </div>
        </div>

        <div class="mt-4 pt-2">
          <a href="tel:+966563476330" class="btn btn-primary btn-lg me-3">
            <i class="bi bi-telephone-fill me-2"></i> اتصل الآن: 0563476330
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* Why Choose Us Section */
.why-choose-us {
  position: relative;
  overflow: hidden;
}

.feature-item {
  transition: all 0.3s ease;
  padding: 15px;
  border-radius: 8px;
}

.feature-item:hover {
  background: rgba(255, 255, 255, 0.8);
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
}

.feature-title {
  color: var(--primary-color);
  font-weight: 600;
  margin-bottom: 8px;
}

.feature-desc {
  color: var(--text-secondary);
  line-height: 1.6;
}

.image-container {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.image-container img {
  transition: transform 0.5s ease;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.image-container:hover img {
  transform: scale(1.03);
}

.btn-primary {
  background-color: var(--secondary-color);
  border: none;
  color: var(--white);
  padding: 12px 30px;
  font-weight: 600;
  transition: all 0.3s;
}

.btn-primary:hover {
  background-color: var(--primary-color);
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* RTL specific adjustments */
[dir="rtl"] .feature-item {
  text-align: right;
}

[dir="rtl"] .feature-icon {
  margin-left: 1rem;
  margin-right: 0;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
  .image-container {
    max-height: 250px;
  }

  .image-container img {
    height: auto;
    width: 100%;
    object-fit: cover;
  }
  
  .btn-primary {
    padding: 10px 20px;
    font-size: 0.9rem;
  }
}
</style>