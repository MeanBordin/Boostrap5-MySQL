<?php 
    include 'conndb.php';
    
    $promo_id = $_POST['promotion_id'];
    $c_date = $_POST['c_date'];
    $mod_date = $_POST['mod_date'];
    
    $sql = "UPDATE promotion SET promotion_id='$promo_id', c_date='$c_date', mod_date='$mod_date' 
            WHERE promotion_id='$promo_id' ";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='promotion.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถแก้ไขมูลได้');</script>";
    }
    mysqli_close($conn);
?>  

