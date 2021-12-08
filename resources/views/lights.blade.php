<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ABC EMPORIO TZ | light</title>
      <meta name="description" content="meta-description.">
      @include("partials/toplinks")
      <link rel="stylesheet" href="/css/styles.css">
      <link rel="stylesheet" href="/css/light.css">
    </head>
    <body>
        <header>
        @include("partials/header")
           <div class="banner_info row">
                <div class="banner_description">
                    <div class="banner_description_inner">
                         <h1>JAQUAR lIGHT'S</h1>
                    <p>LIGHTS FOR TODAY'S
                        MODERN HOME
                    </p>
                    <hr>
                    </div>
                </div>
                <div class="dark_background col-xl-3 col-lg-4 col-md-4 order-2 order-md-1 order-lg-1 order-xl-1">

                </div>
                <div class="background_picture col-xl-9 col-lg-8 col-md-8 order-1 order-md-2 order-lg-2 order-xl-2" 
                    style="background-image: url('/images/ROCIO.jpg');">

                </div> 
           </div>
        </header>
        <section class="site_intro">
            <h2>LIGHT</h2>
            <p>Discover the best global lighting designs and craftsmanship with our comprehensive range of
                 technologically advanced professional lighting products. 
                 Our lighting solutions are designed keeping your space in mind, which is 
                 essential in creating aesthetically pleasing urban & professional environments.
            </p>
        </section>
        
        <section id="light_images">
            <div id="first">
              <img src="/images/light4.png" alt="on board light">
            </div>
            <div class="the_rest">
              <img src="/images/light3.png" alt="on board light">
            </div>
            <div class="the_rest">
              <img src="/images/light2.png" alt="on board light">
            </div>
          <div class="the_rest ls">
              <img src="/images/light1.png" alt="on board light">
          </div>
        </section>
        <!---end of the header -->
        @include("partials/footer")
    </body>
  </html>