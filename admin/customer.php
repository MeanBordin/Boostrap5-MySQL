<?php include 'conndb.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการข้อมูลลูกค้า</title>
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
            แสดงข้อมูลสมาชิก
        </div>
        <button type="button" class="btn btn-success mb-2">
            <a href="form_cus.php" class="h6 text-white text-decoration-none">Add +</a>
        </button>
        <table class="table table-striped table-hover">
            <tbody class="table-striped">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Dath of Birth</th>
                    <th>C-Date</th>
                    <th>Mod-Date</th>
                    <th>Postcode</th>
                    <th>Edit</th>
                    <th>delete</th>
                </tr>
            </tbody>
            <?php
            $sql = "SELECT * FROM Customer";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?=$row['customer_id']?></td>
                    <td><?=$row["customer_name"]?></td>
                    <td><?=$row["email"]?></td>
                    <td><?=$row['location']?></td>
                    <td><?=$row['date_of_birth']?></td>
                    <td><?=$row['c_date']?></td>
                    <td><?=$row['mod_date']?></td>
                    <td><?=$row['postcode']?></td>
                    <td>
                        <button type="button" class="h6 btn btn-warning">
                            <a 
                            class="text-dark text-decoration-none"
                            href="edite_cus.php?id=<?=$row['customer_id']?>">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" >
                            <a  
                            class="text-white text-decoration-none" 
                            href="del_cus.php?id=<?=$row['customer_id']?>" onclick="clikComfirm(this.href);return false;">
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