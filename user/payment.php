
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
    <title>Registration Form</title>
      <link rel="stylesheet" href="design.css?v=<?php echo time(); ?>">
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
      
        
            <h1>Online Birth Registration System</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <button type ="submit"name="Logout">LOGOUT</button>
         </form>
            
    </div>
        

         <div class="content">
         
         
         <form action="customerbill.php" method="post">


    
    <h1 style="color:blue;">Payment Details</h1>
    
<div>
<h4>Payment Amount : Rs. 25</h4>


<label>Choose how you want to pay</label>
<select name="paymentmethod">
<option value="" disabled selected>Choose option</option>
<option value="khalti">Khalti</option>
    <option value="esewa">Esewa</option>
    <option value="other">Other</option></td>

</select>
<br>
  
<input type="submit"class="btn" name="submit" value="submit form"/>
</div>


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




