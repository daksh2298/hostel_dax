<?php
include 'dbh.php';
if (isset($_POST['submit'])){

	$fname=$_POST['f_name'];
	$mname=$_POST['m_name'];
	$lname=$_POST['l_name'];
	$name=$fname.' '.$mname.' '.$lname;
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$percentage=floatval($_POST['percentage']);
	$quota=$_POST['quota'];
	$email=$_POST['email'];

	$sql_em="SELECT * FROM merit WHERE Email='$email';";
	$run_em=mysqli_query($conn,$sql_em);
	$rows_em=mysqli_num_rows($run_em);

	$sql_no="SELECT * FROM merit WHERE Contact='$contact';";
	$run_no=mysqli_query($conn,$sql_no);
	$rows_no=mysqli_num_rows($run_no);
	$pwd_temp=$_POST['pwd'];
	$rpwd_temp=$_POST['rpwd'];
	if($percentage>100){
		echo '<script>if(confirm("Enter Percentage less than 100!!!\nPlease Re-Enter!!!")==true){
			window.location.href = "Reg_final.html";
		}else{
			window.location.href = "../index.php";
		}</script>';
	}else if(!($pwd_temp===$rpwd_temp)){
		echo '<script>if(confirm("Password confirmed is not same!!!\nPlease Re-Enter!!!")==true){
			window.location.href = "Reg_final.html";
		}else{
			window.location.href = "../index.php";
		}</script>';
	}else if($rows_em>0){
		echo '<script>if(confirm("Email-id already registered!!!\nPlease Re-Enter!!!")==true){
			window.location.href = "Reg_final.html";
		}else{
			window.location.href = "../index.php";
		}</script>';
	}else{

		$pwd=$_POST['pwd'];
		$city=$_POST['city'];
		$url='https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=Gandhinagar&destinations='.$city.'&key=AIzaSyCjZWSdx0JqrdVcnhNM7ayHb4cXawpEtpE';
		$rows=json_decode(file_get_contents($url))->rows;

		$status=$rows[0]->elements[0]->status;
		if(boolval(strcmp($status,"OK"))){
			echo '<script>if(confirm("Enter Valid City!!!\nPlease Re-Enter!!!")==true){
			window.location.href = "Reg_final.html";
		}else{
			window.location.href = "../index.php";
		}</script>';
		}
		else{

			$dist_str=$rows[0]->elements[0]->distance->text;
			$dist_st=str_replace(',','',$dist_str);
			$dist_s=str_replace(' mi','',$dist_st);
			$distance=floatval($dist_s);



			$score=$percentage*0.4 + $distance*0.6;

			$sql="INSERT INTO users (Email,Password)
			VALUES ('$email','$pwd');";
			mysqli_query($conn,$sql);

			$sql="INSERT INTO merit (Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
			VALUES ('$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
			mysqli_query($conn,$sql);

			sort_and_final();
			$sql="SELECT G_ID FROM merit WHERE Contact='$contact';";
			$sql_run=mysqli_query($conn,$sql);
			$G_ID_AR=mysqli_fetch_assoc($sql_run);
			$G_ID=$G_ID_AR['G_ID'];

			echo '<script>if(confirm("Succesfully Registered!!\nPress OK to Login")==true){
			window.location.href = "../trans.php";
			}else{
				window.location.href = "../index.php";
			}</script>';
		}
	}
}
	function sort_and_final(){

	include 'final/sort_all1.php';
	include 'dbh.php';

    $sql="TRUNCATE TABLE merit_sort;";
	$run=mysqli_query($conn,$sql);

	$sql="TRUNCATE TABLE merit_final;";
	$run=mysqli_query($conn,$sql);

	$sql="TRUNCATE TABLE merit_waiting;";
	$run=mysqli_query($conn,$sql);

	sort_all();

	$sql="SELECT * FROM merit_sort";
	$run=mysqli_query($conn,$sql);
	$row_cnt=mysqli_num_rows($run);
	for($i=1;$i<=$row_cnt;$i++){
		$sql="SELECT * FROM merit_sort WHERE Merit_Rank='$i';";
		$run=mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($run);

		$Merit_Rank=$arr['Merit_Rank'];
		$G_ID=$arr['G_ID'];
		$name=$arr['Name'];
		$email=$arr['Email'];
		$pwd=$arr['Password'];
		$city=$arr['City'];
		$distance=$arr['Distance'];
		$contact=$arr['Contact'];
		$gender=$arr['Gender'];
		$percentage=$arr['Percentage'];
		$quota=$arr['Quota'];
		$score=$arr['Score'];


		if($gender=="male"){
			if($quota=="gen"){
				if($count['male_gen']<=$gen_m){

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_gen']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_gen']++;
				}
			}
			else if($quota=="obc"){

				if($count['male_obc']<=$obc_m){

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_obc']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_obc']++;
				}
			}
			else if($quota=="sc"){

				if($count['male_sc']<=$sc_m){

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_sc']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_sc']++;
				}
			}
		}else if($gender=="female"){

			if($quota=="gen"){

				if($count['female_gen']<=$gen_fm){

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_gen']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_gen']++;
				}
			}
			else if($quota=="obc"){

				if($count['female_obc']<=$obc_fm){

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_obc']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_obc']++;
				}
			}
			else if($quota=="sc"){

				if($count['female_sc']<=$sc_fm){

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_sc']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_sc']++;
				}
			}
		}
	}
}

?>
