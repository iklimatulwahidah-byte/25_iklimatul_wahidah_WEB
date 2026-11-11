
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f7;
            padding: 40px;
        }

        .container {
            width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #12345a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #12345a;
            color: white;
            padding: 12px;
        }

        td {
            border: 1px solid #ddd;
            padding: 12px;
        }

        tr:nth-child(even) {
            background-color: #eaf1f8;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>DATA DOSEN</h2>

    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>

    <table>
        <tr>
            <th>Keterangan</th>
            <th>Data</th>
        </tr>

        <tr>
            <td>Nama</td>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>

        <tr>
            <td>Domisili</td>
            <td><?php echo $Dosen['domisili']; ?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>

</div>

</body>
</html>
