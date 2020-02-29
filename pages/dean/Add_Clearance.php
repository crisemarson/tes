
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
		if (isset($_POST['add'])) {
			$status = "";
			$sql = "INSERT INTO `addrequirements` (`requirementstitle`) VALUES ('".$_POST['requirementstitle']."')";
			$result = mysqli_query($connection,$sql);
			$status = "Record Updated Successfully</a>";
			echo '<p style="color:#FF0000;">'.$status.'</p>';
		}
			$sqli = "SELECT * FROM `addrequirements`";
			$resa = mysqli_query($connection,$sqli);
			$status = "";
        echo '<p style="color:#FF0000;">'.$status.'</p>';
	?>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
	<a href="http://localhost/tes/pages/dean/Clearance.php">
		<button type="button" class="btn btn-success waves-effect">
        	<i class="material-icons">keyboard_backspace</i>
        	<span>Back</span>
        </button>
    </a>
    <br><br>
<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Clearance
                            </h2>
                        </div>
                        <div class="body">
                            <form action="" method="POST">
                                <label>Input Requirements Title</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" name="requirementstitle" class="form-control" placeholder=>
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-primary waves-effect" name="add" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Requirements
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Title Requirements</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            			<?php 
                            			    while($row = mysqli_fetch_assoc($resa)){
                            			?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['requirementstitle']; ?></td>
                                            <th><a href="">Edit</a></th>
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