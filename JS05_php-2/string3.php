
<?php

$pesan = "saya arek malang";

// Mengubah string menjadi array
$pesanPerKata = explode(" ", $pesan);

// Membalik setiap kata
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);

// Menggabungkan kembali menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . '<br>';

?>
