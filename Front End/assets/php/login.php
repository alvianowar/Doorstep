<?php
include('./connection.php');

$user_email     = $_POST['email'];
$user_pass      = $_POST['pdw'];

if (isset($_POST['submitbtn']))
{
    if($user_email  == ' ')
    {
        echo "<script>alert('Please Enter Email')</script>";
        echo "<script>window.open('../../pages/login.html','_self')</script>";
        exit();
    }
    if($user_pass  == ' ')
    {
        echo "<script>alert('Please Enter Password')</script>";
        echo "<script>window.open('../../pages/login.html','_self')</script>";
        exit();
    }

    $check_user = "select * from users where email = '$user_email' and pass = '$user_pass'";
    $run = mysqli_query($conn, $check_user);

    if(mysqli_num_rows($run) > 0)
    {
        session_start();
        $_SESSION['email'] = $user_email;
        echo "<script>window.open('../../pages/profile.php','_self')</script>";
    }else{
        echo "<script>window.open('../../pages/login.html','_self')</script>";
    }
}else{
    echo "<script>window.open('../../pages/login.html','_self')</script>";
}
?>