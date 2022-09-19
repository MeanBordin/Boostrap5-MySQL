<?php 
    include 'conndb.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE product_id='$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="h4 text-center alert alert-warning mb-4 mt-4" role="alert">
            แก้ไขข้อมูลตาราง Product
        </div>
        <form action="update_product.php" method="POST">
            <label for="">Product ID</label>
            <input class="form-control mb-4" type="text" name="product_id" value="<?=$row['product_id']?>" readonly>
            <label for="">Product Name</label>
            <input class="form-control mb-4" type="text" name="product_name" value="<?=$row['product_name']?>">
            <label for="">C-Date</label>
            <input class="form-control mb-4" type="date" name="c_date" value="<?=$row['c_date']?>">
            <label for="">Mod-Date</label>
            <input class="form-control mb-4" type="date" name="mod_date" value="<?=$row['mod_date']?>">
            <label for="">Price</label>
            <input class="form-control mb-4" type="text" name="price" value="<?=$row['price']?>">
            <label for="">Deleted</label>
            <input class="form-control mb-4" type="text" name="deleted"  value="<?=$row['deleted']?>">
            <button type="submit" class="btn btn-success mt-4 mb-4">Update</button>
            <button type="submit" class="btn btn-danger ms-2">
                <a class="text-white text-decoration-none" href="product.php">Cancel</a>
            </button>
        </form>
    </div>
</body>
</html>