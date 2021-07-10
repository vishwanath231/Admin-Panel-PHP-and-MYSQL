
<?php
session_start();
include "database.php";


$username = $_POST['username'];  // select
$cardHolder = $_POST['cardHolder'];
$category = $_POST['category'];
$amount = $_POST['amount'];
$cardNumber = $_POST['cardNumber'];
$expDate = $_POST['expDate'];
$expYear = $_POST['expYear'];
$cvv = $_POST['cvv'];

$sql = "SELECT * FROM users WHERE username = '$username'";
$query = mysqli_query($con, $sql);
$result = mysqli_num_rows($query);

if ($result > 0) {

    $insrrt_sql = "INSERT INTO payment(cardHolder,category,amount,cardNumber,expDate,expYear,cvv) VALUES ('$cardHolder','$category','$amount','$cardNumber','$expDate','$expYear','$cvv')";

    $result2 = mysqli_query($con, $insrrt_sql)
    or die('Error in querying database');
    if ($result2) {
        // success msg
        $_SESSION['message'] = "Payment successful";
        $_SESSION['status_code'] = "success";
        header("location:payment.php");
    }
   
} else {
    //Username is already taken
    $_SESSION['message'] = "Invalid Username";
    $_SESSION['status_code'] = "error";
    header("location:payment.php");
}





?>