 <style>
        :root {
            --primary: #1A3E72;
            --secondary: #2D2D2D;
            --accent: #FF7D33;
            --light-bg: #F5F5F5;
            --white: #FFFFFF;
        }
        
        .why-choose-section {
            position: relative;
            padding: 100px 0;
            background: linear-gradient(rgba(26, 62, 114, 0.85), rgba(26, 62, 114, 0.85)), 
                        url('images/7.webp') no-repeat center center;
            background-size: cover;
            background-position: center;
            color: var(--white);
            overflow: hidden;
        }
        
        .why-choose-content {
            position: relative;
            z-index: 2;
        }
        
        .section-heading {
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--white);
        }
        
        .section-subheading {
            font-size: 1.5rem;
            margin-bottom: 30px;
            font-weight: 600;
            color: var(--accent);
        }
        
        .benefits-list {
            margin-bottom: 40px;
        }
        
        .benefit-item {
            position: relative;
            padding-left: 50px;
            margin-bottom: 25px;
        }
        
        .benefit-icon {
            position: absolute;
            left: 0;
            top: 0;
            width: 40px;
            height: 40px;
            background-color: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }
        
        .benefit-title {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 1.1rem;
        }
        
        .benefit-desc {
            opacity: 0.9;
            font-size: 0.95rem;
        }
        
        .feature-image {
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            height: 100%;
            min-height: 300px;
            object-fit: cover;
        }
        
        .contact-btn {
            background-color: var(--accent);
            color: var(--white);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
        }
        
        .contact-btn:hover {
             background-color: var(--accent);
            color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 125, 51, 0.4);
        }
        
        .contact-btn i {
            margin-right: 10px;
        }
        
        @media (max-width: 991.98px) {
            .why-choose-section {
                padding: 80px 0;
                text-align: center;
            }
            
            .benefit-item {
                padding-left: 0;
                padding-top: 50px;
                text-align: center;
            }
            
            .benefit-icon {
                left: 50%;
                transform: translateX(-50%);
                top: 0;
            }
            
            .feature-image {
                margin-top: 50px;
                max-height: 400px;
            }
        }
        
        @media (max-width: 767.98px) {
            .why-choose-section {
                padding: 60px 0;
            }
            
            .section-heading {
                font-size: 1.8rem;
            }
            
            .section-subheading {
                font-size: 1.2rem;
            }
            
            .contact-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <section class="why-choose-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-content">
                        <h2 class="section-heading">Why Choose Tyre Repair And  Change Services</h2>
                        <h3 class="section-subheading">Benefits of Our Tyre Repair Services</h3>
                        <p class="mb-4">
                           When you're searching for tyre repair near me, car tyre puncture repair, or a quick flat tire repair near me in City Dubai, we’re the name you can trust. Our expert technicians provide fast, reliable, and affordable services—whether it's a tyre puncture repair, mobile tyre repair , or an urgent emergency tyre repair. We’re available 24/7  help you with car tyre repair .
                        </p>
                        
                        <div class="benefits-list">
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <h4 class="benefit-title">Expertise and Skill</h4>
                                <p class="benefit-desc">Certified technicians with 15+ years experience in tyre services</p>
                            </div>
                            
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h4 class="benefit-title">Quality Parts and Equipment</h4>
                                <p class="benefit-desc">We use only premium quality tyres and repair materials</p>
                            </div>
                            
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h4 class="benefit-title">Safety and Reliability</h4>
                                <p class="benefit-desc">All repairs meet highest safety standards for your peace of mind</p>
                            </div>
                            
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fas fa-medal"></i>
                                </div>
                                <h4 class="benefit-title">Warranty and Guarantee</h4>
                                <p class="benefit-desc">12-month warranty on all our tyre repair services</p>
                            </div>
                            
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fas fa-tags"></i>
                                </div>
                                <h4 class="benefit-title">Value for Money</h4>
                                <p class="benefit-desc">Competitive pricing without compromising on quality</p>
                            </div>
                            
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <h4 class="benefit-title">Free Consultations</h4>
                                <p class="benefit-desc">Get expert advice on your tyre needs at no cost</p>
                            </div>
                        </div>
                        
                        <button class="contact-btn">
                            <i class="fas fa-phone-alt"></i> Call Now: +971 52 385 2428
                        </button>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <img src="images/7.webp" alt="Mobile Tyre Service in Dubai" class="img-fluid feature-image">
                </div>
            </div>
        </div>
    </section>