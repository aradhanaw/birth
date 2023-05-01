<form  method="POST">
<h2>Fill Data</h2>
<p class="hint-text">Fill below form.</p>
 <div class="form-group">
 
<div class="row">
<div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="true"></div>
<div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="true"></div>
</div>        	
</div>
 
<div class="form-group">
<input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
        </div>
 
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
 
</div>
 
<div class="form-group">
<textarea class="form-control" name="address" placeholder="Enter Your Address" required="true"></textarea>
</div>        
 
<div class="form-group">
<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
</div>
</form>


//datainsertion



<?php 
//Databse Connection file
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];
   
  // Query for data insertion
     $query=mysqli_query($con, "insert into tblusers(FirstName,LastName, MobileNumber, Email, Address) value('$fname','$lname', '$contno', '$email', '$add' )");
    if ($query) {
    echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>