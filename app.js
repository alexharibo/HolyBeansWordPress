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

  function backtoContent() {
    // Fanger alle elementer fra tidligere
    var tilbage = document.getElementById("leftIcon");
    var titles = document.getElementById("kaffeshop");
    var x = document.getElementById("navlist");
    var kurser = document.getElementById("kurser");

    // Starter ud med at blive vist
    if(tilbage.style.display ==="block") {
      // Fjerner knap
      tilbage.styles.display="none";

  } else {
    // Fjerner "moreContent" delen og går tilbage til den normale mobilnavigation
    x.style.display ="block";
    titles.style.display="none";
    kurser.style.display="none";
  }
}
  

// Image Slider

const carousel = document.querySelector('.carousel');



let isDragStart = false, prevPageX, prevScrollLeft;

const dragStart = (e) => {
  isDragStart = true;
  prevPageX = e.pageX;
  prevScrollLeft = carousel.scrollLeft;
}


const dragging = (e) => {
  if(!isDragStart) return;
  e.preventDefault();
let positionDiff = e.pageX - prevPageX;
carousel.scrollLeft = prevScrollLeft - positionDiff;
}

const dragStop = () => {
  isDragStart = false;
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
carousel.addEventListener("mouseup", dragStop);



//const knap = document.querySelector('.kategori')
//const indhold = document.querySelector('.container');

//function changeContent() {
 // document.querySelector('.container').innerHTML = "Hej";
 // document.querySelector('.kategori').style.backgroundColor = "red";
//}