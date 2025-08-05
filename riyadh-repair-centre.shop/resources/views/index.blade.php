<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>مركز صيانة الرياض | صيانة مكيفات - غسالات أتوماتيك - ثلاجات | 0537002015</title>

   @include('Meta')
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
   
   <style>
    :root {
        /* New Color Scheme */
        --primary-color: #0077b6;       /* Cool Blue - Air Conditioner */
        --accent-color: #00b4d8;      /* Aqua Blue - Washing freshness */
        --cta-color: #0077b6;         /* Primary blue for CTAs */
        --text-white: #ffffff;
        --text-color: #2c2c2c;
        --overlay-color: rgba(0, 0, 0, 0.5);
        --font-arabic: 'Tajawal', 'Cairo', sans-serif;
        --bg-color: #f8f9fa;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: var(--font-arabic);
    }

    body {
        direction: ltr;
        background-color: var(--bg-color);
    }

    /* Hero Section */
    .hero {
        position: relative;
        height: 80vh;
        min-height: 500px;
        background-image: url('images/Professional maintenance services for air conditioners and washing machines.webp');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        padding: 0 5%;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: var(--overlay-color);
    }

    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 600px;
        color: var(--text-white);
    }

    .hero h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        line-height: 1.3;
    }

    .hero p {
        font-size: 1.1rem;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .whatsapp-hero-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 12px 28px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        border: none;
        cursor: pointer;
        gap: 10px;
        box-shadow: 0 4px 15px rgba(0, 180, 216, 0.3);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .whatsapp-hero-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--accent-color), var(--primary-color));
        opacity: 0;
        z-index: -1;
        transition: opacity 0.3s ease;
    }

    .whatsapp-hero-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 180, 216, 0.4);
    }

    .whatsapp-hero-btn:hover::before {
        opacity: 1;
    }

    .whatsapp-hero-btn:active {
        transform: translateY(0);
        box-shadow: 0 3px 10px rgba(0, 180, 216, 0.4);
    }

    .whatsapp-hero-btn i {
        font-size: 1.3rem;
    }

    /* Pulse animation */
    @keyframes pulse {
        0% { box-shadow: 0 0 0 0 rgba(0, 180, 216, 0.7); }
        70% { box-shadow: 0 0 0 12px rgba(0, 180, 216, 0); }
        100% { box-shadow: 0 0 0 0 rgba(0, 180, 216, 0); }
    }

    .whatsapp-hero-btn.pulse {
        animation: pulse 2s infinite;
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .hero {
            height: 70vh;
            text-align: center;
            justify-content: center;
        }

        .hero-content {
            max-width: 80%;
        }
    }

    @media (max-width: 768px) {
        .hero {
            height: 60vh;
            min-height: 400px;
        }

        .hero h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }
        .hero-content {
            max-width: 90%;
        }
        
        .whatsapp-hero-btn {
            padding: 10px 22px;
            font-size: 1rem;
        }
        .whatsapp-hero-btn i {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 480px) {
        .hero {
            height: 50vh;
            min-height: 300px;
        }

        .hero h1 {
            font-size: 1.7rem;
        }

        .hero p {
            font-size: 0.9rem;
        }
    }
</style>
</head>
<body>
    @include('nav')
    <!-- Hero Section -->
    <section class="hero" dir="rtl">
        <div class="hero-content">
            <h1>مركز صيانة المكيفات والغسالات الأتوماتيكية بالرياض</h1>
            <p>خدمات متخصصة في إصلاح جميع أنواع المكيفات (سبليت)، الغسالات الأتوماتيكية والثلاجات. فريق فني متخصص - خدمة سريعة - ضمان على الصيانة</p>
       
            <a href="https://wa.me/966537002015" class="whatsapp-hero-btn pulse">
                تواصل عبر واتساب
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </section>

    <!-- Rest of your content goes here -->
     @include('washingAbout')
     @include('ACabout')
     @include('OurServices')
     @include('WhyChoose')
     @include('ContactSection')
   
    @include('Customer')
    @include('WorkingStep')
     @include('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script>
</body>
</html>