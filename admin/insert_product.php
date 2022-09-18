<?php 
    include 'conndb.php';

    $pro_id = $_POST['product_id'];
    $pro_name = $_POST['product_name'];
    $c_date = $_POST['c_date'];
    $m_date = $_POST['mod_date'];
    $price = $_POST['price'];
    $deleted = $_POST['deleted'];

    $sql = "INSERT INTO product(product_id, product_name, c_date, mod_date, price, deleted)
            VALUES('$pro_id', '$pro_name', '$c_date', '$m_date', '$price', '$deleted')";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='product.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถบันทึกมูลได้');</script>";
    }

    mysqli_close($conn);
?>