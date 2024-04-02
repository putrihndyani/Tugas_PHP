<!-- //buat objek dan tangkap form -->
<?php
require_once 'Mahasiswa.php';

//tangkap data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kuliah = $_POST['kuliah'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];

//buat objek
$mhs = new Mahasiswa($nim, $nama, $kuliah, $matkul, $nilai);
?>
<a href="table.php" class="btn btn-primary">Kembali</a>
<div style="padding-top: 20px; padding-bottom: 193px;">
    <h2 align="center">Daftar Nilai Ujian Mahasiswa</h2>
    <table border="1" width="90%" style="margin: auto;">
        <thead>
            <tr bgcolor="#F72798">
                <th>NIM</th>
                <th>Nama</th>
                <th>Kuliah</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- //cetak hasil dengan tabel -->
            <?php
            echo '<tr bgcolor="snow">';
            echo '<td>' . $mhs->nim . '</td>';
            echo '<td>' . $mhs->nama . '</td>';
            echo '<td>' . $mhs->kuliah . '</td>';
            echo '<td>' . $mhs->matkul . '</td>';
            echo '<td>' . $mhs->nilai . '</td>';
            echo '<td>' . $mhs->grade() . '</td>';
            echo '<td>' . $mhs->predikat() . '</td>';
            echo '<td>' . $mhs->status() . '</td>';
            echo '</tr>';
            ?>
        </tbody>
    </table>
</div>
<br><br><br><br><br><br><br>
<br><br>
<br><br>
<center>
    <p>
        <span>Design By: Putri Handayani &copy; 2024 Studi Independen PT. Nurul Fikri Cipta Inovasi</span>
    </p>
</center>