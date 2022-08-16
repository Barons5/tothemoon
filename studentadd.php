<?php
include "config.php";

$sql= "INSERT INTO `student` (`stu_id`, `stu_name`, `stu_lastname`, `stu_address`, `stu_tel`, `stu_username`, `stu_password`) 
VALUES (NULL, '".$_POST['stu_name']."','".$_POST['stu_lastname']."','".$_POST['stu_address']."','".$_POST['stu_tel']."','".$_POST['stu_username']."','".$_POST['stu_password']."')";
mysqli_query($conn,$sql);


header("Location:studentlist.php");
?>