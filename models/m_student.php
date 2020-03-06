<?php  

	$list_student = array(
						array('code' => 'ph701',
							  'name' => 'Le Tien Dat',
							  'phone' => '0778866123',
							  'email' => 'ledat@gmail.com',
							  'avatar' => 'avt_dat.jpg'
								),
						array('code' => 'ph702',
							  'name' => 'Le Anh Khoa',
							  'phone' => '0985870625',
							  'email' => 'leanhkhoa30101998@gmail.com',
							  'avatar' => 'avt_khoa.jpg'
								),
						array('code' => 'ph703',
							  'name' => 'Le Tun Tun',
							  'phone' => '0774568765',
							  'email' => 'letun@gmail.com',
							  'avatar' => 'avt_tun.jpg'
								),
						array('code' => 'ph704',
							  'name' => 'Nguyen Van Teo',
							  'phone' => '01248765849',
							  'email' => 'nguyenteo@gmail.com',
							  'avatar' => 'avt_teo.jpg'
								),
						array('code' => 'ph705',
							  'name' => 'Tran Van Ty',
							  'phone' => '0778725545',
							  'email' => 'tranty@gmail.com',
							  'avatar' => 'avt_ty.jpg'
								),
						array('code' => 'ph706',
							  'name' => 'Nguyen Thi Tham',
							  'phone' => '0778822334',
							  'email' => 'nguyentham@gmail.com',
							  'avatar' => 'avt_tham.jpg'
								),
							);

	function search_student($list_student, $search_value){
		$search_value = trim($search_value);
		$arr_student = array();
		if ($search_value == '') {
			$arr_student = $list_student;
		}else{
			foreach ($list_student as $key => $value) {
				if(stripos($value['name'], $search_value) || stripos($value['phone'], $search_value) || stripos($value['email'], $search_value)!== false){
					$arr_student[] = $value;
				}
			}	
		}
		return $arr_student;
	}

	function swap(&$a,&$b){
		$tmp = $a;
		$a = $b;
		$b = $tmp;
	}
		
	function sort_by_name(&$list_student)
	{
		for ($i = 0; $i < count($list_student) -1 ; $i++) {
			for ($j = $i +1; $j < count($list_student) ; $j++) {
				if ($list_student[$i]['name'] > $list_student[$j]['name']) {
					swap($list_student[$i],$list_student[$j]);
				}
			}
		}
		
	}

?>