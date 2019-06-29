function rasm(s){
var modal = document.getElementById('myModal');
var img = document.getElementById(s);
var modalImg = document.getElementById("img01");
    modal.style.display = "block";
    modalImg.src = s.src;
    // Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal

var close1=document.getElementById("closeq");
close1.onclick = function() { 
    modal.style.display = "none";
}

}

  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    } else {
        x.className = "topnav";
        document.body.style.backgroundColor = "white";
    }
}


/*              */
function call_ajax(param) {
    $(document).ready(function(){
      $.ajax({
        type: "GET",
        url: "../php/myPhpFunction.php",
        data: {page: "gallery",
               car_name: param},
        success: function(response){
          var car_images = response.split('&');
            for (var i = 0; i < 9; i++) {
              document.getElementById("img" + i).src = car_images[i];
            }
          }
      });
    });
  }

window.onscroll=function(){chaa()};

function chaa(){

}