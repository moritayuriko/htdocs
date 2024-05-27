<?php
$a ="PHP";
$b ="PHP";
$c ="Hello";
echo "\$a=$a \$b=$b \$c=$c<br>";
if ($a == "PHP"and $b =="PHP"){
    echo '$a,$bともに"PHP"です<br>';
}
if($a =="PHP"and $c =="PHP"){
    echo '$a,$cともに"PHP"です<br>';
}
if($a =="PHP"or $b =="PHP"){
    echo '$a,$bいずれかが"PHP"です<br>';
}
if($a =="PHP"or $c =="PHP"){
    echo '$a,$cのいずれかが"PHP"です<br>';
}
?>