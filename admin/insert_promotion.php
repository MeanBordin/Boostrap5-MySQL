<?php
    include 'conndb.php';

    $promo_id = $_POST['promotion_id'];
    $promo_name = $_POST['promotion_name'];
    $c_date = $_POST['c_date'];
    $mod_date = $_POST['mod_date'];

    $sql = "INSERT INTO promotion(promotion_id, promotion_name, c_date, mod_date) 
            VALUES ('$promo_id', '$promo_name', '$c_date', '$mod_date')";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='promotion.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถบันทึกมูลได้');</script>";
    }

    mysqli_close($conn);
?>