 <style>
        :root {
            --primary: #1A3E72;      /* Deep Blue (Main Brand) */
            --secondary: #2D2D2D;    /* Dark Gray */
            --accent: #FF7D33;       /* Orange (CTAs) */
            --light-bg: #F5F5F5;     /* Light Gray (Backgrounds) */
            --white: #FFFFFF;        /* White (Text, Sections) */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: var(--light-bg);
            padding: 40px 0;
        }

        .testimonial-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: var(--primary);
            font-size: 2.5rem;
            text-align: center;
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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .testimonial-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--accent);
            margin-bottom: 20px;
        }

        .testimonial-text {
            color: var(--secondary);
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .testimonial-name {
            color: var(--primary);
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: auto;
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
            background-color: var(--accent);
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
            background-color: var(--accent);
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
            background-color: var(--primary);
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
</head>
<body>
    <div><h2 class="section-title" >What Our Clients Say</h2>
</div>
    <section class="testimonial-section">
        
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
                            "The service was exceptional! The team went above and beyond to meet our needs. 
                            I would highly recommend them to anyone looking for quality work."
                        </p>
                        <h3 class="testimonial-name">Sarah Johnson</h3>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="testimonial-image">
                        <p class="testimonial-text">
                            "Professional, efficient, and delivered outstanding results. 
                            Their attention to detail is remarkable. Will definitely work with them again."
                        </p>
                        <h3 class="testimonial-name">Michael Chen</h3>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Client" class="testimonial-image">
                        <p class="testimonial-text">
                            "Transformed our business with their innovative solutions. 
                            The team was responsive and understood our vision perfectly."
                        </p>
                        <h3 class="testimonial-name">Emily Rodriguez</h3>
                    </div>
                </div>
                
                <!-- Testimonial 4 -->
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client" class="testimonial-image">
                        <p class="testimonial-text">
                            "Exceeded all expectations! The quality of work was top-notch and 
                            delivered ahead of schedule. A pleasure to work with."
                        </p>
                        <h3 class="testimonial-name">David Wilson</h3>
                    </div>
                </div>
                
                <!-- Testimonial 5 -->
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Client" class="testimonial-image">
                        <p class="testimonial-text">
                            "Outstanding customer service and technical expertise. 
                            They solved complex problems with elegant solutions. Highly recommended!"
                        </p>
                        <h3 class="testimonial-name">Jessica Kim</h3>
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