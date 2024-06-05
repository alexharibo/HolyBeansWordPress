// Åbner mobil-navigation
function myFunction() {
    var x = document.getElementById("navlist");

    

    if (x.style.display === "block") {
      x.style.display = "none";
  
      
    } else {
      x.style.display = "block"; 
   

    }
  }






  // Lukker, når man trykker på exit-iconet
  function exitMobile() {
    var x = document.getElementById("exitMobile");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      var luk = document.getElementById("navlist");
      luk.style.display = "none";
    }
  }


  function moreContent() {
    var pil = document.getElementById("menuIcon");
var titles = document.getElementById("kaffeshop");

// Starter ud med at være display none
if(titles.style.display ==="none") {

  // Når jeg trykker på den, så bliver den lavet om til style block, så den vises.
  titles.style.display = "block";
} else {
  // Når jeg så klikker igen, så vises den ikke.
  titles.style.display = "none";
}
  }

  function moreContent2() {
    var pil = document.getElementById("menuIcon2");
var kurser = document.getElementById("kurser");

// Starter ud med at være display none
if(kurser.style.display ==="none") {

  // Når jeg trykker på den, så bliver den lavet om til style block, så den vises.
  kurser.style.display = "block";
} else {
  // Når jeg så klikker igen, så vises den ikke.
  kurser.style.display = "none";
}
  }

  function moreContent3() {
    var pil = document.getElementById("menuIcon2");
var kaffeudstyr = document.getElementById("kaffeudstyr");

// Starter ud med at være display none
if(kaffeudstyr.style.display ==="none") {

  // Når jeg trykker på den, så bliver den lavet om til style block, så den vises.
  kaffeudstyr.style.display = "block";
} else {
  // Når jeg så klikker igen, så vises den ikke.
  kaffeudstyr.style.display = "none";
}
  }

  function moreContent4() {
    var pil = document.getElementById("menuIcon2");
var erhverv = document.getElementById("erhverv");

// Starter ud med at være display none
if(erhverv.style.display ==="none") {

  // Når jeg trykker på den, så bliver den lavet om til style block, så den vises.
 erhverv.style.display = "block";
} else {
  // Når jeg så klikker igen, så vises den ikke.
erhverv.style.display = "none";
}
  }

  function moreContent5() {
    var pil = document.getElementById("menuIcon2");
var omos = document.getElementById("omos");

// Starter ud med at være display none
if(omos.style.display ==="none") {

  // Når jeg trykker på den, så bliver den lavet om til style block, så den vises.
  omos.style.display = "block";
} else {
  // Når jeg så klikker igen, så vises den ikke.
  omos.style.display = "none";
}
  }

  function backtoContent() {
    // Fanger alle elementer fra tidligere
    var tilbage = document.getElementById("leftIcon");
    var titles = document.getElementById("kaffeshop");
    var x = document.getElementById("navlist");
    var kurser = document.getElementById("kurser");
    var kaffeudstyr = document.getElementById("kaffeudstyr");
    var omos = document.getElementById("omos");
    var erhverv = document.getElementById("erhverv");

    // Starter ud med at blive vist
    if(tilbage.style.display ==="block") {
      // Fjerner knap
      tilbage.styles.display="none";

  } else {
    // Fjerner "moreContent" delen og går tilbage til den normale mobilnavigation
    x.style.display ="block";
    titles.style.display="none";
    kurser.style.display="none";
    kaffeudstyr.style.display ="none";
    omos.style.display = "none";
    erhverv.style.display = "none";
  }
}
  

// Accordion

var accordion = document.getElementsByClassName("kaffeabonnementAc");
var i;

for (i= 0; i < accordion.length; i++) {
  accordion[i].addEventListener("click", function() {
    this.classList.toggle("active");

    var beskrivelse = this.nextElementSibling;
    if (beskrivelse.style.display ==="block") {
      beskrivelse.style.display = "none";
    } else {
      beskrivelse.style.display ="block";
    }
  });
}


