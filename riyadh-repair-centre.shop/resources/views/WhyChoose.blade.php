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
            <h2>لماذا تختار مركز صيانة الرياض؟</h2>
            <p>نتميز بتقديم حلول صيانة متكاملة للمكيفات، الغسالات الأتوماتيكية والثلاجات بأعلى معايير الجودة والاحترافية</p>
        </div>
        
        <div class="features-grid">
            <!-- Feature 1 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3>خبرة واسعة</h3>
                <p>أكثر من 10 سنوات خبرة في صيانة وإصلاح جميع أنواع الأجهزة المنزلية بالرياض</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3>قطع غيار أصلية</h3>
                <p>نستخدم قطع غيار معتمدة لضمان أداء مثالي وعمر أطول لأجهزتكم</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>خدمة سريعة</h3>
                <p>وصول خلال 24 ساعة لجميع مناطق الرياض مع إصلاح فوري للأعطال</p>
            </div>
            
            <!-- Feature 4 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>ضمان على الصيانة</h3>
                <p>نقدم ضمانًا ممتدًا على جميع خدماتنا لضمان رضاكم التام</p>
            </div>
            
            <!-- Feature 5 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>فنيون معتمدون</h3>
                <p>فريق فني مؤهل ومدرب على أحدث التقنيات في مجال الصيانة</p>
            </div>
            
            <!-- Feature 6 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3>أسعار تنافسية</h3>
                <p>خدمات عالية الجودة بأسعار مناسبة مع خصومات للعملاء الدائمين</p>
            </div>
        </div>
    </div>
</section>