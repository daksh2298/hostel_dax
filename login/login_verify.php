<?php

session_start();
include '../dbh.php';
if (isset($_POST['submit'])) {
	
//	include 'dbh.inc.php';
	//$conn=mysqli_connect('localhost','daksh','daksh2298','Hostel_final');
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	//Error handlers
	//Check if inputs are empty
	//if (empty($uid) || empty($pwd)) {
	//	header("Location: ../index.php?login=empty");
	//	exit();
	//} else {
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
						//$_SESSION['u_first'] = $row['user_first'];
						header("Location:after_login/accommodation2.php");
					}else{
						echo '<script>if(confirm("Password not correct!!!\nPlease Re-Enter!!!")==true){
			window.location.href = "../trans.php";
		}else{
			window.location.href = "../index.php";
		}</script>';
					}	
				}
					//header("Location:../trans.html");
				/*//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../index.php?login=success");
					exit();
				}*/
			//}
		//}
	//}
//} else {
//	header("Location: ../index.php?login=error");
//	exit();
}else if (isset($_POST['submit_admin'])) {
	
//	include 'dbh.inc.php';
	//$conn=mysqli_connect('localhost','daksh','daksh2298','Hostel_final');
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];

	//Error handlers
	//Check if inputs are empty
	//if (empty($uid) || empty($pwd)) {
	//	header("Location: ../index.php?login=empty");
	//	exit();
	//} else {
		$sql = "SELECT * FROM users_admin WHERE Username='$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=erroradmin");
			exit();
		} else if ($row = mysqli_fetch_assoc($result)) {
					if($pwd==$row['Password']){
						$_SESSION['username'] = $row['Username'];
						//$_SESSION['u_first'] = $row['user_first'];
						header("Location:after_admin_login/admin.php");
					}	
				}
				/*//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../index.php?login=success");
					exit();
				}*/
			//}
		//}
	//}
//} else {
//	header("Location: ../index.php?login=error");
//	exit();
}

else{
	header("Location: ../index.php?login=errormain");
}