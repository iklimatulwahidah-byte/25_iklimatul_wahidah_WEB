
<?php

echo "<h2>SOAL 4.2 - PERULANGAN WHILE</h2>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<hr>";


echo "<h2>SOAL 4.3 - PERULANGAN FOR</h2>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<hr>";


echo "<h2>SOAL 4.4 - PERULANGAN FOREACH</h2>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<hr>";


echo "<h2>SOAL 4.5 - FOREACH DAN CONTINUE</h2>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus)<br>";
        continue;
    }

    echo "Nilai: $nilai (Lulus)<br>";
}

echo "<hr>";


echo "<h2>SOAL 4.6 - MENGHITUNG RATA-RATA NILAI</h2>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$jumlahNilai = 0;
$jumlahSiswa = count($nilaiSiswa);

for ($i = 2; $i < $jumlahSiswa - 2; $i++) {
    $jumlahNilai += $nilaiSiswa[$i];
}

$rataRata = $jumlahNilai / ($jumlahSiswa - 4);

echo "Total nilai: $jumlahNilai<br>";
echo "Rata-rata nilai siswa: $rataRata";
echo "<hr>";


echo "<h2>SOAL 4.7 - MENGHITUNG DISKON</h2>";

$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 20;
}

$potongan = $hargaProduk * $diskon / 100;
$totalBayar = $hargaProduk - $potongan;

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: $diskon%<br>";
echo "Potongan harga: Rp " . number_format($potongan, 0, ',', '.') . "<br>";
echo "Total pembayaran: Rp " . number_format($totalBayar, 0, ',', '.');
echo "<hr>";


echo "<h2>SOAL 4.8 - OPERATOR TERNARY</h2>";

$totalSkor = 650;

$statusHadiah = ($totalSkor > 500) ? "YA" : "TIDAK";

echo "Total skor pemain: $totalSkor poin.<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $statusHadiah";

?>
