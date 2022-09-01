<?php
include "connect.php";

$id = $_GET['id'];
    $del = "DELETE 
    FROM dberp
    WHERE member_id = '$id'";
    $result = mysqli_query($conn,$del);
    

    if($result){
        echo "<script>alert('Delete Success')</script>";
        echo "<script>window.location='data.php'</script>";
    }
    else{
        echo "<script>alert('Delete Failed')</script>";
        echo "<script>window.location='data.php'</script>";
    }


?>