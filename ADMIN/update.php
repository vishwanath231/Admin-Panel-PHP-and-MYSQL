<?php
session_start();
include "database.php";

$image = $_FILES['profileImage']['name'];
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];



$u = mysqli_query($con, "select * from users where username= '$username'");
$result1 = mysqli_num_rows($u);

// $e = mysqli_query($con, "select * from users where email= '$email'");
// $result2 = mysqli_num_rows($e);

$i = mysqli_query($con, "select * from users where id= '$id'");
$result3 = mysqli_num_rows($i);

$target = 'profile/'.$image;

move_uploaded_file($_FILES['profileImage']['tmp_name'],$target);
   






    if ($image == '') {
        // Upload profile
        $_SESSION['message'] = "Upload profile";
        $_SESSION['status_code'] = "info";
        header("location:setting.php");

    } else {
        if ($result1 > 0) {
            //Username is already taken
            $_SESSION['message'] = "Username is already taken";
            $_SESSION['status_code'] = "error";
            header("location:setting.php");
        } else {
            // if ($result2 > 0) {
            //     // Email is already taken
            //     $_SESSION['message1'] = "Email is already taken";
            //     header("location:setting.php");
            // } else {
                if (strlen($pass) < 5 || strlen($pass) > 12) {
                    // Password should be min 5 char and max 12 char
                    $_SESSION['message'] = "Password should be min 5 char and max 12 char";
                    $_SESSION['status_code'] = "info";
                    header("location:setting.php");
                } else {
                    if (!preg_match("/\d/",$pass)) {
                        // Password should contain at least one digit
                        $_SESSION['message'] = "Password should contain at least one digit";
                        $_SESSION['status_code'] = "info";
                        header("location:setting.php");
                    } else {
                        if (!preg_match("/\W/", $pass)) {
                            // password should contain at least one special character
                            $_SESSION['message'] = "Password should contain at least one special character";
                            $_SESSION['status_code'] = "info";
                            header("location:setting.php");
                        } else {
                            if ($pass != $cpass) {
                                // Password doesn't match
                                $_SESSION['message'] = "Password doesn't match";
                                $_SESSION['status_code'] = "error";
                                header("location:setting.php");
                            } else {
                                $query = "UPDATE  users SET profile ='$image',username = '$username', email = '$email', password = '$pass', cpassword ='$cpass' WHERE id ='$id'";

                                $result = mysqli_query($con, $query)
                                    or die('Error in querying database');
                                if ($result) {
                                    // success msg
                                    $_SESSION['message'] = "Update Successful";
                                    $_SESSION['status_code'] = "success";
                                    header("location:setting.php");
                                }
                            }
                        }
                    }
                    
                }
            // }
        }
    }
