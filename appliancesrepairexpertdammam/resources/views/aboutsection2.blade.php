<section class="cs_about cs_style_1 position-relative py-5" style="direction: rtl;">
    <div class="container">
        <div class="row g-4 align-items-center">
            <!-- Right Column - Images (RTL) -->
            <div class="col-lg-6">
                <div class="position-relative">
                    <!-- Image Grid -->
                    <div class="row g-3">
                        <div class="col-md-8 col-12">
                            <div class="cs_about_thumbnail overflow-hidden rounded-3">
                                <img src="images/ac-repair-service.webp" loading="lazy" alt="فني تصليح مكيفات" class="img-fluid w-100">
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="cs_about_thumbnail overflow-hidden rounded-3">
                                <img src="images/washing-machine-repair.webp" loading="lazy" alt="تصليح غسالات اتوماتيك" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>

                    <!-- Gear Shapes -->
                    <div class="position-absolute" style="top: 20%; right: -5%; z-index: -1;">
                        <img src="Assets/gear_2.svg" loading="lazy" alt="Gear Shape" width="80" 
                             class="gear-animation" style="animation-duration: 3s;">
                    </div>
                    <div class="position-absolute" style="bottom: 10%; left: -5%; z-index: -1;">
                        <img src="Assets/gear_1.svg" loading="lazy" alt="Gear Shape" width="80" 
                             class="gear-animation" style="animation-duration: 6s; animation-direction: reverse;">
                    </div>
                </div>
            </div>

            <!-- Left Column - Content -->
            <div class="col-lg-6">
                <div class="pe-lg-5">
                    <!-- Section Heading -->
                    <div class="mb-4">
                        <span class="d-flex align-items-center text-uppercase text-primary fw-bold mb-2 wow fadeInDown">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2"></svg>
                            خدماتنا
                        </span>
                        <h2 class="display-5 fw-bold mb-3 wow fadeInUp">تصليح المكيفات والغسالات في الدمام</h2>
                    </div>

                    <!-- Description -->
                    <p class="lead mb-4">
                        نقدم خدمات متكاملة لصيانة وإصلاح جميع أنواع المكيفات (شباك، سبليت، مركزي) والغسالات الأتوماتيك بأعلى جودة. فريقنا من الفنيين المتخصصين يضمن لك إصلاحاً دقيقاً بقطع غيار أصلية وضمان على العمل.
                    </p>

                    <!-- Check List -->
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2 d-flex align-items-start" style="margin-right:-10px;">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span style="margin-right:20px;">تصليح جميع أنواع المكيفات (سامسونج، إل جي، توشيبا)</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start" style="margin-right:-10px;">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span style="margin-right:20px;">إصلاح أعطال الغسالات الأتوماتيك ونصف الأتوماتيك</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start" style="margin-right:-10px;">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span style="margin-right:20px;">خدمة منزلية في جميع مناطق الدمام</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start" style="margin-right:-10px;">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span style="margin-right:20px;">قطع غيار أصلية مع ضمان على الصيانة</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start" style="margin-right:-10px;">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span style="margin-right:20px;">خدمة طوارئ 24 ساعة للإصلاحات العاجلة</span>
                        </li>
                    </ul>

                    <!-- Button -->
                    <a href="https://api.whatsapp.com/send?phone=+966502085704" class="btn btn-primary px-4 py-2 rounded-pill d-inline-flex align-items-center wow fadeInLeft">
                        <span class="me-2">طلب خدمة سريعة</span>
                        <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* RTL specific styles */
[dir="rtl"] .me-3 {
  margin-right: 0 !important;
  margin-left: 1rem !important;
}
[dir="rtl"] .ms-3 {
  margin-left: 0 !important;
  margin-right: 1rem !important;
}
[dir="rtl"] .me-2 {
  margin-right: 0 !important;
  margin-left: 0.5rem !important;
}

/* Main image styling */
.main-image img {
  border-radius: 12px;
  object-fit: cover;
  /* Larger width on desktop */
  width: 110%;
  margin-right: -10%;
}
@media (max-width: 767.98px) {
  .main-image img {
    width: 100%;
    margin-right: 0;
    height: auto;
  }
}

/* Smaller image styling */
.small-image {
  margin-top: 10px;
}
.small-image img {
  border-radius: 10px;
}
@media (max-width: 767.98px) {
  .small-image img {
    width: 90%;
    margin: 0 auto;
    display: block;
  }
}

/* Icon circle styling */
.icon-circle {
  width: 24px;
  height: 24px;
  font-size: 14px;
}

/* Gear rotation */
@keyframes gear-rotate {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.gear-animation {
  animation: gear-rotate linear infinite;
  transform-origin: center center;
}

/* Image hover effects */
.img-hover-animate {
  transition: all 0.3s ease;
}
.img-hover-animate:hover {
  transform: scale(0.95);
  filter: brightness(1.1) sepia(1) hue-rotate(60deg) saturate(3);
}
.img-container-hover:hover {
  background-color: #e8f5e9 !important;
}
</style>
