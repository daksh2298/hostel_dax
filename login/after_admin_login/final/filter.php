<?php
function filter(){

	include 'male_gen.php';
	include 'male_obc.php';
	include 'male_sc.php';
	include 'female_gen.php';
	include 'female_obc.php';
	include 'female_sc.php';
	if($_POST['gender']=='male'){		//code is incomplete.. gotta add checking of quota too..
		m_gen();						//tentative code
	}if($_POST['gender']=='male'){
		m_obc();
	}if($_POST['gender']=='male'){
		m_sc();
	}if($_POST['gender']=='female'){		//code is incomplete.. gotta add checking of quota too..
		f_gen();						//tentative code
	}if($_POST['gender']=='female'){
		f_obc();
	}if($_POST['gender']=='female'){
		f_sc();
	}
}


?>