<?php
    $delete = $_GET['id'];
    include 'connect.php';
    if(mysqli_query($conn, "DELETE FROM colors WHERE color_id=$delete"))
    {
        header( 'refresh: 1; url=color_list.php' );
        echo "ลบแล้ว";
    }
?>