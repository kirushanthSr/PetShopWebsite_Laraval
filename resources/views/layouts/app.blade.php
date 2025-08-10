<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'My Static Laravel Site')</title>

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Site CSS -->
  <link rel="stylesheet" href="{{ asset('css/nav-slide.css') }}">

  <style>
    /* Global custom styles */
    html { scroll-behavior: smooth; }
    body { font-family: 'Poppins', sans-serif; }
    .hero { padding-top: 1rem; padding-bottom: 1rem; }
    .navbar.scrolled { box-shadow: 0 6px 20px rgba(0,0,0,0.12) !important; }
  </style>
</head>
<body>
  @yield('content')

  <script>
    // Navbar shadow on scroll
    document.addEventListener('scroll', function () {
      const nav = document.querySelector('.navbar');
      if (!nav) return;
      if (window.scrollY > 10) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
    });
  </script>
  <!-- Bootstrap JS (requires Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
