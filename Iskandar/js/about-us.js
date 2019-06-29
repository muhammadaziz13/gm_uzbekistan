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


function rasm(s){

var modal = document.getElementById('myModal');
var img = document.getElementById('s');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
    modal.style.display = "block";
    modalImg.src = s.src;
    // Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
}


 window.onscroll = function() { change()};
 var a = document.getElementsByClassName("city");
 var b = document.getElementsByClassName("city1");
 var c = document.getElementsByClassName("city2");
function change(){
  if(window.pageYOffset >= 320 && window.pageYOffset <= 750){
     a[0].classList.add("gee");
     a[1].classList.add("gee");
  }
  if(window.pageYOffset >= 850 && window.pageYOffset <= 1200){
      b[0].classList.add("gee1");
      b[1].classList.add("gee1");
  }
  if(window.pageYOffset >= 1700 && window.pageYOffset <= 2000){
      c[0].classList.add("gee2");
      c[1].classList.add("gee2");
  }
}




var elem = document.getElementById("df");
  var id = setInterval(frame,30);
  var count = 0;
  function frame(){
    if(count == 51){
      clearInterval(id);
    }
    else{
      count++;
      elem.innerHTML = count+".k";
    }
  } 