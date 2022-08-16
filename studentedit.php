<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Google Font -->
        <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100;1,400&display=swap');
</style>

        
    
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
          
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
    </html>
</head>
<body>
    <body style=font-family: 'Poppins', sans-serif;>
    <div class="container">
    <?php
 include "nav.php";
 include "config.php";
 $sql = "SELECT * FROM student WHERE stu_id like '".$_GET['stu_id']."'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
?>

 <h3>ระบบลงทะเบียน</h3>
 <form method="post" action="studentupdate.php">
  <input name="stu_id" type="hidden" value="<?php echo $row['stu_id']; ?>">


<div class="form-group">
  <label for="">ชื่อ</label>
  <input value="<?php echo $row['stu_name']; ?>" type="text" type="text" class="form-control" name="stu_name" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">กรุณาใส่ชื่อนักเรียน</small>
</div>
<div class="form-group">
  <label for="">นามสกุล</label>
  <input value="<?php echo $row['stu_lastname']; ?>"type="text" class="form-control" name="stu_lastname" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">กรุณาใส่นามสกุลนักเรียน</small>
</div>
<div class="form-group">
  <label for="">หมายเลขโทรศัพท์</label>
  <input value="<?php echo $row['stu_tel']; ?>"type="text" class="form-control" name="stu_tel" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">กรุณาใส่หมายเลขโทรศัพท์</small>
</div>
<div class="form-group">
  <label for="">ที่อยู่</label>
  <input value="<?php echo $row['stu_address']; ?>"type="text" class="form-control" name="stu_address" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">กรุณาใส่ที่อยู่</small>
</div>
<div class="form-group">
  <label for="">ชื่อผู้ใช้</label>
  <input value="<?php echo $row['stu_username']; ?>"type="text" class="form-control" name="stu_username" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">กรุณาใส่ชื่อผู้ใช้</small>
</div>
<div class="form-group">
  <label for="">รหัสผ่าน</label>
  <input value="<?php echo $row['stu_password']; ?>"type="password" class="form-control" name="stu_password" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">กรุณาใส่รหัสผ่าน</small>
</div>
<button type="submit" class="btn-success">บันทึก</button>
<button type="reset" class="btn-danger">ยกเลิก</button>
    </div>


</body>
</html>