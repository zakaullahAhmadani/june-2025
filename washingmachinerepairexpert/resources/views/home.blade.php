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
<title>شراء غسالة اتوماتيك مستعملة في جدة | أفضل الأسعار | 0563476330 | .shop</title>

  <!-- SEO Meta Tags -->
  @include('meta')
</head>

<body>

 @include('navbar')
<section class="hero-section">
  <div class="hero-overlay">
    <div class="container text-center hero-content">
      <h1>مركز صيانة الغسالات الأوتوماتيكية في جدة</h1>
      <p>
        نقدم أفضل خدمات إصلاح وصيانة الغسالات الأوتوماتيكية بجدة. فريق فني متخصص، قطع غيار أصلية، وخدمة منزلية سريعة. اتصل بنا الآن للحصول على خدمة مميزة بسعر مناسب.
      </p>
      <div class="hero-buttons">
        <a href="tel:+966563476330" 
           class="btn btn-primary whatsapp-btn mx-2"
           target="_blank">
          <i class="bi bi-telephone"></i> اتصل الآن: 0563476330
        </a>
       
      </div>
    </div>
  </div>
</section>

<style>
  :root {
    --primary-color: #003366; /* Dark blue */
    --secondary-color: #00AEEF; /* Light blue */
    --accent-color: #F4B400; /* Yellow */
    --bg-color: #F8FAFC;
    --text-color: #1A1A1A;
    --text-secondary: #4B5563;
    --white: #FFFFFF;
  }

  body {
    padding: 3px;
    margin: 0 auto;
    max-width: 100%;
    overflow-x: hidden;
  }

  html {
    overflow-x: hidden;
  }

  .hero-section {
    position: relative;
    width: 100%;
    height: 450px;
    overflow: hidden;
    background-image: url('images/washing-machine-repair.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .hero-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    padding: 20px;
  }

  .hero-content {
    color: var(--white);
    max-width: 800px;
  }

  .hero-content h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
  }

  .hero-content p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    line-height: 1.6;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
  }

  .hero-buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
  }

  .btn-primary {
    background-color: var(--secondary-color);
    border: none;
    padding: 12px 25px;
    font-weight: bold;
    color: var(--white);
    border-radius: 5px;
    transition: all 0.3s;
    min-width: 200px;
    text-align: center;
  }

  .btn-accent {
    background-color: var(--accent-color);
    border: none;
    padding: 12px 25px;
    font-weight: bold;
    color: var(--text-color);
    border-radius: 5px;
    transition: all 0.3s;
    min-width: 150px;
    text-align: center;
  }

  .btn-primary:hover {
    background-color: var(--primary-color);
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  }

  .btn-accent:hover {
    background-color: #e0a800;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  }

  @media (max-width: 767.98px) {
    .hero-section {
      height: 400px;
    }
    
    .hero-content h1 {
      font-size: 1.8rem;
      margin-bottom: 15px;
    }
    
    .hero-content p {
      font-size: 1rem;
      margin-bottom: 25px;
    }
    
    .hero-buttons {
      flex-direction: column;
      align-items: center;
    }
    
    .btn-primary, .btn-accent {
      width: 100%;
      max-width: 250px;
      margin: 5px 0;
      padding: 10px 15px;
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
        background-color: var(--bg-color);
        color: var(--text-color);
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
        color: var(--primary-color);
        margin-bottom: 15px;
    }
    
    .section-header p {
        font-size: 18px;
        color: var(--text-secondary);
        line-height: 1.6;
        max-width: 800px;
        margin: 0 auto;
    }
    
    .filter-buttons {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }
    
    .filter-btn {
        padding: 12px 30px;
        background-color: var(--secondary-color);
        color: var(--white);
        border: none;
        border-radius: 30px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .filter-btn:hover {
        background-color: var(--primary-color);
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    
    .filter-btn.active {
        background-color: var(--primary-color);
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
        background-color: var(--white);
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
        right: 0;
        left: 0;
        background: linear-gradient(to top, rgba(0, 51, 102, 0.9), transparent);
        color: var(--white);
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
        .gallery-grid {
            grid-template-columns: 1fr;
        }
        
        .section-header h2 {
            font-size: 28px;
        }
        
        .section-header p {
            font-size: 16px;
        }
    }
</style>

<section class="gallery-section">
    <div class="section-header">
        <h2>مركز صيانة الغسالات الأوتوماتيكية بجدة</h2>
        <p>نقدم خدمات إصلاح وصيانة متكاملة لجميع أنواع الغسالات الأوتوماتيكية في جدة. فريق فني متخصص مع قطع غيار أصلية وخدمة منزلية سريعة.</p>
    </div>
    
    <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">
            <i class="bi bi-wrench me-2"></i> خدمات الصيانة
        </button>
    </div>
    
    <div class="gallery-grid" id="galleryGrid">
        <div class="gallery-item">
            <img src="images/washing-machine-repair.webp" alt="صيانة الغسالات الأوتوماتيكية">
            <div class="item-overlay">
                <h3>إصلاح أعطال الدوران</h3>
            </div>
        </div>
        
        <div class="gallery-item">
            <img src="images/washing-machine-repair-2.webp" alt="صيانة لوحة التحكم">
            <div class="item-overlay">
                <h3>إصلاح لوحات التحكم</h3>
            </div>
        </div>
        
        <div class="gallery-item">
            <img src="images/ashing-machine-repair-3.webp" alt="استبدال قطع الغيار">
            <div class="item-overlay">
                <h3>تغيير قطع الغيار</h3>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Simple hover effect for gallery items
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        galleryItems.forEach(item => {
            item.addEventListener('click', function() {
                // You can add a lightbox functionality here if needed
            });
        });
    });
</script>
  @include('About Section')    
@include('AQ section')
<style>
    :root {
        --primary-color: #003366;
        --secondary-color: #00AEEF;
        --accent-color: #F4B400;
        --bg-color: #F8FAFC;
        --text-color: #1A1A1A;
        --text-secondary: #4B5563;
        --white: #FFFFFF;
    }

    body {
        font-family: 'Tajawal', sans-serif;
        margin: 0;
        padding: 0;
        background-color: var(--bg-color);
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
        border: 5px solid var(--secondary-color);
        margin: 0 auto 20px;
        display: block;
    }

    .client-name {
        color: var(--primary-color);
        font-size: 20px;
        margin: 0 0 10px;
    }

    .client-position {
        color: var(--text-secondary);
        font-style: italic;
        margin-bottom: 20px;
        display: block;
    }

    .testimonial-text {
        color: var(--text-color);
        line-height: 1.6;
        font-size: 16px;
        margin: 0;
    }

    .rating {
        color: var(--accent-color);
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
        background-color: var(--secondary-color);
    }

    .contact-number {
        background-color: var(--primary-color);
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
    <h2 class="section-title">آراء عملائنا في جدة</h2>
    
    <div class="testimonials-container" id="testimonialsContainer">
        <!-- Testimonial 1 -->
        <div class="testimonial-card active">
            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="نورة أحمد" class="client-image">
            <h3 class="client-name">نورة أحمد</h3>
            <div class="rating">★★★★★</div>
            <p class="testimonial-text">
                "قاموا بشراء غسالتي الأوتوماتيكية المستعملة بسعر ممتاز. فريق محترف جاء في الموعد المحدد في جدة ودفع لي نقداً على الفور. شكراً لكم!"
            </p>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="خالد السبيعي" class="client-image">
            <h3 class="client-name">خالد السبيعي</h3>
            <div class="rating">★★★★★</div>
            <p class="testimonial-text">
                "أفضل مكان لبيع الغسالات الأوتوماتيك المستعملة في جدة. تقييم عادل وسريع، ولا داعي للانتظار طويلاً. أوصي بهم بشدة!"
            </p>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="testimonial-card">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="أميرة الغامدي" class="client-image">
            <h3 class="client-name">أميرة الغامدي</h3>
            <div class="rating">★★★★☆</div>
            <p class="testimonial-text">
                "باعت غسالتي الأوتوماتيكية خلال يوم واحد في جدة. الأسعار معقولة والخدمة سريعة. شكراً لمساعدتي في التخلص من الغسالة القديمة بسهولة!"
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