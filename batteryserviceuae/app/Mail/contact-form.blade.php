<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    
    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Phone:</strong> {{ $formData['phone'] ?? 'Not provided' }}</p>
    <p><strong>Service Needed:</strong> {{ $formData['service'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $formData['message'] }}</p>
    
    <p>Submitted at: {{ now()->format('Y-m-d H:i:s') }}</p>
</body>
</html>