<?php 
function cobax($coba = "") {
    $result = "";
    if($coba != ""){
        $count = strlen($coba);
        for($i = $count; $i >= 0; $i--){
            $result.= substr($coba, $i, 1);
        }
    }
    return $result;
}
$coba = "coderbyte";
$foo = cobax($coba);
echo $foo;

?>

