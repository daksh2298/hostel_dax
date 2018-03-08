<?php
function unsorted(){
	include '../../dbh.php';
	//include 'dbh.final.php';
	$sql="SELECT * FROM merit;";

	$sql_run=mysqli_query($conn,$sql);

	$run=mysqli_query($conn,$sql);
	echo "<center><table id='waiting' cellspacing='0px' cellpadding='10px' border='3px'>
	<br><caption>UNSORTED LIST</caption>";
		echo "<tr>";
			echo "<th>G_ID</th>";
			echo "<th>Name</th>";
			echo "<th>City</th>";
			echo "<th>Distance</th>";
			echo "<th>Contact</th>";
			echo "<th>Gender</th>";
			echo "<th>Percentage</th>";
			echo "<th>Quota</th>";
			echo "<th>Score</th>";
		echo "</tr>";
		//$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
		for($i=1;$row=mysqli_fetch_assoc($run);$i++){
				echo "<tr>";
				//echo "<td>" . $i . "</td>";
				echo "<td>" . $row['G_ID'] . "</td>";
				echo "<td>" . $row['Name'] . "</td>";
				echo "<td>" . $row['City'] . "</td>";
				echo "<td>" . $row['Distance'] . "</td>";
				echo "<td>" . $row['Contact'] . "</td>";
				echo "<td>" . $row['Gender'] . "</td>";
				echo "<td>" . $row['Percentage'] . "</td>";
				echo "<td>" . $row['Quota'] . "</td>";
				echo "<td>" . $row['Score'] . "</td>";
				echo "</tr>";
		}
	echo "</table></center>"; 
	

}


?>