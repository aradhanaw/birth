<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: board.php");
    exit;
}
require_once "dbconnect.php";
$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    echo'<script>alert("Please enter username and password!")</script>';

    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
    if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        echo'<script>alert("Username not found!")</script>';

        if(mysqli_stmt_num_rows($stmt) == 1)
        {
                 mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                 if(mysqli_stmt_fetch($stmt))
                 {
                    if(password_verify($password, $hashed_password))
                      {
                         // this means the password is corrct. Allow user to login
                          session_start();
                          $_SESSION["username"] = $username;
                           $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: board.php");
                            
                       }
                             echo'<script>alert("Password donot match!")</script>';

                    }
                    
            }

            }
        }    
        
        
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
    <h2>User Login</h2>
    <form method="post">
        <div class="gr">
        <label for="name">Username</label>
            <input type="text" id="name" name="username">
        </div>
        
        <div class="gr">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        </div>
        
        
        <div class="gr"><button type="submit"class="btn">Login</button></div>
        <h4>Don't have an account</h4>
        <a href="userregister.php"><h4>Please Register</h4></a>
        
        
    </form>

    </div>
    
       
</body>
</html>



