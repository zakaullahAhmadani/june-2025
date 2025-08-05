<style>
    :root {
        --primary-color: #0077b6;       /* Cool Blue - Air Conditioner */
        --secondary-color: #d9d9d9;     /* Light Gray - Appliance neutral */
        --accent-color: #00b4d8;        /* Aqua Blue - Washing freshness */
        --cta-color: #0077b6;           /* Primary blue for CTAs */
        --text-color: #2c2c2c;          /* Professional dark text */
        --text-white: #ffffff;
        --image-overlay: rgba(0, 0, 0, 0.4);
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

    .ac-section {
        position: relative;
        min-height: 600px;
        display: flex;
        align-items: center;
        background: linear-gradient(rgba(0, 119, 182, 0.85), rgba(0, 180, 216, 0.85)), 
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
        background-color: rgba(255, 255, 255, 0.95);
        border-radius: 10px;
        color: var(--text-color);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        border: 1px solid var(--border-color);
    }

    .ac-image {
        flex: 1;
        min-height: 400px;
        background: url('images/washing mechine.webp') center/cover;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .ac-content h2 {
        color: var(--primary-color);
        font-size: 2.2rem;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 15px;
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
        transition: all 0.3s;
    }

    .service-tag:hover {
        background-color: var(--accent-color);
        transform: translateY(-2px);
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
        box-shadow: 0 4px 10px rgba(0, 119, 182, 0.2);
    }

    .call-now-btn:hover {
        background: var(--accent-color);
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(0, 180, 216, 0.3);
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
<section class="ac-section">
    <div class="ac-container">
        <div class="ac-image" dir="rtl"></div>
        <div class="ac-content">
            <h2>خدمات صيانة المكيفات بالرياض </h2>
            <p>نقدم في City Riyaz خدمات شاملة لصيانة جميع أنواع المكيفات (سبليت، شباك، مركزي) بأعلى معايير الجودة. فريقنا من الفنيين الخبراء يضمن إصلاحاً مثالياً لكل أعطال التكييف.</p>
            <p>بخبرة ممتدة في مجال التبريد والتكييف، نغطي كافة احتياجات الصيانة من التنظيف الدوري، الإصلاحات الفنية، تركيب الوحدات الجديدة، وصيانة جميع الماركات العالمية والمحلية.</p>
            
            <div class="service-tags">
                <span class="service-tag">صيانة مكيفات سبليت</span>
                <span class="service-tag">غسيل مكيفات بالرياض</span>
                <span class="service-tag">إصلاح أعطال التبريد</span>
                <span class="service-tag">تركيب مكيفات جديدة</span>
                <span class="service-tag">صيانة مكيفات مركزية</span>
                <span class="service-tag">تنظيف فلتر المكيف</span>
                <span class="service-tag">فني تكييف معتمد</span>
                <span class="service-tag">تعبئة غاز الفريون</span>
                <span class="service-tag">إصلاح لوحات التحكم</span>
                <span class="service-tag">صيانة مكيفات شباك</span>
            </div>
            
            <a href="tel:+966501676359" class="call-now-btn">
                اتصل بنا الآن 0501676359
                <i class="fas fa-phone"></i>
            </a>
        </div>
    </div>
</section>