<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>24/7 Furniture & Appliance Pickup and Delivery Service in Dubai | +971 58 912 5005</title>  
@include('meta')  
<meta name="description" content="Fast & Reliable Furniture & Appliance Pickup and Delivery Services in Dubai. We handle sofas, fridges, washing machines, and more with same-day service. Call +971 58 912 5005 for quick assistance.">  
<meta name="keywords" content="furniture pickup and delivery, fridge pick up and delivery, furniture pickup and delivery service, appliance pickup and delivery, furniture pick up delivery service, couch pick up and delivery, pick up sofa and deliver, sofa pick up and delivery, appliances pickup delivery, furniture pick up and delivery near me, small furniture pick up and delivery, furniture pickup and delivery service near me, same day furniture pick up and delivery, refrigerator pick up and delivery, refrigerator pickup delivery, washing machine pick up and delivery, pick up and delivery, pick up and delivery service, pick up delivery service, local pickup and delivery service near me, same day pick up and delivery, same day pickup and delivery service, pick up delivery service near me, pick up and delivery near me, online pickup and delivery, delivery pick up service near me, same day delivery pick up, service pick up and delivery, home pickup and delivery, Furniture pickup delivery Dubai, 0589125005">  
<meta name="author" content="PickupDeliveryDubai.com">  
<meta name="robots" content="index, follow">  
<style>
/* Tightly packed reset */
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}

/* Zero-spacing html and body */
html,body{width:100%;height:100%;overflow-x:hidden;scroll-behavior:smooth;font-family:'Inter',system-ui,-apple-system,sans-serif;line-height:1.5;background-color:#F3F4F6;-webkit-font-smoothing:antialiased;}

/* Eliminated spacing from layout elements */
header,nav,main,footer,section{margin:0;padding:0;display:block;}

/* Inline element fixes */
img,svg,video,canvas{display:block;max-width:100%;}

/* Form element reset */
input,button,textarea,select{font:inherit;margin:0;padding:0;border:none;background:none;}

/* Anchor reset */
a{text-decoration:none;color:inherit;}

:root{
    --primary:#005f73;
    --primary-light:#0a9396;
    --secondary:#ee9b00;
    --accent:#bb3e03;
    --light-bg:#f8f9fa;
    --white:#ffffff;
    --text:#212529;
    --text-light:#6c757d;
    --shadow-sm:0 1px 3px rgba(0,0,0,0.12);
    --shadow-md:0 4px 6px rgba(0,0,0,0.1);
    --shadow-lg:0 10px 25px rgba(0,0,0,0.1);
    --transition:all 0.3s cubic-bezier(0.25,0.8,0.25,1);
}

/* Base styles */
body{background-color:var(--light-bg);color:var(--text);}
h1,h2,h3,h4{line-height:1.2;font-weight:700;color:var(--primary);}
img{max-width:100%;display:block;}

.hero-section{
    position:relative;
    background:linear-gradient(135deg,rgba(0,95,115,0.9)0%,rgba(10,147,150,0.9)100%),url('images/herosection.webp') no-repeat center center/cover;
    color:var(--white);
    overflow:hidden;
    isolation:isolate;
}
.hero-section::after{
    content:'';
    position:absolute;
    inset:0;
    background:radial-gradient(circle at 20% 50%,transparent 0%,rgba(0,0,0,0.3)100%);
    z-index:-1;
}
.hero-container{
    max-width:1200px;
    margin:0 auto;
}
.hero-content{
    display:flex;
    flex-direction:column;
    gap:1.5rem;
}
.hero-text{
    max-width:800px;
}
.hero-title{
    font-size:clamp(1.75rem,4vw,2.5rem);
    letter-spacing:-0.5px;
    color:var(--white);
    margin-top:0.5rem;
     margin-left:0.5rem;
    line-height:1.2;
    font-weight:700;
    text-shadow:0 2px 4px rgba(0,0,0,0.2);
    text-align:left;
    text-transform:uppercase;
    font-family:'Inter',system-ui,-apple-system,sans-serif;
}
.hero-subtitle{
    font-size:clamp(1rem,2vw,1.125rem);
    color:rgba(255,255,255,0.9);
    max-width:600px;
}


/* Features row - no spacing */
.features-row{
    display:flex;
    gap:1rem;
    overflow-x:auto;
    scrollbar-width:none;
}
.features-row::-webkit-scrollbar{display:none;}
.feature-card{
    flex:0 0 auto;
    width:250px;
    background-color:rgba(255,255,255,0.15);
    backdrop-filter:blur(10px);
    border-radius:8px;
    transition:var(--transition);
    border:1px solid rgba(255,255,255,0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 1.5rem;
    
}
.feature-card:hover{
    transform:translateY(-3px);
    background-color:rgba(255,255,255,0.25);
    box-shadow:var(--shadow-md);
}
.feature-icon{
    font-size:1.5rem;
    color:var(--secondary);
    margin-bottom: 1rem;
}
.feature-title{
    font-size:1rem;
    color:var(--white);
    margin-bottom: 0.5rem;
}
.feature-desc{
    color:rgba(255,255,255,0.8);
    font-size:0.8125rem;
}

/* CTA row - compact */
.cta-row{
    display:flex;
    gap:1rem;
    flex-wrap:wrap;
}
.cta-button{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:0.5rem;
    background-color:var(--accent);
    color:var(--white);
    padding:0.75rem 1.5rem;
    border-radius:50px;
    font-weight:600;
    font-size:0.9375rem;
    transition:var(--transition);
    box-shadow:var(--shadow-sm);
    border:none;
    cursor:pointer;
    white-space:nowrap;
}
.cta-button:hover{
    background-color:var(--primary);
    transform:translateY(-2px);
    box-shadow:var(--shadow-md);
}
.cta-button.secondary{
    background-color:transparent;
    border:2px solid var(--white);
    color:var(--white);
}
.cta-button.secondary:hover{
    background-color:var(--white);
    color:var(--primary);
}

/* Responsive adjustments */
@media(max-width:768px){
    .hero-content{
        text-align:center;
        align-items:center;
    }
    .hero-subtitle{
        margin:0 auto;
    }
    .cta-row{
        justify-content:center;
    }
    .features-row{
        width:calc(100vw - 3rem);
        margin-left:-1.5rem;
        margin-right:-1.5rem;
        padding-left:1.5rem;
        padding-right:1.5rem;
        scroll-snap-type: x mandatory;
    }
    .feature-card{
        width: calc(110% - 1rem);
        scroll-snap-align: center;
        height: 180px;
    }
}
@media(max-width:480px){
    .cta-row{
        flex-direction:column;
        width:100%;
    }
    .cta-button{
        width:100%;
    }
}
</style>
</head>
<body>
@include('navbar')
<!-- Ultra-compact Hero Section -->
<section class="hero-section">
<div class="hero-container">
<div class="hero-content">
<div class="hero-text">
<h1 class="hero-title"> pickup delivery in  dubai</h1>
<p class="hero-subtitle">From pickup to placement - professional movers handling your items with care! </p>
</div>
<div class="features-row">
<div class="feature-card">
<div class="feature-icon"><i class="bi bi-speedometer2"></i></div>
<h3 class="feature-title">Fast Service</h3>
<p class="feature-desc">Same-day pickup and delivery available</p>
</div>
<div class="feature-card">
<div class="feature-icon"><i class="bi bi-shield-lock"></i></div>
<h3 class="feature-title">Secure Transport</h3>
<p class="feature-desc">Professional packing and handling</p>
</div>
<div class="feature-card">
<div class="feature-icon"><i class="bi bi-currency-exchange"></i></div>
<h3 class="feature-title">Fair Pricing</h3>
<p class="feature-desc">No hidden fees, upfront quotes</p>
</div>
<div class="feature-card">
<div class="feature-icon"><i class="bi bi-house-door"></i></div>
<h3 class="feature-title">Door-to-Door</h3>
<p class="feature-desc">We come to your location</p>
</div>
</div>
<div class="cta-row">
<a href="tel:0589125005" class="cta-button"><i class="bi bi-telephone-fill"></i>Call: 058 912 5005</a>
<a href="https://wa.me/971589125005" class="cta-button secondary" target="_blank">
  <i class="bi bi-whatsapp"></i> WhatsApp Us
</a>
</div>
</div>
<br>
</div>
</section>

<script>
// Auto-scroll feature cards on mobile
document.addEventListener('DOMContentLoaded', function() {
    const featuresRow = document.querySelector('.features-row');
    if (window.innerWidth <= 768) {
        let currentIndex = 0;
        const featureCards = document.querySelectorAll('.feature-card');
        const cardWidth = featureCards[0].offsetWidth + 16; // width + gap
        
        // Auto-scroll every 5 seconds
        setInterval(() => {
            currentIndex = (currentIndex + 1) % featureCards.length;
            featuresRow.scrollTo({
                left: currentIndex * cardWidth,
                behavior: 'smooth'
            });
        }, 3000);
    }
});
</script>
    <!-- Your other sections would go here -->
    
@include('Why Choose Us')
@include('Our Services')
@include('contactussection')
@include('What We Do')

@include('Why Choose')
    @include('stats section')
    @include('testimonial')
    @include('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>