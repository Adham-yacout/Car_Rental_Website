<?php



if(isset($_POST['logoutbtn']))
{  
  session_start();
    session_unset();
    session_destroy();
    header('location:../html/index.html');
   
}
?>

<html lang="eg">

    <head>
        <meta charset="UTF-8">
        <title>
           Admin
        </title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="../css/userlands.css">
    </head>

<body>
  <header>
   
    
    <div class="menu" id="menuicon"
     <ul class="navbar">
 
     </ul></div>
     <div class="header-btn">
     <form action="userland.php" method = "post">
    <button id="logoutbtn" class ="sign"  name="logoutbtn" type="submit">Logout</button>
    </form>
     </div>
    </header>
  <Button class="buttons" >Rent</Button>
  
  <Button class="buttons">Search</Button>
  
  


</body>

</html>
