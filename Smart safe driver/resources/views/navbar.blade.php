<!-- NAVBAR TOP -->
<div class="navbar-top d-none d-lg-flex justify-content-between align-items-center px-3">
  <div class="contact-info d-flex align-items-center">
  <span class="me-4">
    <i class="bi bi-geo-alt-fill me-1"></i>
    <a href="https://www.google.com/maps?q=City+Dubai" target="_blank" class="text-decoration-none text-reset">
      City Dubai
    </a>
  </span>
  <span class="me-4">
    <i class="bi bi-telephone-fill me-1"></i>
    <a href="tel:+971509498443" class="text-decoration-none text-reset">
      0509498443
    </a>
  </span>
  <span>
    <i class="bi bi-envelope-fill me-1"></i>
    <a href="mailto:info@smartsafedriver.com" class="text-decoration-none text-reset">
      info@smartsafedriver.com
    </a>
  </span>
</div>

  <div class="social-icons d-flex align-items-center">
    <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
    <a href="#" class="ms-3 text-white"><i class="bi bi-twitter"></i></a>
    <a href="#" class="ms-3 text-white"><i class="bi bi-youtube"></i></a>
    <a href="#" class="ms-3 text-white"><i class="bi bi-facebook"></i></a>
  </div>
</div>


<!-- MAIN NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-main shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
      <img src="images/Smart Safe Driver  Logo header.png" alt="Your Logo" class="logo-img">
    </a>

   <button
  class="navbar-toggler"
  type="button"
  data-bs-toggle="collapse"
  data-bs-target="#mainNavbar"
  aria-controls="mainNavbar"
  aria-expanded="false"
  aria-label="Toggle navigation"
>
  <span class="toggler-icon-open"><i class="bi bi-list"></i></span>
  <span class="toggler-icon-close"><i class="bi bi-x-lg"></i></span>
</button>
<style>
  .navbar-toggler {
  margin-top: -35px;
}
  .navbar-toggler .toggler-icon-close {
    display: none;
  }

  .navbar-toggler[aria-expanded="true"] .toggler-icon-open {
    display: none;
  }

  .navbar-toggler[aria-expanded="true"] .toggler-icon-close {
    display: inline;
  }
</style>


    <div class="collapse navbar-collapse justify-content-center" id="mainNavbar">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/services') }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
        </li>
      </ul>

      <!-- BOOK NOW button visible on mobile when menu expands -->
      <div class="d-block d-lg-none mt-3 text-center">
        <a href="https://api.whatsapp.com/send?phone=971509498443" class="btn btn-book-now d-inline-flex align-items-center">
          BOOK NOW <i class="bi bi-arrow-up-right ms-2"></i>
        </a>
      </div>
    </div>

    <!-- Button visible only on desktop -->
    <div class="d-none d-lg-flex">
      <a href="https://api.whatsapp.com/send?phone=971509498443" class="btn btn-book-now d-flex align-items-center">
        BOOK NOW <i class="bi bi-arrow-up-right ms-2"></i>
      </a>
    </div>
  </div>
</nav>

<style>
/* Navbar Top Styles */
.navbar-top {
  background-color: #023047;
  color: #ffffff;
  font-size: 14px;
  padding: 8px 0;
}

.navbar-top a {
  color: #ffffff;
  text-decoration: none;
}

.navbar-top a:hover {
  color: #ffb703;
}

.navbar-top i {
  vertical-align: middle;
  font-size: 1rem;
}

/* Hide navbar-top on small devices */
@media (max-width: 991.98px) {
  .navbar-top {
    display: none;
  }
}

/* Main Navbar Styles */
.navbar-main {
  background-color: #ffffff;
  height: 80px;
}

.logo-img {
  height: 60px;
  object-fit: contain;
  max-width: 250px;
  position: relative; /* Added for positioning */
}

/* Mobile logo adjustment */
@media (max-width: 991.98px) {
  .logo-img {
    top: -12px; /* Moves logo 2px higher */
  }
}

.navbar-nav .nav-link {
  color: #023047;
  font-weight: 500;
  padding: 0 15px;
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
  color: #ffb703;
}

.btn-book-now {
  background-color: #ffb703;
  color: #023047;
  font-weight: 600;
  padding: 8px 16px;
  border-radius: 50px;
  text-decoration: none;
}

.btn-book-now:hover {
  background-color: #fb8500;
  color: #ffffff;
}

/* Optional: Remove focus styles from dropdown */
.no-focus-border:focus {
  outline: none !important;
  box-shadow: none !important;
  border-color: transparent !important;
}
</style>

<div class="cs_site_header_spacing_140"></div>
