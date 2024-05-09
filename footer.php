<?php wp_footer(); ?>
 
<footer>
    <div class="footerNav">
        <h2>Navigér <span class="orangeText">rundt</span></h2>
        <?php 
wp_nav_menu(
  array(
    'menu' => 'primary',
    'container' => '',
    'theme_location' => 'primary',
    'items_wrap' => '<li id="" class="footerNav">%3$s<ul>'
  )
);
?>
    </div>

  

    <div class="footerSpg">
<h2>Vi står altid klar til at</h2>
<h2><span class="orangeText">hjælpe dig</h2>
<p>Har du spørgsmål angående vores aktiviteter, så er du velkommen til at kontakte os.
    </div>

    <div class="footerNav2">
        <h2>Kontakt <span class="orangeText">os</span></h2>
        <p><i class="fa-solid fa-envelope" id="footerKontakt"></i> mathias@funcenter.dk</p>
        <p><i class="fa-solid fa-phone" id="footerKontakt"></i> 22 31 38 90</p>

        <div class="footerFormular">
   <a href="<?php echo site_url('kontakt') ?>">Gå til <span class="orangeText">kontaktformular</span></a>
        </div>

        <div class="social">
       <a href="https://www.facebook.com/funcenterdk"><i class="fa-brands fa-facebook" id="socialIcons"></i>
       <a href="https://www.instagram.com/funcenterdk/?hl=da"> <i class="fa-brands fa-instagram" id="socialIcons"></i></a>
       <a href="https://www.instagram.com/funcenterdk/?hl=da"> <i class="fa-brands fa-linkedin" id="socialIcons"></i></a>
        </div>

       
    </div>

</footer>

</body>

</html>

