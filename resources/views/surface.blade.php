<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ABC EMPORIO TZ | TILES</title>
      <meta name="description" content="meta-description.">
      @include("partials/toplinks") 
      <link rel="stylesheet" href="/css/styles.css">
      <link rel="stylesheet" href="/css/tiles.css">
    </head>
    <body>
        <header>
        @include("partials/header") 
           <div class="banner_info row">
                <div class="banner_description">
                    <div class="banner_description_inner">
                         <h1>TILES</h1>
                    <p>We are having the collection of Ceramic, 
                        Vitrified, GVT finish and Rustic finish wall 
                        & floor tiles from the smallest to biggest 
                        available sizes.
                    </p>
                    <hr>
                    </div>
                </div>
                <div class="dark_background col-xl-3 col-lg-4 col-md-4 order-2 order-md-1 order-lg-1 order-xl-1">

                </div>
                <div class="background_picture col-xl-9 col-lg-8 col-md-8 order-1 order-md-2 order-lg-2 order-xl-2" 
                    style="background-image: url('/images/surface1.png');
                        background-position: bottom right;">

                </div> 
           </div>
        </header>
        <section class="site_intro">
            <h2>SURFACE FINISHING</h2>
            <p>ABC Group possess a wide variety collection of surface finishing products, which in turn give colourful 
                long lasting life to your floor and walls. You can choose from a list of internationally recognized brands 
                and we have the exclusive display of the same items across our showrooms
            </p>
        </section>
        <section id="tile_brands">
            <div id="list_of_tiles">
                <h2>TILE BRANDS</h2>
                <ul>
                    <li>
                        <a href="https://www.porcelanosa.com/" target="_blank">Porcelanosa</a>
                    </li>
                    <li>
                        <a href="https://www.granitogres.in" target="_blank">Granitogres</a>
                    </li>
                    <li>
                        <a href="https://keros.com/en/" target="_blank">Keros</a>
                    </li>
                    <li>
                        <a href="#">Viceroy</a>
                    </li>
                    <li>
                        <a href="#">Navarti</a>
                    </li>
                </ul>
            </div>
            <div id="images_of_tiles">
                    <div class="tile_image">
                        <img src="/images/surface1.png">
                    </div>
                    <div class="tile_image">
                        <img src="/images/surface2.png">
                    </div>
                    <div class="tile_image">
                        <img src="/images/surface3.png">
                    </div>
                    <div class="tile_image">
                        <img src="/images/surface4.png">
                    </div>
                    <div class="tile_image">
                        <img src="/images/surface5.png">
                    </div>
                    <div class="tile_image">
                        <img src="/images/surface6.png">
                    </div>
            </div>
        </section>
        <!---end of the header -->
        @include("partials/footer")   
    </body>
  </html>