<style>
    :root {
        --primary-color: #0077b6;
        --accent-color: #00b4d8;
        --text-color: #2c2c2c;
        --text-white: #ffffff;
        --bg-color: #f8f9fa;
        --border-color: #e0e0e0;
        --card-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .testimonials-section {
        padding: 80px 20px;
        background-color: var(--bg-color);
    }

    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-header h2 {
        color: var(--primary-color);
        font-size: 2.2rem;
        margin-bottom: 15px;
    }

    .section-header p {
        color: var(--text-color);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Desktop Grid Layout */
    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Mobile Slider Layout */
    .testimonials-slider {
        display: none;
        max-width: 600px;
        margin: 0 auto;
        position: relative;
        overflow: hidden;
    }

    .slider-container {
        display: flex;
        transition: transform 0.5s ease;
    }

    .testimonial-card {
        background: var(--text-white);
        border-radius: 10px;
        padding: 30px;
        box-shadow: var(--card-shadow);
        min-width: 100%;
        border: 1px solid var(--border-color);
    }

    .testimonial-content {
        margin-bottom: 20px;
        font-size: 1rem;
        line-height: 1.8;
        color: var(--text-color);
    }

    .testimonial-author {
        display: flex;
        align-items: center;
    }

    .author-img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        margin-left: 15px;
        border: 3px solid var(--accent-color);
    }

    .author-info h4 {
        color: var(--primary-color);
        margin-bottom: 5px;
    }

    .author-info p {
        color: #777;
        font-size: 0.9rem;
    }

    .rating {
        color: var(--accent-color);
        margin-bottom: 15px;
    }

    /* Slider Controls */
    .slider-controls {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .slider-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #ccc;
        margin: 0 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .slider-dot.active {
        background-color: var(--primary-color);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .testimonials-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .testimonials-grid {
            display: none;
        }
        
        .testimonials-slider {
            display: block;
        }
    }
</style>

<section class="testimonials-section">
    <div class="section-header">
        <h2>آراء عملائنا</h2>
        <p>انظر ما يقوله عملاؤنا عن جودة خدماتنا في صيانة المكيفات والغسالات والثلاجات</p>
    </div>
    
    <!-- Desktop Grid (3 columns) -->
    <div class="testimonials-grid">
        <!-- Testimonial 1 -->
        <div class="testimonial-card">
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="testimonial-content">
                "الفني أصلح مكيف السبليت خلال ساعة واحدة فقط! كان محترفًا جدًا وشرح لي المشكلة وحلّها بسرعة. أنصح الجميع بهذه الخدمة."
            </p>
            <div class="testimonial-author">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="خالد الرشيد" class="author-img">
                <div class="author-info">
                    <h4>خالد الرشيد</h4>
                    <p>5 مارس 2023</p>
                </div>
            </div>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="testimonial-card">
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="testimonial-content">
                "غسالتي الأتوماتيك توقفت عن العمل، الفنية وصلت في الموعد المحدد وأصلحت العطل باحترافية. شكرًا لفريق العمل المتميز!"
            </p>
            <div class="testimonial-author">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="نورة الفهد" class="author-img">
                <div class="author-info">
                    <h4>نورة الفهد</h4>
                    <p>12 أبريل 2023</p>
                </div>
            </div>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="testimonial-card">
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="testimonial-content">
                "ثلاجتي كانت تصدر صوتًا مزعجًا، الفني اكتشف المشكلة بسرعة واستبدل القطعة المعطوبة. الخدمة كانت سريعة والسعر معقول."
            </p>
            <div class="testimonial-author">
                <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="عبدالعزيز السليم" class="author-img">
                <div class="author-info">
                    <h4>عبدالعزيز السليم</h4>
                    <p>20 مايو 2023</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Mobile Slider (1 at a time) -->
    <div class="testimonials-slider">
        <div class="slider-container" id="sliderContainer">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-content">
                    "الفني أصلح مكيف السبليت خلال ساعة واحدة فقط! كان محترفًا جدًا وشرح لي المشكلة وحلّها بسرعة. أنصح الجميع بهذه الخدمة."
                </p>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="خالد الرشيد" class="author-img">
                    <div class="author-info">
                        <h4>خالد الرشيد</h4>
                        <p>5 مارس 2023</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-content">
                    "غسالتي الأتوماتيك توقفت عن العمل، الفنية وصلت في الموعد المحدد وأصلحت العطل باحترافية. شكرًا لفريق العمل المتميز!"
                </p>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="نورة الفهد" class="author-img">
                    <div class="author-info">
                        <h4>نورة الفهد</h4>
                        <p>12 أبريل 2023</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="testimonial-content">
                    "ثلاجتي كانت تصدر صوتًا مزعجًا، الفني اكتشف المشكلة بسرعة واستبدل القطعة المعطوبة. الخدمة كانت سريعة والسعر معقول."
                </p>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="عبدالعزيز السليم" class="author-img">
                    <div class="author-info">
                        <h4>عبدالعزيز السليم</h4>
                        <p>20 مايو 2023</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slider Dots -->
        <div class="slider-controls">
            <div class="slider-dot active" onclick="goToSlide(0)"></div>
            <div class="slider-dot" onclick="goToSlide(1)"></div>
            <div class="slider-dot" onclick="goToSlide(2)"></div>
        </div>
    </div>
</section>

<script>
    // Mobile Slider Functionality
    let currentSlide = 0;
    const slider = document.getElementById('sliderContainer');
    const dots = document.querySelectorAll('.slider-dot');
    const totalSlides = document.querySelectorAll('.testimonial-card').length;
    
    function updateSlider() {
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
    }
    
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateSlider();
    }
    
    // Auto slide every 5 seconds
    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    }, 5000);
</script>