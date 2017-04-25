<?php  
$satu = "fun&!! time love";
$first = explode(" ",preg_replace("/[^A-Za-z0-9. ]/","",$satu));
$per = strlen($first[0]);
$tama = strlen($first[1]);

usort($first, function($per,$tama){

if($per == $tama){
	return 0;
}
	return ($per>$tama)?-1:1;

});

echo $first[0];

?>