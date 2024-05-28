<?php
function max_number($n1, $n2){
    if($n1> $n2){
        return $n1;
    }
    return $n2;
}
function star($n){
    for($i=0;$i<$n;$i++){
        echo "★";
    }
    echo "<br>";
    return;
}
function hello(){
    echo "helloPHP";
    return;
}
echo "***max_number***<br>";
$num1=4;
$num2=3;
$max=max_number($num1, $num2);
echo "{$num1}と{$num2}大きいほうは{$max}です<br>";

echo "***star***";
star(5);
star(7);
echo "***helo***<br>";
hello();
?>