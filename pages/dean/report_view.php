
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

    $sql = "SELECT * FROM `passgrades` WHERE identitynumber = '".$_GET['id']."'";
    $res = mysqli_query($connection,$sql);

 ?>
<!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<a href="/tes/pages/dean/report.php">
            <button type="button" class="btn btn-success waves-effect">
                <i class="material-icons">keyboard_backspace</i>
                <span>Back Report</span>
            </button></a><br><br>
            <div class="card">
                <div class="header">
                    <h2>
                        LIST OF EVALUATE TEACHER
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th># PASS</th>
                                    <th>Subject</th>
                                    <th>Total Points</th>
                                    <th>Sum of Total Points</th>
                                    <th>Submitted by</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $count = "1"; while($row = mysqli_fetch_assoc($res)){ ?>
                                <tr>
                                    
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $row['subject']; ?></td>
                                    <td><?php echo $row['total']; ?></td>
                                    <td><?php echo $row['totalpoints']; ?></td>
                                    <td><?php echo $row['submittedby']; ?></td>
                                
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