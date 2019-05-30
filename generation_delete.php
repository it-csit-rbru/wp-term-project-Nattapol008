<?php
    $delete = $_GET['id'];
    include 'connect.php';
    if(mysqli_query($conn, "DELETE FROM generations WHERE generation_id=$delete"))
    {
        header( 'refresh: 1; url=generation_list.php' );
        echo "ลบแล้ว";
    }
?>