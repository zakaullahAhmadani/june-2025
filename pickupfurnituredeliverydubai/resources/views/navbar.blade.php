<style>
    /* CSS Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    html, body {
        width: 100%;
        height: 100%;
        overflow-x: hidden; /* Prevent horizontal scroll */
    }
    
:root {
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

    
    .top-bar {
        margin-top: 0 !important;
        background-color: var(--primary-color);
        color: var(--white);
        padding: 8px 0;
        font-size: 14px;
    }
    
    .top-contact a {
        color: var(--white);
        text-decoration: none;
        margin-right: 15px;
        transition: color 0.3s;
    }
    
    .top-contact a:hover {
        color: var(--accent-color);
    }
    
    .top-contact i {
        margin-right: 5px;
        color: var(--accent-color);
    }
    
    .social-icons a {
        color: var(--white);
        margin-left: 12px;
        font-size: 16px;
        transition: color 0.3s;
    }
    
    .social-icons a:hover {
        color: var(--secondary-color);
    }
    
    .navbar {
        background-color: var(--white);
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        padding: 15px 0;
    }
    
    .navbar.sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        animation: slideDown 0.5s;
    }
    
    @keyframes slideDown {
        from {transform: translateY(-100%);}
        to {transform: translateY(0);}
    }
    
    .nav-link {
        color: var(--text-color);
        font-weight: 500;
        margin: 0 10px;
        position: relative;
    }
    
    .nav-link:after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background: var(--accent-color);
        bottom: 0;
        left: 0;
        transition: width 0.3s;
    }
    
    .nav-link:hover:after,
    .nav-link.active:after {
        width: 100%;
    }
    
    .nav-link:hover {
        color: var(--primary-color);
    }
    
    .call-btn {
        background-color: var(--accent-color);
        color: var(--white);
        border-radius: 30px;
        padding: 8px 20px;
        font-weight: 600;
        transition: all 0.3s;
        border: none;
    }
    
    .call-btn:hover {
        background-color: var(--primary-color);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 94, 0, 0.3);
    }
    
    .navbar-toggler {
        border: none;
        padding: 0;
        font-size: 1.5rem;
    }
    
    .navbar-toggler:focus {
        box-shadow: none;
    }
    
    @media (max-width: 991.98px) {
        .social-icons {
            display: none !important;
        }
        
        .navbar-collapse {
            background: var(--white);
            padding: 20px;
            margin-top: 15px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    }
    
    /* General background */
    body {
        background-color: var(--bg-color);
        color: var(--text-color);
    }
    
    /* Text headings */
    h1, h2, h3, h4, h5, h6 {
        color: var(--primary-color);
    }
</style>
</head>
<body>
    <!-- Top Contact Bar -->
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="top-contact">
                        <a href="https://maps.google.com?q=Dubai+UAE" target="_blank">
                            <i class="bi bi-geo-alt-fill"></i> Dubai
                        </a>
                        <a href="https://wa.me/+971589125005" target="_blank">
                            <i class="bi bi-whatsapp"></i> 0589125005
                        </a>
                        <a href="mailto:info@pickupfurnituredeliverydubai.com">
                            <i class="bi bi-envelope-fill"></i> info@pickupfurnituredeliverydubai.com
                        </a>
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <div class="social-icons text-end">
                        <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="images/Pickup Furniture Delivery Dubai  Logo header (1).png" alt="Furniture Pickup & Delivery Logo" height="50">
            </a>
            
            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list" id="toggleIcon"></i>
            </button>
            
            <!-- Nav Items -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>

                <!-- Call Button -->
                <div class="d-flex">
                    <button class="call-btn">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <a href="tel:0589125005" style="color: white; text-decoration: none;">Call Now</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Your page content would go here -->
    <div style="height: 2px;"></div> <!-- Just for demo scrolling -->
    
    <script>
        // Make navbar sticky on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('sticky');
            } else {
                navbar.classList.remove('sticky');
            }
        });
        
        // Toggle icon change
        const navbarToggler = document.querySelector('.navbar-toggler');
        const toggleIcon = document.getElementById('toggleIcon');
        
        navbarToggler.addEventListener('click', function() {
            if (toggleIcon.classList.contains('bi-list')) {
                toggleIcon.classList.remove('bi-list');
                toggleIcon.classList.add('bi-x');
            } else {
                toggleIcon.classList.remove('bi-x');
                toggleIcon.classList.add('bi-list');
            }
        });
    </script>