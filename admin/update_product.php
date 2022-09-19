<?php 
    include 'conndb.php';

    $pro_id = $_POST['product_id'];
    $pro_name = $_POST['product_name'];
    $c_date = $_POST['c_date'];
    $m_date = $_POST['mod_date'];
    $price = $_POST['price'];
    $deleted = $_POST['deleted'];

    $sql = "UPDATE product 
            SET product_id='$pro_id', product_name='$pro_name', c_date='$c_date',
                mod_date='$m_date', price='$price', deleted='$deleted' 
            WHERE product_id='$pro_id' ";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='product.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถแก้ไขมูลได้');</script>";
    }
    mysqli_close($conn);

?>