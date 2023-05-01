<html>
<head>
<title>Customer Bill Processing</title>
</head>
<body>
<h2>Customer Bill Detail Processing</h2>
<?php
include("dbconnect.php");
if(isset($_POST['submit'])){
    
$customer_id=$_POST["customer_id"];
$customer_name=$_POST["customer_name"];
$Bill_id=$_POST["Bill_id"];

$Billamount=$_POST["Bill_amount"];


$query="INSERT into tbl_customerbill(customer_id,customer_name,Bill_id,bill_amount)
VALUES('$customer_id', '$customer_name','$Bill_id','$Billamount')";

echo $query;
$result=mysqli_query($conn, $query);
if($result){
echo"Succesfull message";
}
else{
    echo"Error:".$query.":-" .mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>
</html>
