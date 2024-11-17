@include('includes.header')

<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="owl-carousel header-carousel position-relative">
    <div style="height:500px;" class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-1.jpg'>">
      <img class="img-fluid" src="img/carousel-1.jpg" alt="">
      <div class="owl-carousel-inner">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-10 col-lg-8">
              <h1 class="display-1 text-white animated slideInDown">Web & Desktop Development Services</h1>
              <p class="fs-5 fw-medium text-white mb-4 pb-3">Web and Desktop Solutions for Modern Businesses with Seamless Integration.</p>
              <a href="{{route('service')}}" class="btn text-white match-color-bg py-3 px-5 animated slideInLeft">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Carousel End -->

<!-- Service Start -->
<div class="container-xxl py-5 index-page">
  <div class="container">
    <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h4 class="section-title">Our Services</h4>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <a href="{{route('e-commerce')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/e-commerce.png" alt="Icon">
              <h3 class="mb-3">E-commerce Solutions</h3>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <a href="{{route('cloud-services')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/cloud-service.png" alt="Icon">
              <h3 class="mb-3">Cloud Services</h3>
            </div>
          </div>
        </a>
      </div>
      
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <a href="{{route('business-automation')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/business-automation.png" alt="Icon">
              <h3 class="mb-3">Business Automation</h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <a href="{{route('data-analytics')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/data-analysis.png" alt="Icon">
              <h3 class="mb-3">Data Analytics</h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp mt-2" data-wow-delay="0.1s">
        <a href="{{route('data-mining')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/data-mining.png" alt="Icon">
              <h3 class="mb-3">Data Mining</h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp mt-2" data-wow-delay="0.3s">
        <a href="{{route('healthcare-solutions')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/healthcare.png" alt="Icon">
              <h3 class="mb-3">Healthcare Solutions</h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp mt-2" data-wow-delay="0.5s">
        <a href="{{route('software-security')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/software-security.png" alt="Icon">
              <h3 class="mb-3">Software Security</h3>
            </div>
          </div>
        </a>
      </div>
      
      <div class="col-lg-3 col-md-6 wow fadeInUp mt-2" data-wow-delay="0.5s">
        <a href="{{route('data-security')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/data-security.png" alt="Icon">
              <h3 class="mb-3">Data Security</h3>
            </div>
          </div>
        </a>
      </div>
      
      <div class="col-lg-3 col-md-6 wow fadeInUp mt-2" data-wow-delay="0.5s">
        <a href="{{route('custom-development')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/web-development.png" alt="Icon">
              <h3 class="mb-3">Custom/Dynamic Website Development</h3>
            </div>
          </div>
        </a>
      </div>
      
      <div class="col-lg-3 col-md-6 wow fadeInUp mt-2" data-wow-delay="0.5s">
        <a href="{{route('ai-solutions')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/ai-solution.png" alt="Icon">
              <h3 class="mb-3">AI Solutions</h3>
            </div>
          </div>
        </a>
      </div>
      
      <div class="col-lg-3 col-md-6 wow fadeInUp mt-2" data-wow-delay="0.5s">
        <a href="{{route('software-maintenance')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/software-maintenance.png" alt="Icon">
              <h3 class="mb-3">Software Maintenance & Support</h3>
            </div>
          </div>
        </a>
      </div>
      
      <div class="col-lg-3 col-md-6 wow fadeInUp mt-2" data-wow-delay="0.5s">
        <a href="{{route('mobile-app')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/mobile-app.png" alt="Icon">
              <h3 class="mb-3">Mobile App Development</h3>
            </div>
          </div>
        </a>
      </div>
      
      <div class="col-lg-3 col-md-6 wow fadeInUp mt-2" data-wow-delay="0.5s">
        <a href="{{route('dev-ops')}}">
          <div class="service-item d-flex position-relative text-center h-100 justify-content-center">
            <div class="service-text p-3">
              <img class="mb-4" src="img/icons/devops.png" alt="Icon">
              <h3 class="mb-3">DevOps</h3>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h4 class="section-title">Testimonial</h4>
      <h1 class="display-5 mb-4">Thousands Of Customers Who Trust Us And Our Services</h1>
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
      <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/eddie.png' alt=''>">
        <p class="fs-5">Thank you for your help with my project! Really appreciate the quick detailed help.</p>
        <h3>Edward Irvin</h3>
        <span class="text-primary">Owner, EMINC</span>
      </div>
      <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/caleb.png' alt=''>">
        <p class="fs-5">Very good developer, Made a very good work in my application.</p>
        <h3>Caleb Tekule</h3>
        <span class="text-primary">Owner, WoozChain</span>
      </div>
      <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/andrew.jpg' alt=''>">
        <p class="fs-5">Great work! Completed quickly! Highly recommended.</p>
        <h3>Andrew Caborn</h3>
        <span class="text-primary">Owner, QuestBarReview</span>
      </div>
    </div>

    <p class="text-center"><a class="btn btn-sm btn-dark" href="{{route('testimonial')}}"><i class="fa fa-plus text-warning me-3"></i>Check More</a></p>    
  </div>
</div>
<!-- Testimonial End -->

@include('includes.footer')