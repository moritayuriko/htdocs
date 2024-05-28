<?php
for ($n = 2; $n < 100; $n++) {
    $count = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n%$i==0) {
            $count++;
        }
    }
    if ($count===2) {
        echo "{$n}&nbsp;";
    }
}
?>