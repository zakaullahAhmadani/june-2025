<style>
        :root {
            --primary: #1A3E72;
            --secondary: #2D2D2D;
            --accent: #FF7D33;
            --light-bg: #F5F5F5;
            --white: #FFFFFF;
        }
        
        .tyre-fitting-section {
            position: relative;
            padding: 100px 0;
            background: linear-gradient(rgba(26, 62, 114, 0.85), rgba(26, 62, 114, 0.85)), 
                        url('images/3.webp') no-repeat center center;
            background-size: cover;
            background-position: center;
            color: var(--white);
            text-align: center;
            overflow: hidden;
        }
        
        .fitting-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .fitting-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.3;
        }
        
        .fitting-subtitle {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 25px;
            color: var(--accent);
        }
        
        .fitting-description {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 35px;
        }
        
        .whatsapp-btn {
            background-color: var( --accent);
            color: var(--white);
            border: none;
            padding: 15px 35px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
        }
        
        .whatsapp-btn:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.4);
            /* color: var(--primary); */
        }
        
        .whatsapp-btn i {
            margin-right: 10px;
            font-size: 1.3rem;
        }
        
        .brand-logos {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 50px;
        }
        
        .brand-logo {
            height: 40px;
            opacity: 0.9;
            transition: all 0.3s;
        }
        
        .brand-logo:hover {
            opacity: 1;
            transform: scale(1.05);
        }
        
        @media (max-width: 767.98px) {
            .tyre-fitting-section {
                padding: 70px 0;
            }
            
            .fitting-title {
                font-size: 2rem;
            }
            
            .fitting-subtitle {
                font-size: 1.3rem;
            }
            
            .fitting-description {
                font-size: 1rem;
            }
            
            .whatsapp-btn {
                padding: 12px 25px;
                font-size: 1rem;
                width: 100%;
                justify-content: center;
            }
            
            .brand-logos {
                gap: 15px;
                margin-top: 30px;
            }
            
            .brand-logo {
                height: 30px;
            }
        }
    </style>
</head>
<body>
    <section class="tyre-fitting-section">
        <div class="fitting-content">
            <h1 class="fitting-title">Mobile Tyre Fitting in Dubai</h1>
            <h2 class="fitting-subtitle">At Your Convenience</h2>
            <p class="fitting-description">
               We provide on-site and mobile tyre repair near me options to save you time and hassle. From car puncture repair near me to full tyre change service near me, we’ve got you covered. If you need a trusted solution for flat tire repair near me, puncture repair near me, or mobile puncture repair near me, contact us now for professional and affordable service. Let us help you fix car tyre puncture efficiently and get you back on the road safely.
            </p>
            
            <a href="https://wa.me/971 55 679 0901
" class="whatsapp-btn">
                <i class="fab fa-whatsapp"></i> WhatsApp Us
            </a>
            
            <div class="brand-logos">
                <img src="images/4.webp" alt="Michelin" class="brand-logo">
                <img src="images/5.webp" alt="Bridgestone" class="brand-logo">
                <img src="images/Goodyear.webp" alt="Goodyear" class="brand-logo">
                <img src="images/Pirelli.webp" alt="Pirelli" class="brand-logo">
            </div>
        </div>
    </section>