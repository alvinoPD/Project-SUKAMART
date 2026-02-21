<?php
$query = mysqli_query($db,"SELECT
        (SELECT COUNT(*) FROM pesanan_tunggal) +
        (SELECT COUNT(*) FROM pesanan_ganda) AS jumlah


");

$data = mysqli_fetch_assoc($query);
$total = $data['jumlah'];
?>