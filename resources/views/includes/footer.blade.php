
<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <h3 class="text-light mb-4">Address</h3>
        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i><strong class="text-light">123 Street, New York, USA</strong></p>
        <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i><strong class="text-light">+012 345 67890</strong></p>
        <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i><strong class="text-light">info@example.com</strong></p>
        <div class="d-flex pt-2">
          <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
          <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-youtube"></i></a>
          <a class="btn btn-square btn-outline-body me-0" href=""><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <h3 class="text-light mb-4">Services</h3>
        <a class="btn btn-link text-decoration-none" href="{{route('web-design')}}">Web Design</a>
        <a class="btn btn-link text-decoration-none" href="{{route('web-development')}}">Web Development</a>
        <a class="btn btn-link text-decoration-none" href="{{route('chatgpt')}}">chatGPT Development</a>
      </div>
      <div class="col-lg-3 col-md-6">
        <h3 class="text-light mb-4">Quick Links</h3>
        <a class="btn btn-link text-decoration-none" href="{{route('about')}}">About Us</a>
        <a class="btn btn-link text-decoration-none" href="{{route('contact')}}">Contact Us</a>
        <a class="btn btn-link text-decoration-none" href="{{route('terms')}}">Terms & Condition</a>
      </div>
      <div class="col-lg-3 col-md-6">
        <h3 class="text-light mb-4">Newsletter</h3>
        <p class="text-white">Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
        <div class="position-relative mx-auto" style="max-width: 400px;">
          <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
          <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg text-white match-color-bg btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="{{asset('libs/jquery/jquery-3.7.1.min.js')}}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/wow/wow.min.js') }}"></script>
<script src="{{ asset('libs/easing/easing.min.js') }}"></script>
<script src="{{ asset('libs/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('libs/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('libs/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('libs/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('libs/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('libs/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('libs/js/main.js') }}"></script>
</body>

</html>