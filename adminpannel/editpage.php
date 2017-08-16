
<?php
include_once 'library/dbConnection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from info where id=$id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
}
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
                    <form action="action/act_editpage.php" method="post">
                        <input type="hidden" class="form-control" value="<?= $data['id'] ?>" name="txtid" />
                        <div class="form-group">
                            <label>Doctor's Name</label>
                            <input type="text" class="form-control" value="<?= $data['doctor_name'] ?>" name="docname" />
                        </div>  
                        <div class="form-group">
                            <label>Specialist</label>
                            <input type="text" class="form-control" value="<?= $data['specialist_in'] ?>" name="specialist" />
                        </div>  
                        <div class="form-group">
                            <label>Duty Hour</label>
                            <select class="form-control" name="duty_hour">
                                <?php if ($data['duty_hour'] == 'morning') { ?>
                                    <option selected="" value="morning">Morning</option>
                                    <option value="day">Day</option>
                                    <option value="evening">Evening</option>
                                    <option value="night">Night</option>
                                <?php } elseif ($data['duty_hour'] == 'day') { ?>
                                    <option value="morning">Morning</option>
                                    <option selected="" value="day">Day</option>
                                    <option value="evening">Evening</option>
                                    <option value="night">Night</option>
                                <?php } elseif ($data['duty_hour'] == 'evening') { ?>
                                    <option value="morning">Morning</option>
                                    <option value="day">Day</option>
                                    <option selected="" value="evening">Evening</option>
                                    <option value="night">Night</option>                                    
                                <?php } else { ?>
                                    <option value="morning">Morning</option>
                                    <option value="day">Day</option>
                                    <option value="evening">Evening</option>
                                    <option selected="" value="night">Night</option>                                    
                                <?php } ?>
                            </select>

                        </div> 
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="btnEdit" value="Edit Doctor" />
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
        </div>

        <script src="../../js/jquery-3.2.0.min.js" type="text/javascript"></script>
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>
