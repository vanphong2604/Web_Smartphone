<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Group4</title>
 	
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <link rel="stylesheet" href='./login.css'>

</head>

<body>
<!-- partial:index.partial.html -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<!-- <form action="#"> -->
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" id="name" placeholder="Name" />
			<span id="notify-sign-up-name" class="notify"></span>
			<input type="email" id="email" placeholder="Email" />
			<span id="notify-sign-up-email" class="notify"></span>
			<input type="password" id="password" placeholder="Password" />
			<span id="notify-sign-up-password" class="notify"></span>
			<button onclick="Sign_up()">Sign Up</button>
		<!-- </form> -->
	</div>
	<div class="form-container sign-in-container">
		<!-- <form action="#"> -->
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" id= "email-sign-in" placeholder="Email" />
			<input type="password" id = "password-sign-in" placeholder="Password" />
			<span id="notify-login" class="notify"></span>
			<a href="#">Forgot your password?</a>
			<button onclick="Sign_in()">Sign In</button>
		<!-- </form> -->
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
  <script  src="./script.js"></script>
  <script src="./login1.js"></script>
</body>
</html>
