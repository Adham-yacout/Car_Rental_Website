<?php
$host = "localhost";
$db_name = "car_rental_system";
$user = "root";
$password = "";
$connection= new mysqli($host, $user, $password, $db_name);

if(isset($_POST['submit'])){
// read all rows from database 
 $sql = "SELECT * FROM car";
 $result= $connection->query($sql);
 if(!$result)
 {
    die("invalid query" .$connection->error);
 }
 while($row = $result ->fetch_assoc())
 {
   echo " <tr>
        <td> 
        <img  src='". $row["image"] . "' width='90%' height='90%' >
        
        </td>
        <td>
            ". $row["plate_no"] ."
           </td>
           <td>
           " . $row["model"] ."
           </td>
           <td>
            ". $row["year"] ."
           </td>
           <td>
            ". $row["transmission"] ."
           </td>
           <td>
            ". $row["color"] ."
           </td>
    </tr>";
 }}
?>

<div class="container" >
<link rel="stylesheet" href="../css/stylesearchcar.css">
    <formform action="searchcar.php" method = "post">
    <input id="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Search by</label>
		<label>
			<input type="radio" name="search" id="1" checked/>
			<span>Model</span>
		</label>
		<label>
			<input type="radio" name="search" id="2"/>
			<span>Year</span>
		</label>
		<label>
			<input type="radio" name="search" id="3"/>
			<span>Color</span>
		</label>
        <label>
			<input type="radio" name="search" id="4" />
			<span>Transmission</span>
		</label>
		<label>
			<input type="radio" name="search" id="5"/>
			<span>Price per day</span>
		</label>
        <input class="submit-btn" name="submit" type="submit" value="Search">
	</form>
</div>