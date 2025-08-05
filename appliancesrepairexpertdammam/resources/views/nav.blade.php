<!-- Top Contact Bar (Hidden on Mobile) -->
<div class="navbar-top d-none d-lg-flex justify-content-between align-items-center py-2 px-3">
  <div class="contact-center">
    <span class="me-4 text-white"><i class="bi bi-telephone-fill me-2 text-white"></i> +966 502085704</span>
    <span class="text-white"><i class="bi bi-envelope-fill me-2 text-white"></i> info@appliancesrepairexpertdammam.shop</span>
  </div>
  <div class="social-icons">
    <a href="#" class="text-white mx-2"><i class="bi bi-instagram"></i></a>
    <a href="#" class="text-white mx-2"><i class="bi bi-twitter"></i></a>
    <a href="#" class="text-white mx-2"><i class="bi bi-youtube"></i></a>
    <a href="#" class="text-white mx-2"><i class="bi bi-facebook"></i></a>
  </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-main shadow-sm py-0">
  <div class="container-fluid px-lg-4">
    <!-- Logo -->
    <a class="navbar-brand py-2" href="{{ url('/') }}">
      <img src="images/Pickup-Delivery-Dubai-logo-header-768x233.png" 
           alt="Company Logo" 
           class="img-fluid"
           style="max-height: 60px; width: auto;">
    </a>

    <!-- Mobile Toggle Button -->
    <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#mainNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="toggler-icon top-bar"></span>
      <span class="toggler-icon middle-bar"></span>
      <span class="toggler-icon bottom-bar"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
        <li class="nav-item mx-lg-2">
          <a class="nav-link px-3 py-3 py-lg-2" href="{{ url('/') }}">الرئيسية</a>
        </li>
        <li class="nav-item mx-lg-2">
          <a class="nav-link px-3 py-3 py-lg-2" href="{{ url('/services') }}">خدماتنا</a>
        </li>
        <li class="nav-item mx-lg-2">
          <a class="nav-link px-3 py-3 py-lg-2" href="{{ route('about') }}">من نحن</a>
        </li>
        <li class="nav-item mx-lg-2">
          <a class="nav-link px-3 py-3 py-lg-2" href="{{ url('/contact') }}">اتصل بنا</a>
        </li>
      </ul>

      <!-- WhatsApp Button -->
      <div class="d-flex justify-content-center pb-3 pb-lg-0">
        <a href="https://wa.me/966502085704" class="book-btn btn btn-primary px-4 py-2 text-decoration-none">
          BOOK NOW <i class="bi bi-arrow-up-right ms-2"></i>
        </a>
      </div>
    </div>
  </div>
</nav>

<style>
  /* Navbar Top (Hidden on mobile) */
  .navbar-top {
    font-size: 0.9rem;
    border-bottom: 1px solid #333;
    background: #000;
    color: white;
  }
  
  /* Main Navbar Styling */
  .navbar-main {
    background: #fff;
    min-height: 80px;
  }
  
  /* Custom Toggler Icon Animation */
  .navbar-toggler {
    width: 30px;
    height: 24px;
    position: relative;
    border: none;
    padding: 0;
    background: transparent !important;
  }
  
  .navbar-toggler:focus {
    box-shadow: none;
  }
  
  .toggler-icon {
    display: block;
    width: 100%;
    height: 2px;
    background: #333;
    transition: all 0.3s;
    position: relative;
  }
  
  .navbar-toggler.collapsed .top-bar {
    transform: rotate(0);
    top: 0;
  }
  
  .navbar-toggler.collapsed .middle-bar {
    opacity: 1;
  }
  
  .navbar-toggler.collapsed .bottom-bar {
    transform: rotate(0);
    bottom: 0;
  }
  
  .navbar-toggler .top-bar {
    transform: rotate(45deg);
    top: 6px;
  }
  
  .navbar-toggler .middle-bar {
    opacity: 0;
  }
  
  .navbar-toggler .bottom-bar {
    transform: rotate(-45deg);
    bottom: 6px;
  }
  
  /* Nav Links */
  .nav-link {
    font-weight: 500;
    position: relative;
    color: #333;
  }
  
  .nav-link:hover,
  .nav-link:focus {
    color: var(--bs-primary) !important;
  }
 
  
  .nav-link:hover:after {
    width: 100%;
  }
  
  /* Book Now Button */
  .book-btn {
    font-weight: 600;
    letter-spacing: 0.5px;
    transition: all 0.3s;
    background:  #003d5c;
    color: white;
  }
  
  .book-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px  #003d5c;
    color: white;
  }
  
  /* Responsive Adjustments */
  @media (max-width: 991.98px) {
    .navbar-collapse {
      background: #fff;
      padding: 1rem;
      margin-top: 10px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }
    
    .nav-item {
      border-bottom: 1px solid #eee;
    }
    
    .nav-item:last-child {
      border-bottom: none;
    }
  }
</style>