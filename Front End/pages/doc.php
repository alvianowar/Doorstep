<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/doctor.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Doctors</title>
</head>
<body>
    <header>
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

    </header>
    <main>
        <div class="search">
            <li>search</li>
        </div>
        
        <div class="info">
            <div class="usr_img">
                <img src="../assets/img/F.jpg" width = "70px" alt = "User Image">
            </div>
            <?php
                    include('../assets/php/connection.php');

                    $qry = "SELECT * from doc";
                    $test = mysqli_query($conn, $qry);

                    while($data = mysqli_fetch_array($test)){
                        $doc_i          = $data[0];
                        $doc_name       = $data[1];
                        $doc_degree     = $data[3];
                        $doc_specialty  = $data[2];
                        $doc_chamber    = $data[4];
                        $doc_hospital   = $data[5];
            ?>
            <div class="col-1">
                <ul>
                    <li><?php echo $doc_name ?></li>
                    <li><?php echo $doc_degree ?></li>
                    <li><?php echo $doc_specialty ?></li>
                    <li><?php echo $doc_hospital ?></li>
                </ul>
            </div>
            <?php 
            }
            ?>
            <div class="col-1">
                <Ul>
                    <li>Appointment</li>
                </ul>
                <?php
            
                $qry = "SELECT * from make_appointment where doc_id = '$doc_i'";
                $test = mysqli_query($conn, $qry);

                while($data = mysqli_fetch_array($test)){
                    $doc_numb  = $data[2];
                ?>
                <ul>
                    <li><?php echo $doc_numb?> </li>
                </Ul>
            </div>
            <?php
            }
            ?>
        </div>

        <div class="info">
            <div class="usr_img">
                <img src="../assets/img/F.jpg" width = "70px" alt = "User Image">
            </div>
            <div class="col-1">
                <ul>
                    <li>Doctor's Name</li>
                    <li>Doctor's Degree</li>
                    <li>Speciality</li>
                    <li>Chamber</li>
                    <li>Hospital</li>
                </ul>
            </div>
            <div class="col-1">
                <Ul>
                    <li>Appointment</li>
                    <li>Phone Number</li>
                    <li>Phone Number</li>
                </Ul>
            </div>
        </div>

        <div class="info">
            <div class="usr_img">
                <img src="../assets/img/F.jpg" width = "70px" alt = "User Image">
            </div>
            <div class="col-1">
                <ul>
                    <li>Doctor's Name</li>
                    <li>Doctor's Degree</li>
                    <li>Speciality</li>
                    <li>Chamber</li>
                    <li>Hospital</li>
                </ul>
            </div>
            <div class="col-1">
                <Ul>
                    <li>Appointment</li>
                    <li>Phone Number</li>
                    <li>Phone Number</li>
                </Ul>
            </div>
        </div>
        
        <div class="info">
            <div class="usr_img">
                <img src="../assets/img/F.jpg" width = "70px" alt = "User Image">
            </div>
            <div class="col-1">
                <ul>
                    <li>Doctor's Name</li>
                    <li>Doctor's Degree</li>
                    <li>Speciality</li>
                    <li>Chamber</li>
                    <li>Hospital</li>
                </ul>
            </div>
            <div class="col-1">
                <Ul>
                    <li>Appointment</li>
                    <li>Phone Number</li>
                    <li>Phone Number</li>
                </Ul>
            </div>
        </div>

        <div class="info">
            <div class="usr_img">
                <img src="../assets/img/F.jpg" width = "70px" alt = "User Image">
            </div>
            <div class="col-1">
                <ul>
                    <li>Doctor's Name</li>
                    <li>Doctor's Degree</li>
                    <li>Speciality</li>
                    <li>Chamber</li>
                    <li>Hospital</li>
                </ul>
            </div>
            <div class="col-1">
                <Ul>
                    <li>Appointment</li>
                    <li>Phone Number</li>
                    <li>Phone Number</li>
                </Ul>
            </div>
        </div>

        <div class="info">
            <div class="usr_img">
                <img src="../assets/img/F.jpg" width = "70px" alt = "User Image">
            </div>
            <div class="col-1">
                <ul>
                    <li>Doctor's Name</li>
                    <li>Doctor's Degree</li>
                    <li>Speciality</li>
                    <li>Chamber</li>
                    <li>Hospital</li>
                </ul>
            </div>
            <div class="col-1">
                <Ul>
                    <li>Appointment</li>
                    <li>Phone Number</li>
                    <li>Phone Number</li>
                </Ul>
            </div>
        </div>
    </main>
</body>
</html>