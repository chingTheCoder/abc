<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>abc emporio tz</title>
      <meta name="description" content="meta-description.">
      @include("partials/toplinks") 
      <link rel="stylesheet" href="/css/styles.css">
      <link rel="stylesheet" href="/css/kohler.css">
    </head>
    <body>
        <header>
        @include("partials/header") 
           <div class="bathroom_banner row">
                <div class="bathroom_cat_description col-xl-6  col-lg-6">
                    <div class="bcd_content">
                        <img src="https://abcemporiotz.com/assets/images/brands/bathx.png"
                            style="max-width: 250px;height: 50px;">
                        <br/>
                        <p>
                        Bathx is one of the Top Sanitary ware Brands in India who manufactuers Wellness Products, 
                        Faucets, Bath Tubs, Enclosure, Bathroom Accessories and much more. 
                        <br/>
                        <a href="https://bathxglobal.com" style="text-align: left;">Visit Bathx</a>
                        </p>
                        
                    </div>
                </div>
                <div class="bathroom_cat_image order-1 col-lg-6 col-xl-6">
                    <div class="bci_cover">
                        <img src="/images/bathx/artbasin.jpg" style="object-fit: cover;">
                    </div>
                </div>
           </div>
        </header>
        <div class="collection">
            <h2>
                OUR BATHX COLLECTION
            </h2>

            <div class="row collection_list">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <figure>
                        <img src="/images/bathx/basin.png">
                        <figcaption>Basin</figcaption>
                    </figure>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                   <figure>
                        <img src="/images/bathx/pablo.png">
                        <figcaption>Pablo</figcaption>
                    </figure>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <figure>
                        <img src="/images/bathx/felix.png">
                        <figcaption>Felix</figcaption>
                    </figure>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <figure>
                        <img src="/images/bathx/cadi.png">
                        <figcaption>Cadi Toilet</figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <!---end of the header -->
    
        @include("partials/footer")  

    </body>
  </html>