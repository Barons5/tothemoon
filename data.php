<?php
    include 'connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">username</th>
                    <th scope="col">password</th>
                    <th scope="col">e-mail</th>
                    <th scope="col">phone</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <?php
    $sql = "SELECT * FROM dberp";
    $result = mysqli_query($conn,$sql);
    
    
    while($row = mysqli_fetch_assoc($result)){
  ?>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $row['member_username'] ?></td>
                    <td><?php echo $row['member_password'] ?></td>
                    <td><?php echo $row['member_email'] ?></td>
                    <td><?php echo $row['member_phone'] ?></td>
                    <td><a class ="btn btn-success" href="updateform.php?id=<?php echo $row['member_id'] ?>">update</a> </td>
                    <td><a class = "btn btn-danger" href="del.php?id=<?php echo $row['member_id'] ?>">del</a></td>
                </tr>

            </tbody>
            <?php
} 
?>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>