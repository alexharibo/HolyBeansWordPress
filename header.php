
<?php wp_head(); ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/8678aa8a7f.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="responsive/iphone12.css">
    <link rel="stylesheet" href="responsive/iphone14.css">
    <link rel="stylesheet" href="responsive/ipadpro.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

    <title>HolyBeans</title>
</head>
<body>
<div class="topBanner">
<p>Levering på <span class="highlighted"> 1-3 hverdage</span></p>
<p>Fri fragt over <span class="highlighted"> 499 DKK,-</span></p>
<p><span class="highlighted"> 4,7 stjerner</span> på TrustPilot</p>
</div>

  




    <!-- Header til website -->
    <header class="website">
        <div class="headerStylingWebsite">
        <div class="koeb">
            <i class="fa-solid fa-cart-shopping" id="purchase"></i>
            <i class="fa-solid fa-cart-shopping" id="purchase"></i>
        </div>
        <div class="logo">
        <a href="<?php echo site_url('') ?>">    <img src="<?php echo get_theme_file_uri('/assets/logo.png') ?>" id="logo"></a>
     

        </div>

            <div class="navlist">
            <a href="<?php echo site_url('shop') ?>">    <li>Kaffe</li> </a>
                <li>Kaffeudstyr</li>
                <li>Kurser og events</li>
                <li>Erhverv</li>
                <a href="<?php echo site_url('blog') ?>">  <li>Kaffeblog</li> </a>
                <li>Om os</li>
</div>
     

     
        
    
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
      <a href="#">Kaffe</a>
      <a href="#">Kaffeudstyr</a>
      <a href="#">Kurser og events</a>
      <a href="#">Erhverv</a>
      <a href="#">Kaffeblog</a>
      <a href="#">Om os</a>
      

      <div id="iconsToNavlist">
      <i class="fa-regular fa-heart"></i>
      <i class="fa-solid fa-bag-shopping"></i>
      <i class="fa-solid fa-magnifying-glass"></i>
</div>
    </div>


    
    
    </header>