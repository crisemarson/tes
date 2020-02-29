
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
        $sqli = "SELECT * FROM `requirements` WHERE requirementstitle = '".$_GET['title']."' && identitynumber ='".$_GET['id']."'";
        $resulta = mysqli_query($connection,$sqli);
        $resultaa = mysqli_query($connection,$sqli);
?>
	<a href="#" onclick="history.back(1);">
        <button type="button" class="btn btn-success waves-effect">
            <i class="material-icons">keyboard_backspace</i>
            <span>Back</span>
        </button>
    </a><br><br>
<!-- File Upload | Drag & Drop OR With Click & Choose -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $_GET['title']; ?>
                            </h2>
                        </div>
                        <div class="body">
                            Progress Bar
                            <?php
                                if($rows = mysqli_fetch_assoc($resultaa)){
                                    if ($rows['ClearanceProgress'] != "pass") {
                                       echo "!=";
                                    }
                                    ?>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo "10";?>" aria-valuemin="0" aria-valuemax="<?php echo "10";?>" style="width: 100%;">
                                            <?php echo "10";?>%
                                        </div>
                                    </div>
                        <?php }else{ ?>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo "0";?>" aria-valuemin="0" aria-valuemax="<?php echo "0";?>" style="width: 100%;">
                                            <?php echo "0";?>%
                                        </div>
                                    </div>
                                    <?php } ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Requirements</th>
                                            <th>File Name</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 

                                            while($row = mysqli_fetch_assoc($resulta)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['requirementstitle']; ?></td>
                                            <td>
                                               <a href="http://localhost/tes/docfiles/<?php echo $row['filename'];?>"><?php echo $row['filename']; ?></a>
                                            </td>
                                            <?php } ?>
                                        </tr>
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