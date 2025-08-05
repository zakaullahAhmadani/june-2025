 <style>
        :root {
            --primary: #1A3E72;
            --secondary: #2D2D2D;
            --accent: #FF7D33;
            --light-bg: #F5F5F5;
            --white: #FFFFFF;
        }
        
        .services-hero {
            position: relative;
            padding: 100px 0;
            background: linear-gradient(rgba(26, 62, 114, 0.85), rgba(26, 62, 114, 0.85)), 
                        url('images/2.webp') no-repeat center center;
            background-size: cover;
            background-position: center;
            color: var(--white);
            overflow: hidden;
        }
        
        .service-content {
            position: relative;
            z-index: 2;
        }
        
        .section-heading {
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--white);
            position: relative;
            display: inline-block;
        }
        
       
        
        .service-subheading {
            font-size: 1.5rem;
            margin-bottom: 30px;
            font-weight: 600;
        }
        
        .service-description {
            margin-bottom: 30px;
            line-height: 1.8;
            font-size: 1.05rem;
        }
        
        .service-image {
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            height: 100%;
            min-height: 300px;
            object-fit: cover;
        }
        
        .service-list {
            list-style: none;
            padding: 0;
            margin: 0 0 30px 0;
        }
        
        .service-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            font-size: 1.05rem;
        }
        
        .service-list li:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--accent);
        }
        
        .emergency-btn {
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
        
        .emergency-btn:hover {
            background-color: var(--white);
            color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 125, 51, 0.4);
        }
        
        .emergency-btn i {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        @media (max-width: 991.98px) {
            .services-hero {
                padding: 80px 0;
                text-align: center;
            }
            
            .section-heading:after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .service-image {
                margin-top: 40px;
                max-height: 350px;
                width: 100%;
            }
        }
        
        @media (max-width: 767.98px) {
            .services-hero {
                padding: 60px 0;
            }
            
            .service-subheading {
                font-size: 1.3rem;
            }
            
            .emergency-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <section class="services-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-content">
                        <h2 class="section-heading">Our Services</h2>
                        <h3 class="service-subheading">24/7 Mobile Tyre Repair Services </h3>
                        <p class="service-description">
                           Looking for tire repair near me or a quick flat tyre repair near me? We specialize in fast and reliable car tyre puncture repair and tyre replacement near me services across Dubai and surrounding areas. 
                        </p>
                        
                        <ul class="service-list">
                            <li>Tyre Change Services</li>
                            <li>Tyre Change Services</li>
                            <li>Mobile Tyre Puncture Repair</li>
                            <li>Tyre Puncture Repair</li>
                            <li>24 Hour Tyre Repair</li>
                            <li>Flat Tyre Repair</li>
                        </ul>
                        
                        <button class="emergency-btn"> <a href="https://wa.me/+971556790901" target="_blank" style="color: inherit; text-decoration: none;">
                           <i class="fab fa-whatsapp"></i>
 Call Now: 055 679 0901 
                            </a>
                        </button>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <img src="images/1.webp" alt="Mobile Tyre Service in Dubai" class="img-fluid service-image">
                </div>
            </div>
        </div>
    </section>