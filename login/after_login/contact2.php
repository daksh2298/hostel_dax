<?php

include '../dbh.php';

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$no=$_POST['phone'];
	$msg=$_POST['message'];

	$sql="INSERT INTO feedback(Name,Email,Phone,Message) VALUES ('$name','$email','$no','$msg');";
	mysqli_query($conn,$sql);

	echo '<script>if(confirm("Thank you for your feedback!!")==true){
			window.location.href = "accommodation2.php";
		}else{
			window.location.href = "accommodation2.php";
		}</script>';
}




?>