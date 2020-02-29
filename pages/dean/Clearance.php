
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


<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
     if ($_SESSION['role'] == 'Dean' || $_SESSION['role'] == 'Chair Person') {
?>
<?php 
    $sql = "SELECT * FROM `users`WHERE role = 'Teacher'";
    $displayclearanceteacher = mysqli_query($connection,$sql);
 
?>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php 
     if ($_SESSION['role'] == 'Dean') {
?>
                    <div class="card">
                        <div class="body">
                            <a href="Add_Clearance.php"><center><button type="submit" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal">Add Requirement</button></center></a>
                        </div>
                    </div>
<?php  } ?>
<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC EXAMPLE
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Full name</th>
                                            <th>Clearance Progress</th>
                                            <th>View</th>
                                            <?php 
                                                 if ($_SESSION['role'] == 'Dean' || $_SESSION['role'] == 'Chair Person') {
                                            ?>
                                            <th>Status</th>
                                        <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while($roww = mysqli_fetch_assoc($displayclearanceteacher)){
                                                $fullname = $roww['name'];
                                                $fullname .= " ";
                                                $fullname .= $roww['lastname'];
                                        ?>
                                        <tr>
                                            <td><?php  echo $roww['identitynumber']; ?></td>
                                            <td><?php  echo $fullname; ?></td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                        75%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="http://localhost/tes/pages/dean/View_Teacher_Clearance.php?id=<?php  echo $roww['identitynumber']; ?>&fullname=<?php  echo $fullname ?>">view</a></td>
                                            <?php 
                                                 if ($_SESSION['role'] == 'Dean' || $_SESSION['role'] == 'Chair Person'){
                                            ?>
                                       
                                            <td><p class="font-bold col-pink"><a href="clearance_status.php?id=<?php  echo $roww['identitynumber']; ?>"><?php  echo $roww['clearance']; ?></a></p></td>
                                        <?php } ?>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
<?php } ?>
<?php 
     if ($_SESSION['role'] == 'Teacher' ) {
?>
<?php 
    $sqli = "SELECT * FROM `addrequirements`";
    $resa = mysqli_query($connection,$sqli);

?>
<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC EXAMPLE
                            </h2>
                        </div>
                        <div class="body">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                    75%
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Requirements</th>

                                            <?php 
                                                 if ($_SESSION['role'] == 'Teacher' ) {
                                            ?>
                                            <th>Upload</th>
                                            <?php } ?>

                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while($row = mysqli_fetch_assoc($resa)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['requirementstitle']; ?></td>

                                            <?php 
                                                 if ($_SESSION['role'] == 'Teacher' ) {
                                            ?>
                                            <th><a href="http://localhost/tes/pages/Teacher/Teacher_File_Upload_Form.php?id=<?php echo $row['id'];?>&title=<?php echo $row['requirementstitle'];?>">Upload</a></th>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- #END# Basic Examples -->
<?php } ?>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>