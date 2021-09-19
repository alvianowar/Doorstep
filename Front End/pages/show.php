<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>  
            <?php
                include('../assets/php/connection.php');
                $result = json_decode($_POST['getValue'], true);

                // print_r("Shop Name: ".$result['name']);

                // $qry = "SELECT * from shop";
                // $test = mysqli_query($conn, $qry);

                // while($data = mysqli_fetch_array($test)){
                //     if($data[1] == $result['name']){
                //         echo "<br> Print Phone_Number: ".$data[2];
                //     }  
                // }

                $qry = "SELECT * from shop join medicine join drug_info";
                $test = mysqli_query($conn, $qry);

                while($data = mysqli_fetch_array($test)){
                    if($data[1] == $result['name'] && $data[0] == $data[8] && $data[7] == $data[11]){
                        ?>

                        <div class="row">
                            <h3><?php  echo $data[12] ?></h3>
                            <ul>
                                <li><?php  echo $data[13] ?></li>
                                <li><?php  echo $data[14] ?></li>
                                <li><?php  echo $data[15] ?></li>
                                <li><?php  echo $data[16] ?></li>
                                <li><large>৳</large><?php  echo $data[26] ?></li>
                            </ul>
                        </div>
                        <?php
                    }  
                }
            ?>
    </body>
</html>