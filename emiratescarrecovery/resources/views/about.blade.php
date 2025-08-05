<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Emirates Car Recovery &amp; Towing Services</title>
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
    background: url('{{ asset('images/WhatsApp Image 2025-06-30 at 11.02.16_182c057c.jpg') }}') center center / cover no-repeat;
    height: 400px;
    position: relative;
">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="container position-relative">
        <h1 class="display-4 fw-bold">About Us</h1>
        <nav aria-label="breadcrumb" class="d-flex justify-content-center mt-3">
            <ol class="breadcrumb bg-transparent p-0 m-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</section>
</div>
   <div class="cs_site_header_spacing_140"></div>

     <section class="cs_about cs_style_1 position-relative py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <!-- Left Column - Images -->
            <div class="col-lg-6">
                <div class="position-relative">
                    <!-- Image Grid -->
                    <div class="row g-3">
                        <div class="col-md-8">
                            <div class="cs_about_thumbnail overflow-hidden rounded-3">
                                <img src="images/WhatsApp Image 2025-06-30 at 11.02.16_86d818de.jpg" loading="lazy" alt="About Image" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-md-4" style="padding-top: 10px;">
                            <div class="cs_about_thumbnail overflow-hidden rounded-3 " >
                                <img src="images/WhatsApp Image 2025-06-30 at 11.02.16_32a4f6db.jpg" loading="lazy" alt="About Image" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="cs_about_thumbnail overflow-hidden rounded-3">
                                <img src="images/WhatsApp Image 2025-06-30 at 11.02.15_fd191ede.jpg" loading="lazy" alt="About Image" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>

                    <!-- Experience Badge -->
                  
                    <!-- Phone Call -->
                    <div class="position-absolute top-0 end-0 d-flex align-items-center bg-white p-3 rounded-pill shadow-sm" style="transform: translateY(-50%);">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="ms-3">
                            <a href="tel:+971566530614" class="text-dark fw-semibold text-decoration-none"> +971566530614</a>
                        </div>
                    </div>
                      <!-- <div class="position-absolute bottom-0 start-0 bg-white p-4 rounded-3 shadow-sm" style="width: 250px; transform: translate(50%, -20%);">
                        <h2 class="mb-0 text-dark">
                            <span class="d-block fs-1 fw-bold">FAJ</span>
                            <span class="d-block fs-5">was established</span>
                            <span class="d-block fs-3">Since</span>
                            <span class="d-block fs-1 fw-bold">2010</span>
                        </h2>
                        <p class="mb-0">We are committed to delivering top-notch technical services that meet the highest international standards for exceptional quality.</p>
                    </div> -->


                    <!-- Gear Shapes -->
                     <style>
    /* Smooth gear rotation */
    @keyframes gear-rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .gear-animation {
        animation: gear-rotate linear infinite;
        transform-origin: center center;
        will-change: transform; /* Optimizes animation */
    }
</style>
                  <div class="position-absolute" style="top: 20%; left: -5%; z-index: -1;">
    <img src="Assets/gear_2.svg" loading="lazy" alt="Gear Shape" width="80" 
         class="gear-animation" style="animation-duration: 3s;">
</div>

<!-- Second gear (slower, reverse rotation) -->
<div class="position-absolute" style="bottom: 10%; right: -5%; z-index: -1;">
    <img src="Assets/gear_1.svg" loading="lazy" alt="Gear Shape" width="80" 
         class="gear-animation" style="animation-duration: 6s; animation-direction: reverse;">
</div>
                </div>
            </div>

            <!-- Right Column - Content -->
            <div class="col-lg-6">
                <div class="ps-lg-5">
                    <!-- Section Heading -->
                    <div class="mb-4">
                        <span class="d-flex align-items-center text-uppercase text-primary fw-bold mb-2 wow fadeInDown">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                <path d="M11.9367 5.9528C12.1626 6.01733 12.3783 6.07787 12.7693 6.07787C13.5946 6.07787 14.4218 5.73787 15.0389 5.1208C15.8285 4.33093 16.1661 3.19973 15.9199 2.16827C15.9089 2.12215 15.8858 2.07981 15.8529 2.04563C15.82 2.01146 15.7786 1.98668 15.733 1.97387C15.6874 1.96077 15.6391 1.96016 15.5931 1.97213C15.5472 1.98409 15.5053 2.00818 15.4719 2.04187L14.8413 2.67253C14.6394 2.87413 14.3706 2.98533 14.0839 2.98533C13.7973 2.98533 13.5285 2.8744 13.3269 2.67253C13.1262 2.47155 13.0136 2.19918 13.0136 1.9152C13.0136 1.63122 13.1262 1.35885 13.3269 1.15787L13.9573 0.527466C13.9909 0.493964 14.015 0.452081 14.027 0.406152C14.039 0.360223 14.0385 0.311916 14.0256 0.266232C14.0127 0.220547 13.9878 0.179144 13.9535 0.146308C13.9192 0.113471 13.8768 0.0903949 13.8306 0.0794661C12.7991 -0.166934 11.6682 0.170933 10.8783 0.960533C10.1042 1.7344 9.71058 2.888 10.0463 4.06267L7.99858 6.11013L5.95218 4.06373C6.28712 2.89093 5.89565 1.73573 5.12018 0.960533C4.33058 0.170666 3.19938 -0.167467 2.16818 0.0794661C2.12214 0.0906185 2.07989 0.113812 2.04576 0.146671C2.01163 0.179529 1.98685 0.220871 1.97396 0.266459C1.96107 0.312048 1.96054 0.360243 1.97241 0.406108C1.98428 0.451972 2.00813 0.493855 2.04152 0.527466L2.67192 1.15787C2.87254 1.35885 2.98522 1.63122 2.98522 1.9152C2.98522 2.19918 2.87254 2.47155 2.67192 2.67253C2.47032 2.8744 2.20152 2.98533 1.91485 2.98533C1.62818 2.98533 1.35938 2.87413 1.15752 2.67253L0.527118 2.0416C0.493597 2.00804 0.451734 1.98404 0.405844 1.97205C0.359953 1.96007 0.311697 1.96054 0.26605 1.97342C0.220403 1.9863 0.179016 2.01112 0.146158 2.04532C0.113299 2.07952 0.0901572 2.12187 0.079118 2.168C-0.167015 3.19947 0.170585 4.33067 0.960185 5.12053C1.57778 5.73787 2.40552 6.07813 3.22952 6.07813C3.61965 6.07813 3.85512 6.012 4.06312 5.95227L6.10978 7.99867L4.06232 10.0461C2.89138 9.71227 1.73725 10.1013 0.960185 10.8781C0.170585 11.668 -0.167015 12.7992 0.079118 13.8307C0.0901342 13.8768 0.113271 13.9191 0.146136 13.9533C0.179001 13.9875 0.2204 14.0123 0.266051 14.0251C0.358851 14.0509 0.458851 14.0251 0.527118 13.9571L1.15778 13.3264C1.35886 13.1261 1.63114 13.0136 1.91498 13.0136C2.19883 13.0136 2.47111 13.1261 2.67218 13.3264C2.87405 13.5283 2.98498 13.7973 2.98498 14.0837C2.98498 14.3701 2.87378 14.6392 2.67218 14.8411L2.04178 15.4715C2.00815 15.505 1.98407 15.5469 1.97205 15.5928C1.96004 15.6387 1.96051 15.687 1.97343 15.7327C1.98634 15.7784 2.01123 15.8198 2.04552 15.8526C2.07981 15.8855 2.12225 15.9085 2.16845 15.9195C2.39138 15.9728 2.61912 15.9987 2.84685 15.9987C3.67272 15.9987 4.50178 15.6576 5.12072 15.0384C5.89485 14.2645 6.28845 13.1109 5.95272 11.9363L8.00045 9.8888L10.0469 11.9352C9.71192 13.108 10.1034 14.2632 10.8789 15.0384C11.4981 15.6573 12.3269 15.9987 13.1527 15.9987C13.3805 15.9987 13.6082 15.9728 13.8311 15.9195C13.8772 15.9083 13.9194 15.8851 13.9535 15.8523C13.9877 15.8194 14.0124 15.7781 14.0253 15.7325C14.0382 15.6869 14.0388 15.6387 14.0269 15.5928C14.015 15.547 13.9912 15.5051 13.9578 15.4715L13.3274 14.8411C13.1255 14.6392 13.0146 14.3701 13.0146 14.0837C13.0146 13.7973 13.1258 13.5283 13.3274 13.3264C13.5285 13.1261 13.8007 13.0136 14.0846 13.0136C14.3684 13.0136 14.6407 13.1261 14.8418 13.3264L15.4725 13.9571C15.506 13.9905 15.5479 14.0143 15.5938 14.0262C15.6396 14.0381 15.6878 14.0376 15.7334 14.0247C15.779 14.0119 15.8203 13.9871 15.8532 13.953C15.886 13.9189 15.9093 13.8767 15.9205 13.8307C16.1666 12.7992 15.829 11.668 15.0394 10.8781C14.2663 10.1053 13.1109 9.70933 11.9365 10.0464L9.88978 8L11.9373 5.95253L11.9367 5.9528ZM11.2557 1.33733C11.7741 0.819199 12.465 0.533066 13.1506 0.533066H13.1967L12.9498 0.780266C12.6463 1.08373 12.4791 1.4864 12.4791 1.91467C12.4791 2.34293 12.6463 2.7456 12.9498 3.04907C13.2533 3.35253 13.6551 3.51813 14.0842 3.51813C14.5133 3.51813 14.9159 3.35147 15.2186 3.04907L15.4655 2.80187C15.4786 3.50293 15.1917 4.21333 14.6618 4.7432C14.0042 5.4008 13.0666 5.68293 12.2095 5.4784C11.7917 5.38533 11.425 5.18373 11.1202 4.87867C10.8154 4.5736 10.6133 4.20693 10.5194 3.78507C10.3159 2.93253 10.5981 1.9944 11.2557 1.3368V1.33733ZM3.78578 5.48C2.93325 5.68373 1.99512 5.40133 1.33752 4.74373C0.807651 4.21387 0.520718 3.50347 0.533785 2.8024L0.780718 3.0496C1.08338 3.352 1.48632 3.51867 1.91512 3.51867C2.34392 3.51867 2.74712 3.352 3.04925 3.0496C3.35272 2.74613 3.51992 2.34347 3.51992 1.9152C3.51992 1.48693 3.35272 1.08427 3.04925 0.780799L2.80232 0.533599C3.51058 0.525866 4.21352 0.807733 4.74365 1.3376C5.40125 1.9952 5.68338 2.93307 5.47912 3.78987C5.38632 4.20747 5.18445 4.57387 4.87912 4.8792C4.57378 5.18453 4.20765 5.38587 3.78578 5.48ZM4.60365 5.73867C4.84373 5.61088 5.06362 5.44832 5.25618 5.25627C5.44814 5.06361 5.61068 4.84374 5.73858 4.60373L7.62205 6.48693L6.48712 7.62187L4.60365 5.73867ZM4.74365 14.6621C4.21378 15.1917 3.51192 15.4752 2.80232 15.4661L3.04925 15.2189C3.35165 14.9163 3.51832 14.5133 3.51832 14.0845C3.51832 13.6557 3.35165 13.2528 3.04925 12.9501C2.74823 12.6497 2.3403 12.4809 1.91498 12.4809C1.48967 12.4809 1.08174 12.6497 0.780718 12.9501L0.533785 13.1973C0.520718 12.4963 0.807651 11.7859 1.33752 11.256C1.99538 10.5987 2.93325 10.3168 3.78978 10.5208C4.20765 10.6139 4.57432 10.8155 4.87912 11.1205C5.18392 11.4256 5.38605 11.7923 5.47992 12.2141C5.68338 13.0667 5.40125 14.0045 4.74365 14.6621ZM5.25618 10.7435C5.06331 10.5513 4.84317 10.3885 4.60285 10.2605L10.2605 4.60293C10.3884 4.84331 10.551 5.06354 10.7431 5.25653C10.936 5.44873 11.1561 5.61146 11.3965 5.73947L5.73885 11.3971C5.61092 11.1567 5.44829 10.9365 5.25618 10.7435ZM12.7711 10.4549C13.4562 10.4549 14.1455 10.7395 14.6621 11.256C15.1919 11.7859 15.4789 12.4963 15.4658 13.1973L15.2189 12.9501C14.9178 12.6497 14.5099 12.4809 14.0846 12.4809C13.6593 12.4809 13.2513 12.6497 12.9503 12.9501C12.8011 13.0989 12.6828 13.2757 12.6023 13.4704C12.5217 13.6651 12.4806 13.8738 12.4813 14.0845C12.4806 14.2952 12.5217 14.504 12.6023 14.6987C12.6828 14.8934 12.8011 15.0702 12.9503 15.2189L13.1973 15.4661C12.4935 15.4736 11.7861 15.192 11.2559 14.6621C10.5983 14.0045 10.3162 13.0667 10.5205 12.2099C10.611 11.7964 10.8194 11.418 11.1205 11.1205C11.5711 10.6699 12.1623 10.4549 12.7711 10.4549ZM11.3959 10.2611C11.1558 10.3889 10.936 10.5514 10.7434 10.7435C10.5514 10.9361 10.3889 11.156 10.261 11.396L8.37752 9.5128L9.51245 8.37787L11.3959 10.2611Z" fill="currentColor"></path>
                            </svg>
                            About Us
                        </span>
                        <h2 class="display-5 fw-bold mb-3 wow fadeInUp">battery jump start dubai

</h2>
                    </div>

                    <!-- Description -->
                    <p class="lead mb-4">If your vehicle refuses to start because of a dead battery, our reliable battery jump start service in Dubai is ready to assist you anytime. We offer fast response, professional support, and safe solutions to get you back on the road without any hassle.</p>

                    <!-- Features List -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                               <style>
  .img-hover-animate {
    transition: all 0.3s ease;
  }
  .img-hover-animate:hover {
    transform: scale(0.95); /* Slight zoom out */
    filter: brightness(1.1) sepia(1) hue-rotate(60deg) saturate(3); /* Green color effect */
  }
  .img-container-hover:hover {
    background-color: #e8f5e9 !important; /* Light green background */
  }
</style>

<div class="flex-shrink-0 bg-light p-3 rounded-3 me-3 img-container-hover">
  <img src="Assets/Routine Maintenance.svg" loading="lazy" 
       alt="Routine Maintenance" width="40" class="img-hover-animate">
</div>
                                <div>
                                    <h3 class="h5 mb-0">
Road Assistant Dubai 
</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                               <div class="flex-shrink-0 bg-light p-3 rounded-3 me-3 img-container-hover">
  <img src="Assets/fast efficient repair.svg" loading="lazy" 
       alt="Fast Efficient Repair" width="40" class="img-hover-animate">
</div>
                                <div>
                                    <h3 class="h5 mb-0">Bike Recovery Services</h3>
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
                            <span>Emergency Car Towing</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px; flex-shrink: 0;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span>Accident Recovery Towing
</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px; flex-shrink: 0;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span>Flat Tire Change & Assistance
</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px; flex-shrink: 0;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span>Fuel Delivery Service
</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px; flex-shrink: 0;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span>Quick and efficient roadside support</span>
                        </li>
                          <li class="mb-2 d-flex align-items-start">
                            <span class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px; flex-shrink: 0;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span>Motorcycle & Luxury Car Towing</span>
                        </li>
                    </ul>

                    <!-- Button -->
                    <a href="https://api.whatsapp.com/send?phone=+971566530614" class="btn btn-primary px-4 py-2 rounded-pill d-inline-flex align-items-center wow fadeInLeft">
                        <span class="me-2">CALL NOW</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4" style="background-image: url('Assets/testimonialbg.jpg'); background-size: cover; background-position: center;">
  <div class="container py-4">
    <div class="text-center mb-4">
      <h3 class="text-uppercase fw-semibold mb-2 text-primary">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="me-2">
          <!-- Your SVG path here (shortened for brevity) -->
          <path d="M11.9367 5.9528C12.1626 6.01733..."></path>
        </svg>
        Testimonials
      </h3>
      <h2 class="h1 mb-0">What Our Clients Say</h2>
      <p class="text-muted mt-2">"I was stranded with a flat tire on a busy road. Their team reached me quickly, changed the tire efficiently, and ensured I was safe throughout. Truly impressed with their fast and professional service."</p>
    </div>

    <div class="row g-3 justify-content-center">
      <!-- Testimonial 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm testimonial-card">
          <div class="card-body p-3">
            <div class="d-flex align-items-center mb-3">
              <img src="images/1.jpg" loading="lazy" alt="Fred Rodriquez" class="rounded-circle me-3" width="50">
              <div>
                <div class="text-warning mb-0">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="mb-0 fs-6">Fred Rodriquez</h5>
                <small class="text-muted">Dubai Marina</small>
              </div>
            </div>
            <blockquote class="mb-0">
              <p class="fs-6 mb-0">“My luxury car broke down unexpectedly. I was worried about towing damage, but their team handled everything with care. They used proper equipment and made the whole process smooth. Highly recommend their expert service!"

</p>
            </blockquote>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm testimonial-card">
          <div class="card-body p-3">
            <div class="d-flex align-items-center mb-3">
              <img src="images/2.jpg" loading="lazy" alt="Laura Ferguson" class="rounded-circle me-3" width="50">
              <div>
                <div class="text-warning mb-0">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="mb-0 fs-6">Laura Ferguson</h5>
                <small class="text-muted">Jumeirah Lake Towers</small>
              </div>
            </div>
            <blockquote class="mb-0">
              <p class="fs-6 mb-0">“Great experience from start to finish! Excellent communication, and no hidden charges.”</p>
            </blockquote>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm testimonial-card">
          <div class="card-body p-3">
            <div class="d-flex align-items-center mb-3">
              <img src="images/3.jpg" loading="lazy" alt="Audrey Stevenson" class="rounded-circle me-3" width="50">
              <div>
                <div class="text-warning mb-0">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="mb-0 fs-6">Audrey Stevenson</h5>
                <small class="text-muted">Downtown Dubai</small>
              </div>
            </div>
            <blockquote class="mb-0">
              <p class="fs-6 mb-0">. "I ran out of fuel during peak traffic hours in Dubai. Their fuel delivery service arrived right on time. The staff was courteous, quick, and helpful. A very dependable and hassle-free experience overall."</p>
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
    left: 0;
    top: 0;
    font-size: 2rem;
    line-height: 1;
    color: rgba(0,0,0,0.1);
  }
</style>
</section>


   
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