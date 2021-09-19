<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/cart.css">
    <title>Add to Cart</title>
</head>
<body>

    <div class = "container">
        <div class = "navbar">
            <div>
                <h1><a href="../index.html">DoorStep</a></h1>
            </div>
    
            <nav>
                <ul>
                    <li><a href="meds.php">Medicine</a></li>
                    <li><a href="doc.php">Doctor</a></li>
                    <li><a href="store.php">Shop</a></li>
                    <li><a href="regMED.html">Add Drug</a></li>
                    <li><a href="login.html">Account</a></li>
                </ul>
                <a href="cart.html"><img src="/assets/img/addToCart.png" height="20px" width="20px" alt=""></a>
            </nav>
        </div>
        <div class = "cart-table">
        <table>
                    <tr>
                        <th>Medicine</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>SubTotal</th>
                    </tr>
            <?php 
                include('../assets/php/connection.php');
                session_start();
                if(! isset($_SESSION['email']))
                {
                    header("Location: ./login.html");
                }
                $user_email = $_SESSION['email'];
                $get_info = "select id from users where email = '$user_email'";
                $run = mysqli_query($conn, $get_info);
                $row = mysqli_fetch_array($run);

                $user_id = $row[0];

                $get_meds_id = "select medicine_id from cart where user_id = ' $user_id'";
                $run_query = mysqli_query($conn, $get_meds_id);
                while ($r = mysqli_fetch_array($run_query)){
                    $med_id = $r[0];

                    $get_meds = "select brand, generic, strength,price from drug_info where id = '$med_id'";
                    $med_run = mysqli_query($conn,  $get_meds);
                    $mdr = mysqli_fetch_array($med_run);  
                    $brand_name = $mdr[0];
                    $generic_name = $mdr[1];
                    $strengthMed = $mdr[2];
                    $price = $mdr[3];
                ?>
                <tr>
                    <td>
                        <div class = "med-info">
                            <p> 
                                <b><?php echo  $brand_name ?></b><small><?php echo  $strengthMed ?></small><br>
                                                <a href="">Remove</a>
                            </p>
                         </div>
                    </td>
                        <td><?php echo  $price ?></td>
                        <td><input type="number" id = "quantity" value = "1" onchange= "var r = get_price();"></td>
                        <td>৳ r</td>
                    </tr>
                    <?php    
                }

                ?>
                </table>

                <script>
                    function get_price()
                    {
                        var getValue = {};
                        getValue.id = document.getElementById("quantity").value;
                         var alvi = "<?php echo $price ?>";
                         var result = getValue.id * alvi;
                         return result;               
                    }
                </script>
            <div class = "total-cost">
                <table>
                    <tr>
                        <td>SubTotal</td>
                        <td>৳ 394.00</td>
                    </tr>
    
                    <tr>
                        <td>Tax</td>
                        <td>৳ 17.5</td>
                    </tr>
    
                    <tr>
                        <td>Total</td>
                        <td>৳ 411.50</td>
                    </tr>
    
                </table>
            </div>
        </div>
    </div>
</body>
</html>