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
            <!-- Modal Size Example -->
        <?php 
            if ($_SESSION['role'] == 'Dean' ) {
        ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <center><a href="Add_Name_Session.php"><button type="button" class="btn btn-primary waves-effect">Add Session</button></a></center>
                        </div>
                    </div>
        <?php 
           }
        ?>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
 <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
 <?php
    $status = "";
    if(isset($_POST['ADD'])){

    $d=date("Y-m-d H:i:s");
    $e=$_SESSION['name'];
    $sql = "INSERT INTO `session`(`instructorname`,`course`, `semester`, `section`, `department`, `year`, `subject`, `date`, `submittedby`) VALUES ('".$_POST['instructorname']."','".$_POST['course']."','".$_POST['semester']."','".$_POST['section']."','".$_POST['department']."','".$_POST['year']."','".$_POST['subject']."','$d','$e')";
    
    mysqli_query($connection,$sql) or die(mysqli_error());
    $status = "Record add Successfully. </br>";
    echo '<center><p style="color:#FF0000;">'.$status.'</p><center>';
    }
?>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
    <?php 
        $sql  = "SELECT * FROM session";
        $res = mysqli_query($connection,$sql);
     ?>
            <div class="row clearfix">
                 <?php 
             while($row = mysqli_fetch_assoc($res)){

            ?>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                Session # <?php echo $row['id']; ?>   <small><?php echo  $row['date'] ?></small>
                            </h2>
                        </div>
                        <div class="body">
                            Employee's ID: <?php  echo $row['identitynumber']."<br>"; ?>
                            Instractor: <?php  echo $row['name']."<br>"; ?>
                            Subject: <?php  echo $row['subject']."<br>"; ?>  
                            Semester: <?php  echo $row['sem']."<br>"; ?>  
                            Year: <?php  echo $row['year']."<br>"; ?>
                            Status: <?php  echo $row['status']."<br>"; ?>  
                                <br>

                        <?php 
                            if ($_SESSION['role'] == 'Dean' ) {
                        ?>                        
                            <button type="button" class="btn btn-block btn-lg bg-deep-purple waves-effect"><i class="material-icons">settings</i>&nbsp;&nbsp; Activate</button>
                        <?php } ?>

                        <?php 
                            if ($_SESSION['role'] == 'Student' ) {
                        ?>    

                            <a href="http://localhost/tes/pages/student/evaluate_teacher.php?id=<?php  echo $row['identitynumber']; ?>&subject=<?php  echo $row['subject']; ?>&sem=<?php  echo $row['sem']; ?>&year=<?php  echo $row['year']; ?>"><button type="button" class="btn btn-block btn-lg bg-deep-purple waves-effect"><i class="material-icons">settings</i>&nbsp;&nbsp; Evaluate</button></a>
                                                
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

            
            
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
                </div>
            </div>
            


<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>