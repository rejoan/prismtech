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
<!--    <div class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-2.jpg'>">
      <img class="img-fluid" src="img/carousel-2.jpg" alt="">
      <div class="owl-carousel-inner">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-10 col-lg-8">
              <h1 class="display-1 text-white animated slideInDown">Best Architecture And Interior Design Services</h1>
              <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
              <a href="" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-3.jpg'>">
      <img class="img-fluid" src="img/carousel-3.jpg" alt="">
      <div class="owl-carousel-inner">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-10 col-lg-8">
              <h1 class="display-1 text-white animated slideInDown">Best Architecture And Interior Design Services</h1>
              <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
              <a href="" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>-->
  </div>
</div>
<!-- Carousel End -->


<!-- Facts Start -->
<div class="container-xxl py-5">
  <div class="container pt-5">
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="fact-item text-center bg-light h-100 p-5 pt-0">
          <div class="fact-icon">
            <img src="img/icons/icon-2.png" alt="Icon">
          </div>
          <h3 class="mb-3">Design Approach</h3>
          <p class="mb-0">Understanding user needs and goals. Next, comes the blueprint stage, wireframes and mockups guiding the layout and user flow. Finally, you ensure it's responsive and accessible, so every visitor feels welcome, no matter their device or abilities. It’s a blend of art and science, all about making a user’s journey seamless and delightful.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="fact-item text-center bg-light h-100 p-5 pt-0">
          <div class="fact-icon">
            <img src="img/icons/icon-3.png" alt="Icon">
          </div>
          <h3 class="mb-3">Innovative Solutions</h3>
          <p class="mb-0">Think AI-driven chatbots for instant customer service, or progressive web apps (PWAs) that give a native app experience without needing downloads. These cutting-edge approaches are reshaping how developers build and maintain modern websites, making them faster, more efficient, and user-friendly.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="fact-item text-center bg-light h-100 p-5 pt-0">
          <div class="fact-icon">
            <img src="img/icons/icon-4.png" alt="Icon">
          </div>
          <h3 class="mb-3">Project Management</h3>
          <p class="mb-0">Gathering requirements and defining the project scope. Agile methodologies, like Scrum for iterative development. Effective communication is key, ensuring that the team stays on the same page. Milestones are tracked, and progress is continuously monitored, allowing for flexibility and adjustments as needed.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Facts End -->

<!-- Service Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h4 class="section-title">Our Services</h4>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item d-flex position-relative text-center h-100">
          <img class="bg-img" src="img/service-1.jpg" alt="">
          <div class="service-text p-5">
            <img class="mb-4" src="img/icons/icon-5.png" alt="Icon">
            <h3 class="mb-3">Web Design</h3>
            <p class="mb-4">We create stunning, responsive websites that reflect your brand’s identity and drive business growth. Whether you need a sleek corporate site or a vibrant e-commerce platform, we’ve got you covered. Transform your online presence with us today.</p>
            <a class="btn" href="{{route('web-design')}}"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item d-flex position-relative text-center h-100">
          <img class="bg-img" src="img/service-2.jpg" alt="">
          <div class="service-text p-5">
            <img class="mb-4" src="img/icons/icon-6.png" alt="Icon">
            <h3 class="mb-3">Web Application Development</h3>
            <p class="mb-4">We bring your ideas to life with custom web applications designed to fit your business needs perfectly. Our skilled developers use the latest technologies to create robust, scalable, and user-friendly applications that drive efficiency and enhance user experiences.</p>
            <a class="btn" href="{{route('web-development')}}"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item d-flex position-relative text-center h-100">
          <img class="bg-img" src="img/service-3.jpg" alt="">
          <div class="service-text p-5">
            <img class="mb-4" src="img/icons/icon-7.png" alt="Icon">
            <h3 class="mb-3">Desktop Application</h3>
            <p class="mb-4">We excel in creating high-performance desktop applications tailored to meet your business requirements. Our expert developers harness the power of the latest technologies to build secure, efficient, and user-friendly software.</p>
            <a class="btn" href="{{route('desktop-development')}}"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item d-flex position-relative text-center h-100">
          <img class="bg-img" src="img/service-4.jpg" alt="">
          <div class="service-text p-5">
            <img class="mb-4" src="img/icons/icon-8.png" alt="Icon">
            <h3 class="mb-3">chatGPT Development</h3>
            <p class="mb-4">We specialize in leveraging the power of AI to create advanced conversational solutions. From chatbots to virtual assistants, we tailor each solution to fit your business needs, ensuring seamless integration and exceptional user experiences.</p>
            <a class="btn" href="{{route('chatgpt')}}"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item d-flex position-relative text-center h-100">
          <img class="bg-img" src="img/service-5.jpg" alt="">
          <div class="service-text p-5">
            <img class="mb-4" src="img/icons/icon-9.png" alt="Icon">
            <h3 class="mb-3">WordPress Development</h3>
            <p class="mb-4">We're experts in crafting bespoke WordPress websites that elevate your online presence. From custom themes and plugins to seamless e-commerce solutions, we ensure your WordPress site stands out and performs flawlessly.</p>
            <a class="btn" href="{{route('wordpress-development')}}"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item d-flex position-relative text-center h-100">
          <img class="bg-img" src="img/service-6.jpg" alt="">
          <div class="service-text p-5">
            <img class="mb-4" src="img/icons/icon-10.png" alt="Icon">
            <h3 class="mb-3">Laravel Application</h3>
            <p class="mb-4">We excel in developing powerful, scalable web applications using the Laravel framework. From complex enterprise applications to dynamic e-commerce sites, we tailor each project to meet your specific needs.</p>
            <a class="btn" href="{{route('laravel-development')}}"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
          </div>
        </div>
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