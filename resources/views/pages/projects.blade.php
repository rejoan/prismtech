@include('includes.header')
@include('includes.pheader')
<h4 class="text-center m-0 display-5 font-verdana">Portfolios & Feedback</h4>
<div class="container-xxl pb-5">
  <div class="container">
    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/chrome-ext.jpg')}}" alt="">
        <h4 class="section-title">Chrome Extension</h4>
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h3 class="font-verdana">What values did it bring?</h3>
        <p>Comprehensive chrome extension for fetch data from API & then manipulate admin panel data periodically. Redeem/Recharge account. Data exchange between tab & extension popup</p>
        <h3 class="font-verdana">Technologies</h3>
        <p>
        <span class="badge rounded-pill text-bg-secondary">JS</span>
        <span class="badge rounded-pill text-bg-secondary">API</span>
        </p>
        <h3 class="font-verdana">Client's Feedback</h3>
        <p><img width="50" class="img-fluid border rounded" src="{{asset('img/robert.png')}}" alt=""> Excellent extension created</p>
      </div>
    </div>

    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/pockettalk.jpg')}}" alt="">
        <h4 class="section-title">Language Learning System</h4>
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h3 class="font-verdana">What values did it bring?</h3>
        <p>Rosetta Stone Language score API integration. Oauth2 API development for authorization in laravel. Advanced Vuejs implementation for microphone setting</p>
        <h3 class="font-verdana">Technologies</h3>
        <p>
        <span class="badge rounded-pill text-bg-secondary">Laravel</span>
        <span class="badge rounded-pill text-bg-secondary">PHP</span>
        <span class="badge rounded-pill text-bg-secondary">VueJS</span>
        <span class="badge rounded-pill text-bg-secondary">MySQL</span>
        </p>
        <h3 class="font-verdana">Client's Feedback</h3>
        <p><img width="50" class="img-fluid border rounded" src="{{asset('img/sourcenext.png')}}" alt=""> It was our web version of pockettalk device. We are really happy how complexity solved by the team</p>
      </div>
    </div>

    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/wp-plugin.jpg')}}" alt="">
        <h4 class="section-title">WordPress Data Sync Plugin</h4>
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h3 class="font-verdana">What values did it bring?</h3>
        <p>Wordpress Custom post type development including search feature. Data syncing facility with API</p>
        <p>More detail: <a target="_blank" class="btn btn-sm btn-dark" href="https://github.com/rejoan/syncEvents">GIT Repo</a></p>
        <h3 class="font-verdana">Technologies</h3>
        <p>
        <span class="badge rounded-pill text-bg-secondary">WordPress</span>
        <span class="badge rounded-pill text-bg-secondary">API</span>
        <span class="badge rounded-pill text-bg-secondary">JS</span>
        <span class="badge rounded-pill text-bg-secondary">MySQL</span>
        </p>
        <h3 class="font-verdana">Client's Feedback</h3>
        <p>Tremendous plugin created by prismtechub. Sync our two system & made extensive searching facility</p>
      </div>
    </div>

  </div>
</div>
@include('includes.footer')