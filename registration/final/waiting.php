<?php
include '../../dbh.php';
function waiting(){
	//$conn=mysqli_connect('localhost','root','','Hostel');

	$table_waiting="<br><table id='waiting' cellspacing='0px' cellpadding='10px' border='3px'> 
	<caption>WAITING LIST</caption>
	<tr>
		<th>SR NO</th>		
		<th>MERIT RANK</th>		
		<th>G_ID</th>		
		<th>NAME </th>
		<th>City </th>
		<th>DISTANCE </th>
		<th>PERCENTAGE     </th>
		<th>GENDER</th>
		<th>QUOTA</th>
		<th>SCORE </th>
	</tr>";

	$waiting_fetch="SELECT * FROM merit_waiting;";
	$waiting_fetch_run=mysqli_query($conn,$waiting_fetch);
	for($i=1;$result=mysqli_fetch_assoc($waiting_fetch_run);$i++){
		//$e=$result['no'];
		$table_waiting.="<tr>
		<td>{$i}</td>
		<td>{$result['Merit_Rank']}</td>
		<td>{$result['G_ID']}</td>
		<td>{$result['Name']}</td>
		<td>{$result['City']}</td>
		<td>{$result['Distance']}</td>
		<td>{$result['Percentage']} </td>
		<td>{$result['Gender']} </td>
		<td>{$result['Quota']}</td>
		 <td>{$result['Score']} </td>
		</tr>";
	}
	echo $table_waiting;
}

?>