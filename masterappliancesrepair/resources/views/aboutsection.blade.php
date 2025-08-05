<section class="ac-service-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text Content (Left Side) -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="mb-4" style="color: var(--primary-color); font-weight: 800;">أفضل خدمات تصليح وتركيب التكييف في الرياض</h2>
        <p class="section-description">
          نحن <strong>أبرز متخصصي صيانة التكييف والأجهزة المنزلية بالرياض</strong>، نقدم خدمات متكاملة لجميع أنواع 
          <strong>التكييف</strong>، <strong>الغسالات</strong> والثلاجات. 
          سواء كنت بحاجة إلى <strong>تصليح تكييف النوافذ</strong> أو تركيب تكييف المركزي، 
          نضمن لك خدمة ممتازة بأسعار تنافسية.
        </p>
        
        <div class="services-list">
          <h5 class="services-title">خدماتنا:</h5>
          <ul class="keyword-list">
            <li><i class="bi bi-check-circle-fill"></i> تصليح وتركيب تكييف النوافذ</li>
            <li><i class="bi bi-check-circle-fill"></i> صيانة تكييف السبلت</li>
            <li><i class="bi bi-check-circle-fill"></i> تركيب وتصليح التكييف المركزي</li>
            
            <li><i class="bi bi-check-circle-fill"></i> صيانة الغسالات والنشافات</li>
            <br>
            <li><i class="bi bi-check-circle-fill"></i> تصليح الثلاجات والمجمدات</li>
            <li><i class="bi bi-check-circle-fill"></i> صيانة الأفران وأجهزة المطبخ</li>
            <li><i class="bi bi-check-circle-fill"></i> خدمة طوارئ على مدار الساعة</li>
          </ul>
        </div>
        
        <div style="text-align: center;">
          <a href="tel:966555706976" class="call-btn">
            <i class="bi bi-telephone-fill me-2"></i> اتصل الآن
          </a>
        </div>
      </div>
      
      <!-- Image (Right Side) -->
      <div class="col-lg-6">
        <div class="image-container">
          <img src="images/ac-repair-technician.webp" alt="فني تكييف وصيانة أجهزة منزلية بالرياض" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* Color palette variables */
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

/* Section background */
.ac-service-section {
  background-color: var(--background-main);
  background-image: linear-gradient(to bottom, var(--background-light), var(--background-alt));
}

.section-description {
  color: var(--text-body);
  font-size: 1.1rem;
  line-height: 1.6;
  margin-bottom: 25px;
  text-align: right;
}

.services-title {
  color: var(--primary-color);
  font-weight: 600;
  margin-bottom: 15px;
  text-align: right;
}

.keyword-list {
  list-style: none;
  padding-right: 0;
  padding-left: 0;
  column-count: 1;
  text-align: right;
  direction: rtl;
}

.keyword-list li {
  margin-bottom: 10px;
  padding-right: 25px;
  position: relative;
  line-height: 1.4;
  color: var(--text-body);
}

.keyword-list li i {
  color: var(--accent-color-1);
  position: absolute;
  right: 0;
  top: 3px;
}

.image-container {
  position: relative;
  width: 500px;
  height: 400px;
  overflow: hidden;
  border-radius: 8px;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.image-container:hover img {
  transform: scale(1.05);
}

.call-btn {
  background-color: var(--secondary-color);
  border-color: var(--secondary-color);
  color: var(--background-light);
  padding: 10px 25px;
  font-weight: 600;
  display: inline-block;
  margin: 0 auto;
  text-align: center;
  border-radius: 5px;
  text-decoration: none;
  transition: all 0.3s ease;
}

.call-btn:hover {
  background-color: #2980b9;
  border-color: #2980b9;
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

@media (min-width: 992px) {
  .keyword-list {
    column-count: 2;
    column-gap: 30px;
  }
}
</style>