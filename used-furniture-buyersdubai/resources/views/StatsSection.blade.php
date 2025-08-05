<section class="stats-section py-5 position-relative">
  <!-- Background Image with Overlay -->
  <div class="stats-bg position-absolute top-0 start-0 w-100 h-100"></div>
  
  <div class="container position-relative z-1">
    <!-- Heading and Description -->
    <div class="text-center mb-5 px-3">
      <h2 class="text-white mb-3"style="color: var(--primary-red); font-weight: 800;">Why Customers Trust Us</h2>
      <p class="section-description text-white mx-auto" style="max-width: 700px;">
        With over a decade of experience in the used furniture market, we've built a reputation for reliability, 
        transparency, and exceptional service in Dubai. Our numbers speak for themselves.
      </p>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 justify-content-center">
      <!-- Card 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="stat-card text-center p-4 rounded-3 shadow-sm bg-white h-100">
          <div class="stat-icon mx-auto rounded-circle d-flex align-items-center justify-content-center mb-3">
            <i class="bi bi-emoji-smile fs-1"></i>
          </div>
          <h3 class="stat-number mb-2">12k+</h3>
          <p class="stat-label mb-0">Happy Customers</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="stat-card text-center p-4 rounded-3 shadow-sm bg-white h-100">
          <div class="stat-icon mx-auto rounded-circle d-flex align-items-center justify-content-center mb-3">
            <i class="bi bi-award fs-1"></i>
          </div>
          <h3 class="stat-number mb-2">10+</h3>
          <p class="stat-label mb-0">Years of Experience</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="stat-card text-center p-4 rounded-3 shadow-sm bg-white h-100">
          <div class="stat-icon mx-auto rounded-circle d-flex align-items-center justify-content-center mb-3">
            <i class="bi bi-shield-lock fs-1"></i>
          </div>
          <h3 class="stat-number mb-2">100%</h3>
          <p class="stat-label mb-0">Secure Payment</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="stat-card text-center p-4 rounded-3 shadow-sm bg-white h-100">
          <div class="stat-icon mx-auto rounded-circle d-flex align-items-center justify-content-center mb-3">
            <i class="bi bi-people fs-1"></i>
          </div>
          <h3 class="stat-number mb-2">19+</h3>
          <p class="stat-label mb-0">Team Members</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Stats Section Styling */
  .stats-section {
    position: relative;
    overflow: hidden;
    padding: 80px 0;
  }

  .stats-bg {
    background-image: url('images/Hotel Furniture Buyers in Dubai.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    z-index: 0;
    opacity: 0.9;
  }

  .stats-bg::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255,69,0,0.85) 0%, rgba(44,62,80,0.9) 100%);
    z-index: 1;
  }

  .section-title {
    font-weight: 700;
    font-size: 2.5rem;
    position: relative;
    display: inline-block;
  }

  .section-title::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: -15px;
    width: 80px;
    height: 3px;
    background: white;
    transform: translateX(-50%);
  }

  .section-description {
    font-size: 1.15rem;
    line-height: 1.6;
  }

  .stat-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
    background-color: rgba(255,255,255,0.95) !important;
  }

  .stat-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
  }

  .stat-icon {
    width: 80px;
    height: 80px;
    background: #FF4500; /* Orange-Red */
    color: white;
    transition: all 0.3s ease;
  }

  .stat-card:hover .stat-icon {
    transform: scale(1.1);
  }

  /* Alternate icon colors */
  .stat-card:nth-child(2) .stat-icon {
    background: #2c3e50; /* Dark Blue-Black */
  }

  .stat-card:nth-child(3) .stat-icon {
    background: #dc3545; /* Bootstrap Red */
  }

  .stat-card:nth-child(4) .stat-icon {
    background: #212529; /* Pure Black */
  }

  .stat-number {
    font-weight: 700;
    color: #2c3e50;
    font-size: 2.2rem;
  }

  .stat-label {
    color: #6c757d;
    font-size: 1.1rem;
  }

  /* Responsive adjustments */
  @media (max-width: 767.98px) {
    .section-title {
      font-size: 2rem;
    }
    
    .section-description {
      font-size: 1rem;
    }
    
    .stat-icon {
      width: 60px;
      height: 60px;
    }
    
    .stat-number {
      font-size: 1.8rem;
    }
  }
</style>