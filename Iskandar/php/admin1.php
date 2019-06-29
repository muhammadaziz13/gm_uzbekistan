<html>
<head>
	<title>Crud</title>
</head>	
<body>
	
<a href="create.php">Create user</a>
<table>
	<thead>
		<th>#</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<th>Delete</th>
	</thead>
	<tbody>

    <?php
    
	    $servername = "localhost";
	    $username = "root";
	    $password = "1";
	    $db_name = "crud";	


	    $conn = new mysqli($servername,$username,$password,$db_name,"3306");

	    if ($conn->connect_error) {
	    	die("Connection failed".$conn->connect_error);
	    }

    $sql = "select * from users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    	while ($row = $result->fetch_assoc()) {
    		echo "<tr>
    		<td>".$row["id"]."</td>
    		<td>".$row["firstname"]."</td>
    		<td>".$row["lastname"]."</td>
    		<td>".$row["address"]."</td>
    		<td><a href='/update.php?id=".$row["id"]."'>Delete</a></td>;
    		</tr>";
    	}
    }

    $conn->close();
    ?>


	</tbody>
	<tfoot>
		<th>#</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<th>Delete</th>
	</tfoot>
</table>

</body>
</html>