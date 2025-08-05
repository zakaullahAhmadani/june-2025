<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact-Appliance Repair Expert Dammam</title>

   @include('meta')

</head>
<body>
   @include('nav')
   
<section 
  class="hero-section d-flex flex-column justify-content-center align-items-center text-center"
  style="
    background: url('images/contact.webp') center center / cover no-repeat;
    min-height: 50vh;
  "
>
  <div class="container">
    <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInDown text-black">
      اتصل بنا
    </h1>
    <nav aria-label="breadcrumb" class="animate__animated animate__fadeInUp">
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item">
          <a href="/" class="text-black text-decoration-none">
            الرئيسية
          </a>
        </li>
        <li class="breadcrumb-item active text-black" aria-current="page">
          اتصل بنا
        </li>
      </ol>
    </nav>
  </div>
</section>

<div class="cs_height_80 cs_height_lg_80"></div>
<br><br>
<br><br><br><br><br>
@include('contentsection')

@include('whychoose')

@include('footer')

 
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- WOW.js for animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
        new WOW().init();
    </script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.ba-container');
    const before = container.querySelector('.ba-before');
    const handle = container.querySelector('.ba-handle');

    const onMove = e => {
      const rect = container.getBoundingClientRect();
      const x = (e.touches ? e.touches[0].clientX : e.clientX) - rect.left;
      const pct = Math.max(0, Math.min(x, rect.width));
      before.style.width = pct + 'px';
      handle.style.left = pct + 'px';
    };
    handle.addEventListener('mousedown', () => {
      document.addEventListener('mousemove', onMove);
    });
    document.addEventListener('mouseup', () => {
      document.removeEventListener('mousemove', onMove);
    });
    // Touch events
    handle.addEventListener('touchstart', () => {
      document.addEventListener('touchmove', onMove);
    });
    document.addEventListener('touchend', () => {
      document.removeEventListener('touchmove', onMove);
    });
  });
</script>


    <script>
        // Initialize WOW.js
        new WOW().init();
        
        // Auto-rotate carousel every 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            var myCarousel = document.getElementById('heroCarousel');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 5000,
                ride: 'carousel'
            });
        });
    </script>
    <!-- Add this JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownElement = document.getElementById('servicesDropdown');
    const dropdownLink = document.getElementById('servicesDropdownLink');
    
    // Hover functionality
    dropdownElement.addEventListener('mouseenter', function() {
        const dropdown = new bootstrap.Dropdown(dropdownLink);
        dropdown.show();
    });
    
    dropdownElement.addEventListener('mouseleave', function() {
        const dropdown = bootstrap.Dropdown.getInstance(dropdownLink);
        dropdown.hide();
    });
    
    // Click functionality - navigate to services page
    dropdownLink.addEventListener('click', function(e) {
        // Only navigate if clicking directly on the main link (not when dropdown is open)
        if (!dropdownElement.classList.contains('show')) {
            window.location.href = this.href;
        }
    });
});
</script>

</body>
</html>