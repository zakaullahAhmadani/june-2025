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
  <title>إصلاح المكيفات والغسالات والثلاجات في الرياض | ماستر إصلاح الأجهزة</title>

  <!-- SEO Meta Tags -->
  @include('meta')
</head>

<body>

 @include('navbar')
<section class="hero-section">
  <div class="hero-overlay">
    <div class="container text-center hero-content">
      <h1>خدمات إصلاح وتركيب المكيفات بالرياض</h1>
      <p>
        نقدم خدمات متخصصة في إصلاح وتركيب جميع أنواع المكيفات (نوافذ، قنوات، سبليت) وكذلك إصلاح الأجهزة المنزلية مثل الغسالات والثلاجات. فريق محترف بأسعار تنافسية.
      </p>
      
      <div style="text-align: center;">
          <a href="tel:966555706976" class="call-btn ">
            <i class="bi bi-telephone-fill me-2"></i> اتصل الآن
          </a>
        </div>
    </div>
  </div>
</section>

<style>
  .hero-section {
    position: relative;
    width: 100%;
    height: 500px;
    overflow: hidden;
    background-image: url('images/ac-repair-hero.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .hero-overlay {
    position: absolute;
    top: 0; 
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(44, 62, 80, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    padding: 20px;
  }

  .hero-content {
    color: var(--background-light);
    max-width: 800px;
  }

  .hero-content h1 {
    font-size: 2.8rem;
    margin-bottom: 20px;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    color: var(--background-light);
  }

  .hero-content p {
    font-size: 1.3rem;
    margin-bottom: 30px;
    line-height: 1.6;
    color: var(--background-light);
    opacity: 0.9;
  }

  .whatsapp-btn {
    background-color: var(--secondary-color);
    border: none;
    padding: 15px 35px;
    font-weight: 600;
    color: var(--background-light);
    border-radius: 50px;
    transition: all 0.3s ease;
    max-width: 250px;
    box-shadow: var(--shadow-md);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    white-space: nowrap; /* Prevent text wrapping */
  }

  .whatsapp-btn i {
    margin-right: 10px;
    font-size: 1.2rem;
  }

  .whatsapp-btn:hover {
    background-color: var(--accent-color-1);
    transform: translateY(-3px);
    box-shadow: var(--shadow-lg);
    color: var(--background-light);
  }

  @media (max-width: 991.98px) {
    .hero-section {
      height: 400px;
    }
    
    .hero-content h1 {
      font-size: 2.2rem;
    }
    
    .hero-content p {
      font-size: 1.1rem;
    }
  }

  @media (max-width: 767.98px) {
    .hero-section {
      height: 350px;
    }
    
    .hero-content h1 {
      font-size: 1.8rem;
      margin-bottom: 15px;
    }
    
    .hero-content p {
      font-size: 1rem;
      margin-bottom: 20px;
    }
    
    .whatsapp-btn {
      padding: 12px 20px;
      font-size: 0.9rem;
      max-width: 220px;
    }
    
    .whatsapp-btn i {
      margin-right: 0px;
      font-size: 1rem;
    }
  }

  @media (max-width: 575.98px) {
    .hero-section {
      height: 300px;
    }
    
    .whatsapp-btn {
     /* margin-right: -5px; */
      padding: 14px 35px;
      font-size: 0.85rem;
      max-width: 220px;
      /* white-space: normal;  */
       display: inline-flex;
       text-align: center;
      
    }
    
    .whatsapp-btn i {
      margin-right: -5px;
      font-size: 0.95rem;
    }
  }
</style>
@include('aboutsection')
@include('WhyChooseSection')
@include('services section')

<style>
    body {
        font-family: 'Tajawal', sans-serif;
        margin: 0;
        padding: 0;
        background-color: var(--background-main);
        color: var(--text-body);
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
        color: var(--accent-color-2);
        margin-bottom: 15px;
    }
    
    .section-header p {
        font-size: 18px;
        color: var(--text-body);
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
        background-color: var(--accent-color-2);
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
        background-color: var(--color-error);
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
        background-color: var(--background-light);
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
        <h2>خدمات إصلاح وتثبيت المكيفات في الرياض</h2>
        <p>نقدم خدمات متكاملة لإصلاح وتركيب جميع أنواع المكيفات والأجهزة المنزلية. فريق فني متخصص مع ضمان على العمل وقطع الغيار الأصلية. اتصل بنا الآن على 0555706976</p>
    </div>
    
    <div class="filter-buttons d-flex flex-wrap justify-content-center gap-2 mb-4">
        <!-- <button class="filter-btn btn btn-sm active" data-filter="all" style="
            background-color: var(--accent-color-2);
            color: white;
            border: none;
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        ">جميع الخدمات</button> -->
        <button class="filter-btn btn btn-sm" data-filter="ac" style="
            background-color: white;
            color: var(--accent-color-2);
            border: 1px solid var(--accent-color-2);
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        ">إصلاح المكيفات</button>
        
        <button class="filter-btn btn btn-sm" data-filter="installation" style="
            background-color: white;
            color: var(--accent-color-2);
            border: 1px solid var(--accent-color-2);
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        ">تركيب المكيفات</button>
        
        <button class="filter-btn btn btn-sm active" data-filter="appliances" style="
            background-color: white;
            color: var(--accent-color-2);
            border: 1px solid var(--accent-color-2);
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        ">إصلاح الأجهزة</button>
    </div>
    
    <div class="gallery-grid" id="galleryGrid">
        <div class="gallery-item all" data-category="all">
            <img src="images/ac-repair-service.webp" alt="خدمة إصلاح المكيفات في الرياض">
            <div class="item-overlay">
                <h3>خدمة إصلاح المكيفات</h3>
            </div>
        </div>

        <div class="gallery-item all" data-category="all">
            <img src="images/ac-installation.webp" alt="تركيب المكيفات في الرياض">
            <div class="item-overlay">
                <h3>تركيب المكيفات</h3>
            </div>
        </div>
        <div class="gallery-item all" data-category="all">
            <img src="images/washing-machine-repair.webp" alt="إصلاح الغسالات">
            <div class="item-overlay">
                <h3>إصلاح الغسالات</h3>
            </div>
        </div>
        
        <!-- AC Repair Images -->
        <div class="gallery-item ac" data-category="ac" style="display: none;">
            <img src="images/window-ac-repair.webp" alt="إصلاح مكيفات الشباك">
            <div class="item-overlay">
                <h3>إصلاح مكيفات الشباك</h3>
            </div>
        </div>
        <div class="gallery-item ac" data-category="ac" style="display: none;">
            <img src="images/split-ac-repair.webp" alt="إصلاح مكيفات السبليت">
            <div class="item-overlay">
                <h3>إصلاح مكيفات السبليت</h3>
            </div>
        </div>
        <div class="gallery-item ac" data-category="ac" style="display: none;">
            <img src="images/duct-ac-repair.webp" alt="إصلاح المكيفات المركزية">
            <div class="item-overlay">
                <h3>إصلاح المكيفات المركزية</h3>
            </div>
        </div>
        
        <!-- Installation Images -->
        <div class="gallery-item installation" data-category="installation" style="display: none;">
            <img src="images/split-ac-installation.webp" alt="تركيب مكيفات السبليت">
            <div class="item-overlay">
                <h3>تركيب مكيفات السبليت</h3>
            </div>
        </div>
        <div class="gallery-item installation" data-category="installation" style="display: none;">
            <img src="images/window-ac-installation.webp" alt="تركيب مكيفات الشباك">
            <div class="item-overlay">
                <h3>تركيب مكيفات الشباك</h3>
            </div>
        </div>
        <div class="gallery-item installation" data-category="installation" style="display: none;">
            <img src="images/duct-ac-installation.webp" alt="تركيب المكيفات المركزية">
            <div class="item-overlay">
                <h3>تركيب المكيفات المركزية</h3>
            </div>
        </div>
        
        <!-- Appliances Images -->
        <div class="gallery-item appliances" data-category="appliances" style="display: none;">
            <img src="images/refrigerator-repair.webp" alt="إصلاح الثلاجات">
            <div class="item-overlay">
                <h3>إصلاح الثلاجات</h3>
            </div>
        </div>
        <div class="gallery-item appliances" data-category="appliances" style="display: none;">
            <img src="images/washing-machine-service.webp" alt="إصلاح الغسالات">
            <div class="item-overlay">
                <h3>إصلاح الغسالات</h3>
            </div>
        </div>
        <div class="gallery-item appliances" data-category="appliances" style="display: none;">
            <img src="images/oven-repair.webp" alt="إصلاح الأفران">
            <div class="item-overlay">
                <h3>إصلاح الأفران</h3>
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

        /* === State Colors === */
        --color-success: #27ae60;       /* Green - Success messages */
        --color-warning: #e67e22;       /* Orange - Warnings */
        --color-error: #e74c3c;         /* Red - Errors */
        --color-info: #3498db;          /* Blue - Information */
    }

    body {
        font-family: 'Tajawal', sans-serif;
        margin: 0;
        padding: 0;
        background-color: var(--background-main);
    }

    .testimonials-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
        text-align: center;
    }

    .section-title {
        color: var(--primary-color);
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
        background: var(--background-light);
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
        border: 5px solid var(--accent-color-1);
        margin: 0 auto 20px;
        display: block;
    }

    .client-name {
        color: var(--accent-color-1);
        font-size: 20px;
        margin: 0 0 10px;
    }

    .client-position {
        color: var(--text-muted);
        font-style: italic;
        margin-bottom: 20px;
        display: block;
    }

    .testimonial-text {
        color: var(--text-body);
        line-height: 1.6;
        font-size: 16px;
        margin: 0;
    }

    .rating {
        color: var(--accent-color-2);
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
        background-color: var(--accent-color-1);
    }

    .contact-number {
        background-color: var(--secondary-color);
        color: white;
        padding: 10px 20px;
        border-radius: 50px;
        display: inline-block;
        margin-top: 30px;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .contact-number:hover {
        background-color: var(--primary-color);
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
    <h2 class="section-title">آراء عملائنا في الرياض</h2>
    
    <div class="testimonials-container" id="testimonialsContainer">
        <!-- Testimonial 1 -->
        <div class="testimonial-card active">
            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="سارة محمد" class="client-image">
            <h3 class="client-name">سارة محمد</h3>
            <div class="rating">★★★★★</div>
            <p class="testimonial-text">
                "قام الفريق بإصلاح مكيف الشباك الخاص بي في نفس اليوم. كانت الخدمة سريعة واحترافية، والفاتورة واضحة بدون أي تكاليف مخفية. أنصح بشدة بخدماتهم في الرياض!"
            </p>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="أحمد الرشيد" class="client-image">
            <h3 class="client-name">أحمد الرشيد</h3>
            <div class="rating">★★★★★</div>
            <p class="testimonial-text">
                "أصلحوا غسالتي الأوتوماتيكية خلال ساعتين فقط من الاتصال بهم. الفني كان خبيراً وشرح لي المشكلة بوضوح. أسعارهم معقولة جداً مقارنة بباقي الشركات في الرياض."
            </p>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="فاطمة العتيبي" class="client-image">
            <h3 class="client-name">فاطمة العتيبي</h3>
            <div class="rating">★★★★☆</div>
            <p class="testimonial-text">
                "خدمة ممتازة لصيانة الثلاجة. جاء الفني في الموعد المحدد وحمل جميع الأدوات اللازمة. الثلاجة تعمل بشكل مثالي الآن. شكراً لفريق العمل في الرياض!"
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