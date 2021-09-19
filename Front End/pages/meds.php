<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/Medicine.css">
    <title>Medicine Details</title>
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
            </nav>
        </div>

        <!-- Searching for Medicine -->
        <form action="search-med">
            <h1>Search By: </h1>
            <input type="text" name="med" placeholder="Brand Name">
            <h1>Or</h1>
            <input type="text"   name="med" placeholder="Generic Name">

            <input type="submit" name="req" value = "Search">
        </form>

        

        <!-- Displaying Medicine -->
        <div class = "row">
            <?php
                include('../assets/php/connection.php');

                $qry = "SELECT * from drug_info";
                $test = mysqli_query($conn, $qry);

                while($data = mysqli_fetch_array($test)){
                    $med_name = $data[1];
                    $med_generic = $data[2];
                    $med_str = $data[4];
                    $med_price = $data[14];
            ?>
            <div class = "col">
            <a href="./<?php echo $med_name ?>.html"><h2> <?php echo  $med_name ?> </h2></a>
                <ul>
                    <li><?php echo  $med_generic ?></li>
                    <li><?php echo  $med_str ?></li>
                    <li><?php echo "Unit Price: ৳" . $med_price?></li>
                </ul>
            </div>
            <?php  
              }
            ?>  

            <div class="col">
                <a href="./antacid.html"><h2>Antacid Max</h2></a>
                <ul>
                    <li>Aluminium Hydroxide + Magnesium Hydroxide + Simethicone</li>
                    <li>400 mg+400 mg+30 mg</li>
                    <li>Beximco Pharmaceuticals Ltd.</li>
                    <li>Unit Price: ৳ 2.00</li>
                </ul>
            </div>

            <div class="col">
                <h2>Bicozin</h2>
                <ul>
                    <li>Vitamin B Complex + Zinc</li>
                    <li>5 mg + 10 mg</li>
                    <li>Square Pharmaceuticals Ltd.</li>
                    <li>Unit Price: ৳ 3.00</li>
                </ul>
            </div>

            <div class="col">
                <h2>CalCor-D</h2>
                <ul>
                    <li>Calcium Carbonate [Coral source] + Vitamin D3</li>
                    <li>500 mg+200 IU</li>
                    <li>Pacific Pharmaceuticals Ltd.</li>
                    <li>Unit Price: ৳ 10.01</li>
                </ul>
            </div>
            
            <div class="col">
                <h2>Paloxi DT</h2>
                <ul>
                    <li>Palonosetron</li>
                    <li>0.5 mg</li>
                    <li>Beacon Pharmaceuticals Ltd.</li>
                    <li>Unit Price: ৳ 22.00</li>
                </ul>
            </div>
            
            <div class="col">
                <h2>Alcet</h2>
                <ul>
                    <li>Levocetirizine Dihydrochloride</li>
                    <li>5 mg</li>
                    <li>Healthcare Pharmaceuticals Ltd.</li>
                    <li>Unit Price: ৳ 4.50</li>
                </ul>
            </div>
            
            <div class="col">
                <h2>Doxicap</h2>
                <ul>
                    <li>Doxycycline Hydrochloride</li>
                    <li>100 mg</li>
                    <li>Renata Limited</li>
                    <li>Unit Price: ৳ 2.20</li>
                </ul>
            </div>
            
            <div class="col">
                <h2>Fenofex</h2>
                <ul>
                    <li>Fexofenadine Hydrochloride</li>
                    <li>120 mg</li>
                    <li>Incepta Pharmaceuticals Ltd.</li>
                    <li>Unit Price: ৳ 8.00</li>
                </ul>
            </div>
            
        </div>
    </div>
</body>
</html>