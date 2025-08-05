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

    .reviews-section {
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

    .reviews-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        margin: 0 auto;
    }

    .review-card {
        background: var(--text-white);
        border-radius: 10px;
        padding: 30px;
        box-shadow: var(--card-shadow);
        text-align: center;
        transition: all 0.3s ease;
    }

    .review-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .reviewer-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin: 0 auto 20px;
        border: 3px solid var(--accent-color);
    }

    .review-stars {
        color: var(--accent-color);
        font-size: 1.2rem;
        margin-bottom: 15px;
    }

    .review-text {
        color: var(--text-color);
        line-height: 1.8;
        margin-bottom: 20px;
        font-size: 1rem;
        min-height: 120px;
    }

    .reviewer-name {
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 5px;
    }

    .review-date {
        color: #777;
        font-size: 0.9rem;
    }

    @media (max-width: 768px) {
        .reviews-container {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="reviews-section">
    <div class="section-header">
        <h2>آراء عملائنا</h2>
        <p>انظر ما يقوله عملاؤنا عن جودة خدماتنا</p>
    </div>
    
    <div class="reviews-container">
        <!-- Review 1 -->
        <div class="review-card">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="عميل" class="reviewer-img">
            <div class="review-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="review-text">
                خدمة ممتازة وسريعة! الفني كان محترفًا جدًا وأصلح المكيف في وقت قياسي. أنصح بهم بشدة.
            </p>
            <h4 class="reviewer-name">أحمد محمد</h4>
            <p class="review-date">15 يناير 2023</p>
        </div>
        
        <!-- Review 2 -->
        <div class="review-card">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="عميلة" class="reviewer-img">
            <div class="review-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="review-text">
                غسالتنا كانت تعمل بصوت عالٍ، الفني أصلح المشكلة وشرح لي كيفية العناية بها. شكرًا لكم!
            </p>
            <h4 class="reviewer-name">سارة عبدالله</h4>
            <p class="review-date">2 فبراير 2023</p>
        </div>
    </div>
</section>