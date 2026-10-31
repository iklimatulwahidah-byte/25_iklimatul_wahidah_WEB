
<?php
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;

$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "<h3>Persentase Kursi Kosong Restoran</h3>";
echo "Total kursi: $totalKursi <br>";
echo "Kursi terisi: $kursiTerisi <br>";
echo "Kursi kosong: $kursiKosong <br>";
echo "Persentase kursi kosong: " . round($persenKosong, 2) . "%";
?>
