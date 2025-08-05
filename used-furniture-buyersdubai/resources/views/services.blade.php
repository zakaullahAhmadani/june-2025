<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Character encoding -->
  <meta charset="UTF-8" />

  <!-- CSRF token for frameworks like Laravel -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Viewport for responsive design -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Page Title -->
  <title>services-Used Furniture Buyers Dubai | Sell Used Furniture for Best Price</title>

  <!-- SEO Meta Tags -->
  <meta name="description" content="Top used furniture buyers in Dubai offering quick deals for home, office, hotel, and villa furniture. Sell your used furniture for the best price today." />
  <meta name="keywords" content="Used Furniture Buyers Dubai, Sell Used Furniture Dubai, Office Furniture Buyers, Home Furniture Buyers, Hotel Furniture Buyers" />
  <meta name="author" content="Innovative Technologies" />
  <meta name="robots" content="index, follow" />

  <!-- Canonical URL to prevent duplicate content -->
  <link rel="canonical" href="https://used-furniture-buyersdubai.com/" />

  <!-- Open Graph (Facebook, WhatsApp sharing) -->
  <meta property="og:title" content="Used Furniture Buyers Dubai" />
  <meta property="og:description" content="Get top cash offers for your used home, office, hotel, or villa furniture in Dubai." />
  <meta property="og:image" content="https://used-furniture-buyersdubai.com/images/web.jpg" />
  <meta property="og:url" content="https://used-furniture-buyersdubai.com/" />
  <meta property="og:type" content="website" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Used Furniture Buyers Dubai" />
  <meta name="twitter:description" content="Sell your used furniture in Dubai and get top prices for home, office, hotel, and villa furniture." />
  <meta name="twitter:image" content="https://used-furniture-buyersdubai.com/images/web.jpg" />

  <!-- Favicon -->
  <link rel="icon" href="https://used-furniture-buyersdubai.com/images/web.jpg" type="image/x-icon" />
  <link rel="apple-touch-icon" href="https://used-furniture-buyersdubai.com/images/web.jpg" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Structured Data (Schema.org) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Used Furniture Buyers Dubai",
    "image": "https://used-furniture-buyersdubai.com/images/web.jpg",
    "url": "https://used-furniture-buyersdubai.com/",
    "telephone": "+971508097203",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Dubai",
      "addressCountry": "AE"
    },
    "description": "Top used furniture buyers in Dubai offering quick deals for home, office, hotel, and villa furniture."
  }
  </script>

  <!-- Performance: Preconnect to CDN resources -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

  <!-- Additional SEO signals -->
  <meta name="theme-color" content="#ffffff">
</head>

<body>

 @include('navbar')
 <section class="hero-section d-flex align-items-center justify-content-center text-center" style="
    background: url('{{ asset('images/Used Office Furniture Buyers in Dubai.webp') }}') center center / cover no-repeat;
    height: 400px;
    position: relative;
">
    <!-- Overlay with orange-red gradient -->
   

    <div class="container position-relative">
        <h1 class="display-4 fw-bold text-black">Services</h1>
        <nav aria-label="breadcrumb" class="d-flex justify-content-center mt-3">
            <ol class="breadcrumb bg-transparent p-0 m-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}" class="text-black text-decoration-none hover-underline">Home</a>
                </li>
                <li class="breadcrumb-item active text-black" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Add this to your CSS -->
<style>
    .hover-underline:hover {
        text-decoration: underline !important;
    }
    .breadcrumb-item.active {
        color: black !important; /* Lighter white for active item */
    }
    .breadcrumb-item a {
        transition: all 0.3s ease;
    }
</style>


  @include('services section')
@include('StatsSection')
 @include('secondhandsection')
   @include('footer')



  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>