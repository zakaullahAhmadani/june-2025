<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Services-Tyre Repair & Change Dubai | 24/7 Mobile Puncture Repair | +971 55 679 0901</title>
   @include('meta')
    <meta name="description" content="Professional mobile tyre repair services across Dubai. We fix punctures, replace tyres, and provide wheel alignment. Call +971 55 679 0901 for fast service.">
    <meta name="keywords" content="tyre repair, tyre replacement, mobile tyre service, Dubai, emergency tyre repair, puncture repair, wheel alignment">
    <meta name="author" content="TyreRepairAndChange.shop">
    <meta name="robots" content="index, follow">
     <style>
    :root {
        --primary: #1A3E72;
        --secondary: #2D2D2D;
        --accent: #FF7D33;
        --light-bg: #F5F5F5;
        --white: #FFFFFF;
    }
    
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: var(--secondary);
        background-color: var(--light-bg);
        margin: 0;
        padding: 0;
    }
    
    /* Navigation */
    nav {
        background-color: var(--primary);
        padding: 1rem;
        color: var(--white);
    }
    
    /* Hero Section */
    .hero-contact {
        background: linear-gradient(rgba(26, 62, 114, 0.8), rgba(26, 62, 114, 0.8)), 
                    url('images/services.webp') center/cover;
        color: var(--white);
        padding: 3rem 1rem;
        text-align: center;
    }
    
    .hero-contact h1 {
        font-size: 2rem;
        margin-bottom: 1rem;
    }
    
    /* Contact Container */
    .contact-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 1rem;
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    /* Contact Form */
    .contact-form {
        background: var(--white);
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .form-group {
        margin-bottom: 1.2rem;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: bold;
    }
    
    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 0.8rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
    }
    
    .form-group textarea {
        height: 120px;
    }
    
    .submit-btn {
        background-color: var(--accent);
        color: var(--white);
        border: none;
        padding: 0.8rem 1.5rem;
        font-size: 1rem;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 100%;
    }
    
    .submit-btn:hover {
        background-color: #e56d20;
    }
    
    /* Contact Methods */
    .contact-methods {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .contact-card {
        background: var(--white);
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        transition: transform 0.3s;
    }
    
    .contact-card:hover {
        transform: translateY(-3px);
    }
    
    .contact-icon {
        font-size: 1.5rem;
        color: var(--accent);
        margin-right: 1rem;
        min-width: 40px;
        text-align: center;
    }
    
    .contact-info h3 {
        margin: 0 0 0.3rem 0;
        color: var(--primary);
        font-size: 1.1rem;
    }
    
    .contact-info a,
    .contact-info p {
        color: var(--primary)!important;
        font-weight: bold;
        text-decoration: none;
        font-size: 0.9rem;
        margin: 0;
    }
    
    .contact-info a:hover {
        color: var(--accent);
        text-decoration: underline;
    }
    
    /* Success Message */
    #success-message {
        display: none;
        background: #4CAF50;
        color: white;
        padding: 0.8rem;
        border-radius: 5px;
        margin-top: 1rem;
        text-align: center;
    }
    
    /* Desktop Styles */
    @media (min-width: 768px) {
        .hero-contact {
            padding: 5rem 1rem;
        }
        
        .hero-contact h1 {
            font-size: 3rem;
        }
        
        .contact-container {
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin: 3rem auto;
        }
        
        .contact-form {
            padding: 2rem;
        }
        
        .contact-card {
            padding: 2rem;
        }
        
        .contact-icon {
            font-size: 2rem;
            margin-right: 1.5rem;
        }
        
        .submit-btn {
            width: auto;
        }
    }
</style>
    </head>
<body>
  @include('navbar')
   <section class="hero-contact">
        <div class="container">
            <h1>Services</h1>
            <p>Get in touch with our tyre experts for premium services in Dubai</p>
        </div>
    </section>
    @include('What We Do')
    @include('Our Services')
@include('contactussection')

      @include('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>