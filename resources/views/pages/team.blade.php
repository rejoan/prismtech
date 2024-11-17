@include('includes.header')
@include('includes.pheader')
<h4 class="text-center m-0 display-5 pb-2 font-verdana">Developers Profile</h4>
<div class="container-xxl pb-5">
  <div class="container">
    <div class="row g-5 mt-2 border">
      <div class="col-lg-2 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/team-1.jpg')}}" alt="">
        <h4 class="mt-2">Md. Mainuddin</h4>
        <p class="">Chief Software Architect</p>
      </div>
      <div class="col-lg-10 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Career Highlights</h4>
        <p>PhD in Computer Science with a focus on IoT security, utilizing Machine Learning and Deep Learning techniques to identify and analyze compromised devices in smart networks.</p>
        <p>Experienced software engineer with 22+ years in architecting and developing large-scale, efficient, and tailored business and enterprise applications, delivering high-quality, reliable solutions that drive business success.</p>
        <p>Proficient in full-stack development, with strong expertise in AWS Cloud technologies, front-end frameworks, and back-end systems, enabling the creation of robust, scalable, and innovative solutions.</p>
        <p> Collaborative team player and leader with exceptional problem-solving abilities, strong communication skills, and a track record of delivering high-quality results.</p>
        <h4 class="section-title">Skill Set</h4>
        <p>
          <span class="badge rounded-pill text-bg-secondary">AWS</span>
          <span class="badge rounded-pill text-bg-secondary">IoT</span>
          <span class="badge rounded-pill text-bg-secondary">Data Mining</span>
          <span class="badge rounded-pill text-bg-secondary">ASP.NET</span>
          <span class="badge rounded-pill text-bg-secondary">Elasticsearch</span>
          <span class="badge rounded-pill text-bg-secondary">XGBoost</span>
          <span class="badge rounded-pill text-bg-secondary">Random Forest</span>
          <span class="badge rounded-pill text-bg-secondary">Matplotlib</span>
          <span class="badge rounded-pill text-bg-secondary">Scikit-Learn</span>
          <span class="badge rounded-pill text-bg-secondary">Seaborn</span>
          <span class="badge rounded-pill text-bg-secondary">Deep Learning</span>
          <span class="badge rounded-pill text-bg-secondary">Autoencoders</span>
          <span class="badge rounded-pill text-bg-secondary">SPRT</span>
          <span class="badge rounded-pill text-bg-secondary">Software Architectural Design</span>
          <span class="badge rounded-pill text-bg-secondary">Team Lead</span>
          <span class="badge rounded-pill text-bg-secondary">DB Design</span>
        </p>
      </div>

      <div class="col-sm-12 mt-1 mb-2">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed text-bg-light shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Highlighted Projects
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse row my-2" data-bs-parent="#accordionFlush1">
              <div class="row">
                <div class="col-lg-6">
                  <img class="img-fluid border" src="{{asset('img/autoencoder.png')}}" alt="">
                </div>
                <div class="col-lg-6">
                  <h4 class="section-title">Detecting Compromised IoT Devices Using Deep Autoencoders and SPRT</h4>
                  <p>Compromised IoT devices are the main origin of botnet attacks. Recent DDoS and other botnet attacks have caused significant harm, and have been facilitated by the use of IoT-based botnets. Due to the limited human interaction required for IoT devices to function, it can be difficult to monitor all of their activities. Therefore, it is crucial to identify compromised devices within a network. My model uses Deep autoencoder to learn the regular network behavior of IoT devices in a network and continue monitoring the network. If a device is compromised, it can be detected as fast as 7 network packets with an accuracy up to 99.98%.</p>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-lg-6">
                  <img class="img-fluid border" src="{{asset('img/iot-detection.png')}}" alt="">
                </div>
                <div class="col-lg-6">
                  <h4 class="section-title">IoT Device Identification Based on Network Traffic Characteristics</h4>
                  <p>IoT device identification plays a critical role in monitoring and improving the performance and security of IoT devices. I developed iotID, an effective machine-learning (ML) based IoT device identification scheme. In iotID, 70 features of TCP flows from three complementary aspect were collected: remote network servers and port numbers, packet-level traffic characteristics such as packet inter-arrival times, and flow-level traffic characteristics such as flow duration. We evaluated the performance of iotID based on network traffic collected on a typical smart home environment consisting of both IoT and non-IoT devices, which showed that iotID can achieve a balanced accuracy of above 99%.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row g-5 mt-2 border">
      <div class="col-lg-2 wow fadeIn" data-wow-delay="0.1s">
        <img class="img-fluid border" src="{{asset('img/team-1.jpg')}}" alt="">
        <h4 class="mt-2">Rejoanul Alam</h4>
        <p class="">Sr. Software Engineer</p>
      </div>
      <div class="col-lg-10 wow fadeIn" data-wow-delay="0.5s">
        <h4 class="section-title">Career Highlights</h4>
        <p>As a Full Stack PHP Developer, I bring a wealth of experience in crafting dynamic and robust web applications. My expertise in creating efficient, scalable code that powers everything from small business websites to complex enterprise systems.</p>
        <p>I work by taking ownership of projects. Able to handle multiple projects together. If you need a really hard working, talented and honest developer whom you can trust, then you are in right place.</p>
        <h4 class="section-title">Skill Set</h4>
        <p>
          <span class="badge rounded-pill text-bg-secondary">PHP</span>
          <span class="badge rounded-pill text-bg-secondary">Laravel</span>
          <span class="badge rounded-pill text-bg-secondary">MySQL</span>
          <span class="badge rounded-pill text-bg-secondary">VueJS</span>
          <span class="badge rounded-pill text-bg-secondary">CI/CD</span>
          <span class="badge rounded-pill text-bg-secondary">AI chatGPT</span>
        </p>
      </div>

      <div class="col-sm-12 mt-1 mb-2">
        <div class="accordion accordion-flush" id="accordionFlush2">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed text-bg-light shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-rejoan" aria-expanded="false" aria-controls="flush-rejoan">
                Highlighted Projects
              </button>
            </h2>
            <div id="flush-rejoan" class="accordion-collapse collapse my-2" data-bs-parent="#accordionFlush2">
              <div class="row">
                <div class="col-lg-6">
                  <img class="img-fluid border" src="{{asset('img/pockettalk.jpg')}}" alt="">
                </div>
                <div class="col-lg-6">
                  <h4 class="section-title">PocketTalk Language Learning System</h4>
                  <p>Rosetta Stone Language score API integration. Oauth2 API development for authorization in laravel. Advanced Vuejs implementation for microphone setting</p>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-lg-6">
                  <img class="img-fluid border" src="{{asset('img/chatgpt.jpg')}}" alt="">
                </div>
                <div class="col-lg-6">
                  <h4 class="section-title">chatGPT OpenAI Assistant API</h4>
                  <p>openAI chatGPT assistant API implementation including live chat window, big file analyzer window, chat history management etc</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')