<?php include 'conndb.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Bs icon svg -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
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
            <tbody class="table-stpried">
                <tr>
                    <th>ID</th>
                    <th>CustomerId</th>
                    <th>CartId</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tbody>
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
                        href="edite_invoice.php?id=<?=$row['invoice_id']?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </button></td>
                <td>
                    <button type="button" class="btn btn-danger">
                        <a  
                        class="text-white text-decoration-none" 
                        href="del_invoice.php?id=<?=$row['invoice_id']?>">
                            <i class="bi bi-trash-fill"></i>
                        </a>
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