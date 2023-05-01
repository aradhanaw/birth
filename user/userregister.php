<?php
require_once "dbconnect.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
        echo'<script>alert("Username cannot be blank!")</script>';
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                    echo'<script>alert("Username already taken!")</script>';
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
                echo'<script>alert("Something went wrong!")</script>';
            }
        }
    }
    $stmt='';

    "mysqli_stmt_close($stmt)";


  // Check for password
   if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
    echo'<script>alert("Password cannot be blank!")</script>';
     }
 elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
    echo'<script>alert("Password cannot be less than 5 characters!")</script>';
    }
  else{
    $password = trim($_POST['password']);
   }

   // Check for confirm password field
   if(trim($_POST['password']) !=  trim($_POST['password_confirmation'])){
    $password_err = "Passwords should match";
    echo'<script>alert("Password should match!")</script>';
   }
  // If there were no errors, go ahead and insert into the database
  if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
  { 
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: userlogin.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
            echo'<script>alert("Something weent wrong!")</script>';
        }
    }
    mysqli_stmt_close($stmt);
   }
   mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="userstyle.css?v=<?php echo time();?>">
    
</head>
<body>
    <div id="frm">
    <h2>User Registration</h2>
    <form action="#" method="post" id="signup">
        <div class="gr">
            <label for="name">Username</label>
            <input type="text" id="name" name="username">
        </div>
        
        <div class="gr">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        
        <div class="gr">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div class="gr">
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        
        
        
        <div class="gr"><button type="submit"class="btn" name="register">Register</button></div>
        <h4>Do you have an account</h4>
        <a href="userlogin.php"><h4>Login</h4></a>
        
        
    </form>

    </div>
    
       
</body>
</html>