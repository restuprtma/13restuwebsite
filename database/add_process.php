<?php 

// add_process.php
include "database_conn.php";

if(count($_POST) > 0) {
    $id = $_POST["id"];
    $nama = $_POST["nama"]; 
    $ukuran = $_POST["ukuran"]; 
    $harga = $_POST["harga"]; 
    $checkout = date("Y-m-d");

    $query = "INSERT INTO barang (id, nama_barang, ukuran, harga, checkout) VALUES ('$id', '$nama', '$ukuran', '$harga', '$checkout')";

    if(mysqli_query($db_connect, $query)){
        $message = 1; 
    } else {
        $message = 4;
    }
}

header("Location:index.php?message=" . $message . "");

?>