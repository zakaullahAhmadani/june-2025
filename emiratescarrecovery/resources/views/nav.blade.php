 <div class="navbar-top d-flex justify-content-between align-items-center">
    <!-- Left padding space is already handled by padding -->
    <div class="contact-center">
      <span><i class="bi bi-telephone-fill"></i> +971566530614</span>
      <span><i class="bi bi-whatsapp"></i> +971566530614</span>
      <!-- <span><i class="bi bi-geo-alt-fill"></i> Dubai – United Arab Emirates</span> -->
    </div>
    <div class="d-flex align-items-center">
      <a href="#"><i class="bi bi-instagram"></i></a>
      <a href="#" class="ms-3"><i class="bi bi-twitter"></i></a>
      <a href="#" class="ms-3"><i class="bi bi-youtube"></i></a>
      <a href="#" class="ms-3"><i class="bi bi-facebook"></i></a>
    </div>
  </div>

  <!-- 📌 Main Navbar -->
 <nav class="navbar navbar-expand-lg navbar-main shadow-sm" style="height: 80px; padding: 0;">
  <div class="container-fluid px-0">

   <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}" style="height: 100%; padding: 5px 0;">
      <img src="images/Pickup-Delivery-Dubai-logo-header-768x233.png" 
           alt="FAJ Logo" 
           class="h-100 w-auto" 
           style="object-fit: contain; max-width: 100%;">
    </a><style>
  /* Optional: If you need to control maximum logo dimensions */
  .navbar-brand img {
    max-height: 70px; /* 80px navbar - 2x5px padding */
    max-width: 250px; /* Adjust based on your logo aspect ratio */
  }
</style>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>



    
    <!-- <ul class="dropdown-menu" aria-labelledby="servicesDropdownLink">
        <li><a class="dropdown-item" href="{{ url('/services') }}">All Services</a></li>
    </ul> -->
</li>
<style>
.no-focus-border:focus {
    outline: none !important;
    box-shadow: none !important;
    border-color: transparent !important;
}
</style>
         
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>

        <a href="https://api.whatsapp.com/send?phone=971566530614" class="book-btn text-decoration-none d-flex align-items-center">
          BOOK NOW <i class="bi bi-arrow-up-right"></i>
        </a>
      </div>
    </div>
  </nav>