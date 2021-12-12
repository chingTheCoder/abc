<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>abc emporio tz</title>
      @include("partials/toplinks") 
      <meta name="description" content="meta-description.">
      <link rel="stylesheet" href="/css/styles.css">
      <link rel="stylesheet" href="/css/overwrite.css">
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    </head>
    <body>
      <main>
        <header>
          <!---end of carousel-->
          @include("partials/header") 
              <!-- carousel -->
              <div class="carousel">
                    <div class="carousel_cover carousel_cover_one" data-state="left">
                        <div class="img_carousel_cover">
                            <picture>
                              <source media="(max-width: 480px)" srcset="/images/carousel/cdv.jpg">
                              <source media="(max-width: 768px)" srcset="/images/carousel/noi.jpg">
                              <img src="/images/carousel/slide01.png" style="object-fit: cover;">
                            </picture>
                        </div>
                    </div>
                    <div class="carousel_cover carousel_cover_two" data-state="right">
                        <div class="img_carousel_cover">
                            <picture>
                                <source media="(max-width: 480px)" srcset="/images/carousel/extrasmall.png">
                                <img src="/images/carousel/1c.jpg">
                            </picture>
                        </div>
                  </div>
              </div>  
              <!--end of carosel-->

              <div class="carousel_words">
                    <div class="corousel_words_cover">
                        <div class="carousel_moving_words">
                            <div class="feast_your_eyes">
                                <div>
                                    FEAST YOUR<br/> EYES
                                </div>
                            </div>
                            <div class="bath_wellness">
                                <div>
                                FROM BATH TO<br>WELLNESS  
                                </div>      
                            </div>
                        </div>
                    </div>
              </div>
              <div class="visit_showroom">
                  visit our showroom
              </div>
              <span class="drop_me_down">
                    <i class="fas fa-arrow-down"></i>
              </span>
        </header>
        <!---end of the header -->
        <div id="#content">
        <section id="introduction" style="width: 100%;">
                <div class="inro_black_background">

                </div>

                <div class="background_intro_image">

                </div>

                <div class="background_intro_content">
                      <p>
                      <img src="/images/abc_black.png" style="height: 50px;margin-bottom:10px;"><br/>
                      ABC EMPORIO is a venture of 'ABC GROUP', a synomy for high -end sanitary ware,
                      bathroom fittings, tiles & alliedbuildings materials.ABC GROUP had its inception 
                      in the year 1988 at Taliparamba in kerala, india.Today ABC Group is known as an industry 
                      leader in the business of import and export of varoius luxury products & materials around the world
                      <br/>
                      <a target="_blank" href="/about" style="float: right">Read More</a>
                      </p>
                </div>
        </section>

        <section id="collection">
            <h2>EXPERIENCE BRILLIANCE PRODUCT COLLECTION</h2>
            <div class="row bathroom_collection">
              <aside class="product col-12 col-sm-12 col-md-6 col-lg-6" 
                style="background-image: url('/images/Noki.jpg');
                        background-size: cover;">
              </aside>
              <article class="product col-12 col-sm-12 col-md-6 col-lg-6">
                  <div>
                    <h3>BATHROOM</h3>
                    <hr class="product_hr">
                    <p>we offer intrinsic quality born of the traditions, combining 
                      innovative techniques and timeless design</p>
                  </div>                    
              </article>
            </div>

            <div class="row kitchen_collection">
              <article class="product order-2 col-12 col-sm-12 order-md-1 col-md-6  order-lg-1 col-lg-6">
                <div>
                  <h3>kITCHEN</h3>
                  <hr class="product_hr">
                  <p>We offer a broad diversity of possibilities to match individual aesthetic 
                    and functional requirements. Highest flexibility, clear from language 
                    complemented by selection of 300 different premium finishes makes 
                    every kitchen unique.</p>
                </div>
              </article>
              <aside class="product order-1 col-12 col-sm-12 order-md-2 col-md-6  order-lg-2 col-lg-6" 
                style="background-image: url('/images/gama.jpg');
                  background-size: cover;">
              </aside>
            </div>

        </section>
        <section id="surface_and_tiles">
                <div>
                  <h1 class="inspire">SURFACE & TILES</h1>
                  <a href="/surface" class="visit" aria-label="visit surface and tiles">View products</a>
                </div>
        </section>
        <section id="featured_products">
            <div class="inner_featured_products">
                  <div>
                          <h2 style="font-weight: bold;">FEATURED PRODUCTS</h2>
                          <p>visit any of our showrooms, our experts will help you to design the home of your dream</p>
                          <div><span style="font-size: 1.5rem">SHOWROOMS</span><a class="conn" style="font-size: 2rem;color: darkgray;"href="/showroom"><i class="far fa-arrow-alt-circle-right"></i></a></div>
                  </div>
                  <div>
                        <div class="featured_images_cover">
                              <div class="f_image">
                                 <img src="/images/noken.jpg" alt="">           
                              </div>

                              <div class="f_image">
                                <img src="/images/jean.jpg" alt="">
                              </div>

                              <div class="f_image">
                                <img src="/images/sanibell.jpg" alt="">
                              </div>

                              <div class="f_image">
                                <img src="/images/reginox.jpeg" alt="">
                              </div>
                        </div>
                  </div>
            </div>
        </section>
        <!---end of featured products----->
        <section id="our_trusted_brands">
              <h4>Our Trusted Brands</h4>
              <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://www.bobrick.com/" target="_blank">
                          <img src="/images/logos/bobrick.svg" class="brand_image" alt="bobrick"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.deko.com/" target="_blank">
                          <img src="/images/logos/deko.svg" class="brand_image" alt="deko"></a>
                    </div>
                    <div class="swiper-slide">
                       <a href="https://www.jaquarlighting.com/" target="_blank">
                        <img src="/images/logos/jaquar.svg" class="brand_image" alt="jaguar"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.us.kohler.com/us/" target="_blank">
                        <img src="/images/logos/kohler.svg" class="brand_image" alt="kohler"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.ecoceramic.es/index.html" target="_blank">
                        <img src="/images/logos/ecoceramics.svg" class="brand_image" alt="eco ceramics"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.genwec.com/" target="_blank">
                        <img src="/images/logos/GENWEC.svg" class="brand_image" alt="genwec"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" target="_blank">
                        <img src="/images/logos/becken.svg" class="brand_image" alt="eco ceramics"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" target="_blank">
                        <img src="/images/logos/SEA.svg" class="brand_image" alt="sea"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://keros.com/" target="_blank">
                        <img src="/images/logos/keros.png" class="brand_image" alt="eco ceramics"></a>
                    </div>
                  </div>
               </div>
        </section>
        </div>
      </main>
@include("partials/footer")   
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
          480: {
            slidesPerView: 2,
            spaceBetween: 5,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 10,
          },
        },
      });
    </script>
<script>
      
      let moving_words = document.querySelector(".carousel_moving_words")
let drop_me_down = document.querySelector(".drop_me_down")

drop_me_down.addEventListener("click", function () {
    let pos = document.querySelector("#collection").offsetTop
    window.scrollTo({
        top: pos,
        behavior : "smooth"
    })
})

        let carousel_one = document.querySelector(".carousel_cover_one")
        let carousel_two = document.querySelector(".carousel_cover_two")
        let setMe = setInterval(function () {

            if (carousel_two.getAttribute('data-state') == 'right') {

                carousel_two.setAttribute('data-state', 'left')
                carousel_one.setAttribute('data-state', 'right')

                carousel_two.style.transition = 'transform .3s ease-in'
                carousel_one.style.transition = 'transform 1s ease-in'

                carousel_two.style.transform = 'translateX(-100%)'
                moving_words.style.transform = 'translateX(-100%)'
                carousel_one.style.transitionDelay = '2s'
                carousel_one.style.transform = 'translateX(100%)'

                carousel_one.style.zIndex = '100'
                carousel_two.style.zIndex = '300'

            }

            else {

                carousel_two.style.zIndex = '100'
                carousel_one.style.zIndex = '300'

                carousel_two.setAttribute('data-state', 'right')
                carousel_one.setAttribute('data-state', 'left')

                carousel_one.style.transition = 'transform .3s ease-in'
                carousel_two.style.transition = 'transform 1s ease-in'

                carousel_one.style.transform = 'translateX(0)'
                moving_words.style.transform = 'translateX(0)'
                carousel_two.style.transitionDelay = '2s'
                carousel_two.style.transform = 'translateX(0)'

            }
            
        }, 4500)

</script>
</body>
</html>