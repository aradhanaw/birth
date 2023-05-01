<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing</title>
</head>
<body>
    <h2>Form Process</h2>
    <?php
     include("dbconnect.php");
    if(isset($_POST['submit'])){

        
    $fullname=$_POST["name"];
    $dob=$_POST["dob"];
    $bplace=$_POST["place"];
    $gender=$_POST["gender"];
    $btype=$_POST["type"];
    $defect=$_POST["defect"];
    $district=$_POST["district"];
    $zone=$_POST["zone"];
    $grandname=$_POST["grandname"];
    $fathername=$_POST["fname"];
    $fperaddress=$_POST["fadd"];
    $fage=$_POST["fage"];
    $fcountry=$_POST["fcount"];
    $fnum=$_POST["fnum"];
    $fdistrict=$_POST["fdist"];
    $fedu=$_POST["fedu"];
    $freligion=$_POST["freg"];
    $flanguage=$_POST["flan"];
    $mothername=$_POST["mname"];
    $mperaddress=$_POST["madd"];
    $mage=$_POST["mage"];
    $mcountry=$_POST["mcount"];
    $mcitnum=$_POST["mcit"];
    $mreg=$_POST["mreg"];
    $meducation=$_POST["medu"];
    $mreligion=$_POST["mreg"];
    $mlanguage=$_POST["mlan"];
    $dateofreg=$_POST["dor"];
    $mblnum=$_POST["mnum"];
   


   

    $query="INSERT INTO form(fullname,date_of_birth,birthplace,gender,birthtype,defect,district,zone,granfathername,fathername,fpermanentaddress,fatherage,fcountry,fcitizennum,
    fcitdistrictanddate,fedu,freligion,flanguage,mothername,mperaddress,mage,mcountry,mcitizennum,mregdateanddistrict,medu,mreligion,mlanguage,dateofreg,mobnum)
    VALUES('$fullname','$dob','$bplace','$gender','$btype','$defect','$district','$zone','$grandname','$fathername','$fperaddress','$fage','$fcountry','$fnum','$fdistrict',
    '$fedu','$freligion','$flanguage','$mothername','$mperaddress','$mage','$mcountry','$mcitnum','$mreg','$meducation','$mreligion','$mlanguage','$dateofreg','$mblnum')";


    echo $query;
    $result=mysqli_query($conn,$query);
    if($result){
        echo"Data Inserted successfully";
    }
    else{
        echo"Error:".$query.":-".mysqli_error($conn);
    }
    mysqli_close($conn);
}
    
    ?>
    
</body>
</html>