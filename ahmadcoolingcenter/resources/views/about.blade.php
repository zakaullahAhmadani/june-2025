<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>about &amp;Ahmad cooling center 
</title>
    <link rel="icon" href="images/cropped-WhatsApp-Image-2025-05-16-at-5.44.02-PM-32x32.jpeg" type="image/png" sizes="32x32">
    
    <!-- Recommended favicon sizes (optional but better for different devices) -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Animate.css for wow effects -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        html, body {
    max-width: 100%;
    overflow-x: hidden;
}

/* Optional: Ensure all elements stay within viewport */
.container, .container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.navbar-top {
  background-color: #050b23;
  color: #fff;
  font-size: 0.9rem;
  padding: 0.4rem 20px; /* Reduced padding for smaller height */
}

/* Center content in the top bar */
.navbar-top .contact-center {
  flex: 1;
  display: flex;
  justify-content: center;
  gap: 2rem;
}

.navbar-top a {
  color: #fff;
  text-decoration: none;
  margin-left: 1rem;
}

/* ☑️ Main Navbar - Increased Height */
.navbar-main {
  background-color: #f8f9fa;
  padding: 1.5rem 30px; /* Increased padding for height */
   box-shadow: inset 0 -2px 0 #050b23;  /* Bottom black line (like black border) */
  position: relative;
  z-index: 10;
}

/* Navigation links */
.navbar-main .nav-link {
  color: #0e1d40;
  font-weight: 500;
  margin: 0 0.5rem;
  padding-bottom: 4px;
}

.navbar-main .nav-link:hover,
.navbar-main .nav-link:focus {
  color: #003d5c;
}

/* ☑️ Book Now Button */
.book-btn {
  background-color: #003d5c;
  color: #fff;
  font-weight: 600;
  padding: 0.5rem 1.25rem;
  border-radius: 0.25rem;
}

.book-btn:hover {
  background-color: #00557a;
  color: #fff;
}

.book-btn .bi {
  font-size: 1.1rem;
  vertical-align: middle;
  margin-left: 0.25rem;
}

/* ☑️ Logo Styling */
.faj-logo {
  height: 140px;
  width: auto;
  object-fit: contain;
  padding: 0;
  margin: 0;
  display: block;
  position: relative;
  top: -20px;
}

/* ☑️ Responsive Logo */
@media (max-width: 768px) {
 .navbar-collapse {
    background-color: #000 !important; /* Set background color to black */
  }

  .navbar-nav .nav-link {
    color: #fff !important; /* Make the menu links white for contrast */
  }
  .faj-logo {
    height: 100px;         /* Not too small like 50px */
    width: auto;
    top: -10px;
    margin: 0;
    padding: 0;
    object-fit: contain;
    display: block;
        background-color: #000 !important;

  }
}

        .cs_hero {
            min-height: 80vh;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            position: relative;
            padding: 80px 0;
        }
        
        .cs_hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .cs_hero_text {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
        }
        
        .cs_hero_title {
            font-weight: 700;
            line-height: 1.2;
        }
        
        .cs_hero_subtitle {
            font-size: 1.2rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cs_hero_btns {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        
        .cs_btn {
            display: inline-flex;
            align-items: center;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .cs_btn.cs_style_1 {
            background-color: #fff;
            color: #333;
        }
        
        .cs_btn.cs_style_1:hover {
            background-color: #f8f9fa;
            transform: translateY(-3px);
        }
        
        .cs_btn i {
            margin-left: 8px;
        }
        
        .cs_hero_number {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .cs_hero_number_icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .cs_hero_number a {
            color: white;
            text-decoration: none;
        }
        
        /* Slider dots customization */
        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 5px;
            border: none;
            background-color: rgba(255, 255, 255, 0.5);
        }
        
        .carousel-indicators .active {
            background-color: white;
        }
        .btn1 {
  margin-left: 10px;
}
.text1 {
  margin-left: 10px;
}
.text2 {
  margin-left: 10px;
}

    </style>
</head>
<body>
   @include('nav')

   <div class="cs_site_header_spacing_140"></div>
   <section class="hero-section d-flex align-items-center justify-content-center text-center text-white" style="
    background: url('{{ asset('images/washing-machine-repair-jeddah.webp') }}') center center / cover no-repeat;
    height: 400px;
    position: relative;
">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="container position-relative">
        <h1 class="display-4 fw-bold">من نحن</h1>
        <nav aria-label="breadcrumb" class="d-flex justify-content-center mt-3">
            <ol class="breadcrumb bg-transparent p-0 m-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-white text-decoration-none">الرئيسية</a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">من نحن</li>
            </ol>
        </nav>
    </div>
</section>
</div>
   <div class="cs_site_header_spacing_140"></div>

   <section class="cs_about cs_style_1 position-relative py-5" style="direction: rtl;">
    <div class="container">
        <div class="row g-4 align-items-center">
            <!-- Right Column - Images (swapped for RTL) -->
            <div class="col-lg-6">
                <div class="position-relative">
                    <!-- Image Grid -->
                    <div class="row g-3">
                        <div class="col-md-8">
                            <div class="cs_about_thumbnail overflow-hidden rounded-3">
                                <img src="images/refrigerator-repair-jeddah.jpg" loading="lazy" alt="صيانة ثلاجات جدة" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-md-4" style="padding-top: 10px;">
                            <div class="cs_about_thumbnail overflow-hidden rounded-3">
                                <img src="images/washing-machine-repair-jeddah.webp" loading="lazy" alt="تصليح غسالات جدة" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="cs_about_thumbnail overflow-hidden rounded-3">
                                <img src="images/oven-repair-jeddah1.webp" loading="lazy" alt="صيانة افران جدة" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>

                    <!-- Phone Call -->
                    <div class="position-absolute top-0 start-0 d-flex align-items-center bg-white p-3 rounded-pill shadow-sm" style="transform: translateY(-50%);">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="ms-3">
                            <a href="tel:+966530419926" class="text-dark fw-semibold text-decoration-none">+966530419926</a>
                        </div>
                    </div>

                    <!-- Gear Shapes -->
                    <style>
                        @keyframes gear-rotate {
                            0% { transform: rotate(0deg); }
                            100% { transform: rotate(360deg); }
                        }
                        .gear-animation {
                            animation: gear-rotate linear infinite;
                            transform-origin: center center;
                        }
                    </style>
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
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                <!-- SVG path remains unchanged -->
                            </svg>
                            من نحن
                        </span>
                        <h2 class="display-5 fw-bold mb-3 wow fadeInUp">صيانة ثلاجات جدة</h2>
                    </div>

                    <!-- Description -->
                    <p class="lead mb-4">نقدم خدمات صيانة وإصلاح متكاملة للأجهزة المنزلية في جدة. فريقنا من الفنيين المتخصصين مؤهل لتصليح جميع أنواع الثلاجات والغسالات والأفران باحترافية عالية، مع ضمان على قطع الغيار والعمل.</p>

                    <!-- Features List -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0 bg-light p-3 rounded-3 me-3 img-container-hover">
                                    <img src="images/refrigerator-icon.webp" loading="lazy" 
                                         alt="صيانة ثلاجات" width="40" class="img-hover-animate">
                                </div>
                                <div>
                                    <h3 class="h5 mb-0">صيانة ثلاجات سامسونج</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0 bg-light p-3 rounded-3 me-3 img-container-hover">
                                    <img src="images/washing-machine-icon" loading="lazy" 
                                         alt="تصليح غسالات" width="40" class="img-hover-animate">
                                </div>
                                <div>
                                    <h3 class="h5 mb-0">تصليح غسالات</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Check List -->
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2 d-flex align-items-start">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px; flex-shrink: 0;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span>فني ثلاجات جدة متخصص</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px; flex-shrink: 0;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span>إصلاح جميع أعطال الغسالات الأوتوماتيك</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px; flex-shrink: 0;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span>صيانة افران جدة باحترافية</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px; flex-shrink: 0;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span>استخدام قطع غيار أصلية</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px; flex-shrink: 0;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span>خدمة سريعة في جميع أنحاء جدة</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px; flex-shrink: 0;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span>ضمان على الصيانة والإصلاح</span>
                        </li>
                    </ul>

                    <!-- Button -->
                    <a href="https://api.whatsapp.com/send?phone=+966530419926" class="btn btn-primary px-4 py-2 rounded-pill d-inline-flex align-items-center wow fadeInLeft">
                        <span class="me-2">اتصل الآن</span>
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
   <!-- Testimonial Section -->
<section class="py-4" style="background-image: url('Assets/testimonialbg.jpg'); background-size: cover; background-position: center;">
  <div class="container py-4">
    <div class="text-center mb-4">
      <h3 class="text-uppercase fw-semibold mb-2 text-primary">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="me-2">
          <path d="M11.9367 5.9528C12.1626 6.01733..."></path>
        </svg>
        آراء العملاء
      </h3>
      <h2 class="h1 mb-0">ماذا يقول عملاؤنا</h2>
      <p class="text-muted mt-2">"تعطلت ثلاجتي فجأة واتصلت بمركز أحمد للتبريد. وصل الفني بسرعة وقام بتصليح ثلاجتي بكفاءة عالية. شكرًا لفريق العمل المحترف على خدمتهم الممتازة!"</p>
    </div>

    <div class="row g-3 justify-content-center">
      <!-- Testimonial 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm testimonial-card">
          <div class="card-body p-3">
            <div class="d-flex align-items-center mb-3">
              <img src="images/1.jpg" loading="lazy" alt="أحمد محمد" class="rounded-circle me-3" width="50">
              <div>
                <div class="text-warning mb-0">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="mb-0 fs-6">أحمد محمد</h5>
                <small class="text-muted">حي الحمدانية</small>
              </div>
            </div>
            <blockquote class="mb-0">
              <p class="fs-6 mb-0">"كانت غسالتي لا تعمل بشكل صحيح. فني تصليح غسالات من المركز أصلحها في نفس اليوم واستخدم قطع غيار أصلية. الخدمة كانت سريعة والاسعار معقولة. أوصي بهم بشدة!"</p>
            </blockquote>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm testimonial-card">
          <div class="card-body p-3">
            <div class="d-flex align-items-center mb-3">
              <img src="images/2.jpg" loading="lazy" alt="سارة عبدالله" class="rounded-circle me-3" width="50">
              <div>
                <div class="text-warning mb-0">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="mb-0 fs-6">سارة عبدالله</h5>
                <small class="text-muted">حي السلامة</small>
              </div>
            </div>
            <blockquote class="mb-0">
              <p class="fs-6 mb-0">"فني ثلاجات جدة من المركز أصلح ثلاجتي سامسونج بسرعة واحترافية. الأسعار واضحة وشفافة بدون مفاجآت. شكرًا لخدمة صيانة ثلاجات سامسونج جدة الممتازة!"</p>
            </blockquote>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm testimonial-card">
          <div class="card-body p-3">
            <div class="d-flex align-items-center mb-3">
              <img src="images/3.jpg" loading="lazy" alt="خالد الحربي" class="rounded-circle me-3" width="50">
              <div>
                <div class="text-warning mb-0">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="mb-0 fs-6">خالد الحربي</h5>
                <small class="text-muted">حي النزهة</small>
              </div>
            </div>
            <blockquote class="mb-0">
              <p class="fs-6 mb-0">"فرن بيتي توقف عن العمل. فريق صيانة افران جدة أصلحه في نفس اليوم وكان أداؤهم ممتازًا. الأسعار معقولة والخدمة سريعة. بالتأكيد سأتعامل معهم مرة أخرى!"</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .testimonial-card {
    transition: all 0.3s ease;
    border-radius: 8px;
    overflow: hidden;
  }
  .testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  .card-body {
    padding: 1.25rem;
  }
  blockquote p {
    position: relative;
    padding-left: 1.5rem;
    font-style: italic;
  }
  blockquote p:before {
    content: '"';
    position: absolute;
    right: 0;
    top: 0;
    font-size: 2rem;
    line-height: 1;
    color: rgba(0,0,0,0.1);
  }
</style>


   
@include('footer')

 
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