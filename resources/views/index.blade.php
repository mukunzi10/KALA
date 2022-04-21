  @include('header')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>KALA</span> platform</h2>
          <p class="animate__animated animate__fadeInUp">KaLa legal advocacy department is missioned  to end Injustices and impunity that exists due to the Absence of legal advocacy and lack of financial means to access judicicial system that legally hold accountable criminals.it also employs alternative dispute resolution strategies like,mediation,reconciliation to solve conflicts our society encounters in civil matters.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Donate Now</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">KALA Means</h2>
          <p class="animate__animated animate__fadeInUp">KALA is an organization of Kivu communities worldwide, united advocate for justice, educate and reconcile the people for development. It is founded on the values impartiality,perseverance,development.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Donate Now</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Dufashe buri wese aradukeneye</h2>
          <p class="animate__animated animate__fadeInUp">Platform  for Rwandan. We here for helping Rwandan citizen who attend in justice cases now you can help anyone there.your help can be financial or advices.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Donate Now</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">


        <div class="row">
            @foreach ($data as $value)

          <div class="col-md-6 col-lg-3  d-flex align-items-stretch" data-aos="fade-up" style="text-indent:justify">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">{{$value['title']}}</a></h4>
              <p><?php
              echo Str::substr($value['description'], 0, 100)."..."
              ?></p>
              <div class=""><a href="{{'more'}}" >Read More</i></a></div>

              <div>
              <input type="button" class="btn-info btn-get-started   text-white" value="found this case">
              </div>


            </div>
          </div>

          @endforeach




        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/images/a2.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">”Where Justice can be Justified!”</a></h4>
              <p class="description">KaLa legal advocacy department is missioned  to end Injustices and impunity that exists due to the Absence of legal advocacy and lack of financial means to access judicicial system that legally hold accountable criminals.it also employs alternative dispute resolution strategies like,mediation,reconciliation to solve conflicts our society encounters in civil matters</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">KALA Support</a></h4>
              <p class="description">KALA is an organization of Kivu communities worldwide, united advocate for justice, educate and reconcile the people for development. It is founded on the values impartiality,perseverance,development.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->
  @include ('footer')
