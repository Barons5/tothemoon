<?php
include "connect.php";
if (isset($_POST['submit'])) {
    # code...

$id = $_POST['id'];
$username =$_POST['username'];
$password =$_POST['password'];
    $update = "UPDATE dberp
    SET member_username = '$username',
        member_password = '$password'
    WHERE member_id = '$id'";
    $result = mysqli_query($conn,$update);
    

    if($result){
        echo "<script>alert('Update Success')</script>";
        echo "<script>window.location='data.php'</script>";
    }
    else{
        echo "<script>alert('Update Failed')</script>";
        echo "<script>window.location='data.php'</script>";
    }

}
else {
    echo "NO";
}
?>