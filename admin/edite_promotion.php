<?php 
    include 'conndb.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM promotion WHERE promotion_id='$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลโปรโมชั่น</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="h4 text-center alert alert-danger mb-4 mt-4" role="alert">
            แก้ไขข้อมูลโปรโมชั่น
        </div>
        <form  action="update_promotion.php" method="POST">
            <label for="promotion_id">ID</label>
            <input class="form-control mb-4" type="text" name="promotion_id" id="promotion_id" value="<?=$row['promotion_id']?>" readonly/>
            
            <label for="c_date">C-date</label>
            <input class="form-control mb-4" type="date" name="c_date" id="c_date" value="<?=$row['c_date']?>" />
            
            <label for="mod_date">Mod-date</label>
            <input class="form-control mb-4" type="date" name="mod_date" id="mod_date" value="<?=$row['mod_date']?>" />
            
            <button type="submit" value="Update" class="btn btn-success">Update</button>
            <button type="submit" class="btn btn-danger ms-2">
                <a class="text-white text-decoration-none" href="promotion.php">Cancel</a>
            </button>
        </form>
    </div>
</body>
</html>