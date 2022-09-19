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
    
    $sql = "UPDATE Customer SET customer_name='$cus_name', email='$email', location='$locat',
                                date_of_birth='$dfb', c_date='$c_date', mod_date='$m_date', 
                                postcode='$p_code' 
                            WHERE customer_id='$cus_id' "; 

    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='customer.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถแก้ไขมูลได้');</script>";
    }
    mysqli_close($conn);
?>  
