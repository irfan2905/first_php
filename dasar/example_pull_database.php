<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample PHP Database Application</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
  
  //Change the password to match your configuration
  $link = mysqli_connect("localhost", "root", "irfan1234", "alphacrm");
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  echo "<br>";
  
  
  $sql1 = "SELECT NIK, name FROM employee";
  $result = $link->query($sql1);
		
	echo "<div class='container'>";
		echo "<div class='row-fluid'>";
		
			echo "<div class='col-xs-6'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>NIK</th>";
				//echo "<th>Photo</th>";
				echo "<th>Name</th>";
				echo "</tr>";
		  
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["NIK"] . "</td>";
						//echo "<td><img src='$row[photo1]' width='100' heigth='150' >"."</td>";
						echo "<td>" . $row["name"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
				
				echo "</table>";
				
				
				$sql2 = "SELECT salary, phone, email FROM employee";
				$result = $link->query($sql2);
				
				
				echo "<table class='table table-hover table-inverse'>";
				
				
				echo "<tr>";
				echo "<th>Salary</th>";
				echo "<th>Phone</th>";
                echo "<th>E-mail</th>";
				echo "</tr>";
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["salary"] . "</td>";
						echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
				
				echo "</table>";
			echo "</div>";
			echo "</div>";
			/*
			 * second table
			 */
			$sql = "SELECT course_id, title, dept_name, credits FROM course";
			$result = $link->query($sql);
				
			echo "<div class='col-xs-6'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>Course ID</th>";
				echo "<th>Title</th>";
				echo "<th>Department</th>";
				echo "<th>credits</th>";
				echo "</tr>";
			
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["course_id"] . "</td>";
						echo "<td>" . $row["title"] . "</td>";
						echo "<td>" . $row["dept_name"] . "</td>";
						echo "<td>" . $row["credits"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
				echo "</table>";
			echo "</div>";
			echo "</div>";
			
		echo "</div>";
		
		/*
		 * second row
		 */
	
/*		$sql = "SELECT building, room_number, time_slot_id FROM section";
		$result = $link->query($sql);
	
		echo "<div class='row-fluid'>";
		
			echo "<div class='col-xs-6'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>building</th>";
				echo "<th>room_number</th>";
				echo "<th>time_slot_id</th>";
				echo "</tr>";
			
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["building"] . "</td>";
						echo "<td>" . $row["room_number"] . "</td>";
						echo "<td>" . $row["time_slot_id"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
			
				echo "</table>";
			
			echo "</div>";
			echo "</div>";
			
			/*
			 * second table
			 
			$sql = "SELECT course_id, prereq_id FROM prereq";
			$result = $link->query($sql);
				
	
			echo "<div class='col-xs-6'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>Course ID</th>";
				echo "<th>Prerequite ID</th>";
				echo "</tr>";
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["course_id"] . "</td>";
						echo "<td>" . $row["prereq_id"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
*/			
				echo "</table>";
			echo "</div>";
			echo "</div>";
		echo "</div>";
		
	echo "</div>";
  // Close connection
  mysqli_close($link);
  ?>


</body>
</html>