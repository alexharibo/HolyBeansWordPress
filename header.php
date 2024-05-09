<?php wp_head(); ?>
<!DOCTYPE html>

<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="Forside" content = "Aktiviteter der henvender sig til virksomheder">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="iphonepro.css">
    <link rel="stylesheet" href="ipadpro.css">
    <link rel="stylesheet" href="ipadmini.css">
    <link rel="stylesheet" href="largerdevices.css">
    <link rel="stylesheet" href="iphone.css">
    <link rel="stylesheet" href="surfaceduo.css">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins">

    <script defer src="app.js"></script>
    <script src="https://kit.fontawesome.com/8678aa8a7f.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPartner</title>
</head>

<header id="header">
<div class="headerStyle">

 
   <ul class="headerList">
    <div id="logo">
      <a href="<?php echo site_url('') ?>">  <img src="<?php echo get_theme_file_uri('/assets/eventpartners.png') ?>"></a>
    </div>

    <div id="menuList">



<?php 
wp_nav_menu(
  array(
    'menu' => 'primary',
    'container' => '',
    'theme_location' => 'primary',
    'items_wrap' => '%3$s</li>'
  )
);
?>

</div>

<i class="fa-solid fa-circle-arrow-up" onclick="scrollElement2()" id="uptotop"></i>

</div>
</ul>
</header>
