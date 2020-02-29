
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
if(isset($_GET['id'])){
	$id = $_GET['id'];
    $sql = "SELECT * FROM `users` where `identitynumber` ='$id'";
    $res = mysqli_query($connection,$sql);
 }
 if (isset($_POST['add'])) {
    	$status = "";

    	mysqli_query($connection,"DELETE FROM clearancestatus WHERE identitynumber ='".$_GET['id']."'");
    	$userupdate = "UPDATE `users` SET `clearance` = '".$_POST['stats']."' WHERE `users`.`identitynumber` = '".$_GET['id']."'";
    	$resultaa = mysqli_query($connection,$userupdate);
    	

    	$sqli = "INSERT INTO `clearancestatus` (`identitynumber`, `name`, `status`) VALUES ('".$_GET['id']."','".$_POST['fullname']."','".$_POST['stats']."')";
    	$resulta = mysqli_query($connection,$sqli);

    	$status = "Record Updated Successfully</a>";
        echo '<p style="color:#FF0000;">'.$status.'</p>';
    	
    }
?>
<!-- Input -->
<a href="#" onclick="history.go(-2);">
        <button type="button" class="btn btn-success waves-effect">
            <i class="material-icons">keyboard_backspace</i>
            <span>Back</span>
        </button>
    </a><br><br>

            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Clearance Status
                            </h2>
                        </div>
                        <form action="" method="POST">
                        <div class="body">
                            <h2 class="card-inside-title">Name</h2>
                            <div class="row clearfix">
                            	
                                <div class="col-sm-12">
                                    <div class="form-group">
                                         <div class="form-line">
                                         	<?php while($row = mysqli_fetch_assoc($res)){ ?>
                                        	<input type="hidden" id="email_address" name="fullname" class="form-control" value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?>
                                        	<?php } ?>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                           <select class="form-control show-tick" name="stats" required>
                                           		<option value="">-- Please select --</option>
                                                <option value="Complete">Complete</option>
                                                <option value="Incomplete">Incomplete</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer">
                                <button type="submit" name="add" class="btn btn-primary waves-effect">Submit</button>
                            </div>
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