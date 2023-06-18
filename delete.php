<?php
include("db.php");

$id = $_GET['id'];

$quary = "DELETE FROM registration_form where id = '$id' ";
$data = mysqli_query($conn,$quary);

if ($data){
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/registration_form/display.php"/>
    <?php
}
else{
    echo "<script>alert('Faild')</script>";
}
?>