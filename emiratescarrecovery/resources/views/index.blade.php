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
    <section class="cs_slider cs_style_1">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            
            <!-- Slides -->
            <div class="carousel-inner">
                <!-- Slide 1 -->
               <div class="carousel-item active">
    <div class="cs_hero cs_style_1 cs_type_1 cs_bg_filed cs_primary_bg" style="background-image: url('images/WhatsApp Image 2025-06-30 at 11.02.16_0ecf00a5.jpg'); text-left">
        <div class="container text-left">
            <div class="cs_hero_text text-start  text-left" > <!-- Changed to text-start -->
                <p class="cs_hero_subtitle cs_mb_34 text-left  text1">24-Hour Towing Dubai</p>
                <h1 class="cs_hero_title cs_fs_50 cs_mb_18 animate__animated animate__fadeInUp text2">Har Towing Service 24/7 Dubai</h1>
            <div class="px-10">
                <br>
  <p class="cs_hero_subtitle cs_mb_34 text-left  text1">
  We provide fast, reliable, and round-the-clock towing services in Dubai. Whether your car breaks down on the highway or in your driveway, we are ready 24/7 to tow it safely to your desired location with complete peace of mind.
  </p>

  <br><br>
 <!-- <div class="d-flex justify-content-center "> -->
    <a class="cs_btn cs_style_1 animate__animated animate__fadeInLeft  btn1" href="https://wa.me/+971566530614" target="_blank">
      <span>Book Now</span>
      <i class="bi bi-arrow-right"></i>
    </a>
  <!-- </div> -->
</div>
        </div>
    </div>
</div>
                </div>
                
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="cs_hero cs_style_1 cs_type_1 cs_bg_filed cs_primary_bg cs_center" style="background-image: url('images/WhatsApp Image 2025-06-30 at 11.02.16_626dc7b6.jpg');">


  <div class="container text-left">
            <div class="cs_hero_text text-start  text-left" > <!-- Changed to text-start -->
                <p class="cs_hero_subtitle cs_mb_34 text-left  text1">Best Car Towing Dubai
</p>
                <h1 class="cs_hero_title cs_fs_50 cs_mb_18 animate__animated animate__fadeInUp text2">Emergency Car Towing Service in Dubai</h1>
            <div class="px-10">
                <br>
  <p class="cs_hero_subtitle cs_mb_34 text-left  text1">
  If you ever face a sudden car breakdown or accident in Dubai, our emergency towing service is just a call away. We operate 24/7 to ensure your vehicle is safely transported without delay, offering fast and dependable assistance.
  </p>

  <br><br>
 <!-- <div class="d-flex justify-content-center "> -->
    <a class="cs_btn cs_style_1 animate__animated animate__fadeInLeft  btn1" href="https://wa.me/tel:+971566530614" target="_blank">
      <span>Book Now</span>
      <i class="bi bi-arrow-right"></i>
    </a>
  <!-- </div> -->
</div>
        </div>
    </div>
</div>
                </div>
 
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="cs_hero cs_style_1 cs_type_1 cs_bg_filed cs_primary_bg cs_center" style="background-image: url('images/WhatsApp Image 2025-06-30 at 11.02.16_b99e03d7.jpg');">

<div class="container text-left">
            <div class="cs_hero_text text-start  text-left" > <!-- Changed to text-start -->
                 <p class="cs_hero_subtitle cs_mb_34 text-left  text1">24/7 Car Towing Service</p>
                <h1 class="cs_hero_title cs_fs_50 cs_mb_18 animate__animated animate__fadeInUp text2">Professional Car Recovery Service in Dubai
</h1>
            <div class="px-10">
                <br>
  <p class="cs_hero_subtitle cs_mb_34 text-left  text1">
  If you're stuck on the road due to a breakdown or accident, our professional car recovery service in Dubai is here to help. We provide quick, safe, and efficient recovery solutions, ensuring your vehicle is handled with expert care.
  </p>
  <br><br>

 <!-- <div class="d-flex justify-content-center "> -->
    <a class="cs_btn cs_style_1 animate__animated animate__fadeInLeft  btn1" href="https://api.whatsapp.com/send?phone=+971566530614" target="_blank">
      <span>Book Now</span>
      <i class="bi bi-arrow-right"></i>
    </a>
  <!-- </div> -->
</div>
        </div>
    </div>
</div>
                </div>
 
            
            <!-- Controls -->
           <style>
  .carousel-control-prev,
  .carousel-control-next {
    display: none !important;
  }
</style>

<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
        </div>
    </section>
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
    <!-- 3thsection -->
    <section class="bg-light position-relative py-5" style="background-image: url('assets/service_bg_1.avif'); background-size: cover; background-position: center;">
    <div class="container py-5">
        <!-- Section Heading -->
        <div class="row align-items-end mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-3">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                        <path d="M11.9367 5.9528C12.1626 6.01733 12.3783 6.07787 12.7693 6.07787C13.5946 6.07787 14.4218 5.73787 15.0389 5.1208C15.8285 4.33093 16.1661 3.19973 15.9199 2.16827C15.9089 2.12215 15.8858 2.07981 15.8529 2.04563C15.82 2.01146 15.7786 1.98668 15.733 1.97387C15.6874 1.96077 15.6391 1.96016 15.5931 1.97213C15.5472 1.98409 15.5053 2.00818 15.4719 2.04187L14.8413 2.67253C14.6394 2.87413 14.3706 2.98533 14.0839 2.98533C13.7973 2.98533 13.5285 2.8744 13.3269 2.67253C13.1262 2.47155 13.0136 2.19918 13.0136 1.9152C13.0136 1.63122 13.1262 1.35885 13.3269 1.15787L13.9573 0.527466C13.9909 0.493964 14.015 0.452081 14.027 0.406152C14.039 0.360223 14.0385 0.311916 14.0256 0.266232C14.0127 0.220547 13.9878 0.179144 13.9535 0.146308C13.9192 0.113471 13.8768 0.0903949 13.8306 0.0794661C12.7991 -0.166934 11.6682 0.170933 10.8783 0.960533C10.1042 1.7344 9.71058 2.888 10.0463 4.06267L7.99858 6.11013L5.95218 4.06373C6.28712 2.89093 5.89565 1.73573 5.12018 0.960533C4.33058 0.170666 3.19938 -0.167467 2.16818 0.0794661C2.12214 0.0906185 2.07989 0.113812 2.04576 0.146671C2.01163 0.179529 1.98685 0.220871 1.97396 0.266459C1.96107 0.312048 1.96054 0.360243 1.97241 0.406108C1.98428 0.451972 2.00813 0.493855 2.04152 0.527466L2.67192 1.15787C2.87254 1.35885 2.98522 1.63122 2.98522 1.9152C2.98522 2.19918 2.87254 2.47155 2.67192 2.67253C2.47032 2.8744 2.20152 2.98533 1.91485 2.98533C1.62818 2.98533 1.35938 2.87413 1.15752 2.67253L0.527118 2.0416C0.493597 2.00804 0.451734 1.98404 0.405844 1.97205C0.359953 1.96007 0.311697 1.96054 0.26605 1.97342C0.220403 1.9863 0.179016 2.01112 0.146158 2.04532C0.113299 2.07952 0.0901572 2.12187 0.079118 2.168C-0.167015 3.19947 0.170585 4.33067 0.960185 5.12053C1.57778 5.73787 2.40552 6.07813 3.22952 6.07813C3.61965 6.07813 3.85512 6.012 4.06312 5.95227L6.10978 7.99867L4.06232 10.0461C2.89138 9.71227 1.73725 10.1013 0.960185 10.8781C0.170585 11.668 -0.167015 12.7992 0.079118 13.8307C0.0901342 13.8768 0.113271 13.9191 0.146136 13.9533C0.179001 13.9875 0.2204 14.0123 0.266051 14.0251C0.358851 14.0509 0.458851 14.0251 0.527118 13.9571L1.15778 13.3264C1.35886 13.1261 1.63114 13.0136 1.91498 13.0136C2.19883 13.0136 2.47111 13.1261 2.67218 13.3264C2.87405 13.5283 2.98498 13.7973 2.98498 14.0837C2.98498 14.3701 2.87378 14.6392 2.67218 14.8411L2.04178 15.4715C2.00815 15.505 1.98407 15.5469 1.97205 15.5928C1.96004 15.6387 1.96051 15.687 1.97343 15.7327C1.98634 15.7784 2.01123 15.8198 2.04552 15.8526C2.07981 15.8855 2.12225 15.9085 2.16845 15.9195C2.39138 15.9728 2.61912 15.9987 2.84685 15.9987C3.67272 15.9987 4.50178 15.6576 5.12072 15.0384C5.89485 14.2645 6.28845 13.1109 5.95272 11.9363L8.00045 9.8888L10.0469 11.9352C9.71192 13.108 10.1034 14.2632 10.8789 15.0384C11.4981 15.6573 12.3269 15.9987 13.1527 15.9987C13.3805 15.9987 13.6082 15.9728 13.8311 15.9195C13.8772 15.9083 13.9194 15.8851 13.9535 15.8523C13.9877 15.8194 14.0124 15.7781 14.0253 15.7325C14.0382 15.6869 14.0388 15.6387 14.0269 15.5928C14.015 15.547 13.9912 15.5051 13.9578 15.4715L13.3274 14.8411C13.1255 14.6392 13.0146 14.3701 13.0146 14.0837C13.0146 13.7973 13.1258 13.5283 13.3274 13.3264C13.5285 13.1261 13.8007 13.0136 14.0846 13.0136C14.3684 13.0136 14.6407 13.1261 14.8418 13.3264L15.4725 13.9571C15.506 13.9905 15.5479 14.0143 15.5938 14.0262C15.6396 14.0381 15.6878 14.0376 15.7334 14.0247C15.779 14.0119 15.8203 13.9871 15.8532 13.953C15.886 13.9189 15.9093 13.8767 15.9205 13.8307C16.1666 12.7992 15.829 11.668 15.0394 10.8781C14.2663 10.1053 13.1109 9.70933 11.9365 10.0464L9.88978 8L11.9373 5.95253L11.9367 5.9528ZM11.2557 1.33733C11.7741 0.819199 12.465 0.533066 13.1506 0.533066H13.1967L12.9498 0.780266C12.6463 1.08373 12.4791 1.4864 12.4791 1.91467C12.4791 2.34293 12.6463 2.7456 12.9498 3.04907C13.2533 3.35253 13.6551 3.51813 14.0842 3.51813C14.5133 3.51813 14.9159 3.35147 15.2186 3.04907L15.4655 2.80187C15.4786 3.50293 15.1917 4.21333 14.6618 4.7432C14.0042 5.4008 13.0666 5.68293 12.2095 5.4784C11.7917 5.38533 11.425 5.18373 11.1202 4.87867C10.8154 4.5736 10.6133 4.20693 10.5194 3.78507C10.3159 2.93253 10.5981 1.9944 11.2557 1.3368V1.33733ZM3.78578 5.48C2.93325 5.68373 1.99512 5.40133 1.33752 4.74373C0.807651 4.21387 0.520718 3.50347 0.533785 2.8024L0.780718 3.0496C1.08338 3.352 1.48632 3.51867 1.91512 3.51867C2.34392 3.51867 2.74712 3.352 3.04925 3.0496C3.35272 2.74613 3.51992 2.34347 3.51992 1.9152C3.51992 1.48693 3.35272 1.08427 3.04925 0.780799L2.80232 0.533599C3.51058 0.525866 4.21352 0.807733 4.74365 1.3376C5.40125 1.9952 5.68338 2.93307 5.47912 3.78987C5.38632 4.20747 5.18445 4.57387 4.87912 4.8792C4.57378 5.18453 4.20765 5.38587 3.78578 5.48ZM4.60365 5.73867C4.84373 5.61088 5.06362 5.44832 5.25618 5.25627C5.44814 5.06361 5.61068 4.84374 5.73858 4.60373L7.62205 6.48693L6.48712 7.62187L4.60365 5.73867ZM4.74365 14.6621C4.21378 15.1917 3.51192 15.4752 2.80232 15.4661L3.04925 15.2189C3.35165 14.9163 3.51832 14.5133 3.51832 14.0845C3.51832 13.6557 3.35165 13.2528 3.04925 12.9501C2.74823 12.6497 2.3403 12.4809 1.91498 12.4809C1.48967 12.4809 1.08174 12.6497 0.780718 12.9501L0.533785 13.1973C0.520718 12.4963 0.807651 11.7859 1.33752 11.256C1.99538 10.5987 2.93325 10.3168 3.78978 10.5208C4.20765 10.6139 4.57432 10.8155 4.87912 11.1205C5.18392 11.4256 5.38605 11.7923 5.47992 12.2141C5.68338 13.0667 5.40125 14.0045 4.74365 14.6621ZM5.25618 10.7435C5.06331 10.5513 4.84317 10.3885 4.60285 10.2605L10.2605 4.60293C10.3884 4.84331 10.551 5.06354 10.7431 5.25653C10.936 5.44873 11.1561 5.61146 11.3965 5.73947L5.73885 11.3971C5.61092 11.1567 5.44829 10.9365 5.25618 10.7435ZM12.7711 10.4549C13.4562 10.4549 14.1455 10.7395 14.6621 11.256C15.1919 11.7859 15.4789 12.4963 15.4658 13.1973L15.2189 12.9501C14.9178 12.6497 14.5099 12.4809 14.0846 12.4809C13.6593 12.4809 13.2513 12.6497 12.9503 12.9501C12.8011 13.0989 12.6828 13.2757 12.6023 13.4704C12.5217 13.6651 12.4806 13.8738 12.4813 14.0845C12.4806 14.2952 12.5217 14.504 12.6023 14.6987C12.6828 14.8934 12.8011 15.0702 12.9503 15.2189L13.1973 15.4661C12.4935 15.4736 11.7861 15.192 11.2559 14.6621C10.5983 14.0045 10.3162 13.0667 10.5205 12.2099C10.611 11.7964 10.8194 11.418 11.1205 11.1205C11.5711 10.6699 12.1623 10.4549 12.7711 10.4549ZM11.3959 10.2611C11.1558 10.3889 10.936 10.5514 10.7434 10.7435C10.5514 10.9361 10.3889 11.156 10.261 11.396L8.37752 9.5128L9.51245 8.37787L11.3959 10.2611Z" fill="currentColor"></path>
                    </svg>
                    <span class="text-uppercase fw-bold">Best Services</span>
                </div>
                <h1 class="display-4 fw-bold mb-0 wow fadeInDown">Services We Provide</h1>
            </div>
            <div class="col-lg-4 wow fadeInDown">
                <p class="mb-0">We provide expert motorbike towing, specialized sports car recovery, and fast battery jump start services in Dubai. Our team ensures safe, reliable, and efficient assistance for all your vehicle emergencies and transport needs.
</p>
            </div>
        </div>

        <!-- Services Slider - 7 Cards -->
        <div class="row g-4 wow fadeInUp">
            <!-- Service 1 - Fridge Pick Up Delivery -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="images/WhatsApp Image 2025-06-30 at 11.35.03_e8395dfb.jpg" 
                             class="card-img-top w-100" 
                             style="height: 180px; object-fit: cover;"
                             loading="lazy" 
                             alt="AC Service">
                        <div class="position-absolute top-100 start-50 translate-middle" 
                             style="transform: translate(-50%, -50%); z-index: 2;">
                            <!-- <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center p-3"
                                 style="width: 70px; height: 70px; border: 4px solid white;">
                                <img src="Assets/air-conditioning.png" 
                                     loading="lazy" 
                                     alt="AC Icon" 
                                     width="40">
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body text-center px-4 pt-5 pb-4">
                        <h3 class="h4 mb-3">Moter bike towing service </h3>
                        <p class="mb-4">We provide reliable motorbike towing service in Dubai, ensuring your bike is safely transported wherever you need. Whether it's a breakdown or relocation, we handle every tow with care and professionalism.

</p>
                        <a href="https://api.whatsapp.com/send?phone=+971566530614" class="text-decoration-none fw-bold text-primary d-inline-flex align-items-center">
                            <span class="me-2 text-uppercase">CALL NOW</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 2 - Appliance Pickup -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="images/15.jpg" 
                             class="card-img-top w-100" 
                             style="height: 180px; object-fit: cover;"
                             loading="lazy" 
                             alt="Refrigeration Service">
                        <div class="position-absolute top-100 start-50 translate-middle" 
                             style="transform: translate(-50%, -50%); z-index: 2;">
                            <!-- <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center p-3"
                                 style="width: 70px; height: 70px; border: 4px solid white;">
                                <img src="Assets/Commercial-refrigeration-service.png" 
                                     loading="lazy" 
                                     alt="Refrigeration Icon" 
                                     width="40">
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body text-center px-4 pt-5 pb-4">
                        <h3 class="h4 mb-3">Sports Car recovery service
   </h3>
                        <p class="mb-4">We offer specialized sports car recovery service in Dubai, ensuring safe and damage-free handling. Our expert team uses the right equipment to transport high-end vehicles with precision, care, and professionalism.</p>
                        <a href="https://api.whatsapp.com/send?phone=+971566530614" class="text-decoration-none fw-bold text-primary d-inline-flex align-items-center">
                            <span class="me-2 text-uppercase">CALL NOW</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 3 - Local Services -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="images/16.jpg" 
                             class="card-img-top w-100" 
                             style="height: 180px; object-fit: cover;"
                             loading="lazy" 
                             alt="Home Appliances Service">
                        <div class="position-absolute top-100 start-50 translate-middle" 
                             style="transform: translate(-50%, -50%); z-index: 2;">
                            <!-- <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center p-3"
                                 style="width: 70px; height: 70px; border: 4px solid white;">
                                <img src="Assets/home-appliances-service.png" 
                                     loading="lazy" 
                                     alt="Appliances Icon" 
                                     width="40">
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body text-center px-4 pt-5 pb-4">
                        <h3 class="h4 mb-3">battery jump start dubai 

</h3>
                        <p class="mb-4">We offer fast and reliable battery jump start service in Dubai. Whether you're at home, work, or on the road, our team arrives quickly to get your car running smoothly again.</p>
                        <a href="https://api.whatsapp.com/send?phone=+971566530614" class="text-decoration-none fw-bold text-primary d-inline-flex align-items-center">
                            <span class="me-2 text-uppercase">CALL NOW</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 4 - Furniture Delivery -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="images/17.jpg" 
                             class="card-img-top w-100" 
                             style="height: 180px; object-fit: cover;"
                             loading="lazy" 
                             alt="Furniture Delivery">
                        <div class="position-absolute top-100 start-50 translate-middle" 
                             style="transform: translate(-50%, -50%); z-index: 2;">
                            <!-- <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center p-3"
                                 style="width: 70px; height: 70px; border: 4px solid white;">
                                <img src="Assets/furniture-delivery.png" 
                                     loading="lazy" 
                                     alt="Furniture Icon" 
                                     width="40">
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body text-center px-4 pt-5 pb-4">
                        <h3 class="h4 mb-3">Emergency Car Towing </h3>
                        <p class="mb-4">We provide 24/7 emergency car towing in Dubai, ensuring quick and safe vehicle transport during breakdowns or accidents. Our reliable team responds promptly to get you back on the road without delay.

</p>
                        <a href="https://api.whatsapp.com/send?phone=+971566530614" class="text-decoration-none fw-bold text-primary d-inline-flex align-items-center">
                            <span class="me-2 text-uppercase">CALL NOW</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 5 - Office Relocation -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="images/18.jpg" 
                             class="card-img-top w-100" 
                             style="height: 180px; object-fit: cover;"
                             loading="lazy" 
                             alt="Office Relocation">
                        <div class="position-absolute top-100 start-50 translate-middle" 
                             style="transform: translate(-50%, -50%); z-index: 2;">
                            <!-- <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center p-3"
                                 style="width: 70px; height: 70px; border: 4px solid white;">
                                <img src="Assets/office-move.png" 
                                     loading="lazy" 
                                     alt="Office Icon" 
                                     width="40">
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body text-center px-4 pt-5 pb-4">
                        <h3 class="h4 mb-3">Accident Recovery Towing
</h3>
                        <p class="mb-4">Complete office relocation services with minimal downtime. We handle everything from packing to setup at your new location.We offer professional accident recovery towing in Dubai, handling damaged vehicles with care and efficiency. Our team responds quickly to clear accident scenes and safely transport your car to the desired location.

</p>
                        <a href="https://api.whatsapp.com/send?phone=+971566530614" class="text-decoration-none fw-bold text-primary d-inline-flex align-items-center">
                            <span class="me-2 text-uppercase">CALL NOW</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 6 - Storage Solutions -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="images/19.jpg" 
                             class="card-img-top w-100" 
                             style="height: 180px; object-fit: cover;"
                             loading="lazy" 
                             alt="Storage Solutions">
                        <div class="position-absolute top-100 start-50 translate-middle" 
                             style="transform: translate(-50%, -50%); z-index: 2;">
                            <!-- <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center p-3"
                                 style="width: 70px; height: 70px; border: 4px solid white;">
                                <img src="Assets/storage.png" 
                                     loading="lazy" 
                                     alt="Storage Icon" 
                                     width="40">
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body text-center px-4 pt-5 pb-4">
                        <h3 class="h4 mb-3">Flat Tire Change & Assistance</h3>
                        <p class="mb-4">We provide flat tire change and assistance services in Dubai, offering quick and reliable support wherever you are. Our skilled team ensures your tire is safely replaced so you can continue your journey without hassle.

</p>
                        <a href="https://api.whatsapp.com/send?phone=+971566530614" class="text-decoration-none fw-bold text-primary d-inline-flex align-items-center">
                            <span class="me-2 text-uppercase">CALL NOW</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
<!-- end -->
   <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="images/24.jpg" 
                             class="card-img-top w-100" 
                             style="height: 180px; object-fit: cover;"
                             loading="lazy" 
                             alt="Storage Solutions">
                        <div class="position-absolute top-100 start-50 translate-middle" 
                             style="transform: translate(-50%, -50%); z-index: 2;">
                            <!-- <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center p-3"
                                 style="width: 70px; height: 70px; border: 4px solid white;">
                                <img src="Assets/20.jpg" 
                                     loading="lazy" 
                                     alt="Storage Icon" 
                                     width="40">
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body text-center px-4 pt-5 pb-4">
                        <h3 class="h4 mb-3">Quick and efficient roadside support</h3>
                        <p class="mb-4">We provide quick and efficient roadside support in Dubai, assisting with breakdowns, tire changes, jump starts, and more. Our skilled team ensures you get back on the road swiftly and safely.



</p>
                        <a href="https://api.whatsapp.com/send?phone=+971566530614" class="text-decoration-none fw-bold text-primary d-inline-flex align-items-center">
                            <span class="me-2 text-uppercase">CALL NOW</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
              <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="images/21.jpg" 
                             class="card-img-top w-100" 
                             style="height: 180px; object-fit: cover;"
                             loading="lazy" 
                             alt="Storage Solutions">
                        <div class="position-absolute top-100 start-50 translate-middle" 
                             style="transform: translate(-50%, -50%); z-index: 2;">
                            <!-- <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center p-3"
                                 style="width: 70px; height: 70px; border: 4px solid white;">
                                <img src="Assets/storage.png" 
                                     loading="lazy" 
                                     alt="Storage Icon" 
                                     width="40">
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body text-center px-4 pt-5 pb-4">
                        <h3 class="h4 mb-3">Motorcycle & Luxury Car Towing 
</h3>
                        <p class="mb-4">We specialize in motorcycle and luxury car towing in Dubai, offering safe and careful transport. Our expert team uses the right equipment to handle high-value vehicles with professionalism and reliability.



</p>
                        <a href="https://api.whatsapp.com/send?phone=+971566530614" class="text-decoration-none fw-bold text-primary d-inline-flex align-items-center">
                            <span class="me-2 text-uppercase">CALL NOW</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
              <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="images/22.jpg" 
                             class="card-img-top w-100" 
                             style="height: 180px; object-fit: cover;"
                             loading="lazy" 
                             alt="Storage Solutions">
                        <div class="position-absolute top-100 start-50 translate-middle" 
                             style="transform: translate(-50%, -50%); z-index: 2;">
                            <!-- <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center p-3"
                                 style="width: 70px; height: 70px; border: 4px solid white;">
                                <img src="Assets/storage.png" 
                                     loading="lazy" 
                                     alt="Storage Icon" 
                                     width="40">
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body text-center px-4 pt-5 pb-4">
                        <h3 class="h4 mb-3">Safe and damage-free transport

</h3>
                        <p class="mb-4">We ensure safe and damage-free transport for all vehicles in Dubai. Our experienced team uses specialized equipment and techniques to protect your car during towing or recovery, guaranteeing peace of mind.
</p>
                        <a href="https://api.whatsapp.com/send?phone=+971566530614" class="text-decoration-none fw-bold text-primary d-inline-flex align-items-center">
                            <span class="me-2 text-uppercase">CALL NOW</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Service 7 - Specialized Handling (Centered) -->
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="images/21.jpg" 
                             class="card-img-top w-100" 
                             style="height: 180px; object-fit: cover;"
                             loading="lazy" 
                             alt="Specialized Handling">
                        <div class="position-absolute top-100 start-50 translate-middle" 
                             style="transform: translate(-50%, -50%); z-index: 2;">
                            <!-- <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center p-3"
                                 style="width: 70px; height: 70px; border: 4px solid white;">
                                <img src="Assets/special-handling.png" 
                                     loading="lazy" 
                                     alt="Special Handling Icon" 
                                     width="40">
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body text-center px-4 pt-5 pb-4">
                        <h3 class="h4 mb-3">Fuel Delivery Service</h3>
                        <p class="mb-4">We offer fast and reliable fuel delivery service in Dubai, bringing fuel directly to your vehicle wherever you are. Our team ensures you won’t be stranded, providing quick assistance anytime, anywhere. 

</p>
                        <a href="https://api.whatsapp.com/send?phone=+971566530614" class="text-decoration-none fw-bold text-primary d-inline-flex align-items-center">
                            <span class="me-2 text-uppercase">CALL NOW</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 4th -->

    <style>
        /* Custom CSS to match original styling */
        .cs_height_80, .cs_height_lg_80 {
            height: 80px;
        }
        .cs_height_27, .cs_height_lg_65 {
            height: 27px;
        }
        .cs_height_120, .cs_height_lg_105 {
            height: 120px;
        }
        @media (min-width: 992px) {
            .cs_height_lg_80 {
                height: 80px;
            }
            .cs_height_lg_65 {
                height: 65px;
            }
            .cs_height_lg_105 {
                height: 105px;
            }
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
        
        .cs_row_gap_40 {
            row-gap: 40px;
        }
        
        .cs_gap_y_40 {
            margin-top: 40px;
            margin-bottom: 40px;
        }
        
        .cs_features_thumbnail_1, .cs_features_thumbnail_2, .cs_features_thumbnail_3 {
            position: relative;
        }
        
        .cs_features_thumbnail_1 img, .cs_features_thumbnail_2 img, .cs_features_thumbnail_3 img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        
        .cs_feature_text {
            margin-bottom: 30px;
            font-size: 16px;
            line-height: 1.6;
            color: #666;
        }
        
        .cs_iconbox {
            display: flex;
            gap: 15px;
            margin-bottom: 12px;
            align-items: flex-start;
        }
        
        .cs_iconbox_icon {
            width: 50px;
            height: 50px;
            background-color: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .cs_iconbox_icon img {
            width: 24px;
            height: 24px;
        }
        
        .cs_iconbox_info h3 {
            font-size: 18px;
            margin-bottom: 2px;
            font-weight: 600;
            color: #333;
        }
        
        .cs_iconbox_subtitle {
            font-size: 12px;
            color: #666;
            line-height: 1.5;
            margin-bottom: 0;
        }
        
        .cs_btn {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            background-color: #0d6efd;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .cs_btn:hover {
            background-color: #0b5ed7;
            color: white;
        }
        
        .cs_btn i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        
        .cs_btn:hover i {
            transform: translateX(3px);
        }
        
        .cs_features_thumbnail_2 {
            margin-bottom: 20px;
        }
        
        .cs_features_thumbnail_3 {
            margin-top: 20px;
        }
        
        /* SVG icon styling */
        .cs_section_subtitle svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }
    </style>

    <section>
        <div class="cs_height_80 cs_height_lg_80"></div>
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="cs_section_subtitle">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9367 5.9528C12.1626 6.01733 12.3783 6.07787 12.7693 6.07787C13.5946 6.07787 14.4218 5.73787 15.0389 5.1208C15.8285 4.33093 16.1661 3.19973 15.9199 2.16827C15.9089 2.12215 15.8858 2.07981 15.8529 2.04563C15.82 2.01146 15.7786 1.98668 15.733 1.97387C15.6874 1.96077 15.6391 1.96016 15.5931 1.97213C15.5472 1.98409 15.5053 2.00818 15.4719 2.04187L14.8413 2.67253C14.6394 2.87413 14.3706 2.98533 14.0839 2.98533C13.7973 2.98533 13.5285 2.8744 13.3269 2.67253C13.1262 2.47155 13.0136 2.19918 13.0136 1.9152C13.0136 1.63122 13.1262 1.35885 13.3269 1.15787L13.9573 0.527466C13.9909 0.493964 14.015 0.452081 14.027 0.406152C14.039 0.360223 14.0385 0.311916 14.0256 0.266232C14.0127 0.220547 13.9878 0.179144 13.9535 0.146308C13.9192 0.113471 13.8768 0.0903949 13.8306 0.0794661C12.7991 -0.166934 11.6682 0.170933 10.8783 0.960533C10.1042 1.7344 9.71058 2.888 10.0463 4.06267L7.99858 6.11013L5.95218 4.06373C6.28712 2.89093 5.89565 1.73573 5.12018 0.960533C4.33058 0.170666 3.19938 -0.167467 2.16818 0.0794661C2.12214 0.0906185 2.07989 0.113812 2.04576 0.146671C2.01163 0.179529 1.98685 0.220871 1.97396 0.266459C1.96107 0.312048 1.96054 0.360243 1.97241 0.406108C1.98428 0.451972 2.00813 0.493855 2.04152 0.527466L2.67192 1.15787C2.87254 1.35885 2.98522 1.63122 2.98522 1.9152C2.98522 2.19918 2.87254 2.47155 2.67192 2.67253C2.47032 2.8744 2.20152 2.98533 1.91485 2.98533C1.62818 2.98533 1.35938 2.87413 1.15752 2.67253L0.527118 2.0416C0.493597 2.00804 0.451734 1.98404 0.405844 1.97205C0.359953 1.96007 0.311697 1.96054 0.26605 1.97342C0.220403 1.9863 0.179016 2.01112 0.146158 2.04532C0.113299 2.07952 0.0901572 2.12187 0.079118 2.168C-0.167015 3.19947 0.170585 4.33067 0.960185 5.12053C1.57778 5.73787 2.40552 6.07813 3.22952 6.07813C3.61965 6.07813 3.85512 6.012 4.06312 5.95227L6.10978 7.99867L4.06232 10.0461C2.89138 9.71227 1.73725 10.1013 0.960185 10.8781C0.170585 11.668 -0.167015 12.7992 0.079118 13.8307C0.0901342 13.8768 0.113271 13.9191 0.146136 13.9533C0.179001 13.9875 0.2204 14.0123 0.266051 14.0251C0.358851 14.0509 0.458851 14.0251 0.527118 13.9571L1.15778 13.3264C1.35886 13.1261 1.63114 13.0136 1.91498 13.0136C2.19883 13.0136 2.47111 13.1261 2.67218 13.3264C2.87405 13.5283 2.98498 13.7973 2.98498 14.0837C2.98498 14.3701 2.87378 14.6392 2.67218 14.8411L2.04178 15.4715C2.00815 15.505 1.98407 15.5469 1.97205 15.5928C1.96004 15.6387 1.96051 15.687 1.97343 15.7327C1.98634 15.7784 2.01123 15.8198 2.04552 15.8526C2.07981 15.8855 2.12225 15.9085 2.16845 15.9195C2.39138 15.9728 2.61912 15.9987 2.84685 15.9987C3.67272 15.9987 4.50178 15.6576 5.12072 15.0384C5.89485 14.2645 6.28845 13.1109 5.95272 11.9363L8.00045 9.8888L10.0469 11.9352C9.71192 13.108 10.1034 14.2632 10.8789 15.0384C11.4981 15.6573 12.3269 15.9987 13.1527 15.9987C13.3805 15.9987 13.6082 15.9728 13.8311 15.9195C13.8772 15.9083 13.9194 15.8851 13.9535 15.8523C13.9877 15.8194 14.0124 15.7781 14.0253 15.7325C14.0382 15.6869 14.0388 15.6387 14.0269 15.5928C14.015 15.547 13.9912 15.5051 13.9578 15.4715L13.3274 14.8411C13.1255 14.6392 13.0146 14.3701 13.0146 14.0837C13.0146 13.7973 13.1258 13.5283 13.3274 13.3264C13.5285 13.1261 13.8007 13.0136 14.0846 13.0136C14.3684 13.0136 14.6407 13.1261 14.8418 13.3264L15.4725 13.9571C15.506 13.9905 15.5479 14.0143 15.5938 14.0262C15.6396 14.0381 15.6878 14.0376 15.7334 14.0247C15.779 14.0119 15.8203 13.9871 15.8532 13.953C15.886 13.9189 15.9093 13.8767 15.9205 13.8307C16.1666 12.7992 15.829 11.668 15.0394 10.8781C14.2663 10.1053 13.1109 9.70933 11.9365 10.0464L9.88978 8L11.9373 5.95253L11.9367 5.9528ZM11.2557 1.33733C11.7741 0.819199 12.465 0.533066 13.1506 0.533066H13.1967L12.9498 0.780266C12.6463 1.08373 12.4791 1.4864 12.4791 1.91467C12.4791 2.34293 12.6463 2.7456 12.9498 3.04907C13.2533 3.35253 13.6551 3.51813 14.0842 3.51813C14.5133 3.51813 14.9159 3.35147 15.2186 3.04907L15.4655 2.80187C15.4786 3.50293 15.1917 4.21333 14.6618 4.7432C14.0042 5.4008 13.0666 5.68293 12.2095 5.4784C11.7917 5.38533 11.425 5.18373 11.1202 4.87867C10.8154 4.5736 10.6133 4.20693 10.5194 3.78507C10.3159 2.93253 10.5981 1.9944 11.2557 1.3368V1.33733ZM3.78578 5.48C2.93325 5.68373 1.99512 5.40133 1.33752 4.74373C0.807651 4.21387 0.520718 3.50347 0.533785 2.8024L0.780718 3.0496C1.08338 3.352 1.48632 3.51867 1.91512 3.51867C2.34392 3.51867 2.74712 3.352 3.04925 3.0496C3.35272 2.74613 3.51992 2.34347 3.51992 1.9152C3.51992 1.48693 3.35272 1.08427 3.04925 0.780799L2.80232 0.533599C3.51058 0.525866 4.21352 0.807733 4.74365 1.3376C5.40125 1.9952 5.68338 2.93307 5.47912 3.78987C5.38632 4.20747 5.18445 4.57387 4.87912 4.8792C4.57378 5.18453 4.20765 5.38587 3.78578 5.48ZM4.60365 5.73867C4.84373 5.61088 5.06362 5.44832 5.25618 5.25627C5.44814 5.06361 5.61068 4.84374 5.73858 4.60373L7.62205 6.48693L6.48712 7.62187L4.60365 5.73867ZM4.74365 14.6621C4.21378 15.1917 3.51192 15.4752 2.80232 15.4661L3.04925 15.2189C3.35165 14.9163 3.51832 14.5133 3.51832 14.0845C3.51832 13.6557 3.35165 13.2528 3.04925 12.9501C2.74823 12.6497 2.3403 12.4809 1.91498 12.4809C1.48967 12.4809 1.08174 12.6497 0.780718 12.9501L0.533785 13.1973C0.520718 12.4963 0.807651 11.7859 1.33752 11.256C1.99538 10.5987 2.93325 10.3168 3.78978 10.5208C4.20765 10.6139 4.57432 10.8155 4.87912 11.1205C5.18392 11.4256 5.38605 11.7923 5.47992 12.2141C5.68338 13.0667 5.40125 14.0045 4.74365 14.6621ZM5.25618 10.7435C5.06331 10.5513 4.84317 10.3885 4.60285 10.2605L10.2605 4.60293C10.3884 4.84331 10.551 5.06354 10.7431 5.25653C10.936 5.44873 11.1561 5.61146 11.3965 5.73947L5.73885 11.3971C5.61092 11.1567 5.44829 10.9365 5.25618 10.7435ZM12.7711 10.4549C13.4562 10.4549 14.1455 10.7395 14.6621 11.256C15.1919 11.7859 15.4789 12.4963 15.4658 13.1973L15.2189 12.9501C14.9178 12.6497 14.5099 12.4809 14.0846 12.4809C13.6593 12.4809 13.2513 12.6497 12.9503 12.9501C12.8011 13.0989 12.6828 13.2757 12.6023 13.4704C12.5217 13.6651 12.4806 13.8738 12.4813 14.0845C12.4806 14.2952 12.5217 14.504 12.6023 14.6987C12.6828 14.8934 12.8011 15.0702 12.9503 15.2189L13.1973 15.4661C12.4935 15.4736 11.7861 15.192 11.2559 14.6621C10.5983 14.0045 10.3162 13.0667 10.5205 12.2099C10.611 11.7964 10.8194 11.418 11.1205 11.1205C11.5711 10.6699 12.1623 10.4549 12.7711 10.4549ZM11.3959 10.2611C11.1558 10.3889 10.936 10.5514 10.7434 10.7435C10.5514 10.9361 10.3889 11.156 10.261 11.396L8.37752 9.5128L9.51245 8.37787L11.3959 10.2611Z" fill="currentColor"></path>
                    </svg>
                    WHY CHOOSE US
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9367 5.9528C12.1626 6.01733 12.3783 6.07787 12.7693 6.07787C13.5946 6.07787 14.4218 5.73787 15.0389 5.1208C15.8285 4.33093 16.1661 3.19973 15.9199 2.16827C15.9089 2.12215 15.8858 2.07981 15.8529 2.04563C15.82 2.01146 15.7786 1.98668 15.733 1.97387C15.6874 1.96077 15.6391 1.96016 15.5931 1.97213C15.5472 1.98409 15.5053 2.00818 15.4719 2.04187L14.8413 2.67253C14.6394 2.87413 14.3706 2.98533 14.0839 2.98533C13.7973 2.98533 13.5285 2.8744 13.3269 2.67253C13.1262 2.47155 13.0136 2.19918 13.0136 1.9152C13.0136 1.63122 13.1262 1.35885 13.3269 1.15787L13.9573 0.527466C13.9909 0.493964 14.015 0.452081 14.027 0.406152C14.039 0.360223 14.0385 0.311916 14.0256 0.266232C14.0127 0.220547 13.9878 0.179144 13.9535 0.146308C13.9192 0.113471 13.8768 0.0903949 13.8306 0.0794661C12.7991 -0.166934 11.6682 0.170933 10.8783 0.960533C10.1042 1.7344 9.71058 2.888 10.0463 4.06267L7.99858 6.11013L5.95218 4.06373C6.28712 2.89093 5.89565 1.73573 5.12018 0.960533C4.33058 0.170666 3.19938 -0.167467 2.16818 0.0794661C2.12214 0.0906185 2.07989 0.113812 2.04576 0.146671C2.01163 0.179529 1.98685 0.220871 1.97396 0.266459C1.96107 0.312048 1.96054 0.360243 1.97241 0.406108C1.98428 0.451972 2.00813 0.493855 2.04152 0.527466L2.67192 1.15787C2.87254 1.35885 2.98522 1.63122 2.98522 1.9152C2.98522 2.19918 2.87254 2.47155 2.67192 2.67253C2.47032 2.8744 2.20152 2.98533 1.91485 2.98533C1.62818 2.98533 1.35938 2.87413 1.15752 2.67253L0.527118 2.0416C0.493597 2.00804 0.451734 1.98404 0.405844 1.97205C0.359953 1.96007 0.311697 1.96054 0.26605 1.97342C0.220403 1.9863 0.179016 2.01112 0.146158 2.04532C0.113299 2.07952 0.0901572 2.12187 0.079118 2.168C-0.167015 3.19947 0.170585 4.33067 0.960185 5.12053C1.57778 5.73787 2.40552 6.07813 3.22952 6.07813C3.61965 6.07813 3.85512 6.012 4.06312 5.95227L6.10978 7.99867L4.06232 10.0461C2.89138 9.71227 1.73725 10.1013 0.960185 10.8781C0.170585 11.668 -0.167015 12.7992 0.079118 13.8307C0.0901342 13.8768 0.113271 13.9191 0.146136 13.9533C0.179001 13.9875 0.2204 14.0123 0.266051 14.0251C0.358851 14.0509 0.458851 14.0251 0.527118 13.9571L1.15778 13.3264C1.35886 13.1261 1.63114 13.0136 1.91498 13.0136C2.19883 13.0136 2.47111 13.1261 2.67218 13.3264C2.87405 13.5283 2.98498 13.7973 2.98498 14.0837C2.98498 14.3701 2.87378 14.6392 2.67218 14.8411L2.04178 15.4715C2.00815 15.505 1.98407 15.5469 1.97205 15.5928C1.96004 15.6387 1.96051 15.687 1.97343 15.7327C1.98634 15.7784 2.01123 15.8198 2.04552 15.8526C2.07981 15.8855 2.12225 15.9085 2.16845 15.9195C2.39138 15.9728 2.61912 15.9987 2.84685 15.9987C3.67272 15.9987 4.50178 15.6576 5.12072 15.0384C5.89485 14.2645 6.28845 13.1109 5.95272 11.9363L8.00045 9.8888L10.0469 11.9352C9.71192 13.108 10.1034 14.2632 10.8789 15.0384C11.4981 15.6573 12.3269 15.9987 13.1527 15.9987C13.3805 15.9987 13.6082 15.9728 13.8311 15.9195C13.8772 15.9083 13.9194 15.8851 13.9535 15.8523C13.9877 15.8194 14.0124 15.7781 14.0253 15.7325C14.0382 15.6869 14.0388 15.6387 14.0269 15.5928C14.015 15.547 13.9912 15.5051 13.9578 15.4715L13.3274 14.8411C13.1255 14.6392 13.0146 14.3701 13.0146 14.0837C13.0146 13.7973 13.1258 13.5283 13.3274 13.3264C13.5285 13.1261 13.8007 13.0136 14.0846 13.0136C14.3684 13.0136 14.6407 13.1261 14.8418 13.3264L15.4725 13.9571C15.506 13.9905 15.5479 14.0143 15.5938 14.0262C15.6396 14.0381 15.6878 14.0376 15.7334 14.0247C15.779 14.0119 15.8203 13.9871 15.8532 13.953C15.886 13.9189 15.9093 13.8767 15.9205 13.8307C16.1666 12.7992 15.829 11.668 15.0394 10.8781C14.2663 10.1053 13.1109 9.70933 11.9365 10.0464L9.88978 8L11.9373 5.95253L11.9367 5.9528ZM11.2557 1.33733C11.7741 0.819199 12.465 0.533066 13.1506 0.533066H13.1967L12.9498 0.780266C12.6463 1.08373 12.4791 1.4864 12.4791 1.91467C12.4791 2.34293 12.6463 2.7456 12.9498 3.04907C13.2533 3.35253 13.6551 3.51813 14.0842 3.51813C14.5133 3.51813 14.9159 3.35147 15.2186 3.04907L15.4655 2.80187C15.4786 3.50293 15.1917 4.21333 14.6618 4.7432C14.0042 5.4008 13.0666 5.68293 12.2095 5.4784C11.7917 5.38533 11.425 5.18373 11.1202 4.87867C10.8154 4.5736 10.6133 4.20693 10.5194 3.78507C10.3159 2.93253 10.5981 1.9944 11.2557 1.3368V1.33733ZM3.78578 5.48C2.93325 5.68373 1.99512 5.40133 1.33752 4.74373C0.807651 4.21387 0.520718 3.50347 0.533785 2.8024L0.780718 3.0496C1.08338 3.352 1.48632 3.51867 1.91512 3.51867C2.34392 3.51867 2.74712 3.352 3.04925 3.0496C3.35272 2.74613 3.51992 2.34347 3.51992 1.9152C3.51992 1.48693 3.35272 1.08427 3.04925 0.780799L2.80232 0.533599C3.51058 0.525866 4.21352 0.807733 4.74365 1.3376C5.40125 1.9952 5.68338 2.93307 5.47912 3.78987C5.38632 4.20747 5.18445 4.57387 4.87912 4.8792C4.57378 5.18453 4.20765 5.38587 3.78578 5.48ZM4.60365 5.73867C4.84373 5.61088 5.06362 5.44832 5.25618 5.25627C5.44814 5.06361 5.61068 4.84374 5.73858 4.60373L7.62205 6.48693L6.48712 7.62187L4.60365 5.73867ZM4.74365 14.6621C4.21378 15.1917 3.51192 15.4752 2.80232 15.4661L3.04925 15.2189C3.35165 14.9163 3.51832 14.5133 3.51832 14.0845C3.51832 13.6557 3.35165 13.2528 3.04925 12.9501C2.74823 12.6497 2.3403 12.4809 1.91498 12.4809C1.48967 12.4809 1.08174 12.6497 0.780718 12.9501L0.533785 13.1973C0.520718 12.4963 0.807651 11.7859 1.33752 11.256C1.99538 10.5987 2.93325 10.3168 3.78978 10.5208C4.20765 10.6139 4.57432 10.8155 4.87912 11.1205C5.18392 11.4256 5.38605 11.7923 5.47992 12.2141C5.68338 13.0667 5.40125 14.0045 4.74365 14.6621ZM5.25618 10.7435C5.06331 10.5513 4.84317 10.3885 4.60285 10.2605L10.2605 4.60293C10.3884 4.84331 10.551 5.06354 10.7431 5.25653C10.936 5.44873 11.1561 5.61146 11.3965 5.73947L5.73885 11.3971C5.61092 11.1567 5.44829 10.9365 5.25618 10.7435ZM12.7711 10.4549C13.4562 10.4549 14.1455 10.7395 14.6621 11.256C15.1919 11.7859 15.4789 12.4963 15.4658 13.1973L15.2189 12.9501C14.9178 12.6497 14.5099 12.4809 14.0846 12.4809C13.6593 12.4809 13.2513 12.6497 12.9503 12.9501C12.8011 13.0989 12.6828 13.2757 12.6023 13.4704C12.5217 13.6651 12.4806 13.8738 12.4813 14.0845C12.4806 14.2952 12.5217 14.504 12.6023 14.6987C12.6828 14.8934 12.8011 15.0702 12.9503 15.2189L13.1973 15.4661C12.4935 15.4736 11.7861 15.192 11.2559 14.6621C10.5983 14.0045 10.3162 13.0667 10.5205 12.2099C10.611 11.7964 10.8194 11.418 11.1205 11.1205C11.5711 10.6699 12.1623 10.4549 12.7711 10.4549ZM11.3959 10.2611C11.1558 10.3889 10.936 10.5514 10.7434 10.7435C10.5514 10.9361 10.3889 11.156 10.261 11.396L8.37752 9.5128L9.51245 8.37787L11.3959 10.2611Z" fill="currentColor"></path>
                    </svg>
                </h3>
                <h2 class="cs_section_title animate__animated animate__pulse">Comprehensive Car Recovery Dubai and Car Towing Service Dubai Solutions.</h2>
            </div>
            
            <div class="cs_height_27 cs_height_lg_65"></div>
            
            <div class="row cs_row_gap_40 cs_gap_y_40 align-items-center">
                <div class="col-xl-4 animate__animated animate__fadeInLeft">
                    <div class="cs_features_thumbnail_1 position-relative">
                        <img src="images/WhatsApp Image 2025-06-30 at 11.02.16_7c92f6d4.jpg" loading="lazy" alt="Feature Image" class="img-fluid">
                    </div>
                </div>
                
                <div class="col-xl-4 animate__animated animate__fadeInDown">
                    <!-- <p class="cs_feature_text cs_mb_30">Squeaking, grinding noises, or a spongy brake pedal are car common indicators that your brakes need attention Slow an engine cranking.</p> -->
                    
                    <div class="cs_iconbox cs_style_2 cs_mb_12">
                        <div class="cs_iconbox_icon cs_gray_bg cs_center cs_radius_50">
                            <img src="Assets/Ambition.svg" loading="lazy" alt="Car Icon">
                        </div>
                        <div class="cs_iconbox_info">
                            <h3 class="cs_fs_18 cs_mb_2">Honesty</h3>
                            <p class="cs_iconbox_subtitle mb-0">We prioritize integrity and honesty in everything we do. We believe that our clients, partners, and teams should always have a complete understanding to foster sustainable business growth based on trust.</p>
                        </div>
                    </div>
                    
                    <div class="cs_iconbox cs_style_2 cs_mb_12">
                        <div class="cs_iconbox_icon cs_gray_bg cs_center cs_radius_50">
                            <img src="Assets/Loyalty.svg" loading="lazy" alt="Car Icon">
                        </div>
                        <div class="cs_iconbox_info">
                            <h3 class="cs_fs_18 cs_mb_2">Ambition</h3>
                            <p class="cs_iconbox_subtitle mb-0">We are highly ambitious and genuinely care about our business.</p>
                        </div>
                    </div>
                    
                    <div class="cs_iconbox cs_style_2 cs_mb_12">
                        <div class="cs_iconbox_icon cs_gray_bg cs_center cs_radius_50">
                            <img src="Assets/responsibility.svg" loading="lazy" alt="Car Icon">
                        </div>
                        <div class="cs_iconbox_info">
                            <h3 class="cs_fs_18 cs_mb_2">Responsibility</h3>
                            <p class="cs_iconbox_subtitle mb-0">We recognize the importance of our responsibilities towards our customers and business partners.</p>
                        </div>
                    </div>
                    
                    <div class="cs_iconbox cs_style_2 cs_mb_12">
                        <div class="cs_iconbox_icon cs_gray_bg cs_center cs_radius_50">
                            <img src="Assets/Trust.svg" loading="lazy" alt="Car Icon">
                        </div>
                        <div class="cs_iconbox_info">
                            <h3 class="cs_fs_18 cs_mb_2">Loyalty</h3>
                            <p class="cs_iconbox_subtitle mb-0">We are committed to being loyal to our partners, customers, teams, and colleagues.</p>
                        </div>
                    </div>
                    
                    <a class="cs_btn" href="https://api.whatsapp.com/send?phone=+971566530614">
                        <span>CALL NOW</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                
                <div class="col-xl-4 animate__animated animate__fadeInRight">
                    <div class="cs_features_thumbnail_2 position-relative">
                        <img src="images/WhatsApp Image 2025-06-30 at 11.02.16_8db4fd42.jpg" loading="lazy" alt="Feature Image" class="img-fluid">
                    </div>
                    <div class="cs_features_thumbnail_3">
                        <img src="images/WhatsApp Image 2025-06-30 at 11.02.16_86d818de.jpg" loading="lazy" alt="Feature Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_105"></div>
    </section>

 <!-- 6th section -->

<style>
  .ba-container {
    position: relative;
    overflow: hidden;
  }
  .ba-before,
  .ba-after {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-size: cover;
    background-position: center;
  }
  .ba-before { width: 50%; }
  .ba-handle {
    position: absolute;
    top: 0;
    left: 50%;
    width: 4px;
    height: 100%;
    background: rgba(255,255,255,0.7);
    transform: translateX(-50%);
    cursor: ew-resize;
    z-index: 2;
  }
</style>


<!-- 7th section -->

    <style>
        /* Custom CSS to match original styling */
        .cs_height_80, .cs_height_lg_80 {
            height: 80px;
        }
        .cs_height_60 {
            height: 60px;
        }
        
        .cs_tabs {
            position: relative;
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
        
        .cs_tab_links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        
        .cs_tab_links li {
            margin-left: 15px;
        }
        
        .cs_tab_links li a {
            color: #0d6efd;
            text-decoration: none;
            font-weight: 500;
        }
        
        .cs_tab_links li.active a {
            font-weight: 700;
        }
        
        .cs_row_gap_60 {
            row-gap: 60px;
        }
        
        .cs_gap_y_30 {
            margin-top: 30px;
            margin-bottom: 30px;
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
        
        .cs_text_btn {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            color: #0d6efd;
            font-weight: 500;
        }
        
        .cs_btn_text {
            text-transform: uppercase;
            margin-right: 10px;
        }
        
        .cs_btn_icon {
            width: 20px;
            height: 20px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .cs_btn_icon i {
            position: absolute;
            transition: all 0.3s ease;
        }
        
        .cs_btn_icon i:last-child {
            opacity: 0;
            transform: translateX(-5px);
        }
        
        .cs_text_btn:hover .cs_btn_icon i:first-child {
            transform: translateX(5px);
        }
        
        .cs_text_btn:hover .cs_btn_icon i:last-child {
            opacity: 1;
            transform: translateX(0);
        }
        
        /* SVG icon styling */
        .cs_section_subtitle svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }
    </style>

    <section class="position-relative">
        <div class="cs_height_80 cs_height_lg_80"></div>
        <div class="container d-flex position-relative">
           </div>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6">
      <div class="position-relative">
        <div class="bg-white p-4">
          <div class="bg-primary mb-4" style="height: 2px; width: 50px;"></div>
          <h1 class="h3 mb-3">Ready To Get Moving? Get Your Free Quote</h1>
          <p class="mb-4">Ready to get moving? Contact us now for your free quote. Fast, reliable, and affordable moving services in Dubai today!

</p>
          
          <div class="d-flex mb-3">
            <div class="me-3">
              <img src="Assets/location.svg" loading="lazy" alt="Location Icon">
            </div>
            <div>
              <p class="mb-0">Dubai</p>
            </div>
          </div>
          
          <div class="d-flex mb-3">
            <div class="me-3">
              <img src="Assets/mail_open.svg" loading="lazy" alt="Mail Icon">
            </div>
            <div>
              <a href="hartowingservice24@gmail.com">hartowingservice24@gmail.com</a>
            </div>
          </div>
          
          <div class="d-flex">
            <div class="me-3">
              <img src="Assets/phone-call.svg" loading="lazy" alt="Phone Icon">
            </div>
            <div>
              <a href="tel:+971566530614">+971566530614</a><br>
              <!-- <a href="tel:+971507464712">+971582828757</a> -->
            </div>
          </div>
        </div>
        
        <div class="mt-4">
          <img class="img-fluid" src="images/WhatsApp Image 2025-06-30 at 11.02.16_32a4f6db.jpg" loading="lazy" alt="Contact Image">
        </div>
        
        <div class="bg-white p-3 position-absolute" style="bottom: 0; right: 0;">
          <!-- <h2 class="h3 text-primary">5,400</h2>
          <p class="small mb-0">Happy Clients</p> -->
        </div>
      </div>
    </div>
    
    <div class="col-lg-6">
      <div class="mb-4">
        <h2 class="h6 text-uppercase mb-2">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.9367 5.9528C12.1626 6.01733 12.3783 6.07787 12.7693 6.07787C13.5946 6.07787 14.4218 5.73787 15.0389 5.1208C15.8285 4.33093 16.1661 3.19973 15.9199 2.16827C15.9089 2.12215 15.8858 2.07981 15.8529 2.04563C15.82 2.01146 15.7786 1.98668 15.733 1.97387C15.6874 1.96077 15.6391 1.96016 15.5931 1.97213C15.5472 1.98409 15.5053 2.00818 15.4719 2.04187L14.8413 2.67253C14.6394 2.87413 14.3706 2.98533 14.0839 2.98533C13.7973 2.98533 13.5285 2.8744 13.3269 2.67253C13.1262 2.47155 13.0136 2.19918 13.0136 1.9152C13.0136 1.63122 13.1262 1.35885 13.3269 1.15787L13.9573 0.527466C13.9909 0.493964 14.015 0.452081 14.027 0.406152C14.039 0.360223 14.0385 0.311916 14.0256 0.266232C14.0127 0.220547 13.9878 0.179144 13.9535 0.146308C13.9192 0.113471 13.8768 0.0903949 13.8306 0.0794661C12.7991 -0.166934 11.6682 0.170933 10.8783 0.960533C10.1042 1.7344 9.71058 2.888 10.0463 4.06267L7.99858 6.11013L5.95218 4.06373C6.28712 2.89093 5.89565 1.73573 5.12018 0.960533C4.33058 0.170666 3.19938 -0.167467 2.16818 0.0794661C2.12214 0.0906185 2.07989 0.113812 2.04576 0.146671C2.01163 0.179529 1.98685 0.220871 1.97396 0.266459C1.96107 0.312048 1.96054 0.360243 1.97241 0.406108C1.98428 0.451972 2.00813 0.493855 2.04152 0.527466L2.67192 1.15787C2.87254 1.35885 2.98522 1.63122 2.98522 1.9152C2.98522 2.19918 2.87254 2.47155 2.67192 2.67253C2.47032 2.8744 2.20152 2.98533 1.91485 2.98533C1.62818 2.98533 1.35938 2.87413 1.15752 2.67253L0.527118 2.0416C0.493597 2.00804 0.451734 1.98404 0.405844 1.97205C0.359953 1.96007 0.311697 1.96054 0.26605 1.97342C0.220403 1.9863 0.179016 2.01112 0.146158 2.04532C0.113299 2.07952 0.0901572 2.12187 0.079118 2.168C-0.167015 3.19947 0.170585 4.33067 0.960185 5.12053C1.57778 5.73787 2.40552 6.07813 3.22952 6.07813C3.61965 6.07813 3.85512 6.012 4.06312 5.95227L6.10978 7.99867L4.06232 10.0461C2.89138 9.71227 1.73725 10.1013 0.960185 10.8781C0.170585 11.668 -0.167015 12.7992 0.079118 13.8307C0.0901342 13.8768 0.113271 13.9191 0.146136 13.9533C0.179001 13.9875 0.2204 14.0123 0.266051 14.0251C0.358851 14.0509 0.458851 14.0251 0.527118 13.9571L1.15778 13.3264C1.35886 13.1261 1.63114 13.0136 1.91498 13.0136C2.19883 13.0136 2.47111 13.1261 2.67218 13.3264C2.87405 13.5283 2.98498 13.7973 2.98498 14.0837C2.98498 14.3701 2.87378 14.6392 2.67218 14.8411L2.04178 15.4715C2.00815 15.505 1.98407 15.5469 1.97205 15.5928C1.96004 15.6387 1.96051 15.687 1.97343 15.7327C1.98634 15.7784 2.01123 15.8198 2.04552 15.8526C2.07981 15.8855 2.12225 15.9085 2.16845 15.9195C2.39138 15.9728 2.61912 15.9987 2.84685 15.9987C3.67272 15.9987 4.50178 15.6576 5.12072 15.0384C5.89485 14.2645 6.28845 13.1109 5.95272 11.9363L8.00045 9.8888L10.0469 11.9352C9.71192 13.108 10.1034 14.2632 10.8789 15.0384C11.4981 15.6573 12.3269 15.9987 13.1527 15.9987C13.3805 15.9987 13.6082 15.9728 13.8311 15.9195C13.8772 15.9083 13.9194 15.8851 13.9535 15.8523C13.9877 15.8194 14.0124 15.7781 14.0253 15.7325C14.0382 15.6869 14.0388 15.6387 14.0269 15.5928C14.015 15.547 13.9912 15.5051 13.9578 15.4715L13.3274 14.8411C13.1255 14.6392 13.0146 14.3701 13.0146 14.0837C13.0146 13.7973 13.1258 13.5283 13.3274 13.3264C13.5285 13.1261 13.8007 13.0136 14.0846 13.0136C14.3684 13.0136 14.6407 13.1261 14.8418 13.3264L15.4725 13.9571C15.506 13.9905 15.5479 14.0143 15.5938 14.0262C15.6396 14.0381 15.6878 14.0376 15.7334 14.0247C15.779 14.0119 15.8203 13.9871 15.8532 13.953C15.886 13.9189 15.9093 13.8767 15.9205 13.8307C16.1666 12.7992 15.829 11.668 15.0394 10.8781C14.2663 10.1053 13.1109 9.70933 11.9365 10.0464L9.88978 8L11.9373 5.95253L11.9367 5.9528ZM11.2557 1.33733C11.7741 0.819199 12.465 0.533066 13.1506 0.533066H13.1967L12.9498 0.780266C12.6463 1.08373 12.4791 1.4864 12.4791 1.91467C12.4791 2.34293 12.6463 2.7456 12.9498 3.04907C13.2533 3.35253 13.6551 3.51813 14.0842 3.51813C14.5133 3.51813 14.9159 3.35147 15.2186 3.04907L15.4655 2.80187C15.4786 3.50293 15.1917 4.21333 14.6618 4.7432C14.0042 5.4008 13.0666 5.68293 12.2095 5.4784C11.7917 5.38533 11.425 5.18373 11.1202 4.87867C10.8154 4.5736 10.6133 4.20693 10.5194 3.78507C10.3159 2.93253 10.5981 1.9944 11.2557 1.3368V1.33733ZM3.78578 5.48C2.93325 5.68373 1.99512 5.40133 1.33752 4.74373C0.807651 4.21387 0.520718 3.50347 0.533785 2.8024L0.780718 3.0496C1.08338 3.352 1.48632 3.51867 1.91512 3.51867C2.34392 3.51867 2.74712 3.352 3.04925 3.0496C3.35272 2.74613 3.51992 2.34347 3.51992 1.9152C3.51992 1.48693 3.35272 1.08427 3.04925 0.780799L2.80232 0.533599C3.51058 0.525866 4.21352 0.807733 4.74365 1.3376C5.40125 1.9952 5.68338 2.93307 5.47912 3.78987C5.38632 4.20747 5.18445 4.57387 4.87912 4.8792C4.57378 5.18453 4.20765 5.38587 3.78578 5.48ZM4.60365 5.73867C4.84373 5.61088 5.06362 5.44832 5.25618 5.25627C5.44814 5.06361 5.61068 4.84374 5.73858 4.60373L7.62205 6.48693L6.48712 7.62187L4.60365 5.73867ZM4.74365 14.6621C4.21378 15.1917 3.51192 15.4752 2.80232 15.4661L3.04925 15.2189C3.35165 14.9163 3.51832 14.5133 3.51832 14.0845C3.51832 13.6557 3.35165 13.2528 3.04925 12.9501C2.74823 12.6497 2.3403 12.4809 1.91498 12.4809C1.48967 12.4809 1.08174 12.6497 0.780718 12.9501L0.533785 13.1973C0.520718 12.4963 0.807651 11.7859 1.33752 11.256C1.99538 10.5987 2.93325 10.3168 3.78978 10.5208C4.20765 10.6139 4.57432 10.8155 4.87912 11.1205C5.18392 11.4256 5.38605 11.7923 5.47992 12.2141C5.68338 13.0667 5.40125 14.0045 4.74365 14.6621ZM5.25618 10.7435C5.06331 10.5513 4.84317 10.3885 4.60285 10.2605L10.2605 4.60293C10.3884 4.84331 10.551 5.06354 10.7431 5.25653C10.936 5.44873 11.1561 5.61146 11.3965 5.73947L5.73885 11.3971C5.61092 11.1567 5.44829 10.9365 5.25618 10.7435ZM12.7711 10.4549C13.4562 10.4549 14.1455 10.7395 14.6621 11.256C15.1919 11.7859 15.4789 12.4963 15.4658 13.1973L15.2189 12.9501C14.9178 12.6497 14.5099 12.4809 14.0846 12.4809C13.6593 12.4809 13.2513 12.6497 12.9503 12.9501C12.8011 13.0989 12.6828 13.2757 12.6023 13.4704C12.5217 13.6651 12.4806 13.8738 12.4813 14.0845C12.4806 14.2952 12.5217 14.504 12.6023 14.6987C12.6828 14.8934 12.8011 15.0702 12.9503 15.2189L13.1973 15.4661C12.4935 15.4736 11.7861 15.192 11.2559 14.6621C10.5983 14.0045 10.3162 13.0667 10.5205 12.2099C10.611 11.7964 10.8194 11.418 11.1205 11.1205C11.5711 10.6699 12.1623 10.4549 12.7711 10.4549ZM11.3959 10.2611C11.1558 10.3889 10.936 10.5514 10.7434 10.7435C10.5514 10.9361 10.3889 11.156 10.261 11.396L8.37752 9.5128L9.51245 8.37787L11.3959 10.2611Z" fill="currentColor"></path>
          </svg>
          Contact us
        </h2>
        <h2 class="h1 mb-0">Book An Appointment</h2>
      </div>
      
      <form id="cs_form">
        <div class="row g-3">
          <div class="col-sm-6">
            <input type="text" name="name" placeholder="Your Name" class="form-control rounded" required>
          </div>
          <div class="col-sm-6">
            <input type="email" name="email" placeholder="Your Email" class="form-control rounded" required>
          </div>
          <div class="col-sm-6">
            <input type="text" name="phone" placeholder="Phone Number" class="form-control rounded" required>
          </div>
          <div class="col-sm-6">
             <input type="text" name="Subject " placeholder="Subject " class="form-control rounded" required>

            <!-- <select class="form-select rounded" name="service" required>
              <option value="" disabled selected>Choose an option</option>
              <option value="Air Conditioning Maintenance Service">Air Conditioning Maintenance Service</option>
              <option value="Home Appliances Repair Service">Home Appliances Repair Service</option>
              <option value="Baumatic Appliances Repair Service">Baumatic Appliances Repair Service</option>
              <option value="Commercial Appliances Service">Commercial Appliances Service</option>
              <option value="Freezer Maintenance Service">Freezer Maintenance Service</option>
              <option value="Food Chiller Service">Food Chiller Service</option>
              <option value="AMC Service">AMC Service</option>
              <option value="Other">Other</option>
            </select> -->
          </div>
          <div class="col-12">
            <textarea name="message" rows="6" placeholder="Message" class="form-control" required></textarea>
          </div>
          <div class="col-12 mt-4">
  <button type="submit" class="btn btn-primary">
    <span>Submit</span>
    <i class="bi bi-arrow-right ms-2"></i>
  </button>
</div>

        </div>
      </form>
    </div>
  </div>
</div>

  <!-- reCAPTCHA Badge -->
<!-- <div class="grecaptcha-badge position-fixed" style="width: 256px; height: 60px; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
  <div class="grecaptcha-logo">
    <iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-k8uboyz7d14g" frameborder="0" scrolling="no"
      sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
      src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc3iU4rAAAAAA0jw06XlEnCQsXoc_vxT8piZLLX&amp;co=aHR0cHM6Ly93d3cuZmFqc2VydmljZXMuYWU6NDQz&amp;hl=en&amp;type=image&amp;v=GUGrl5YkSwpBsxsF3eY665Ye&amp;theme=light&amp;size=invisible&amp;badge=bottomright&amp;cb=5h87w7xv0fyx"></iframe>
  </div>
  <div class="grecaptcha-error"></div>
  <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response d-none"
    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none;"></textarea>
</div> -->

<!-- Submit Button -->

<!-- Google Map -->
<div class="container-fluid p-0 my-5">
  <div style="height: 200px;">
    <iframe
      loading="lazy"
      src="https://maps.google.com/maps?q=Dubai&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near"
      title="Dubai"
      aria-label="Dubai"
      style="width: 100%; height: 100%; border: 0;"
    ></iframe>
  </div>
</div>


<!-- Testimonial Section -->
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
  
<style>
  /* Hover effects */
  .hover-shadow-lg:hover {
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
  }
  .hover-zoom {
    transition: transform 0.3s ease;
  }
  .hover-zoom:hover {
    transform: scale(1.05);
  }
  .hover-text-primary:hover {
    color: #0d6efd !important;
  }
  .transition-all {
    transition: all 0.3s ease;
  }
  /* Date circle adjustment */
  .card-body {
    padding-top: 2rem !important;
  }
</style>
   
  </div>
</section>

<section class="py-5" style="background-image: url('Assets/processbg.jpg'); background-size: cover; background-position: center;">
  <div class="container py-5">
    <div class="text-center mb-5">
      <div class="d-flex justify-content-center align-items-center mb-3">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
          <path d="M11.9367 5.9528C12.1626 6.01733 12.3783 6.07787 12.7693 6.07787C13.5946 6.07787 14.4218 5.73787 15.0389 5.1208C15.8285 4.33093 16.1661 3.19973 15.9199 2.16827C15.9089 2.12215 15.8858 2.07981 15.8529 2.04563C15.82 2.01146 15.7786 1.98668 15.733 1.97387C15.6874 1.96077 15.6391 1.96016 15.5931 1.97213C15.5472 1.98409 15.5053 2.00818 15.4719 2.04187L14.8413 2.67253C14.6394 2.87413 14.3706 2.98533 14.0839 2.98533C13.7973 2.98533 13.5285 2.8744 13.3269 2.67253C13.1262 2.47155 13.0136 2.19918 13.0136 1.9152C13.0136 1.63122 13.1262 1.35885 13.3269 1.15787L13.9573 0.527466C13.9909 0.493964 14.015 0.452081 14.027 0.406152C14.039 0.360223 14.0385 0.311916 14.0256 0.266232C14.0127 0.220547 13.9878 0.179144 13.9535 0.146308C13.9192 0.113471 13.8768 0.0903949 13.8306 0.0794661C12.7991 -0.166934 11.6682 0.170933 10.8783 0.960533C10.1042 1.7344 9.71058 2.888 10.0463 4.06267L7.99858 6.11013L5.95218 4.06373C6.28712 2.89093 5.89565 1.73573 5.12018 0.960533C4.33058 0.170666 3.19938 -0.167467 2.16818 0.0794661C2.12214 0.0906185 2.07989 0.113812 2.04576 0.146671C2.01163 0.179529 1.98685 0.220871 1.97396 0.266459C1.96107 0.312048 1.96054 0.360243 1.97241 0.406108C1.98428 0.451972 2.00813 0.493855 2.04152 0.527466L2.67192 1.15787C2.87254 1.35885 2.98522 1.63122 2.98522 1.9152C2.98522 2.19918 2.87254 2.47155 2.67192 2.67253C2.47032 2.8744 2.20152 2.98533 1.91485 2.98533C1.62818 2.98533 1.35938 2.87413 1.15752 2.67253L0.527118 2.0416C0.493597 2.00804 0.451734 1.98404 0.405844 1.97205C0.359953 1.96007 0.311697 1.96054 0.26605 1.97342C0.220403 1.9863 0.179016 2.01112 0.146158 2.04532C0.113299 2.07952 0.0901572 2.12187 0.079118 2.168C-0.167015 3.19947 0.170585 4.33067 0.960185 5.12053C1.57778 5.73787 2.40552 6.07813 3.22952 6.07813C3.61965 6.07813 3.85512 6.012 4.06312 5.95227L6.10978 7.99867L4.06232 10.0461C2.89138 9.71227 1.73725 10.1013 0.960185 10.8781C0.170585 11.668 -0.167015 12.7992 0.079118 13.8307C0.0901342 13.8768 0.113271 13.9191 0.146136 13.9533C0.179001 13.9875 0.2204 14.0123 0.266051 14.0251C0.358851 14.0509 0.458851 14.0251 0.527118 13.9571L1.15778 13.3264C1.35886 13.1261 1.63114 13.0136 1.91498 13.0136C2.19883 13.0136 2.47111 13.1261 2.67218 13.3264C2.87405 13.5283 2.98498 13.7973 2.98498 14.0837C2.98498 14.3701 2.87378 14.6392 2.67218 14.8411L2.04178 15.4715C2.00815 15.505 1.98407 15.5469 1.97205 15.5928C1.96004 15.6387 1.96051 15.687 1.97343 15.7327C1.98634 15.7784 2.01123 15.8198 2.04552 15.8526C2.07981 15.8855 2.12225 15.9085 2.16845 15.9195C2.39138 15.9728 2.61912 15.9987 2.84685 15.9987C3.67272 15.9987 4.50178 15.6576 5.12072 15.0384C5.89485 14.2645 6.28845 13.1109 5.95272 11.9363L8.00045 9.8888L10.0469 11.9352C9.71192 13.108 10.1034 14.2632 10.8789 15.0384C11.4981 15.6573 12.3269 15.9987 13.1527 15.9987C13.3805 15.9987 13.6082 15.9728 13.8311 15.9195C13.8772 15.9083 13.9194 15.8851 13.9535 15.8523C13.9877 15.8194 14.0124 15.7781 14.0253 15.7325C14.0382 15.6869 14.0388 15.6387 14.0269 15.5928C14.015 15.547 13.9912 15.5051 13.9578 15.4715L13.3274 14.8411C13.1255 14.6392 13.0146 14.3701 13.0146 14.0837C13.0146 13.7973 13.1258 13.5283 13.3274 13.3264C13.5285 13.1261 13.8007 13.0136 14.0846 13.0136C14.3684 13.0136 14.6407 13.1261 14.8418 13.3264L15.4725 13.9571C15.506 13.9905 15.5479 14.0143 15.5938 14.0262C15.6396 14.0381 15.6878 14.0376 15.7334 14.0247C15.779 14.0119 15.8203 13.9871 15.8532 13.953C15.886 13.9189 15.9093 13.8767 15.9205 13.8307C16.1666 12.7992 15.829 11.668 15.0394 10.8781C14.2663 10.1053 13.1109 9.70933 11.9365 10.0464L9.88978 8L11.9373 5.95253L11.9367 5.9528ZM11.2557 1.33733C11.7741 0.819199 12.465 0.533066 13.1506 0.533066H13.1967L12.9498 0.780266C12.6463 1.08373 12.4791 1.4864 12.4791 1.91467C12.4791 2.34293 12.6463 2.7456 12.9498 3.04907C13.2533 3.35253 13.6551 3.51813 14.0842 3.51813C14.5133 3.51813 14.9159 3.35147 15.2186 3.04907L15.4655 2.80187C15.4786 3.50293 15.1917 4.21333 14.6618 4.7432C14.0042 5.4008 13.0666 5.68293 12.2095 5.4784C11.7917 5.38533 11.425 5.18373 11.1202 4.87867C10.8154 4.5736 10.6133 4.20693 10.5194 3.78507C10.3159 2.93253 10.5981 1.9944 11.2557 1.3368V1.33733ZM3.78578 5.48C2.93325 5.68373 1.99512 5.40133 1.33752 4.74373C0.807651 4.21387 0.520718 3.50347 0.533785 2.8024L0.780718 3.0496C1.08338 3.352 1.48632 3.51867 1.91512 3.51867C2.34392 3.51867 2.74712 3.352 3.04925 3.0496C3.35272 2.74613 3.51992 2.34347 3.51992 1.9152C3.51992 1.48693 3.35272 1.08427 3.04925 0.780799L2.80232 0.533599C3.51058 0.525866 4.21352 0.807733 4.74365 1.3376C5.40125 1.9952 5.68338 2.93307 5.47912 3.78987C5.38632 4.20747 5.18445 4.57387 4.87912 4.8792C4.57378 5.18453 4.20765 5.38587 3.78578 5.48ZM4.60365 5.73867C4.84373 5.61088 5.06362 5.44832 5.25618 5.25627C5.44814 5.06361 5.61068 4.84374 5.73858 4.60373L7.62205 6.48693L6.48712 7.62187L4.60365 5.73867ZM4.74365 14.6621C4.21378 15.1917 3.51192 15.4752 2.80232 15.4661L3.04925 15.2189C3.35165 14.9163 3.51832 14.5133 3.51832 14.0845C3.51832 13.6557 3.35165 13.2528 3.04925 12.9501C2.74823 12.6497 2.3403 12.4809 1.91498 12.4809C1.48967 12.4809 1.08174 12.6497 0.780718 12.9501L0.533785 13.1973C0.520718 12.4963 0.807651 11.7859 1.33752 11.256C1.99538 10.5987 2.93325 10.3168 3.78978 10.5208C4.20765 10.6139 4.57432 10.8155 4.87912 11.1205C5.18392 11.4256 5.38605 11.7923 5.47992 12.2141C5.68338 13.0667 5.40125 14.0045 4.74365 14.6621ZM5.25618 10.7435C5.06331 10.5513 4.84317 10.3885 4.60285 10.2605L10.2605 4.60293C10.3884 4.84331 10.551 5.06354 10.7431 5.25653C10.936 5.44873 11.1561 5.61146 11.3965 5.73947L5.73885 11.3971C5.61092 11.1567 5.44829 10.9365 5.25618 10.7435ZM12.7711 10.4549C13.4562 10.4549 14.1455 10.7395 14.6621 11.256C15.1919 11.7859 15.4789 12.4963 15.4658 13.1973L15.2189 12.9501C14.9178 12.6497 14.5099 12.4809 14.0846 12.4809C13.6593 12.4809 13.2513 12.6497 12.9503 12.9501C12.8011 13.0989 12.6828 13.2757 12.6023 13.4704C12.5217 13.6651 12.4806 13.8738 12.4813 14.0845C12.4806 14.2952 12.5217 14.504 12.6023 14.6987C12.6828 14.8934 12.8011 15.0702 12.9503 15.2189L13.1973 15.4661C12.4935 15.4736 11.7861 15.192 11.2559 14.6621C10.5983 14.0045 10.3162 13.0667 10.5205 12.2099C10.611 11.7964 10.8194 11.418 11.1205 11.1205C11.5711 10.6699 12.1623 10.4549 12.7711 10.4549ZM11.3959 10.2611C11.1558 10.3889 10.936 10.5514 10.7434 10.7435C10.5514 10.9361 10.3889 11.156 10.261 11.396L8.37752 9.5128L9.51245 8.37787L11.3959 10.2611Z" fill="currentColor"></path>
        </svg>
        <h6 class="text-uppercase mb-0">Our Values</h6>
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="ms-2">
          <path d="M11.9367 5.9528C12.1626 6.01733 12.3783 6.07787 12.7693 6.07787C13.5946 6.07787 14.4218 5.73787 15.0389 5.1208C15.8285 4.33093 16.1661 3.19973 15.9199 2.16827C15.9089 2.12215 15.8858 2.07981 15.8529 2.04563C15.82 2.01146 15.7786 1.98668 15.733 1.97387C15.6874 1.96077 15.6391 1.96016 15.5931 1.97213C15.5472 1.98409 15.5053 2.00818 15.4719 2.04187L14.8413 2.67253C14.6394 2.87413 14.3706 2.98533 14.0839 2.98533C13.7973 2.98533 13.5285 2.8744 13.3269 2.67253C13.1262 2.47155 13.0136 2.19918 13.0136 1.9152C13.0136 1.63122 13.1262 1.35885 13.3269 1.15787L13.9573 0.527466C13.9909 0.493964 14.015 0.452081 14.027 0.406152C14.039 0.360223 14.0385 0.311916 14.0256 0.266232C14.0127 0.220547 13.9878 0.179144 13.9535 0.146308C13.9192 0.113471 13.8768 0.0903949 13.8306 0.0794661C12.7991 -0.166934 11.6682 0.170933 10.8783 0.960533C10.1042 1.7344 9.71058 2.888 10.0463 4.06267L7.99858 6.11013L5.95218 4.06373C6.28712 2.89093 5.89565 1.73573 5.12018 0.960533C4.33058 0.170666 3.19938 -0.167467 2.16818 0.0794661C2.12214 0.0906185 2.07989 0.113812 2.04576 0.146671C2.01163 0.179529 1.98685 0.220871 1.97396 0.266459C1.96107 0.312048 1.96054 0.360243 1.97241 0.406108C1.98428 0.451972 2.00813 0.493855 2.04152 0.527466L2.67192 1.15787C2.87254 1.35885 2.98522 1.63122 2.98522 1.9152C2.98522 2.19918 2.87254 2.47155 2.67192 2.67253C2.47032 2.8744 2.20152 2.98533 1.91485 2.98533C1.62818 2.98533 1.35938 2.87413 1.15752 2.67253L0.527118 2.0416C0.493597 2.00804 0.451734 1.98404 0.405844 1.97205C0.359953 1.96007 0.311697 1.96054 0.26605 1.97342C0.220403 1.9863 0.179016 2.01112 0.146158 2.04532C0.113299 2.07952 0.0901572 2.12187 0.079118 2.168C-0.167015 3.19947 0.170585 4.33067 0.960185 5.12053C1.57778 5.73787 2.40552 6.07813 3.22952 6.07813C3.61965 6.07813 3.85512 6.012 4.06312 5.95227L6.10978 7.99867L4.06232 10.0461C2.89138 9.71227 1.73725 10.1013 0.960185 10.8781C0.170585 11.668 -0.167015 12.7992 0.079118 13.8307C0.0901342 13.8768 0.113271 13.9191 0.146136 13.9533C0.179001 13.9875 0.2204 14.0123 0.266051 14.0251C0.358851 14.0509 0.458851 14.0251 0.527118 13.9571L1.15778 13.3264C1.35886 13.1261 1.63114 13.0136 1.91498 13.0136C2.19883 13.0136 2.47111 13.1261 2.67218 13.3264C2.87405 13.5283 2.98498 13.7973 2.98498 14.0837C2.98498 14.3701 2.87378 14.6392 2.67218 14.8411L2.04178 15.4715C2.00815 15.505 1.98407 15.5469 1.97205 15.5928C1.96004 15.6387 1.96051 15.687 1.97343 15.7327C1.98634 15.7784 2.01123 15.8198 2.04552 15.8526C2.07981 15.8855 2.12225 15.9085 2.16845 15.9195C2.39138 15.9728 2.61912 15.9987 2.84685 15.9987C3.67272 15.9987 4.50178 15.6576 5.12072 15.0384C5.89485 14.2645 6.28845 13.1109 5.95272 11.9363L8.00045 9.8888L10.0469 11.9352C9.71192 13.108 10.1034 14.2632 10.8789 15.0384C11.4981 15.6573 12.3269 15.9987 13.1527 15.9987C13.3805 15.9987 13.6082 15.9728 13.8311 15.9195C13.8772 15.9083 13.9194 15.8851 13.9535 15.8523C13.9877 15.8194 14.0124 15.7781 14.0253 15.7325C14.0382 15.6869 14.0388 15.6387 14.0269 15.5928C14.015 15.547 13.9912 15.5051 13.9578 15.4715L13.3274 14.8411C13.1255 14.6392 13.0146 14.3701 13.0146 14.0837C13.0146 13.7973 13.1258 13.5283 13.3274 13.3264C13.5285 13.1261 13.8007 13.0136 14.0846 13.0136C14.3684 13.0136 14.6407 13.1261 14.8418 13.3264L15.4725 13.9571C15.506 13.9905 15.5479 14.0143 15.5938 14.0262C15.6396 14.0381 15.6878 14.0376 15.7334 14.0247C15.779 14.0119 15.8203 13.9871 15.8532 13.953C15.886 13.9189 15.9093 13.8767 15.9205 13.8307C16.1666 12.7992 15.829 11.668 15.0394 10.8781C14.2663 10.1053 13.1109 9.70933 11.9365 10.0464L9.88978 8L11.9373 5.95253L11.9367 5.9528ZM11.2557 1.33733C11.7741 0.819199 12.465 0.533066 13.1506 0.533066H13.1967L12.9498 0.780266C12.6463 1.08373 12.4791 1.4864 12.4791 1.91467C12.4791 2.34293 12.6463 2.7456 12.9498 3.04907C13.2533 3.35253 13.6551 3.51813 14.0842 3.51813C14.5133 3.51813 14.9159 3.35147 15.2186 3.04907L15.4655 2.80187C15.4786 3.50293 15.1917 4.21333 14.6618 4.7432C14.0042 5.4008 13.0666 5.68293 12.2095 5.4784C11.7917 5.38533 11.425 5.18373 11.1202 4.87867C10.8154 4.5736 10.6133 4.20693 10.5194 3.78507C10.3159 2.93253 10.5981 1.9944 11.2557 1.3368V1.33733ZM3.78578 5.48C2.93325 5.68373 1.99512 5.40133 1.33752 4.74373C0.807651 4.21387 0.520718 3.50347 0.533785 2.8024L0.780718 3.0496C1.08338 3.352 1.48632 3.51867 1.91512 3.51867C2.34392 3.51867 2.74712 3.352 3.04925 3.0496C3.35272 2.74613 3.51992 2.34347 3.51992 1.9152C3.51992 1.48693 3.35272 1.08427 3.04925 0.780799L2.80232 0.533599C3.51058 0.525866 4.21352 0.807733 4.74365 1.3376C5.40125 1.9952 5.68338 2.93307 5.47912 3.78987C5.38632 4.20747 5.18445 4.57387 4.87912 4.8792C4.57378 5.18453 4.20765 5.38587 3.78578 5.48ZM4.60365 5.73867C4.84373 5.61088 5.06362 5.44832 5.25618 5.25627C5.44814 5.06361 5.61068 4.84374 5.73858 4.60373L7.62205 6.48693L6.48712 7.62187L4.60365 5.73867ZM4.74365 14.6621C4.21378 15.1917 3.51192 15.4752 2.80232 15.4661L3.04925 15.2189C3.35165 14.9163 3.51832 14.5133 3.51832 14.0845C3.51832 13.6557 3.35165 13.2528 3.04925 12.9501C2.74823 12.6497 2.3403 12.4809 1.91498 12.4809C1.48967 12.4809 1.08174 12.6497 0.780718 12.9501L0.533785 13.1973C0.520718 12.4963 0.807651 11.7859 1.33752 11.256C1.99538 10.5987 2.93325 10.3168 3.78978 10.5208C4.20765 10.6139 4.57432 10.8155 4.87912 11.1205C5.18392 11.4256 5.38605 11.7923 5.47992 12.2141C5.68338 13.0667 5.40125 14.0045 4.74365 14.6621ZM5.25618 10.7435C5.06331 10.5513 4.84317 10.3885 4.60285 10.2605L10.2605 4.60293C10.3884 4.84331 10.551 5.06354 10.7431 5.25653C10.936 5.44873 11.1561 5.61146 11.3965 5.73947L5.73885 11.3971C5.61092 11.1567 5.44829 10.9365 5.25618 10.7435ZM12.7711 10.4549C13.4562 10.4549 14.1455 10.7395 14.6621 11.256C15.1919 11.7859 15.4789 12.4963 15.4658 13.1973L15.2189 12.9501C14.9178 12.6497 14.5099 12.4809 14.0846 12.4809C13.6593 12.4809 13.2513 12.6497 12.9503 12.9501C12.8011 13.0989 12.6828 13.2757 12.6023 13.4704C12.5217 13.6651 12.4806 13.8738 12.4813 14.0845C12.4806 14.2952 12.5217 14.504 12.6023 14.6987C12.6828 14.8934 12.8011 15.0702 12.9503 15.2189L13.1973 15.4661C12.4935 15.4736 11.7861 15.192 11.2559 14.6621C10.5983 14.0045 10.3162 13.0667 10.5205 12.2099C10.611 11.7964 10.8194 11.418 11.1205 11.1205C11.5711 10.6699 12.1623 10.4549 12.7711 10.4549ZM11.3959 10.2611C11.1558 10.3889 10.936 10.5514 10.7434 10.7435C10.5514 10.9361 10.3889 11.156 10.261 11.396L8.37752 9.5128L9.51245 8.37787L11.3959 10.2611Z" fill="currentColor"></path>
        </svg>
      </div>
      <h2 class="mb-4">Our Professional Working Process</h2>
      <!-- <h5 class="mb-5">Make It Happens In 4 Steps</h5> -->
    </div>
    <div class="row g-4">
      <div class="col-xl-3 col-md-6">
        <div class="card border-0 h-100 bg-white rounded-4">
          <div class="card-body text-center p-4">
            <div class="mb-4">
              <img src="images/14.jpg" loading="lazy" alt="icon" class="img-fluid" style="max-width: 80px; height: auto;">
            </div>
            <h5 class="card-title mb-3"> Reliability    </h5>
            <p class="card-text">We prioritize reliability, delivering prompt and trustworthy towing and roadside assistance services every time.


</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card border-0 h-100 bg-white rounded-4">
          <div class="card-body text-center p-4">
            <div class="mb-4">
              <img src="images/13.jpg" loading="lazy" alt="icon" class="img-fluid" style="max-width: 80px; height: auto;">
            </div>
            <h5 class="card-title mb-3">Prompt Response
</h5>
            <p class="card-text">We guarantee a prompt response, reaching you quickly whenever you need roadside help or towing services.
</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card border-0 h-100 bg-white rounded-4">
          <div class="card-body text-center p-4">
            <div class="mb-4">
              <img src="images/12.jpg" loading="lazy" alt="icon" class="img-fluid" style="max-width: 80px; height: auto;">
            </div>
            <h5 class="card-title mb-3">Expertise
</h5>
            <p class="card-text">We bring expertise to every job, ensuring professional handling of all vehicles with care and precision.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card border-0 h-100 bg-white rounded-4">
          <div class="card-body text-center p-4">
            <div class="mb-4">
              <img src="images/11.jpg" loading="lazy" alt="icon" class="img-fluid" style="max-width: 80px; height: auto;">
            </div>
            <h5 class="card-title mb-3">Transparent Pricing</h5>
            <p class="card-text">We offer transparent pricing with no hidden charges, ensuring you know exactly what you’re paying for.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
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