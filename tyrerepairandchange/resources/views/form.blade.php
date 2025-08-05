<form id="chauffeurForm" method="POST" action="{{ route('chauffeur.submit') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <input type="text" name="name" placeholder="Your Name" class="form-control rounded" required>
        </div>
        <div class="col-md-6">
            <input type="email" name="email" placeholder="Your Email" class="form-control rounded" required>
        </div>
        <div class="col-md-6">
            <input type="tel" name="phone" placeholder="Phone Number" class="form-control rounded" required>
        </div>
        <div class="col-md-6">
            <input type="text" name="subject" placeholder="Subject" class="form-control rounded" required>
        </div>
        <div class="col-12">
            <textarea name="message" rows="3" placeholder="Special Requirements" class="form-control"></textarea>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary w-100 py-3">
                <span>Request Quote</span>
                <i class="bi bi-arrow-right ms-2"></i>
            </button>
        </div>
    </div>
</form>

<!-- Success Message -->
@if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
