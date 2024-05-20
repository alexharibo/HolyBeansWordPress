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

