<!-- TOP BAR -->
<div class="top-bar d-none d-md-block">
  <div class="container d-flex justify-content-between align-items-center">
    <div>
      <a href="tel:+966555706976"><i class="bi bi-telephone"></i> +966555706976</a>
      <a href="mailto:info@masterappliancesrepair.shop"><i class="bi bi-envelope"></i> info@masterappliancesrepair.shop</a>
      <a href="#"><i class="bi bi-geo-alt"></i> مدينة الرياض</a>
    </div>
    <div class="social-icons">
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-linkedin"></i></a>
    </div>
  </div>
</div>

<!-- MAIN NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <div class="container">
    <!-- LEFT SIDE LOGO -->
    <a class="navbar-brand" href="/">
      <img src="images/Used Furniture Buyers Dubai  header.png" alt="Used Furniture Buyers Dubai">
    </a>
    
    <!-- MOBILE TOGGLER -->
    <button class="navbar-toggler custom-toggler collapsed ms-auto" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#mainNavbar"
        aria-controls="mainNavbar"
        aria-expanded="false"
        aria-label="Toggle navigation"
        style="transform: translateX(-30px);"
        id="customNavToggler">
      <span class="navbar-toggler-icon">
        <!-- Hamburger Lines (3 lines) - shown when collapsed -->
        <span class="hamburger-line top"></span>
        <span class="hamburger-line middle"></span>
        <span class="hamburger-line bottom"></span>
        
        <!-- Cross Lines (X) - shown when expanded -->
        <span class="cross cross1"></span>
        <span class="cross cross2"></span>
      </span>
    </button>

    <!-- NAVIGATION CONTENT -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <!-- CENTERED NAV LINKS -->
      <div class="nav-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">من نحن</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('services') ? 'active' : '' }}" href="{{ route('services') }}">خدماتنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">اتصل بنا</a>
          </li>
        </ul>
      </div>
      
      <!-- RIGHT SIDE BUTTON -->
      <div class="ms-lg-auto">
        <a class="whatsapp-btn" href="https://wa.me/966555706976">
          <i class="bi bi-whatsapp"></i> احجز الآن
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- CSS with professional color theme -->
<style>
  /* Professional Color Theme Variables */
  :root {
    /* === Brand Colors === */
    --primary-color: #2c3e50;       /* Dark Blue - professional, trustworthy */
    --secondary-color: #3498db;     /* Bright Blue - call to action */
    --accent-color-1: #1abc9c;      /* Teal - fresh highlights */
    --accent-color-2: #f39c12;      /* Orange - attention grabber */
    --accent-color-3: #34495e;      /* Dark Slate - elegant contrast */

    /* === Backgrounds === */
    --background-light: #ffffff;    /* White */
    --background-main: #f8f9fa;    /* Very light gray */
    --background-alt: #ecf0f1;      /* Light gray alternate */

    /* === Text Colors === */
    --text-heading: #2c3e50;        /* Dark blue for headings */
    --text-body: #4a5568;          /* Dark gray for body text */
    --text-muted: #718096;         /* Medium gray for muted text */

    /* === Borders & Outlines === */
    --border-light: #e2e8f0;       /* Light gray border */

    /* === State Colors === */
    --color-success: #27ae60;      /* Green */
    --color-warning: #e67e22;      /* Orange */
    --color-error: #e74c3c;        /* Red */
    --color-info: #3498db;         /* Blue */

    /* === Shadows === */
    --shadow-xs: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --shadow-sm: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
  }

  /* Top info bar styling */
  .top-bar {
    background-color: var(--accent-color-3);
    color: var(--background-light);
    font-size: 0.9rem;
    padding: 8px 0;
  }

  .top-bar a {
    color: var(--background-light);
    text-decoration: none;
    margin-right: 20px;
    transition: all 0.3s;
  }

  .top-bar a:hover {
    color: var(--accent-color-1);
  }

  .social-icons a {
    color: var(--background-light);
    margin-left: 15px;
    font-size: 1.1rem;
    transition: color 0.3s;
  }

  .social-icons a:hover {
    color: var(--accent-color-1);
  }

  /* Main navbar styling */
  .navbar {
    background-color: var(--background-light);
    box-shadow: var(--shadow-sm);
    padding: 15px 0;
  }

  .navbar-brand img {
    height: 50px;
    width: auto;
    transition: all 0.3s;
  }

  .navbar-brand img:hover {
    transform: scale(1.05);
  }

  .nav-center {
    display: flex;
    justify-content: center;
    width: 100%;
  }

  .navbar-nav .nav-link {
    color: var(--text-body);
    font-weight: 500;
    padding: 8px 15px;
    margin: 0 5px;
    transition: all 0.3s;
    position: relative;
  }

  .navbar-nav .nav-link:hover {
    color: var(--primary-color);
  }

  .navbar-nav .nav-link.active {
    color: var(--primary-color);
    font-weight: 600;
  }

  .navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: var(--primary-color);
    transition: width 0.3s;
  }

  .navbar-nav .nav-link:hover::after {
    width: 100%;
  }

  .whatsapp-btn {
    background-color: var(--secondary-color);
    color: var(--background-light) !important;
    padding: 10px 20px;
    border-radius: 50px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    border: none;
    text-decoration: none;
    line-height: 1.2;
    min-width: 120px;
    text-align: center;
    white-space: nowrap;
    box-shadow: var(--shadow-sm);
  }

  .whatsapp-btn i {
    margin-right: 8px;
    font-size: 1.1em;
    vertical-align: middle;
  }

  .whatsapp-btn:hover {
    background-color: var(--accent-color-1);
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
  }

  /* Custom toggler icon styles */
  .navbar-toggler-icon {
    position: relative;
    width: 24px;
    height: 24px;
    display: inline-block;
  }

  .hamburger-line {
    display: block;
    position: absolute;
    height: 2px;
    width: 100%;
    background-color: var(--primary-color);
    left: 0;
    transition: all 0.3s ease;
  }

  .hamburger-line.top {
    top: 5px;
  }

  .hamburger-line.middle {
    top: 11px;
  }

  .hamburger-line.bottom {
    top: 17px;
  }

  .cross {
    position: absolute;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: var(--primary-color);
    transition: all 0.3s ease;
    transform-origin: center;
  }

  .cross1 {
    top: 11px;
    transform: rotate(45deg) scaleX(0);
  }

  .cross2 {
    top: 11px;
    transform: rotate(-45deg) scaleX(0);
  }

  .navbar-toggler:not(.collapsed) .cross1 {
    transform: rotate(45deg) scaleX(1);
  }

  .navbar-toggler:not(.collapsed) .cross2 {
    transform: rotate(-45deg) scaleX(1);
  }

  .navbar-toggler:not(.collapsed) .hamburger-line {
    opacity: 0;
    transform: scaleX(0);
  }

  .navbar-toggler.collapsed .cross1 {
    transform: rotate(45deg) scaleX(0);
  }

  .navbar-toggler.collapsed .cross2 {
    transform: rotate(-45deg) scaleX(0);
  }

  .navbar-toggler.collapsed .hamburger-line {
    opacity: 1;
    transform: scaleX(1);
  }

  /* Responsive adjustments */
  @media (max-width: 991.98px) {
    .navbar-brand {
      order: 1;
    }
    
    .navbar-toggler {
      order: 2;
    }
    
    .navbar-collapse {
      order: 3;
    }
    
    .nav-center {
      margin: 15px 0;
    }
    
    .whatsapp-btn {
      margin-top: 10px;
      width: 50px;
      justify-content: center;
      margin-left: 35%;
    }
  }

  @media (max-width: 767.98px) {
    .top-bar {
      display: none;
    }
    
    .navbar-brand img {
      height: 40px;
    }
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const toggler = document.getElementById('customNavToggler');
  
  // Update icon state when clicked
  toggler.addEventListener('click', function() {
    const isExpanded = this.getAttribute('aria-expanded') === 'true';
    
    if (isExpanded) {
      this.classList.remove('collapsed');
    } else {
      this.classList.add('collapsed');
    }
  });
});
</script>