<section id="about" class="py-5" style="background: #ffffffff; margin-top:30px;">
    <div class="row text-center g-4">
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <i class="bi bi-question-circle-fill fs-1 text-primary mb-3"></i>
          <h3 class="h5 fw-bold">FAQ</h3>
          <p class="text-muted">Find answers to the most frequently asked questions.</p>
          <a href="#" class="link-primary">Read FAQs</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <i class="bi bi-newspaper fs-1 text-primary mb-3"></i>
          <h3 class="h5 fw-bold">News</h3>
          <p class="text-muted">Stay updated with the latest news and announcements.</p>
          <a href="#" class="link-primary">Latest updates</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <i class="bi bi-headset fs-1 text-primary mb-3"></i>
          <h3 class="h5 fw-bold">Client Support</h3>
          <p class="text-muted">We're here to help you 24/7 with any issues or inquiries.</p>
          <a href="#appointment" class="link-primary">Get help</a>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="py-4 mt-0" style="background:#0f0f12; color:#cfd3d8; width:100%; margin-bottom:-18px">
  <div class="container-fluid">
    <div class="row g-4 align-items-center px-4">
      <div class="col-md-4">
        <div class="d-flex align-items-center mb-2">
          <img src="{{ asset('images/logo.png') }}" alt="Petify logo" style="height:48px" class="me-2">
          <span class="fw-bold">Petify</span>
        </div>
        <small class="text-secondary">Caring for your pets with love and expertise.</small>
      </div>
      <div class="col-md-4">
        <h6 class="text-uppercase text-secondary mb-2">Quick links</h6>
        <ul class="list-unstyled small mb-0">
          <li><a href="{{ route('home') }}" class="link-light text-decoration-none">Home</a></li>
          <li><a href="#cards" class="link-light text-decoration-none">Services</a></li>
          <li><a href="#appointment" class="link-light text-decoration-none">Appointment</a></li>
          <li><a href="#about" class="link-light text-decoration-none">About</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6 class="text-uppercase text-secondary mb-2">Contact</h6>
        <ul class="list-unstyled small mb-3">
          <li><i class="bi bi-envelope me-2"></i>support@petify.local</li>
          <li><i class="bi bi-telephone me-2"></i>+94 764202229</li>
        </ul>
        <div class="d-flex gap-3">
          <a class="link-light" href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a class="link-light" href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a class="link-light" href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
        </div>
      </div>
    </div>
    <hr class="border-secondary border-opacity-25 my-4">
    <div class="text-center small text-secondary">
      © 2025 Petify. All rights reserved.
    </div>
  </div>
</footer>


<style>
  .link-light:hover { color: #ffffff !important; }
  #about .rounded.shadow-sm { transition: transform .25s ease, box-shadow .25s ease; }
  #about .rounded.shadow-sm:hover { transform: translateY(-4px); box-shadow: 0 8px 24px rgba(0,0,0,.08); }
</style>
