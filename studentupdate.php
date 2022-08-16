<?php
    include 'config.php';
    $sql= "UPDATE `student` SET
     `stu_name` = '".$_POST['stu_name']."', 
     `stu_lastname` = '".$_POST['stu_lastname']."', 
     `stu_address` = '".$_POST['stu_address']."', 
     `stu_tel` = '".$_POST['stu_tel']."',
      `stu_username` = '".$_POST['stu_username']."', 
      `stu_password` = '".$_POST['stu_password']."'
       WHERE `student`.`stu_id` = '".$_POST['stu_id']."'";

     mysqli_query($conn,$sql);
     header("Location:studentlist.php");
?>