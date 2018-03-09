<?php

session_start();
include '../dbh.php';
if (isset($_POST['submit'])) {

	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

		$sql = "SELECT * FROM merit WHERE Email='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			echo '<script>if(confirm("Email id not registered!!!\nPlease Re-Enter!!!")==true){
			window.location.href = "../trans.php";
		}else{
			window.location.href = "../index.php";
		}</script>';
			exit();
		} else if ($row = mysqli_fetch_assoc($result)) {
					if($pwd==$row['Password']){
						$_SESSION['email'] = $row['Email'];
						$_SESSION['G_ID'] = $row['G_ID'];
						header("Location:after_login/accommodation2.php");
					}else{
						echo '<script>if(confirm("Password not correct!!!\nPlease Re-Enter!!!")==true){
			window.location.href = "../trans.php";
		}else{
			window.location.href = "../index.php";
		}</script>';
					}
				}

}else if (isset($_POST['submit_admin'])) {

	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	$sql = "SELECT * FROM users_admin WHERE Username='$username'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck < 1) {
		header("Location: ../index.php?login=erroradmin");
		exit();
	} else if ($row = mysqli_fetch_assoc($result)) {
				if($pwd==$row['Password']){
					$_SESSION['username'] = $row['Username'];
					header("Location:after_admin_login/admin.php");
				}
		}

}
else{
	header("Location: ../index.php?login=errormain");
}
