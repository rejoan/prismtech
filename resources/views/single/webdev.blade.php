@include('includes.header')
@include('includes.pheader')
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
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
    
    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/ozstudy.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Frontend & Backend developement</h4>
        <h1 class="display-5 mb-4">CodeIgniter System</h1>
        <p>Scholarship management,Application management
Student Manager,Payment option, Package system.</p>
        <p>More details <a target="_blank" class="btn btn-sm btn-dark" href="https://www.ozstudies.com">Oz Studies</a></p>
      </div>
    </div>
    
    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/billing-voip.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">VOIP Billing System</h4>
        <h1 class="display-5 mb-4">Codeigniter Backend</h1>
        <p>Codeigniter 3 soft switch for billing (VOIP switch)</p>
        <p>Complete billing panel for 3 different role (Admin, Reseller & CDR)</p>
        <p>Massive data processing, performance boosting & API design for adnroid & iOS platform</p>
        <p>CentOS 6 & 7 server administration (PHP, nginx, MySQL, Asterisk etc install, upgrade & configuration)</p>
        <p>More detail <a target="_blank" class="btn btn-sm btn-dark" href="https://www.webcoachbd.com/tech/">Demo</a></p>
      </div>
    </div>

  </div>
</div>
@include('includes.footer')