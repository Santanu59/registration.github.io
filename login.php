<?php include("db.php");
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>
    <form action="" method="post">
        <div class="form">
            <input type="text" name="username" class="textfield" placeholder="Username">
            <input type="password" name="password" class="textfield" placeholder="Password">

            <div class="forget"><a href="#" class="link">Forget Password ?</a></div>

            <input type="submit" name="login" value="Login" class="btn">

            <div class="signup">New Member ? <a href="a.php" class="sign">Signup Here</a></div>
        </div>
    </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM registration_form where Email = '$user' && Confirm_Password = '$pwd' ";
    $data = mysqli_query($conn, $query);
    
    $total = mysqli_num_rows($data);
//    echo $total;
   if ($total == 1)
   {
    // echo "<script>alert('Login Successfully')</script>";
    $_SESSION['username'] = $user;

    header('location:display.php');
   }
   else{
     echo "<script>alert('Login faild')</script>";
   }

}
?>