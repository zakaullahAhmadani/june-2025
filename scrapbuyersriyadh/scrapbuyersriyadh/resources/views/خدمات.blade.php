<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="images/scrap-buyers-riyadh-Logo-Final-1_1.webp"> 
      <title>
      خدمات
 &ndash; مشتري الخردة في الرياض</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Bootstrap RTL CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <!-- ✅ Font Awesome (optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    <style>
        .navbar-nav .nav-link {
            font-size: 1.1rem;
        }

        .lang-select {
            min-width: 150px;
        }

        .top-bar {
            background-color: #ffffff;
            border-bottom: 1px solid #dee2e6;
        }

        .main-navbar {
            background-color: #0099ff;
        }

        .main-navbar .nav-link {
            color: white !important;
        }

        .main-navbar .nav-link.active,
        .main-navbar .nav-link:hover {
            background-color: white !important;
            color: #0099ff !important;
            border-radius: 5px;
            padding: 6px 12px;
        }
        .logo-circle {
    height: 70px;
    width: 70px;
    object-fit: cover;
    border-radius: 50%; /* Makes the logo circular */
    border: 1px solid #0099ff; /* Optional: colored border */
}

.top-bar .container {
    align-items: flex-end !important; /* Bottom align */
    padding-left: 0 !important;       /* Remove left padding if needed */
}

.top-bar {
    padding-bottom: -20px;                /* Tight fit with bottom */
}
html, body {
    height: 100vh;
    width: 100vw;
    overflow-x: hidden;   /* Disable horizontal scroll */
    overflow-y: auto;     /* Enable vertical scroll */
    margin: 0;
    padding: 0;
    white-space: normal;
}

section {
    display: block;
    width: 100%;
    height: auto;         /* Allow section height to adjust based on content */
    padding: 20px;
    box-sizing: border-box;
}
 .testimonial-card {
            background: white;
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            text-align: center;
            direction: rtl;
            height: 100%;
        }
        .testimonial-card img {
            border-radius: 10px;
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .testimonial-card h4 {
            font-weight: bold;
            margin-top: 15px;
            font-size: 24px;
        }
        .stars {
            color: #000;
            font-size: 26px;
            margin-bottom: 10px;
        }
        .testimonial-card p {
            font-size: 18px;
            line-height: 1.8;
        }
        

    .lang-select {
        position: relative;
    }
    
    /* Hide all Google branding */
    .goog-te-gadget {
        color: transparent !important;
    }
    
    .goog-te-gadget-icon {
        display: none !important;
    }
    
    .goog-te-gadget-simple {
        background-color: transparent !important;
        border: none !important;
        padding: 0 !important;
    }
    
    /* Style the select box */
    .goog-te-combo {
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background: #f8f8f8;
        color:rgb(200, 36, 36);
        font-size: 14px;
    }

    </style>
</head>
<body>

   <!-- 🟦 Top Bar - Hidden on Mobile -->
<!-- 🟦 Top Bar - Hidden on Mobile -->
<div class="top-bar py-2 d-none d-lg-block">
    <div class="container d-flex justify-content-between align-items-center" style="direction: ltr;">
        <!-- Left: Logo - Empty on desktop (logo moved to navbar) -->
        <div class="logo-container" style="width: 120px;"></div>
        
        <!-- Right: Contact Info + Language Selector -->
        <div class="d-flex align-items-center gap-3">
            <div class="d-flex flex-column flex-md-row align-items-center gap-2">
                <div class="fw-bold">
                    <a href="tel:+966543282605" class="text-decoration-none text-dark">
                        <i class="fas fa-phone-alt me-2"></i> +966 54 328 2605
                    </a>
                </div>
                <div>
                    <a href="mailto:info@scrapbuyersriyadh.com" class="text-decoration-none text-dark">
                        <i class="fas fa-envelope me-2"></i> info@scrapbuyersriyadh.com
                    </a>
                </div>
            </div>
            <div id="google_translate_element" class="lang-select"></div>
        </div>
    </div>
</div>

<!-- 🟦 Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-2" dir="ltr">
    <div class="container d-flex justify-content-between align-items-center">
        
        <!-- Logo - Left side -->
         <a href="{{ url('/') }}" class="navbar-brand">
    <img src="images/scrap-buyers-riyadh-Logo-Final-1.png" alt="مشتري خردة الرياض" class="img-fluid fixed-bottom-left">
</a>
<style>

  
    .navbar {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .navbar .container {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .navbar-brand {
        margin: 0 !important;
        padding: 0 !important;
        height: 100%;
        display: flex;
        align-items: flex-end; /* Attach to bottom */
    }

    .navbar-brand img {
        margin: 0 !important;
        padding: 0 !important;
        display: block;
        height: 100%;
        max-height: 60px;
        object-fit: contain;
    }
</style>


        <!-- Toggle button for mobile -->
        <button class="navbar-toggler custom-toggler" type="button" 
                data-bs-toggle="collapse" data-bs-target="#mainNav" 
                aria-controls="mainNav" aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="toggler-bar top-bar"></span>
            <span class="toggler-bar middle-bar"></span>
            <span class="toggler-bar bottom-bar"></span>
        </button>

        <!-- Nav links - Right side -->
        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <ul class="navbar-nav mb-2 mb-lg-0 d-flex flex-column flex-lg-row gap-3">
                
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">
                        خدمات
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        معلومات عنا
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        اتصل بنا
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        الصفحة الرئيسية
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<style>
    /* Custom Toggler Styles */
    .custom-toggler {
        border: none;
        background: transparent;
        padding: 10px;
        position: relative;
    }
    
    .toggler-bar {
        display: block;
        width: 28px;
        height: 3px;
        margin: 6px auto;
        background-color: white;
        transition: all 0.3s ease-in-out;
        border-radius: 2px;
    }
    
    .navbar-toggler[aria-expanded="true"] .top-bar {
        transform: rotate(45deg) translate(5px, 5px);
    }
    
    .navbar-toggler[aria-expanded="true"] .middle-bar {
        opacity: 0;
    }
    
    .navbar-toggler[aria-expanded="true"] .bottom-bar {
        transform: rotate(-45deg) translate(6px, -6px);
    }
    
    /* Language Selector Styles */
    .lang-select {
        background: #f8f9fa;
        border-radius: 4px;
        padding: 5px 10px;
        border: 1px solid #ced4da;
        min-width: 150px;
    }
    
    .lang-select .goog-te-combo {
        width: 100%;
        padding: 8px 12px;
        border: none;
        background: transparent;
        color: #495057;
        font-size: 14px;
        cursor: pointer;
        outline: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 8px center;
        background-size: 16px;
    }
    
    /* Navbar Active State */
    .nav-link.active {
        font-weight: bold;
        position: relative;
    }
    
    .nav-link.active:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: white;
    }
    
    /* Mobile Menu Styles */
    @media (max-width: 991.98px) {
        .navbar-collapse {
            padding-top: 1rem;
        }
        
        .nav-link {
            padding: 0.75rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .nav-link:last-child {
            border-bottom: none;
        }
    }
</style>
    
    
<section class="hero-section position-relative text-white" style="background: url('images/5.webp') no-repeat center center / cover; min-height: 100vh;">
  <div class="overlay position-absolute w-100 h-100" style="background-color: rgba(0, 0, 0, 0.7); top: 0; left: 0; z-index: 0;"></div>

  <div class="container position-relative z-index-1 h-100 d-flex align-items-center">
    <div class="row w-100">
      <div class="col-12 text-center">
        <h2 class="hero-title mb-4 fw-bold text-warning" style="font-size: 2rem;">
          بيع جميع أنواع الخردة المعدنية
        </h2>
        <p class="hero-text mb-5 lead px-2 px-md-5" style="line-height: 1.8; font-size: 1rem;">
          نقوم بشراء جميع أنواع الخردة المعدنية: أسلاك الحديد، الأسلاك النحاسية، الألومنيوم، البطاريات المستخدمة، خردة تكييف الهواء.<br>
          نحن نشتري جميع أنواع الخردة المعدنية في المملكة العربية السعودية - الرياض، والمعادن والمواد غير الحديدية.<br>
          اتصل بنا للحصول على عرض أسعار <br>مخصص وخالي من المتاعب لمشروعك في السعودية - الرياض.
        </p>
        <div class="hero-buttons d-flex justify-content-center gap-4 flex-wrap">
  <a href="https://wa.me/+966543282605" class="btn btn-whatsapp" target="_blank">
    <i class="fab fa-whatsapp me-2"></i> WhatsApp
  </a>
  <a href="tel:+966543282605" class="btn btn-call">
    <i class="fas fa-phone-alt me-2"></i> Call Now
  </a>
</div><style>
  .btn-whatsapp {
  background-color: #25D366;
  color: white;
  padding: 0.75rem 2rem;
  font-weight: bold;
  font-size: 1.125rem;
  border: none;
  border-radius: 0.375rem;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.btn-whatsapp:hover {
  background-color: #1ebc5d;
  color: white;
}

.btn-call {
  background-color: #FFC107;
  color: black;
  padding: 0.75rem 2rem;
  font-weight: bold;
  font-size: 1.125rem;
  border: none;
  border-radius: 0.375rem;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.btn-call:hover {
  background-color: #e6ac00;
  color: black;
}

</style>

      </div>
    </div>
  </div>
</section>
<style>
  .hero-section {
  background-size: cover;
  background-position: center;
  min-height: 100vh;
  position: relative;
}

.hero-section .overlay {
  background-color: rgba(0, 0, 0, 0.7);
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  z-index: 0;
}

.z-index-1 {
  position: relative;
  z-index: 1;
}

.hero-buttons .btn {
  transition: all 0.3s ease;
}

.hero-buttons .btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
}

</style>


<br>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center mb-5">
                <h2 class="display-5 fw-bold text-primary mb-3">شراء سكراب حديد الرياض</h2>
                <p class="lead text-muted">
                    نحن متخصصون في شراء سكراب حديد الرياض بأسعار تنافسية وجودة عالية. فريقنا ملتزم بتقديم أفضل الخدمات لعملائنا بسرعة واحترافية كبيرة.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/hurda-demirr-1024x608.jpg" class="card-img-top" alt="نشتري السكراب" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">نشتري السكراب</h5>
                        <p class="card-text text-muted">
                            نقدم أفضل الأسعار لشراء جميع أنواع السكراب المعدني في الرياض. سواء كان حديد، ألومنيوم، نحاس أو معادن أخرى، نضمن لك تقييم عادل وسعر منافس.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/IMG_20240830_160515698-1536x1157.webp" class="card-img-top" alt="خردة الألومنيوم" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">خردة الألومنيوم</h5>
                        <p class="card-text text-muted">
                            نشتري خردة الألومنيوم بجميع أشكالها وأنواعها. سواء كان ألواح، أنابيب، أو مخلفات صناعية، نضمن لك أفضل سعر في السوق مع خدمة النقل المجاني للكميات الكبيرة.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/XXL_height_1.webp" class="card-img-top" alt="شراء السكراب حديد خردة بالرياض" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">شراء السكراب حديد خردة بالرياض</h5>
                        <p class="card-text text-muted">
                            متخصصون في شراء حديد الخردة بجميع أنواعه في الرياض. نقدم خدمة التقييم المجاني مع فريق متخصص يأتي إلى موقعك لتقديم أفضل عرض سعر.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/خردة جنوط الألومنيوم.jpg" class="card-img-top" alt="خردة جنوط الألومنيوم" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">خردة جنوط الألومنيوم</h5>
                        <p class="card-text text-muted">
                            نشتري جنوط الألومنيوم المستعملة والمتضررة بأسعار مميزة. سواء كانت جنوط سيارات أو شاحنات، نضمن لك تقييم دقيق وسعر عادل حسب النوع والوزن.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/5.webp" class="card-img-top" alt="سكراب ألمنيوم" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">سكراب ألمنيوم</h5>
                        <p class="card-text text-muted">
                            نقدم أسعار تنافسية لشراء سكراب الألومنيوم بأنواعه المختلفة. سواء كان ألومنيوم نقي أو خليط، لدينا الخبرة في التقييم الدقيق والوزن الصحيح.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/6.webp" class="card-img-top" alt="خردة الكمبيوتر" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">خردة أجهزة الكمبيوتر</h5>
                        <p class="card-text text-muted">
                            نشتري مكونات الكمبيوتر القديمة والمعطلة بأسعار مناسبة. سواء كانت لوحات أم، معالجات، أو كروت شاشة، نضمن التخلص الآمن مع الحصول على أفضل سعر.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/7.jpg" class="card-img-top" alt="خردة المحركات الكهربائية" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">خردة المحركات الكهربائية للمضخات</h5>
                        <p class="card-text text-muted">
                            نشتري المحركات الكهربائية المستعملة والمتوقفة عن العمل. سواء كانت لمضخات المياه أو المعدات الصناعية، نقدم تقييم فني دقيق وأسعار تنافسية.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/8.jpg" class="card-img-top" alt="خردة المواد الحديدية" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">خردة المواد الحديدية</h5>
                        <p class="card-text text-muted">
                            متخصصون في شراء جميع أنواع الخردة الحديدية. سواء كانت أنابيب، ألواح، أو هياكل معدنية، نضمن لك أفضل الأسعار مع خدمة النقل المجاني.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/9.jpg" class="card-img-top" alt="قصاصة من لوح الكسوة" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">قصاصة من لوح الكسوة</h5>
                        <p class="card-text text-muted">
                            نشتري بقايا وألواح الكسوة المعدنية المستعملة. سواء كانت ألومنيوم أو حديد، نقدم تقييم دقيق حسب النوع والسمك والكمية المتوفرة.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 10 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/10.jpg" class="card-img-top" alt="خردة بطارية الرصاص" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">خردة بطارية الرصاص</h5>
                        <p class="card-text text-muted">
                            نشتري بطاريات الرصاص المستعملة بجميع أحجامها. نضمن التخلص الآمن بيئياً مع تقديم أفضل الأسعار حسب الوزن والحالة.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 11 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/11.jpg" class="card-img-top" alt="قصاصة من المبرد" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">قصاصة من المبرد</h5>
                        <p class="card-text text-muted">
                            نشتري مخلفات وأنابيب المبردات النحاسية والألومنيوم. نقدم أسعار تنافسية حسب النوع والكمية مع خدمة الفك والنقل المتخصص.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 12 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/12.jpg" class="card-img-top" alt="سكراب الرياض شراء" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">سكراب الرياض شراء</h5>
                        <p class="card-text text-muted">
                            نشتري جميع أنواع السكراب في الرياض بأسعار تنافسية. سواء كان معدني أو كهربائي أو صناعي، نضمن لك أفضل خدمة وأعلى سعر في السوق.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 13 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/13.jpg" class="card-img-top" alt="شراء خردة المعادن" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">شراء خردة المعادن في الرياض</h5>
                        <p class="card-text text-muted">
                            متخصصون في شراء جميع أنواع خردة المعادن في الرياض. سواء كان نحاس، ألومنيوم، حديد أو معادن أخرى، نقدم خدمة شاملة من التقييم حتى النقل.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 14 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/14.jpg" class="card-img-top" alt="خردة النحاس" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">خردة النحاس</h5>
                        <p class="card-text text-muted">
                            نشتري خردة النحاس بجميع أنواعها (أسلاك، أنابيب، لوحات). نضمن أفضل سعر في السوق حسب النقاوة والكمية مع خدمة التقييم الفوري.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>

            <!-- Card 15 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="images/15.jpg" class="card-img-top" alt="خردة المواد الكهربائية" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">خردة المواد الكهربائية</h5>
                        <p class="card-text text-muted">
                            نشتري المخلفات الكهربائية والإلكترونية بجميع أنواعها. سواء كانت كابلات، محولات، أو أجهزة كهربائية، نضمن التخلص الآمن وأفضل سعر.
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="tel:+966543282605" class="btn btn-primary w-100">اتصل بنا</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <nav class="mt-5" aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">السابق</a>
                </li>
                <li class="page-item active"><a class="page-link" href="/">1</a></li>
                <li class="page-item"><a class="page-link" href="/">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="/">التالي</a>
                </li>
            </ul>
        </nav>
    </div>
</section>


<!-- Contact Section -->
<section class="contact-section bg-primary text-white py-5">
    <div class="container">
        <div class="row g-4 text-center">
            <!-- Email Card -->
            <div class="col-md-4">
                <div class="card bg-primary text-white border-0 h-100 shadow-sm">
                    <div class="card-body d-flex flex-column align-items-center">
                        <i class="fas fa-envelope fa-2x mb-3"></i>
                        <p class="mb-0">
                            <a href="mailto:info@scrapbuyersriyadh.com" class="text-white text-decoration-none">
                                info@scrapbuyersriyadh.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Phone Card -->
            <div class="col-md-4">
                <div class="card bg-primary text-white border-0 h-100 shadow-sm">
                    <div class="card-body d-flex flex-column align-items-center">
                        <i class="fas fa-phone fa-2x mb-3"></i>
                        <p class="mb-0 fw-bold" dir="ltr"
>
                            <a href="tel:+966543282605" class="text-white text-decoration-none">
                                +966 54 328 2605
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Location Card -->
            <div class="col-md-4">
                <div class="card bg-primary text-white border-0 h-100 shadow-sm">
                    <div class="card-body d-flex flex-column align-items-center">
                        <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
                        <p class="mb-0">جدة، الرياض</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer" dir="ltr">
    <!-- Main Footer Content -->
    <div class="footer-main" style="background-color: #2c3e50; color: #fff; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <!-- Logo and Social -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" style="margin-left: -10px;">
                   <img src="images/scrap-buyers-riyadh-Logo-Final-1.png" 
     alt="scrap-buyers-riyadh-Logo" 
     class="footer-logo" 
     style="max-height: 60px; margin-bottom: 20px; margin-right: 7px">
                    <div class="social-icons mb-4">
                        <a href="#" class="social-icon" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: #34495e; border-radius: 50%; margin-right: 10px; color: #fff; transition: all 0.3s;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: #34495e; border-radius: 50%; margin-right: 10px; color: #fff; transition: all 0.3s;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: #34495e; border-radius: 50%; margin-right: 10px; color: #fff; transition: all 0.3s;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: #34495e; border-radius: 50%; margin-right: 10px; color: #fff; transition: all 0.3s;">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- About Company -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="footer-title" style="font-size: 1.1rem; font-weight: 600; margin-bottom: 20px;">About Company</h5>
                    <p style="color: #ecf0f1;"> نقوم بشراء جميع أنواع الخردة المعدنية: أسلاك الحديد، الأسلاك النحاسية، الألومنيوم، البطاريات المستخدمة، خردة تكييف الهواء. نحن نشتري جميع أنواع الخردة المعدنية في المملكة العربية السعودية - الرياض، والمعادن والمواد غير الحديدية.</p>
                </div>

                <!-- Services -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="footer-title" style="font-size: 1.1rem; font-weight: 600; margin-bottom: 20px;">Services</h5>
                    <ul class="list-unstyled footer-links">
                        <li style="margin-bottom: 10px;">
                            <a href="tel:+966 54 328 2605" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">
                                <i class="fas fa-arrow-right icon" style="margin-right: 8px; color: #3498db;"></i>شراء سكراب حديد الرياض

                            </a>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <a href="tel:+966 54 328 2605" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">
                                <i class="fas fa-arrow-right icon" style="margin-right: 8px; color: #3498db;"></i>شراء خردة الألومنيوم

                            </a>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <a href="tel:+966 54 328 2605" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">
                                <i class="fas fa-arrow-right icon" style="margin-right: 8px; color: #3498db;"></i>شراء النحاس المستعمل
                            </a>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <a href="tel:+971529586501" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">
                                <i class="fas fa-arrow-right icon" style="margin-right: 8px; color: #3498db;"></i>شراء البطاريات المستعملة
                            </a>
                        </li>
                         <!-- <li style="margin-bottom: 10px;">
                            <a href="tel:+971529586501" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">
                                <i class="fas fa-arrow-right icon" style="margin-right: 8px; color: #3498db;"></a>شراء أجهزة التكييف الخردة
                            </a>
                        </li> -->
                    </ul>
                </div>

                <!-- Support -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title" style="font-size: 1.1rem; font-weight: 600; margin-bottom: 20px;">Support</h5>
                    <ul class="list-unstyled footer-links">
                        <li style="margin-bottom: 10px;">
                            <a href="" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">
                                <i class="fas fa-arrow-right icon" style="margin-right: 8px; color: #3498db;"></i>الصفحة الرئيسية
                            </a>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <a href="" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">
                                <i class="fas fa-arrow-right icon" style="margin-right: 8px; color: #3498db;"></i>عن الشركة
                            </a>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <a href="" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">
                                <i class="fas fa-arrow-right icon" style="margin-right: 8px; color: #3498db;"></i>خدماتنا
                            </a>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <a href="" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">
                                <i class="fas fa-arrow-right icon" style="margin-right: 8px; color: #3498db;"></i>اتصل بنا
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
   <div class="copyright" style="background-color: #2c3e50; color: #bdc3c7; padding: 20px 0;">
    <div class="container">
        <div class="row justify-content-center"> <!-- Changed to justify-content-center -->
            <div class="col-12 text-center"> <!-- Changed to col-12 and text-center -->
                <p class="mb-0">Copyright © 2025 All rights reserved. Developed by 
                    <a href="https://innovative-technologies.net/" style="color: #00ff00; font-weight: bold; text-decoration: none;">Innovative Technologies</a>
                </p>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</footer>

<!-- Fixed Call/WhatsApp Buttons -->
<div class="fixed-bottom d-flex justify-content-between p-3" style="z-index: 1000;" dir="ltr">
    <!-- Call Button - Left Side -->
    <a href="tel:+966543282605" class="btn btn-success rounded-circle shadow-lg" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
        <i class="fas fa-phone-alt fa-lg text-white"></i>
    </a>
    
    <!-- WhatsApp Button - Right Side -->
    <a href="https://wa.me/966543282605" class="btn btn-success rounded-circle shadow-lg" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
        <i class="fab fa-whatsapp fa-lg text-white"></i>
    </a>
</div>


    <!-- ✅ Google Translate Script -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,ar',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
       
    </script>
<script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggler = document.querySelector('.navbar-toggler');
        const closeIcon = toggler.querySelector('.close-icon');
        const defaultIcon = toggler.querySelector('.default-icon');
        const collapse = document.getElementById('mainNav');

        collapse.addEventListener('show.bs.collapse', function () {
            defaultIcon.style.display = 'none';
            closeIcon.style.display = 'block';
        });

        collapse.addEventListener('hide.bs.collapse', function () {
            defaultIcon.style.display = 'block';
            closeIcon.style.display = 'none';
        });
    });
</script>

</script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- ✅ Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
