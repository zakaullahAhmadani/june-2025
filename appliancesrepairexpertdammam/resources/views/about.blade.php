<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>About-Appliance Repair Expert Dammam</title>

  @include('meta')
</head>
<body>
   @include('nav')
   <section 
  class="hero-section d-flex flex-column justify-content-center align-items-center text-center"
  style="
    background: url('images/about.webp') center center / cover no-repeat;
    min-height: 50vh;
  "
>
  <div class="container">
    <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInDown text-black">
      من نحن   </h1>
    <nav aria-label="breadcrumb" class="animate__animated animate__fadeInUp">
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item">
          <a href="/" class="text-black text-decoration-none">
            الرئيسية
          </a>
        </li>
        <li class="breadcrumb-item active text-black" aria-current="page">
          من نحن
        </li>
      </ol>
    </nav>
  </div>
</section>
  <style>
        /* Custom CSS to match original styling */
        .cs_height_80, .cs_height_lg_80 {
            height: 80px;
        }
        .cs_height_27, .cs_height_lg_65 {
            height: 27px;
        }
        .cs_height_120, .cs_height_lg_105 {
            height: 120px;
        }
        @media (min-width: 992px) {
            .cs_height_lg_80 {
                height: 80px;
            }
            .cs_height_lg_65 {
                height: 65px;
            }
            .cs_height_lg_105 {
                height: 105px;
            }
        }
        
        .cs_section_subtitle {
            font-size: 18px;
            margin-bottom: 12px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-transform: uppercase;
            color: #333;
        }
        
        .cs_section_title {
            font-size: 40px;
            margin-bottom: 0;
            font-weight: 700;
            color: #333;
        }
        
        .cs_row_gap_40 {
            row-gap: 40px;
        }
        
        .cs_gap_y_40 {
            margin-top: 40px;
            margin-bottom: 40px;
        }
        
        .cs_features_thumbnail_1, .cs_features_thumbnail_2, .cs_features_thumbnail_3 {
            position: relative;
        }
        
        .cs_features_thumbnail_1 img, .cs_features_thumbnail_2 img, .cs_features_thumbnail_3 img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        
        .cs_feature_text {
            margin-bottom: 30px;
            font-size: 16px;
            line-height: 1.6;
            color: #666;
        }
        
        .cs_iconbox {
            display: flex;
            gap: 15px;
            margin-bottom: 12px;
            align-items: flex-start;
        }
        
        .cs_iconbox_icon {
            width: 50px;
            height: 50px;
            background-color: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .cs_iconbox_icon img {
            width: 24px;
            height: 24px;
        }
        
        .cs_iconbox_info h3 {
            font-size: 18px;
            margin-bottom: 2px;
            font-weight: 600;
            color: #333;
        }
        
        .cs_iconbox_subtitle {
            font-size: 12px;
            color: #666;
            line-height: 1.5;
            margin-bottom: 0;
        }
        
        .cs_btn {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            background-color: #0d6efd;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .cs_btn:hover {
            background-color: #0b5ed7;
            color: white;
        }
        
        .cs_btn i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        
        .cs_btn:hover i {
            transform: translateX(3px);
        }
        
        .cs_features_thumbnail_2 {
            margin-bottom: 20px;
        }
        
        .cs_features_thumbnail_3 {
            margin-top: 20px;
        }
        
        /* SVG icon styling */
        .cs_section_subtitle svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }
    </style>

@include('aboutsection')
<!-- new section  -->
 @include('aboutsection2')

<div class="cs_height_80 cs_height_lg_80"></div>
<br><br>
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