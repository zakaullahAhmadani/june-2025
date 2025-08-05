<style>
    /* Custom CSS with your color scheme */
    .cs_height_80, .cs_height_lg_80 {
        height: 80px;
    }
    .cs_height_27, .cs_height_lg_65 {
        height: 27px;
    }
    .cs_height_120, .cs_height_lg_105 {
        height: 120px;
    }
    @media (min-width: 992px) {
        .cs_height_lg_80 {
            height: 80px;
        }
        .cs_height_lg_65 {
            height: 65px;
        }
        .cs_height_lg_105 {
            height: 105px;
        }
    }
    
    .cs_section_subtitle {
        font-size: 18px;
        margin-bottom: 12px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-transform: uppercase;
        color: var(--secondary-color);
    }
    
    .cs_section_title {
        font-size: 40px;
        margin-bottom: 0;
        font-weight: 700;
        color: var(--primary-color);
    }
    
    .cs_row_gap_40 {
        row-gap: 40px;
    }
    
    .cs_gap_y_40 {
        margin-top: 40px;
        margin-bottom: 40px;
    }
    
    .cs_feature_text {
        margin-bottom: 30px;
        font-size: 16px;
        line-height: 1.6;
        color: var(--text-color);
    }
    
    .cs_iconbox {
        display: flex;
        gap: 15px;
        margin-bottom: 12px;
        align-items: flex-start;
    }
    
    .cs_iconbox_icon {
        width: 50px;
        height: 50px;
        background-color: var(--highlight-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .cs_iconbox_icon img {
        width: 24px;
        height: 24px;
    }
    
    .cs_iconbox_info h3 {
        font-size: 18px;
        margin-bottom: 2px;
        font-weight: 600;
        color: var(--primary-color);
    }
    
    .cs_iconbox_subtitle {
        font-size: 12px;
        color: var(--text-muted);
        line-height: 1.5;
        margin-bottom: 0;
    }
    
    .cs_btn {
        display: inline-flex;
        align-items: center;
        padding: 12px 24px;
        background-color: var(--primary-color);
        color: white;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .cs_btn:hover {
        background-color: var(--accent-color);
        color: white;
    }
    
    /* Card styling */
    .cs_card {
        background-color: white;
        border: 1px solid var(--border-color);
        border-radius: 16px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s, box-shadow 0.3s;
        height: 100%;
        padding: 30px;
        text-align: center;
    }

    .cs_card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    }

    .cs_icon {
        width: 80px;
        height: 80px;
        background-color: var(--highlight-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: var(--secondary-color);
        margin: 0 auto 20px;
    }

    .cs_card h3 {
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 15px;
    }

    .cs_card p {
        color: var(--text-color);
        margin-bottom: 10px;
    }

    .cs_card .text-muted {
        color: var(--text-muted);
    }
</style>

<section class="cs_why_choose_us py-5" style="background-color: var(--bg-color);">
  <div class="container">
    <div class="text-center mb-5">
      <h3 class="cs_section_subtitle">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="me-2">
          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg>
        لماذا تختارنا
        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="ms-2">
          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg>
      </h3>
      <h2 class="cs_section_title">خبراء الجبس بورد والديكور في الرياض</h2>
      <p class="cs_feature_text">متخصصون في تركيب وتصميم ألواح الجبس بورد والأسقف المعلقة بجودة عالية وأسعار تنافسية</p>
    </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="cs_card">
          <div class="cs_icon">
            <i class="fas fa-award"></i>
          </div>
          <h3>خبرة واسعة</h3>
          <p class="text-muted mb-2">
            فريق عمل محترف بخبرة طويلة في أعمال الجبس بورد
          </p>
          <p>
            نقدم حلولاً مبتكرة لجميع أنواع الديكورات الداخلية والأسقف المعلقة
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="cs_card">
          <div class="cs_icon">
            <i class="fas fa-tag"></i>
          </div>
          <h3>أسعار مميزة</h3>
          <p class="text-muted mb-2">
            أسعار تنافسية تبدأ من 10 ريال للمتر
          </p>
          <p>
            نوفر أفضل خامات الجبس بورد بأسعار مناسبة لجميع الميزانيات
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="cs_card">
          <div class="cs_icon">
            <i class="fas fa-headset"></i>
          </div>
          <h3>دعم فني</h3>
          <p class="text-muted mb-2">
            خدمة عملاء متاحة على مدار الساعة
          </p>
          <p>
            نضمن لك الرضا التام مع متابعة مستمرة بعد التنفيذ
          </p>
        </div>
      </div>
    </div>

   
  </div>
</section>

<div class="cs_height_80 cs_height_lg_80"></div>