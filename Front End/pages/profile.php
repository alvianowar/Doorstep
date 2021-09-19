<?php 
    include('../assets/php/connection.php');
    session_start();
    if(! isset($_SESSION['email']))
    {
        header("Location: ./login.html");
    }
    $user_email = $_SESSION['email'];
    $get_info = "select fname,lname,phone,address_id from users where email = '$user_email'";
    $run = mysqli_query($conn, $get_info);
    $row = mysqli_fetch_array($run);

    $user_fname = $row[0];
    $user_lname = $row[1];
    $user_phone = $row[2];
    $user_add_id = $row[3];

    $get_addr = "select suburb,area,city from address where id = '$user_add_id'";
    $run_query = mysqli_query($conn, $get_addr);
    $row = mysqli_fetch_array($run_query);
    $s = $row[0];
    $a = $row[1];
    $c = $row[2];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/cosumer.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>User Page</title>
</head>
<body style="background-image: url(/assets/img/user.jpg);">
    <header>
        <div class = "navbar">
            <div>
                <h1><a href="../index.html">DoorStep</a></h1>
            </div>
    
            <nav>
                <ul>
                    <li><a href="meds.php">Medicine</a></li>
                    <li><a href="doc.php">Doctor</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="regMED.html">Add Drug</a></li>
                    <li><a href="login.html">Account</a></li>
                    <li><a href="consumer.html">Profile</a></li>
                </ul>
                <a href="cart.php"><img src="/assets/img/addToCart.png" height="20px" width="20px" alt=""></a>
            </nav>
        </div>
    </header>
    <main>
        <div class="main" class ="inputs">
                <button type = "button" class="toggle-btn" onclick="user()">User</button>
                <button type = "button" class="toggle-btn" onclick="purchase()">Purchase History</button>
                <button type = "button" class="toggle-btn" onclick="settings()">Settings</button>
                <form id="user" class="inputs" >
                    <label> <b>First Name</b></label>
                    <input id ="fname" type="text"  value = "<?php echo $user_fname ?> " readonly><br>
        
                    <label><b>Last Name</b></label>
                    <input id = "lname" type="text" value = "<?php echo $user_lname ?> " readonly> <br>
        
                    <label><b>Email</b></label> 
                    <input id ="eml" type="text" value = "<?php echo $user_email ?> " readonly><br>
        
                    <label><b>Phone Number</b></label>
                    <input id ="nmbr" type="text" value = "<?php echo $user_phone ?>" readonly><br>
        
                    <label><b>Address</b></label>
                    <input id ="addr" type="text" value = "<?php echo $s; echo ' '; echo $a ; echo ' ' ; echo $c ?>" readonly>
        
                </form>
                
                <form id="purchase" class ="inputs">
                    <label for ="rowNumb">Nubmer of rows</label>
                    <input type="number" name="rowNumb" value="10">
        
                    <table>
                        <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        </tr>
                        <tr>
                            <td>Napa - 250mg</td>
                            <td>10</td>
                            <td>10 taka</td>
                        </tr>
                        <tr>
                            <td>Napa - 250mg</td>
                            <td>10</td>
                            <td>10 taka</td>
                        </tr>
                        <tr>
                            <td>Napa - 250mg</td>
                            <td>10</td>
                            <td>10 taka</td>
                        </tr>
                    </table>
                </form>
        
                <form id="settings" class ="inputs">
                    <label><b>First Name</b></label>
                    <input id ="fname" type="text" name="fname" value = "" ><br>
        
                    <label><b>Last Name</b></label>
                    <input id = "lname" type="text" name="lname" value = "" > <br>
        
                    <label><b>Email</b></label> 
                    <input id ="eml" type="text" name="email" value = "<?php echo $user_email ?>" readonly><br>
        
                    <label><b>Phone Number</b></label>
                    <input id ="nmbr" type="text" name="phone" value = "" ><br>
        
                    <label><b>Address</b></label>
                    <input id ="addr" type="text" name="addr" value = "" ><br>

                    <label><b>Old Password</b></label>
                    <input class="dp" type="password" name="pwd" value = "" > <br>

                    <label><b>New Password</b></label>
                    <input class="pd" type="password" name="pwd" value = "" > <br>

                    <label><b>Confirm Password</b></label>
                    <input class ="pdw" type="password" name="pwd" value = "" > <br>

                    <center><input class="bttn" type="button" name="svbtn" value="Save Chnages"></center>

                </form>
        </div>
        <script>
            var x = document.getElementById("user");
            var y = document.getElementById("purchase");
            var z = document.getElementById("settings");

            function user(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "900px";
            }

            function purchase(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "900px";
            }
            
            function settings(){
                x.style.left = "-500px";
                y.style.left = "500px";
                z.style.left = "50px";
            }
        </script>
    </main>
</body>
</html>