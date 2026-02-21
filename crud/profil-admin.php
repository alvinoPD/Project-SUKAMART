<?php
include '../database/config.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="pesanan">
        <h4>Total pesanan </h4>
        <p><?php echo include '../part/total-pesanan.php';?></p>
    </div>
    <div class="pesanan">
        <h4>Total pesanan </h4>
        <p><?php echo include '../part/total-pesanan.php';?></p>
    </div>
    <div class="stock">
        <h4>stock </h4>
        <p><?php echo include '../part/total-stock.php';?></p>
    </div>

</body>
</html>