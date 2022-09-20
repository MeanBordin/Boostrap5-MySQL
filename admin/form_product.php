<?php include 'conndb.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลสินค้า</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php include 'navbar.php'?>
    <div class="container">
        <div class="h4 text-center alert alert-warning mb-4 mt-4" role="alert">
            เพิ่มข้อมูลสินค้า 
        </div>
        <form action="insert_product.php" method="POST" enctype="multipart/form-data">
            <label for="">Product ID</label>
            <input class="form-control mb-4" type="text" name="product_id" placeholder="รหัสสินค้า"  required>
            <label for="">Product Name</label>
            <input class="form-control mb-4" type="text" name="product_name" placeholder="ชื่อสินค้า"  required>
            <label for="">C-Date</label>
            <input class="form-control mb-4" type="date" name="c_date" required>
            <label for="">Mod-Date</label>
            <input class="form-control mb-4" type="date" name="mod_date" required>
            <label for="">Price</label>
            <input class="form-control mb-4" type="text" name="price" placeholder="ราคาสินค้า"  required>
            <label for="">Deleted</label>
            <input class="form-control mb-4" type="text" name="deleted" placeholder="สถานะสินค้า" required>
            <button type="submit" class="btn btn-success mt-4 mb-4">Apply</button>
            <button type="submit" class="btn btn-danger ms-2">
                <a class="text-white text-decoration-none" href="product.php">Cancel</a>
            </button>
        </form>
    </div>
</body>
</html>