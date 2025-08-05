<style>
    :root {
        --primary-color: #0077b6;       /* Cool Blue - Air Conditioner */
        --secondary-color: #d9d9d9;     /* Light Gray - Appliance neutral */
        --accent-color: #00b4d8;        /* Aqua Blue - Washing freshness */
        --cta-color: #0077b6;           /* Primary blue for CTAs */
        --text-color: #2c2c2c;          /* Professional dark text */
        --text-white: #ffffff;
        --card-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        --font-arabic: 'Tajawal', sans-serif;
        --bg-color: #f8f9fa;
        --border-color: #e0e0e0;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: var(--font-arabic);
    }

    body {
        direction: ltr;
        background-color: var(--bg-color);
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
        border: 1px solid var(--border-color);
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 180, 216, 0.2);
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
        background: var(--accent-color);
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
<section class="services-section" dir="rtl">
    <div class="section-header">
        <h2>خدمات  المتكاملة بالرياض</h2>
        <p>حلول صيانة وإصلاح متكاملة للمكيفات والثلاجات والغسالات بمواصفات عالمية وضمان على جميع الأعمال</p>
    </div>
    
    <div class="services-grid">
        <!-- Service 1 - AC Maintenance -->
        <div class="service-card">
            <div class="card-image" style="background-image: url('images/city-riyaz-ac-service.webp')"></div>
            <div class="card-content">
                <h3>صيانة المكيفات</h3>
                <p>نقدم خدمات صيانة شاملة لجميع أنواع المكيفات (سبليت، شباك، مركزي) تشمل: فحص كهربائي كامل، تنظيف الوحدات الداخلية والخارجية، إصلاح أعطال التبريد، تعبئة غاز الفريون، صيانة الكمبروسور، إصلاح لوحات التحكم الإلكترونية، مع ضمان 90 يوم على جميع أعمال الصيانة. فريقنا المدرب يمتلك خبرة واسعة في التعامل مع جميع الماركات العالمية.</p>
                <a href="tel:+966501676359" class="call-btn">
                    اتصل الآن 0501676359 <i class="fas fa-phone"></i>
                </a>
            </div>
        </div>
        
        <!-- Service 2 - Washing Machine Repair -->
        <div class="service-card">
            <div class="card-image" style="background-image: url('images/city-riyaz-washing-machine.webp')"></div>
            <div class="card-content">
                <h3>إصلاح الغسالات</h3>
                <p>خدمات إصلاح متكاملة للغسالات الأتوماتيكية تشمل: إصلاح مشاكل العصر، تسريب المياه، أعطال التايمر، صيانة الموتور، تغيير البكرات، إصلاح لوحات التحكم الإلكترونية، تنظيف الفلاتر، معالجة مشاكل عدم التصريف، صيانة السخان، إصلاح الباب، تغيير مانع التسريب. نستخدم قطع غيار أصلية من الشركات المصنعة مع ضمان 60 يوم على الإصلاحات.</p>
                <a href="tel:+966501676359" class="call-btn">
                    اتصل الآن 0501676359 <i class="fas fa-phone"></i>
                </a>
            </div>
        </div>
        
        <!-- Service 3 - Refrigerator Maintenance -->
        <div class="service-card">
            <div class="card-image" style="background-image: url('images/city-riyaz-fridge-repair.webp')"></div>
            <div class="card-content">
                <h3>صيانة الثلاجات</h3>
                <p>حلول متكاملة لأعطال الثلاجات تشمل: إصلاح مشاكل التبريد، صيانة الكمبروسور، تغيير الثرموستات، إصلاح التسريبات، معالجة الضوضاء، صيانة المروحة، إصلاح نظام التبريد، تغيير المفصلات، معالجة مشاكل التكثيف، صيانة الثلاجات الذكية، إصلاح الشاشات الرقمية. نقدم ضمان 90 يوم على قطع الغيار الأصلية المستخدمة في الصيانة.</p>
                <a href="tel:+966501676359" class="call-btn">
                    اتصل الآن 0501676359 <i class="fas fa-phone"></i>
                </a>
            </div>
        </div>
        
        <!-- Service 4 - AC Installation -->
        <div class="service-card">
            <div class="card-image" style="background-image: url('images/city-riyaz-ac-installation.webp')"></div>
            <div class="card-content">
                <h3>تركيب المكيفات</h3>
                <p>خدمات تركيب احترافية تشمل: تركيب مكيفات سبليت جديدة، تمديد أنابيب التبريد، تركيب الوحدة الخارجية، توصيل الكهرباء، اختبار الضغط، تفريغ النظام من الهواء، تعبئة غاز الفريون، ضبط إعدادات التحكم، تركيب أنابيب الصرف، تركيب حوامل الوحدة الخارجية، مع ضمان سنة كاملة على أعمال التركيب. نضمن التبريد الأمثل وتوفير الطاقة بنسبة تصل إلى 30%.</p>
                <a href="tel:+966501676359" class="call-btn">
                    اتصل الآن 0501676359 <i class="fas fa-phone"></i>
                </a>
            </div>
        </div>
        
        <!-- Service 5 - AC Cleaning -->
        <div class="service-card">
            <div class="card-image" style="background-image: url('images/city-riyaz-ac-cleaning.webp')"></div>
            <div class="card-content">
                <h3>تنظيف المكيفات</h3>
                <p>خدمات تنظيف وتعقيم متكاملة تشمل: تفكيك الوحدة الداخلية، تنظيف الفلتر بالكامل، غسيل المروحة، تنظيف المبادل الحراري، تعقيم الوحدة بمطهرات خاصة، تنظيف الوحدة الخارجية، فحص نظام الصرف، تنظيف أنابيب التبريد، تزييت الأجزاء المتحركة، فحص العزل الحراري، مع ضمان عدم وجود روائح بعد التنظيف. نستخدم مواد تنظيف آمنة وصديقة للبيئة.</p>
                <a href="tel:+966501676359" class="call-btn">
                    اتصل الآن 0501676359 <i class="fas fa-phone"></i>
                </a>
            </div>
        </div>
        
        <!-- Service 6 - Emergency Service -->
        <div class="service-card">
            <div class="card-image" style="background-image: url('images/city-riyaz-24-7-service.webp')"></div>
            <div class="card-content">
                <h3>خدمة طوارئ 24/7</h3>
                <p>خدمة صيانة طارئة على مدار الساعة تشمل: استجابة سريعة خلال 90 دقيقة، إصلاح أعطال التبريد الطارئة، معالجة تسريبات المياه العاجلة، صيانة الأعطال الكهربائية الخطرة، حل مشاكل التجميد المفاجئ، إصلاح أعطال الضوضاء الصاخبة، معالجة انقطاع التبريد المفاجئ، صيانة أعطال التشغيل العاجلة. فريقنا متاح 24 ساعة طوال أيام الأسبوع بما في ذلك العطل الرسمية.</p>
                <a href="tel:+966501676359" class="call-btn emergency-btn">
                    طوارئ الآن 0501676359 <i class="fas fa-phone"></i>
                </a>
            </div>
        </div>
    </div>
</section>