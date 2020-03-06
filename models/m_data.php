<?php 
	$arr_int = array(10,9,12,6,42,454,28,214,532,496,141,88,1);
	
	$arr_int[] = 100;
	unset($arr_int[4]);
	$arr_int = array_values($arr_int);
	
	function print_all($arr_int){

		for ($i=0; $i <count($arr_int) ; $i++) { 
			echo $arr_int[$i].", ";
		}

	}
	function print_all_values($arr_int){
		$result = "";
		for ($i=0; $i <count($arr_int) ; $i++) { 
			$result .= $arr_int[$i].", ";
		}
		return $result;
	}

	function check_value($arr_int, $search_value){
		$result = false;
		for ($i=0; $i <count($arr_int) ; $i++) { 
			if($arr_int[$i]==$search_value){
				$result = true;
				break;
			}
		}
		return $result;
	}

	function search_max($arr_int){
		$max = $arr_int[0];
		for ($i=1; $i <count($arr_int) ; $i++) { 
			if($arr_int[$i]> $max){
				$max = $arr_int[$i];
			}
		}
		return $max;
	}
	
	function search_min($arr_int){
		$min = $arr_int[0];
		for ($i=1; $i <count($arr_int) ; $i++) { 
			if($arr_int[$i]< $min){
				$min = $arr_int[$i];
			}
		}
		return $min;
	}
	
	function sum_array($arr_int){
		$sum = 0;
		for ($i=0; $i <count($arr_int) ; $i++) { 
			$sum += $arr_int[$i];
		}
		return $sum;
	}
	
	function sum_odd($arr_int){
		$sum = 0;
		for ($i=0; $i <count($arr_int); $i++) { 
			if($arr_int[$i] % 2 !=0){
				$sum += $arr_int[$i];
			}
		}
		return $sum;
	}

	function sum_even($arr_int){
		$sum = 0;
		for ($i=0; $i <count($arr_int); $i++) { 
			if($arr_int[$i] % 2 ==0){
				$sum += $arr_int[$i];
			}
		}
		return $sum;
	}

	function is_prime($number){
		$result = true;
		if($number<2){
			$result = false;
		}
		else{
			for ($i=2; $i <$number; $i++) { 
				if($number % $i ==0){
					$result = false;
					break;
				}
			}
		}
		return $result;
	}

	function sum_prime($arr_int){
		$sum = 0;
		for ($i=0; $i <count($arr_int) ; $i++) { 
			if(is_prime($arr_int[$i])){
				$sum += $arr_int[$i];
			}
		}
		return $sum;
	}

	function sort_descending($arr_int){
		for ($i=0; $i <count($arr_int)-1; $i++) { 
			for ($j=$i+1; $j <count($arr_int); $j++) { 
				if($arr_int[$i]<$arr_int[$j]){
					$tmp = $arr_int[$i];
					$arr_int[$i] = $arr_int[$j];
					$arr_int[$j] = $tmp;
				}
			}
		}
		return $arr_int;
	}

	function sort_ascending($arr_int){
		for ($i=0; $i <count($arr_int)-1; $i++) { 
			for ($j=$i+1; $j <count($arr_int); $j++) { 
				if($arr_int[$i]>$arr_int[$j]){
					$tmp = $arr_int[$i];
					$arr_int[$i] = $arr_int[$j];
					$arr_int[$j] = $tmp;
				}
			}
		}
		return $arr_int;
	}

	function check_sodao($n){
		$dao = 0;
		while ($n > 0) {
		    $cuoi = $n % 10;
		    $dao = $dao * 10 + $cuoi;
		    $n = (int)($n / 10);
		}
		return $dao;
	}

	function check_symmectric($arr_int){
		$arr_sodao = array();
		for($i = 0; $i < count($arr_int); $i++){
			if(check_sodao($arr_int[$i]) == $arr_int[$i]){
				$arr_sodao[] = $arr_int[$i];
			}
		}
		return $arr_sodao;
	}

	function perfect_number($n){
		$sum = 0;
		for($i = 1; $i <= $n/2; $i++){
			if($n % $i == 0){
				$sum += $i;
			}
		}
		return $sum;
	}

	function check_pfnumber($arr_int){
		$pfnumber_arr = array();
			for($i = 0; $i < count($arr_int); $i++){
			if(perfect_number($arr_int[$i]) == $arr_int[$i]){
				$pfnumber_arr[] = $arr_int[$i];
			}
		}
		return $pfnumber_arr;
	}

	function triangle($n){
		$sum = 0;
		for ($i = 1; $i <= $n; $i++){
			$sum += $i;
		}
		return $sum;
	}

	function check_triangle($arr_int){
		$arr_triangle = array();
		for($i = 0; $i < count($arr_int); $i++){
			for($j = 1; $j <= $arr_int[$i]; $j++){
				if($arr_int[$i] == triangle($j)){
					$arr_triangle[] = $arr_int[$i];
					break;
				}
			}
		}
		return $arr_triangle;
	}
 ?>