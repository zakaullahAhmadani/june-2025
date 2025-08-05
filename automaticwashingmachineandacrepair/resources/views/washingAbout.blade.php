<style>
        :root {
            --primary-color: #005EB8;
            --secondary-color: #F4F4F4;
            --accent-color: #FCBF1E;
            --cta-color: #28A745;
            --text-color: #333333;
            --text-white: #ffffff;
            --image-overlay: rgba(0, 0, 0, 0.4);
            --font-arabic: 'Tajawal', 'Cairo', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-arabic);
        }

        body {
            direction: ltr;
        }

        .about-section {
            display: flex;
            min-height: 600px;
            background: var(--secondary-color);
            position: relative;
            overflow: hidden;
        }

        .about-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url('images/ac2.webp');
            background-size: cover;
            background-position: center;
            opacity: 0.1;
            z-index: 0;
        }

        .about-content {
            display: flex;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
            position: relative;
            z-index: 1;
        }

        .about-text {
            flex: 1;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .about-image {
            flex: 1;
            background-image: url('images/wm1.webp');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            margin-left: 30px;
            min-height: 400px;
        }

        .about-text h2 {
            color: var(--primary-color);
            font-size: 2.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 15px;
        }

        
        .about-text p {
            color: var(--text-color);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .service-highlights {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
        }

        .service-tag {
            background-color: var(--primary-color);
            color: var(--text-white);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .whatsapp-btn {
            display: inline-flex;
            align-items: center;
            background: var(--cta-color);
            color: var(--text-white);
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .whatsapp-btn:hover {
            background: #218838;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .whatsapp-btn i {
            margin-left: 10px;
            font-size: 1.3rem;
        }

       

        @media (max-width: 992px) {
            .about-content {
                flex-direction: column;
            }

            .about-image {
                margin-left: 0;
                margin-bottom: 30px;
                min-height: 300px;
            }
        }

        @media (max-width: 768px) {
            .about-text {
                padding: 30px 20px;
            }

            .about-text h2 {
                font-size: 1.8rem;
            }

            .about-text p {
                font-size: 1rem;
            }

            .whatsapp-btn {
                padding: 10px 25px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <section class="about-section">
        <div class="about-bg"></div>
        <div class="about-content">
            <div class="about-image"></div>
            <div class="about-text">
                <h2>من نحن</h2>
                <p>نحن شركة متخصصة في صيانة وإصلاح جميع أنواع الغسالات الأتوماتيكية في الرياض. مع سنوات من الخبرة، نقدم خدمات عالية الجودة بأسعار تنافسية.</p>
                <p>فريقنا من الفنيين المؤهلين قادر على التعامل مع جميع الماركات العالمية مثل سامسونج، إل جي، دايو وغيرها. نضمن لكم خدمة سريعة وكفاءة عالية في كل تدخل.</p>
                
                <div class="service-highlights">
                    <span class="service-tag">صيانة الغسالات الاتوماتيك</span>
                    <span class="service-tag">تصليح غسالات</span>
                    <span class="service-tag">صيانة غسالات ال جي</span>
                    <span class="service-tag">صيانة غسالات سامسونج</span>
                    <span class="service-tag">تصليح غسالات اتوماتيك</span>
                    <span class="service-tag">اصلاح غسالات اتوماتيك</span>
                </div>

                <a href="https://wa.me/966531482186" class="whatsapp-btn">
                    اطلب الخدمة الآن
                    <i class="fab fa-whatsapp"></i>
                </a>

               
            </div>
        </div>
    </section>