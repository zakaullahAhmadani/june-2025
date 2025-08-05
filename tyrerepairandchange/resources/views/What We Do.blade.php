 <style>
        :root {
            --primary: #1A3E72;
            --secondary: #2D2D2D;
            --accent: #FF7D33;
            --light-bg: #F5F5F5;
            --white: #FFFFFF;
        }
        
        .services-section {
            padding: 80px 0;
            background-color: var(--light-bg);
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        
        
        .section-subtitle {
            color: var(--secondary);
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .service-card {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid rgba(45, 45, 45, 0.1);
            margin-bottom: 30px;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .service-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .service-body {
            padding: 25px;
        }
        
        .service-name {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .service-desc {
            color: var(--secondary);
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .service-features {
            margin-bottom: 25px;
        }
        
        .feature-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 10px;
            color: var(--secondary);
        }
        
        .feature-item:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--accent);
        }
        
        .service-btn {
            background-color: var(--accent);
            color: var(--white);
            border: none;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
        
        .service-btn:hover {
            background-color: var(--primary);
            transform: translateY(-2px);
        }
        
        .service-btn i {
            margin-right: 8px;
        }
        
        @media (max-width: 767.98px) {
            .services-section {
                padding: 50px 0;
            }
            
            .section-header {
                margin-bottom: 40px;
            }
            
            .service-img {
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <section class="services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">
                Searching for a trusted solution to fix a flat tire or need fast tyre puncture repair in City Dubai? We provide expert services including car tyre repair, mobile puncture repair, emergency tyre repair, and full tyre replacement. Whether you're at home, at work, or stuck on the road, our team is just a call away at <strong>+971 55 679 0901</strong>.
            </p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/Tyre Puncture Repair.webp" alt="Tyre Puncture Repair" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Tyre Puncture Repair</h3>
                        <p class="service-desc">Looking for "tyre puncture repair near me" or need to fix a flat tire in City Dubai? Our trained specialists offer fast, affordable solutions to get you back on the road.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Fix Tyre Puncture</div>
                            <div class="feature-item">Car Tyre Repair Near Me</div>
                            <div class="feature-item">Flat Tyre Puncture Repair</div>
                            <div class="feature-item">Affordable Repair in City Dubai</div>
                        </div>

                        <a href="https://wa.me/971556790901" class="service-btn">
                            <i class="fab fa-whatsapp"></i> WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/Mobile Tyre Repair Dubai.webp" alt="Mobile Tyre Repair" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Mobile Tyre Repair Dubai</h3>
                        <p class="service-desc">Need "mobile tyre repair near me"? Our team comes directly to your location anywhere in City Dubai. Quick service for flat tires, punctures, and emergencies—available 24/7.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Mobile Tyre Puncture Repair</div>
                            <div class="feature-item">Fix Flat Tire Near Me</div>
                            <div class="feature-item">Mobile Puncture Repair Near Me</div>
                            <div class="feature-item">Emergency Tyre Repair</div>
                        </div>

                        <a href="https://wa.me/971556790901" class="service-btn">
                            <i class="fas fa-phone-alt"></i> Contact us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/Flat Tyre Repair.webp" alt="Flat Tyre Repair" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Flat Tyre Repair</h3>
                        <p class="service-desc">Dealing with a flat tire in City Dubai? Whether it's at home or on the road, our flat tyre repair experts are just one call away at <strong>+971 55 679 0901</strong>.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Flat Tyre Repair Near Me</div>
                            <div class="feature-item">Fix Car Tyre Puncture</div>
                            <div class="feature-item">Car Puncture Repair Near Me</div>
                            <div class="feature-item">Tire Repair Near Me</div>
                        </div>

                        <a href="https://wa.me/971556790901" class="service-btn">
                            <i class="fab fa-whatsapp"></i> WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/Tyre Alignment Services.webp" alt="Tyre Alignment" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Tyre Alignment Services</h3>
                        <p class="service-desc">Keep your vehicle running smoothly with our professional tyre alignment services in City Dubai. Improve driving comfort, tyre life, and fuel efficiency.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Tyre Alignment Near Me</div>
                            <div class="feature-item">Car Tyre Mechanic</div>
                            <div class="feature-item">Expert Tyre Services</div>
                            <div class="feature-item">Tire Alignment Service</div>
                        </div>

                        <a href="https://wa.me/971556790901" class="service-btn">
                            <i class="fab fa-whatsapp"></i> WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/Emergency Tyre Repair.webp" alt="Emergency Tyre Repair" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Emergency Tyre Repair</h3>
                        <p class="service-desc">Facing an urgent tyre issue? Our emergency tyre repair team is available 24/7 in City Dubai to assist with car tyre punctures, flat tires, or replacement on the spot.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Emergency Tyre Repair Near Me</div>
                            <div class="feature-item">Fix Tyre Near Me</div>
                            <div class="feature-item">Tire Puncture Repair Near Me</div>
                            <div class="feature-item">24/7 Tyre Services</div>
                        </div>

                        <a href="https://wa.me/971556790901" class="service-btn">
                            <i class="fab fa-whatsapp"></i> WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <img src="images/Tyre Replacement Services.webp" alt="Tyre Replacement" class="service-img">
                    <div class="service-body">
                        <h3 class="service-name">Tyre Replacement Services</h3>
                        <p class="service-desc">If your tyre can't be saved, our tyre replacement service in City Dubai offers quick and high-quality replacements to fit any vehicle.</p>
                        
                        <div class="service-features">
                            <div class="feature-item">Tyre Replacement Near Me</div>
                            <div class="feature-item">Tyre Change Service Near Me</div>
                            <div class="feature-item">24/7 Tyre Change</div>
                            <div class="feature-item">Tyre Change at Your Location</div>
                        </div>

                        <a href="https://wa.me/971556790901" class="service-btn">
                            <i class="fas fa-phone-alt"></i> Contact us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
