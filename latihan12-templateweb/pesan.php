<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>


    <?php
    $nama = $_POST["nama"];
    $produk = $_POST["produk"];
    $alamat = $_POST["alamat"];
    $jumlahBeli = $_POST["jumlahBeli"];

    if ($produk == "Bolu Panggang" && $jumlahBeli > 1) {
        $jumlahBeli;
        $hargaSatuan = 65000;
        $totalBelanja = $hargaSatuan;
        $diskon = 0 * $totalBelanja;
        $hargaBersih = ($totalBelanja - $diskon) + $ppn;

        if ($jumlahBeli > 1) {
            $totalBelanja = $jumlahBeli * $hargaSatuan;
            $diskon = 0.2 * $totalBelanja;
            $hargaBersih = ($totalBelanja - $diskon);
        }
    } else if ($produk == "donat" && $jumlahBeli > 0) {
        $jumlahBeli;
        $hargaSatuan = 150000;
        $totalBelanja = $hargaSatuan;
        $diskon = 0 * $totalBelanja;
        $hargaBersih = ($totalBelanja - $diskon);

        if ($jumlahBeli > 1) {
            $totalBelanja = $jumlahBeli * $hargaSatuan;
            $diskon = 0.2 * $totalBelanja;
            $hargaBersih = ($totalBelanja - $diskon);
        }
    } else if ($produk == "cakespesial" && $jumlahBeli > 0) {
        $jumlahBeli;
        $hargaSatuan = 140000;
        $totalBelanja = $hargaSatuan;
        $diskon = 0 * $totalBelanja;
        $hargaBersih = ($totalBelanja - $diskon);

        if ($jumlahBeli > 1) {
            $totalBelanja = $jumlahBeli * $hargaSatuan;
            $diskon = 0.2 * $totalBelanja;
            $hargaBersih = ($totalBelanja - $diskon);
        }
    } else if ($produk == "cakeultah" && $jumlahBeli > 0) {
        $jumlahBeli;
        $hargaSatuan = 200000;
        $totalBelanja = $hargaSatuan;
        $diskon = 0 * $totalBelanja;
        $hargaBersih = ($totalBelanja - $diskon);

        if ($jumlahBeli > 1) {
            $totalBelanja = $jumlahBeli * $hargaSatuan;
            $diskon = 0.2 * $totalBelanja;
            $hargaBersih = ($totalBelanja - $diskon);
        }
    } else {
        if ($produk == "") {
            $jumlahBeli = 0;
            $hargaSatuan = 0;
            $totalBelanja = $hargaSatuan;
            $diskon = 0 * $totalBelanja;
            $hargaBersih = ($totalBelanja - $diskon);
        }
    }

    ?>
    <h1>Form Pembeli</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <form action="" method="post" class="">

                    <div class="form-group">
                        <label for="" class="form-label">Nama Pelanggan</label>
                        <input type="text" name="nama" id="" class="form-control" placeholder="inputkan nama anda">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Alamat Pelanggan</label>
                        <input type="text" name="alamat" id="" class="form-control" placeholder="inputkan alamat anda">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Produk pilihan</label>
                        <select name="produk" id="" class="custom-select">
                            <option value="">---Produk Pilihan ---</option>
                            <option value="Bolu Panggang">Bolu Panggang</option>
                            <option value="donat">Donat</option>
                            <option value="cakespesial">Cake Spesial</option>
                            <option value="cakeultah">Cake Ulang Tahun</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">jumlah Beli</label>
                        <input type="number" name="jumlahBeli" id="" class="form-control" placeholder="inputkan jumlah Beli">
                    </div>
                    <button type="submit" name="proses" class="btn btn-primary">Submit</button>
                    <button type="batal" name="proses" class="btn btn-success">Batal</button>
                </form>
            </div>
            <?php if (isset($_POST["proses"])) { ?>
                <div class="col-md-4">
                    <h1>Hasil Data Pelanggan</h1><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr bgcolor="plum">
                                <td>Nama</td>
                                <td><?= $nama ?> </td>
                            </tr>
                            <tr>
                                <td>Alamat Pelanggan</td>
                                <td><?= $alamat ?> </td>
                            </tr>
                            <tr>
                                <td>Produk</td>
                                <td><?= $produk ?> </td>
                            </tr>
                            <tr>
                                <td>jumlahBeli</td>
                                <td><?= $jumlahBeli ?> </td>
                            </tr>
                            <tr>
                                <td>harga satuan</td>
                                <td>Rp <?= number_format($hargaSatuan, 0, ',', '.') ?> </td>
                            </tr>
                            <tr>
                                <td>total belanja</td>
                                <td>Rp <?= number_format($totalBelanja, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>diskon</td>
                                <td>Rp <?= number_format($diskon, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>harga bersih</td>
                                <td>Rp <?= number_format($hargaBersih, 0, ',', '.') ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>