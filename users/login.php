<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php @include 'navbar.php';?>
    <div class="container mt-5">
        <form action="#" method="post">
            <div class="text-center">
                <img class="img-responsive center-block mt-4 mb-5" src="../image/login.png" width="300" height="250" alt="register">
            </div>
            &nbsp;ชื่อผู้ใช้
            <input class="form-control" name="username" type="text" placeholder="username" required><br>
            &nbsp;รหัสผ่าน
            <input class="form-control" name="password" type="password"  placeholder="password" required><br>
            <!-- buttom -->
            <div class="float-end">
                <input class="btn btn-primary me-2" name="submit" type="submit" value="เข้าสู่ระบบ">
                <input class="btn btn-danger" type="reset" value="ยกเลิก">
            </div>
        </form> 
    </div>
</body>
</html>