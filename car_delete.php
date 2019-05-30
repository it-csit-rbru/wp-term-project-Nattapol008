<?php
    $delete = $_GET['id'];
    include 'connect.php';
    if(mysqli_query($conn, "DELETE FROM cars WHERE id=$delete"))
    {
        header( 'refresh: 1; url=car_list.php' );
        echo "ลบแล้ว";
    }
?>