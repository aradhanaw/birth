<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: userlogin.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Board</title>
    <link rel="stylesheet" href="design.css?v=<?php echo time();?>">

</head>
<body>
       <div class="sidebar">
          <div class="logo-name">
          <img src="logo.png"><?php echo "Welcome ". $_SESSION['username']?>!
          </div>
          <a href="form.php">Registration Form</a>
          <a href="payment.php">Payment</a>
          <a href="cetificate.php">Get Certificate</a>
        

        </div>
  <div class="container">  
    <div class="header">
      
        
            <p>Online Birth Registration System</p>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <button type ="submit"name="Logout">LOGOUT</button>
         </form>
            
    </div>
        

         <div class="content">
            
            
          </div>
  </div>      

     <footer class="sticky-footer">
        <p>designed by abc.copyright@abc</p>
      </footer>

      <?php
      if(isset($_POST['Logout']))
      {
        session_start();
       $_SESSION = array();
        session_destroy(); 
        header("location:userlogin.php");

      }



?>


      


    
</body>
</html>






