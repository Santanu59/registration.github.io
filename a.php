<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
<form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label>First Name:</label>
                <input type="text" class="input" name="fname" required>
            </div>

            <div class="input_field">
                <label>Last Name:</label>
                <input type="text" class="input" name="lname" required>
            </div>

            <div class="input_field">
                <label>Password:</label>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="input_field">
                <label> Confirm Password:</label>
                <input type="password" class="input" name="conpassword" required>
            </div>

            <div class="input_field">
                <label>Gender:</label>
                <select class="selectbox" name="gender" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
          
            <div class="input_field">
                <label> Email:</label>
                <input type="email" class="input" name="email" required>
            </div>

            <div class="input_field">
                <label> Phone:</label>
                <input type="number" class="input" name="phone" required>
            </div>
             
            <div class="input_field" >
                <label style="margin-right:100px;"> Cast:</label>
                <input type="radio"  name="radio" value="General" required><label style="margin-left:5px;">General</label>
                 <input type="radio"  name="radio" value="OBC" required><label style="margin-left:5px;">OBC</label>
                  <input type="radio"  name="radio" value = "ST" required><label style="margin-left:5px;">ST</label>
                   <input type="radio"  name="radio" value="SC" required><label style="margin-left:5px;">SC</label>
            </div>

            <div class="input_field">
                <label> Address:</label>
                <textarea class="textarea" name="address" required></textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>

            <div class="input_field">
                
                <input type="submit" value="Register" class="btn" name="register">
            </div>
            
        </div>
</form>
    </div>
</body>
</html>

<?php
if(isset($_POST['register']))
{
  $fname   = $_POST['fname'];
  $lname   = $_POST['lname'];
  $pwd     = $_POST['password'];
  $cpwd    = $_POST['conpassword'];
  $gender     = $_POST['gender'];
  $email   = $_POST['email'];
  $phone   = $_POST['phone']; 
  $address = $_POST['address'];
  $radio = $_POST['radio'];

  header('location:login.php');

  $query = "INSERT INTO registration_form(`First_Name`,`Last_name`,`Password`,`Confirm_Password`,`Gender`,`Email`,`Phone`,`Cast`,`Address`) values('$fname' , '$lname' , '$pwd' , '$cpwd' , '$gender' 
                           , '$email' , '$phone' , '$radio','$address')";
  
  $data = mysqli_query($conn,$query);
  
  if($data)
  {
    echo "<script>alert('Data Inserted into Database')</script>";
  }
  else
  {
    echo "<script>alert('Failed')</script>";
  }

}

?>