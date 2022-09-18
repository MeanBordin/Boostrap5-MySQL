<?php
    include 'conndb.php';

    $cus_id = $_POST['customer_id'];
    $cus_name = $_POST['customer_name'];
    $email = $_POST['email'];
    $locat = $_POST['location'];
    $dfb = $_POST['date_of_birth'];
    $c_date = $_POST['c_date'];
    $m_date = $_POST['mod_date'];
    $p_code = $_POST['postcode'];
    
    $sql =  "INSERT INTO Customer(customer_id, customer_name, email, location, date_of_birth, c_date, mod_date, postcode) 
             VALUES('$cus_id', '$cus_name', '$email', '$locat', '$dfb', '$c_date', '$m_date', '$p_code')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='customer.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถบันทึกมูลได้');</script>";
    }

    mysqli_close($conn);
?>