<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>New Form Submission</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Pickup Date:</strong> {{ $data['pickup_date'] }}</p>
    <p><strong>Pickup Location:</strong> {{ $data['pickup_location'] }}</p>
    <p><strong>Drop-off Date:</strong> {{ $data['dropoff_date'] }}</p>
    <p><strong>Drop-off Location:</strong> {{ $data['dropoff_location'] }}</p>
    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>

    <script>
      // Clear all fields if submission was successful
      document.addEventListener('DOMContentLoaded', () => {
          document.getElementById('contactForm').reset();

          // Also clear all small display spans
          [
            'name_display',
            'email_display',
            'phone_display',
            'pickup_date_display',
            'pickup_location_display',
            'dropoff_date_display',
            'dropoff_location_display'
          ].forEach(id => {
              const el = document.getElementById(id);
              if (el) el.textContent = '';
          });
      });
    </script>
@endif

</body>
</html>
