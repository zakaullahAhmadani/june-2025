  <style>
        :root {
            --primary: #1A3E72;
            --secondary: #2D2D2D;
            --accent: #FF7D33;
            --light-bg: #F5F5F5;
            --white: #FFFFFF;
        }
        
        .about-section {
            background-color: var(--white);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .section-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }
        
       
        
        .about-content {
            position: relative;
            z-index: 2;
        }
        
        .about-text {
            color: var(--secondary);
            margin-bottom: 30px;
            font-size: 1.05rem;
            line-height: 1.8;
        }
        
        .contact-box {
            background-color: var(--primary);
            color: var(--white);
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(26, 62, 114, 0.1);
        }
        
        .contact-title {
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        
        .contact-number {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 15px;
            display: block;
        }
        
        .experience-badge {
            background-color: var(--accent);
            color: var(--white);
            display: inline-block;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        
        .about-image {
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            height: 100%;
            min-height: 250px;
            object-fit: cover;
        }
        
        .about-image-left {
            margin-bottom: 30px;
        }
        
        @media (min-width: 768px) {
            .about-image-left {
                margin-bottom: 0;
            }
            
            .about-content {
                padding-right: 30px;
            }
        }
        
        @media (max-width: 767.98px) {
            .about-section {
                padding: 50px 0;
                text-align: center;
            }
            
            .section-title:after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .contact-box, .experience-badge {
                margin-left: auto;
                margin-right: auto;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="section-title">Tyre Repair And Change Services </h2>
                        <p class="about-text">
                            We offer expert tyre repair services throughout  Dubai, including puncture fixes, flat tyre repairs, and comprehensive car tyre solutions. Our experienced technicians use the latest tools and techniques to ensure your vehicle is safely back on the road with minimal downtime
                        </p>
                        
                        <div class="contact-box text-center">
                            <h3 class="contact-title">Customer Services</h3>
                            <button>
                             <a style="text-decoration:none;color:white" href="tel:+971 55 679 0901"
                                <i class="fas fa-phone-alt me-2"></i>   Call Now </a> 
                            </button>
                           
                                
                        </div>
                        
                       
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <img src="images/repair.webp" alt="Tyre Repair Service" class="img-fluid about-image about-image-left">
                        </div>
                        <div class="col-md-6">
                            <img src="images/change.webp" alt="Tyre Technician Working" class="img-fluid about-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>