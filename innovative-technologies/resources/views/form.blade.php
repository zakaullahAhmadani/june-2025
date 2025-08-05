	@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

                        <form id="contactForm" method="POST" action="{{ route('contact.submit') }}">
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full name" required>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
    </div>
    <div class="mb-3">
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone number">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
    </div>
    <div class="mb-3">
        <textarea class="form-control" id="message" name="message" placeholder="Write message" required></textarea>
    </div>
    <button type="submit" class="submit-btn">Send A Message</button>
</form>
