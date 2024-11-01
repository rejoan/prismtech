@include('includes.header')
@include('includes.pheader')
<!-- Contact Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h4 class="section-title">Contact Us</h4>
      <h1 class="display-5 mb-4">If You Have Any Query, Please Feel Free Contact Us</h1>
    </div>
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="d-flex flex-column justify-content-between h-100">
          <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
              <i class="fa fa-map-marker-alt text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2">Address</p>
              <h3 class="mb-0">123 Street, New York, USA</h3>
            </div>
          </div>
          <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
              <i class="fa fa-phone-alt text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2">Call Us Now</p>
              <h3 class="mb-0">+012 345 6789</h3>
            </div>
          </div>
          <div class="bg-light d-flex align-items-center w-100 p-4">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
              <i class="fa fa-envelope-open text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2">Mail Us Now</p>
              <h3 class="mb-0">info@example.com</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        @if (session('msg'))
        <div class="alert alert-success">
          {{ session('msg') }}
        </div>
        @endif
        <form action="{{route('contact-submit')}}" method="POST">
          @csrf
          <div class="row g-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input name="sender_name" type="text" class="form-control shadow-none" id="name" placeholder="Your Name" value="{{ old('sender_name') }}">
                @error('sender_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="name">Your Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input name="email" type="email" class="form-control shadow-none" id="email" placeholder="Your Email" value="{{ old('email') }}">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="email">Your Email</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input name="subject" type="text" class="form-control shadow-none" id="subject" placeholder="Subject" value="{{ old('subject') }}">
                <label for="subject">Subject</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea name="message" class="form-control shadow-none" placeholder="Leave a message here" id="message" style="height: 100px">{{ old('message') }}</textarea>
                <label for="message">Message</label>
              </div>
            </div>
            <div class="col-12">
              <input name="submit" class="btn btn-primary w-100 py-3" type="submit" value="Send Message">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->
@include('includes.footer')