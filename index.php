<?php
	include 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>ฝึกงาน</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style1.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/com.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								
			      	</div>
							<form  method="POST"  class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" name="username" class="form-control" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" name="password" class="form-control" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit"  class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>

		            
		          </form>
		          <p class="text-center">Not a member? <a  href="register.php">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

<?php
	if(isset($_POST['username'])&& isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		
		$sql = "SELECT * FROM dberp WHERE member_username = '$username' AND member_password = '$password'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) == 1){
			echo "<script>window.location='home.php'</script>";

		}
		else{
			echo "<script>window.location='index.php'</script>";

		}
	}
?>



