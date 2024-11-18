@include('includes.header')
@include('includes.pheader')
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/chatgpt.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">chatGPT</h4>
        <h1 class="display-5 mb-4">chatGPT OpenAI Assistant API</h1>
        <p>openAI chatGPT assistant API implementation including live chat window, big file analyzer window, chat history management etc.</p>
      </div>
    </div>
    
    <div class="row g-5 mt-2">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/laravel-ai.jpg')}}" alt="">
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Laravel + chatGPT</h4>
        <p>Collaborative business plan software for entrepreneurs, entrepreneurs and startuppers. Integrated massive openAI chatGPT AI into project.CI/CD works for automated deployment (github to plesk)</p>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')