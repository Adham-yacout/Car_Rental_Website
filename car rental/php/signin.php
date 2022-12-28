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
		echo '<script>alert("email is already found in database")</script>';
         
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
        // header('location:../html/userland.html');
    }
     }

	 if(isset($_POST['sumbitsignin']))
	 {
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;

		}
		$emailusers = validate($_POST['emailsin']);
		$pass2 = validate($_POST['passsin']);

		if(empty($emailusers)){
			
			echo '<script>alert("email is empty")</script>';
			
			//exit();
			
		}
		else if(empty($pass2)){
			echo '<script>alert("password is empty")</script>';
			
		}
		else{$login = $conn ->query("SELECT * FROM `customer` WHERE email='$emailusers' AND  password='$pass2'");
			$login->execute();
			 $data = $login->fetch(PDO::FETCH_ASSOC);
			
			if($login->rowCount() > 0)
			{
				
				if($pass2==$data['password'])
				{ 
				  //$_SESSION['username'] =$data['name'];
				  header('location:../html/userland.php');
					
					
				}
				else{
					echo '<script>alert("Incorrect data")</script>';
				  $output = "Incorrect data ";  
				
				}
			}
			else{
				echo '<script>alert("Incorrect data")</script>';
			
			   
			}}
		


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
		<form action="signin.php" method = "post">
			<h1>Sign in</h1>
			<div class="social-container">

			</div>
			<span>or use your account</span>
			<input name="emailsin" type="email" placeholder="Email" />
			<input name="passsin" type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button id="signinbtn" name="sumbitsignin" type="submit">Sign In</button>
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
