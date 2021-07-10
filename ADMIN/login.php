
<?php
session_start();
include "database.php";

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' and password = '$pass'";

$query = mysqli_query($con,$sql);

$result = mysqli_num_rows($query);

if ($result > 0) {
    header("location:admin.php");
}else {
    
    // check email and password
    $_SESSION['message1'] = "Invalid email or password";
    $_SESSION['status_code1'] = "error";
    header("location:index.php");
}

?>