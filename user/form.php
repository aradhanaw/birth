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
         
         
         <form action="formprocess.php" method="post">

    <h2>Online Birth Registration Form</h2>
    <br><br>
    <h3>Newly Born Child Details</h3>
    
<div>
<table border="3px solid black">
  <tr>
    <td width=50%>
    <label for ="Fullname">Fullname</td>
      <td>
      <input type="text" name="name"></td>
</tr>

  <tr>
    <td>
    <label for ="dob">Date Of Birth</td>
      <td>
      <input type="date" name="dob"></td>
  </tr>


  <tr>
  <td>
    <label for="birthplace" name="place">Choose a birthplace:</label></td>
    <td>
  <select name="place" id="birthplace">
    <option value="hosp">Hospital</option>
    <option value="home">Home</option>
    <option value="other">Other</option></td>

    </select>

  </tr>


<tr>
<td>
  <label for="gender">Gender</label></td>
  <td>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female</td>
</tr>

<tr>
<td>
  <label for="type">Birth Type</label></td>
  <td>
<select name="type" id="type">
  <option value="male">Single</option>
  <option value="famale">Twins</option>
  <option value="famale">Triplets</option>

  </select>

</tr>

<tr>
<td>
  <label for="defect">Any Defect?</label></td>
  <td>
<input type="radio" name="yes"> Yes
</input>

<input type="radio" name="no"> No
</input>
</td>

<tr>
    <td>
    <label for ="district">District</td>
      <td>
      <input type="text" name="district"></td>
  </tr>

  <tr>
    <td>
    <label for ="zone">Zone</td>
      <td>
      <input type="text"name="zone"></td>
  </tr>


  <tr>
    <td>
    <label for ="grandfather">Grandfather's Name</td>
      <td>
      <input type="text" name="grandname"></td>
  </tr>
  



</table>

</form>
  <h3>Newly Born Child's Parent's Details</h3>
<form method="post" action="formprocess.php">
  <table border="3px solid black">
    <caption>Father's Details</caption>
    <tr>
      <td>
      <label for ="fullname">Full Name</td>
        <td>
        <input type="text" name="fname"></td>
    </tr>

    <tr>
      <td>
      <label for ="adress">Permanent Address</td>
        <td>
        <input type="text" name="fadd"></td>
    </tr>

    <tr>
      <td>
      <label for ="age">Father's age during child birth</td>
        <td>
        <input type="text" name="fage"></td>
    </tr>


    <tr>
      <td>
      <label for ="country">Country</td>
        <td>
        <input type="text" name="fcount"></td>
    </tr>

    <tr>
      <td>
      <label for ="citizenship">Ctizenship Number</td>
        <td>
        <input type="text" name="fnum"></td>
    </tr>

    <tr>
      <td>
      <label for ="citizendistrict">Citizenship Registration Date and district</td>
        <td>
        <input type="text" name="fdist"></td>
    </tr>

    <tr>
      <td>
      <label for ="education">Education</td>
        <td>
        <input type="text" name="fedu"></td>
    </tr>

    <tr>
      <td>
      <label for ="dharma">Religion</td>
        <td>
        <input type="text" name="freg"></td>
    </tr>


        <tr>
          <td>
          <label for ="language">Language</td>
            <td>
            <input type="text" name="flan"></td>
        </tr>



  </table>
</form>


<form method="post" action="formprocess.php">
  <table border="3px solid black">
    <caption>Mother's Details</caption>
    <tr>
      <td>
      <label for ="fullname">Full Name</td>
        <td>
        <input type="text" name="mname"></td>
    </tr>

    <tr>
      <td>
      <label for ="adress">Permanent Address</td>
        <td>
        <input type="text" name="madd"></td>
    </tr>

    <tr>
      <td>
      <label for ="age">Mother's age during child birth</td>
        <td>
        <input type="text" name="mage"></td>
    </tr>


    <tr>
      <td>
      <label for ="country">Country</td>
        <td>
        <input type="text" name="mcount"></td>
    </tr>

    <tr>
      <td>
      <label for ="citizenship">Ctizenship Number</td>
        <td>
        <input type="text" name="mcit"></td>
    </tr>

    <tr>
      <td>
      <label for ="citizendistrict">Citizenship Registration Date and district</td>
        <td>
        <input type="text" name="mreg"></td>
    </tr>

    <tr>
      <td>
      <label for ="education">Education</td>
        <td>
        <input type="text" name="medu"></td>
    </tr>

    <tr>
      <td>
      <label for ="dharma">Religion</td>
        <td>
        <input type="text" name="mreg"></td>
    </tr>


        <tr>
          <td>
          <label for ="language">Language</td>
            <td>
            <input type="text" name="mlan"></td>
        </tr>



  </table>
</form>
<br><br>


<form method="post" action="formprocess.php">
  <table border="3px solid black">

    <tr>
      <td>
      <label for ="dateofreg">Date Of Registration</td>
        <td>
        <input type="text" name="dor"></td>
    </tr>

    <tr>
      <td>
      <label for ="phone">Phone Number</td>
        <td>
        <input type="text" name="mnum"></td>
    </tr>
</form>
</table>

<br><br>


<input type="submit"class="btn" name="submit" value="submit form"/>
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




