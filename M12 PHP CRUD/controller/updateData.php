<?php
    // include database connection file
    include ('../model/connectDB.php');
    if(isset($_POST['Update']))
    {	
      $nomor_rangka = $_POST['Nomor_Rangka'];
      $nama_motor = $_POST['Nama_Motor'];
      $pabrikan = $_POST['Pabrikan'];
      $ukuran_mesin = $_POST['Ukuran_Mesin'];
      $jenis_motor = $_POST['Jenis_Motor'];
      $tahun_produksi = $_POST['Tahun_Produksi'];
      $oldRangka = $_POST['Nomor_Rangka']; //hidden input field
    
    // Update data 
    $result = mysqli_query($conn, 
    "UPDATE jenis_motor SET Nama_Motor='$nama_motor',Pabrikan='$pabrikan',Ukuran_Mesin=$ukuran_mesin,Jenis_Motor='$jenis_motor',Tahun_Produksi=$tahun_produksi WHERE Nomor_Rangka='$oldRangka'
    ");
   
    // Redirect to homepage to display updated user in list
    header("Location:../index.php");
    }

    //Menampilkan data yang dipilih berdasarkan Nomor_Rangka
    $nomor_rangka = $_GET['Nomor_Rangka'];
    
    $result = mysqli_query($conn, "SELECT * FROM jenis_motor WHERE Nomor_Rangka='$nomor_rangka'");
    
    while($data = mysqli_fetch_array($result))
    {
      $nama_motor = $data['Nama_Motor'];
      $pabrikan = $data['Pabrikan'];
      $ukuran_mesin = $data['Ukuran_Mesin'];
      $jenis_motor = $data['Jenis_Motor'];
      $tahun_produksi = $data['Tahun_Produksi'];
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
            <h2>Form Update Data Kendaraan</h2>

            <form action= "updateData.php" method="post">
              <!-- hidden input field -->
              <input type="hidden" name = "oldRangka" value= <?php echo $nomor_rangka;?>> 

                <div class="mb-3">
                  <label class="form-label">Nomor Rangka</label>
                  <input type="text" class="form-control" id="inputRangka" required value = <?php echo $nomor_rangka;?> name="Nomor_Rangka">
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" id="inputNama" value = <?php echo $nama_motor;?>  name="Nama_Motor">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pabrikan</label>
                    <input type="text" class="form-control" id="inputPabrikan" value = <?php echo $pabrikan;?>  name="Pabrikan">
                  </div>
                <div class="mb-3">
                    <label class="form-label">Kubikasi</label>
                    <input type="number" class="form-control" id="inputCC" value = <?php echo $ukuran_mesin;?>  name="Ukuran_Mesin">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis</label>
                    <input type="text" class="form-control" id="inputJenis" value = <?php echo $jenis_motor;?>  name="Jenis_Motor">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="inputTahun" value = <?php echo $tahun_produksi;?> name="Tahun_Produksi">
                </div>
                <button type="submit" class="btn btn-primary" name="Update">Update Data</button>
            </form>

        </div>
    </div>
</div>