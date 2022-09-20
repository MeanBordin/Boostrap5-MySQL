<?php include 'conndb.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลโปรโมชั่น</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="h4 text-center alert alert-info mb-4 mt-4" role="alert">
            แสดงข้อมูลรายการโปรโมชั่น
        </div>
        <button type="button" class="btn btn-success mb-2">
            <a href="form_promotion.php" class="h6 text-white text-decoration-none">Add +</a>
        </button>
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>C-date</th>
                <th>Mod-date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
                $sql = "SELECT * FROM promotion";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?=$row['promotion_id']?></td>
                <td><?=$row['c_date']?></td>
                <td><?=$row['mod_date']?></td>
                <td>
                    <button type="button" class="btn btn-warning">
                        <a 
                        class="text-dark text-decoration-none"
                        href="edite_promotion.php?id=<?=$row['promotion_id']?>">Edite</a>
                    </button></td>
                <td>
                    <button type="button" class="btn btn-danger">
                        <a  
                        class="text-white text-decoration-none" 
                        href="del_promotion.php?id=<?=$row['promotion_id']?>">Delete</a>
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