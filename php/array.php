
<?php

// SOAL 5.1 - ARRAY NILAI SISWA LULUS
echo "<h2>SOAL 5.1 - NILAI SISWA LULUS</h2>";

$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: ";
echo implode(', ', $nilaiLulus);

echo "<hr>";


// SOAL 5.2 - DATA KARYAWAN
echo "<h2>SOAL 5.2 - DATA KARYAWAN</h2>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6]
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Karyawan dengan pengalaman lebih dari 5 tahun: ";
echo implode(', ', $karyawanPengalamanLimaTahun);

echo "<hr>";


// SOAL 5.3 - ARRAY ASOSIATIF
echo "<h2>SOAL 5.3 - NILAI MATA KULIAH</h2>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78]
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75]
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85]
    ]
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah:<br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
}

echo "<hr>";


// SOAL 5.4 - ARRAY DUA DIMENSI
echo "<h2>SOAL 5.4 - RATA-RATA NILAI SISWA</h2>";

$daftarSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$totalNilai = 0;
$jumlahSiswa = count($daftarSiswa);

// Menghitung total nilai
foreach ($daftarSiswa as $siswa) {
    $totalNilai += $siswa[1];
}

// Menghitung rata-rata
$rataRata = $totalNilai / $jumlahSiswa;

echo "Daftar Nilai Siswa:<br>";

foreach ($daftarSiswa as $siswa) {
    echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]}<br>";
}

echo "<br>Rata-rata kelas: $rataRata<br>";

echo "<br>Siswa dengan nilai di atas rata-rata:<br>";

foreach ($daftarSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]}<br>";
    }
}

?>
