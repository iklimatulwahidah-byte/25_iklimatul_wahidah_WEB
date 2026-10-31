
<?php
// 1. Operator Aritmatika
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "<h3>Operator Aritmatika</h3>";
echo "Hasil Tambah: $hasilTambah <br>";
echo "Hasil Kurang: $hasilKurang <br>";
echo "Hasil Kali: $hasilKali <br>";
echo "Hasil Bagi: $hasilBagi <br>";
echo "Sisa Bagi: $sisaBagi <br>";
echo "Pangkat: $pangkat <br><br>";

// 2. Operator Perbandingan
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<h3>Operator Perbandingan</h3>";
var_dump($hasilSama);
var_dump($hasilTidakSama);
var_dump($hasilLebihKecil);
var_dump($hasilLebihBesar);
var_dump($hasilLebihKecilSama);
var_dump($hasilLebihBesarSama);
echo "<br><br>";

// 3. Operator Logika
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<h3>Operator Logika</h3>";
var_dump($hasilAnd);
var_dump($hasilOr);
var_dump($hasilNotA);
var_dump($hasilNotB);
echo "<br><br>";

// 4. Operator Penugasan
echo "<h3>Operator Penugasan</h3>";

$x = 10;
$x += $b;
echo "Hasil += : $x <br>";

$x = 10;
$x -= $b;
echo "Hasil -= : $x <br>";

$x = 10;
$x *= $b;
echo "Hasil *= : $x <br>";

$x = 10;
$x /= $b;
echo "Hasil /= : $x <br>";

$x = 10;
$x %= $b;
echo "Hasil %= : $x <br><br>";

// 5. Operator Identitas
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<h3>Operator Identitas</h3>";
var_dump($hasilIdentik);
var_dump($hasilTidakIdentik);
?>
