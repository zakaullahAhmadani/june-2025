<style>
        :root {
            --primary-color: #005EB8;
            --secondary-color: #F4F4F4;
            --accent-color: #FCBF1E;
            --cta-color: #28A745;
            --text-color: #333333;
            --text-white: #ffffff;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
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
            background-color: #f9f9f9;
        }

        .why-choose-us {
            padding: 100px 20px;
            position: relative;
            overflow: hidden;
        }

        .section-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
            text-align: center;

        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            right: 50%;
            transform: translateX(50%);
            width: 100px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 2px;
             text-align: center;

        }

        .section-header p {
            color: var(--text-color);
            font-size: 1.2rem;
            max-width: 700px;
            margin: 25px auto 0;
            line-height: 1.8;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .feature-card {
            background: var(--text-white);
            border-radius: 15px;
            padding: 40px 30px;
            box-shadow: var(--card-shadow);
            transition: transform 0.4s, box-shadow 0.4s;
            position: relative;
            overflow: hidden;
            z-index: 1;
            border-bottom: 3px solid var(--accent-color);
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 94, 184, 0.05) 0%, rgba(252, 191, 30, 0.05) 100%);
            z-index: -1;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

       .feature-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px; /* Changed to center the icon */
    color: var(--text-white);
    font-size: 1.8rem;
    box-shadow: 0 5px 15px rgba(0, 94, 184, 0.3);
}

        .feature-card h3 {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .feature-card p {
            color: var(--text-color);
            line-height: 1.8;
            font-size: 1.05rem;
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            opacity: 0.1;
            border-radius: 50%;
        }

        .shape-1 {
            width: 300px;
            height: 300px;
            background: var(--primary-color);
            top: -150px;
            right: -150px;
        }

        .shape-2 {
            width: 200px;
            height: 200px;
            background: var(--accent-color);
            bottom: -100px;
            left: -100px;
        }

        @media (max-width: 768px) {
            .why-choose-us {
                padding: 70px 20px;
            }
            
            .section-header h2 {
                font-size: 2rem;
                text-align: center;
            }
            
            .section-header p {
                font-size: 1rem;
            }
            
            .feature-card {
                padding: 30px 25px;
            }
            
            .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <section class="why-choose-us" dir="rtl">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        
        <div class="section-container">
            <div class="section-header">
                <h2 style="text-align: center;
">لماذا تختار خدماتنا؟</h2>
                <p>نتميز بتقديم حلول صيانة متكاملة تلبي أعلى معايير الجودة والاحترافية في مجال صيانة المكيفات والغسالات الأتوماتيكية</p>
            </div>
            
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>خبرة أكثر من 10 سنوات</h3>
                    <p>فريق عمل محترف يتمتع بخبرة طويلة في مجال صيانة وإصلاح جميع أنواع المكيفات والغسالات الأتوماتيكية</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>قطع غيار أصلية</h3>
                    <p>نستخدم فقط قطع الغيار الأصلية المعتمدة من الشركات المصنعة لضمان أداء مثالي وعمر أطول للأجهزة</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>خدمة سريعة</h3>
                    <p>وصول سريع خلال 24 ساعة فقط مع إصلاح فوري لأعطال المكيفات والغسالات في الرياض وجميع المناطق</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>ضمان على الخدمة</h3>
                    <p>نقدم ضمانًا ممتدًا على جميع خدمات الصيانة والإصلاح التي نقدمها لضمان رضاكم التام</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>فنيون معتمدون</h3>
                    <p>فريق فني مؤهل ومدرب على أحدث التقنيات مع شهادات معتمدة من كبرى الشركات العالمية</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>أسعار تنافسية</h3>
                    <p>نقدم خدمات عالية الجودة بأسعار مناسبة مع خصومات خاصة للعملاء الدائمين والخدمات المتكررة</p>
                </div>
            </div>
        </div>
    </section>