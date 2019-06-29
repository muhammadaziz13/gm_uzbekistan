<?php
	
	$page = $_GET['page'];
	$req = $_GET['car_name'];

	connection_to_db($page, $req);	

function connection_to_db($page_name, $query_type)
{
	$servername = "localhost";
	$username = "root";
	$password = "1";
	$name = "gm_uzbekistan_cars";

	$conn = new mysqli($servername, $username, $password, $name, "3306");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	else {
		if ($page_name == "cars") {
			$car_details = array();
			$query = "select t.*, (select p.img from pictures p where p.id = t.id_pic) as img_path from cars t where t.name like '".$query_type."'";

		    $result = $conn->query($query);
		   
		    if ($result -> num_rows > 0) {
		    	while ($row = $result->fetch_assoc()) {
		    		$car_details[0] = $row["name"];
		    		$car_details[1] = $row["speed"];
		    		$car_details[2] = $row["fuel"];
		    		$car_details[3] = $row["power"];
		    		$car_details[4] = $row["fuel_per_km"];
		    		$car_details[5] = $row["type"];
		    		$car_details[6] = $row["price"];
		    		$car_details[7] = $row["img_path"];
		    	}
		    	echo $car_details[0]."&".$car_details[1]."&".$car_details[2]."&".$car_details[3]."&".
		    		 $car_details[4]."&".$car_details[5]."&".$car_details[6]."&".$car_details[7];
			}

		    $conn->close();
		}
		else if($page_name == "gallery"){
			$car_pictures = array();
			$query = "select t.img from pictures t where t.name_pic like '".$query_type."'";

			$result = $conn->query($query);
			$counter = 0;
			$pictures;
		   
		    if ($result -> num_rows > 0) {
		    	while ($row = $result->fetch_assoc()) {
		    		$car_pictures[$counter++] = $row['img'];
		    	}
			}
			echo $car_pictures[0]."&".$car_pictures[2]."&".$car_pictures[3]."&".$car_pictures[4]."&".$car_pictures[5]."&".$car_pictures[6]."&".$car_pictures[7]."&".$car_pictures[8]."&".$car_pictures[9];

		    $conn->close();
		}
		else if($page_name == "price"){
			$car_names = array();
			$car_types = "";
			$counter = 0;
			$counter1 = 0;
			$query = "select t.name from cars t group by t.name";
			$result = $conn->query($query);

			if ($result -> num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$car_names[$counter] = $row['name'];
					$query_type = "select  t.name, t.type, t.price from cars t where t.name like '".$car_names[$counter]."'";
					$result1 = $conn->query($query_type);
					while ($row1 = $result1 -> fetch_assoc()) {
						$car_types = $car_types.$row1['name']."#".$row1['type']."#".$row1['price']."@";
					}
					$car_types = substr($car_types, 0, (strlen($car_types)-1));
					$car_types = $car_types."&";
				}

				echo $car_types;
				$conn->close();
			}

		}
		else if($page_name == "booking"){	
			
			/*while ($row = $result -> fetch_assoc()) {
				$company_id = $row['id'];
			}

			$query = "select t.id from cars t where t.name like '".$_GET['car_type']."'";
			$result = $conn->query($query);
			while ($row = $result -> fetch_assoc()) {
				$car_id = $row['id'];
			}
*/			
			$query = "insert into user_applied_car(car_type, id_car, f_name, l_name, m_name, passport, passport_copy_path, date) values('".$_GET['car_type']."',1,'".$_GET['f_name']."','".$_GET['l_name']."','".$_GET['m_name']."','".$_GET['passport']."','".$_GET['passport_copy']."','".$_GET['date']."')";
			$conn->query($query);
			$conn->close();
			echo "Ok";
		}
	}
}

?>
