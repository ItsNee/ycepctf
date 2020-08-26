<!DOCTYPE html>
<html lang="en">
	<style>
	body {
	background-image: url("images/loginbackdrop.jpg");
        background-repeat:no-repeat;
       background-size:cover;
}
</style>
<head>
	<title>Super Secure Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/assets/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background:none;">
			<div class="wrap-login100" style="padding: 130px 33px 130px 33px;width:auto;">
				<form class="login100-form validate-form" action="login.inc.php" method="post"  style="width:auto;">
					<span class="login100-form-title">
						SocialBook
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email" placeholder="Username...">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password...">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"  type="submit" name="login-submit" value="1">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="assets/js/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/bootstrap/js/popper.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>