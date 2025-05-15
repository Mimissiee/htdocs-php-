<?php

$i = 1;
$koleksi = ["aerostreet", "ortus", "Compass", "Specs"];
echo "Daftar koleksi:<br>";

foreach ($koleksi as $koleksiBelanja) {
    echo $i++ . " - " . $koleksiBelanja . "<br>";
}

