<?php

	echo "<link href='form.css' rel='stylesheet'>";
	/* Attempt MySQL server connection. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	$link = mysqli_connect("localhost", "root", "", "PNTraining");
	
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	// Attempt select query execution
	$sql = "SELECT * FROM persons";
	$result = mysqli_query($link, $sql);
	if($result){
		if(mysqli_num_rows($result) > 0){
			echo "<table class='form'>";
				echo "<tr>";
					echo "<th>First Name</th>";
					echo "<th>Middle Name</th>";
					echo "<th>Last Name</th>";
					echo "<th>Email</th>";
					echo "<th colspan='2'>Action</th>";
				echo "</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['first_name'] . "</td>";
					echo "<td>" . $row['middle_name'] . "</td>";
					echo "<td>" . $row['last_name'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					$id = $row['id'];
					echo "<td><a href='15_Delete.php?id=$id'>Delete</a></td>";
					echo "<td><a href='15_Edit.php?id=$id'>Edit</a></td>";
				echo "</tr>";
			}
			echo "</table>";
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