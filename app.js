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

