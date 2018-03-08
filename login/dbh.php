<?php
        //there are more 2/3 dbh files to edit.. so edit them too..
	$dbserver='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='Hostel_global';

	$conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

	$seat=50;
	
	$seat_m=$seat*0.5;
	$seat_fm=$seat*0.5;
	
	$gen_m=$seat_m*0.7;
	$obc_m=$seat_m*0.2;
	$sc_m=$seat_m*0.1;
	
	$gen_fm=$seat_fm*0.7;
	$obc_fm=$seat_fm*0.2;
	$sc_fm=$seat_fm*0.1;

	$count=array('male_gen'=>1,'male_obc'=>1,'male_sc'=>1,'female_gen'=>1,'female_obc'=>1,'female_sc'=>1);
?>
