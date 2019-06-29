<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/cars.css">
  <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css">
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <title>Cars</title>
</head>
<body>
  <ul class="topnav" id="myTopnav">
    <li><a href="index.php" style="padding: 2px 0 0 0;"><img src="../images/download (1).png" style="width: 180px; height: 52px; display: inline-block; padding:0;"></a></li>
    <li><a href="index.php">Home</a></li>
    <li><a href="about-us.php">About Us</a></li>
    <li><a href="cars.php" style="background-color: cornflowerblue; color:white;text-shadow: 2px 2px 5px black;">Cars</a></li>
    <li><a href="Gallery.php">Gallery</a></li>
    <li><a href="price.php">Price</a></li>
    <li class="icon">
      <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
    </li>
  </ul>

  <!--     for    picture                  -->

  <div class="forpicture" style="overflow:hidden;">
    <div class="menu">
      <a style="padding: 3px;" href="javascript:void(0)" class="tablinks" onclick="call_ajax('captiva')" id="1"><img style="width: 110px; height:65px;" src="../images/captiva.png"></a>
      <a style="padding: 3px;" href="javascript:void(0)" class="tablinks" onclick="call_ajax('malibu')"><img style="width: 110px; height:65px;" src="../images/malibu.png"></a>
      <a style="padding: 3px;" href="javascript:void(0)" class="tablinks" onclick="call_ajax('cobalt')"><img style="width: 110px; height:65px;" src="../images/cobalt.png"></a>
      <a style="padding: 3px;" href="javascript:void(0)" class="tablinks" onclick="call_ajax('lacetti')"><img style="width: 110px; height:65px;" src="../images/lacetti.png"></a>
      <a style="padding: 3px;" href="javascript:void(0)" class="tablinks" onclick="call_ajax('nexia')"><img style="width: 110px; height:65px;" src="../images/nexia.png"></a>
      <a style="padding: 3px;" href="javascript:void(0)" class="tablinks" onclick="call_ajax('spark')"><img style="width: 110px; height:65px;" src="../images/spark.png"></a>
      <a style="padding: 3px;" href="javascript:void(0)" class="tablinks" onclick="call_ajax('matiz')"><img style="width: 110px; height:65px;" src="../images/matiz.png"></a>
      <a style="padding: 3px;" href="javascript:void(0)" class="tablinks" onclick="call_ajax('damas')"><img style="width: 110px; height:65px;" src="../images/damas.png"></a>
      <a style="padding: 3px;" href="javascript:void(0)" class="tablinks" onclick="call_ajax('orlando')" style="margin-bottom: 2px;"><img style="width: 110px; height:75px;" src="../images/orlando.png"></a>
    </div>

    <div class="main" id="pic">
      <div id="Captiva" class="tabcontent">
        <h3 id="car_name">Captiva</h3>
        <table>
          <tr>
            <td colspan="4" style="font-size: 55px;"><img id="car_pic" style=" width: 50%; height: 170px;" src="../images/captiva.png"></td>
          </tr>
          <tr>
            <td style=""><img style="" src="../images/rasxodIcon.png"></td>
            <td id="speed">360km/h</td>
            <td style=""><img src="../images/motorIcon.png"></td>
            <td id="fuel"><p>30litre</p></td>
          </tr>
          <tr>
            <td><img src="../images/toplivoIcon.png"></td>
            <td id="power">adasdasd</td>
            <td><img src="../images/clockIcon.png"></td>
            <td id="max_speed">300km/hour</td>
          </tr>
        </table>
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
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>

  <script type="text/javascript" src="../js/cars.js"></script>3
</body>
</html>