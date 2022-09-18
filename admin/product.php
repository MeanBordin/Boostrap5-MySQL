<?php include 'conndb.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="h4 text-center alert alert-info mb-4 mt-4" role="alert">
            แสดงข้อมูลรายการสินค้า
        </div>
        <button type="button" class="btn btn-success mb-2">
            <a href="form_product.php" class="h6 text-white text-decoration-none">Add +</a>
        </button>
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Product name</th>
                <th>C-date</th>
                <th>Mod-date</th>
                <th>Price</th>
                <th>Deleted</th>
                <th>image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
                $sql = "SELECT * FROM Product";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?=$row['product_id']?></td>
                <td><?=$row['product_name']?></td>
                <td><?=$row['c_date']?></td>
                <td><?=$row['mod_date']?></td>
                <td><?=$row['price']?></td>
                <td><?=$row['deleted']?></td>
                <td><?=$row['image']?></td>
                <td><button type="button" class="btn btn-warning">Edite</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <?php 
                }
                mysqli_close($conn);
            ?>
        </table>
    </div>
</body>
</html>