<?php

$color = array('merah', 'kuning', 'hijau', 'abu', 'pink');
?>
<?php

$telepon = array(
    "umum" => "Mohammad ",
    "genggam" => "Irfan ",
    "kantor" => "Naufal ",
    "rumah" => "Pratama"
);
echo $telepon["umum"];
echo $telepon["genggam"];
echo $telepon["kantor"];
echo $telepon["rumah"];
echo "<br><hr>";
?>
<?php

$motor = "Honda";
$cc = "150";
if ($motor == "Honda") {
    echo "Supra";
    echo "<br><hr>";
} else {
    echo "merk lain";
    echo "<br><hr>";
}
if ($motor == "Honda" && $cc == "150") {
    echo "CBR";
    echo "<br><hr>";
} else {
    echo "motor lain";
    echo "<br><hr>";
}
if ($motor == "Honda" && $motor == "Suzuki") {
    echo "Jepang";
    echo "<br><hr>";
} else {
    echo "motor lain";
    echo "<br><hr>";
}
if ($motor == "Suzuki") {
    echo "Smash";
    echo "<br><hr>";
} else {
    echo "motor lain";
    echo "<br><hr>";
}
?>
<?php

switch ($motor) {
    case "Honda":
        echo "Supra";
        echo "<br><hr>";
        break;
    case "Suzuki":
        echo "Satria";
        echo "<br><hr>";
        break;
    case "Kawasaki":
        echo "Ninja";
        echo "<br><hr>";
        break;
    case "Yamaha":
        echo "Vixion";
        echo "<br><hr>";
        break;
    default:
        echo "Motor Lain";
        echo "<br><hr>";
        break;
}
?>
<?php

$saya = "Saya belajar php";
$hari = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

//Penggunaan For
for ($i = 0; $i < 10; $i++) {
    echo "$saya <br>";
}
echo "<hr>";

for ($i = 0; $i <= 9; $i++) {
    echo "ke- {$hari[$i]}";
    echo "<br>";
}
echo "<hr>";
?>
<?php

$a = 0;
while ($a <= 4) {
    echo $color[$a];
    echo "<br>";
    $a++;
}
echo "<hr>";
?>
<?php

foreach ($telepon as $isi) {
    echo $isi;
    echo "<br>";
}
echo "<hr>";
?>
<?php

$number = array();
for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i;
        echo "<br>";
    }
}echo "<hr>";
?>
<?php

for ($i = 61; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i;
        echo "<br>";
    }
}echo "<hr>";
?>
<?php

$fib = [1, 0];
echo "0, ";
for ($i = 0; $i < 8; $i++) {
    $next = array_sum($fib);
    array_shift($fib);
    array_push($fib, $next);
    echo $next . ", ";
}echo "<hr>";
?>
<?php

$c = 0;
for ($c; $c <= count($color) - 1; $c++) {
    if ($color[$c] == "merah") {
        echo "ini merah";
        echo "<br>";
    } else {
        echo "ini bukan merah";
        echo "<br>";
    }
}echo "<hr>";
?>
<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i % 5 == 0) {
        echo $i;
        echo "<br>";
    }
}echo "<hr>";
?>
