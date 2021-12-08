<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>abc emporio tz</title>
      <meta name="description" content="meta-description.">
      @include("partials/toplinks") 
      <link rel="stylesheet" href="/css/styles.css">
      <link rel="stylesheet" href="/css/bathroom.css">
    </head>
    <body>
        <header>
        @include("partials/header") 
           <div class="banner_info">
                <div class="banner_description">
                    <div class="banner_description_inner">
                         <h1>MODERN</h1>
                         <h2>BATHROOM</h2>
                    <p>ABC group always come's up with new and various collections of 
                        wellness and bathroom fittings that appeal to the sensibilities 
                        of this modern age
                    </p>
                    <hr>
                    </div>
                </div>
                <div class="dark_background">

                </div>
                <div class="background_picture" 
                style="background-image: url('/images/bathroom.jpg');">

                </div> 
           </div>
        </header>

        <section class="site_intro">
                <h2>OUR FEATURED PRODUCTS</h2>
                <p>
                  With a wide luxurious range of bathroom wellness products like Jacuzzi, 
                  Whirlpool Bathtubs, Freestanding Bathtubs, Brook Faucets, Steam Shower Cabins, Steam and Sauna Rooms, Premium SPA, Shower Cabins, Bathroom Shower Enclosures etc, we caters to every customer's needs. You can acquire different models of each item from well known brands like Jaquar, Jacuzzi, Kohler, Effigibi, Mr. Steam, Woven Gold, Oyster, Bathx, Crizol and other international brands too. ABC group always come up with new and varied collections of wellness and bathroom fittings that appeal to the sensibilities of this modern age and you can experience the live display of these items in our showrooms.
                </p>
        </section>

        <div class="product_list">
            <div class="list">
                <figure>
                    <img src="images/sanibell-bv-Q11zBHHFBe0-unsplash.jpg">
                    <figcaption>Basin Mixer</figcaption>
                </figure>
                <figure>
                  <img src="images/bathtub.png">
                  <figcaption>Bath Tub</figcaption>
                </figure>
            </div>
            <div class="list">
                <figure>
                  <img src="images/shower.png"
                      alt="shower">
                  <figcaption>shower</figcaption>
                </figure>
                <figure>
                  <img src="images/faucet.jpg" 
                            alt="faucet">
                  <figcaption>faucet</figcaption>
                </figure>
            </div>
        </div>
        <!---end of the header -->
    
        @include("partials/footer")   
    </body>
  </html>