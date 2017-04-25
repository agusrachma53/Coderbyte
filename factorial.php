<?php 

function FirstFactorial($num) {
  $hasil = 1;
  // code goes here
  for($i = 1; $i <= $num; $i++){
    $hasil = $hasil * $i; 
  }
   return $hasil; 
}
  
$num = 4;
$foo = FirstFactorial($num);
echo $foo;
?>