
<?php wp_head(); ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/8678aa8a7f.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    
    <link rel="stylesheet" href="responsive/iphone12.css">
    <link rel="stylesheet" href="responsive/iphone14.css">
    <link rel="stylesheet" href="responsive/ipadpro.css">
    <link rel="stylesheet" href="css/style.css">


    <title>HolyBeans</title>
</head>
<body>
<div class="topBanner">
<p>Levering på <span class="highlighted"> 1-3 hverdage</span></p>
<p>Fri fragt over <span class="highlighted"> 499 DKK,-</span></p>
<p><span class="highlighted"> 4,7 stjerner</span> på TrustPilot</p>
</div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <!-- Header til website -->
    <header class="website">
        <div class="headerStylingWebsite">
        <div class="koeb">
            <i class="fa-solid fa-cart-shopping" id="purchase"></i>
            <i class="fa-solid fa-cart-shopping" id="purchase"></i>
        </div>
        <div class="logo">
         <img src="<?php echo get_theme_file_uri('/assets/logo.png') ?>" id="logo">
         
        </div>

            <ul class="navlist">
                <li>Kaffe</li>
                <li>Kaffeudstyr</li>
                <li>Kurser og events</li>
                <li>Erhverv</li>
                <li>Kaffeblog</li>
                <li>Om os</li>
                 </ul>
     

     
        
    
    </div>
    </header>

    <!-- Header til mobil -->
    <header class="mobile">
        <div class="headerStylingMobile">

        
         
        <div class="logo">
         <img src="<?php echo get_theme_file_uri('/assets/logo.png') ?>" id="logo">
        </div>
       

                 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars" id="menuIkon"></i>
                  </a>
    </div>



    <div id="navlist">
        <div id="exitMobile">
            <i class="fa-solid fa-xmark" id="exitIcon" onclick="exitMobile()"></i>
        </div>
      <a href="#">Forside</a>
      <a href="#">Forside</a>
      <a href="#">Forside</a>
      
    </div>

    
    </header>