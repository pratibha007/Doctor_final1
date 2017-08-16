<?php
session_start();
include_once 'library/dbConnection.php';
$query = "select * from info where duty_hour='morning' ";
$res = mysqli_query($conn, $query);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <style>
            div.gallery {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
            }

            div.gallery:hover {
                border: 1px solid #777;
            }

            div.gallery img {
                width: 100%;
                height: auto;
            }

            div.desc {
                padding: 15px;
                text-align: center;
            }

        </style>
    

</head>
    <body>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/adminStyle.css" rel="stylesheet" type="text/css"/>
        <?php require_once 'include/nav.php'; ?>
        
 
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1> Our Doctors!!!</h1>
                       
                    <hr>
                        <table class="table table-striped">

                    <tr>
                        <th> id</th>
                        <th>doctor_name</th>
                        <th>specialist_in</th>
                        <th>duty_hour</th>
                        <th>date</th>
                    </tr>
                    <?php
                    $count = 1;
                    while ($data = mysqli_fetch_assoc($res)) {
                        ?>   
                        <tr>
                        <td><?= $count; ?></td>
                        <td><?= $data['doctor_name'] ?></td>
                        <td><?= $data['specialist_in'] ?></td>
                        <td><?= $data['duty_hour'] ?></td>
                        <td><?= $data['date'] ?></td>
                         </tr>
                        <?php
                        $count++;
                    }
                    ?>
                        </table>
                    



<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1> Morning Shift Doctors</h1><br><br>
                    <div class="gallery">
                            <a target="_blank" href="DSC_0023.JPG">
                                <img src="../images/doc1.jpg" alt="" width="300" height="200"/>
                            </a>
                        <div class="desc">Dr.Ram<br>MBBS(TUTH) MD(KMC)</div>
                        <a href="sendmsg.php"><button class="btn btn-danger">Contact</button></a>
                             
                    </div>

                        <div class="gallery">
                            <a target="_blank" href="forest.jpg">
                                <img src="../images/kt1.jpg" alt="" width="300" height="200"/>
                            </a>
                            <div class="desc">Dr.Syra<br>MBBS(TUTH) MD(KMC)</div>
                            <a href="sendmsg.php"><button class="btn btn-danger">Contact</button></a>
                        </div>
                     <div class="gallery">
                            <a target="_blank" href="forest.jpg">
                                <img src="../images/kt2.jpg" alt="" width="300" height="200"/>
                            </a>
                            <div class="desc">Dr.Laxmi<br>MBBS(TUTH) MD(KMC)</div>
                            <a href="sendmsg.php"><button class="btn btn-danger">Contact</button></a>
                        </div>
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