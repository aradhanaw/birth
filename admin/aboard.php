<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location:adminlogin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Board</title>
    <link rel="stylesheet" href="boarddesign.css?v=<?php echo time();?>">

    <style>
        body{
            margin:0;
        }
        div.header{
            color:white;
            font-family:poppins;
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:space-between;
            padding:0 60px;
            background-image: linear-gradient(blue,skyblue);
           
            
            
        }

        div.header button{
            background-color:white;
            font-size:16px;
            font-weight:550;
            padding:8px 12px;
            border:2px solid black;
            border-radius:5px;
        }
    </style>
</head>
<body>
       <div class="sidebar">
          <div class="logo-name">
          <img src="logo.png">
          </div>
            <ul>
             <li><a href="adminboard.php">Dashboard</a></li>

             <li><a href="#">Home</a></li>
            
             <li> <a href="#">Birth Application</a></li>
           <li><a href="#">Search</a></li>

            </ul>
        

        </div>
  <div class="container">  
      <div class="header">
         <h1>ADMIN BOARD  (<?php echo $_SESSION['AdminLoginId']?>) </h1>
       
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <button type ="submit"name="Logout">LOGOUT</button>
         </form>

     </div>
        

         

    <?php
    
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("location:adminlogin.php");
    }
    ?>


    
</body>
</html>