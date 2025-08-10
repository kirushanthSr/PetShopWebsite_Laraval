<section id="appointment" class="py-0">
  <div class="container-fluid px-0">
    <div class="row g-0">
      <div class="col-lg-6 d-flex align-items-center text-white p-5" style="min-height: 420px; background: linear-gradient(135deg, rgba(197,122,165,.92), rgba(60,9,108,.92)), url('{{ asset('images/5.jpg') }}') center/cover no-repeat;">
        <div class="w-100">
          <h2 class="display-5 fw-bold mb-3">Book an Appointment</h2>
          <p class="mb-4 lead">Your pet’s health matters. Choose a convenient date and tell us how we can help.</p>
          <ul class="list-unstyled small mb-0">
            <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i>Certified vets</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i>Flexible scheduling</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i>Safe & caring facility</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-6 bg-light p-4 p-md-5">
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('appointment.submit') }}" class="needs-validation" novalidate>
          @csrf
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
            @error('phone') <div class="text-danger small">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" value="{{ old('date') }}" required>
            @error('date') <div class="text-danger small">{{ $message }}</div> @enderror
          </div>

          <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="4">{{ old('message') }}</textarea>
            @error('message') <div class="text-danger small">{{ $message }}</div> @enderror
          </div>

          <button class="btn btn-primary" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
