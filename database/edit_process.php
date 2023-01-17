<?php 

include "database_conn.php";

if (count($_POST) > 0) {
    // ambil id dari customer sebagai penanda 
    $id = $_POST["id"]; 
    $nama = $_POST["nama"]; 
    $ukuran = $_POST["ukuran"]; 
    $harga = $_POST["harga"];

    $query =
        "UPDATE barang set id='" . 
        $id . 
        "', nama_barang='" . 
        $nama . 
        "', ukuran='" . 
        $ukuran . 
        "', harga='" . 
        $harga . 
        "' WHERE id='" . 
        $id . 
        "'";

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}

header("Location:index.php?message=" . $message . "");

?>