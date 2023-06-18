<?php
session_start();
echo "Welcome ".$_SESSION['username'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        body{
            background:#D071F9;
        }
        table{
            background-color:white;
        }
        table th{
            padding-left:5px;
        }
        table td{
            padding-left:5px;
        }
        .update{
            margin-left:5px;
            margin-top:5px;
            margin-right:5px;
            cursor: pointer;
            background-color:green;
            border:0;
            outline:none;
            border-radius:5px;
            width:6rem;
            color:white;
        }
        .update:hover{
            background-color:rgb(145, 225, 145);
            color:black;
            /* font-weight:bold; */
        }
        .delete{
            margin-left:5px;
            margin-top:5px;
            margin-right:5px;
            cursor: pointer;
            background-color:red;
            border:0;
            outline:none;
            border-radius:5px;
            width:6rem;
            color:white;
        }
        .delete:hover{
            background-color:rgb(235, 113, 140);
            color:black;
            /* font-weight:bold; */
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
include ('db.php');

$query = "SELECT * FROM registration_form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

$userprofile = $_SESSION['username'];
if ($userprofile == true)
{
  
}
else
{
    header('location:index.php');
}


 

// echo $total;
   if($total != 0)
    {
        ?>
        <h2 align="center"><mark>Displaying All Records<mark></h2>
        <a href="logout.php"><input type="button" value ="Logout" style="width:100px; height:30px; cursor:pointer; font-weight:bold; background-color:blueviolet; borer:none; color:white; margin-left:65rem;  margin-bottom:1rem; "></a>
         <table border="3" cellspacing="7" width="100%" align ="center">
    <tr>
            <th width="5%">ID</th>
            <th width="8%">First Name</th>
            <th width="8%">Lirst Name</th>
            <th width="10%">Gender</th>
            <th width="20%">Email</th>
            <th width="10%">Phone</th>
            <th width="10%">Caste</th>
            <th width="20%">Address</th>
            <th width="19%">Operations</th>
    </tr>
        
        <?php
        
    while($result = mysqli_fetch_assoc($data)){
        
          echo "<tr>
          <td>".$result['id']."</td>
          <td>".$result['First_Name']."</td>
          <td>".$result['Last_name']."</td>
          <td>".$result['Gender']."</td>
          <td>".$result['Email']."</td>
          <td>".$result['Phone']."</td>
          <td>".$result['Cast']."</td>
          <td>".$result['Address']."</td>
          <td> 
            <a href='update.php?id=$result[id]'><input type='Submit' value='Update' class='update'></a> 
            <a href='delete.php?id=$result[id]'><input type='Submit' value='Delete' class='delete'></a>
          </td>
          </tr>";
        //   <----&fn=$result[First_Name] &ln=$result[Last_Name] 
        //   &gn=$result[Gender] &em=$result[Email] &ph=$result[Phone] &ad=$result[Address]
                  }
    }
   else
    {
     echo "No records found";
    }

?>

</table>
