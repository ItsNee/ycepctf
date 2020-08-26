<?php
    $host = 'db';  //the name of the mysql service inside the docker file.
    $user = 'root';
    $password = 'root';
    $db = 'loginTest';
    $conn = new mysqli($host,$user,$password,$db);

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    // print($email);
    // print($pass);

    //$query = "SELECT email FROM members WHERE members.email='$email' AND members.pass='$pass'";
    // $query = "SELECT * FROM members WHERE members.email='$email' AND members.pass='$pass'";

    // $result = mysqli_query($conn, $query);
    
    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //       echo "email: " . $row["email"]. " - pass: " . $row["pass"]. "<br>";
    //     }
    //   } else {
    //     echo "Nice try......";
    //   }

    // mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inject me!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form action="login.php" method="POST" class="login100-form validate-form">
					<!-- <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span> -->

            <a class="txt1" href="#">
            <?php 
                $query = "SELECT * FROM members WHERE members.email='$email' AND members.pass='$pass'";

                $result = mysqli_query($conn, $query);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo "email: " . $row["email"]. " - pass: " . $row["pass"]. "<br>";
                    }
                  } else {
                    echo "Nice try......";
                  }
            
                mysqli_close($conn);
            ?>
						</a>

				</form>
			</div>
		</div>
  </div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>