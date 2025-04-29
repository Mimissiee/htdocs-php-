<?php

$bukhori_sehat = true;
$motor_nyala = false;

if ($bukhori_sehat && $motor_nyala) {
    echo "Bukhori berangkat.";
} elseif ($bukhori_sehat && !$motor_nyala) {
    echo "Motor mogok, Bukhori tidak berangkat.";   
}

