<?php
if(isset($_POST['from_date'])&&isset($_POST['to_date'])){
	// echo json_encode($_POST['from_date']);
	// echo json_encode($_POST['to_date']);
	$from_date1=date_create($_POST['from_date']);
	$to_date1=date_create($_POST['to_date']);
	$dates=$from_date1->diff($to_date1,true)->days;
	$sunday=intval($dates/7)+($from_date1->format('N')+$dates % 7 >= 7);
//	echo "total sundays=".$sunday."\n";
	$p=date_diff($from_date1,$to_date1);
	$total_days= $p->format("%d days");
	$total_days=(int)$total_days+1;

//	echo "total NO of days=".$total_days."\n";

	$tothrs=(int)$total_days-(int)$sunday;
	$tothrs=$tothrs*8;
	//echo "total working hrs without sunday=\n".$tothrs;
	
	 echo json_encode(array("sunday"=>$sunday,"total_days"=>$total_days,"total_hrs"=>$tothrs));
	// echo json_encode($to_date1);
	exit;
}

?>