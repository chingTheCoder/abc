<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ABC EMPORIO TZ | TILES</title>
      <meta name="description" content="meta-description.">
      @include("partials/toplinks") 
      <link rel="stylesheet" href="/css/styles.css">
      <link rel="stylesheet" href="/css/showroom.css">
    </head>
    <body>
        <header>
        @include("partials/header") 
           <div class="banner_info">
                <div class="banner_description">
                    <div class="banner_description_inner">
                    <p>
                        OUR SHOWROOMS
                    </p>
                    <hr>
                    </div>
                </div>
                <div class="dark_background">

                </div>
                <div class="background_picture" 
                    style="background-image: url('/images/showroom/showroom.jpg');">

                </div> 
           </div>
        </header>
        
        <section id="showroom_wrapper">
            <h1>Our Showrooms</h1>
            <div id="showroom">
                <div class="room">
                        <div class="room_image">
                            <img src="/images/showroom/hq.jpg">
                        </div>
                        <div class="room_details">
                            <div class="room_details_content">
                                 <h3 class="rt">ABC EMPORIO MOROCCO</h2>
                                 <p><i class="fas fa-map-marker-alt" class="icon"></i>Morocco (bagamoyo road)</p>
                                 <br/>
                                 <h3 class="rt">CONTACT US</h2>
                                 <p><i class="fas fa-phone-alt" class="icon"></i>(+255) 747-808808</p>
                                 <br/>
                                 <h3 class="rt">EMAIL</h2>
                                 <P><i class="fas fa-envelope" class="icon"></i>info@abctanzania.com</P>
                            </div>
                        </div>
                </div>

                <div class="room">
                    <div class="room_image">
                        <img src="/images/showroom/kkoo.jpg" alt="abc emporio kochi showroom">
                    </div>
                    <div class="room_details">
                        <div class="room_details_content">
                             <h3 class="rt">ABC EMPORIO KARIAKOO</h2>
                             <p><i class="fas fa-map-marker-alt" class="icon"></i>Kariakoo</p>
                             <br/>
                             <h3 class="rt">CONTACT US</h2>
                             <p><i class="fas fa-phone-alt" class="icon"></i>(+255) 747-808808</p>
                             <br/>
                             <h3 class="rt">EMAIL</h2>
                             <P><i class="fas fa-envelope" class="icon"></i>info@abctanzania.com</P>
                        </div>
                    </div>
            </div>

            <div class="room">
                    <div class="room_image">
                        <img src="/images/showroom/kkoo.jpg" alt="abc emporio kochi showroom">
                    </div>
                    <div class="room_details">
                        <div class="room_details_content">
                             <h3 class="rt">ABC EMPORIO KARIAKOO</h2>
                             <p><i class="fas fa-map-marker-alt" class="icon"></i>kariakoo</p>
                             <br/>
                             <h3 class="rt">CONTACT US</h2>
                             <p><i class="fas fa-phone-alt" class="icon"></i>(+255) 747-808808</p>
                             <br/>
                             <h3 class="rt">EMAIL</h2>
                             <P><i class="fas fa-envelope" class="icon"></i>info@abctanzania.com</P>
                        </div>
                    </div>
            </div>


            <div class="room">
                <div class="room_image">
                    <img src="/images/showroom/keko.jpg">
                </div>
                <div class="room_details">
                    <div class="room_details_content">
                         <h3 class="rt">ABC EMPORIO CHANG'OMBE</h2>
                         <p><i class="fas fa-map-marker-alt" class="icon"></i>Chang'ombe</p>
                         <br/>
                         <h3 class="rt">CONTACT US</h2>
                         <p><i class="fas fa-phone-alt" class="icon"></i>(+255) 747-808808</p>
                         <br/>
                         <h3 class="rt">EMAIL</h2>
                         <P><i class="fas fa-envelope" class="icon"></i>info@abctanzania.com</P>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!---end of the header -->
        @include("partials/footer") 
    </body>
  </html>