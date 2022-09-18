<?php
    include 'conndb.php';

    $invoice_id = $_POST['invoice_id'];
    $cus_id = $_POST['customer_id'];
    $cart_id = $_POST['cart_id'];

    $sql = "INSERT INTO Invoice(invoice_id, customer_id, cart_id) VALUES ('$invoice_id', '$cus_id', '$cart_id')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='invoice.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถบันทึกมูลได้');</script>";
    }

    mysqli_close($conn);
?>