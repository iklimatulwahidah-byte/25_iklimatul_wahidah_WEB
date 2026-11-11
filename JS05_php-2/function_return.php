
<?php

// Membuat fungsi untuk menghitung umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Membuat fungsi perkenalan
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";

    // Memanggil fungsi hitungUmur di dalam fungsi perkenalan
    echo "Saya berusia " . hitungUmur(1998, 2023) . " tahun<br/>";

    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi perkenalan
perkenalan("Elok");

?>
