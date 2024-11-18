@include('includes.header')
@include('includes.pheader')
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/devops1.png')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Business Plan Software</h4>
        <p>CI/CD works: git to plesk panel deployment</p>
      </div>
    </div>
    
    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/pockettalk.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Language Learning System</h4>
        <p>AWS deployment</p>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')