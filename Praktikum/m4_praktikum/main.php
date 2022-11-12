<?php 
    echo "<center>";
    echo "<font size = 8>";
    echo "<b> Program Penjualan Elektronik";
    echo "<hr>";
    echo "<table>";

    $namabarang = $_POST['namabarang'];
    $jumlah = $_POST['jumlah'];

    if($namabarang == "Handphone") $harga = 1000;
    if($namabarang == "Laptop") $harga = 5000;
    if($namabarang == "Printer") $harga = 3000;

    $totalharga = $jumlah * $harga;
    $diskon = $totalharga * 0.15;
    $totalbayar = $totalharga - $diskon;

    echo "<tr><td>Nama Barang<td> : $namabarang";
    echo "<tr><td>Jumlah<td> : $jumlah";
    echo "<tr><td>Total Harga<td> : Rp.",number_format($totalharga,2,',',',');
    echo "<tr><td>Total Diskon<td> : Rp.",number_format($diskon,2,',',',');

    echo "<tr><td>Total Bayar <td> : ";
    echo "Rp. ",number_format($totalbayar,2,',',',');

?>