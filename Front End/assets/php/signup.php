<?php
include('./connection.php');

$user_fname     = $_POST['fname'];
$user_lname     = $_POST['lname'];
$user_email     = $_POST['email'];
$user_pass      = $_POST['pwd'];
$user_cnfpwd    = $_POST['pdw'];
$user_phone     = $_POST['phone'];
$user_suburb   = $_POST['suburb'];
$user_area      = $_POST['ara'];
$user_city      = $_POST['city'];


if (isset($_POST['submitbtn']))
{
    if($user_lname  == ' ')
    {
        echo "<script>alert('Please Enter Last Name')</script>";
        echo "<script>window.open('../../pages/signup.html','_self')</script>";
        exit();
    }

    if($user_email  == ' ')
    {
        echo "<script>alert('Please Enter Email')</script>";
        echo "<script>window.open('../../pages/signup.html','_self')</script>";
        exit();
    }
    if($user_pass  == ' ')
    {
        echo "<script>alert('Please Enter Password')</script>";
        echo "<script>window.open('../../pages/signup.html','_self')</script>";
        exit();
    }

    if($user_cnfpwd  == ' ')
    {
        echo "<script>alert('Please Confirm Password')</script>";
        echo "<script>window.open('../../pages/signup.html','_self')</script>";
        exit();
    }

    if($user_phone  == ' ')
    {
        echo "<script>alert('Please Enter Phone Number')</script>";
        echo "<script>window.open('../../pages/signup.html','_self')</script>";
        exit();
    }
    if($user_suburb  == ' ')
    {
        echo "<script>alert('Please Enter Suburb')</script>";
        echo "<script>window.open('../../pages/signup.html','_self')</script>";
        exit();
    }
    if($user_area  == ' ')
    {
        echo "<script>alert('Please Enter Area')</script>";
        echo "<script>window.open('../../pages/signup.html','_self')</script>";
        exit();
    }
    if($user_city  == ' ')
    {
        echo "<script>alert('Please Enter City')</script>";
        echo "<script>window.open('../../pages/signup.html','_self')</script>";
        exit();
    }

    //Checks if the email already exists or not
    $check_email = "select * from users where email = '$user_email'";
    $run_query = mysqli_query($conn, $check_email);

    if(mysqli_num_rows($run_query) > 0){
        echo "<script>alert('$user_email already  exist, Please log in')</script>";
        echo "<script>window.open('../../pages/login.html','_self')</script>";
        exit();
    }

    //Checks for address in database
    $check_address = "select * from address where suburb = '$user_suburb' and city = '$user_city' and area = '$user_area'";
    $run_que = mysqli_query($conn, $check_address);

    if(mysqli_num_rows($run_que) == 0){
        $insert_address = "insert into address(suburb, city, area)
        value ('$user_suburb', '$user_city', '$user_area')";
        mysqli_query($conn, $insert_address);
    }

    //Finds the location_id and add it to the user table
    $insert_addr_id = "select id from address where suburb = '$user_suburb' and city = '$user_city' and area = '$user_area'";
    $run = mysqli_query($conn,$insert_addr_id);
    $row = mysqli_fetch_array($run, MYSQLI_NUM);
    $insert_user = "insert into users(fname,lname,phone,email,pass, address_id)
        value ('$user_fname', '$user_lname',  '$user_phone', '$user_email', '$user_pass', '$row[0]')";
    if(mysqli_query($conn, $insert_user)){
            echo "<script>window.open('../../pages/profile.php','_self')</script>";
            exit();
    }

}else{
    echo "<script>window.open('../../pages/signup.html','_self')</script>";
}

$insert_user = "insert into users("
?>