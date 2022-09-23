<?php include './admin/conndb.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="./style/register.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php @include 'navbar.php'; ?>
    <div class="container mt-5">
        <form action="" method="post">
            <h1 class="text-center">สมัครสมาชิก</h1>
            <div class="text-center">
                <img class="img-responsive center-block mb-5" src="./image/registration-2.png" width="300" height="250" alt="register">
            </div>
            &nbsp;ชื่อผู้ใช้
            <input class="form-control" type="text" required><br>
            &nbsp;อีเมล
            <input class="form-control" type="email" required><br>
            &nbsp;รหัสผ่าน
            <input class="form-control" type="password" required><br>
            <input class="btn btn-warning me-2" type="button" value="สมัครสมาชิก">
            <input class="btn btn-danger" type="button" value="ยกเลิก">
        </form> 
    </div>
</body> 
</html>