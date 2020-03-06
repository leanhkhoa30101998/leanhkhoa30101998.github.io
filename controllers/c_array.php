<?php
	include_once('./models/m_data.php'); 
	$action = filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = "show_interface";
		}
	}
	switch ($action) {
		case 'show_interface':
			include("./views/main_interface.php");
			break;
		case 'print_all':
			$result = print_all_values($arr_int);
			include('./views/print_result.php');
			break;
		case 'search_value':
			include('./views/form_search_value.php');
			break;
		case 'check_search_value':
			$search_value = filter_input(INPUT_POST, 'search_value');
			if(check_value($arr_int,$search_value)){
				$result = "$search_value had found in array";
			}
			else{
				$result = "$search_value not found in array";
			}
			include('./views/print_result.php');
			break;
		case 'search_max':
			$result = "Max is ".search_max($arr_int);
			include('./views/print_result.php');
			break;
		case 'search_min':
			$result = "Min is ".search_min($arr_int);
			include('./views/print_result.php');
			break;
		case 'sum_array':
			$result = "Sum = ".sum_array($arr_int);
			include('./views/print_result.php');
			break;
		default:
		case 'sum_prime':
			$result = "Sum prime = ".sum_prime($arr_int);
			include('./views/print_result.php');
			break;
		case 'sort_descending':
			$result = "Array sau khi sx: ". print_all_values(sort_descending($arr_int));
			include('./views/print_result.php');
			break;
		case 'sort_ascending':
			$result = "Array sau khi sx: ". print_all_values(sort_ascending($arr_int));
			include('./views/print_result.php');
			break;
		case 'check_symmectric':
			$result = "Cac so dao: ". print_all_values(check_symmectric($arr_int));
			include('./views/print_result.php');
			break;
		case 'check_pfnumber':
			$result = "Cac so perfect: ". print_all_values(check_pfnumber($arr_int));
			include('./views/print_result.php');
			break;
		case 'check_triangle':
			$result = "Cac so triangle: ". print_all_values(check_triangle(sort_ascending($arr_int)));
			include('./views/print_result.php');
			break;
	}
 ?>