<?php

include 'database_conn.php';
$query = "SELECT * FROM barang limit 200";
$result = mysqli_query($db_connect, $query);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi CRUD customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
        <div class="col-md-12">
                <div class="float-start mb-4">
                    <h2>List Barang</h2>
                </div>
                <div class="float-end">
                    <a href="add.php" class="btn btn-warning"> Tambah List Barang</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Ukuran</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tanggal Check-out</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($result->num_rows > 0) : ?>
                            <?php while ($customer_data = mysqli_fetch_assoc($result)) : ?>
                                <tr>
                                    <th scope="row"><?php echo $customer_data['id'] ?></th>
                                    <td><?php echo $customer_data['nama_barang']?></td>
                                    <td><?php echo $customer_data['ukuran']?></td>
                                    <td><?php echo $customer_data['harga']?></td>
                                    <td><?php $new_data = new DateTime($customer_data['checkout']);
                                        echo $new_data->format('Y-m-d');?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $customer_data['id']; ?>" class="btn 
                                        btn-primary">Edit</a>
                                        <a href="delete.php?id=<?php echo $customer_data['id']; ?>" class="btn 
                                        btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="3" rowspan="1" headers="">Tidak ada data yang ditemukan!!!!!</td>
                                </tr>
                            <?php endif; ?>
                            <?php mysqli_free_result($result);?>
                    </tbody>
                </table>
                <div class="float-end">
                    <a href="../index.php" class="btn btn-warning"> Home</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous"></script>
  </body>
</html>