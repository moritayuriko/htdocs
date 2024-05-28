<?php
//連想配列
$rail=["kyuu"=>"きゅう","kahuka"=>"かふか","jinn"=>"じん"];
print_r($rail);
$rail["kyuu"]="穹";
echo "<br>";
print_r($rail);
$rail["samu"]="ほたる";
echo "<br>";
print_r($rail);
unset($rail["kahuka"]);
echo "<br>";
print_r($rail);

?>