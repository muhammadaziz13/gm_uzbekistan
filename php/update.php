<?php 
$servername = "localhost";
    $username = "root";
    $password = "1";
    $db_name = "crud";


    $conn = new mysqli($servername,$username,$password,$db_name,"3306");

    if ($conn->connect_error) {
    	die("Connection failed".$conn->connect_error);
    }
$id = $_GET["id"];
    
    $sql = "delete from users where id = ".$id;

?>

<script type="text/javascript">
var con= confirm("Do you want to delete user id "+<?php echo $id; ?>);
if (con==true) {
   <?php 

    $conn->query($sql);
    	echo "window.location.replace('http://phpmysql/')";
   ?>

   }

</script>