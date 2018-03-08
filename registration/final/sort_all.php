<?php
include '../../dbh.php';
function sort_print_all(){
//include 'dbh.final.php';
	$sql = "TRUNCATE TABLE merit_sort;";
	//$conn=mysqli_connect('localhost','root','','Hostel');
	$sql = "SELECT * FROM merit ORDER BY Quota ASC,Score DESC;";
	$run=mysqli_query($conn,$sql);
	echo '<table border="1">
	<caption>SORTED LIST</caption>';
		echo "<tr>";
			echo "<th>Merit Rank</th>";
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
				echo "<td>" . $i . "</td>";
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
				$G_ID=$row['G_ID'];
				$name=$row['Name'];
				$city=$row['City'];
				$distance=$row['Distance'];
				$contact=$row['Contact'];
				$gender=$row['Gender'];
				$percentage=$row['Percentage'];
				$quota=$row['Quota'];
				$score=$row['Score'];
				$sql="INSERT INTO merit_sort (G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score) 
				VALUES ('$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
				mysqli_query($conn,$sql);
		}
	echo "</table>"; 
}
function sort_insert_all(){
//include 'dbh.final.php';
//	$conn=mysqli_connect('localhost','root','','Hostel');
	$sql = "SELECT * FROM merit ORDER BY Quota ASC,Score DESC;";
	$run=mysqli_query($conn,$sql);
	//$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
		for($i=1;$row=mysqli_fetch_assoc($run);$i++){
				$G_ID=$row['G_ID'];
				$name=$row['Name'];
				$city=$row['City'];
				$distance=$row['Distance'];
				$contact=$row['Contact'];
				$gender=$row['Gender'];
				$percentage=$row['Percentage'];
				$quota=$row['Quota'];
				$score=$row['Score'];
				$sql="INSERT INTO merit_sort (G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score) 
				VALUES ('$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
				mysqli_query($conn,$sql);
		}
}


?>