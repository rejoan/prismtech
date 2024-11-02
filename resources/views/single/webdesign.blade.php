@include('includes.header')
@include('includes.pheader')
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
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
        <img class="img-fluid border" src="{{asset('img/islamhouse.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Islamhouse Project</h4>
        <p>Responsive Design using vueJS (Vuetify) from XD.</p>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')