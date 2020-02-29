
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
<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                    	
                        <div class="header">
                            <h3>
                                	List of Question
                            </h3>
                        </div>
                        <?php 
                    	$sql = "SELECT * FROM questionaire";
            			$res = mysqli_query($connection,$sql);
            			
            			while($row = mysqli_fetch_assoc($res)){
            				
                    ?>
                        <div class="body">
                            <div class="table-responsive">

                            	<h3>
                                	<?php echo $row['questionstitle']; ?>
                            	</h3>
                                <table class="table table-bordered table-striped table-hover ">
                                	
                                    <thead>
                                        <tr>
                                            <th>Question</th>
                                            <th>Input 1-5</th>
                                        </tr>
                                    </thead>
                                    <div class="demo-radio-button">
                                    	<tbody>

                                    		<?php 
                                    		$QT = $row['questionstitle'];
                                    		$sqli = "SELECT * FROM question  WHERE `questiontitle`='$QT'";
            								$result = mysqli_query($connection,$sqli);
                                    		while($rows = mysqli_fetch_assoc($result)){ ?>
                                    	    <tr>
                                    	        <td><?php echo $rows['question']; ?></td>
                                    	        <td>
                                    	        	<div class="col-md-1">
                                        				<input id="yourinput" class="input" name="sum" style="width:30px;" maxlength="1" onKeydown="hideInput(this)" onKeyup="checkInput(this)" type="text" />
                                					</div>
                                				</td>
                                    	    </tr>
                                    	<?php } ?>
                                    	</tbody>
                                    </div>
                                </table>
                            </div>

                        </div>
                        <?php } ?>
                        <center>
                        	<script type="text/javascript">

							jQuery(document).ready(function($){
							$(".btn-primary.waves-effect").on("click", function(){
							
							var sum_up = 0;
							var inputs = 0;
							
							$("input[name=sum]").each(function(index){
							inputs++;
								sum_up += parseInt($(this).val());
							});
							$("#box4").val(sum_up);
							$("#box3").val(sum_up/inputs);
							
							});
							});
							
							</script>
							<?php 
								if (isset($_POST['add'])) {

								$insertgrades = "INSERT INTO `passgrades` (`identitynumber`, `subject`, `total`, `totalpoints`,  `sem`, `year`, `submittedby`) VALUES ('". $_GET['id']."','". $_GET['subject']."','". $_POST['inputtotalpoints']."','". $_POST['inputtotal']."','". $_GET['sem']."','". $_GET['year']."','". $_SESSION['name']."')";
								 	mysqli_query($connection,$insertgrades);
								 	$status = "Record add Successfully. </br>";
        	  						echo '<center><p style="color:#FF0000;">'.$status.'</p><center>';
								 	}
							?>
							

							<form action="" method="POST">
									<input id='box4' type='hidden' name="inputtotalpoints" style="width:50px;" readonly />
                        			<input id='box3' type='hidden' name="inputtotal" style="width:50px;" readonly />
                        			<button type="submit" class="btn btn-primary waves-effect" name="add">Submit</button><br><br>
                        	</form>
                         
                        

                    </div>
                	
                </div>
            </div>
            <!-- #END# Basic Examples -->
<script type="text/javascript">function checkInput(ob) {
    var invalidChars = /[^0-5]/gi
    if (invalidChars.test(ob.value)) {
        ob.value = ob.value.replace(invalidChars, "");
    }
    else {
        document.getElementById('yourinput').style.color = '#000';
    }
};

function hideInput(ob) {
    document.getElementById('yourinput').style.color = '#000';
};</script>


<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>