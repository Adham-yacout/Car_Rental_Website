
<?php
$mysql = new mysqli("localhost","root","","car_rental_system");
mysqli_report(MYSQLI_REPORT_STRICT);
$output ="";
if(isset($_POST['Rent']))
{	
	$plateno = $_POST['Plate_number'];
	$reservation_id= $_POST['Reservation_number'];
    $startdate = $_POST['Start_date'];
	$enddate=$_POST['End_date'];
	$payed=$_POST['payment_amount'];
    

    
    // $insert = $conn->prepare("INSERT INTO `payment`(`paymentid`, `amountpaid`, `amountleft`, `paymentdate`, `paymentduedate`) VALUES ()")
  
    $result = $mysql -> query("INSERT INTO `reservation`(reservation_id,plate_no,paymentid,start_date,end_date,customer_ssn)  
    values ('$reservation_id','$plateno','1','$startdate','$enddate','1')");
    mysqli_query($mysql,$result);
    
       

  
	 }
  
?><form action="rent.php" method = "post">
<div class="rent-container">
  <div class="left-container">
    <div class="puppy">
      <img src="https://i.pinimg.com/originals/4b/fa/ab/4bfaab3f829726aa86f546199645d6a5.jpg"/>
      <link rel="stylesheet" href="../css/stylerentcar.css">
    </div>
  </div>
  <div class="right-container">
    <header>
      <h1>Rent a car!! </h1>
      <div class="set">
        <div class="Plate number">
          <label for="Plate number">Plate number</label>
          <input name="Plate_number" placeholder="Plate number" type="text"></input>
        </div>
        <div class="Reservation number">
          <label for="Reservation number">Reservation number</label>
          <input name="Reservation_number" placeholder="Reservation number" type="text"></input>
        </div>
        
      </div>
      <div class="set">
      <div class="Start date">
          <label for="Start date">Start date</label>
          <input name="Start_date" placeholder="MM/DD/YYYY" type="date"></input>
        </div>
        <div class="End date">
          <label for="End date">End date</label>
          <input name="End_date" placeholder="MM/DD/YYYY" type="date"></input>
        </div>
      </div>
     <div class="set">
     <div class="payment amount">
          <label for="payment amount">payment amount</label>
          <input name="payment_amount" placeholder="payment amount" type="text"></input>
        </div>
     </div>
       
      
    </header>
    <footer>
      <div class="set">
        <button name="Rent">Rent</button>
        </form>
      </div>
    </footer>
  </div>
</div>
