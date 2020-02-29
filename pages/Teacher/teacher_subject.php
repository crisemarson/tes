
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


    $sql = "SELECT * FROM subject";
    $res = mysqli_query($connection,$sql);
    $resa = mysqli_query($connection,$sql);

    if (isset($_POST['add'])) {

       $inputsubject = $_POST['inputsubject'];


       $new_data = (explode(" ", $inputsubject));
       $subcode = $new_data[0];
       $subject = $new_data[2];

        $idbase = mysqli_real_escape_string($connection,$_SESSION['identitynumber']);

        $subjects = mysqli_real_escape_string($connection,$subcode);
        $sqal = "SELECT * FROM `teacheraddsubject` WHERE `subcode` = '{$subject}' AND `identitynumber` = '{$idbase}'";
        $resulat = mysqli_query($connection,$sqal);

       /* $idbase = mysqli_real_escape_string($connection,$_SESSION['identitynumber']);
        $sqlidbase = "SELECT * FROM `teacheraddsubject` WHERE `identitynumber` = '{$idbase}' ";
        $resulaat = mysqli_query($connection,$sqlidbase);
*/
        

          if(mysqli_num_rows($resulat)>=1){
           

            $status = "Duplicate@!!!";
            echo '<p style="color:#FF0000;">'.$status.'</p>';
            echo mysqli_num_rows($resulaat);
            echo $sqlidbase;
/*
            if (mysqli_num_rows($resulaat) == 0) {

                $sqlsi = "INSERT INTO `teacheraddsubject` (`identitynumber`, `subjectname`, `subcode`)  VALUES ( '".$_SESSION['identitynumber']."',  '".$subcode."', '".$subject."')";
                echo $sqlsi;
                echo $sqlidbase;
                $resuslt = mysqli_query($connection,$sqlsi);
            }
*/
          }else{
       
        $sqli = "INSERT INTO `teacheraddsubject` (`identitynumber`, `subjectname`, `subcode`,`subjects`,`role`)  VALUES ( '".$_SESSION['identitynumber']."',  '".$subcode."', '".$subject."', '".$_POST['inputsubject']."','".$_SESSION['role']."')";
        $result = mysqli_query($connection,$sqli);


       $status = "Record Updated Successfully</a>";
       echo '<p style="color:#FF0000;">'.$status.'</p>';
    }}
?>
                            <!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <div class="card">
            <div class="header">
                <h2>
                    FACULTY PERFORMANCE EVALUATION
                </h2>
            </div>
        <form action="" method="POST">
            <div class="body">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-line">
                           
                           <select class="form-control show-tick" name="inputsubject">
                             <?php while($row = mysqli_fetch_assoc($res)){
                              $subject = $row['subjname'];
                              $subcode = $row['subcode'];
                              ?>
                                <option><?php echo $row['subjname']; ?> - <?php echo $row['subcode']; ?> </option>
                                <?php } ?>
                            </select>
                             
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="modal-footer">
                    <button type="submit" name="add" class="btn btn-link waves-effect">Submit</button>
                </div>
            </div>
        </form>
        </div>
    </div>
<?php 
    $ssql ="SELECT * FROM `teacheraddsubject` where identitynumber = '".$_GET['id']."'";
    $asss = mysqli_query($connection,$ssql);
    
?>          
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs8">
        <div class="card">
            <div class="header">
                <h2>
                    Subject list
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>Employer ID</th>
                                <th>Suject Code</th>
                                <th>Suject Name</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                           <?php while($rowss = mysqli_fetch_assoc($asss)){?>
                            <tr>
                                <td><?php echo $rowss['identitynumber']; ?></td>
                                <td><?php echo $rowss['subcode']; ?></td>
                                <td><?php echo $rowss['subjectname']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>