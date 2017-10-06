<?php
	//对颜色的随机选择处理
	$colors = array("#360","#f30","#06c");
	$key = array_rand($colors);
	$color = $colors[$key];
	//事件信息数组
	$start = trim($_POST['sdate']);
	$end = trim($_POST['edate']);
	$starttime = trim($_POST['stime']);
	$endtime = trim($_POST['etime']);
	$allDay = $_POST['allDay']=="1"?true:false;
	$arr = array(
		"title" => $_POST['title'],
		//"start" => date("Y-m-d H:i:s",strtotime($start.' '.$starttime),//strtotime将字符串表达的时间转换成时间戳，解决直接采集的时间偏前一天的问题
		"start" => date("Y-m-d",strtotime($start)).' '.date("H:i:s",strtotime($starttime)),
		"end"   => date("Y-m-d",strtotime($end)).' '.date("H:i:s",strtotime($endtime)),
		//"end"   => date("Y-m-d H:i:s",strtotime($end.' '.$endtime),
		"allDay"=> $allDay, 
		"color" => $color
	);
	echo json_encode($arr);
?>
