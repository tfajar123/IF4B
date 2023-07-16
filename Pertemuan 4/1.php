<?php
$angka = 20;

for ($i = 2; $i <= $angka; $i++) {
    $prima = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $prima = false;
            break;
        }
    }
    if ($prima) {
        echo $i . " ";
    }
}
?>
