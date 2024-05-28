<?php
//連想配列
$rail=["kyuu"=>"きゅう","kahuka"=>"かふか","jinn"=>"じん"];
foreach ($rail as $key=>$value){
    echo $key . ":" .  $value . "<br>";
}
echo "<br>";

$library=["angela","laurent","book"];
foreach($library as $key => $value){
    echo $key . ":" . $value . "<br>";
}
?>