<!-- TUGAS: 
Buatlah atau Gunakan web profile diri anda (layoutit) yang sudah ada. Lalu extension-nya ubah ke .php 
Untuk bagian nama, email, nomor telepon dan data diri lainya di ubah menjadi sebuah variabel yang kemudian di tampilkan pada web yang sudah ada.
 -->

<?php
//variabel user
$nama = "Putri Handayani";
$nim = "210402112";
$jenis_kelamin = "Perempuan";
$agama = "Islam";
$tanggal_lahir = "29 Desember 2002";
$tempat_lahir = "Pekanbaru";
$alamat = "Jl.Purwodadi Ujung Perum.Cahaya Permata Blok H No 11";
$no_hp = '081914049390'; //data integer
$universitas = "Universitas Muhamaddiyah Riau";
$kota = "pekanbaru";
$nama_adek = "Sinta Rahmadhani";
$umur_adek = "6 tahun";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body background="https://e1.pxfuel.com/desktop-wallpaper/75/569/desktop-wallpaper-sky-blue-colour-light-blue-colour-thumbnail.jpg">
    <h1 align="center">
        Biodata Pribadi
    </h1>
    <p align="justify">
        <img src="https://lh3.googleusercontent.com/a/ACg8ocKckEl0qVNTSdxRDthmKeEW1PHdKbRTXsuh-Hqn93-5xMHiqj8AAVL0XkoSx8pB6ZAbUm2SsNfnd2Z6kvcYpxtr8rHo=s432-c-no" alt="" width="13%" align="left" hspace="10">
        Hallo Teman-teman, Perkenalkan Nama Saya <?php echo $nama; ?> bisa dipanggil Putri. Disini Saya Sedang Belajar PHP Hari Pertama Di Mitra NF KOMPUTER
        Saya Disini Sedang Membuat Tugas Yang Diberikan Oleh Mas Arif yaitu Membuat Biodata Pribadi. Saya berasal dari universitas <?php echo $universitas; ?>
        yang terletak di <?php echo $kota; ?>. Saya hanya berdua besaudara yaitu saya dan adek saya, adek saya bernama <?php echo $nama_adek; ?> berumur <?php echo $umur_adek; ?> tahun.
    </p>
    <fieldset>
        <legend align="center">
            <font size="5" color="green" face="calibri">
                Tentang Saya
            </font>
        </legend>
        <b>
            <ol type="A">
                <li>Data Pribadi</li>
        </b>
        <table align="square" cellpadding="10 px" width="600px">
            <tr>
                <td>Nama Lengkap</td>
                <td>: <?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>: <?php echo $nim; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?php echo $jenis_kelamin; ?></td>
            </tr>

            <td>Agama</td>
            <td>: <?php echo $agama; ?> </td>
            </tr>
            <tr>
                <td>Tanggal_Lahir</td>
                <td>: <?php echo $tanggal_lahir; ?> </td>
            </tr>
            <tr>
                <td>Tempat_Lahir</td>
                <td>: <?php echo $tempat_lahir; ?> </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?php echo $alamat; ?> </td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>: <?php echo $no_hp; ?> </td>
            </tr>
        </table>
        <b>
            <li size="20px">Pendidikan</li>
        </b>
        <table cellpadding="10 px" width="600px">
            <ul type="square">
                <li><?php echo $pendidikan_sdn = "SDN 110 Pekanbaru"; ?></li>
                <li><?php echo $pendidikan_smp = "SMPN 20 Pekanbaru"; ?></li>
                <li><?php echo $pendidikan_smk = "SMKN 04 Pekanbaru"; ?></li>
                <li><?php echo $pendidikan_universitas = "Universitas Muhammadiyah Riau"; ?></li>
            </ul>
            <b>
                <li>Hobi</li>
            </b>
            <table cellpadding="10 px" width="600px">
                <ul type="square">
                    <li><?php echo $hobi1 = "Olahraga Bulu Tangkis"; ?></li>
                    <li><?php echo $hobi2 = "Menggambar"; ?></li>
                    <li><?php echo $hobi3 = "Editor Vidio/Foto"; ?></li>
                    <li><?php echo $hobi4 = "Travelling"; ?></li>
                </ul>
            </table>
        </table>
    </fieldset>
</body>

</html>