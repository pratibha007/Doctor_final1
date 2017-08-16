<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <style>
        body {
        background-image: url("ourdocs.jpg");
        background-position: right;
        background-repeat: no-repeat;
        background-size:500px;
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
                    <h2 class="text-center text-uppercase">
                        Welcome to my Clinic!!!!
                    </h2><br>
                    <p>Our clinic is the best platform to diagnose your diseases.
                    The experienced doctors are available in our clinic along with your specified timings.
                    You can even book your appointment online..</p>
                    <h3> Not only medicine even good words and care can heal your disease.</h3>
                    <h4>Come and feel the change....</h4>
                    
                    <h1>Look for doctors!!</h1>
                   
                    <a href="morningdoc.php"><button class=" btn btn-danger">Morning shift Doctors</button></a><br><br>
                    <a href="daydoc.php"><button class="btn btn-danger">Day Shift Doctors</button></a><br><br>
                    <a href="eveningdoc.php"><button class="btn btn-danger">Evening shift Doctors</button></a><br><br>
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
       <?php require_once 'include/footer.php'; ?>
            
            <script src="../js/jquery-3.2.0.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        </body>
</html>