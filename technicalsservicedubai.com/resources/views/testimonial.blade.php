<style>
:root {
  /* Brand Identity */
  --primary-color: #0A66C2;     /* Blue - Plumbing */
  --secondary-color: #FFD700;   /* Yellow - Electrical */
  --accent-color: #28A745;      /* Green - Painting */
  --renovation-color: #8B4513;  /* Brick Brown - Renovation */
  --appliance-color: #A9A9A9;   /* Grey - Home Appliances */
  --ceiling-color: #F5F5F5;     /* Off White - False Ceiling */

  /* Text Colors */
  --text-color: #222222;
  --text-light: #555555;
  --text-white: #ffffff;

  /* Background Colors */
  --bg-light: #f9f9f9;
  --bg-dark: #1e1e1e;
  --bg-image-overlay: rgba(0, 0, 0, 0.5);

  /* Button Styles */
  --btn-bg: var(--primary-color);
  --btn-color: var(--text-white);
  --btn-hover-bg: var(--accent-color);
  --btn-hover-color: var(--text-white);

  /* Border and Shadow */
  --border-color: #dddddd;
  --box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: var(--bg-light);
    padding: 40px 0;
}

.testimonial-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    text-align: center;
    background-color: var(--ceiling-color);
}

.section-title {
    text-align: right;
    margin-bottom: 40px;
    color: var(--primary-color);
    font-size: 2.5rem;
    font-weight: 700;
}

.testimonial-slider {
    position: relative;
    overflow: hidden;
}

.testimonial-container {
    display: flex;
    transition: transform 0.5s ease;
}

.testimonial-card {
    flex: 0 0 calc(100% / 3);
    padding: 0 15px;
    transition: all 0.3s ease;
}

.testimonial-content {
    background-color: var(--white);
    border-radius: 10px;
    padding: 30px;
    box-shadow: var(--box-shadow);
    text-align: center;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 1px solid rgba(10, 102, 194, 0.1);
}

.testimonial-image {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--secondary-color);
    margin-bottom: 20px;
}

.testimonial-text {
    color: var(--text-light);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
}

.testimonial-name {
    color: var(--primary-color);
    font-weight: bold;
    font-size: 1.2rem;
    margin-top: auto;
}

.testimonial-project {
    color: var(--accent-color);
    font-size: 0.9rem;
    margin-top: 5px;
}

.slider-dots {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

.dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: var(--border-color);
    margin: 0 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.dot.active {
    background-color: var(--accent-color);
}

.slider-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 0 10px;
}

.slider-btn {
    background-color: var(--accent-color);
    color: var(--white);
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 1.2rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.slider-btn:hover {
    background-color: var(--primary-color);
}

@media (max-width: 768px) {
    .testimonial-card {
        flex: 0 0 100%;
    }

    .slider-nav {
        display: none;
    }
}
</style>
 
<section class="testimonial-section">
   

    <div class="testimonial-slider">
        <div class="slider-nav">
            <button class="slider-btn prev-btn">&lt;</button>
            <button class="slider-btn next-btn">&gt;</button>
        </div>
        
        <h2 class="section-title">What Our Ceiling Clients Say</h2>
        <div class="testimonial-container">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Client" class="testimonial-image">
                    <p class="testimonial-text">
                        "The gypsum ceiling installation in our villa was completed ahead of schedule with perfect craftsmanship. Their attention to detail transformed our living room!"
                    </p>
                    <h3 class="testimonial-name">Sarah Al Maktoum</h3>
                    <div class="testimonial-project">Villa in Emirates Hills</div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="testimonial-image">
                    <p class="testimonial-text">
                        "As a hotel manager, I've worked with many ceiling contractors. These professionals delivered the most precise false ceiling work for our 5-star property in Dubai Marina."
                    </p>
                    <h3 class="testimonial-name">Ahmed Khan</h3>
                    <div class="testimonial-project">Luxury Hotel in Marina</div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Client" class="testimonial-image">
                    <p class="testimonial-text">
                        "Our office gypsum board ceiling looks stunning! The team worked after hours to minimize disruption and completed the project within budget. Highly professional."
                    </p>
                    <h3 class="testimonial-name">Fatima Al Rais</h3>
                    <div class="testimonial-project">Corporate Office in DIFC</div>
                </div>
            </div>
            
            <!-- Testimonial 4 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client" class="testimonial-image">
                    <p class="testimonial-text">
                        "The false ceiling renovation in our apartment exceeded expectations. They suggested innovative lighting solutions that made our space look much larger."
                    </p>
                    <h3 class="testimonial-name">David Wilson</h3>
                    <div class="testimonial-project">Apartment in Downtown</div>
                </div>
            </div>
            
            <!-- Testimonial 5 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Client" class="testimonial-image">
                    <p class="testimonial-text">
                        "From design consultation to final installation, their gypsum ceiling service was flawless. The team cleaned up perfectly after completing the work."
                    </p>
                    <h3 class="testimonial-name">Noora Mohammed</h3>
                    <div class="testimonial-project">Penthouse in Palm Jumeirah</div>
                </div>
            </div>
        </div>
        
        <div class="slider-dots">
            <div class="dot active" data-index="0"></div>
            <div class="dot" data-index="1"></div>
            <div class="dot" data-index="2"></div>
            <div class="dot" data-index="3"></div>
            <div class="dot" data-index="4"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelector('.testimonial-container');
        const cards = document.querySelectorAll('.testimonial-card');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        
        let currentIndex = 0;
        const cardCount = cards.length;
        
        // For desktop, show 3 cards
        let cardsToShow = window.innerWidth > 768 ? 3 : 1;
        
        function updateSlider() {
            cardsToShow = window.innerWidth > 768 ? 3 : 1;
            const translateX = -currentIndex * (100 / cardsToShow);
            container.style.transform = `translateX(${translateX}%)`;
            
            // Update dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }
        
        // Navigation buttons
        nextBtn.addEventListener('click', () => {
            if (currentIndex < cardCount - cardsToShow) {
                currentIndex++;
                updateSlider();
            }
        });
        
        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });
        
        // Dot navigation
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                currentIndex = parseInt(dot.getAttribute('data-index'));
                updateSlider();
            });
        });
        
        // Handle window resize
        window.addEventListener('resize', () => {
            cardsToShow = window.innerWidth > 768 ? 3 : 1;
            // Reset to first card on mobile if needed
            if (cardsToShow === 1 && currentIndex > cardCount - 1) {
                currentIndex = 0;
            }
            updateSlider();
        });
        
        // Initialize slider
        updateSlider();
    });
</script>