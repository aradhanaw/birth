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
      
        
            <h1>Online Birth Registration System</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <button type ="submit"name="Logout">LOGOUT</button>
         </form>
            
    </div>
        

         <div class="content">
         <h2>Registration Form</h2>
    <form action="formprocess.php" method="post">

       
        <label>Full Name</label>
        <input type="text" name="fn"/><br><br>

        <label>Date of birth</label>
        <input type="text" name="dob"/><br><br>

        <label>Father's Name</label>
        <input type="text" name="name"/><br><br>

        <label>Mother's Name</label>
        <input type="text" name="mn"/><br><br>

        <label>Grandfather Name</label>
        <input type="text" name="gn"/><br><br>


        <label>Municipality</label>
        <input type="text" name="muni"/><br><br>


        <label>District</label>
        <input type="text" name="district"/><br><br>


        <label>Gender</label>
        <input type="radio" name="gender" value="Male">Male

       <input type="radio" name="gender" value="Female">Female<br><br>

        <label>Permanent Address</label>
        <input type="text" name="address"/><br><br>


        <label>Date Of Registration</label>
        <input type="text" name="dor"/><br><br>

        <input type="submit"name="submit" value="submit form"/>
    </form>
            
            
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


