
            

var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


var modal111 = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event1) {
    if (event1.target == modal111) {
        modal111.style.display = "none";
    }
}



	function myfunk() {
    var x = document.getElementById("login").value;
        var y = document.getElementById("pasword").value;

    if (x == "a" && y == "1") {
    	 window.open("create.php");
    }
    else {
    	alert("There is a missed something or login and pasword wrong entered !!!");
        return false;
    }

}
