<?php
include '../../dbh.php';
function m_obc(){

	$table_m_obc="<br><table id='m_obc' cellspacing='0px' cellpadding='10px' border='3px'> 
	<caption>MALE OBC</caption>
	<tr>
		<th>SR NO</th>		
		<th>MERIT RANK</th>		
		<th>NAME </th>
		<th>CITY </th>
		<th>DISTANCE </th>
		<th>PERCENTAGE     </th>
		<th>SCORE </th>
	</tr>
	";  
	//m_gen_temp();
	//$conn_temp=mysqli_connect('localhost','root','','Hostel');
	$m_gen_fetch="SELECT * FROM merit_sort WHERE Gender='male' AND Quota='obc';";
	//$q="select * from book ";
	$m_gen_fetch_run=mysqli_query($conn,$m_gen_fetch);
	//$qrun=mysqli_query($conn,$qs);
	$num=mysqli_num_rows($m_gen_fetch_run);
	for($i=1;$result=mysqli_fetch_assoc($m_gen_fetch_run);$i++){
		//$e=$result['no'];
		$table_m_obc.="<tr>
		<td>{$i}</td>
		<td>{$result['Merit_Rank']}</td>
		<td>{$result['Name']}</td>
		<td>{$result['City']}</td>
		<td>{$result['Distance']}</td>
		<td>{$result['Percentage']} </td>
		 <td>{$result['Score']} </td>
		</tr>";
	}
	echo "<br>".$table_m_obc."<br>";
}
//m_gen();

?>