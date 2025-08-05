<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Appliance Repair Expert Dammam</title>

   @include('meta')
 

<body>
   @include('nav')
<section class="hero-slider">
    <div class="slider-container">
        <!-- Slide 1 - AC Repair Services -->
        <div class="slide active" style="background-image: url('images/ac-repair-technician.webp');">
            <div class="slide-content right">
                <div class="sub-title">خدمات تكييف الهواء</div>
                <h1 class="title">تصليح جميع أنواع المكيفات في الدمام والخبر</h1>
                <div class="desc text-white">
                    <p>إصلاح مكيفات الشباك والسبليت بقطع غيار أصلية وضمان على العمل</p>
                    <p>فنيون متخصصون - خدمة 24 ساعة - أسعار مناسبة</p>
                </div>
               <a href="tel:0502085704" class="btn btn-slider" style="display: inline-block;">اتصل الآن: 0502085704</a>

<style>
  @media only screen and (max-width: 767px) {
    .btn.btn-slider {
      position: relative;
      top: -15px;
    }
  }
</style>
            </div>
        </div>
        
        <!-- Slide 2 - Washing Machine Repair -->
        <div class="slide" style="background-image: url('images/washing-machine-technician.webp');">
            <div class="slide-content left">
                <div class="sub-title">صيانة الغسالات</div>
                <h1 class="title">إصلاح جميع أنواع الغسالات في الدمام</h1>
                <div class="desc text-white">
                    <p>إصلاح الغسالات الأوتوماتيك والعادية لجميع الماركات العالمية</p>
                    <p>تشخيص دقيق - إصلاح فوري - ضمان على الصيانة</p>
                </div>
                <a href="https://api.whatsapp.com/send?phone=966502085704" class="btn btn-slider">واتساب الآن</a>
            </div>
        </div>
        
        <!-- Slide 3 - Cooking Range Services -->
        <div class="slide" style="background-image: url('images/cooking-range-repair.webp');">
            <div class="slide-content center">
                <div class="sub-title">صيانة الأفران</div>
                <h1 class="title">إصلاح الأفران والمايكروويف باحترافية</h1>
                <div class="desc text-white">
                    <p>إصلاح جميع مشاكل الأفران الكهربائية والمايكروويف</p>
                    <p>فنيون متخصصون - قطع غيار أصلية - خدمة منزلية سريعة</p>
                </div>
                <a href="tel:0502085704" class="btn btn-slider">اتصل الآن</a>
            </div>
        </div>
        
        <!-- Slide 4 - Emergency Services -->
        <div class="slide" style="background-image: url('images/emergency-repair-service.webp');">
            <div class="slide-content center">
                <div class="sub-title">خدمة طوارئ 24 ساعة</div>
                <h1 class="title">خدمات صيانة الأجهزة المنزلية العاجلة</h1>
                <div class="desc text-white">
                    <p>إصلاح عاجل للمكيفات والغسالات والأفران في نفس اليوم</p>
                    <p>استجابة فورية - جميع مناطق الدمام والخبر - أسعار تنافسية</p>
                </div>
                <a href="tel:0502085704" class="btn btn-slider rounded-pill d-inline-flex align-items-center justify-content-center">
                    <span>طلب خدمة عاجلة</span>
                    <i class="bi bi-arrow-left ms-2"></i>
                </a>
            </div>
        </div>
        
        <!-- Slider Controls -->
        <div class="slider-controls">
            <div class="slider-dot active" data-slide="0"></div>
            <div class="slider-dot" data-slide="1"></div>
            <div class="slider-dot" data-slide="2"></div>
            <div class="slider-dot" data-slide="3"></div>
        </div>
    </div>
</section>

<style>
    /* Hero Slider - Professional Arabic RTL Version */
    .hero-slider {
        position: relative;
        width: 100%;
        height: 90vh;
        max-height: 800px;
        min-height: 500px;
        overflow: hidden;
        font-family: 'Tajawal', sans-serif;
        direction: rtl;
    }
    
    .slider-container {
        height: 100%;
        position: relative;
    }
    
    .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        display: flex;
        align-items: center;
        padding: 0 8%;
    }
    
    .slide.active {
        opacity: 1;
        z-index: 1;
    }
    
    .slide-overlay {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to left, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
    }
    
    .slide-content {
        max-width: 650px;
        color: white;
        position: relative;
        z-index: 2;
        padding: 40px;
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 12px;
        backdrop-filter: blur(5px);
        animation: fadeInUp 0.8s cubic-bezier(0.22, 0.61, 0.36, 1);
        border: 1px solid rgba(255,255,255,0.1);
    }
    
    .slide-content.right {
        margin-right: 10%;
    }
    
    .slide-content.left {
        margin-left: 10%;
    }
    
    .slide-content.center {
        margin: 0 auto;
        text-align: center;
    }
    
    .sub-title {
        color: #4CAF50;
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 12px;
        display: block;
        letter-spacing: 1px;
    }
    
    .title {
        font-size: 2.8rem;
        font-weight: 800;
        margin-bottom: 20px;
        line-height: 1.3;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }
    
    .desc {
        font-size: 1.2rem;
        line-height: 1.7;
        margin-bottom: 30px;
        opacity: 0.9;
    }
    
    /* Button Styles */
    .btn-slider {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 14px 35px;
        background-color: #4CAF50;
        color: white;
        border: 2px solid #4CAF50;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
    }
    
    .btn-slider:hover {
        background-color: transparent;
        color: #4CAF50;
        transform: translateY(-3px);
        box-shadow: 0 7px 20px rgba(76, 175, 80, 0.4);
    }
    
    /* Professional Slider Controls */
    .slider-controls {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 10;
        display: flex;
        gap: 12px;
    }
    
    .slider-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.4);
        cursor: pointer;
        transition: all 0.4s ease;
        border: 1px solid transparent;
    }
    
    .slider-dot:hover {
        background-color: rgba(255, 255, 255, 0.7);
    }
    
    .slider-dot.active {
        background-color: #4CAF50;
        transform: scale(1.4);
        border-color: white;
    }
    
    /* Navigation Arrows */
    .slider-nav {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 20px;
        z-index: 10;
        transform: translateY(-50%);
    }
    
    .slider-arrow {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: rgba(0,0,0,0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(5px);
    }
    
    .slider-arrow:hover {
        background-color: rgba(76, 175, 80, 0.7);
        transform: scale(1.1);
    }
    
    /* Responsive Design */
    @media (max-width: 1200px) {
        .hero-slider {
            height: 80vh;
        }
        
        .slide-content {
            max-width: 550px;
        }
        
        .title {
            font-size: 2.5rem;
        }
    }
    
    @media (max-width: 992px) {
        .hero-slider {
            height: 75vh;
        }
        
        .slide {
            padding: 0 5%;
        }
        
        .slide-content {
            padding: 30px;
            max-width: 500px;
        }
        
        .title {
            font-size: 2.2rem;
        }
        
        .desc {
            font-size: 1.1rem;
        }
    }
    
    @media (max-width: 768px) {
        .hero-slider {
            height: 70vh;
            min-height: 400px;
        }
        
        .slide-content {
            padding: 25px;
            width: 90%;
            max-width: 100%;
            margin: 0 auto !important;
            text-align: center;
            backdrop-filter: none;
        }
        
        .title {
            font-size: 2rem;
            margin-bottom: 15px;
        }
        
        .sub-title {
            font-size: 1.1rem;
        }
        
        .desc {
            font-size: 1rem;
            margin-bottom: 25px;
        }
        
        .btn-slider {
            padding: 12px 30px;
            font-size: 1rem;
        }
        
        /* Enhanced Mobile Controls */
        .slider-controls {
            bottom: 25px;
            gap: 10px;
        }
        
        .slider-dot {
            width: 10px;
            height: 10px;
        }
        
        .slider-nav {
            display: none; /* Hide arrows on mobile */
        }
    }
    
    @media (max-width: 576px) {
        .hero-slider {
            height: 65vh;
        }
        
        .slide-content {
            padding: 20px;
            width: 95%;
        }
        
        .title {
            font-size: 1.8rem;
        }
        
        .sub-title {
            font-size: 1rem;
        }
        
        .slider-controls {
            bottom: 20px;
        }
    }
    
    /* Professional Animations */
    @keyframes fadeInUp {
        from {
            transform: translateY(30px) translateX(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0) translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideInRight {
        from {
            transform: translateX(100px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideInLeft {
        from {
            transform: translateX(-100px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
</style>
<script>
    // Slider functionality
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.slider-dot');
        let currentSlide = 0;
        let slideInterval;
        
        function initSlider() {
            if (slides.length === 0) return;
            
            // Start auto slide
            slideInterval = setInterval(nextSlide, 5000);
        }
        
        function goToSlide(n) {
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active');
            
            currentSlide = (n + slides.length) % slides.length;
            
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
            
            // Reset timer when manually changing slides
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }
        
        function nextSlide() {
            goToSlide(currentSlide + 1);
        }
        
        // Event listeners for dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                goToSlide(index);
            });
        });
        
        // Initialize the slider
        initSlider();
    });
</script>


@include('aboutsection')
<!-- new section  -->
 
 @include('aboutsection2')
    <!-- 3thsection -->
     <!-- CTA Section with Background Image -->
<section class="cta-section text-center text-white d-flex align-items-center justify-content-center" style="background: url('images/cta-bg.webp') center center/cover no-repeat; min-height: 320px; position: relative;">
  <div style="background: rgba(0,0,0,0.55); position: absolute; top:0; left:0; width:100%; height:100%; z-index:1;"></div>
  <div class="container position-relative" style="z-index:2;">
    <h2 class="display-5 fw-bold mb-3">هل تحتاج إلى صيانة عاجلة أو استشارة مجانية؟</h2>
    <p class="lead mb-4">اتصل بنا الآن واحصل على أفضل خدمات الصيانة والإصلاح في الدمام والخبر.</p>
    <a href="tel:0502085704" class="btn btn-lg btn-success px-5 py-2 fw-bold shadow">اتصل الآن: 0502085704</a>
  </div>
</section>

  @include('servicessection')
@include('client')
@include('whychoose')
<br><br>
<br><br>
@include('contentsection')


<div class="cs_height_80 cs_height_lg_80"></div>
<br><br>
<style>
    .cs_card {
  background-color: #fff;
  border: 1px solid #eee;
  border-radius: 16px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s, box-shadow 0.3s;
}

.cs_card:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}

.cs_icon {
  width: 80px;
  height: 80px;
  background-color: #f5f5f5;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  color: #007bff; /* Change this to match your theme color */
  margin: 0 auto;
}

.cs_section_title {
  font-size: 2rem;
  font-weight: bold;
}

.cs_section_subtitle {
  font-size: 1.2rem;
  font-weight: 600;
}

</style>
 <!-- 6th section -->



<!-- 7th section -->

    <style>
    /* Existing styles remain unchanged */
    .cs_height_80, .cs_height_lg_80 {
        height: 80px;
    }
    .cs_height_60 {
        height: 60px;
    }
    .cs_section_subtitle {
        font-size: 18px;
        margin-bottom: 12px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-transform: uppercase;
        color: #333;
    }
    .cs_section_title {
        font-size: 40px;
        margin-bottom: 0;
        font-weight: 700;
        color: #333;
    }
    .cs_row_gap_60 {
        row-gap: 60px;
    }
    .cs_card {
        position: relative;
        height: 100%;
        transition: all 0.3s ease;
    }
    .cs_card_thumbnail {
        position: relative;
        display: block;
        overflow: hidden;
        border-radius: 10px;
    }
    .cs_card_thumbnail img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }
    .cs_card:hover .cs_card_thumbnail img {
        transform: scale(1.05);
    }
    .cs_card_info {
        background-color: white;
        padding: 25px;
        border-radius: 0 0 10px 10px;
    }
    .cs_card_title {
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: 600;
    }
    .cs_card_title a {
        color: #333;
        text-decoration: none;
    }
    .cs_card_subtitle {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }
</style>

<!-- Testimonial Section -->
<section class="py-5" style="background-image: url('Assets/testimonialbg.jpg'); background-size: cover; background-position: center;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <h3 class="text-uppercase fw-semibold mb-2 text-primary">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="me-2">
          <path d="M11.9367 5.9528C12.1626 6.01733..."></path>
        </svg>
        آراء العملاء
      </h3>
      <h2 class="h1 mb-3">ماذا يقول عملاؤنا</h2>
      <p class="text-muted mt-2 w-75 mx-auto">
        "تعاملت مع مركز الصيانة لإصلاح تكييف منزلي في الخبر، كانت الخدمة سريعة والفني محترف جداً. الأسعار معقولة والضمان على العمل يبعث على الاطمئنان."
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Testimonial Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card testimonial-card text-center h-100">
          <div class="card-img-top-wrapper">
            <img src="images/images3.webp" alt="أحمد السليمان" class="rounded-circle mx-auto d-block testimonial-img">
          </div>
          <div class="card-body">
            <div class="text-warning mb-2">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <h5 class="fw-bold mb-1">أحمد السليمان</h5>
            <small class="text-muted d-block mb-3">حي الراكة - الخبر</small>
            <blockquote class="mb-0">
              <p class="fs-6">"أصلحوا لي غسالة أوتوماتيك خلال ساعتين فقط من الاتصال! الفني كان خبيراً وعرف العطل مباشرة. الأسعار مناسبة والخدمة ممتازة."</p>
            </blockquote>
          </div>
        </div>
      </div>

      <!-- Testimonial Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card testimonial-card text-center h-100">
          <div class="card-img-top-wrapper">
            <img src="images/2.webp" alt="نورة الفهد" class="rounded-circle mx-auto d-block testimonial-img">
          </div>
          <div class="card-body">
            <div class="text-warning mb-2">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <h5 class="fw-bold mb-1">نورة الفهد</h5>
            <small class="text-muted d-block mb-3">حي الحمراء - الدمام</small>
            <blockquote class="mb-0">
              <p class="fs-6">"مايكروويفي توقف عن العمل قبل مناسبة مهمة، فريق الصيانة وصل خلال ساعة وأصلحه بسرعة. شكراً لإنقاذ العزومة!"</p>
            </blockquote>
          </div>
        </div>
      </div>

      <!-- Testimonial Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card testimonial-card text-center h-100">
          <div class="card-img-top-wrapper">
            <img src="images/3.webp" alt="خالد الحربي" class="rounded-circle mx-auto d-block testimonial-img">
          </div>
          <div class="card-body">
            <div class="text-warning mb-2">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
            </div>
            <h5 class="fw-bold mb-1">خالد الحربي</h5>
            <small class="text-muted d-block mb-3">حي الجوهرة - الخبر</small>
            <blockquote class="mb-0">
              <p class="fs-6">"صيانة تكييف السبليت كانت ممتازة. الفني نظف الجهاز كاملاً وغير القطعة المعطوبة بسرعة. الأسعار معقولة مقارنة بمراكز أخرى."</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .testimonial-card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(3px);
    transition: transform 0.3s, box-shadow 0.3s;
    padding-top: 40px;
  }

  .testimonial-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 25px rgba(0,0,0,0.15);
  }

  .testimonial-img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #0d6efd;
    margin-top: -40px;
  }

  .testimonial-card blockquote p {
    font-style: italic;
    color: #333;
    position: relative;
    padding: 10px 20px;
  }

  .testimonial-card blockquote p::before {
    content: "“";
    font-size: 3rem;
    color: #0d6efd;
    position: absolute;
    top: -20px;
    right: 10px;
    opacity: 0.15;
    line-height: 1;
  }

  .testimonial-card h5 {
    color: #0d6efd;
  }

  .testimonial-card small {
    color: #6c757d;
  }

  @media (max-width: 576px) {
    .testimonial-img {
      width: 60px;
      height: 60px;
      margin-top: -30px;
    }
  }
</style>

<section class="py-5" style="background-image: url('Assets/processbg.jpg'); background-size: cover; background-position: center;">
  <div class="container py-5">
    <div class="text-center mb-5">
      <div class="d-flex justify-content-center align-items-center mb-3">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
          <path d="M11.9367 5.9528C12.1626 6.01733..."></path>
        </svg>
        <h6 class="text-uppercase mb-0">خدماتنا</h6>
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="ms-2">
          <path d="M11.9367 5.9528C12.1626 6.01733..."></path>
        </svg>
      </div>
      <h2 class="mb-4">خدمات الصيانة والإصلاح في الدمام والخبر</h2>
      <p class="lead">اتصل بنا: <a href="tel:0502085704">0502085704</a></p>
    </div>
    <div class="row g-4">
      
      <!-- Card 1 -->
      <div class="col-xl-3 col-md-6">
        <div class="service-card">
          <div class="service-card-body">
            <div class="service-card-img mb-4">
              <img src="images/ac-service.webp" loading="lazy" alt="صيانة مكيفات" class="img-fluid service-image">
            </div>
            <h5 class="mb-3">صيانة مكيفات</h5>
            <p>نقدم خدمات صيانة وإصلاح لجميع أنواع المكيفات بما في ذلك المكيفات الشباك والمكيفات السبليت باحترافية عالية في الدمام والخبر.</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-xl-3 col-md-6">
        <div class="service-card">
          <div class="service-card-body">
            <div class="service-card-img mb-4">
              <img src="images/washing-machine.webp" loading="lazy" alt="صيانة غسالات" class="img-fluid service-image">
            </div>
            <h5 class="mb-3">صيانة غسالات</h5>
            <p>إصلاح جميع أنواع الغسالات الأوتوماتيكية والعادية مع ضمان على قطع الغيار والعمل، خدمة سريعة في جميع أنحاء الدمام والخبر.</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-xl-3 col-md-6">
        <div class="service-card">
          <div class="service-card-body">
            <div class="service-card-img mb-4">
              <img src="images/oven.webp" loading="lazy" alt="صيانة أفران" class="img-fluid service-image">
            </div>
            <h5 class="mb-3">صيانة أفران</h5>
            <p>خدمات متكاملة لصيانة الأفران والمايكروويف بأسعار مناسبة، مع توفير قطع غيار أصلية وخدمة منزلية في المنطقة الشرقية.</p>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-xl-3 col-md-6">
        <div class="service-card">
          <div class="service-card-body">
            <div class="service-card-img mb-4">
              <img src="images/emergency.webp" loading="lazy" alt="خدمة طوارئ" class="img-fluid service-image">
            </div>
            <h5 class="mb-3">خدمة طوارئ</h5>
            <p>خدمة طوارئ على مدار الساعة لجميع الأجهزة الكهربائية المنزلية، استجابة سريعة في الدمام والخبر والمناطق المجاورة.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  .service-card {
    background-color: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: stretch;
  }

  .service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
  }

  .service-card-body {
    padding: 2rem;
    text-align: center;
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .service-card-img {
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
  }

  .service-image {
    max-width: 100px;
    max-height: 100px;
    width: auto;
    height: auto;
    transition: all 0.3s ease;
    object-fit: contain;
  }

  .service-card:hover .service-image {
    transform: scale(1.1);
  }

  .service-card h5 {
    color: #333;
    font-weight: 700;
    font-size: 1.2rem;
    margin-bottom: 1rem;
  }

  .service-card p {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 0;
    flex-grow: 1;
  }
</style>


@include('footer')


<style>
  .cta-section {
    margin-top: 40px;
    margin-bottom: 0;
    border-radius: 18px 18px 0 0;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0,0,0,0.18);
  }
  @media (max-width: 768px) {
    .cta-section {
      min-height: 180px;
      padding: 30px 10px;
    }
    .cta-section h2 {
      font-size: 1.3rem;
    }
    .cta-section p {
      font-size: 1rem;
    }
  }
</style>

 
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- WOW.js for animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
        new WOW().init();
    </script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.ba-container');
    const before = container.querySelector('.ba-before');
    const handle = container.querySelector('.ba-handle');

    const onMove = e => {
      const rect = container.getBoundingClientRect();
      const x = (e.touches ? e.touches[0].clientX : e.clientX) - rect.left;
      const pct = Math.max(0, Math.min(x, rect.width));
      before.style.width = pct + 'px';
      handle.style.left = pct + 'px';
    };
    handle.addEventListener('mousedown', () => {
      document.addEventListener('mousemove', onMove);
    });
    document.addEventListener('mouseup', () => {
      document.removeEventListener('mousemove', onMove);
    });
    // Touch events
    handle.addEventListener('touchstart', () => {
      document.addEventListener('touchmove', onMove);
    });
    document.addEventListener('touchend', () => {
      document.removeEventListener('touchmove', onMove);
    });
  });
</script>


    <script>
        // Initialize WOW.js
        new WOW().init();
        
        // Auto-rotate carousel every 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            var myCarousel = document.getElementById('heroCarousel');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 5000,
                ride: 'carousel'
            });
        });
    </script>
    <!-- Add this JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownElement = document.getElementById('servicesDropdown');
    const dropdownLink = document.getElementById('servicesDropdownLink');
    
    // Hover functionality
    dropdownElement.addEventListener('mouseenter', function() {
        const dropdown = new bootstrap.Dropdown(dropdownLink);
        dropdown.show();
    });
    
    dropdownElement.addEventListener('mouseleave', function() {
        const dropdown = bootstrap.Dropdown.getInstance(dropdownLink);
        dropdown.hide();
    });
    
    // Click functionality - navigate to services page
    dropdownLink.addEventListener('click', function(e) {
        // Only navigate if clicking directly on the main link (not when dropdown is open)
        if (!dropdownElement.classList.contains('show')) {
            window.location.href = this.href;
        }
    });
});
</script>

</body>
</html>