<section class="why-choose-us py-5 bg-light" dir="rtl">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image (Right Side - RTL) -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="image-container text-center">
          <img 
            src="images/WhatsApp Image 2025-07-23 at 12.16.01_523e9752.jpg" 
            alt="لماذا تختار مشتري الأثاث المستعمل دبي؟" 
            class="img-fluid rounded-lg shadow"
          >
        </div>
      </div>

      <!-- Text Content (Left Side - RTL) -->
      <div class="col-lg-6">
        <h2 class="mb-4" style="color:#c0392b; font-weight: 700;">
          لماذا تختار
          <span class="text-red">مشتري الأثاث المستعمل دبي؟</span>
        </h2>
        
        <div class="features-list">
          <div class="feature-item d-flex mb-4">
            <div class="feature-icon ms-4">
              <i class="bi bi-cash-coin fs-1 text-red"></i>
            </div>
            <div>
              <h5 class="feature-title">أفضل الأسعار في دبي</h5>
              <p class="feature-desc mb-0">نقدم <strong>أعلى الأسعار النقدية</strong> لأثاثك المستعمل والأجهزة والمعدات المكتبية.</p>
            </div>
          </div>

          <div class="feature-item d-flex mb-4">
            <div class="feature-icon ms-4">
              <i class="bi bi-truck fs-1 text-red"></i>
            </div>
            <div>
              <h5 class="feature-title">خدمة استلام مجانية</h5>
              <p class="feature-desc mb-0">نحن نتعامل مع <strong>جميع عمليات النقل</strong> - بدون متاعب لك!</p>
            </div>
          </div>

          <div class="feature-item d-flex mb-4">
            <div class="feature-icon ms-4">
              <i class="bi bi-shield-check fs-1 text-red"></i>
            </div>
            <div>
              <h5 class="feature-title">موثوق وآمن</h5>
              <p class="feature-desc mb-0"><strong>أكثر من 10 سنوات</strong> في شراء الأثاث المستعمل بدبي مع أكثر من 1000 عميل راضٍ.</p>
            </div>
          </div>

          <div class="feature-item d-flex">
            <div class="feature-icon ms-4">
              <i class="bi bi-clock-history fs-1 text-red"></i>
            </div>
            <div>
              <h5 class="feature-title">دفع فوري</h5>
              <p class="feature-desc mb-0">احصل على <strong>نقدًا فوريًا</strong> عند استلامنا للعناصر!</p>
            </div>
          </div>
        </div>

        <div class="mt-4 pt-2">
          <a href="tel:+966501110433" class="btn btn-primary btn-lg me-3">
            <i class="bi bi-telephone-fill me-2"></i> اتصل الآن: 0501110433
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

.text-red {
  color: #c0392b !important;
}

.section-title {
  font-weight: 700;
  color: #000000;
  position: relative;
  padding-bottom: 15px;
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
  color: #000000;
  font-weight: 600;
  margin-bottom: 8px;
}

.feature-desc {
  color: #555555;
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
  background-color: #c0392b;
  border-color: #c0392b;
  color: #ffffff;
  padding: 10px 25px;
  font-weight: 600;
}

.btn-primary:hover {
  background-color: #a93226;
  border-color: #a93226;
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
}
</style>