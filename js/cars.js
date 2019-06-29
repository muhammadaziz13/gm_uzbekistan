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

  function call_ajax(param) {
    $(document).ready(function(){
      $.ajax({
        type: "GET",
        url: "../php/myPhpFunction.php",
        data: {page: "cars",
               car_name: param},
        success: function(response){
          var details = response.split('&');
          document.getElementById('car_name').innerHTML = details[0];
          document.getElementById('car_pic').src = "" + details[7];
          document.getElementById('speed').innerHTML = details[1] + " km/h";
          document.getElementById('fuel').innerHTML = details[2];
          document.getElementById('power').innerHTML = details[3];
          document.getElementById('max_speed').innerHTML = details[4];
        }
      });
    });
  }