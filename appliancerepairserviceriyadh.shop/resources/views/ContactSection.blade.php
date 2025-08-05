<style>
    :root {
        --primary-color: #0077b6;       /* Cool Blue - Air Conditioner */
        --secondary-color: #d9d9d9;     /* Light Gray - Appliance neutral */
        --accent-color: #00b4d8;        /* Aqua Blue - Washing freshness */
        --cta-color: #0077b6;           /* Primary blue for CTAs */
        --text-color: #2c2c2c;          /* Professional dark text */
        --text-white: #ffffff;
        --border-color: #e0e0e0;
        --font-arabic: 'Tajawal', sans-serif;
        --card-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        --transition: all 0.3s ease;
        --bg-color: #f8f9fa;
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

    .contact-section-ar {
        padding: 3rem 1rem;
    }

    .contact-container-ar {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    .contact-header-ar {
        text-align: center;
        margin-bottom: 2rem;
    }

    .contact-header-ar h2 {
        color: var(--primary-color);
        font-size: 1.8rem;
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
    }

    .contact-header-ar h2::after {
        content: '';
        position: absolute;
        bottom: -0.5rem;
        right: 50%;
        transform: translateX(50%);
        width: 4rem;
        height: 0.2rem;
        background: var(--accent-color);
        border-radius: 0.125rem;
    }

    .contact-header-ar p {
        color: var(--text-color);
        font-size: 1rem;
        max-width: 100%;
        margin: 0 auto;
        line-height: 1.6;
        padding: 0 1rem;
    }

    .contact-layout-ar {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .contact-form-container-ar {
        background: var(--text-white);
        border-radius: 0.75rem;
        padding: 1.5rem;
        box-shadow: var(--card-shadow);
        order: 2;
        border: 1px solid var(--border-color);
    }

    .contact-cards-container-ar {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        order: 1;
    }

    .contact-card-ar {
        background: var(--text-white);
        border-radius: 0.75rem;
        padding: 1.5rem;
        box-shadow: var(--card-shadow);
        transition: var(--transition);
        border-top: 4px solid var(--primary-color);
        position: relative;
        overflow: hidden;
        text-align: center;
        border: 1px solid var(--border-color);
    }

    .contact-card-ar:hover {
        transform: translateY(-0.5rem);
        box-shadow: 0 10px 25px rgba(0, 180, 216, 0.15);
    }

    .contact-card-ar::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 119, 182, 0.03) 0%, rgba(0, 180, 216, 0.03) 100%);
        z-index: 0;
    }

    .contact-icon-ar {
        width: 3rem;
        height: 3rem;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--text-white);
        font-size: 1.1rem;
        margin: 0 auto 1rem;
        position: relative;
        box-shadow: 0 4px 10px rgba(0, 119, 182, 0.2);
        transition: var(--transition);
    }

    .contact-card-ar:hover .contact-icon-ar {
        background: var(--accent-color);
        transform: scale(1.1);
    }

    .contact-content-ar h3 {
        color: var(--primary-color);
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
        transition: var(--transition);
    }

    .contact-card-ar:hover .contact-content-ar h3 {
        color: var(--accent-color);
    }

    .contact-content-ar a, 
    .contact-content-ar p {
        color: var(--text-color);
        text-decoration: none;
        transition: var(--transition);
        display: block;
        line-height: 1.6;
        font-size: 0.9rem;
    }

    .contact-content-ar a:hover {
        color: var(--accent-color);
        transform: translateX(0.25rem);
    }

    .form-group-ar {
        margin-bottom: 1.2rem;
    }

    .form-group-ar label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--primary-color);
        font-weight: 500;
        font-size: 0.9rem;
    }

    .form-control-ar {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid var(--border-color);
        border-radius: 0.5rem;
        font-size: 0.9rem;
        transition: var(--transition);
        background-color: rgba(255, 255, 255, 0.8);
    }

    .form-control-ar:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(0, 119, 182, 0.1);
    }

    textarea.form-control-ar {
        min-height: 6rem;
        resize: vertical;
    }

    .submit-btn-ar {
        background: var(--cta-color);
        color: var(--text-white);
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        box-shadow: 0 4px 10px rgba(0, 119, 182, 0.2);
        width: 100%;
        justify-content: center;
    }

    .submit-btn-ar:hover {
        background: var(--accent-color);
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0, 180, 216, 0.3);
    }

    .alert-ar {
        padding: 0.75rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
        display: none;
        animation: fadeIn 0.5s ease;
        font-size: 0.9rem;
    }

    .alert-success-ar {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (min-width: 576px) {
        .contact-cards-container-ar {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .submit-btn-ar {
            width: auto;
        }
    }

    @media (min-width: 768px) {
        .contact-section-ar {
            padding: 4rem 1.5rem;
        }
        
        .contact-header-ar h2 {
            font-size: 2rem;
        }
        
        .contact-header-ar p {
            font-size: 1.1rem;
        }
        
        .contact-layout-ar {
            flex-direction: row;
        }
        
        .contact-form-container-ar {
            order: 1;
            padding: 2rem;
        }
        
        .contact-cards-container-ar {
            order: 2;
            grid-template-columns: 1fr;
        }
        
        .contact-card-ar {
            padding: 1.5rem;
        }
    }

    @media (min-width: 992px) {
        .contact-section-ar {
            padding: 5rem 1.5rem;
        }
        
        .contact-header-ar h2 {
            font-size: 2.25rem;
        }
        
        .contact-layout-ar {
            grid-template-columns: 1.5fr 1fr;
            display: grid;
            flex-direction: unset;
        }
        
        .contact-form-container-ar,
        .contact-cards-container-ar {
            order: unset;
        }
        
        .contact-cards-container-ar {
            display: flex;
            flex-direction: column;
        }
        
        .contact-card-ar {
            padding: 2rem;
        }
    }
</style>

<section class="contact-section-ar">
    <div class="contact-container-ar">
        <div class="contact-header-ar">
            <h2>تواصل معنا لصيانة الأجهزة المنزلية</h2>
            <p>نحن متخصصون في صيانة المكيفات، الثلاجات والغسالات في الرياض</p>
        </div>
        
        <div class="contact-layout-ar">
            <!-- Left Column - Contact Form -->
            <div class="contact-form-container-ar">
                <div id="success-message-ar" class="alert-ar alert-success-ar" style="display: none;">
                    شكراً لتواصلك معنا! سنعود إليك قريباً.
                </div>
                
                <form id="contactFormAr" method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    
                    <div class="form-group-ar">
                        <label for="name-ar">الاسم الكامل</label>
                        <input type="text" id="name-ar" name="name" class="form-control-ar" required>
                    </div>
                    
                    <div class="form-group-ar">
                        <label for="phone-ar">رقم الهاتف</label>
                        <input type="tel" id="phone-ar" name="phone" class="form-control-ar" required>
                    </div>
                    
                    <div class="form-group-ar">
                        <label for="email-ar">البريد الإلكتروني</label>
                        <input type="email" id="email-ar" name="email" class="form-control-ar">
                    </div>
                    
                    <div class="form-group-ar">
                        <label for="service-ar">الخدمة المطلوبة</label>
                        <select id="service-ar" name="service" class="form-control-ar" required>
                            <option value="">اختر الخدمة</option>
                            <option value="صيانة المكيفات">صيانة المكيفات</option>
                            <option value="صيانة الثلاجات">صيانة الثلاجات</option>
                            <option value="صيانة الغسالات">صيانة الغسالات</option>
                            <option value="خدمات أخرى">خدمات أخرى</option>
                        </select>
                    </div>
                    
                    <div class="form-group-ar">
                        <label for="message-ar">الرسالة</label>
                        <textarea id="message-ar" name="message" class="form-control-ar"></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn-ar">
                        <i class="fas fa-paper-plane"></i> إرسال الرسالة
                    </button>
                </form>
            </div>
            
            <!-- Right Column - Contact Cards -->
            <div class="contact-cards-container-ar">
                <!-- Contact Card 1 -->
                <div class="contact-card-ar">
                    <div class="contact-icon-ar">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-content-ar">
                        <h3>اتصل بنا</h3>
                        <a href="tel:0501676359">0501676359</a>
                        <p>خدمة عملاء متاحة 24/7 للطوارئ</p>
                    </div>
                </div>
                
                <!-- Contact Card 2 -->
                <div class="contact-card-ar">
                    <div class="contact-icon-ar">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-content-ar">
                        <h3>البريد الإلكتروني</h3>
                        <a href="mailto:info@appliancerepairserviceriyadh.shop">info@appliancerepairserviceriyadh.shop</a>
                        <p>رد سريع خلال 24 ساعة</p>
                    </div>
                </div>
                
                <!-- Contact Card 3 -->
                <div class="contact-card-ar">
                    <div class="contact-icon-ar">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-content-ar">
                        <h3>موقعنا</h3>
                        <p>الرياض، السعودية</p>
                        <p>خدمة منزلية في جميع أنحاء المدينة</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('contactFormAr').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const successMsg = document.getElementById('success-message-ar');
        successMsg.style.display = 'block';
        this.reset();
        
        setTimeout(function() {
            successMsg.style.display = 'none';
        }, 5000);
    });
</script>