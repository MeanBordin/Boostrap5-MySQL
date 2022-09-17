<?php
    include 'conndb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="h4 text-center alert alert-danger mb-4 mt-4" role="alert">
            แก้ไขข้อมูลตาราง Customer
        </div>
        <form action="insert_cus.php" method="POST">
            <label for="">Customer ID</label>
            <input class="form-control mb-4" type="text" name="customer_id" id="" placeholder="รหัสลูกค้า"  required>
            <label for="">Customer Name</label>
            <input class="form-control mb-4" type="text" name="customer_name" placeholder="ชื่อ"  required>
            <label for="">Email</label>
            <input class="form-control mb-4" type="email" name="email" placeholder="อีเมล"  required>
            <label for="">Location</label>
            <input class="form-control mb-4" type="text" name="location" placeholder="ที่อยู่"  required>
            <label for="">Date of Birth</label>
            <input class="form-control mb-4" type="date" name="date_of_birth" placeholder="ว/ด/ป"  required>
            <label for="">C-Date</label>
            <input class="form-control mb-4" type="date" name="c_date"  required>
            <label for="">Mod-Date</label>
            <input class="form-control mb-4" type="date" name="mod_date"  required>
            <label for="">Postcode</label>
            <input class="form-control" type="text" name="postcode" placeholder="รหัสไปรษณีย์" required>
            <button type="submit" class="btn btn-success mt-4 mb-4">Apply</button>
            <button type="submit" class="btn btn-danger ms-2">
                <a class="text-white text-decoration-none" href="customer.php">Cancel</a>
            </button>
        </form>
    </div>
</body>
</html>