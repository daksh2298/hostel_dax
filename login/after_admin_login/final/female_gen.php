<?php
function f_gen(){
include '../../dbh.php';

	$table_f_gen="<br><table id='f_gen' cellspacing='0px' cellpadding='10px' border='3px'> 
	<caption>FEMALE GENERAL</caption>
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
	$m_gen_fetch="SELECT * FROM merit_sort WHERE Gender='female' AND Quota='gen';";
	$m_gen_fetch_run=mysqli_query($conn,$m_gen_fetch);
	
	$num=mysqli_num_rows($m_gen_fetch_run);
	for($i=1;$result=mysqli_fetch_assoc($m_gen_fetch_run);$i++){
		$table_f_gen.="<tr>
		<td>{$i}</td>
		<td>{$result['Merit_Rank']}</td>
		<td>{$result['Name']}</td>
		<td>{$result['City']}</td>
		<td>{$result['Distance']}</td>
		<td>{$result['Percentage']} </td>
		 <td>{$result['Score']} </td>
		</tr>";
	}
	echo "<center><br>".$table_f_gen."<br></center>";
}

?>