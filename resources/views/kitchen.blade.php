<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ABC EMPORIO TZ | kITCHEN</title>
      <meta name="description" content="meta-description.">
      @include("partials/toplinks") 
      <link rel="stylesheet" href="/css/styles.css">
      <link rel="stylesheet" href="/css/kitchen.css">
    </head>
    <body>
        <header>
        @include("partials/header") 
           <div class="banner_info row">
                <div class="banner_description">
                    <div class="banner_description_inner">
                         <h1>KITCHEN</h1>
                    <p>WE DESIGN KITCHEN
                        THAT TOUCH EMOTIONS
                    </p>
                    <hr>
                    </div>
                </div>
                <div class="dark_background col-xl-3 col-lg-4 col-md-4 order-2 order-md-1 order-lg-1 order-xl-1">

                </div>
                <div class="background_picture col-xl-9 col-lg-8 col-md-8 order-1 order-md-2 order-lg-2 order-xl-2" 
                    style="background-image: url('/images/kitchen5.png');">

                </div> 
           </div>
        </header>
        <section class="site_intro">
            <h2>KITCHEN</h2>
            <p>Everyone dreams of a classy kitchen and a stylish wardrobe. A Kitchen is a space for your entire family to cook, 
                live and make memories that last for a lifetime. We are one of best dealers and have the exclusive display gallery 
                of Asian Paints Sleek Kitchen along with the display of wardrobe . We also have the display of Hob, Chimney and 
                other kitchen accessories across our showrooms.
            </p>
        </section>
        <section id="kitchen_top">
            <div class="aside">
                <img src="/images/kitchen4.png" alt="tap">
            </div>
            <div id="middle">
                <img src="/images/kitchen5.png" alt="kitchen">
            </div>
            <div class="aside">
                <img src="/images/kitchen3.png" alt="tap">
            </div>
        </section>
        <section class="kithcen_bottom"> 
            <div>   
                <img src="/images/kitchen1.png" alt="kitchen">
            </div>
            <div>
                <img src="/images/kitchen2.png" alt="kitchen">
            </div>
        </section>
        <!---end of the header -->
        @include("partials/footer")  
    </body>
  </html>