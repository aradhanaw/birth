
 <?php 
        include("dbconnect.php");
        include("aboard.php");
        $query="SELECT * FROM form ";
        $result=mysqli_query($conn,$query);
         ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>View</title>
    <style type="text/css">
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        .table-container{
            padding:0 8%;
            margin:40px auto 0;
        }

        .heading{
            font-size:40px;
            text-align:center;
            color:black;
            margin-bottom:40px;

        }
        .table{
            width:100%;
            border-collapse:collapse;
        }

        .table thead{
            background-color:grey;
        }

        .table thead tr th{
            font-size:14px;
            font-weight:600;
            letter-spacing:0.35px;
            color: #ffffff;
            opacity:1;
            padding:12px;
            vertical-align:top;
            border:1px solid black;
        }

        .table tbody tr td{
            font-size:14px;
            letter-spacing:0.35px;
            font-weight:normal;
            color:black;
            background-color:white;
            padding:8px;
            text-align:center;
            border:1px solid black;
        }

        .table tbody tr td .btn{
            width:130px;
            text-decoration:none;
            line-height:35px;
            display:block;
            background-color:silver;
            font-weight:medium;
            color:#FFFFFF;
            text-align:center;
            vertical-align:middle;
            border:1px solid transparent;
            font-size:14px;
            opacity:1;
        }


    </style>
</head>
<body>
  
    <div class="table-container">
    <h1 class="heading">Registration Details </h4>

       

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sn</th>
                                    <th>Id</th>
                                    <th>Full Name</th>
                                    <th>Date Of Birth</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    <th>Grandfather Name</th>
                                     <th>Municipality</th>
                                      <th>District</th>
                                     <th>Gender</th>
                                  <th>Permanent Address</th>
                                  <th>Date of registration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i=1;
                                    while($row=mysqli_fetch_array($result))
                                    {
                                        echo"<tr>";
                                           echo"<td>".$i."</td>";
                                           echo"<td>".$row["id"]."</td>";
                                           echo"<td>".$row["fullname"]."</td>";
                                           echo"<td>".$row["date_of_birth"]."</td>";
                                           echo"<td>".$row["fathername"]."</td>";
                                           echo"<td>".$row["mothername"]."</td>";
                                           echo"<td>".$row["grandfathername"]."</td>";
                                           echo"<td>".$row["municipality"]."</td>";
                                           echo"<td>".$row["district"]."</td>";
                                           echo"<td>".$row["gender"]."</td>";
                                           echo"<td>".$row["permanent_address"]."</td>";
                                           echo"<td>".$row["date_of_registration"]."</td>";
                                           ?>

                                           <td>

                                           <a href="edit.php?id=<?php echo $row["id"];?>" class="btn"><b style=justify>Edit</b></a><br>
        
                                          <a href="viewbill.php?id=<?php echo $row["id"];?>" class="btn"><b style="justify">Click Approve</a><br>
                                         <a href="view_paymentbill.php?id=<?php echo $row["id"];?>" class="btn">View Payement</a>
                                           
                                       </td>
                                   
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                          
                                    
                                               
                                            <?php
                                            echo"</tr>";
                                            $i=$i+1;
                                        }
                                    
                                   
                                ?>
                                
                            </tbody>
                        </table>

                  
    </div>

    

</body>
</html>