
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
    <a href="http://localhost/tes/pages/dean/Clearance.php">
        <button type="button" class="btn btn-success waves-effect">
            <i class="material-icons">keyboard_backspace</i>
            <span>Back</span>
        </button>
    </a>
    <br><br>
<?php 
        $sqli = "SELECT * FROM `requirements` WHERE requirementstitle = '".$_GET['title']."' && identitynumber ='".$_SESSION['identitynumber']."'";
        $resulta = mysqli_query($connection,$sqli);
        $resultaa = mysqli_query($connection,$sqli);

        if(isset($_FILES['userfile'])) {

            $post_image = $_SESSION['id'];
            $post_image .= "_";
            $post_image .= $_SESSION['name'];
            $post_image .= "_";
            $post_image .= $_FILES['userfile']['name'];

            pre_r($_FILES);
            move_uploaded_file($_FILES['userfile']['tmp_name'],'../../docfiles/'.$_SESSION['id'].'_'.$_SESSION['name'].'_'.$_FILES['userfile']['name']);
            
            $namepost = mysqli_real_escape_string($connection,$post_image);
            $sqal = "SELECT * FROM `requirements` WHERE `filename` = '{$namepost}'";
            $resulat = mysqli_query($connection,$sqal);

          if(mysqli_num_rows($resulat)>=1){
           

            $status = "Duplicate: please rename your file!!";
            echo '<p style="color:#FF0000;">'.$status.'</p>';

          }else{

            $fullname = $_SESSION['name'];
            $fullname .= " ";
            $fullname .= $_SESSION['lastname'];
            $sql = "INSERT INTO `requirements` (`identitynumber`,`fullname`,`requirementstitle`, `filename`,`ClearanceProgress`) VALUES ('".$_SESSION['identitynumber']."','$fullname','".$_POST['title']."','".$post_image."','".$_POST['progress']."')";
            $res = mysqli_query($connection,$sql);
            header("Refresh:0");
        }
        }
        function pre_r($array){
           
        } 

?>
 <!-- File Upload | Drag & Drop OR With Click & Choose -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-44 col-sm-4 col-xs-4">
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
                                    <input type="hidden" name="title" value="<?php echo $_GET['title'] ?>">
                                    <input type="hidden" name="progress" value="pass">
                                </div>
                                <center><input type="submit" name="upload" value="upload" class="btn btn-primary m-t-15 waves-effect"></center>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs8">
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
                                            <th>Edit</th>
                                            <th>Delete</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 

                                            while($row = mysqli_fetch_assoc($resulta)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['requirementstitle']; ?></td>
                                            <td>
                                                <a href="http://localhost/tes/docfiles/<?php echo $row['filename'];?>"><?php echo $row['filename']; ?>
                                                </a>
                                            </td>
                                            <th><a href="http://localhost/tes/pages/teacher/Edit_Teacher_File_Upload_Form.php?idview=<?php echo $row['id']; ?>&title=<?php echo $row['filename'];?>&titlename=<?php echo $row['requirementstitle'];?>">Edit</a></th>
                                            <th><a href="http://localhost/tes/pages/teacher/Teacher_File_Upload_Form.php?delete=<?php echo $row['id']; ?>">Delete</a></th>
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
<?php 

        if(isset($_GET['delete'])){



                     $del =  $_GET['delete'];

                    

                     $sql = "DELETE FROM `requirements` WHERE `requirements`.`id` = {$del}";

                     $results = mysqli_query($connection,$sql);

                     if ($results) {
                         header('Location: ' . $_SERVER['HTTP_REFERER']);
                     } else {

                      echo "Error ". mysqli_error($connection);

                     }

                    

                    }
    
?>

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>