<html>
<head>
	<title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../b/css/bootstrap.css">
</head>
<body>
	
   <div class="container">
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">appliers</a></li>
    <li><a data-toggle="tab" href="#menu2">new car</a></li>
    <li><a data-toggle="tab" href="#menu3">news</a></li>
    <li><a href="index.php">Home</a></li>
  </ul>

  <div class="tab-content">
   <div id="menu1" class="tab-pane fade in active">
      <h3>Appliers</h3>
      
          <form method = "post" action="server.php">

            <label for="fname">First Name</label>
            <input type="text" name="firstname" id="firstname" placeholder="Enter First Name"></br>

            <label for="lname">Last Name</label>
            <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name"></br>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" placeholder="Enter Address"></br>

            <input type="submit" value="Submit">
      
   </form>


    </div>
    <div id="home" class="tab-pane fade">
      <h3>New car</h3>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>News</h3>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>main page</h3>
    </div>
  </div>
</div>

<script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../b/js/bootstrap.min.js"></script>
</body>
</html>