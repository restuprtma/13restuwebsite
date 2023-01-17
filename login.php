<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="display.css" >

	<link rel="stylesheet" href="font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login disek lekk!!</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<img class="img" src="image/mcpr.jpg" height="420px">
						
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="" method="POST" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" placeholder="username" name="username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="password" name="password" required>
		            </div>
		            <div class="form-group">
		            	<input type="submit" name="submit" class="form-control btn btn-primary rounded submit px-3" value="login">
		            </div>
		          </form>

				  <?php
				  if(isset($_POST['submit'])){

					$username = $_POST['username'];
					$password = $_POST['password'];
					// variable pendefinisian kredensial
					$_SESSION['username'] = 'restu';
					$_SESSION['password'] = '11111';


					// pengecekan kredensial login
					if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
						header('Location: admin/index.php');
					} 
					else {
						echo "Username atau password salah lekk!";
					}
				}
				?>

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


