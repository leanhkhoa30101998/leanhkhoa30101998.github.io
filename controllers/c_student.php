<?php  

	include_once('models/m_student.php');
	$action = filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = "show_list_student";
		}
	}

	switch ($action) {
		case "show_list_student":
			include_once "./views/list_student.php";
			break;
		case "search_student":
			$search_value = filter_input(INPUT_POST, 'search_value');
			$list_student = search_student($list_student, $search_value);
			include_once "./views/list_student.php";
			break;
		case "sortbyname":
			
			
			break;
		default:
			break;
	}
?>