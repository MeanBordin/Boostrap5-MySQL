<?php include 'conndb.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Data</title>
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
            <a href="form_product.php" class="h6 text-white text-decoration-none">Add +</a>
        </button>
        <table class="table table-striped table-hover">
            <tbody class="table-striped">
                <tr>
                    <th>ID</th>
                    <th>image</th>
                    <th>Product name</th>
                    <th>C-date</th>
                    <th>Mod-date</th>
                    <th>Price</th>
                    <th>Deleted</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tbody>
            <?php
                $sql = "SELECT * FROM Product";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?=$row['product_id']?></td>
                <td><?php echo "Test...";?></td>
                <td><?=$row['product_name']?></td>
                <td><?=$row['c_date']?></td>
                <td><?=$row['mod_date']?></td>
                <td><?=$row['price']?></td>
                <td><?=$row['deleted']?></td>
                <td>
                    <button type="button" class="btn btn-warning">
                    <a 
                        class="text-dark text-decoration-none"
                        href="edite_product.php?id=<?=$row['product_id']?>">
                            <i class="bi bi-pencil-square"></i>
                    </a>
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" >
                    <a  
                        class="text-white text-decoration-none" 
                        href="del_product.php?id=<?=$row['product_id']?>" onclick="clikComfirm(this.href);return false;">
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
    <script>
        function clikComfirm(mypage){
            let ok = confirm('คุณต้องการลบข้อมูลหรือไม่');
            if(ok){
                window.location=mypage
            }
        }
    </script>
</body>
</html>