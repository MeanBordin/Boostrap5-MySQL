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
        <div class="h4 text-center alert alert-warning mb-4 mt-4" role="alert">
            เพิ่มข้อมูลโปรโมชั่น
        </div>
        <form  action="insert_promotion.php" method="POST">
            <label for="">ID </label>
            <input class="form-control mb-4" type="text" name="promotion_id" id="promotion_id" value="" placeholder="รหัสโปรโมชั่น" required/>
            
            <label for="">C-date</label>
            <input class="form-control mb-4" type="date" name="c_date" id="c_date" value=""  required/>
            
            <label for="">Mod-date</label>
            <input class="form-control mb-4" type="date" name="mod_date" id="mod_date" value=""  required/>
            
            <input class="btn btn-success ms-2" type="submit" value="Apply"> 
            <button type="submit" class="btn btn-danger ms-2">
                <a class="text-white text-decoration-none" href="promotion.php">Cancel</a>
            </button>
        </form>
    </div>
</body>
</html>