document.addEventListener("DOMContentLoaded", function () {
			const toggle = document.getElementById("menuToggle");
			const mobileMenu = document.getElementById("mobileMenu");

			toggle.addEventListener("click", function () {
				toggle.classList.toggle("active");
				mobileMenu.classList.toggle("active");
			});

			const dropdowns = mobileMenu.querySelectorAll(".menu-item-has-children > a");
			dropdowns.forEach(link => {
				link.addEventListener("click", function (e) {
					e.preventDefault();
					this.parentElement.classList.toggle("active");
				});
			});
		});
	
	   
    
    
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');
            let currentSlide = 0;
            let slideInterval;
            const slideDuration = 5000; // 5 seconds
            
            // Initialize slider
            function initSlider() {
                // Set first slide as active
                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
                
                // Start auto slide
                startSlideInterval();
            }
            
            // Change slide
            function changeSlide(n) {
                // Clear current active states
                slides[currentSlide].classList.remove('active');
                dots[currentSlide].classList.remove('active');
                
                // Update current slide
                currentSlide = (n + slides.length) % slides.length;
                
                // Set new active states
                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
                
                // Reset auto slide timer
                resetSlideInterval();
            }
            
            // Next slide
            function nextSlide() {
                changeSlide(currentSlide + 1);
            }
            
            // Previous slide
            function prevSlide() {
                changeSlide(currentSlide - 1);
            }
            
            // Start auto slide interval
            function startSlideInterval() {
                slideInterval = setInterval(nextSlide, slideDuration);
            }
            
            // Reset auto slide interval
            function resetSlideInterval() {
                clearInterval(slideInterval);
                startSlideInterval();
            }
            
            // Event listeners
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);
            
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    const slideIndex = parseInt(this.getAttribute('data-slide'));
                    changeSlide(slideIndex);
                });
            });
            
            // Initialize slider
            initSlider();
            
            // Pause on hover
            const sliderContainer = document.querySelector('.slider-container');
            sliderContainer.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });
            
            sliderContainer.addEventListener('mouseleave', () => {
                startSlideInterval();
            });
        });
    
   document.addEventListener('DOMContentLoaded', function() {
    // Get all menu items from both desktop and mobile menus
    const menuItems = document.querySelectorAll('.menu-item');
    const homeLink = document.querySelector('.menu-item a[href="/"]')?.closest('.menu-item');
    
    // Set home as active by default
    if (homeLink) homeLink.classList.add('active');
    
    // Function to update active state
    function updateActiveState() {
        const currentPath = window.location.pathname;
        
        // Remove active class from all items
        menuItems.forEach(item => item.classList.remove('active'));
        
        // Check if we're on home page
        if (currentPath === '/' || currentPath === '/index.html') {
            if (homeLink) homeLink.classList.add('active');
            return;
        }
        
        // Check other menu items
        menuItems.forEach(item => {
            const link = item.querySelector('a');
            if (link) {
                const href = link.getAttribute('href');
                
                // Check if current path matches this link
                if (href && (currentPath === href || currentPath.startsWith(href))) {
                    item.classList.add('active');
                    
                    // If this is a submenu item, activate parent too
                    const parentMenu = item.closest('.sub-menu');
                    if (parentMenu) {
                        const parentItem = parentMenu.closest('.menu-item-has-children');
                        if (parentItem) parentItem.classList.add('active');
                    }
                }
            }
        });
    }
    
    // Set click handlers for all menu links
    document.querySelectorAll('.menu-item a').forEach(link => {
        link.addEventListener('click', function() {
            // Remove active class from all items
            menuItems.forEach(item => item.classList.remove('active'));
            
            // Add active class to clicked item or its parent
            const menuItem = this.closest('.menu-item');
            if (menuItem) {
                menuItem.classList.add('active');
                
                // If this is a submenu link, activate parent menu item
                const parentMenu = menuItem.closest('.sub-menu');
                if (parentMenu) {
                    const parentItem = parentMenu.closest('.menu-item-has-children');
                    if (parentItem) parentItem.classList.add('active');
                }
            }
        });
    });
    
    // Initial update
    updateActiveState();
    
    // Update when using browser back/forward buttons
    window.addEventListener('popstate', updateActiveState);
});
   
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('main-navbar');
    const scrollOffset = 100; // Adjust this value (px) to control when navbar fixes
    let lastScroll = 0;
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        // Scroll down behavior
        if (currentScroll > scrollOffset && currentScroll > lastScroll) {
            navbar.classList.add('fixed-nav');
            document.body.classList.add('has-fixed-nav');
        } 
        // Scroll up behavior
        else if (currentScroll < lastScroll && currentScroll <= scrollOffset) {
            navbar.classList.remove('fixed-nav');
            document.body.classList.remove('has-fixed-nav');
        }
        
        lastScroll = currentScroll;
    });
});