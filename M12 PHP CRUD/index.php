<?php
    include './model/connectDB.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Form CRUD PHP</title>
  </head>
  <body>

    <div class="container mt-4">
        <div class="col-md-8"></div>
            <h2 class = "text-center">Daftar Rental Motor</h2>
            <h4 class = "text-center">PT Suka Rental Bali</h4>

            <a href="controller/addData.php" class = "btn btn-primary mb-2">Tambah Data</a>

            <table class="table table-bordered">
            <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Rangka</th>
                <th scope="col">Nama</th>
                <th scope="col">Pabrikan</th>
                <th scope="col">Kubikasi</th>
                <th scope="col">Jenis</th>
                <th scope="col">Tahun</th>
                <th scope="col">Aksi</th>
            </tr>

            <?php
                $sqlShow = "SELECT * FROM jenis_motor";
                $query = mysqli_query($conn, $sqlShow);
                $no = 0;

                while ($data = mysqli_fetch_array($query)) {
                    $no++;
                    echo "
                    <tbody>
                    <tr>
                    <td>$no</td>
                    <td>$data[Nomor_Rangka]</td>
                    <td>$data[Nama_Motor]</td>
                    <td>$data[Pabrikan]</td>
                    <td>$data[Ukuran_Mesin]</td>
                    <td>$data[Jenis_Motor]</td>
                    <td>$data[Tahun_Produksi]</td>
                    <td>
                        <a href='controller/updateData.php?Nomor_Rangka=$data[Nomor_Rangka]' class ='btn btn-success badge rounded-pill'>Update</a>

                        <a href='controller/deleteData.php?Nomor_Rangka=$data[Nomor_Rangka]' class ='btn btn-danger badge rounded-pill'>Delete</a> 
                    </td>
                    </tr>
                    </tbody>
                    ";
                }
            ?>  
    </table>
    </div>
  </body>
</html>

