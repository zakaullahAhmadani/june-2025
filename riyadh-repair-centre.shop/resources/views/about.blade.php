<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>مركز صيانة الرياض | صيانة مكيفات - غسالات أتوماتيك - ثلاجات | 0537002015</title>

   @include('Meta')
    
   </head>
<body>
  @include('nav')
  
    <!-- Hero Contact Section -->
<section class="hero-contact-section">
    <div class="container">
        <div class="hero-contact-content">
            <h1> من نحن</h1>
            <p>نحن هنا لمساعدتك في جميع استفساراتك حول صيانة المكيفات والغسالات الأتوماتيكية والثلاجات. </p>
        </div>
    </div>
</section>

<style>
    .hero-contact-section {
        background-image: linear-gradient(rgba(0, 94, 184, 0.7), rgba(0, 94, 184, 0.7)), 
                          url('images/about.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 120px 0;
        text-align: center;
        color: white;
        position: relative;
    }

    .hero-contact-content {
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .hero-contact-section h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--text-white);
    }

    .hero-contact-section p {
        font-size: 1.2rem;
        line-height: 1.8;
        margin-bottom: 30px;
        color: var(--text-white);
    }

    @media (max-width: 768px) {
        .hero-contact-section {
            padding: 80px 20px;
        }
        
        .hero-contact-section h1 {
            font-size: 2.2rem;
        }
        
        .hero-contact-section p {
            font-size: 1rem;
        }
    }
</style>
@include('washingAbout')
 @include('WhyChoose')

 @include('ACabout')
 
   @include('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script>
</body>
</html>