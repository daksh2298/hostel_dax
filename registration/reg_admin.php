<?php
include 'final/unsorted.php';
include 'final/waiting.php';
if(isset($_POST['sort'])){
	sort_print();
}
if(isset($_POST['final'])){

	final_insert_print();
}
if(isset($_POST['view'])){
	unsorted();
}
if(isset($_POST['wait'])){
	waiting();
}
function sort_print(){

	include 'final/sort_all.php';

    $sql="TRUNCATE TABLE merit_sort;";
	$run=mysqli_query($conn,$sql);

	$sql="TRUNCATE TABLE merit_final;";
	$run=mysqli_query($conn,$sql);

	$sql="TRUNCATE TABLE merit_waiting;";
	$run=mysqli_query($conn,$sql);

		sort_print_all();
}
function final_insert_print(){

	include 'final/sort_all.php';
	include 'final/final_table_print.php';

	$sql="TRUNCATE TABLE merit_sort;";
	$run=mysqli_query($conn,$sql);


	$sql="TRUNCATE TABLE merit_final;";
	$run=mysqli_query($conn,$sql);

	$sql="TRUNCATE TABLE merit_waiting;";
	$run=mysqli_query($conn,$sql);

	sort_insert_all();

	$sql="select * from merit_sort";
	$run=mysqli_query($conn,$sql);
	$row_cnt=mysqli_num_rows($run);
	for($i=1;$i<=$row_cnt;$i++){
		$sql="SELECT * from merit_sort where Merit_Rank='$i';";
		$run=mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($run);

		$Merit_Rank=$arr['Merit_Rank'];
		$G_ID=$arr['G_ID'];
		$name=$arr['Name'];
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

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_gen']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_gen']++;
				}
			}
			else if($quota=="obc"){

				if($count['male_obc']<=$obc_m){

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_obc']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_obc']++;
				}
			}
			else if($quota=="sc"){

				if($count['male_sc']<=$sc_m){

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_sc']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['male_sc']++;
				}
			}
		}else if($gender=="female"){

			if($quota=="gen"){

				if($count['female_gen']<=$gen_fm){

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_gen']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_gen']++;
				}
			}
			else if($quota=="obc"){

				if($count['female_obc']<=$obc_fm){

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_obc']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_obc']++;
				}
			}
			else if($quota=="sc"){

				if($count['female_sc']<=$sc_fm){

					$sql="INSERT INTO merit_final (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_sc']++;
				}else{
					$sql="INSERT INTO merit_waiting (Merit_Rank,G_ID,Name,City,Distance,Contact,Gender,Percentage,Quota,Score)
					VALUES ('$Merit_Rank','$G_ID','$name','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
					mysqli_query($conn,$sql);
					$count['female_gen']++;
				}
			}
		}
	}
	final_print();

	echo "</table>";
}


?>
