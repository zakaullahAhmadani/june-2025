<style>
:root {
  /* Brand Identity */
  --primary-color: #0A66C2;     /* Blue - Plumbing */
  --secondary-color: #FFD700;   /* Yellow - Electrical */
  --accent-color: #28A745;      /* Green - Painting */
  --renovation-color: #8B4513;  /* Brick Brown - Renovation */
  --appliance-color: #A9A9A9;   /* Grey - Home Appliances */
  --ceiling-color: #F5F5F5;     /* Off White - False Ceiling */

  /* Text Colors */
  --text-color: #222222;
  --text-light: #555555;
  --text-white: #ffffff;

  /* Background Colors */
  --bg-light: #f9f9f9;
  --bg-dark: #1e1e1e;
  --bg-image-overlay: rgba(0, 0, 0, 0.5);

  /* Button Styles */
  --btn-bg: var(--primary-color);
  --btn-color: var(--text-white);
  --btn-hover-bg: var(--accent-color);
  --btn-hover-color: var(--text-white);

  /* Border and Shadow */
  --border-color: #dddddd;
  --box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.why-choose-section {
    position: relative;
    padding: 100px 0;
    background: linear-gradient(rgba(10, 102, 194, 0.85), rgba(10, 102, 194, 0.85)), 
                url('images/false-ceiling-installation.webp') no-repeat center center;
    background-size: cover;
    background-position: center;
    color: var(--text-white);
    overflow: hidden;
}

.why-choose-content {
    position: relative;
    z-index: 2;
}

.section-heading {
    font-weight: 700;
    margin-bottom: 20px;
    color: var(--text-white);
}

.section-subheading {
    font-size: 1.5rem;
    margin-bottom: 30px;
    font-weight: 600;
    color: var(--secondary-color);
}

.benefits-list {
    margin-bottom: 40px;
}

.benefit-item {
    position: relative;
    padding-left: 50px;
    margin-bottom: 25px;
}

.benefit-icon {
    position: absolute;
    left: 0;
    top: 0;
    width: 40px;
    height: 40px;
    background-color: var(--secondary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: var(--primary-color);
}

.benefit-title {
    font-weight: 600;
    margin-bottom: 5px;
    font-size: 1.1rem;
}

.benefit-desc {
    opacity: 0.9;
    font-size: 0.95rem;
}

.feature-image {
    border-radius: 10px;
    box-shadow: var(--box-shadow);
    height: 100%;
    min-height: 300px;
    object-fit: cover;
}

.contact-btn {
    background-color: var(--accent-color);
    color: var(--text-white);
    border: none;
    padding: 12px 30px;
    font-weight: 600;
    border-radius: 30px;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    text-decoration: none;
    font-size: 1rem;
}

.contact-btn:hover {
    background-color: var(--secondary-color);
    color: var(--primary-color);
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
}

.contact-btn i {
    margin-right: 10px;
}

@media (max-width: 991.98px) {
    .why-choose-section {
        padding: 80px 0;
        text-align: center;
    }
    
    .benefit-item {
        padding-left: 0;
        padding-top: 50px;
        text-align: center;
    }
    
    .benefit-icon {
        left: 50%;
        transform: translateX(-50%);
        top: 0;
    }
    
    .feature-image {
        margin-top: 50px;
        max-height: 400px;
    }
}

@media (max-width: 767.98px) {
    .why-choose-section {
        padding: 60px 0;
    }
    
    .section-heading {
        font-size: 1.8rem;
    }
    
    .section-subheading {
        font-size: 1.2rem;
    }
    
    .contact-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<section class="why-choose-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="why-choose-content">
                    <h2 class="section-heading">Why Choose Our False Ceiling Services</h2>
                    <h3 class="section-subheading">Premium Ceiling Solutions Across Dubai</h3>
                    <p class="mb-4">
                        As leading gypsum contractors in Dubai, we specialize in high-quality false ceiling installations, gypsum board ceilings, and complete ceiling renovation services. Our certified technicians deliver precision workmanship with premium materials for residential and commercial projects throughout Dubai.
                    </p>
                    
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-ruler-combined"></i>
                            </div>
                            <h4 class="benefit-title">Precision Installation</h4>
                            <p class="benefit-desc">Expert installation of gypsum ceilings following industry best practices</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="benefit-title">Premium Materials</h4>
                            <p class="benefit-desc">We use only high-quality gypsum boards and materials from trusted suppliers</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4 class="benefit-title">Timely Completion</h4>
                            <p class="benefit-desc">Efficient project management ensures deadlines are consistently met</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <h4 class="benefit-title">Warranty Protection</h4>
                            <p class="benefit-desc">All our work comes with comprehensive warranty coverage</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-paint-roller"></i>
                            </div>
                            <h4 class="benefit-title">Custom Designs</h4>
                            <p class="benefit-desc">Tailored ceiling solutions to match your interior design vision</p>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h4 class="benefit-title">Complete Service</h4>
                            <p class="benefit-desc">From design consultation to final installation and finishing</p>
                        </div>
                    </div>
                    
                    <a href="tel:+971562823168" class="contact-btn">
                        <i class="fas fa-phone-alt"></i> Call Now: +971 56 282 3168
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img src="images/false-ceiling-installation.webp" alt="Professional False Ceiling Installation in Dubai" class="img-fluid feature-image">
            </div>
        </div>
    </div>
</section>