<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="h4 text-center alert alert-warning mb-4 mt-4" role="alert">
            เพิ่มข้อมูลตาราง Invoice
        </div>
        <form  action="insert_invoice.php" method="POST">
            <label for="invoice_id">ID </label>
            <input class="form-control mb-4" type="text" name="invoice_id" id="invoice_id" value="" placeholder="รหัสใบเสร็จ" required/>
            
            <label for="customer_id">Customer ID</label>
            <input class="form-control mb-4" type="text" name="customer_id" id="customer_id" value="" placeholder="รหัสลูกค้า" required/>
            
            <label for="cart_id">Cart ID</label>
            <input class="form-control mb-4" type="text" name="cart_id" id="cart_id" value="" placeholder="ตะกร้าสินค้า" required/>
            
            <button type="submit" class="btn btn-success">Apply</button>
            <button type="submit" class="btn btn-danger ms-2">
                <a class="text-white text-decoration-none" href="invoice.php">Cancel</a>
            </button>
        </form>
    </div>
</body>
</html>