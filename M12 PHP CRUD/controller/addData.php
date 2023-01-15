<?php
if(isset($_POST['Tambah'])) {
        $nomor_rangka = $_POST['Nomor_Rangka'];
        $nama_motor = $_POST['Nama_Motor'];
        $pabrikan = $_POST['Pabrikan'];
        $ukuran_mesin = $_POST['Ukuran_Mesin'];
        $jenis_motor = $_POST['Jenis_Motor'];
        $tahun_produksi = $_POST['Tahun_Produksi'];
        
        // include database connection file
        include("../model/connectDB.php");
                
        // Insert user data into table
        $result = mysqli_query($conn, "INSERT INTO jenis_motor VALUES('$nomor_rangka','$nama_motor','$pabrikan','$ukuran_mesin','$jenis_motor',' $tahun_produksi')");
        
        // Show message when user added
        echo " Data berhasil ditambahkan. <a href='../index.php'>View Users</a>";
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<body>

<div class="container mt-3">
    <div class="row">
        <div class="col-xs-6">
            <h2>Form Tambah Data Kendaraan</h2>

            <form action= "addData.php" method="post">
                <div class="mb-3">
                  <label class="form-label">Nomor Rangka</label>
                  <input type="text" class="form-control" id="inputRangka" name="Nomor_Rangka" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" id="inputNama" name="Nama_Motor">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pabrikan</label>
                    <input type="text" class="form-control" id="inputPabrikan" name="Pabrikan">
                  </div>
                <div class="mb-3">
                    <label class="form-label">Kubikasi</label>
                    <input type="number" class="form-control" id="inputCC" name="Ukuran_Mesin">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis</label>
                    <input type="text" class="form-control" id="inputJenis" name="Jenis_Motor">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="inputTahun" name="Tahun_Produksi">
                </div>
                <button type="submit" class="btn btn-primary" name="Tambah">Tambah Data</button>

            </form>
        </div>
    </div>
</div>