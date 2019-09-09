
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>


<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" name="Main_Form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username" required  maxlength="3">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required> 
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
					
						<input type="submit" name="process" value="Login" class="login100-form-btn" >
					</div>

					<div class="text-center p-t-90">
						<!--quay lại Trang chủ nè-->
						<a class="txt1" href="../index.php">

                            <span  style="color: red;font-size: 20px;">Note:</span> You can login with any account or any paragraph text.
                            <br/><br>
							 Go Home!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	


<?php
   if(isset($_POST['process']))
   {

     if(1!=1)
     {

     }
     else
     {

     setcookie('username',$_POST['username'],time()+3000);
     setcookie('password',$_POST['password'],time()+3000);

     header("location:Main.php");
     }
     
   }
 ?>

</body>
</html>