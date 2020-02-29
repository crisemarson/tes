
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
    $sqli = "SELECT * FROM `requirements` WHERE requirementstitle = '".$_GET['title']."' && identitynumber ='".$_SESSION['identitynumber']."'";
    $resulta = mysqli_query($connection,$sqli);
?>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $_GET['title']; ?>
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
                                            <th>File Name</th>
                                            <th>edit</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 

                                            while($row = mysqli_fetch_assoc($resulta)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['requirementstitle']; ?></td>
                                            <td>
                                                <a href="">
                                                    <a href="http://localhost/tes/docfiles/<?php echo $row['filename'];?>"><?php echo $row['filename']; ?></a>
                                                    
                                                </a>
                                            </td>
                                            
                                            <th><a href="">edit</a></th>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>