<?php 
    include 'conndb.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM Invoice WHERE invoice_id='$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="h4 text-center alert alert-danger mb-4 mt-4" role="alert">
            แก้ไขข้อมูลตาราง Invoice
        </div>
        <form  action="update_invoice.php" method="POST">
            <label for="invoice_id">Invoice ID</label>
            <input class="form-control mb-4" type="text" name="invoice_id" id="invoice_id" value="<?=$row['invoice_id']?>" readonly/>
            
            <label for="customer_id">Customer ID</label>
            <input class="form-control mb-4" type="text" name="customer_id" id="customer_id" value="<?=$row['customer_id']?>" readonly/>
            
            <label for="cart_id">Cart ID</label>
            <input class="form-control mb-4" type="text" name="cart_id" id="cart_id" value="<?=$row['cart_id']?>" readonly/>
            
            <button type="submit" value="Update" class="btn btn-success">Update</button>
            <button type="submit" class="btn btn-danger ms-2">
                <a class="text-white text-decoration-none" href="invoice.php">Cancel</a>
            </button>
        </form>
    </div>
</body>
</html>