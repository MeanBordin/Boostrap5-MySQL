<?php 
    include 'conndb.php';
    
    $inv_id = $_POST['invoice_id'];
    $cus_id = $_POST['customer_id'];
    $cart_id = $_POST['cart_id'];
    
    $sql = "UPDATE Invoice SET invoice_id='$inv_id', customer_id='$cus_id', cart_id='$cart_id' ";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='invoice.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถแก้ไขมูลได้');</script>";
    }
    mysqli_close($conn);
?>  

