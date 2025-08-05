<style>
    :root {
        --primary-color: #005EB8;
        --secondary-color: #F4F4F4;
        --accent-color: #FCBF1E;
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
        background-color: #f9f9f9;
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

    /* Progress line */
    

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
    }

    .step-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
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
    }

   

    .step-card:last-child .step-number::after {
        display: none;
    }

    .step-title {
        color: var(--primary-color);
        font-size: 1.3rem;
        margin-bottom: 15px;
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
        
        .steps-container::before {
            display: none;
        }
        
        .step-number::after {
            display: none;
        }
        
        .step-card {
            min-width: 100%;
        }
    }
</style>

<section class="steps-section" dir="rtl">
    <div class="section-header">
        <h2>خطوات العمل</h2>
        <p>كيف نقدم خدماتنا بأعلى معايير الجودة</p>
    </div>
    
    <div class="steps-container">
        <!-- Step 1 -->
        <div class="step-card">
            <div class="step-number">1</div>
            <h3 class="step-title">الاتصال بنا</h3>
            <p class="step-description">
                تواصل معنا عبر الهاتف أو الواتساب أو النموذج الإلكتروني لوصف المشكلة
            </p>
        </div>
        
        <!-- Step 2 -->
        <div class="step-card">
            <div class="step-number">2</div>
            <h3 class="step-title">تحديد الموعد</h3>
            <p class="step-description">
                نحدد معك موعدًا مناسبًا لزيارة الفني مع إمكانية الحضور في نفس اليوم
            </p>
        </div>
        
        <!-- Step 3 -->
        <div class="step-card">
            <div class="step-number">3</div>
            <h3 class="step-title">فحص الجهاز</h3>
            <p class="step-description">
                يقوم الفني المحترف بفحص دقيق للجهاز وتشخيص المشكلة بدقة
            </p>
        </div>
        
        <!-- Step 4 -->
        <div class="step-card">
            <div class="step-number">4</div>
            <h3 class="step-title">إصلاح فوري</h3>
            <p class="step-description">
                يتم الإصلاح فورًا مع استخدام قطع غيار أصلية وضمان على العملية
            </p>
        </div>
    </div>
</section>