<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/Gallery.css">
<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css">
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/Gallery.js"></script>

  <title>Gallery</title>
</head>
<body onload="call_ajax('captiva')">
<ul class="topnav" id="myTopnav">
  <li><a href="index.php" style="padding: 2px 0 0 0;"><img src="../images/download (1).png" style="width: 180px; height: 52px; display: inline-block; padding:0;"></a></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="about-us.php">About Us</a></li>
  <li><a href="cars.php">Cars</a></li>
  <li><a href="Gallery.php" style="background-color: cornflowerblue; color:white;text-shadow: 2px 2px 5px black;">Gallery</a></li>
  <li><a href="price.php">Price</a></li>

  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>

<!--     for    picture                  -->

<div class="forpicture" style="overflow:hidden;">
  <div class="menu">
    <a href="javascript:void(0)" class="tablinks" onclick="call_ajax('captiva')" id="defaultOpen">Captiva</a>
    <a href="javascript:void(0)" class="tablinks" onclick="call_ajax('malibu')">Malibu-Crus</a>
    <a href="javascript:void(0)" class="tablinks" onclick="call_ajax('cobalt')">Cobalt</a>
    <a href="javascript:void(0)" class="tablinks" onclick="call_ajax('captiva')">Lacetti</a>
    <a href="javascript:void(0)" class="tablinks" onclick="call_ajax('nexia')">Nexia</a>
    <a href="javascript:void(0)" class="tablinks" onclick="call_ajax('spark')">Spark</a>
    <a href="javascript:void(0)" class="tablinks" onclick="call_ajax('matiz')">Matiz</a>
    <a href="javascript:void(0)" class="tablinks" onclick="call_ajax('damas')">Damas</a>
    <a href="javascript:void(0)" class="tablinks" onclick="call_ajax('orlando')" style="margin-bottom: 2px;">Orlando</a>
  </div>

  <div class="main" id="pic">
    <div id="Captiva" class="tabcontent">
    <h3>Captiva</h3>
    <img id="img0" onclick="rasm(this)">
    <img id="img1" onclick="rasm(this)">
    <img id="img2" onclick="rasm(this)">
    <img id="img3" onclick="rasm(this)">
    <img id="img4" onclick="rasm(this)">
    <img id="img5" onclick="rasm(this)">
    <img id="img6" onclick="rasm(this)">
    <img id="img7" onclick="rasm(this)">
    <img id="img8" onclick="rasm(this)">
  </div>
  </div>
</div>

<div class="footer" id="footer">
      <p >CONTACT US</p>
  <div class="words">
    <h3><span class="fa fa-street-view" style="color: black;"></span><big>&nbsp&nbsp&nbsp&nbsp Andijan, Asaka, 17</big></h3>
    <h3><span class="fa fa-at" style="color: red;"></span><big> &nbsp&nbsp&nbsp&nbsp GM_UZB.@mail.ru</big></h3>
    <h3><span class="fa fa fa-phone" style="color: darkgreen;"></span><big style="padding-left: 25px;">&nbsp&nbsp&nbsp&nbsp Phone : (+777 77)555-01-01</big></h3>
  </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" id="closeq">&times;</span>
  <img class="modal-content" id="img01">
</div>
</script>
</body>
</html>