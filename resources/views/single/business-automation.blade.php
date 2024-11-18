@include('includes.header')
@include('includes.pheader')
<div class="container-xxl pb-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/pockettalk.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Language Learning System</h4>
        <p>Rosetta Stone Language score API integration. Oauth2 API development for authorization in laravel. Advanced Vuejs implementation for microphone setting</p>
      </div>
    </div>
    
    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/chrome-ext.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Chrome Extension</h4>
        <h1 class="display-5 mb-4">Live Data Manipulation</h1>
        <p>Comprehensive chrome extension for fetch data from API & then manipulate admin panel data periodically. Redeem/Recharge account. Data exchange between tab & extension popup.</p>
        <p>More details <a target="_blank" class="btn btn-sm btn-dark" href="https://github.com/rejoan/SyncTension">GIT Repo</a></p>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')