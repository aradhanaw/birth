<?php require("dbconnect.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="adminstyle.css?v=<?php echo time();?>">

</head>
<body>
<div id="frm">
    <h2>Admin Login</h2>
    <form method="post"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
        <div class="gr">
        <label for="name">Admin Name</label>
            <input type="text" id="name" name="AdminName">
        </div>
        
        <div class="gr">
        <label for="password">Password</label>
        <input type="password" name="AdminPass" id="password">
        </div>
        
        
        <div class="gr"><button type="submit"class="btn" name="Login">Login</button></div>
        
        
        
    </form>

    </div>
    <?php
    function input_filter($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['Login'])){
        #filtering user input
        $AdminName=input_filter($_POST['AdminName']);
        $AdminPass=input_filter($_POST['AdminPass']);

        #escaping special symbols used in SQL statement
        $AdminName=mysqli_real_escape_string($conn,$AdminName);
        $AdminPass=mysqli_real_escape_string($conn,$AdminPass);

        #query template

        $query = "SELECT admin_name, admin_password FROM adminlogin WHERE admin_name = ? AND admin_password=?";


        #prepared statement
        if($stmt=mysqli_prepare($conn,$query))
        {
            mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass);//binding value to templateor prepared statement
            mysqli_stmt_execute($stmt);//executing prepared statement
            mysqli_stmt_store_result($stmt);//transfering the result of execution in $stmt
            if(mysqli_stmt_num_rows($stmt)==1)
            {
                session_start();
                $_SESSION['AdminLoginId']=$AdminName;
                header("location:adminboard.php");
            }
            else
            {
                echo"<script>alert('Invalid Admin or Password');</script>";
            }
            mysqli_stmt_close($stmt);
        }
        else
        {
            echo"<script>alert('SQL Query cannot be prepared');</script>";
        }


    }
    ?>
    
</body>
</html>