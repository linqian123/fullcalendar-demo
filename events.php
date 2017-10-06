<?php
	//对颜色的随机选择处理
	$colors = array("#360","#f30","#06c");
	$key = array_rand($colors);
	$color = $colors[$key];
	//事件信息数组
	/*$start = date()*/
	$arr = array(
		"title" => $_POST['title'],
		"start" => $_POST['start'],
		"allDay"=> true, 
		"color" => $color
	);
	echo json_encode($arr);
?>
