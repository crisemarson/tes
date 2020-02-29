
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

        if(isset($_FILES['userfile'])) {
          
            pre_r($_FILES);
            move_uploaded_file($_FILES['userfile']['tmp_name'],'../../docfiles/'.
                $_FILES['userfile']['name']);
            $status="";
            $post_image = $_FILES['userfile']['name'];
            $fullname = $_SESSION['name'];
            $fullname .= " ";
            $fullname .= $_SESSION['lastname'];
           	$sql = "UPDATE `requirements` SET `filename` = '".$post_image."' WHERE `requirements`.`id` = '".$_GET['idview']."'" ;
			      $result = mysqli_query($connection,$sql);
			      header('Location: ' . $_SERVER['HTTP_REFERER']);
            $status = "Record add Successfully. </br>";
        	  echo '<center><p style="color:#FF0000;">'.$status.'</p><center>';
        }
        function pre_r($array){
            
        }

?>
<?php 
	
	
?>
<a href="#" onclick="history.go(-2);">
        <button type="button" class="btn btn-success waves-effect">
            <i class="material-icons">keyboard_backspace</i>
            <span>Back</span>
        </button>
    </a><br><br>
	
	<div class="row clearfix">
   	    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
   	        <div class="card">
   	            <div class="header">
   	                <h2>
   	                    FILE UPLOAD - CLICK & CHOOSE
   	                </h2>
   	            </div>
   	            <div class="body">
   	                <form action="" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
   	                    <div class="fallback">
   	                        <input type="file" name="userfile" multiple />
   	                    </div>
   	                    <center><input type="submit" name="upload" value="upload" class="btn btn-primary m-t-15 waves-effect"></center>
   	                </form>
	
   	            </div>
   	        </div>
   	    </div>
   	    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $_GET['titlename']; ?>
                            </h2>
                        </div>
                        <div class="body">
                          	<p class="font-italic col-pink">File name: <p class="font-bold"><?php 
                                  $titledisplay = "SELECT * FROM `requirements` WHERE `requirements`.`id` = '".$_GET['idview']."'";
                                  $display = mysqli_query($connection,$titledisplay);
                                  while($displayrow = mysqli_fetch_assoc($display)){
                                    echo $displayrow['filename'];
                                  }
                                ?></p></p>
                        </div>
                    </div>
                </div>
   	</div>

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>