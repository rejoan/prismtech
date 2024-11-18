@include('includes.header')
@include('includes.pheader')
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/wordpress-2.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">The Holly Effect</h4>
        <p>Wordpress LMS</p>
      </div>
    </div>

    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/ozstudy.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">OzStudies</h4>
        <h1 class="display-5 mb-4">CodeIgniter System</h1>
        <p>OzStudies platform offers information on courses, scholarships, student community engagement, and a wealth of resources to help individuals pursue their educational and career goals in Australia.</p>
        <p>More details <a target="_blank" class="btn btn-sm btn-dark" href="https://www.ozstudies.com">Oz Studies</a></p>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')