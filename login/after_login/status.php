<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Status</title>
    <link rel="stylesheet" href="accommodation2.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="page-wrapper">

      <!-- Header -->
        <header id="header" opacity="0.3">
          <h1 color="white">HOSTEL</h1>
          <nav id="nav">
            <ul>
              <li><a href="accommodation2.php">Hostel Accommodation </a></li>
              <li>
                <a href="status.php">Status</a>
              </li>
              <li><a href="contact2.html">Contact Us</a></li>
             <!-- <li><a class="button special">Log Out</a></li>!-->
             <li><form action="logout.php" method="POST">
               <button class="button special" name="submit" type="submit">Log Out</button>
             </form></li>
            </ul>
          </nav>
        </header>
    </div>
<?php

	include '../dbh.php';
	$email=$_SESSION['email'];
	
	$sql="SELECT * FROM merit WHERE Email='$email';";
	$result=mysqli_query($conn,$sql);

	$name=mysqli_fetch_assoc($result);
	echo "<br><br><br><br>";
	echo "<center><h1>WELCOME ".$name['Name'].'</h1></center>';

	$resultcheck=mysqli_num_rows($result);

	if($resultcheck<1){
		echo "<h1>NO USERS FOUND</h1>";
	}
	else{
		$sql="SELECT G_ID FROM merit WHERE Email='$email';";
		$run=mysqli_query($conn,$sql);
		
		$G_ID_AR=mysqli_fetch_assoc($run);
		$G_ID=$G_ID_AR['G_ID'];
		
		$sql="SELECT MERIT_RANK FROM merit_sort WHERE G_ID='$G_ID';";
		$run=mysqli_query($conn,$sql);

		$MR_AR=mysqli_fetch_assoc($run);
		$MERIT_RANK=$MR_AR['MERIT_RANK'];

		if($MERIT_RANK<=$seat){
			echo "<center><h1>You are selected for the hostel</h1>";
			echo "<h2>Your Merit Rank is ".$MERIT_RANK."</h2></center>";
		}else{

			echo "<h1>You are not selected for the hostel</h1>";
			echo "<h2>Your Waiting List Number is".($MERIT_RANK-$seats)."</h2>";


		}


	}

?>
<div class="footer">
  <a href="#"><i class="fa fa-facebook-official " style="font-size:30px;color:#3b5998"></i></a>&nbsp;&nbsp;
  <a href="#"><i class="fa fa-twitter " style="font-size:30px;color:#1da1f2"></i></a>&nbsp;&nbsp;
  <a href="#"><i class="fa fa-instagram " style="font-size:30px;color:#c13584"></i></a>&nbsp;&nbsp;
  <a href="#"><i class="fa fa-google-plus " style="font-size:30px;color:#dd4b39"></i></a>&nbsp;&nbsp;
  <a href="#"><i class="fa fa-skype " style="font-size:30px;color:#00aff0"></i></a>
</div>
</body>
</html>