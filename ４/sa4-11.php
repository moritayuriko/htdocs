<?php
echo "配列\$ar1の初期値<br>";
$ar1=["a","b","c","d","e"];
print_r($ar1);
echo "<br>\$br2:1番目から2つの要素を切り取り<br>";
$ar2=array_slice($ar1,1,2);
print_r($ar2);
echo "<br>\$ar3:1番目から二つの要素を切り取り<br>";
$ar3 =array_slice($ar1,1,2, true);
print_r($ar3);

?>