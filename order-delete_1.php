<?php
    include 'class/myclass.php';
    if (isset($_POST['delete']))
    {
        $order_id = mysqli_real_escape_string($conn, $_POST['order_id']);
        $queryupdate = mysqli_query($conn, "update tbl_package_booking set status='Cancelled' where package_booking_id='{$order_id}'") or die(mysqli_error($conn));
        if ($queryupdate)
        {

            echo "<script>window.location='package-order.php';alert('Your Order Successfully Cancelled');</script>";
        }
        else
        {
            echo "<script>window.location='package-order.php';alert('Your Order Not Cancelled');</script>";
        }        
    }
?>