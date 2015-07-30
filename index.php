<?php
error_reporting( E_ALL & ~E_NOTICE);

$category=3;
$luckynum=0;

$probability=[1,1,1];//概率
$prizename=['third prize','second price','first price'];
$prizenum=[3,2,1];
$randcategroy=mt_rand(0,$category-1);
$randnum=mt_rand(0,$probability[$randcategroy]);

if($randnum==$luckynum){
	$data=array(
		$prizename[$randcategroy],
		$prizenum[$randcategroy]);
	
}else{
	$data=array(
		'thank you!',5);

}


echo json_encode($data);





?>