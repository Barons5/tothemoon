<?php
    include 'config.php';
    $sql = "DELETE FROM student where stu_id = '".$_GET['stu_id']."'";
    mysqli_query($conn, $sql);

    header("location:studentlist.php");
?>
