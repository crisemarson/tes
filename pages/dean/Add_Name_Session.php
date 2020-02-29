
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
<!-- #END# Modal Size Example -->
<?php 
    $sql = "SELECT * FROM clearancestatus WHERE `status` = 'Complete'";
    $res = mysqli_query($connection,$sql);
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
                        <form action="" method="POST">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Employess ID</th>
                                                <th>Name</th>
                                                <th>Evaluate</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($row = mysqli_fetch_assoc($res)){ ?>
                                            <tr>
                                                <td><?php echo $row['identitynumber']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><a href="Add_Evaluation_Session.php?id=<?php echo $row['identitynumber'] ?>&name=<?php echo $row['name'] ?>&stats=<?php echo $row['status'] ?>"><button type="button" name="Select" class="btn btn-primary waves-effect">Select</button></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>