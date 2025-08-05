<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Character encoding -->
  <meta charset="UTF-8" />

  <!-- CSRF token for frameworks like Laravel -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Viewport for responsive design -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Page Title -->
  <title>مشتري الأثاث المستعمل في الرياض | شراء وبيع الأثاث المستعمل بأفضل الأسعار | 0501110433</title>

  <!-- SEO Meta Tags -->
  @include('meta')
</head>

<body>

 @include('navbar')
<section class="hero-section">
  <div class="hero-overlay">
    <div class="container text-center hero-content">
      <h1>أفضل مشتري الأثاث المستعمل في دبي</h1>
      <p>
        نشتري الأثاث المستعمل والأجهزة الكهربائية والإلكترونيات في جميع أنحاء دبي. احصل على عروض نقدية فورية وخدمة نقل بدون متاعب اليوم.
      </p>
      <a href="https://wa.me/966501110433" 
         class="btn btn-primary whatsapp-btn mx-auto d-block"
         target="_blank">
        <i class="bi bi-whatsapp"></i> اتصل الآن
      </a>
    </div>
  </div>
</section>

<style>
  :root {
    --primary-color: #FF4500; /* OrangeRed */
    --background-color: #ffffff;
    --text-color: #000000;
  }

  body {
    padding: 3px;
    margin: 0 auto;
    max-width: 100%;
    overflow-x: hidden; /* prevents horizontal scroll */
  }

  html {
    overflow-x: hidden;
  }

  .whatsapp-btn {
    max-width: 200px;
  }

  .hero-section {
    position: relative;
    width: 100%;
    height: 400px; /* smaller height */
    overflow: hidden;
    background-image: url('images/WhatsApp Image 2025-07-23 at 12.16.07_4f41a053.jpg'); /* Single static image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .hero-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    padding: 20px;
  }

  .hero-content {
    color: var(--background-color);
    max-width: 800px;
  }

  .hero-content h1 {
    font-size: 2.5rem;
    margin-bottom: 15px;
    font-weight: bold;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
  }

  .hero-content p {
    font-size: 1.1rem;
    margin-bottom: 20px;
    line-height: 1.5;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
  }

  .btn-primary {
    background-color: var(--primary-color);
    border: none;
    padding: 12px 30px;
    font-weight: bold;
    color: var(--background-color);
    border-radius: 5px;
    transition: background 0.3s;
  }

  .btn-primary:hover {
    background-color: #cc3700;
  }

  @media (max-width: 767.98px) {
    .btn-primary {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 10px 16px;
      font-size: 0.9rem;
      text-indent: -6px;
    }
    .hero-content h1 {
      font-size: 2rem;
    }
    .hero-content p {
      font-size: 1rem;
    }
  }
</style>
@include('aboutsection')
@include('WhyChooseSection')
@include('services section')
@include('StatsSection')
<style>
        body {
            font-family: 'Tajawal', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            direction: ltr;
        }
        
        .gallery-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .section-header h2 {
            font-size: 36px;
            color: #e74c3c;
            margin-bottom: 15px;
        }
        
        .section-header p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .filter-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .filter-btn {
            padding: 12px 25px;
            background-color: #e67e22;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filter-btn:hover {
            background-color: #d35400;
            transform: translateY(-2px);
        }
        
        .filter-btn.active {
            background-color: #c0392b;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            height: 250px;
            background-color: #fff;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        .item-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(231, 76, 60, 0.9), transparent);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        
        .gallery-item:hover .item-overlay {
            transform: translateY(0);
        }
        
        .item-overlay h3 {
            margin: 0;
            font-size: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        @media (max-width: 768px) {
            .filter-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .filter-btn {
                width: 100%;
                max-width: 300px;
            }
            
            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="gallery-section">
        <div class="section-header">
            <h2>مشتري الأثاث المستعمل في الرياض</h2>
            <p>نشتري جميع أنواع الأثاث المستعمل والأجهزة المنزلية والمعدات المكتبية في الرياض. احصل على نقد فوري مقابل أغراضك المستعملة من خلال خدمتنا المحترفة. نقدم تقييم مجاني واستلام في نفس اليوم.</p>
        </div>
        
        <div class="filter-buttons d-flex flex-wrap justify-content-center gap-2 mb-4">
            <button class="filter-btn btn btn-sm active" data-filter="home" style="
                background-color: var(--primary-red);
                color: white;
                border: none;
                border-radius: 20px;
                padding: 5px 15px;
                font-size: 14px;
                font-weight: 500;
                transition: all 0.3s ease;
            ">مشتري الأثاث المستعمل</button>
            <button class="filter-btn btn btn-sm" data-filter="office" style="
                background-color: white;
                color: var(--primary-red);
                border: 1px solid var(--primary-red);
                border-radius: 20px;
                padding: 5px 15px;
                font-size: 14px;
                font-weight: 500;
                transition: all 0.3s ease;
            ">مشتري الأثاث المكتبي</button>
            
            <button class="filter-btn btn btn-sm" data-filter="home" style="
                background-color: white;
                color: var(--primary-red);
                border: 1px solid var(--primary-red);
                border-radius: 20px;
                padding: 5px 15px;
                font-size: 14px;
                font-weight: 500;
                transition: all 0.3s ease;
            ">مشتري الأثاث المنزلي</button>
            
            <button class="filter-btn btn btn-sm" data-filter="appliances" style="
                background-color: white;
                color: var(--primary-red);
                border: 1px solid var(--primary-red);
                border-radius: 20px;
                padding: 5px 15px;
                font-size: 14px;
                font-weight: 500;
                transition: all 0.3s ease;
            ">مشتري الأجهزة الكهربائية</button>
        </div>
        
        <div class="gallery-grid" id="galleryGrid">
            <div class="gallery-item all" data-category="all">
                <img src="images/WhatsApp Image 2025-07-23 at 12.16.06_df537377.jpg" alt="مشتري أثاث مستعمل في الرياض">
                <div class="item-overlay">
                    <h3>أثاث مستعمل عالي الجودة</h3>
                </div>
            </div>
 
            <div class="gallery-item all" data-category="all">
                <img src="images/Bedroom Furniture.webp" alt="أثاث غرف النوم">
                <div class="item-overlay">
                    <h3>أثاث غرف النوم</h3>
                </div>
            </div>
            <div class="gallery-item all" data-category="all">
                <img src="images/Wardrobes & Storage.webp" alt="مشتري خزانات الملابس">
                <div class="item-overlay">
                    <h3>خزانات الملابس والتخزين</h3>
                </div>
            </div>
            
            <!-- Home Furniture Images -->
            <div class="gallery-item home" data-category="home" style="display: none;">
                <img src="images/Living Room Sets.webp" alt="أثاث منزلي مستعمل">
                <div class="item-overlay">
                    <h3>أثاث صالة المعيشة</h3>
                </div>
            </div>
            <div class="gallery-item home" data-category="home" style="display: none;">
                <img src="images/Bedroom Furniture.webp" alt>
                <div class="item-overlay">
                    <h3>مجموعات غرف النوم</h3>
                </div>
            </div>
            <div class="gallery-item home" data-category="home" style="display: none;">
                <img src="images/Dining Room Collections.webp" alt="غرفة الطعام">
                <div class="item-overlay">
                    <h3>مجموعات غرف الطعام</h3>
                </div>
            </div>
            
            <!-- Office Furniture Images -->
            <div class="gallery-item office" data-category="office" style="display: none;">
                <img src="images/Office Chairs.webp" alt="كراسي مكتبية">
                <div class="item-overlay">
                    <h3>كراسي مكتبية</h3>
                </div>
            </div>
            <div class="gallery-item office" data-category="office" style="display: none;">
                <img src="images/Workstations.webp" alt="مكاتب مكتبية">
                <div class="item-overlay">
                    <h3>محطات العمل</h3>
                </div>
            </div>
            <div class="gallery-item office" data-category="office" style="display: none;">
                <img src="images/Conference Tables.webp" alt="طاولات اجتماعات">
                <div class="item-overlay">
                    <h3>طاولات الاجتماعات</h3>
                </div>
            </div>
            
            <!-- Appliances Images -->
            <div class="gallery-item appliances" data-category="appliances" style="display: none;">
                <img src="images/Refrigerators.webp" alt="ثلاجات مستعملة">
                <div class="item-overlay">
                    <h3>ثلاجات</h3>
                </div>
            </div>
            <div class="gallery-item appliances" data-category="appliances" style="display: none;">
                <img src="images/Washing Machines.webp" alt="غسالات مستعملة">
                <div class="item-overlay">
                    <h3>غسالات ملابس</h3>
                </div>
            </div>
            <div class="gallery-item appliances" data-category="appliances" style="display: none;">
                <img src="images/Ovens & Stoves.webp" alt="أفران مستعملة">
                <div class="item-overlay">
                    <h3>أفران ومواقد</h3>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
  @include('Who We Are')    


 <style>
    :root {
        --primary-orange: #e67e22;
        --dark-orange: #d35400;
        --primary-red: #e74c3c;
        --dark-red: #c0392b;
        --black: #333;
        --white: #fff;
        --light-gray: #f9f9f9;
    }

    body {
        font-family: 'Tajawal', sans-serif;
        margin: 0;
        padding: 0;
        background-color: var(--light-gray);
    }

    .testimonials-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
        text-align: center;
    }

    .section-title {
        color: var(--primary-red);
        font-size: 36px;
        margin-bottom: 50px;
        position: relative;
    }

    .testimonials-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        margin-bottom: 40px;
    }

    .testimonial-card {
        background: var(--white);
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
        width: calc(33.333% - 30px);
        min-width: 300px;
        transition: transform 0.3s ease;
        display: none;
    }

    .testimonial-card.active {
        display: block;
    }

    .testimonial-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .client-image {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid var(--primary-orange);
        margin: 0 auto 20px;
        display: block;
    }

    .client-name {
        color: var(--dark-orange);
        font-size: 20px;
        margin: 0 0 10px;
    }

    .client-position {
        color: #777;
        font-style: italic;
        margin-bottom: 20px;
        display: block;
    }

    .testimonial-text {
        color: var(--black);
        line-height: 1.6;
        font-size: 16px;
        margin: 0;
    }

    .rating {
        color: var(--primary-orange);
        font-size: 18px;
        margin: 15px 0;
    }

    /* Mobile slider controls */
    .slider-controls {
        display: none;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
    }

    .slider-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #ccc;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .slider-dot.active {
        background-color: var(--primary-orange);
    }

    .contact-number {
        background-color: var(--primary-red);
        color: white;
        padding: 10px 20px;
        border-radius: 50px;
        display: inline-block;
        margin-top: 30px;
        font-weight: bold;
        text-decoration: none;
    }

    @media (min-width: 992px) {
        .testimonial-card {
            display: block !important;
        }
    }

    @media (max-width: 991px) {
        .testimonials-container {
            flex-wrap: nowrap;
            overflow: hidden;
            justify-content: flex-start;
            gap: 0;
        }

        .testimonial-card {
            width: 100%;
            flex: 0 0 100%;
            margin-right: 30px;
            display: none;
        }

        .testimonial-card.active {
            display: block;
        }

        .slider-controls {
            display: flex;
        }
    }
</style>

<section class="testimonials-section" dir="rtl">
    <h2 class="section-title">آراء عملائنا</h2>
    
    <div class="testimonials-container" id="testimonialsContainer">
        <!-- Testimonial 1 -->
        <div class="testimonial-card active">
            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="سارة محمد" class="client-image">
            <h3 class="client-name">سارة محمد</h3>
            <div class="rating">★★★★★</div>
            <p class="testimonial-text">
                "فريق العمل جاء في الموعد المحدد ودفع لي نقداً مقابل الأثاث المستعمل. خدمة محترفة وأسعار عادلة. سأوصي بهم بالتأكيد لأصدقائي في الرياض!"
            </p>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="أحمد الرشيد" class="client-image">
            <h3 class="client-name">أحمد الرشيد</h3>
            <div class="rating">★★★★★</div>
            <p class="testimonial-text">
                "قاموا بشراء كل أثاث مكتبي المستعمل خلال ساعات من الاتصال بهم. التقييم كان دقيقاً والدفع كان فورياً. خدمة ممتازة لأصحاب الأعمال المشغولين في الرياض."
            </p>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="فاطمة العتيبي" class="client-image">
            <h3 class="client-name">فاطمة العتيبي</h3>
            <div class="rating">★★★★☆</div>
            <p class="testimonial-text">
                "رد سريع وأسعار عادلة للأجهزة المستعملة. قاموا بنقل الثلاجة والغسالة القديمة بدون أي متاعب. أنا سعيدة جداً بالخدمة في الرياض!"
            </p>
        </div>
    </div>
    
    <!-- Mobile slider controls -->
    <div class="slider-controls" id="sliderControls">
        <div class="slider-dot active" data-index="0"></div>
        <div class="slider-dot" data-index="1"></div>
        <div class="slider-dot" data-index="2"></div>
    </div>


</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const testimonialsContainer = document.getElementById('testimonialsContainer');
        const testimonialCards = document.querySelectorAll('.testimonial-card');
        const sliderDots = document.querySelectorAll('.slider-dot');
        let currentIndex = 0;
        let slideInterval;
        
        // Only initialize slider if mobile view
        if (window.innerWidth < 992) {
            startSlider();
            
            // Reinitialize on window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 992) {
                    clearInterval(slideInterval);
                    showAllCards();
                } else {
                    startSlider();
                }
            });
        }
        
        // Dot click functionality
        sliderDots.forEach(dot => {
            dot.addEventListener('click', function() {
                currentIndex = parseInt(this.getAttribute('data-index'));
                updateSlider();
                resetInterval();
            });
        });
        
        function startSlider() {
            showAllCards(); // Reset first
            updateSlider(); // Show first card
            slideInterval = setInterval(nextSlide, 4000); // 4 seconds
        }
        
        function nextSlide() {
            currentIndex = (currentIndex + 1) % testimonialCards.length;
            updateSlider();
        }
        
        function updateSlider() {
            // Hide all cards
            testimonialCards.forEach(card => {
                card.classList.remove('active');
            });
            
            // Show current card
            testimonialCards[currentIndex].classList.add('active');
            
            // Update dots
            sliderDots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }
        
        function showAllCards() {
            testimonialCards.forEach(card => {
                card.classList.remove('active');
            });
            testimonialCards[0].classList.add('active');
            currentIndex = 0;
            
            // Update dots
            sliderDots.forEach((dot, index) => {
                dot.classList.toggle('active', index === 0);
            });
        }
        
        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 4000);
        }
    });
</script>
     @include('contactsection')
    @include('footer')

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>