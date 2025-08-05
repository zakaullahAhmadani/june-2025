 <style>
        :root {
            --primary-color: #005EB8;       /* Royal Blue */
            --secondary-color: #F4F4F4;     /* Light Gray */
            --accent-color: #FCBF1E;        /* Yellow-Gold */
            --cta-color: #28A745;           /* Emerald Green */
            --text-color: #333333;
            --text-white: #ffffff;
            --image-overlay: rgba(0, 0, 0, 0.4);
            --font-arabic: 'Tajawal', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-arabic);
        }

        body {
            direction: ltr; /* Left to Right */
        }

        .ac-section {
            position: relative;
            min-height: 600px;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(0, 94, 184, 0.8), rgba(0, 94, 184, 0.8)), 
                        url('images/ac3.webp') center/cover;
            padding: 80px 0;
            color: var(--text-white);
        }

        .ac-container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            padding: 0 20px;
            align-items: center;
            gap: 50px;
        }

        .ac-content {
            flex: 1;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            color: var(--text-color);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .ac-image {
            flex: 1;
            min-height: 400px;
            background: url('images/ac1.webp') center/cover;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        .ac-content h2 {
            color: var(--primary-color);
            font-size: 2.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 15px;
        }

        .ac-content h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 80px;
            height: 3px;
            background: var(--accent-color);
        }

        .ac-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .service-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 30px;
        }

        .service-tag {
            background-color: var(--primary-color);
            color: var(--text-white);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .call-now-btn {
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
        }

        .call-now-btn:hover {
            background: #218838;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .call-now-btn i {
            margin-left: 10px;
            font-size: 1.2rem;
        }

        @media (max-width: 992px) {
            .ac-container {
                flex-direction: column-reverse;
            }
            
            .ac-content, .ac-image {
                width: 100%;
            }
            
            .ac-image {
                min-height: 300px;
            }
        }

        @media (max-width: 768px) {
            .ac-section {
                padding: 60px 0;
            }
            
            .ac-content {
                padding: 30px 20px;
            }
            
            .ac-content h2 {
                font-size: 1.8rem;
            }
            
            .call-now-btn {
                padding: 10px 25px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <section class="ac-section">
        <div class="ac-container">
            <div class="ac-image" dr="rtl"></div>
            <div class="ac-content">
                <h2>خدمات صيانة وتنظيف المكيفات</h2>
                <p>نقدم خدمات متكاملة لصيانة وتنظيف جميع أنواع المكيفات في الرياض. فريقنا من الفنيين المتخصصين يضمن لكم أعلى معايير الجودة في صيانة المكيفات السبليت والمركزية.</p>
                <p>مع أكثر من 10 سنوات خبرة في مجال تكييف الهواء، نقدم حلولاً شاملة تبدأ من التنظيف الدوري وحتى الإصلاحات المعقدة لجميع الماركات العالمية.</p>
                
                <div class="service-tags">
                    <span class="service-tag">صيانه المكيف</span>
                    <span class="service-tag">تنظيف مكيفات</span>
                    <span class="service-tag">شركة تنظيف مكيفات بالرياض</span>
                    <span class="service-tag">تصليح مكيفات</span>
                    <span class="service-tag">تنظيف مكيفات بالرياض</span>
                    <span class="service-tag">تركيب مكيفات</span>
                    <span class="service-tag">تنظيف مكيفات سبليت</span>
                    <span class="service-tag">تركيب مكيفات جنرال</span>
                    <span class="service-tag">تصليح مكيف هام</span>
                    <span class="service-tag">غسيل مكيفات سبليت</span>
                    <span class="service-tag">فني مكيفات</span>
                    <span class="service-tag">صيانة تكييف</span>
                </div>
                
                <a href="tel:+966531482186" class="call-now-btn">
                    اتصل الآن
                    <i class="fas fa-phone"></i>
                </a>
            </div>
        </div>
    </section>