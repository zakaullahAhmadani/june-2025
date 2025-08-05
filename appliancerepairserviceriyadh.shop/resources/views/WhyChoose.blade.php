<style>
    :root {
        --primary-color: #0077b6;       /* Cool Blue - Air Conditioner */
        --secondary-color: #d9d9d9;     /* Light Gray - Appliance neutral */
        --accent-color: #00b4d8;        /* Aqua Blue - Washing freshness */
        --cta-color: #0077b6;           /* Primary blue for CTAs */
        --text-color: #2c2c2c;          /* Professional dark text */
        --text-white: #ffffff;
        --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        --font-arabic: 'Tajawal', sans-serif;
        --bg-color: #f8f9fa;
        --border-color: #e0e0e0;
        --highlight-color: #90e0ef;
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

    .why-choose-us {
        padding: 100px 20px;
        position: relative;
        overflow: hidden;
        background-color: var(--bg-color);
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
        border: 1px solid var(--border-color);
    }

   

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 180, 216, 0.15);
    }

    .feature-icon {
        width: 70px;
        height: 70px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        color: var(--text-white);
        font-size: 1.8rem;
        box-shadow: 0 5px 15px rgba(0, 119, 182, 0.3);
        transition: all 0.3s;
    }

    .feature-card:hover .feature-icon {
        background: var(--accent-color);
        transform: rotate(10deg) scale(1.1);
    }

    .feature-card h3 {
        color: var(--primary-color);
        font-size: 1.5rem;
        margin-bottom: 15px;
        transition: color 0.3s;
    }

    .feature-card:hover h3 {
        color: var(--accent-color);
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

<section class="why-choose-us" dir="rtl">
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </div>
    
    <div class="section-container">
        <div class="section-header">
            <h2>لماذا تختارنا لصيانة أجهزتك؟</h2>
            <p>نقدم خدمات صيانة متخصصة للمكيفات، الثلاجات والغسالات باحترافية عالية في مدينة الرياض</p>
        </div>
        
        <div class="features-grid">
            <!-- Feature 1 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3>خدمات متكاملة</h3>
                <p>نعمل على صيانة وإصلاح جميع أنواع المكيفات، الثلاجات والغسالات بكفاءة عالية</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>اتصل بنا</h3>
                <p>تواصل معنا على الرقم: 0501676359 للاستفسار أو طلب الخدمة</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>موقعنا</h3>
                <p>نقدم خدماتنا في جميع أنحاء مدينة الرياض بسرعة واحترافية</p>
            </div>
            
            <!-- Feature 4 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>إصلاح شامل</h3>
                <p>نقوم بإصلاح جميع الأعطال الفنية للأجهزة المنزلية بضمان على العمل</p>
            </div>
            
            <!-- Feature 5 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>خدمة سريعة</h3>
                <p>وصول سريع لموقعك في الرياض مع حلول فورية لمشاكل أجهزتك</p>
            </div>
            
            <!-- Feature 6 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-store"></i>
                </div>
                <h3>متجرنا</h3>
                <p>زوروا متجرنا .shop للحصول على أفضل خدمات الصيانة والأجهزة</p>
            </div>
        </div>
    </div>
</section>