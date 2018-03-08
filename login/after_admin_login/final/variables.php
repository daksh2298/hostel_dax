<?php
include '../../dbh.php';
//$conn=mysqli_connect('localhost','root','','Hostel');
	$seat=20;
	
	$seat_m=$seat*0.5;
	$seat_fm=$seat*0.5;
	
	$gen_m=$seat_m*0.7;
	$obc_m=$seat_m*0.2;
	$sc_m=$seat_m*0.1;
	
	$gen_fm=$seat_fm*0.7;
	$obc_fm=$seat_fm*0.2;
	$sc_fm=$seat_fm*0.1;

	$count=array('male_gen'=>1,'male_obc'=>1,'male_sc'=>1,'female_gen'=>1,'female_obc'=>1,'female_sc'=>1);
/*
	/*$sql="SELECT * from merit_sort where Merit_Rank='$i';";
		$run=mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($run);
		
		$Merit_Rank=$arr['Merit_Rank'];
		$G_ID=$arr['G_ID'];
		$name=$arr['Name'];
		$city=$arr['City'];
		$contact=$arr['Contact'];
		$gender=$arr['Gender'];
		$percentage=$arr['Percentage'];
		$quota=$arr['Quota'];
		$score=$arr['Score'];

	function for_loop_variables(){
		$conn=mysqli_connect('localhost','root','','Hostel');
		$sql="SELECT * from merit_sort where Merit_Rank='$i';";
		$run=mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($run);
		
		$Merit_Rank=$arr['Merit_Rank'];
		$G_ID=$arr['G_ID'];
		$name=$arr['Name'];
		$city=$arr['City'];
		$contact=$arr['Contact'];
		$gender=$arr['Gender'];
		$percentage=$arr['Percentage'];
		$quota=$arr['Quota'];
		$score=$arr['Score'];
		//return $gender;
	}
*/
?>