<?php
$mahasiswa_1 = ["nama" => "Putri Handayani", "nim" => "01123456", "nilai" => 99];
$mahasiswa_2 = ["nama" => "Satrio Nugroho", "nim" => "01234567", "nilai" => 85];
$mahasiswa_3 = ["nama" => "Kevin Julio", "nim" => "01345678", "nilai" => 78];
$mahasiswa_4 = ["nama" => "Sir Nadila", "nim" => "01456789", "nilai" => 73];
$mahasiswa_5 = ["nama" => "Song Jung Ki", "nim" => "01567890", "nilai" => 48];
$mahasiswa_6 = ["nama" => "Selena Gomez", "nim" => "01678901", "nilai" => 76];
$mahasiswa_7 = ["nama" => "Jessica Miller", "nim" => "01789012", "nilai" => 95];
$mahasiswa_8 = ["nama" => "David Wilson", "nim" => "01890123", "nilai" => 55];
$mahasiswa_9 = ["nama" => "Sarah Garcia", "nim" => "01901234", "nilai" => 87];
$mahasiswa_10 = ["nama" => "Zahra putri", "nim" => "01012345", "nilai" => 91];
$mahasiswa_11 = ["nama" => "Laura Martine   ", "nim" => "01123012", "nilai" => 84];
$mahasiswa_12 = ["nama" => "Daniel Hernandes", "nim" => "01234123", "nilai" => 68];
$mahasiswa_13 = ["nama" => "Jennifer Lopez", "nim" => "01345234", "nilai" => 70];
$mahasiswa_14 = ["nama" => "Lisa Blackpink", "nim" => "01456345", "nilai" => 92];
$mahasiswa_15 = ["nama" => "Amanda rawless", "nim" => "01567456", "nilai" => 86];
$mahasiswa_16 = ["nama" => "Syifa hadju", "nim" => "01567458", "nilai" => 98];
$mahasiswa_17 = ["nama" => "Sinta Rahmadani", "nim" => "01567459", "nilai" => 98];
$mahasiswa_18 = ["nama" => "Davira Febriana", "nim" => "01567460", "nilai" => 98];

$daftar_mahasiswa = [
    $mahasiswa_1, $mahasiswa_2, $mahasiswa_3, $mahasiswa_4, $mahasiswa_5, $mahasiswa_6, $mahasiswa_7, $mahasiswa_8, $mahasiswa_9,
    $mahasiswa_10, $mahasiswa_11, $mahasiswa_12, $mahasiswa_13, $mahasiswa_14, $mahasiswa_15, $mahasiswa_16, $mahasiswa_17, $mahasiswa_18
];

$daftar_field = ['No', 'Nama', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
$nilai_mahasiswa = array_column($daftar_mahasiswa, 'nilai');
$total_nilai = array_sum($nilai_mahasiswa);
$nilai_tertinggi = max($nilai_mahasiswa);
$nilai_terrendah = min($nilai_mahasiswa);
$jumlah_mahasiswa = count($daftar_mahasiswa);
$nilai_rata2 = $total_nilai / $jumlah_mahasiswa;

$data_akhir = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terrendah,
    'Nilai Rata Rata' => $nilai_rata2,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $total_nilai,
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Daftar Nilai Mahasiswa</title>
</head>

<body>
    <h1 class="text-center">Daftar Nilai Mahasiswa</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <?php
                    foreach ($daftar_field as $value) {
                    ?>
                        <th><?= $value ?></th>
                    <?php
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($daftar_mahasiswa as $value) {
                    if ($value['nilai'] >= 85) {
                        $grade = 'A';
                    } elseif ($value['nilai'] >= 75) {
                        $grade = 'B';
                    } elseif ($value['nilai'] >= 65) {
                        $grade = 'C';
                    } elseif ($value['nilai'] >= 50) {
                        $grade = 'D';
                    } elseif ($value['nilai'] >= 0) {
                        $grade = 'E';
                    };
                    $keterangan = ($value['nilai'] >= 65) ? 'Lulus' : 'Gagal';
                    switch ($grade) {
                        case 'A':
                            $predikat = 'Memuaskan';
                            break;
                        case 'B':
                            $predikat = 'Bagus';
                            break;
                        case 'C':
                            $predikat = 'Cukup';
                            break;
                        case 'D':
                            $predikat = 'Kurang';
                            break;
                        case 'E':
                            $predikat = 'Buruk';
                            break;
                        default:
                            $predikat = 'Grade Tidak Valid';
                            break;
                    };
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['nama'] ?></td>
                        <td><?= $value['nim'] ?></td>
                        <td><?= $value['nilai'] ?></td>
                        <td><?= $keterangan ?></td>
                        <td><?= $grade ?></td>
                        <td><?= $predikat ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($data_akhir as $id => $value) {
                ?>
                    <tr>
                        <td colspan='3' class='text-right'><?= $id ?></td>
                        <td colspan='4' class='text-center fw-bold'><?= $value ?></td>
                    </tr>
                <?php
                }
                ?>
            </tfoot>
        </table>
    </div>
    <footer class="footer">
        <div class="container text-center">
            <span class="text-bold">Copyright &copy 2024 Putri Handayani | Keep It Up </span>
        </div>
    </footer>
</body>

</html>