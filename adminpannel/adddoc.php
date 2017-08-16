
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
                    <form action="action/act_adddoctors.php" method="post">
                       
                        <div class="form-group">
                            <label>Doctor's Name</label>
                            <input type="text" class="form-control" name="docname" />
                        </div>  
                        <div class="form-group">
                            <label>Specialist</label>
                            <input type="text" class="form-control" name="specialist" />
                        </div>  
                        <div class="form-group">
                            <label>Duty Hour</label>
                            <select class="form-control">
                                <option selected="" value="">Choose Doctor</option>
                                      <option value="morning">Morning</option>
                                    <option value="day">Day</option>
                                    <option value="evening">Evening</option>
                                    <option value="night">Night</option>    
                            </select>
                            
                        </div> 
                        <div class="form-group">
                            <label>Upload Picture</label>
                            <input type="file" class="form-control" name="Picture" />
                        </div>  
                    <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="addmoredoc" value="Add Doctors" />
                        </div>  
                    </form>    
                            
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
            <script src="../../js/jquery-3.2.0.min.js" type="text/javascript"></script>
            <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
       
        </body>
        </html>
      