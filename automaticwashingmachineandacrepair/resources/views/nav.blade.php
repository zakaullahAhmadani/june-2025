  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            /* Brand Colors */
            --primary-color: #005EB8;       /* Royal Blue */
            --secondary-color: #F4F4F4;     /* Light Gray */
            --accent-color: #FCBF1E;        /* Yellow-Gold */
            --cta-color: #28A745;           /* Emerald Green */
            --danger-color: #E63946;        /* Red */

            /* Text Colors */
            --text-color: #333333;
            --text-light: #666666;
            --text-white: #ffffff;

            /* Background Colors */
            --background-color: #ffffff;
            --section-background: #f4f4f4;
            --footer-background: #003f75;

            /* Hover & Effects */
            --hover-color: #003F75;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --border-color: #dddddd;

            /* Font */
            --font-arabic: 'Tajawal', 'Cairo', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-arabic);
        }

        body {
            direction: rtl;
            background-color: #f9f9f9;
        }

        /* Top Bar Styles */
        .top-bar {
            background-color: var(--primary-color);
            color: var(--text-white);
            padding: 8px 0;
            font-size: 14px;
        }

        .top-bar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .contact-info a {
            color: var(--text-white);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: color 0.3s;
        }

        .contact-info a:hover {
            color: var(--accent-color);
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            color: var(--text-white);
            font-size: 16px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: var(--accent-color);
        }

        /* Navbar Styles */
        .navbar {
            background-color: var(--background-color);
            box-shadow: 0 2px 10px var(--shadow-color);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
            position: relative;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }

        .logo img {
            height: 50px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 25px;
            margin: 0;
            padding: 0;
        }

        .nav-links li a {
            color: var(--text-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.3s;
            position: relative;
        }

        .nav-links li a:hover,
        .nav-links li a.active {
            color: var(--primary-color);
        }

        .nav-links li a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--primary-color);
        }

        /* WhatsApp Button Styles */
        .whatsapp-btn-container {
            display: flex;
            align-items: center;
        }

        .whatsapp-btn {
            background-color: var(--cta-color);
            color: var(--text-white);
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .whatsapp-btn:hover {
            background-color: var(--hover-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .whatsapp-btn i {
            font-size: 18px;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--primary-color);
            font-size: 24px;
            cursor: pointer;
            transition: transform 0.3s;
            z-index: 1001;
        }

        /* Mobile Menu Styles */
        @media (max-width: 992px) {
            .top-bar {
                display: none;
            }

            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                max-width: 300px;
                height: 100vh;
                background-color: var(--background-color);
                flex-direction: column;
                align-items: flex-start;
                padding: 80px 30px 30px;
                box-shadow: -5px 0 15px var(--shadow-color);
                transition: right 0.3s ease-in-out;
                z-index: 999;
                gap: 20px;
            }

            .nav-links.active {
                right: 0;
            }

            .mobile-menu-btn {
                display: block;
            }

            .whatsapp-btn.desktop {
                display: none;
            }

            .whatsapp-btn.mobile {
                display: flex;
                width: 100%;
                justify-content: center;
                margin-top: 20px;
                border-radius: 25px;
                padding: 12px 20px;
            }
        }

        @media (min-width: 993px) {
            .whatsapp-btn.mobile {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-container">
            <div class="contact-info">
                <a href="tel:+966531482186">
                    <i class="fas fa-phone"></i>
                    <span>+966 53 148 2186</span>
                </a>
                <a href="mailto:info@automaticwashingmachineandacrepair.shop">
                    <i class="fas fa-envelope"></i>
                    <span>info@automaticwashingmachineandacrepair.shop</span>
                </a>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="/" class="logo">
                <img src="images/AC-and-Automatic-Washing-Machine-Repair-header.png" alt="المكيفات والغسالات">
            </a>

            <ul class="nav-links">
                <li><a href="/" class="active">الرئيسية</a></li>
                <li><a href="/services">خدمات</a></li>
                <li><a href="/about">من نحن</a></li>
                <li><a href="/contact">اتصل بنا</a></li>
            
                <!-- Mobile WhatsApp Button (shown only in mobile menu) -->
                <li class="mobile-only">
                    <a href="https://wa.me/966531482186" class="whatsapp-btn mobile">
                        <i class="fab fa-whatsapp"></i>
                        <span>احجز الآن</span>
                    </a>
                </li>
            </ul>

            <!-- Desktop WhatsApp Button -->
            <div class="whatsapp-btn-container">
                <a href="https://wa.me/966531482186" class="whatsapp-btn desktop">
                    <i class="fab fa-whatsapp"></i>
                    <span>احجز الآن</span>
                </a>
            </div>

         <button 
  class="mobile-menu-btn" 
  aria-expanded="false" 
  aria-label="Toggle navigation"
  onclick="toggleMenu(this)"
>
  <span class="hamburger-icon">
    <span></span>
  </span>
</button>
<style>
.mobile-menu-btn {
  --size: 24px;
  --thickness: 3px;
  --color: #333;
  --transition: 0.3s;

  background: none;
  border: none;
  cursor: pointer;
  padding: 12px;
  outline: none;
}

.hamburger-icon {
  display: block;
  width: var(--size);
  height: var(--size);
  position: relative;
}

.hamburger-icon span,
.hamburger-icon::before,
.hamburger-icon::after {
  content: "";
  position: absolute;
  width: 100%;
  height: var(--thickness);
  background: var(--color);
  left: 0;
  transition: transform var(--transition) ease, opacity var(--transition) ease;
}

.hamburger-icon span {
  top: 50%;
  transform: translateY(-50%);
}

.hamburger-icon::before {
  top: 0;
  transform-origin: top left;
}

.hamburger-icon::after {
  bottom: 0;
  transform-origin: bottom left;
}

/* Toggle to X */
.mobile-menu-btn[aria-expanded="true"] .hamburger-icon::before {
  transform: rotate(45deg) translate(4px, -1px);
}

.mobile-menu-btn[aria-expanded="true"] .hamburger-icon span {
  opacity: 0;
}

.mobile-menu-btn[aria-expanded="true"] .hamburger-icon::after {
  transform: rotate(-45deg) translate(4px, 1px);
}

</style>
        </div>
    </nav>

    <script>
      // Mobile Menu Toggle
function toggleMenu(button) {
  const navLinks = document.querySelector('.nav-links');
  const expanded = button.getAttribute('aria-expanded') === 'true';
  
  // Toggle menu visibility
  button.setAttribute('aria-expanded', !expanded);
  navLinks.classList.toggle('active');
  
  // Toggle body scroll
  document.body.style.overflow = expanded ? '' : 'hidden';
}

// Close menu when clicking on a link
document.querySelectorAll('.nav-links a').forEach(link => {
  link.addEventListener('click', () => {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    
    navLinks.classList.remove('active');
    mobileMenuBtn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  });
});

// Set active link (your existing code works fine)
document.addEventListener('DOMContentLoaded', function() {
  const currentUrl = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-links li a:not(.whatsapp-btn)');
  
  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href') === currentUrl) {
      link.classList.add('active');
    }
  });

  if (currentUrl === '/') {
    document.querySelector('.nav-links li:first-child a').classList.add('active');
  }
});
        // Close menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
                document.body.style.overflow = '';
            });
        });

        // Set active link
        document.addEventListener('DOMContentLoaded', function() {
            const currentUrl = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-links li a:not(.whatsapp-btn)');
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === currentUrl) {
                    link.classList.add('active');
                }
            });

            // Handle home page active state
            if (currentUrl === '/') {
                document.querySelector('.nav-links li:first-child a').classList.add('active');
            }
        });
    </script>