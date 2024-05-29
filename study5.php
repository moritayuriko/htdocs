<?php
function suuji($s,$u){
return $s+$u;
}
function suuji2($s,$u){
  return $s-$u;
}
$a=2;
echo "\$a={$a}<br>";
$b=3;
echo "\$b={$b}<br>";

suuji($a,$b);
suuji2($a,$b);

echo '$a+$b='.suuji($a,$b).'<br>';
echo '$a-$b='.suuji2($a,$b);
?>