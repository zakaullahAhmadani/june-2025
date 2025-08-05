<style>
    :root {
        --primary-color: #0077b6;       /* Cool Blue - Air Conditioner */
        --accent-color: #00b4d8;        /* Aqua Blue - Washing freshness */
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

    .steps-section {
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
        left: 50%;
        transform: translateX(-50%);
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

    .steps-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 30px;
        position: relative;
    }

    .step-card {
        flex: 1;
        min-width: 250px;
        background: var(--text-white);
        border-radius: 10px;
        padding: 30px;
        box-shadow: var(--card-shadow);
        text-align: center;
        position: relative;
        z-index: 2;
        transition: all 0.3s ease;
        border: 1px solid var(--border-color);
    }

    .step-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 180, 216, 0.2);
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: var(--primary-color);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: bold;
        margin: 0 auto 20px;
        position: relative;
        transition: all 0.3s ease;
    }

    .step-card:hover .step-number {
        background: var(--accent-color);
        transform: scale(1.1);
    }

    .step-title {
        color: var(--primary-color);
        font-size: 1.3rem;
        margin-bottom: 15px;
        transition: color 0.3s ease;
    }

    .step-card:hover .step-title {
        color: var(--accent-color);
    }

    .step-description {
        color: var(--text-color);
        line-height: 1.8;
        font-size: 1rem;
    }

    @media (max-width: 768px) {
        .steps-container {
            flex-direction: column;
        }
        
        .step-card {
            min-width: 100%;
        }
    }
</style>

<section class="steps-section" dir="rtl">
    <div class="section-header">
        <h2>خطوات عملنا في صيانة الأجهزة</h2>
        <p>كيف نقدم خدمات صيانة المكيفات والثلاجات والغسالات باحترافية في الرياض</p>
    </div>
    
    <div class="steps-container">
        <!-- Step 1 -->
        <div class="step-card">
            <div class="step-number">1</div>
            <h3 class="step-title">الاتصال بنا</h3>
            <p class="step-description">
                تواصل معنا على <a href="tel:0501676359">0501676359</a> أو عبر الواتساب لوصف المشكلة وتحديد الخدمة المطلوبة
            </p>
        </div>
        
        <!-- Step 2 -->
        <div class="step-card">
            <div class="step-number">2</div>
            <h3 class="step-title">حجز الموعد</h3>
            <p class="step-description">
                نحدد معك موعدًا مناسبًا خلال 24 ساعة مع إمكانية الحضور فوريًا لحالات الطوارئ
            </p>
        </div>
        
        <!-- Step 3 -->
        <div class="step-card">
            <div class="step-number">3</div>
            <h3 class="step-title">تشخيص المشكلة</h3>
            <p class="step-description">
                فحص دقيق بواسطة فني متخصص لتحديد العطل في المكيف، الثلاجة أو الغسالة
            </p>
        </div>
        
        <!-- Step 4 -->
        <div class="step-card">
            <div class="step-number">4</div>
            <h3 class="step-title">الإصلاح والضمان</h3>
            <p class="step-description">
                إصلاح فوري بقطع غيار أصلية مع ضمان مكتوب على الخدمة المقدمة
            </p>
        </div>
    </div>
</section>