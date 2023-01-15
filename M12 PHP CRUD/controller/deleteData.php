<?php
    include '../model/connectDB.php';

    $nomor_rangka = $_GET["Nomor_Rangka"];
    $sql = "DELETE FROM jenis_motor WHERE Nomor_Rangka='$nomor_rangka'";
    $result = mysqli_query($conn, $sql);

    header('location: ../index.php');

    mysqli_close($conn);
?>