<?php
session_start();
include_once'library/dbconnection.php';
$query = "select * from info order by id";
$res = mysqli_query($conn, $query);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>


</head>
<body>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/adminStyle.css" rel="stylesheet" type="text/css"/>
    <?php require_once 'include/nav.php'; ?>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>
                <hr>
                <hr>
                <h1> Available Doctors
                    <a href="adddoc.php"><button class="btn btn-default"> Add More Doctors</button></a> 
                </h1>


                <hr>
                <table class="table table-striped">

                    <tr>
                        <th> S. No.</th>
                        <th>Doctor Name</th>
                        <th>Specialist </th>
                        <th>Duty Hour</th>
                        <th>Date</th>
                    </tr>
                    <?php
                    $count = 1;
                    while ($data = mysqli_fetch_assoc($res)) {
                        ?>   
                        <tr>
                            <td><?= $count; ?></td>
                            <td><?= $data['doctor_name'] ?></td>
                            <td><?= $data['specialist_in'] ?></td>
                            <td class="text-capitalize"><?= $data['duty_hour'] ?></td>
                            <td><?= $data['date'] ?></td>
                        </tr>
                        <?php
                        $count++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-3">



            </div>
            <div class="col-md-6">



                <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

                <div class="col-md-4">
                    <h4> Connect us through</h4>
                    <a href="https://www.facebook.com"><i class="fa fa-3x fa-facebook-official"></i>
                    </a>
                    <a href="https://www.google.com">
                        <i class="fa fa-3x fa-google-plus-official">

                        </i>
                    </a>
                    <a href="https://www.twitter.com">
                        <i class="fa fa-3x fa-twitter">

                        </i>
                    </a>

                    </a>



                    <p>Posted by:Hamro Clinic</p>

                    <p>
                        copyrights reserved &COPY Hamro Clinic;
                    </p>
                </div>
            </div>
        </div>

        <script src="../js/jquery-3.2.0.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>




