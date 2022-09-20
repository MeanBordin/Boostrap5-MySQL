<?php 
    include 'conndb.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM Customer WHERE customer_id='$id' ";
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
    <?php include 'navbar.php'?>
    <div class="container">
        <div class="h4 text-center alert alert-warning mb-4 mt-4" role="alert">
            แก้ไขข้อมูลตาราง Customer
        </div>
        <form action="update_cus.php" method="POST">
            <label for="">Customer ID</label>
            <input class="form-control mb-4" type="text" name="customer_id" value="<?=$row['customer_id']?>" readonly>
            <label for="">Customer Name</label>
            <input class="form-control mb-4" type="text" name="customer_name" value="<?=$row['customer_name']?>">
            <label for="">Email</label>
            <input class="form-control mb-4" type="email" name="email" value="<?=$row['email']?>">
            <label for="">Location</label>
            <input class="form-control mb-4" type="text" name="location" value="<?=$row['location']?>">
            <label for="">Date of Birth</label>
            <input class="form-control mb-4" type="date" name="date_of_birth" value="<?=$row['date_of_birth']?>">
            <label for="">C-Date</label>
            <input class="form-control mb-4" type="date" name="c_date" value="<?=$row['c_date']?>">
            <label for="">Mod-Date</label>
            <input class="form-control mb-4" type="date" name="mod_date" value="<?=$row['mod_date']?>">
            <label for="">Postcode</label>
            <input class="form-control" type="text" name="postcode" value="<?=$row['postcode']?>">
            <button type="submit" class="btn btn-success mt-4 mb-4">Update</button>
            <button type="submit" class="btn btn-danger ms-2">
                <a class="text-white text-decoration-none" href="customer.php">Cancel</a>
            </button>
        </form>
    </div>
</body>
</html>