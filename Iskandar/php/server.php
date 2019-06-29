<?php 

$servername = "localhost";
    $username = "root";
    $password = "1";
    $db_name = "crud";


    $conn = new mysqli($servername,$username,$password,$db_name,"3306");

    if ($conn->connect_error) {
    	die("Connection failed".$conn->connect_error);
    }


    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $address = $_POST["address"];

    $sql = "INSERT INTO users(firstname,lastname,address) VALUES ('{$firstname}','{$lastname}','{$address}')";
    $submit = false;
    if ($conn->query($sql) === TRUE) {
    	$submit = TRUE;
    }else {
    	echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();


?>

<script type="text/javascript">
	<?php if ($submit==TRUE) {
		echo "window.location.replace('http://phpmysql/')";
	};?>
</script>