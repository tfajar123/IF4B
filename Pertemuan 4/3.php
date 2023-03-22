<?php
$fisika = 70;
$biologi = 60;
$matematika = 85;

$rerata = ($fisika+$biologi+$matematika)/3;

if($rerata >= 60){
    echo "Nilai Akhir : $rerata" . "\nLulus";
}
else{
    echo "Nilai Akhir : $rerata" . "\nTidak Lulus";
}