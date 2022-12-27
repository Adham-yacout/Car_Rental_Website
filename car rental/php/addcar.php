<?php require "connect.php"?>
<?php
$output ="";
if(isset($_POST['submitcar']))
{	
	$plate = $_POST['plateno'];
	$modelc= $_POST['model'];
    $yearr = $_POST['year'];
    $colorr = $_POST['color'];
    $transm = $_POST['trans'];
    $stat= $_POST['purpose'];
	$office=$_POST['officeid'];
	$price=$_POST['priceperday'];
    $image=$_POST['imagel'];
	
   
    $insert = $conn->prepare("INSERT INTO `car`(`plate_no`, `model`, `year`, `color`, `transmission`, `status`
    , `office_id`, `priceperday`, `image`)
     VALUES(:plateno, :model, :year, :color, :trans,:purpose, :officeid, :priceperday, :imagel)");
    

        $insert->execute([
		':plateno' => $plate,
		':model'=> $modelc,
		':year' => $yearr,
		':color' => $colorr,
		':trans' => $transm,
		':purpose' => $stat,
      ':officeid' => $office,
		':priceperday' => $price,
		':imagel' => $image
		]		
        
        );
        header('location:addcar.php');
    }
     
  
?>

<html>

<head>
<meta charset="UTF-8">
<title>
  Add car
</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="../css/styleaddcar.css">
<!-- <script defer src="register.js" > </script> -->

</head>

<body>

<section class="get-in-touch">
   <h1 class="title">Add Car</h1>
   <form class="contact-form row" action="addcar.php" method="post">
      <div class="form-field col-lg-6 ">
         <input name="plateno" id="plate_no" class="input-text js-input" type="text" required>
         <label class="label" for="plate_no">plate_no</label>
      </div>
   <div class="form-field col-lg-6">
         <input name="model" id="Model" class="input-text js-input" type="text" required>
         <label class="label" for="Model">Model</label>
      </div>
      <div class="form-field col-lg-6">
         <input  name="year" id="Year" class="input-text js-input" type="text" required>
         <label class="label" for="Year">Year</label>
      </div>
      <div class="form-field col-lg-6">
         <input name="color" id="Color" class="input-text js-input" type="text" required>
         <label class="label" for="Color">Color</label>
      </div>
      <div class="form-field col-lg-6">
         <input name="trans" id="Transmission" class="input-text js-input" type="text" required>
         <label class="label" for="Transmission">Transmission</label>
      </div>
      <div class="form-field col-lg-6">
         <input name="officeid" id="office_id" class="input-text js-input" type="text" required>
         <label class="label" for="office_id">office_id</label>
      </div>
      <div class="form-field col-lg-6">
         <input name="priceperday" id="Price_id" class="input-text js-input" type="text" required>
         <label class="label" for="Price per day">Price_id</label>
      </div>
      <div class="form-field col-lg-6">
         <input name="imagel" id="image_link" class="input-text js-input" type="text" required>
         <label class="label" for="image_link">image_link</label>
      </div>
      <div class="form-field col-lg-6">
      <select type="text" name="purpose" id="purpose" class="form-control"  required >
  <option></option>
  <option value="ACTIVE">Active</option>
  <option value="OUT_OF_SERVICE">out of service</option>
  <option value="RENTED">Rented</option>
</select>
      </div>
   
  
      <div class="form-field col-lg-6">
         <input class="submit-btn" type="submit" name="submitcar"  value="Add car">
      </div>
   </form>
</section>
</body>
</html>
