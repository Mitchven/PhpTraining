<?php
    
	echo "<link href='style.css' rel='stylesheet'>";
	/* Attempt MySQL server connection. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	$link = mysqli_connect("localhost", "root", "", "PNTraining");
	
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	// Attempt select query execution
	$sql = "SELECT * FROM medicine";
	$result = mysqli_query($link, $sql);
	if($result){
		if(mysqli_num_rows($result) > 0){
			echo "<table class='form' style='color:white'>";
				echo "<tr>";
					echo "<th>Generic Name</th>";
					echo "<th>Medicine Type</th>";
					echo "<th>Quantity</th>";
					echo "<th>Price</th>";
					echo "<th colspan='2'>Action</th>";
				echo "</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['generic_name'] . "</td>";
					echo "<td>" . $row['medicine_type'] . "</td>";
					echo "<td>" . $row['quantity'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
                    $id = $row['id'];
                    
					echo "<td><a href='DeleteMedicine.php?id=$id'>Delete Order</a></td>";
					echo "<td><a href='EditMedicine.php?id=$id'>Edit Order</a></td>";
                echo "</tr>";
                
			}
            echo "</table>";
            echo "<center><td><a href='AddMedicine.php?id=$id'>Add Order</a></td></center>";
			// Free result set
			// mysqli_free_result($result);
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	
	// Close connection
	mysqli_close($link);
?>