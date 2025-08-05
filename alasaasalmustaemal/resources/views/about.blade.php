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
  <title>مشتري الأثاث المستعمل في الرياض | شراء وبيع الأثاث المستعمل بأفضل الأسعار | 0501110433</title>

  <!-- SEO Meta Tags -->
  @include('meta')
</head>

<body>

 @include('navbar')
 <section class="hero-section d-flex align-items-center justify-content-center text-center" style="
    background: url('{{ asset('images/WhatsApp Image 2025-07-23 at 12.16.06_76143e4c.jpg') }}') center center / cover no-repeat;
    height: 400px;
    position: relative;
">
    <!-- Overlay with orange-red gradient -->
   

    <div class="container position-relative">
        <h1 class="display-4 fw-bold text-black">من نحن</h1>
        <nav aria-label="breadcrumb" class="d-flex justify-content-center mt-3">
            <ol class="breadcrumb bg-transparent p-0 m-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}" class="text-black text-decoration-none hover-underline">الرئيسية</a>
                </li>
                <li class="breadcrumb-item active text-black" aria-current="page">من نحن</li>
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
@include('aboutsection')
@include('Who We Are')
@include('WhyChooseSection')


  @include('footer')

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>