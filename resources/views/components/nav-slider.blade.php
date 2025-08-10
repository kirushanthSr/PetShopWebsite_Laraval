<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="nav-logo" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#cards">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#appointment">Appointment</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="{{ asset('images/5.jpg') }}" class="d-block w-100" style="height: 750px; object-fit: cover;" alt="Slide 1">
      <div class="carousel-caption-custom right-caption">
        <h1><span class="highlight">Petify</span></h1>
        <h1>Pet Care Center</h1>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" style="height: 750px; object-fit: cover;" alt="Slide 2" loading="lazy">
      <div class="carousel-caption-custom left-caption">
        <h1><b>Welcome To The</b></h1>
        <h1><b>Pet Care Company</h1>
        <p>At The Pet Care Company, we are dedicated to keeping your pets happy, healthy, and loved. From grooming and health check-ups to nutritious meals and playful activities, we provide everything your furry friends need to live their best life.</p>
        <div class="stats-box">
          <div class="stats-item"><i class="bi bi-people-fill"></i> Happy Clients 20k</div>
          <div class="stats-item"><i class="bi bi-heart-fill"></i> Pets 20k</div>
          <div class="stats-item"><i class="bi bi-award-fill"></i> Rewards 10</div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" style="height: 750px; object-fit: cover;" alt="Slide 3" loading="lazy">
      <div class="carousel-caption-custom right-caption">
        <h1><b>Why Choose Us?</b></h1>
        <p style="text-align: left;">At The Pet Care Company We go beyond basic pet care — we create a loving, safe, and joyful environment where your pets can thrive. With a team of trained professionals, top-quality products, and personalized services, we ensure your furry friends receive the attention, comfort, and happiness they deserve. Your pet’s well-being is our priority, every step of the way.</p>
        <div class="service-box" style="margin-top: 40px;">
          <div class="service-item"><i class="bi bi-shield-check"></i> Comprehensive Service</div>
          <div class="service-item"><i class="bi bi-cash-stack"></i> Affordable Price</div>
          <div class="service-item"><i class="bi bi-stars"></i> Personalized Care</div>
        </div>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">