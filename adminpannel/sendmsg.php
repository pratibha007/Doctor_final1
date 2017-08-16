<?php
include_once 'library/dbConnection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/adminStyle.css" rel="stylesheet" type="text/css"/>
        <?php require_once 'include/nav.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add needed details
                    </h2><hr>
                    <form action="action/addbtn.php" method="post">
                       
                        <div class="form-group">
                            <label>patients_name</label>
                            <input type="text" class="form-control" name="patientname" />
                        </div>  
                        <div class="form-group">
                            <label>doctor</label>
                            <input type="text" class="form-control" name="doctorname" />
                        </div>  
                        <div class="form-group">
                            <label>symptoms</label>
                            <textarea class="form-control" name="symp"></textarea>
                            
                        </div> 
                        <div class="form-group">
                            <label>questions</label>
                            <textarea class="form-control" name="question"></textarea>
                            
                        </div> 
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="btnAdd" value="Send Message" />
                        </div>  

                    </form>
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
