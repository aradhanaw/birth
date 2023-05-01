<?php 

include "dbconnect.php";

    if (isset($_POST['update'])) {

        $Name=$_POST["fn"];
        $user_id = $_POST["user_id"];
    $DOB=$_POST["dob"];
    $Father_name=$_POST["name"];
    $Mother_name=$_POST["mn"];
    $Grandfather_name=$_POST["gn"];
    $Municipality=$_POST["muni"];
    $district=$_POST["district"];
    $gender=$_POST["gender"];
    $per_address=$_POST["address"];
    $DOR=$_POST["dor"];

        $sql = "UPDATE form SET fullname='$Name',date_of_birth='$DOB',fathername='$Father_name',mothername='$Mother_name',grandfathername='$Grandfather_name',municipality='$Municipality',district='$district',gender='$gender',permanent_address='$per_address',date_of_registration='$DOR' WHERE id='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `form` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $Name=$row["fullname"];
    
          $DOB=$row["date_of_birth"];
          $Father_name=$row["fathername"];
         $Mother_name=$row["mothername"];
        $Grandfather_name=$row["grandfathername"];
        $Municipality=$row["municipality"];
        $district=$row["district"];
       $gender=$row["gender"];
        $per_address=$row["permanent_address"];
         $DOR=$row["date_of_registration"];
        

            $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Full Name:<br>

            <input type="text" name="fn" value="<?php echo $Name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            Date of birth:<br>

            <input type="text" name="dob" value="<?php echo $DOB; ?>">

            <br>

            Father's Name:<br>

            <input type="text" name="name" value="<?php echo $Father_name; ?>">

            <br>

            Mother's Name:<br>

            <input type="text" name="mn" value="<?php echo $Mother_name;?>">

            <br>

            Grandfather Name:<br>

         <input type="text" name="gn" value="<?php echo $Grandfather_name;?>">

          <br>

          Municipality:<br>

         <input type="text" name="muni" value="<?php echo $Municipality;?>">

           <br>

           District:<br>

         <input type="text" name="district" value="<?php echo $district;?>">

           <br>


          

            Gender:<br>

            <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male

            <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female

            <br>
            PermanentAddress:<br>

          <input type="text" name="address" value="<?php echo $per_address;?>">

           <br>

           Date of Registration:<br>
 
          <input type="text" name="dor" value="<?php echo $DOR; ?>">

            <br>
            <br>

            <input type="submit" value="Update" name="update"><br>


          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: viewapplication.php');

    } 

}

?> 