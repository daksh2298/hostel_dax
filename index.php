<?php
session_start();
 ?>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="maincss.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
<?php
  if(isset($_SESSION['email']) || isset($_SESSION['username'])){
    header("Location: login/after_login/accommodation2.php");
  }else{
		echo '<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<!--<h1 id="logo" color="white"><a href="hostel_accommodation.html">HOSTEL</a></h1>--!>
					<a href="index.php"><h1 color="white">HOSTEL</h1></a>
					<nav id="nav">
						<ul>
							<i class="fa fa-sign-in" style="color:#e44c65; font-size:30px;"></i>&nbsp;<li><a class="hover" href="trans.php" ; ">LOGIN</a></li>
							<i class="fa fa-user" style="color:#e44c65; font-size:30px;"></i>&nbsp<li>
								<a class="hover" href="registration/Reg_final.html">STUDENT REGISTRATION</a>
							</li>

						</ul>
					</nav>
				</header>
		</div>

<!--start of the slideshow-->
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="p1.jpg">
  <div class="text">Dormitory</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="p2.jpg">
  <div class="text">Hygienic Canteen</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="p3.jpg">
  <div class="text">Dormitory</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="p10.jpg">
  <div class="text">Canteen Ambience</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="p5.jpg">
  <div class="text">Outer look</div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>
<!--Instructions-->
<img src="ins.jpg" style="width: 175px;height: 175px;margin-top: 4em; margin-left:10em;">
<div class="ins1"></div>
<div class="ins">
  <ul class="fa-ul">
  <li class="ins2"><i class="fa-li fa fa-angle-double-right " style="color: white;"></i>Go through our <a class="link2"href="Rules and regulation.pdf" target="_blank">rules and regulations .</a></li>
  <li class="ins2"><i class="fa-li fa fa-angle-double-right "></i>Admission process is solely dependent on merit rank.</li>
  <li class="ins2"><i class="fa-li fa fa-angle-double-right "></i>Priority factor for allocating rooms is distance.</li>
  <li class="ins2"><i class="fa-li fa fa-angle-double-right "></i><a target="_blank" class="link2"href="HOW AND WHEN TO APPLY.pdf">How and when to apply?</a></li>
  <li class="ins2"><i class="fa-li fa fa-angle-double-right "></i><a class="link2"href="Who_can_apply.pdf" target="_blank">Who can apply?</a></li>
</ul>
  </div>
  <!--end of Instructions-->
<!--footer-->
<div class="footer" style="background: rgb(255,255,255,0.8);padding:10px;bottom:0px;text-align: center;">
  <a href="#"><i class="fa fa-facebook-official " style="font-size:30px;color:#3b5998"></i></a>&nbsp&nbsp
  <a href="#"><i class="fa fa-twitter " style="font-size:30px;color:#1da1f2"></i></a>&nbsp&nbsp
  <a href="#"><i class="fa fa-instagram " style="font-size:30px;color:#c13584"></i></a>&nbsp&nbsp
  <a href="#"><i class="fa fa-google-plus " style="font-size:30px;color:#dd4b39"></i></a>&nbsp&nbsp
  <a href="#"><i class="fa fa-skype " style="font-size:30px;color:#00aff0"></i></a>
</div>
<!--end of the footer-->

		';
  }
    ?>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

	</body>
</html>
