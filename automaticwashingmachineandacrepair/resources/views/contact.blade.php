<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صيانة المكيفات والغسالات الأتوماتيك بالرياض | تصليح مكيفات سبليت | فني غسالات اتوماتيك</title>

   @include('Meta')
    
   </head>
<body>
  @include('nav')
  
   <!-- Hero Contact Section -->
<section class="hero-contact-section">
    <div class="container">
        <div class="hero-contact-content">
            <h1>اتصل بنا</h1>
            <p>نحن هنا لمساعدتك في جميع استفساراتك حول صيانة المكيفات والغسالات الأتوماتيكية. لا تتردد في التواصل معنا عبر أي من وسائل الاتصال المتاحة.</p>
        </div>
    </div>
</section>

<style>
    .hero-contact-section {
        background-image: linear-gradient(rgba(0, 94, 184, 0.7), rgba(0, 94, 184, 0.7)), 
                          url('images/contact.webp');
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
@include('ContactSection')

    
    <!-- Location Section -->
<section class="location-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="mb-3">موقعنا</h2>
            <p class="text-muted">يمكنك زيارتنا في موقعنا أو الاتصال بنا للحصول على خدمة منزلية</p>
        </div>
        
        <div class="row g-4">
            <!-- Map Column -->
            <div class="col-lg-7">
                <div class="map-container rounded-3 overflow-hidden shadow">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.186530960201!2d46.67529571500078!3d24.71360658412638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDQyJzQ5LjAiTiA0NsKwNDAnMzEuMCJF!5e0!3m2!1sen!2ssa!4v1620000000000!5m2!1sen!2ssa" 
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                    </iframe>
                </div>
            </div>
            
            <!-- Contact Info Column -->
            
                    
                    
                </div>
            </div>
        </div>
    </div>
</style>

<style>
    .location-section {
        background-color: var(--secondary-color);
    }
    
    .section-header h2 {
        color: var(--primary-color);
        font-size: 2.2rem;
        position: relative;
        display: inline-block;
    }
    
   
    
    .contact-card {
        border: 1px solid rgba(0, 94, 184, 0.1);
    }
    
    .contact-item .icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .map-container {
        height: 100%;
        min-height: 450px;
    }
    
    @media (max-width: 991.98px) {
        .map-container {
            min-height: 350px;
            margin-bottom: 30px;
        }
    }
</style>
   @include('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script>
</body>
</html>