<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
   
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../assets/css/store.css">
  </head>
  <body>

        <div class = "navbar">
            <div>
                <h1><a href="index.html">DoorStep</a></h1>
            </div>
    
            <nav>
                <ul>
                    <li><a href="meds.php">Medicine</a></li>
                    <li><a href="doc.php">Doctor</a></li>
                    <li><a href="store.php">Shop</a></li>
                    <li><a href="regMED.html">Add Drug</a></li>
                    <li><a href="login.html">Account</a></li>
                </ul>
            </nav>
        </div>

        <select name="shop_name" id="shop" onchange="getSelectedValue();">
            <option disabled selected>-Select Store-</option>
            <?php
                include('./connection.php');

                $qry = "SELECT name from shop";
                $test = mysqli_query($conn, $qry);

                while($data = mysqli_fetch_array($test)){
                    echo "<option value='". $data[0] ."'>" .$data[0] ."</option>";
                }
                
            ?>
        </select>
        <!-- <input type="button" value="submit" onclick="post();"> -->

        <div id="show"></div>

        <script>
            function getSelectedValue(){
                var getValue = {};
                getValue.name = document.getElementById("shop").value;
                // console.log(getValue.name);

                $.ajax({
                    url: "../assets/php/show.php",
                    method: "post",
                    data: { getValue : JSON.stringify( getValue ) },
                    success: function(res){
                        console.log(res);
                        document.getElementById("show").innerHTML = res;
                    }

                })
            }
        </script>


  </body>
</html>