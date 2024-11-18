@include('includes.header')
@include('includes.pheader')
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/tripplesevens.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">TrippleSevens</h4>
        <p>Developed 6+ plugin for new games. Massive admin backend data management system for game data manage.Front end game tracking by ajax</p>
      </div>
    </div>

    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/mangahot.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Mangahot</h4>
        <p>Web Design using vueJS.</p>
      </div>
    </div>

    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/wp-plugin.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Plugin Development</h4>
        <p>Wordpress Custom post type development including search feature. Data syncing facility with API</p>
        <p>More detail: <a target="_blank" class="btn btn-sm btn-dark" href="https://github.com/rejoan/syncEvents">GIT Repo</a></p>
      </div>
    </div>

  </div>
</div>
@include('includes.footer')