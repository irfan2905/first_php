<?php

//Perbedaan Penggunaan Kutip ('') dan ("")
$kota = "Bandung";
echo $kota;
echo "<br>";
echo '$kota';
echo "<br>";
echo "$kota";
echo "<br><hr>";

//Array Tipe 1
$array_satu = array('melon', 'semangka', 2000, 13.45);
echo $array_satu[0];
echo "<br>";
echo $array_satu[1];
echo "<br>";
echo $array_satu[2];
echo "<br>";
echo $array_satu[3];
echo "<br><hr>";

//Array Tipe 2
$buah[0] = "semangka";
$buah[1] = "melon";
echo $buah[0];
echo "<br>";
echo $buah[1];
echo "<br><hr>";

//Array Tipe 3
$warna_rumah = array(
    "Andi" => "Hijau",
    "Budi" => "Merah",
    "Carlos" => "Abu-abu"
);
echo $warna_rumah["Andi"];
echo "<br>";
echo $warna_rumah["Budi"];
echo "<br>";
echo $warna_rumah["Carlos"];
echo "<br><hr>";
//----------------------------------------------------------------------------
$cuaca = "panas"; //<-------------<----------------<-------------VARIABEL
//Penggunaan if else
if ($cuaca == "panas") {
    echo "Memakai Payung <br><hr>";
} else {
    echo "Memakai Topi <br><hr>";
}

$weather = "panas";
//Penggunaan if elseif
if ($weather == "mendung") {
    echo "pakai mobil buka jendela";
    echo "<br><hr>";
} elseif ($weather == "panas") {
    echo "pakai mobil nyalakan AC";
    echo "<br><hr>";
} else {
    echo "tidak pergi kemana-mana";
    echo "<br><hr>";
}

//if di dalam else
if ($cuaca == "hujan") {
    echo "Pakai Mobil";
    echo "<br><hr>";
} else {
    if ($cuaca == "mendung") {
        echo "pakai motor";
        echo "<br><hr>";
    } else {
        echo "tidak pergi kemana-mana";
        echo "<br><hr>";
    }
}
//----------------------------------------------------------------------------
$motor = "sport";
//Penggunaan Switch Case
switch ($motor) {
    case 'sport':
        echo "Yamaha R1";
        echo "<br><hr>";
        break;

    case 'trail':
        echo "Honda CRF";
        echo "<br><hr>";
        break;

    case 'bebek':
        echo "Honda Supra";
        echo "<br><hr>";
        break;

    default:
        echo "Bukan Motor";
        echo "<br><hr>";
        break;
}
//----------------------------------------------------------------------------
$brand_laptop = "LENOVO";
$brand_motor = array('Suzuki', 'Yamaha', 'Kawasaki', 'Honda', 'Daytona', 'Harley', 'BSA', 'Norton');

//Penggunaan For
for ($i = 1; $i < 5; $i++) {
    echo "$brand_laptop <br>";
}
echo "<br><hr>";

//Penggunaan While
$a = 0;
while ($a <= 5) {
    echo $brand_motor[$a];
    echo "<br>";
    $a++;
}
echo "<br><hr>";

//Penggunaan Foreach
foreach ($brand_motor as $isi) {
    echo $isi;
    echo "<br>";
}
echo "<br><hr>";
//------------------------------------------------------------------------------
?>