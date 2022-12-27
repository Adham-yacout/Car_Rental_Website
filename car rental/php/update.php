<html>

<head>
<meta charset="UTF-8">
<title>
  update car
</title>
<link rel="stylesheet" href="../css/styleupdate.css">
<!-- <script defer src="register.js" > </script> -->

</head>

<body>

    <form id="updatecar" action="../html/Adminlandpage.html" method="post">
        <fieldset id="Databox" >
            <div id="error" style=" text-align: center;
            font-size: 16px;
            margin-bottom: 16px;
            color: red;">
            <!-- <p><?php echo $output ?></p> -->
            
        </div>
            <legend id="Boxname">update Car</legend>
            <label id="plate_no">plate_no</label>
            <br><div>
            <input id="plate_no"  name="plate_no" placeholder="plate_no">
            <button id="Addbtn" name="Addcar" type="submit " style="text-align: left;
            font-size: 10px;
            margin: unset;
          display: grid;
          margin-top: 16px;
            color: white;
            padding: 8px;
            margin-left: 5cm;
            background-color: #000000; ">search car </button>
            </div>
            <br>
            <label id="Model">Model</label>
            <br>
            <input id="Model" type="text" name="Model" placeholder="Model">
            <br>
            
            <label id="Year">Year</label>
            <br>
                <input id="Year"  name="Year" placeholder="Year">
            <br>
            <label id="Color">Color</label>
            <br>
                <input id="Color"  name="Color" placeholder="Color">
            <br>
            <label id="Transmission">Transmission</label>
            <br>
                <input id="Transmission"  name="Transmission" placeholder="Transmission">
            <br>
            <label id="officeid">office_Id</label>
            <br>
                <input id="officeid"  name="officeid" placeholder="officeid">
            <br>
            <label id="Price_id">Price Id</label>
            <br>
                <input id="Price_id"  name="Price_id" placeholder="Price_id">
            <br>
            <label id="Image">Image Link</label>
            <br>
                <input id="Image"  name="Image" placeholder="Image">
            <br>
           
              
            <button id="Addbtn" name="Addcar" type="submit " style="text-align: center;
            font-size: 24px;
            margin: auto;
          display: grid;
          margin-top: 16px;
            color: white;
            padding: 8px;
            background-color: #000000; ">update car </button>
            
            
  
  
    </fieldset>
    
            
</form>
       
    


</body>
</html>