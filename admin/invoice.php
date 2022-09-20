<?php include 'conndb.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php include 'navbar.php'?>
    <div class="container">
        <div class="h4 text-center alert alert-info mb-4 mt-4" role="alert">
            แสดงข้อมูลรายการสินค้า
        </div>
        <button type="button" class="btn btn-success mb-2">
            <a href="form_invoice.php" class="h6 text-white text-decoration-none">Add +</a>
        </button>
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>CustomerId</th>
                <th>CartId</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
                $sql = "SELECT * FROM Invoice";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?=$row['invoice_id']?></td>
                <td><?=$row['customer_id']?></td>
                <td><?=$row['cart_id']?></td>
                <td>
                    <button type="button" class="btn btn-warning">
                        <a 
                        class="text-dark text-decoration-none"
                        href="edite_invoice.php?id=<?=$row['invoice_id']?>">Edite</a>
                    </button></td>
                <td>
                    <button type="button" class="btn btn-danger">
                        <a  
                        class="text-white text-decoration-none" 
                        href="del_invoice.php?id=<?=$row['invoice_id']?>">Delete</a>
                    </button>
                </td>
            </tr>
            <?php 
                }
                mysqli_close($conn);
            ?>
        </table>
    </div>
</body>
</html>