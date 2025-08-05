<form id="contactForm" method="POST" action="{{ route('form.submit') }}">
    @csrf
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mb-3">
        <label class="form-label text-black">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Your Name" required 
               value="{{ old('name', session('form_data.name') ?? '') }}" oninput="showValue(this)">
        <!-- <small class="form-text text-black fw-bold" id="name_display"></small> -->
    </div>

    <div class="mb-3">
        <label class="form-label text-black">Email</label>
        <input type="email" name="email" class="form-control" placeholder="you@email.com" required 
               value="{{ old('email', session('form_data.email') ?? '') }}" oninput="showValue(this)">
        <!-- <small class="form-text text-black fw-bold" id="email_display"></small> -->
    </div>

    <div class="mb-3">
        <label class="form-label text-black">Phone Number</label>
        <input type="text" name="phone" class="form-control" placeholder="+971..." required 
               value="{{ old('phone', session('form_data.phone') ?? '') }}" oninput="showValue(this)">
        <!-- <small class="form-text text-black fw-bold" id="phone_display"></small> -->
    </div>

    <div class="mb-3">
        <label class="form-label text-black">Pickup Date</label>
        <input type="date" name="pickup_date" class="form-control" required 
               value="{{ old('pickup_date', session('form_data.pickup_date') ?? '') }}" oninput="showValue(this)">
        <!-- <small class="form-text text-black fw-bold" id="pickup_date_display"></small> -->
    </div>

    <div class="mb-3">
        <label class="form-label text-black">Pickup Location</label>
        <input type="text" name="pickup_location" class="form-control" placeholder="Enter pickup address" required 
               value="{{ old('pickup_location', session('form_data.pickup_location') ?? '') }}" oninput="showValue(this)">
        <!-- <small class="form-text text-black fw-bold" id="pickup_location_display"></small> -->
    </div>

    <div class="mb-3">
        <label class="form-label text-black">Drop-off Date</label>
        <input type="date" name="dropoff_date" class="form-control" required 
               value="{{ old('dropoff_date', session('form_data.dropoff_date') ?? '') }}" oninput="showValue(this)">
        <!-- <small class="form-text text-black fw-bold" id="dropoff_date_display"></small> -->
    </div>

    <div class="mb-3">
        <label class="form-label text-black">Drop-off Location</label>
        <input type="text" name="dropoff_location" class="form-control" placeholder="Enter drop-off address" required 
               value="{{ old('dropoff_location', session('form_data.dropoff_location') ?? '') }}" oninput="showValue(this)">
        <!-- <small class="form-text text-black fw-bold" id="dropoff_location_display"></small> -->
    </div>

    <button type="submit" class="btn btn-primary w-100">Send Request</button>
</form>

<script>
    // Clear form fields and display values after successful submission
    @if(session('success'))
        document.addEventListener('DOMContentLoaded', function() {
            // Option 1: Clear all form fields
            document.getElementById('contactForm').reset();
            
            // Option 2: Clear just the display elements
            const displayElements = document.querySelectorAll('[id$="_display"]');
            displayElements.forEach(el => el.textContent = '');
            
            // Scroll to show success message
            document.querySelector('.alert').scrollIntoView({ behavior: 'smooth' });
        });
    @endif

    function showValue(input) {
        const displayElement = document.getElementById(input.name + '_display');
        if (displayElement) {
            displayElement.textContent = input.value;
        }
    }
</script>