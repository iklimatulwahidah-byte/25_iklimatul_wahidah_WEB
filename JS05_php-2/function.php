
<?php

// Membuat fungsi dengan nilai default parameter
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi dengan dua parameter
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

// Memanggil fungsi tanpa mengisi parameter salam
perkenalan($saya);

?>
