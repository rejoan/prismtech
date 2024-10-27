@include('includes.header')
@include('includes.pheader')
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
@include('includes.footer')