<?php
    $delete = $_GET['id'];
    include 'connect.php';
    if(mysqli_query($conn, "DELETE FROM brands WHERE brand_id=$delete"))
    {
        header( 'refresh: 1; url=brand_list.php' );
        echo "ลบแล้ว";
    }
?>