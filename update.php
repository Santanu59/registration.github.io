<?php include ("db.php");
$id = $_GET['id'];

$query = "SELECT * FROM registration_form where id = '$id'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<?php include("db.php"); ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
<form action="#" method="POST">
        <div class="title">
           UPDATE STUDENT DETAILS
        </div>
        <div class="form">
            <div class="input_field">
                <label>First Name:</label>
                <input type="text" class="input" name="fname" value="<?php echo $result['First_Name'];?>" required>
            </div>

            <div class="input_field">
                <label>Last Name:</label>
                <input type="text" class="input" name="lname" value="<?php echo $result['Last_name'];?>"  required>
            </div>

            <div class="input_field">
                <label>Password:</label>
                <input type="password" class="input" name="password" value="<?php echo $result['Password'];?>" required>
            </div>

            <div class="input_field">
                <label> Confirm Password:</label>
                <input type="password" class="input" name="conpassword" value="<?php echo $result['Confirm_Password'];?>" required>
            </div>

            <div class="input_field">
                <label>Gender:</label>

                <select class="selectbox" name="gender" value="<?php echo $result['Gender'];?>" required>
                    <option value="">Select</option>

                    <option value="Male"
                    <?php
                    if ($result['Gender'] == 'Male'){
                        echo "selected";
                    }
                    ?>
                    >Male</option>
                    <option value="Female"
                    <?php
                    if ($result['Gender'] == 'Female'){
                        echo "selected";
                    }
                    ?>
                    >Female</option>
                </select>

            </div>
          
            <div class="input_field">
                <label> Email:</label>
                <input type="email" class="input" name="email" value="<?php echo $result['Email'];?>" required>
            </div>

            <div class="input_field">
                <label> Phone:</label>
                <input type="number" class="input" name="phone" value="<?php echo $result['Phone'];?>"required>
            </div>
            <div class="input_field" >
                <label style="margin-right:100px;"> Cast:</label>
                <input type="radio"  name="radio" value=" General" required><label style="margin-left:5px;">General</label>
                <?php
                if($result['Cast'] == "General"){
                   echo "checked";
                 }
                ?>
                 <input type="radio"  name="radio" value=" OBC" required><label style="margin-left:5px;">OBC</label>
                 <?php
                if($result['Cast'] == "OBC"){
                   echo "checked";
                 }
                ?>
                  <input type="radio"  name="radio" value = "ST"required><label style="margin-left:5px;">ST</label>
                  <?php
                if($result['Cast'] == "ST"){
                   echo "checked";
                 }
                ?>
                   <input type="radio"  name="radio" value=" SC" required><label style="margin-left:5px;">SC</label>
                   <?php
                if($result['Cast'] == "SC"){
                   echo "checked";
                 }
                ?>
            </div>

            <div class="input_field">
                <label> Address:</label>
                <textarea class="textarea" name="address"  required><?php echo $result['Address'];?>
                </textarea>
            </div>

            <!-- <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div> -->

            <div class="input_field">
                
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>
            
        </div>
</form>
    </div>
</body>
</html>

<?php
if(isset($_POST['update']))
{
  $fname   = $_POST['fname'];
  $lname   = $_POST['lname'];
  $pwd     = $_POST['password'];
  $cpwd    = $_POST['conpassword'];
  $gender     = $_POST['gender'];
  $email   = $_POST['email'];
  $phone   = $_POST['phone']; 
  $radio  = $_POST['radio']; 
  $address = $_POST['address'];

  $query = "UPDATE  registration_form SET First_Name='$fname',Last_name='$lname',Password='$pwd',
  Confirm_Password='$cpwd',Gender='$gender',Email='$email',Phone='$phone', Cast='$radio' ,Address='$address' where id='$id'";
  
  $data = mysqli_query($conn,$query);
  if($data)
  {
    echo "<script>alert('Record Updated')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/registration_form/display.php"/>
    <?php
  }
  else
  {
    echo "<script>alert('Failed To Update')</script>";
  }

}

?>
    