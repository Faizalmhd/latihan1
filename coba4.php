<?php

echo "masukkan angka :";

$input_angka = fopen ("php://stdin", "r");
$angka = trim(fgets($input_angka));

for ($i = 1; $i <= $angka; $i++) {
    echo $i . "\n";
}