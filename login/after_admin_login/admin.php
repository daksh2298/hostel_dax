<?php
include 'final/unsorted.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
    <link rel="stylesheet" href="admin.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="page-wrapper">

      <!-- Header -->
        <header id="header" opacity="0.3">
          <h1 color="white">HOSTEL</h1>
          <nav id="nav">
            <ul>            
             <li><form action="logout.php" method="POST">
               <button class="button special" name="logout" type="submit">Log Out</button>
             </form></li>
            </ul>
          </nav>
        </header>
    </div><br><br><center>
    <nav id="nav" class="nav">
            <ul>            
             <form action="reg_admin.php" method="POST">
             	<li><button type="submit" class="button special" name="view">View List</button></li>
             	<li><button type="submit" class="button special" name="final">Final List</button></li>
             	<li><button type="submit" class="button special" name="sort">Sorted List</button></li>
             	<li><button type="submit" class="button special" name="wait">Waiting List</button></li><br><br>
            <li><fieldset style="width: 320px;">
              <legend style="color: black; font-size: 18px;">Filter</legend>
              <li><button type="submit" name="filter" class="button special">Filter List ==></button>&nbsp;&nbsp;
              
            <select name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
              </li>
            </fieldset>    
            </li>
             </form>
            </ul>
    </nav></center>	
	<?php
	unsorted();
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