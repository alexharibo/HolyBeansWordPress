<?php


get_header();

while(have_posts()) {
    the_post(); ?>




    <div id="kategoriList">
        <div class="kategori">
            <p>Kategori</p>
              </div>
              <div class="kategori">
                <p>Kategori</p>
                  </div>
                  <div class="kategori">
                    <p>Kategori</p>
                      </div>
                      
    
    </div>
    
<div class="container">


<div class="card">
  <img src="./assets/eksempel.jpg" id="cardImg">
      <div class="kategori">
    <p>Kategori</p>
      </div>

   
    <div class="billedeTekst">
    <h2>Kaffe med omtanke</h2>
    <p>Hos HolyBeans er vi bevidste om det aftryk, 
        vi sætter i verden, og de valg vi træffer.
        Vi kalder det kaffe med omtanke. Derfor arbejder vi fokuseret med bæredygtighed.
    </p>
    
    </div>
    </div>

    <div class="card">
        <img src="./assets/eksempel.jpg"  id="cardImg">
            <div class="kategori">
          <p>Kategori</p>
            </div>
      
         
          <div class="billedeTekst">
          <h2>Kaffe med omtanke</h2>
          <p>Hos HolyBeans er vi bevidste om det aftryk, 
              vi sætter i verden, og de valg vi træffer.
              Vi kalder det kaffe med omtanke. Derfor arbejder vi fokuseret med bæredygtighed.
          </p>
          
          </div>
          </div>
    </div>


  





</body>
</html>


    <?php }
    get_footer();
?>