<style>
:root {
  --primary-color: #002B5B;
  --secondary-color: #FFD700;
  --accent-color: #FF5E00;
  --bg-color: #F7F7F7;
  --text-color: #1A1A1A;
  --text-secondary: #555555;
  --white: #ffffff;
}



.testimonial-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    text-align: center;
}

.section-title {
    text-align: center;
    margin:15px 5px;
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
    padding: 2 15px;
    transition: all 0.3s ease;
}

.testimonial-content {
    background-color: var(--white);
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 1px solid rgba(0, 43, 91, 0.1);
}

.testimonial-image {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--accent-color);
    margin-bottom: 20px;
}

.testimonial-text {
    color: var(--text-secondary);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 20px;
    text-align: center;
    flex-grow: 1;
}

.testimonial-name {
    color: var(--primary-color);
    font-weight: bold;
    font-size: 1.2rem;
    margin-top: auto;
}

.testimonial-service {
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
    background-color: #ccc;
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
    <div><h2 class="section-title"> Our Customers Say </h2></div>

    <div class="testimonial-slider">
        <div class="slider-nav">
            <button class="slider-btn prev-btn">&lt;</button>
            <button class="slider-btn next-btn">&gt;</button>
        </div>
        
        <div class="testimonial-container">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Client" class="testimonial-image">
                    <p class="testimonial-text">
                        "The team arrived right on time and handled my antique furniture with such care. They wrapped everything securely and delivered without a single scratch. Highly recommended!"
                    </p>
                    <h3 class="testimonial-name">Sarah Johnson</h3>
                    <div class="testimonial-service">Sofa & Dining Set Delivery</div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="testimonial-image">
                    <p class="testimonial-text">
                        "I needed same-day delivery for my new refrigerator and they came through! Professional, efficient, and installed it perfectly. Will definitely use them again for appliance moves."
                    </p>
                    <h3 class="testimonial-name">Michael Chen</h3>
                    <div class="testimonial-service">Refrigerator Transport</div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Client" class="testimonial-image">
                    <p class="testimonial-text">
                        "Moved my entire apartment furniture in just 3 hours! The crew was fast yet careful with all my belongings. Best moving service I've used in Dubai."
                    </p>
                    <h3 class="testimonial-name">Emily Rodriguez</h3>
                    <div class="testimonial-service">Full Apartment Move</div>
                </div>
            </div>
            
            <!-- Testimonial 4 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client" class="testimonial-image">
                    <p class="testimonial-text">
                        "They delivered and assembled my office furniture over the weekend when we relocated our business. Minimal downtime and everything was set up perfectly by Monday."
                    </p>
                    <h3 class="testimonial-name">David Wilson</h3>
                    <div class="testimonial-service">Office Relocation</div>
                </div>
            </div>
            
            <!-- Testimonial 5 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Client" class="testimonial-image">
                    <p class="testimonial-text">
                        "Impressed with how they handled my expensive washing machine - special padding and secure straps. Delivery was faster than promised and the price was fair."
                    </p>
                    <h3 class="testimonial-name">Jessica Kim</h3>
                    <div class="testimonial-service">Washing Machine Delivery</div>
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