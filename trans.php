<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="trans.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


  <div id="page-wrapper">

      <!-- Header !-->
        <header id="header">
          <!--<h1 id="logo" color="white"><a href="hostel_accommodation.html">HOSTEL</a></h1>!-->
          <a href="index.php"><h1 color="white">HOSTEL</h1></a>
          <nav id="nav">
            <ul>
             <i class="fa fa-user" style="color:#e44c65; font-size:30px;"></i>&nbsp;<li><a class="hover" href="registration/Reg_final.html" ; ">REGISTER</a></li>          
            </ul>
          </nav>
        </header>
    </div>

<?php

if(isset($_SESSION['email'])){

  header("Location:login/after_login/accommodation2.php");

}else if(isset($_SESSION['username'])){

  header("Location:login/after_admin_login/admin.php");

}else{

  echo '<div class="transbox1">
    <img src="studentlogo.jpg" class="user">
    <br>
    <br>
    <br>
    <center>
    <p><h2><bold>Student Login</bold></h2>
      <br>
      <br>
     <form name="s_form" action="login/login_verify.php" method="POST">
           <b> E-mail&nbsp&nbsp&nbsp&nbsp&nbsp:</b>
                  <input type="text" name="email" class="input special" id="username" placeholder="Email">
                  <span id ="err_username"></span><br><br>
                <b>Password:</b>
                  <input type="Password" class="input special" name="pwd" id="pword" placeholder="****">
                  <span id ="err_pword"></span><br><br>

                  <br>
                
                  <br>
                  <br>

                  <b><input type="submit" name="submit" class="button special" id="submit" value="Login">
               <input type="reset" class="button special" name="reset" id="reset" value="Reset"></b>
              
      </form>
       </p>
    </center>
  </div>
</div>


<div class="background">
  <div class="transbox2">
    <img src="adminlogo.ico" class="user">
    <br>
    <br>
    <br>
    <center>
    <p><h2><bold>Admin Login</bold></h2>
      <br>
      <br>
      <form name="s_form" action="login/login_verify.php" method="POST">
        <b>Username:</b>
          <input type="text" name="username" class="input special" placeholder="Enter Username"><br><br>

        <b>Password:</b>
          <input type="Password" class="input special" name="pwd" placeholder="****"><br><br><br>

          <br>
          <h1><input type="submit" class="button special" name="submit_admin"value="Login"></h1>
        
        

      </p>
    </center>
  </div>
</div>
</form>';
}
?>
<!--footer-->
<div class="footer" style="background: rgb(255,255,255,0.8);padding:10px;bottom:0px;text-align: center;">
  <a href="#"><i class="fa fa-facebook-official " style="font-size:30px;color:#3b5998"></i></a>&nbsp&nbsp
  <a href="#"><i class="fa fa-twitter " style="font-size:30px;color:#1da1f2"></i></a>&nbsp&nbsp
  <a href="#"><i class="fa fa-instagram " style="font-size:30px;color:#c13584"></i></a>&nbsp&nbsp
  <a href="#"><i class="fa fa-google-plus " style="font-size:30px;color:#dd4b39"></i></a>&nbsp&nbsp
  <a href="#"><i class="fa fa-skype " style="font-size:30px;color:#00aff0"></i></a>
</div>
<!--end of the footer-->
</body>
</html>