<?php
include '../database/config.php';


$query = mysqli_query($db, "SELECT SUM(stok) AS total_stock FROM produk");
$data = mysqli_fetch_assoc($query);
$stock = $data['total_stock'];
?>