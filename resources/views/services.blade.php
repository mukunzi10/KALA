  @include('header')
  <main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Services</h2>
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Our Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

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
              <h4 class="title"><a href="#">Support Information </a></h4>
              <p class="description">KaLa legal advocacy department is missioned  to end Injustices and impunity that exists due to the Absence of legal advocacy and lack of financial means to access judicicial system that legally hold accountable criminals.it also employs alternative dispute resolution strategies like,mediation,reconciliation to solve conflicts our society encounters in civil matters</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/images/logo.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Mission</a></h5>
                <p class="card-text">KaLa legal advocacy department is missioned  to end Injustices and impunity that exists due to the Absence of legal advocacy and lack of financial means to access judicicial system that legally hold accountable criminals.it also employs alternative dispute resolution strategies like,mediation,reconciliation to solve conflicts our society encounters in civil matters.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/images/a2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Plan</a></h5>
                <p class="card-text">KALA is an organization of Kivu communities worldwide, united advocate for justice, educate and reconcile the people for development. It is founded on the values impartiality,perseverance,development.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->
  @include('footer')
