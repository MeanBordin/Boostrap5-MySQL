<?php include 'conndb.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลโปรโมชั่น</title>
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
            แสดงข้อมูลรายการโปรโมชั่น
        </div>
        <button type="button" class="btn btn-success mb-2">
            <a href="form_promotion.php" class="h6 text-white text-decoration-none">Add +</a>
        </button>
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Promotion name</th>
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
                <td><?=$row['promotion_name']?></td>
                <td><?=$row['c_date']?></td>
                <td><?=$row['mod_date']?></td>
                <td>
                    <button type="button" class="btn btn-warning">
                        <a 
                        class="text-dark text-decoration-none"
                        href="edite_promotion.php?id=<?=$row['promotion_id']?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </button></td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="clikComfirm(this.href);return false;">
                        <a  
                        class="text-white text-decoration-none" 
                        href="del_promotion.php?id=<?=$row['promotion_id']?>">
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
            let ok = confirm(`คุณต้องการลบข้อมูลหรือไม่`);
            if(ok){
                window.location=mypage
            }
        }
    </script>
</body>
</html>