<?php require "connect.php"?>
<?php
$output ="";
if(isset($_POST['submitsignup']))
{	
	$userssn = $_POST['ssn'];
	$nameuser= $_POST['name'];
    $emailuser = $_POST['email'];
	$sex=$_POST['sex'];
	$country=$_POST['country'];
    $pass=$_POST['password'];
	
   
    $insert = $conn->prepare("INSERT INTO `customer`(`ssn`, `name`, `email`, `sex`, `country`, `password`) VALUES(:ssn, :name, :email, :sex, :country, :password)");
    $signup = $conn ->query("SELECT * FROM customer WHERE email = '$emailuser'");
    $signup->execute();
     $data = $signup->fetch(PDO::FETCH_ASSOC);
     if($signup->rowCount() > 0)
     {
        $output = "email is already found in database";  
     }
     else{

        $insert->execute([
			':ssn' => $userssn,
		':name' => $nameuser,
		':email' => $emailuser,
		':sex' => $sex,
		':country' => $country,
		':password' => $pass
		]		

			
        
        );
        header('location:../html/userland.html');
    }
     }
  
?>


<html>

<head>
<meta charset="UTF-8">
<title>
  Login Screen
</title>
<link rel="stylesheet" href="../css/stylesignin.css">
<script defer src="../js/login.js" > </script>

</head>

<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form id="signupform" action="signin.php" method="post">
			<h1>Create Account</h1>
			
			<span>or use your email for registration</span>
			<input name="name" type="text" placeholder="Name" />
			<input name="email" type="email" placeholder="Email" />
			<input name ="password" type="password" placeholder="Password" />
			<input name ="password2" type="password" placeholder="confirm Password" />
			<input name ="ssn"  placeholder="ssn" />
			<input name="country" type="text" placeholder="country" />
			<input name="sex"  placeholder="sex" />
           
			<button id="signupbtn"  name="submitsignup" type="submit ">Sign Up</button>
			
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="connect.php" method = "post">
			<h1>Sign in</h1>
			<div class="social-container">

			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
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

<footer>
	<p>

	</p>
</footer>
       
    


</body>
</html>