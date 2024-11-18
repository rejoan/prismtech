@include('includes.header')
@include('includes.pheader')
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/wp-plugin.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Data Mining</h4>
        <p>Wordpress Custom post type development including search feature. Data mining facility with API from 3rd party source</p>
        <p>More detail: <a target="_blank" class="btn btn-sm btn-dark" href="https://github.com/rejoan/syncEvents">GIT Repo</a></p>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')