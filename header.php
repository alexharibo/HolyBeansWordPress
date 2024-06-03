
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
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

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
            <a href="<?php echo site_url('kaffeudstyr') ?>"> <li>Kaffeudstyr</li> </a>
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
        <a href="<?php echo site_url('') ?>">    <img src="<?php echo get_theme_file_uri('/assets/logo.png') ?>" id="logo"></a>
        </div>
       

                 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars" id="menuIkon"></i>
                  </a>
    </div>



    <div id="navlist">
    
        <div id="exitMobile">
            <i class="fa-solid fa-xmark" id="exitIcon" onclick="exitMobile()"></i>
        </div>
       
        <div id="menu">  <li>Kaffe</li> <i class="fa-solid fa-angle-right" id="menuIcon" onclick="moreContent()"></i></div>
        <div id="menu">  <li>Kaffeudstyr</li> <i class="fa-solid fa-angle-right" id="menuIcon2" onclick="moreContent3()"></i></div>
        <div id="menu">   <li>Kurser og events</li> <i class="fa-solid fa-angle-right" id="menuIcon2" onclick="moreContent2()"></i></div>
        <div id="menu">   <li>Erhverv</li> <i class="fa-solid fa-angle-right" id="menuIcon2" onclick="moreContent4()"></i></div>
      <a href="<?php echo site_url('blog') ?>">  Kaffeblog </a> 
      <a href="<?php echo site_url('gaveideer') ?>"> Gaver</a>
      <div id="menu">   <li>Om os</li> <i class="fa-solid fa-angle-right" id="menuIcon2" onclick="moreContent5()"></i></div>
      
      <div id="iconsToNavlist">
      <i class="fa-regular fa-heart"></i>
      <i class="fa-solid fa-bag-shopping"></i>
      <i class="fa-solid fa-magnifying-glass"></i>

</div>

      <!-- For kaffe -->
    <div id="kaffeshop">
    <div id="moreMobile">
    <i class="fa-solid fa-angle-left" id="leftIcon" onclick="backtoContent()"></i><p>Kaffe</p>
        </div>

        <div id="moreMobileNAV">
    <a href="<?php echo site_url('specialty') ?>">Specialty Kaffe</a>
    <a href="<?php echo site_url('classic-kaffe') ?>">Classic Kaffe</a>
    <a href="<?php echo site_url('raa-kaffebonner') ?>">Rå kaffebønner</a>
    <a href="<?php echo site_url('/kaffeabonnement') ?>">Kaffeabonnement</a>
</div>
</div>

<!-- For kurser og events -->
<div id="kurser">
    <div id="moreMobile">
    <i class="fa-solid fa-angle-left" id="leftIcon" onclick="backtoContent()"></i><p>Kurser og events</p>
        </div>

        <div id="moreMobileNAV">
    <a href="<?php echo site_url('kurser') ?>">Kurser</a>
    <a href="<?php echo site_url('events') ?>">Events</a>
</div>
</div>


<!-- For kaffeudstyr -->
<div id="kaffeudstyr">
    <div id="moreMobile">
    <i class="fa-solid fa-angle-left" id="leftIcon" onclick="backtoContent()"></i><p>Kaffeudstyr</p>
        </div>

        <div id="moreMobileNAV">
    <a href="<?php echo site_url('kaffekopper') ?>">Kaffekopper</a>
    <a href="<?php echo site_url('kaffebryggere') ?>">Kaffebryggere</a>
    <a href="<?php echo site_url('kaffefilter') ?>">Kaffefilter</a>
    <a href="<?php echo site_url('kaffevaegte') ?>">Kaffevægte</a>
    <a href="<?php echo site_url('elkedler') ?>">Elkedel</a>
    <a href="<?php echo site_url('kaffekvaerne') ?>">Kaffekværne</a>
</div>
</div>

<!-- Erhverv -->
<div id="erhverv">
    <div id="moreMobile">
    <i class="fa-solid fa-angle-left" id="leftIcon" onclick="backtoContent()"></i><p>Erhverv</p>
        </div>

        <div id="moreMobileNAV">
    <a href="<?php echo site_url('kaffekopper') ?>">Kaffekopper</a>
    <a href="<?php echo site_url('kaffebryggere') ?>">Kaffebryggere</a>
    <a href="<?php echo site_url('kaffefilter') ?>">Kaffefilter</a>
    <a href="<?php echo site_url('kaffevaegte') ?>">Kaffevægte</a>
    <a href="<?php echo site_url('elkedler') ?>">Elkedel</a>
    <a href="<?php echo site_url('kaffekvaerne') ?>">Kaffekværne</a>
</div>
</div>

<!-- Om os -->

<div id="omos">
    <div id="moreMobile">
    <i class="fa-solid fa-angle-left" id="leftIcon" onclick="backtoContent()"></i><p>Om os</p>
        </div>

        <div id="moreMobileNAV">
    <a href="<?php echo site_url('kaffekopper') ?>">Kaffekopper</a>
    <a href="<?php echo site_url('kaffebryggere') ?>">Kaffebryggere</a>
    <a href="<?php echo site_url('kaffefilter') ?>">Kaffefilter</a>
    <a href="<?php echo site_url('kaffevaegte') ?>">Kaffevægte</a>
    <a href="<?php echo site_url('elkedler') ?>">Elkedel</a>
    <a href="<?php echo site_url('kaffekvaerne') ?>">Kaffekværne</a>
</div>
</div>




    
    
    </header>