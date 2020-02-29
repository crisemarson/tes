
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
    $sqli = "SELECT * FROM `addrequirements`";
    $resa = mysqli_query($connection,$sqli);

?>
<!-- Basic Examples -->
    <a href="http://localhost/tes/pages/dean/Clearance.php">
        <button type="button" class="btn btn-success waves-effect">
            <i class="material-icons">keyboard_backspace</i>
            <span>Back</span>
        </button>
    </a><br><br>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $_GET['fullname']; ?>
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
                                            <th>Files Saved</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while($row = mysqli_fetch_assoc($resa)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['requirementstitle']; ?></td>
                                            <th><a href="http://localhost/tes/pages/dean/Teacher_Files.php?id=<?php echo $_GET['id'] ?>&title=<?php echo $row['requirementstitle']; ?>">View</a></th>
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

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>