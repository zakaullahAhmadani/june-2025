<!-- Top Contact Bar (Hidden on Mobile) -->
<div class="navbar-top d-none d-lg-flex justify-content-between align-items-center py-2 px-3" style="background:#8d6e63;">
 <div class="contact-center">
    <span class="me-4 text-white">
        <i class="bi bi-telephone-fill me-2 text-white"></i> 
        <a href="tel:0550220842" class="text-white text-decoration-none">0550220842</a>
    </span>
    <span class="text-white">
        <i class="bi bi-envelope-fill me-2 text-white"></i> 
        <a href="mailto:info@falseceilingandgypsumwork.shop" class="text-white text-decoration-none">info@falseceilingandgypsumwork.shop</a>
    </span>
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
      <img src="{{ asset('images/logo.png') }}" alt="Gypsum Board " class="img-fluid" style="max-height: 50px;">
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
        <a href="https://wa.me/966550220842" class="book-btn btn btn-primary px-4 py-2 text-decoration-none">
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
    border-bottom: 1px solid var(--primary-color);
    background:#8d6e63;
    color: white;
  }
  
  /* Main Navbar Styling */
  .navbar-main {
    background: var(--bg-color);
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
    background:#8d6e63;
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
    color: var(--text-color);
  }
  
  .nav-link:hover,
  .nav-link:focus {
    color: var(--secondary-color) !important;
  }
  
  .nav-link:hover:after {
    width: 100%;
  }
  
  /* Book Now Button */
  .book-btn {
    font-weight: 600;
    letter-spacing: 0.5px;
    transition: all 0.3s;
    background:#8d6e63;
    color: white;
  }
  
  .book-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(90, 78, 60, 0.3);
    background: var(--accent-color);
    color: white;
  }
  
  /* Responsive Adjustments */
  @media (max-width: 991.98px) {
    .navbar-collapse {
      background: var(--bg-color);
      padding: 1rem;
      margin-top: 10px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }
    
    .nav-item {
      border-bottom: 1px solid var(--border-color);
    }
    
    .nav-item:last-child {
      border-bottom: none;
    }
  }
</style>