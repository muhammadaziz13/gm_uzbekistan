<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css">
<style>
</style>
</head>
<body>
<ul class="topnav" id="myTopnav">
  <li><a style="padding: 2px 0 0 0;"><img id="myBtn" src="../images/download (1).png" style="width: 180px; height: 52px; display: inline-block; padding:0; cursor:pointer;"></a></li>
  <li><a href="index.php" style="background-color: cornflowerblue; color:white;text-shadow: 2px 2px 5px black;">Home</a></li>
  <li><a href="about-us.php">About Us</a></li>
  <li><a href="cars.php">Cars</a></li>
  <li><a href="Gallery.php">Gallery</a></li>
  <li><a href="price.php">Price</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>


<!-- sign - up   -->

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Register</h2>
    </div>
    <form name="myForm1">
    <div class="modal-body">
      <div class="container">
      <label><b>Login</b></label>
      <input type="text" placeholder="Enter Login" name="log" required id="login" id="login">

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pas" required id="pasword">
        
      <button type="submit" onclick="myfunk()" style="padding: 10px 16px; background: seagreen; cursor: pointer;">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    </div>
    </form>
    <div class="modal-footer">
      <button id = "sign-upp" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
    </div>
  </div>

</div>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" style="color: white;" class="close" title="Close Modal">×</span>
  <form class="modal-content animate">
    <div class="container">
      <label><b>Login</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      <input type="checkbox" checked="checked"> Remember me
      <p>By creating an account you agree to our </p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<!-- end of sign - up -->

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="../images/1496418016_1496388262_15.jpg" style="width:100%;; min-height: 300px;"> 
  <div class="text" style="color: #696969;font-size: 15px;"></div>
  <div class="text" style="color: white;font-size: 15px;">GM-Uzbekistan Joint Venture</div>
</div>

<div class="mySlides fade">
  <img src="../images/2018-03-09_5-28-24.jpg" style="width:100%; min-height: 350px;">
  <div class="text" style="color: #696969;font-size: 10px;"><img src="../images/chevrolet-150x150.png" width="10%"></div>
  <div class="text" style="color: #696969;font-size: 15px;">GM-Uzbekistan Joint Venture</div>
</div>

<div class="mySlides fade">
  <img src="../images/gm-uzbek.jpg" style="width:100%; min-height: 350px;">
  <div class="text" style="color: #696969;font-size: 15px;"></div>
  <div class="text" style="color: white;font-size: 15px;">GM-Uzbekistan Joint Venture</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="footer">
      <p >CONTACT US</p>
  <div class="words">
    <h3><span class="fa fa-street-view" style="color: black;"></span><big>&nbsp&nbsp&nbsp&nbsp Andijan, Asaka, 17</big></h3>
    <h3><span class="fa fa-at" style="color: red;"></span><big> &nbsp&nbsp&nbsp&nbsp GM_UZB.@mail.ru</big></h3>
    <h3><span class="fa fa fa-phone" style="color: darkgreen;"></span><big style="padding-left: 25px;">&nbsp&nbsp&nbsp&nbsp Phone : (+777 77)555-01-01</big></h3>
  </div>
</div>


<script type="text/javascript" src="../js/index.js"></script>
<script type="text/javascript" src="../js/myjs.js"></script>

</body>


</html> 
