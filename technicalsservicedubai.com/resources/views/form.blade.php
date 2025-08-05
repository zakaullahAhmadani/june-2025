<style>
:root {
  --primary: #0A66C2;      /* Trustworthy Blue */
  --secondary: #FFD700;    /* Luxury Gold */
  --accent: #28A745;       /* Green */
  --dark: #1A1A1A;        /* Dark Text */
  --light: #F5F5F5;       /* Light BG */
  --white: #FFFFFF;
}

.ceiling-form {
  background: var(--white);
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.form-title {
  color: var(--primary);
  font-size: 1.8rem;
  margin-bottom: 25px;
  font-weight: 700;
  text-align: center;
}

.form-control {
  height: 50px;
  border: 1px solid rgba(10, 102, 194, 0.2);
  border-radius: 8px !important;
  padding: 10px 15px;
  transition: all 0.3s;
}

.form-control:focus {
  border-color: var(--primary);
  box-shadow: 0 0 0 0.25rem rgba(10, 102, 194, 0.1);
}

textarea.form-control {
  height: 120px;
  resize: none;
}

.submit-btn {
  background: var(--primary);
  color: var(--white);
  border: none;
  padding: 12px 30px;
  font-weight: 600;
  border-radius: 8px;
  transition: all 0.3s;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.submit-btn:hover {
  background: #084a8f;
  transform: translateY(-2px);
}

.submit-btn i {
  margin-left: 10px;
  transition: transform 0.3s;
}

.submit-btn:hover i {
  transform: translateX(3px);
}

.alert-success {
  background: rgba(40, 167, 69, 0.1);
  border: 1px solid var(--accent);
  color: var(--dark);
  border-radius: 8px;
}

@media (max-width: 768px) {
  .ceiling-form {
    padding: 20px;
  }
  
  .form-title {
    font-size: 1.5rem;
  }
}
</style>

<div class="ceiling-form">
  <h3 class="form-title">Get Your Free Ceiling Consultation</h3>
  <form id="ceilingForm" method="POST" action="{{ route('ceiling.submit') }}">
    @csrf
    <div class="row g-3">
      <div class="col-md-6">
        <input type="text" name="name" placeholder="Your Name" class="form-control" required>
      </div>
      <div class="col-md-6">
        <input type="email" name="email" placeholder="Your Email" class="form-control" required>
      </div>
      <div class="col-md-6">
        <input type="tel" name="phone" placeholder="Phone Number" class="form-control" required>
      </div>
      <div class="col-md-6">
        <select name="service_type" class="form-control" required>
          <option value="" disabled selected>Select Service</option>
          <option value="False Ceiling Installation">False Ceiling Installation</option>
          <option value="Gypsum Ceiling">Gypsum Ceiling</option>
          <option value="Ceiling Repair">Ceiling Repair</option>
          <option value="Ceiling Renovation">Ceiling Renovation</option>
          <option value="Custom Design">Custom Design</option>
        </select>
      </div>
      <div class="col-12">
        <textarea name="message" rows="4" placeholder="Project Details (Area, Dimensions, Special Requirements)" class="form-control"></textarea>
      </div>
      <div class="col-12 mt-4">
        <button type="submit" class="submit-btn">
          <span>Request Free Quote</span>
          <i class="fas fa-arrow-right"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Success Message -->
  @if(session('success'))
    <div class="alert alert-success mt-4">
      {{ session('success') }}
    </div>
  @endif
</div>