var car_name = "";
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

function booking(){
    var f_name = document.getElementById('firstname').value,
        l_name= document.getElementById('lastname').value,
        m_name = document.getElementById('mname').value,
        passport = document.getElementById('passport').value,
        passport_copy = document.getElementById('passport_copy').value,
        country = document.getElementById('country').value,
        car_type = document.getElementById('cars').value,
        date = document.getElementById('myDate').value;

        console.log(f_name+l_name+m_name+passport+passport_copy+country+car_type+date);

        $.ajax({
            type: "GET",
            url: "myPhpFunction.php",
            data: {
                    page: "booking",
                    car_name: "price_cars",
                    f_name: f_name,
                    l_name: l_name,
                    m_name: m_name,
                    passport: passport,
                    passport_copy: passport_copy,
                    country: country,
                    car_type: car_type,
                    date: date
                  },
            success: function(resp){
                console.log(resp);
            }
            });

}

function call_ajax(){
    $.ajax({
        type: "GET",
        url: "myPhpFunction.php",
        data: {
            page : "price",
            car_name : "all"
        },
        success: function (resp){
            var cars = resp.split('&'),
                table = document.getElementById('CarPriceTable');

            for (var i = 0; i < cars.length-1; i++) {
                var subCars = cars[i];
                var subCar = subCars.split('@');

                var tr = document.createElement('tr'),
                    td = document.createElement('td'),
                    img = document.createElement('img');
                var name = subCar[0].split('#');
                    img.src = "../images/" + name[0] + ".png";
                var big = document.createElement('big');
                    big.innerHTML = name[0];
                    td.appendChild(img);
                    td.appendChild(big);
                var td1 = document.createElement('td');

                for (var j = 0; j < subCar.length; j++) {
                    var oneNameCar = subCar[j].split('#');
                    var p = document.createElement('p');
                    p.innerHTML = oneNameCar[1] + ": " + oneNameCar[2];
                    td1.appendChild(p);
                }
                var td2 = document.createElement('td'),
                    span = document.createElement('span');
                    span.className = "fa fa-id-card-o";
                    span.setAttribute("id", name[0]);
                    span.setAttribute("onclick", "openform(this)");
                    td2.appendChild(span);
                tr.appendChild(td);
                tr.appendChild(td1);
                tr.appendChild(td2);
                table.appendChild(tr);
            }
            
        }
    });
}

function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();






/*             for  Apply Form             */
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function openform(elem_name){
    document.getElementById('cars').value = elem_name.id;
    car_name = elem_name.id;
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