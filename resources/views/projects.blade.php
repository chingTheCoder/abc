<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ABC EMPORIOSS TZ | PROJECTS</title>
      <meta name="description" content="meta-description.">
      @include("partials/toplinks") 
      <link
      rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
      <link rel="stylesheet" href="/css/styles.css">
      <link rel="stylesheet" href="/css/projects.css">
    </head>
    <body>
        <header>
        @include("partials/header") 
        </header>
        
        <section id="projects_intro" class="row">
            <div class="project_header col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div>
                            <h2>OUR PRESTIGIOUS <br/> PROJECTS</h2>
                            <P>insistence on honesty 
                                and earnestness<br/>in keeping promises</P>
                    </div>
            </div>
            <div class="project_img col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8" 
                style="background-image: url('/images/city.png');
                  background-size: cover">
                <div>
                    CITY LODGE, DAR ES SALAAM
                </div>
            </div>
        </section>
        <h2 id="other_project_title">OTHER PROJECTS</h2>
        <hr>
        <div class="cover-swapper">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <figure>
                        <img src="/images/projects/mikocheni.jpg" alt="">
                        <figcaption>MIKOCHENI PLAZA</figcaption> 
                        <p>Dar es salaam</p>
                    </figure> 
                  </div>
                  <div class="swiper-slide">
                    <figure>
                        <img src="/images/projects/melia.jpg" alt="">
                        <figcaption>MELIA HOTEL</figcaption>
                        <p>Zanzibar</p> 
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                        <img src="/images/projects/palm.jpg" alt="">
                        <figcaption>PALM VILLAGE SHOPPING & MALL</figcaption>
                        <p>Dar es salaam</p> 
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                        <img src="/images/projects/green_view.png" alt="">
                        <figcaption>GREEN VIEW HOTEL</figcaption>
                        <p>Kigoma</p> 
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                        <img src="/images/projects/royal _resort.jpg" alt="">
                        <figcaption>ROYAL BEACH RESORT</figcaption>
                        <p>Zanzibar</p> 
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                        <img src="/images/projects/holiday_inn.jpg" alt="">
                        <figcaption>HOLIDAY INN</figcaption>
                        <p>Dar es salaam</p> 
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                        <img src="/images/projects/tanzanite.jpg" alt="">
                        <figcaption>TANZANITE RESIDENCE</figcaption>
                        <p>Dar es salaam</p> 
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                        <img src="/images/projects/sea.jpg" alt="">
                        <figcaption>SEA CLIFF HOTEL</figcaption>
                        <p>Dar es salaam</p> 
                    </figure>
                  </div>
                </div>
                <br/><br/>
                <div class="swiper-pagination"></div>
              </div>
        </div>
        <!---end of the header -->
    @include("partials/footer") 
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 10,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 5,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
        },
      });
    </script>
    </body>
  </html>