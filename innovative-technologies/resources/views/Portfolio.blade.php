<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovative Technologies - Portfolio</title>
    <meta name="theme-color" content="#02010100">
	<link rel="icon" href="images/cropped-Innovative-Technologies-Logo-Header-1-32x32.png" sizes="32x32" />
	<link rel="icon" href="images/cropped-logo-1-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="images/cropped-logo-1-180x180.png" />
	<meta name="msapplication-TileImage" content="images/cropped-logo-1-192x192.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-red: #e63946;
            --dark-black: #1a1a1a;
            --pure-white: #ffffff;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-gray);
            color: var(--dark-black);
            overflow-x: hidden;
        }
        
        /* Navigation */
        .navbar {
            background-color: var(--dark-black);
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--pure-white) !important;
            font-size: 1.8rem;
        }
        
        .navbar-brand span {
            color: var(--primary-red);
        }
        
        .nav-link {
            color: var(--pure-white) !important;
            font-weight: 500;
            margin: 0 10px;
            position: relative;
        }
        
        .nav-link:hover {
            color: var(--primary-red) !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary-red);
            bottom: 0;
            left: 0;
            transition: width 0.3s;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/photo-1499951360447-b19be8fe80f5.avif');
            background-size: cover;
            background-position: center;
            color: var(--pure-white);
            padding: 120px 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .btn-primary-custom {
            background-color: var(--primary-red);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s;
        }
        
        .btn-primary-custom:hover {
            background-color: #c1121f;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(230, 57, 70, 0.3);
        }
        
        /* Services Section */
        .services {
            padding: 80px 0;
            background-color: var(--pure-white);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-black);
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--primary-red);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .service-card {
            background: var(--pure-white);
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            border: 1px solid rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: var(--primary-red);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-red);
            margin-bottom: 20px;
        }
        
        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark-black);
        }
        
        /* Portfolio Section */
        .portfolio {
            padding: 80px 0;
            background-color: var(--light-gray);
        }
        
        .portfolio-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            background: none;
            border: none;
            padding: 8px 20px;
            margin: 5px;
            font-weight: 600;
            color: var(--dark-gray);
            cursor: pointer;
            transition: all 0.3s;
            border-radius: 30px;
        }
        
        .filter-btn.active, .filter-btn:hover {
            background-color: var(--primary-red);
            color: var(--pure-white);
        }
        
        .portfolio-item {
            position: relative;
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .portfolio-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: all 0.5s;
        }
        
        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(230, 57, 70, 0.9);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: all 0.3s;
            padding: 20px;
            text-align: center;
            color: var(--pure-white);
        }
        
        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
        
        .portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
        }
        
        .portfolio-overlay h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        
        /* About Section */
        .about {
            padding: 80px 0;
            background-color: var(--pure-white);
        }
        
        .about-img {
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            height: auto;
        }
        
        .about-content h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--dark-black);
        }
        
        .about-content h2 span {
            color: var(--primary-red);
        }
        
        .about-content p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            line-height: 1.8;
        }
        
        .skill-item {
            margin-bottom: 20px;
        }
        
        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .progress {
            height: 8px;
            border-radius: 4px;
            background-color: #e9ecef;
        }
        
        .progress-bar {
            background-color: var(--primary-red);
        }
        
        /* Testimonials */
        .testimonials {
            padding: 80px 0;
            background-color: var(--light-gray);
        }
        
        .testimonial-card {
            background: var(--pure-white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            position: relative;
        }
        
        .testimonial-card::before {
            content: '\201C';
            font-size: 5rem;
            color: rgba(230, 57, 70, 0.1);
            position: absolute;
            top: 10px;
            left: 20px;
            line-height: 1;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
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
            margin-right: 15px;
            border: 3px solid var(--primary-red);
        }
        
        .author-info h4 {
            margin-bottom: 5px;
            color: var(--dark-black);
        }
        
        .author-info p {
            color: var(--primary-red);
            font-weight: 500;
            margin: 0;
        }
        
        /* Contact Section */
        .contact {
            padding: 80px 0;
            background-color: var(--pure-white);
        }
        
        .contact-info {
            margin-bottom: 40px;
        }
        
        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--dark-black);
        }
        
        .contact-info p {
            margin-bottom: 30px;
        }
        
        .contact-details {
            margin-bottom: 30px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(230, 57, 70, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary-red);
            font-size: 1.2rem;
        }
        
        .contact-form .form-control {
            height: 50px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
        }
        
        .contact-form textarea.form-control {
            height: 150px;
            resize: none;
        }
        
        .contact-form .form-control:focus {
            box-shadow: none;
            border-color: var(--primary-red);
        }
        
        /* Footer */
       footer {
            background-color: var(--dark-black);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-links h5 {
            color: var(--primary-red);
            margin-bottom: 20px;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }
        
        .footer-links a:hover {
            color: var(--primary-red);
        }
        
        .social-icons a {
            color: white;
            font-size: 20px;
            margin-right: 15px;
        }
        
        .social-icons a:hover {
            color: var(--primary-red);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 30px;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary-red);
            color: var(--pure-white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background-color: #c1121f;
            transform: translateY(-3px);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 767px) {
            .hero {
                padding: 80px 0;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .about-content {
                margin-top: 30px;
            }
        }
        
        @media (max-width: 575px) {
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .btn-primary-custom {
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
  <img src="images/Innovative-Technologies-Logo-Fottor-1024x297.png" alt="Innovative Technologies" class="navbar-logo">
  <!-- <span class="brand-text">Innovative<span class="highlight-text">Technologies</span></span> -->
</a>
<style>
    /* Logo styling */
.navbar-brand {
  display: flex;
  align-items: center;
}

.navbar-logo {
  height: 40px; /* Adjust as needed */
  width: auto;
  margin-right: 10px;
}

.brand-text {
  font-size: 1.25rem;
  font-weight: 600;
}

.highlight-text {
  color: red; /* Your highlight color */
}

/* Mobile responsiveness */
@media (max-width: 768px) {
  .navbar-logo {
    height: 30px; /* Smaller logo on mobile */
  }
  
  .brand-text {
    font-size: 1rem; /* Smaller text on mobile */
  }
  
  /* Optional: Hide text on very small screens */
  @media (max-width: 400px) {
    .brand-text {
      display: none;
    }
    .navbar-logo {
      margin-right: 0;
    }
  }
}
</style>
           
<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
  <span class="navbar-toggler-icon default-icon"></span>
  <span class="close-icon" style="font-size: 2rem; color: #d60000;">&times;</span>
</button>

<style>
  .navbar-toggler .close-icon {
    display: none;
  }

  .navbar-toggler:not(.collapsed) .default-icon {
    display: none;
  }

  .navbar-toggler:not(.collapsed) .close-icon {
    display: inline;
  }
</style>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<script>
  document.querySelectorAll('#navbarNav .nav-link').forEach(function(link) {
    link.addEventListener('click', function() {
      const navbarCollapse = document.querySelector('#navbarNav');
      const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
      if (bsCollapse) {
        bsCollapse.hide();
      }
    });
  });
</script>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>Transforming Ideas Into Digital Reality</h1>
            <p>We deliver cutting-edge technology solutions that drive business growth and enhance user experiences across all digital platforms.</p>
            <a href="https://wa.me/971508097203" class="btn btn-primary-custom">Get Started</a>
        </div>
    </section>
<!-- start -->
 <section class="portfolio" id="portfolio">
    <div class="container">
        <div class="section-title">
            <h2>Our Portfolio</h2>
            <p>See our successful projects in each service category</p>
        </div>
        
        <div class="portfolio-filter">
             <button class="filter-btn active" data-filter="google-ads">Google Ads</button>
              <button class="filter-btn" data-filter="seo">SEO</button>
            <button class="filter-btn " data-filter="marketing">Digital Marketing</button>
            <button class="filter-btn" data-filter="ecommerce">Ecommerce</button>
            <button class="filter-btn" data-filter="web">Web Development</button>
           
           
        </div>
        
        <div class="portfolio-grid">
             <!-- Google Ads Projects -->
            <div class="portfolio-category google-ads active">
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/ads1.jpg" alt="Google Ads Campaign" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h3>Search Campaign</h3>
                            <p>300% ROAS for ecommerce client</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">See Performance</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/ads2.jpg" alt="Shopping Ads" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h3>Shopping Ads Strategy</h3>
                            <p>Reduced CPA by 60% for retail brand</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">View Strategy</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/ads3.jpg" alt="Display Network" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h3>Display Network Campaign</h3>
                            <p>Increased brand awareness by 400%</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">See Results</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Digital Marketing Projects -->
            <div class="portfolio-category marketing ">
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/d3.jpg" alt="Digital Marketing Campaign" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h3>Social Media Campaign</h3>
                            <p>Increased engagement by 300% for retail client</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">View Case Study</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/d1.jpg" alt="Google Business Optimization" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h3>Local Business Optimization</h3>
                            <p>GMB setup that increased local leads by 150%</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/d2.jpg" alt="SEO Project" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h3>SEO Transformation</h3>
                            <p>First page rankings for 25+ competitive keywords</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">See Results</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Ecommerce Projects -->
            <div class="portfolio-category ecommerce">
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/e3.jpg" alt="Ecommerce Store" class="portfolio-img"
     style="
       max-width: 100%;
       height: auto;
       display: block;
       object-fit: cover;
     ">
                        <div class="portfolio-overlay">
                            <h3>Fashion Ecommerce Store</h3>
                            <p>Custom online store with 98% mobile conversion rate</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">See Project</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/e2.jpg" alt="Shopify Store" class="portfolio-img"
     style="
       max-width: 100%;
       height: auto;
       display: block;
       object-fit: cover;
     ">
                        <div class="portfolio-overlay">
                            <h3>Shopify Plus Store</h3>
                            <p>High-volume store processing 500+ orders daily</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">View Store</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/e1.jpg" alt="WooCommerce Store" class="portfolio-img"
     style="
       max-width: 100%;
       height: auto;
       display: block;
       object-fit: cover;
     ">
                        <div class="portfolio-overlay">
                            <h3>WooCommerce Integration</h3>
                            <p>Custom solution with 3x faster checkout process</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Web Development Projects -->
            <div class="portfolio-category web">
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/web1.jpg" alt="Corporate Website" class="portfolio-img"
     style="
       max-width: 100%;
       height: auto;
       display: block;
       object-fit: cover;
     ">
                        <div class="portfolio-overlay">
                            <h3>Corporate Website</h3>
                            <p>Modern responsive design with CMS integration</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/web2.jpg" alt="Fiverr Profile" class="portfolio-img"
     style="
       max-width: 100%;
       height: auto;
       display: block;
       object-fit: cover;
     ">
                        <div class="portfolio-overlay">
                            <h3>Fiverr Pro Profile</h3>
                            <p>Optimized profile earning $10k+/month</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/web3.jpg" alt="Web Application" class="portfolio-img"
     style="
       max-width: 100%;
       height: auto;
       display: block;
       object-fit: cover;
     ">
                        <div class="portfolio-overlay">
                            <h3>Custom Web Application</h3>
                            <p>SAAS platform with 10,000+ active users</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- SEO Projects -->
            <div class="portfolio-category seo">
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/seo1.jpg" alt="SEO Audit"  class="portfolio-img"
     style="
       max-width: 100%;
       height: auto;
       display: block;
       object-fit: cover;
     ">
                        
                        <div class="portfolio-overlay">
                            <h3>Technical SEO Audit</h3>
                            <p>Identified 50+ issues increasing organic traffic by 120%</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">View Report</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/seo2.jpg" alt="Content Strategy"  class="portfolio-img"
     style="
       max-width: 100%;
       height: auto;
       display: block;
       object-fit: cover;
     ">
                        <div class="portfolio-overlay">
                            <h3>Content Strategy</h3>
                            <p>Increased conversions by 85% with optimized content</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">See Strategy</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img-container">
                        <img src="images/seo3.jpg" alt="Link Building"  class="portfolio-img"
     style="
       max-width: 100%;
       height: auto;
       display: block;
       object-fit: cover;
     ">
                        <div class="portfolio-overlay">
                            <h3>Link Building Campaign</h3>
                            <p>Acquired 150+ high-quality backlinks in 3 months</p>
                            <a href="https://wa.me/971508097203" class="btn btn-light">View Results</a>
                        </div>
                    </div>
                </div>
            </div>
            
           
        </div>
    </div>
</section>

<style>
    /* Portfolio Section Styles */
    .portfolio {
        padding: 60px 0;
        background-color: #f9f9f9;
    }
    
    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 40px;
    }
    
    .section-title h2 {
        font-size: 2rem;
        margin-bottom: 15px;
        color: #333;
    }
    
    .section-title p {
        color: #666;
        font-size: 1rem;
    }
    
    .portfolio-filter {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 30px;
    }
    
    .filter-btn {
        padding: 8px 16px;
        border: none;
        background: #f0f0f0;
        color: #333;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }
    
    .filter-btn:hover, .filter-btn.active {
        background: red;
        color: white;
    }
    
    /* Portfolio Grid */
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }
    
    .portfolio-category {
        display: none;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }
    
    .portfolio-category.active {
        display: grid;
    }
    
    .portfolio-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        aspect-ratio: 4/3;
    }
    
    .portfolio-item:hover {
        transform: translateY(-5px);
    }
    
   .portfolio-item {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    aspect-ratio: 4/4; /* Taller container (3 width : 4 height) */
}

.portfolio-img-container {
    width: 100%;
    height: 100%;
    position: relative;
}

.portfolio-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center; /* Ensures focus remains on image center */
    display: block;
}
    
    .portfolio-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 20px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }
    
    .portfolio-item:hover .portfolio-overlay {
        transform: translateY(0);
    }
    
    .portfolio-overlay h3 {
        font-size: 1.2rem;
        margin-bottom: 8px;
    }
    
    .portfolio-overlay p {
        font-size: 0.9rem;
        margin-bottom: 15px;
        line-height: 1.4;
    }
    
    .btn-light {
        display: inline-block;
        padding: 8px 16px;
        background: white;
        color: #333;
        text-decoration: none;
        border-radius: 4px;
        font-size: 0.9rem;
        transition: background 0.3s ease;
    }
    
    .btn-light:hover {
        background: #f0f0f0;
    }
    
    /* Responsive Styles */
    @media (max-width: 768px) {
        .portfolio-filter {
            gap: 8px;
        }
        
        .filter-btn {
            padding: 6px 12px;
            font-size: 0.8rem;
        }
        
        .portfolio-grid, .portfolio-category {
            grid-template-columns: 1fr;
        }
        
        .portfolio-overlay {
            transform: translateY(0);
            padding: 15px;
        }
        
        .portfolio-overlay h3 {
            font-size: 1.1rem;
        }
        
        .portfolio-overlay p {
            font-size: 0.85rem;
            margin-bottom: 10px;
        }
        
        .btn-light {
            padding: 6px 12px;
            font-size: 0.85rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioCategories = document.querySelectorAll('.portfolio-category');
    
    // Filter button click handler
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Show selected category
            portfolioCategories.forEach(category => {
                category.classList.remove('active');
                if (category.classList.contains(filter)) {
                    category.classList.add('active');
                }
            });
        });
    });
});
</script>
<style>
  body {
    background-color: #ffffff;
    color: #000000;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

  .portfolio-section {
    padding: 60px 0;
    background-color: #fff;
    text-align: center;
  }

  .portfolio-section h2 {
    color: #d60000;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .portfolio-section p {
    color: #333;
    margin-bottom: 40px;
    font-size: 18px;
  }

  .logo-carousel {
    overflow: hidden;
    width: 100%;
    background: #000;
    padding: 20px 0;
    position: relative;
  }

  .logo-track {
    display: flex;
    width: calc(250px * 20);
    animation: scroll-right 40s linear infinite;
  }

  .logo-item {
    flex: 0 0 250px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid #d60000;
    margin: 0 10px;
    background: #ffffff; /* white background */
    border-radius: 5px;
    height: 120px; /* taller for consistent logo area */
  }

  .logo-item img {
    width: 120px;
    height: 80px;
    object-fit: contain;
  }

  @keyframes scroll-right {
    0% {
      transform: translateX(-50%);
    }
    100% {
      transform: translateX(0%);
    }
  }
</style>

  <section class="portfolio-section">
    <div class="container">
      <h2>Our Portfolio</h2>
      <p>Below are some logos representing our creative and technology-driven solutions.</p>

      <div class="logo-carousel">
        <div class="logo-track">
          <!-- Repeat logos twice for seamless loop -->
          <div class="logo-item">
            <img src="images/logo1.jpg" alt="Innovative Technologies" />
          </div>
          <div class="logo-item">
            <img src="images/logo1.jpg" alt="BONE" />
          </div>
          <div class="logo-item">
            <img src="images/logo3.jpg" alt="Logo 3" />
          </div>
          <div class="logo-item">
            <img src="images/logo4.jpg" alt="Logo 4" />
          </div>
          <div class="logo-item">
            <img src="images/logo5.jpg" alt="Logo 5" />
          </div>
          <div class="logo-item">
            <img src="images/logo6.jpg" alt="Logo 6" />
          </div>
          <div class="logo-item">
            <img src="images/logo7.jpg" alt="Logo 7" />
          </div>
          <div class="logo-item">
            <img src="images/logo8.jpg" alt="Logo 8" />
          </div>
          <div class="logo-item">
            <img src="images/logo9.jpg" alt="Logo 9" />
          </div>
          <div class="logo-item">
            <img src="images/logo11.jpg" alt="Logo 10" />
          </div>
          <!-- duplicated logos for continuous scrolling -->
          <div class="logo-item">
            <img src="images/logo1.jpg" alt="Innovative Technologies" />
          </div>
          <div class="logo-item">
            <img src="images/logo2.jpg" alt="BONE" />
          </div>
          <div class="logo-item">
            <img src="images/logo3.jpg" alt="Logo 3" />
          </div>
          <div class="logo-item">
            <img src="images/logo4.jpg" alt="Logo 4" />
          </div>
          <div class="logo-item">
            <img src="images/logo5.jpg" alt="Logo 5" />
          </div>
          <div class="logo-item">
            <img src="images/logo6.jpg" alt="Logo 6" />
          </div>
          <div class="logo-item">
            <img src="images/logo7.jpg" alt="Logo 7" />
          </div>
          <div class="logo-item">
            <img src="images/logo8.jpg" alt="Logo 8" />
          </div>
          <div class="logo-item">
            <img src="images/logo9.jpg" alt="Logo 9" />
          </div>
          <div class="logo-item">
            <img src="images/logo10.jpg" alt="Logo 10" />
          </div>
        </div>
      </div>

    </div>
  </section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <div class="section-title">
            <h2>Our Services</h2>
            <p>Comprehensive digital solutions to grow your business</p>
        </div>
        <div class="row">
            <!-- 1. Google Ads (now first) -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-ad"></i>
                    </div>
                    <h3>Google Ads Management</h3>
                    <p>Expert management of your Google Ads campaigns to maximize ROI and drive targeted traffic.</p>
                    <a href="/google-ads-management" class="service-link learn-more-red">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 2. SEO & Content (now second) -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>SEO & Content Writing</h3>
                    <p>Optimized content and technical SEO to improve rankings and organic traffic.</p>
                    <a href="/seo-content-writing" class="service-link learn-more-red">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 3. Original 3rd card (Digital Marketing removed) -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fab fa-google"></i>
                    </div>
                    <h3>Google Business Verification</h3>
                    <p>Professional setup and verification of your Google My Business profile to enhance local search visibility.</p>
                    <a href="/google-business-verification-services" class="service-link learn-more-red">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 4. Original 4th card -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Ecommerce Development</h3>
                    <p>Custom online stores with seamless shopping experiences and secure payment integrations.</p>
                    <a href="/ecommerce-website-development" class="service-link learn-more-red">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 5. Original 5th card -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fab fa-shopify"></i>
                    </div>
                    <h3>Shopify Store Development</h3>
                    <p>Beautiful, high-converting Shopify stores tailored to your brand and products.</p>
                    <a href="/shopify-store-development" class="service-link learn-more-red">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 6. Original 6th card -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Website Development</h3>
                    <p>Custom websites built for performance, accessibility, and search engine visibility.</p>
                    <a href="/website-development" class="service-link learn-more-red">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 7. Original 7th card -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Graphic Designing</h3>
                    <p>Visually stunning designs for branding, marketing materials, and digital assets.</p>
                    <a href="/graphic-designing" class="service-link learn-more-red">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 8. Original 8th card -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Video Editing & Animation</h3>
                    <p>Professional video production and motion graphics to engage your audience.</p>
                    <a href="/video-editing-animation" class="service-link learn-more-red">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 9. Original 9th card -->
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Social Media Monetization</h3>
                    <p>Strategies to monetize your YouTube and Facebook platforms effectively.</p>
                    <a href="/youtube-facebook-monetization" class="service-link learn-more-red">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .learn-more-red {
            color: red !important;
            text-decoration: none;
        }

        .learn-more-red .fa-arrow-right {
            color: red !important;
            margin-left: 5px;
            transition: margin-left 0.3s ease;
        }

        .learn-more-red:hover .fa-arrow-right {
            margin-left: 8px;
        }
    </style>
</section>
   <section class="about" id="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img src="images/About Innovative Technologies.webp" alt="Our Team" class="about-img" style="height: 100%; width: 100%; object-fit: cover;">
      </div>
      <div class="col-lg-6 about-content">
        <h2>About <span style="color: #d60000;">Innovative Technologies</span></h2>
        <p>Founded in 2015, Innovative Technologies has been at the forefront of digital transformation, helping businesses of all sizes navigate the complex world of technology.</p>
        <p>Our team of passionate developers, designers, and strategists work collaboratively to deliver solutions that not only meet but exceed our clients' expectations.</p>
        
        <div class="row mt-4">
          <div class="col-6 col-md-3 mb-4">
            <div class="stat-box text-center">
              <h3 style="color: #d60000; font-weight: bold; margin-bottom: 5px;">8,600</h3>
              <p style="color: #000000; margin: 0;">Projects Completed</p>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="stat-box text-center">
              <h3 style="color: #d60000; font-weight: bold; margin-bottom: 5px;">680</h3>
              <p style="color: #000000; margin: 0;">Active Clients</p>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="stat-box text-center">
              <h3 style="color: #d60000; font-weight: bold; margin-bottom: 5px;">159</h3>
              <p style="color: #000000; margin: 0;">Expert People</p>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="stat-box text-center">
              <h3 style="color: #d60000; font-weight: bold; margin-bottom: 5px;">8,430</h3>
              <p style="color: #000000; margin: 0;">Happy Clients</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
    body {
      background-color: #ffffff;
      color: #000000;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .case-studies-section {
      background-color: #000;
      color: #fff;
      padding: 60px 0;
      text-align: center;
    }

    .case-studies-section h2 {
      color: #d60000;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .case-studies-section p.section-subtitle {
      color: #ccc;
      margin-bottom: 40px;
      font-size: 18px;
    }

    .case-card {
      background-color: #111;
      border: 2px solid #d60000;
      border-radius: 8px;
      padding: 30px;
      height: 100%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .case-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(214, 0, 0, 0.5);
    }

    .case-card h5 {
      color: #d60000;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .case-card p {
      color: #ddd;
    }

    .metric {
      font-size: 24px;
      color: #ffffff;
      font-weight: bold;
      margin-top: 15px;
    }
  </style>
</head>
<body>

  <section class="case-studies-section">
    <div class="container">
      <h2>Our Work</h2>
      <p class="section-subtitle">We deliver measurable results. As the #1 Digital Marketing company, Innovative Technologies helps businesses achieve growth and success.</p>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="case-card">
            <h5>E-commerce SEO</h5>
            <p>Implemented a robust SEO strategy that propelled our client’s online store to the first page of Google.</p>
            <div class="metric">↑ 300% Traffic</div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="case-card">
            <h5>Social Media Ads</h5>
            <p>Crafted targeted ad campaigns for a local brand, resulting in exponential engagement and brand recognition.</p>
            <div class="metric">↑ 5x Engagement</div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="case-card">
            <h5>Lead Generation</h5>
            <p>Launched a digital funnel that brought in qualified leads, helping our client close high-value deals quickly.</p>
            <div class="metric">↑ 200% Leads</div>
          </div>
        </div>
      </div>
    </div>
  </section>

 
<!-- end  -->
  


    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Client Testimonials</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Innovative Technologies transformed our online presence completely. Their web development team delivered a site that increased our conversions by 150% in just three months."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Client" class="author-img">
                            <div class="author-info">
                                <h4>Sarah Johnson</h4>
                                <p>CEO, Retail Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"The mobile app developed by Innovative Technologies has been instrumental in growing our user base. Their attention to detail and user experience is exceptional."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="author-img">
                            <div class="author-info">
                                <h4>Michael Chen</h4>
                                <p>Founder, HealthTrack</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Working with Innovative Technologies on our digital marketing strategy was a game-changer. They helped us triple our online leads while reducing our ad spend."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Client" class="author-img">
                            <div class="author-info">
                                <h4>Emily Rodriguez</h4>
                                <p>Marketing Director, TechGlobal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<style>
    .cta-section {
      background: url('images/Get Your Free Proposal.webp') center center / cover no-repeat;
      color: #ffffff;
      padding: 80px 0;
      text-align: center;
      position: relative;
    }

    .cta-overlay {
      background: rgba(0, 0, 0, 0.7);
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    .cta-content {
      position: relative;
      z-index: 2;
    }

    .cta-section h2 {
      font-size: 48px;
      color: #d60000;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .cta-section p {
      font-size: 18px;
      color: #ffffff;
      margin-bottom: 30px;
    }

    .cta-section .btn-cta {
      background-color: #d60000;
      color: #ffffff;
      border: none;
      padding: 12px 30px;
      font-size: 18px;
      font-weight: bold;
      border-radius: 5px;
      transition: background 0.3s ease;
    }

    .cta-section .btn-cta:hover {
      background-color: #ff1a1a;
      color: #ffffff;
    }
  </style>
</head>
<body>

  <section class="cta-section contact" id="contact">
    <div class="cta-overlay"></div>
    <div class="container cta-content">
      <h2>Ready to Grow?</h2>
      <p>Partner with Innovative Technologies, the #1 digital marketing agency. Get your free proposal today and boost your business!</p>
      <a href="https://wa.me/971508097203" class="btn btn-cta">Get Your Free Proposal</a>
    </div>
  </section>
    <!-- Footer -->
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="mb-3">Innovative Technologies</h5>
                    <p>Delivering cutting-edge digital solutions to help businesses grow and thrive in the digital age.</p>
                    <div>
                        <a class="navbar-brand" href="#">
  <img src="images/Innovative-Technologies-Logo-Fottor-1024x297.png" alt="Innovative Technologies" class="navbar-logo">
  <!-- <span class="brand-text">Innovative<span class="highlight-text">Technologies</span></span> -->
</a>
                    </div>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Services</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="/digital-marketing">Digital Marketing</a></li>
                        <li><a href="/google-business-verification-services">Google Business Services</a></li>
                        <li><a href="/ecommerce-website-development">Ecommerce Development</a></li>
                        <li><a href="/website-development">Website Development</a></li>
                        <li><a href="/seo-content-writing">SEO & Content</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>More Services</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="/graphic-designing">Graphic Designing</a></li>
                        <li><a href="/video-editing-animation">Video Editing</a></li>
                        <li><a href="/youtube-facebook-monetization">Social Monetization</a></li>
                        <li><a href="/fiverr-freelancing-monetization">Freelancing Services</a></li>
                        <li><a href="/shopify-store-development">Shopify Development</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright text-center">
                <p>&copy; 2023 <a href="https://innovativedigitaltechnologies.net" style="color: var(--primary-red); text-decoration:none;">InnovativeTechnologies</a>.  All Rights Reserved.</p>
            </div>
             <div style="text-align: center; margin-top: 10px;">
    <a href="/privacy-policy" style="color: var(--primary-red); text-decoration: none;" >
        Privacy Policy
    </a>
</div>

        </div>
    </footer>


    <!-- Back to Top Button -->
    <!-- <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a> -->
      <!-- whatup and logo -->
      <style>
    :root {
        --primary-color: #fe3c00; /* SEO Masters orange */
        --whatsapp-color: #25D366;
        --dark-color: #333;
        --light-color: #f9f9f9;
    }
    
    /* Fixed WhatsApp Button */
    .whatsapp-float {
        position: fixed;
        bottom: 30px;
        left: 30px;
        width: 60px;
        height: 60px;
        background-color: var(--whatsapp-color);
        color: white;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        z-index: 100;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        animation: pulse 2s infinite;
    }
    
    .whatsapp-float:hover {
        background-color: #128C7E;
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }
    
    /* Fixed Logo - Updated to be circular and larger */
    .logo-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 100px;  /* Increased size */
        height: 100px;  /* Increased size */
        background-color: white;
        border-radius: 50%;  /* Changed to perfect circle */
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        z-index: 100;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        overflow: hidden;
        border: 2px solid var(--primary-color);
        padding: 5px;  /* Added padding */
    }
    
    .logo-float img {
        width: 100%;  /* Changed to fill container */
        height: 100%;  /* Changed to fill container */
        object-fit: contain;  /* Ensures logo fits nicely */
        border-radius: 50%;  /* Makes image circular */
    }
    
    .logo-float:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    
    /* Pulse animation for WhatsApp */
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
        }
        70% {
            box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
        }
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .whatsapp-float {
            width: 50px;
            height: 50px;
            font-size: 25px;
            bottom: 20px;
            left: 20px;
        }
        
        .logo-float {
            width: 70px;  /* Slightly larger than WhatsApp on mobile */
            height: 70px;
            bottom: 15px;
            right: 20px;
        }
    }
</style>

<!-- Fixed WhatsApp Button -->
<a href="https://wa.me/+971 50 809 7203" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<style>
 .logo-float {
  display: inline-block;
  background-color: white;
  padding: 8px;
  border-radius: 50%;
  border: 2px solid red;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  width: 100px;
  height: 100px;
  animation: zoomBounce 2s ease-in-out infinite;
}

.logo-float img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  object-fit: cover;
}

/* Zoom Animation */
@keyframes zoomBounce {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
}

/* Responsive: smaller on mobile */
@media (max-width: 600px) {
  .logo-float {
    width: 70px;
    height: 70px;
    padding: 4px;
  }
}

</style>

<div class="logo-float">
    <a href="https://www.google.com/partners/agency?id=8076604987" target="_blank">
        <img src="https://www.gstatic.com/partners/badge/images/2025/PartnerBadgeClickable.svg" alt="Google Partner Badge">
    </a>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Back to Top Button
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });
        
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Portfolio filtering (would need additional library like Isotope for full functionality)
        // This is just a placeholder for the functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');
                
                // Filter logic would go here
                // Requires additional library for full implementation
            });
        });
        
        // Mobile menu collapse when clicking a link
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });
    </script>
</body>
</html>