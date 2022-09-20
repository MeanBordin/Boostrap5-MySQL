<?php include 'conndb.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
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
                <th>Edit</th>
            </tr>
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
                            href="edite_cus.php?id=<?=$row['customer_id']?>">Edit</a>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger">
                            <a  
                            class="text-white text-decoration-none" 
                            href="del_cus.php?id=<?=$row['customer_id']?>">Delete</a>
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