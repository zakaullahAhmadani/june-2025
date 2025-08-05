<section class="why-choose-us py-5 bg-light" dir="rtl">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image (Right Side - RTL) -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="image-container text-center">
          <img 
            src="images/ac-repair-technician-working.webp" 
            alt="لماذا تختار فني تكييف الرياض؟" 
            class="img-fluid rounded-lg shadow"
          >
        </div>
      </div>

      <!-- Text Content (Left Side - RTL) -->
      <div class="col-lg-6">
        <h2 class="mb-4" style="color: var(--primary-color); font-weight: 700;">
          لماذا تختار
          <span class="text-accent">فني تكييف الرياض؟</span>
        </h2>
        
        <div class="features-list">
          <div class="feature-item d-flex mb-4">
            <div class="feature-icon ms-4">
              <i class="bi bi-tools fs-1 text-accent"></i>
            </div>
            <div>
              <h5 class="feature-title">خبرة واسعة في جميع أنواع التكييف</h5>
              <p class="feature-desc mb-0">نقدم <strong>خدمات تصليح وتركيب</strong> لجميع أنواع التكييف (نوافذ، سبليت، مركزي).</p>
            </div>
          </div>

          <div class="feature-item d-flex mb-4">
            <div class="feature-icon ms-4">
              <i class="bi bi-lightning-charge fs-1 text-accent"></i>
            </div>
            <div>
              <h5 class="feature-title">خدمة سريعة على مدار الساعة</h5>
              <p class="feature-desc mb-0">نصل إليك <strong>خلال ساعة</strong> لطوارئ التكييف في أي وقت!</p>
            </div>
          </div>

          <div class="feature-item d-flex mb-4">
            <div class="feature-icon ms-4">
              <i class="bi bi-shield-check fs-1 text-accent"></i>
            </div>
            <div>
              <h5 class="feature-title">ضمان على جميع الأعمال</h5>
              <p class="feature-desc mb-0"><strong>ضمان لمدة عام</strong> على جميع أعمال الصيانة والتركيب.</p>
            </div>
          </div>

          <div class="feature-item d-flex">
            <div class="feature-icon ms-4">
              <i class="bi bi-house-gear fs-1 text-accent"></i>
            </div>
            <div>
              <h5 class="feature-title">صيانة الأجهزة المنزلية</h5>
              <p class="feature-desc mb-0">نقوم <strong>بتصليح الغسالات والثلاجات</strong> وأجهزة المطبخ أيضًا!</p>
            </div>
          </div>
        </div>

        <div class="mt-4 pt-2">
          <a href="tel:+966555706976" class="btn btn-primary btn-lg me-3">
            <i class="bi bi-telephone-fill me-2"></i> اتصل الآن 
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* Why Choose Us Section */
:root {
  /* === Brand Colors === */
  --primary-color: #2c3e50;       /* Dark Blue - Main brand/navigation color */
  --secondary-color: #3498db;     /* Bright Blue - Primary buttons/CTAs */
  --accent-color-1: #1abc9c;      /* Teal - Highlights/hover effects */
  --accent-color-2: #f39c12;      /* Orange - Secondary accents */
  --accent-color-3: #34495e;      /* Dark Slate - Top bar/headers */

  /* === Backgrounds === */
  --background-light: #ffffff;    /* White - Main content background */
  --background-main: #f8f9fa;     /* Very light gray - Page background */
  --background-alt: #ecf0f1;      /* Light gray - Alternate sections */

  /* === Text Colors === */
  --text-heading: #2c3e50;        /* Dark blue - Headings/titles */
  --text-body: #4a5568;           /* Dark gray - Body text */
  --text-muted: #718096;          /* Medium gray - Secondary text */
}

.why-choose-us {
  position: relative;
  overflow: hidden;
  background-color: var(--background-alt);
}

.text-accent {
  color: var(--accent-color-1) !important;
}

.section-title {
  font-weight: 700;
  color: var(--text-heading);
  position: relative;
  padding-bottom: 15px;
}

.feature-item {
  transition: all 0.3s ease;
  padding: 15px;
  border-radius: 8px;
  background-color: var(--background-light);
}

.feature-item:hover {
  background: var(--background-light);
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
}

.feature-title {
  color: var(--primary-color);
  font-weight: 600;
  margin-bottom: 8px;
}

.feature-desc {
  color: var(--text-body);
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
  border-color: var(--secondary-color);
  color: var(--background-light);
  padding: 10px 25px;
  font-weight: 600;
}

.btn-primary:hover {
  background-color: #2980b9;
  border-color: #2980b9;
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