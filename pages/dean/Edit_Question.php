
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
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
                <?php 
                    if(isset($_GET['view']) && isset($_GET['title']) ){
                        $view = $_GET['view'];
                        $title = $_GET['title'];
                        $status = "";
                        $sql = "SELECT question FROM question where `question`.`id`='$view'";
                        $res = mysqli_query($connection,$sql);
                ?>
                <?php 
                if (isset($_POST['add'])) {
                    while($row = mysqli_fetch_assoc($res)){
                    $status = "";
                    $view = $_GET['view'];
                    $title = $_GET['title'];
                    $sqlai ="UPDATE `question` SET `question` = '".$_POST['question']."' , `questiontitle` = '".$_POST['questionstitle']."' WHERE `id` = '$view'";
                    $insert = "INSERT INTO `questionaire`(`questionstitle`) VALUES ('".$_POST['questionstitle']."')";
                        $res2 = mysqli_query($connection,$insert);
                    $res1 = mysqli_query($connection,$sqlai);

                    $status = "Record Updated Successfully</a>";
                    echo '<p style="color:#FF0000;">'.$status.'</p>';
                }}
            ?>
                <div class="header">
                    <a href="http://localhost/tes/pages/dean/Question_Categories.php"><button type="button" class="btn btn-success waves-effect">
                        <i class="material-icons">keyboard_backspace</i>
                        <span>Back</span>
                        </button>
                    </a>
                    <br>
                    <center><h2>Update Question</h2></center>
                </div>
            
            <div class="body">
                <form id="form_validation" action="" method="POST">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="questionstitle" value="<?php  echo $title;?>" required>
                            <label class="form-label">Input Title</label>
                        </div>
                    </div>
                    <div class="form-line">
                        <div class="sform-float">
                            <?php 
                                while($row = mysqli_fetch_assoc($res)){
                            ?>
                            <textarea rows="4" class="form-control no-resize" name="question" placeholder="Please type your question..."><?php  echo $row['question'];?></textarea>
                        </div>
                    </div>
                    <br>
                    <center><button class="btn btn-primary waves-effect" name="add" type="submit">SUBMIT</button></center>
                  <?php }} ?>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- #END# Basic Validation -->
<!-- ------------------------------------------------------------------------------------------------- -->     

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>