<?php
$n = 5; $t1 = 0; $t2 = 1; $next = 0;

for ($i = 1; $i < $n-1; $i++){
    if($i == 1){
        echo $t1 . " ";
    }
    if($i == 2){
        echo $t2 . " ";
    }
    $next = $t1+$t2;
    $t1 = $t2;
    $t2 = $next;

    echo $next . " ";
}
?>
