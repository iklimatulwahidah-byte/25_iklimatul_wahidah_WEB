
<?php

$nama = @$_GET['nama']; // Mengambil nilai nama dari URL
$usia = @$_GET['usia']; // Mengambil nilai usia dari URL

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";

?>
