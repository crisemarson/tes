
<?php 

        $path = "C:/xampp/htdocs/tes/pages";
?>

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/header.php";

?>
  
<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/nav.php";

?>

<?php 
   // include "admin_includes/navigation.php";
    include dirname($path) . "../../tes/include/body.php";
?>

<?php 
    $sql = "SELECT * FROM `teacheraddsubject` where `identitynumber` = '".$_GET['id']."'";
    $res = mysqli_query($connection,$sql);
    $sqli = "SELECT * FROM `section`";
    $result = mysqli_query($connection,$sqli);

    if (isset($_POST['add'])) {

        $d=date("Y-m-d");
        $e=$_SESSION['name'];

        $insersession = "INSERT INTO `session`(`identitynumber`, `name`, `subject`, `sem`, `year`, `status`, `PIN`, `date`, `submittedby`) VALUES ('".$_GET['id']."','".$_GET['name']."','".$_POST['subject']."','".$_POST['sem']."','".$_POST['year']."','".$_GET['stats']."','".$_POST['pin']."','$d','$e')";
        $resultinsersession = mysqli_query($connection,$insersession);

        $insertreport ="INSERT INTO `report`(`identitynumber`, `name`) VALUES ('".$_GET['id']."','".$_GET['name']."')";
        $reportcon = mysqli_query($connection,$insertreport);

        $status = "Record add Successfully. </br>";
        echo '<p style="color:#FF0000;">'.$status.'</p>';

    }
?>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Input -->

        <a href="http://localhost/tes/pages/dean/Session.php">
            <button type="button" class="btn btn-success waves-effect">
                <i class="material-icons">keyboard_backspace</i>
                <span>Back Session</span>
            </button></a><br><br>
            <div class="row clearfix">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SESSION EVALUATION
                            </h2>
                            <h7 class="card-inside-title">Clearance <?php echo $_GET['stats']; ?></h7>
                        </div>
                        <form action="" method="POST">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <h7><b>Employee's ID</b></h7>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Employee's ID" value="<?php echo $_GET['id'] ?>" disabled="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h7><b>Name</b></h7>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Name" value="<?php echo $_GET['name'] ?>" disabled="" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>   
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h7><b>YEAR</b></h7>
                                            <div class="form-line">
                                                <div class="form-line">
                                                    <input type="text" name="year" class="form-control" placeholder="YYYY" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <h7><b>Subject</b></h7>
                                               <select class="form-control show-tick" name="subject">
                                                <?php while($row = mysqli_fetch_assoc($res)){ ?>
                                                    <option><?php echo $row['subjectname']; ?> - <?php echo $row['subcode']; ?> </option>
                                                <?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <h7><b>Semester</b></h7>
                                               <select class="form-control show-tick" name="sem">
                                                    <option value="">-- Please select --</option>
                                                    <option>1ST</option>
                                                    <option>2ND</option>
                                                    <option>3RD</option>
                                                    <option>4TH</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <h7><b>Section</b></h7>
                                               <select class="form-control show-tick">
                                                    <?php while($rows = mysqli_fetch_assoc($result)){ ?>
                                                    <option><?php echo $rows['section']; ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <h7><b>PIN Session</b></h7>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="****" name="pin" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <center><button type="submit" name="add" class="btn btn-primary waves-effect">Finish</button></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
    

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>