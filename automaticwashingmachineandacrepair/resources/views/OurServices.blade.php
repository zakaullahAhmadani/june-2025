 <style>
        :root {
            --primary-color: #005EB8;
            --secondary-color: #F4F4F4;
            --accent-color: #FCBF1E;
            --cta-color: #28A745;
            --text-color: #333333;
            --text-white: #ffffff;
            --card-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --font-arabic: 'Tajawal', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-arabic);
        }

        body {
            direction: ltr;
            background-color: var(--secondary-color);
        }

        .services-section {
            padding: 80px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header h2 {
            color: var(--primary-color);
            font-size: 2.2rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 50%;
            transform: translateX(50%);
            width: 80px;
            height: 3px;
            background: var(--accent-color);
        }

        .section-header p {
            color: var(--text-color);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .service-card {
            background: var(--text-white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .card-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .card-content {
            padding: 25px;
        }

        .card-content h3 {
            color: var(--primary-color);
            font-size: 1.4rem;
            margin-bottom: 15px;
        }

        .card-content p {
            color: var(--text-color);
            line-height: 1.7;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .call-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--cta-color);
            color: var(--text-white);
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
            text-align: center;
        }

        .call-btn:hover {
            background: #218838;
        }

        .call-btn i {
            margin-left: 8px;
        }

        @media (max-width: 992px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .section-header h2 {
                font-size: 1.8rem;
            }
            
            .section-header p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <section class="services-section" dir="rtl">
        <div class="section-header">
            <h2>خدماتنا المتكاملة</h2>
            <p>نقدم حلولاً شاملة لصيانة وإصلاح جميع أنواع المكيفات والغسالات الأتوماتيكية بمعايير الجودة العالمية</p>
        </div>
        
        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="card-image" style="background-image: url('images/Our integrated services.webp')"></div>
                <div class="card-content">
                    <h3>صيانة المكيفات</h3>
                    <p>خدمات صيانة شاملة لجميع أنواع المكيفات السبليت والمركزية مع ضمان على قطع الغيار الأصلية. فريق فني متخصص في تصليح أعطال المكيفات باحترافية.</p>
                    <a href="tel:+966531482186" class="call-btn">
                        اتصل الآن <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card">
                <div class="card-image" style="background-image: url('images/Air conditioner cleaning.webp')"></div>
                <div class="card-content">
                    <h3>تنظيف المكيفات</h3>
                    <p>خدمات تنظيف وتعقيم المكيفات باستخدام أحدث التقنيات لضمان هواء نقي وصحي. نقدم خدمة تنظيف المكيفات المنزلية والتجارية بالرياض.</p>
                    <a href="tel:+966531482186" class="call-btn">
                        اتصل الآن <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="service-card">
                <div class="card-image" style="background-image: url('images/Air conditioner installation.webp')"></div>
                <div class="card-content">
                    <h3>تركيب المكيفات</h3>
                    <p>خدمات تركيب المكيفات الجديدة باحترافية عالية مع ضمان التركيب. نعمل مع جميع الماركات العالمية مثل جنرال، إل جي، سامسونج وغيرها.</p>
                    <a href="tel:+966531482186" class="call-btn">
                        اتصل الآن <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="service-card">
                <div class="card-image" style="background-image: url('images/Washing machine maintenance.webp')"></div>
                <div class="card-content">
                    <h3>صيانة الغسالات</h3>
                    <p>إصلاح جميع أعطال الغسالات الأتوماتيكية باحترافية. فريقنا متخصص في صيانة غسالات سامسونج، إل جي، دايو وجميع الماركات العالمية.</p>
                    <a href="tel:+966531482186" class="call-btn">
                        اتصل الآن <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
            
            <!-- Service 5 -->
            <div class="service-card">
                <div class="card-image" style="background-image: url('images/Washing machine repair.webp')"></div>
                <div class="card-content">
                    <h3>تصليح الغسالات</h3>
                    <p>خدمات إصلاح شاملة للغسالات الأتوماتيكية مع استخدام قطع غيار أصلية. نصلح أعطال المحرك، التسريب، عدم العصر وغيرها من المشاكل.</p>
                    <a href="tel:+966531482186" class="call-btn">
                        اتصل الآن <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
            
            <!-- Service 6 -->
            <div class="service-card">
                <div class="card-image" style="background-image: url('images/Specialized technician.webp')"></div>
                <div class="card-content">
                    <h3>فني متخصص</h3>
                    <p>فريق فني محترف معتمد لصيانة المكيفات والغسالات الأتوماتيكية. نقدم خدمة منزلية في جميع أنحاء الرياض مع ضمان على الخدمة.</p>
                    <a href="tel:+966531482186" class="call-btn">
                        اتصل الآن <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>