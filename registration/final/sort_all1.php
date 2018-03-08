<?php
function sort_all(){
include '../dbh.php';
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