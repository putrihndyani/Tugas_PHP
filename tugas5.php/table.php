<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tugas5 PHP - Putri Handayani</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <center style="background-color: #F72798;">
                    <h1>Form Nilai Ujian</h1>
                </center>
                <form action="objMahasiswa.php" method="POST" abframeid="iframe.0.9000169463464569" abineguid="843C2D3769CE4924A4F875CF4FBD44FC">
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM:</label>
                        <div class="col-8">
                            <input id="nim" name="nim" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama:</label>
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kuliah" class="col-4 col-form-label">Kuliah:</label>
                        <div class="col-8">
                            <select id="kuliah" name="kuliah" class="custom-select">
                                <option value="">--- PILIH KAMPUS ---</option>
                                <option value="Universitas Indonesia">Universitas Indonesia</option>
                                <option value="Universitas Muhamaddiyah Riau">Universitas Muhamaddiyah Riau</option>
                                <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
                                <option value="Universitas Gadjah Mada">Universitas Gadjah Mada</option>
                                <option value="Universitas Gunadarma">Universitas Gunadarma</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah:</label>
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="">--- PILIH MATAKULIAH ---</option>
                                <option value="HTML">HTML</option>
                                <option value="CSS">CSS</option>
                                <option value="UIUX">UI/UX</option>
                                <option value="JS">JavaScript</option>
                                <option value="PHP">PHP</option>
                                <option value="LARAVEL">Laravel</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai" class="col-4 col-form-label">Nilai:</label>
                        <div class="col-8">
                            <input id="nilai" name="nilai" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row" style="background-color: #FF8DC7;">
                        <div class="offset-4 col-8" style="padding-left: 200px;">
                            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                            <button name="unproses" type="reset" class="btn btn-danger">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
<center>
    <p>
        <span>Design By: Putri Handayani &copy; 2024 Studi Independen PT. Nurul Fikri Cipta Inovasi</span>
    </p>
</center>