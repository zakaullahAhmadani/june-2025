<!-- TOP BAR -->
<div class="top-bar d-none d-md-block">
  <div class="container d-flex justify-content-between align-items-center">
    <div>
      <a href="tel:+971501110433"><i class="bi bi-telephone"></i> +971501110433</a>
      <a href="mailto:info@alasaasalmustaemal.shop"><i class="bi bi-envelope"></i> info@alasaasalmustaemal.shop</a>
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

<style>
  /* Base Styles */
  .navbar-toggler-icon {
    position: relative;
    width: 24px;
    height: 24px;
    display: inline-block;
  }

  /* Hamburger Lines (3 lines) */
  .hamburger-line {
    display: block;
    position: absolute;
    height: 2px;
    width: 100%;
    background-color: #000;
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

  /* Cross Lines (X) */
  .cross {
    position: absolute;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #000;
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

  /* Expanded State (Menu Open) */
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

  /* Collapsed State (Menu Closed) */
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
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const toggler = document.getElementById('customNavToggler');
  
  // Update icon state when clicked
  toggler.addEventListener('click', function() {
    // Bootstrap will toggle aria-expanded automatically
    const isExpanded = this.getAttribute('aria-expanded') === 'true';
    
    // Manually toggle the collapsed class to match aria-expanded
    if (isExpanded) {
      this.classList.remove('collapsed');
    } else {
      this.classList.add('collapsed');
    }
  });
});
</script>
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
        <a class="whatsapp-btn" href="https://wa.me/971501110433">
          <i class="bi bi-whatsapp"></i> احجز الآن
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- CSS and JavaScript remain unchanged -->
<style>
  /* Color theme variables */
  :root {
    --primary-color: #FF4500; /* OrangeRed */
    --background-color: #ffffff;
    --text-color: #000000;
  }

  /* Top info bar styling */
  .top-bar {
    background-color: var(--primary-color);
    color: var(--background-color);
    font-size: 0.9rem;
    padding: 8px 0;
  }

  .top-bar a {
    color: var(--background-color);
    text-decoration: none;
    margin-right: 20px;
    transition: all 0.3s;
  }

  .top-bar a:hover {
    text-decoration: underline;
    opacity: 0.8;
  }

  .social-icons a {
    color: var(--background-color);
    margin-left: 15px;
    font-size: 1.1rem;
  }

  /* Main navbar styling */
  .navbar {
    background-color: var(--background-color);
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
    color: var(--text-color);
    font-weight: 500;
    padding: 8px 15px;
    margin: 0 5px;
    transition: all 0.3s;
    position: relative;
  }

  .navbar-nav .nav-link:hover {
    color: var(--primary-color);
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
    background-color: #FF4500;
    color: white !important;
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
  }

  .whatsapp-btn i {
    margin-right: 8px;
    font-size: 1.1em;
    vertical-align: middle;
  }

  .whatsapp-btn:hover {
    background-color: #128C7E;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
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
    
    // Initialize state
    updateTogglerIcon();
    
    // Update icon when clicked
    toggler.addEventListener('click', function() {
      setTimeout(updateTogglerIcon, 10);
    });
    
    function updateTogglerIcon() {
      const isExpanded = toggler.getAttribute('aria-expanded') === 'true';
      toggler.classList.toggle('collapsed', !isExpanded);
    }
  });
</script>