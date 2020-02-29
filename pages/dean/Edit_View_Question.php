
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
                    if(isset($_GET['view']) && isset($_GET['title']) && isset($_GET['id']) ){
                        $view = $_GET['view'];
                        $title = $_GET['title'];
                        $id = $_GET['id'];
                        $status = "";
                        $sql = "SELECT question FROM question where `question`.`id`='$view'";
                        $res = mysqli_query($connection,$sql);
                ?>
                <?php 
                /*if (isset($_POST['add'])) {
                    while($row = mysqli_fetch_assoc($res)){
                    $status = "";
                    $view = $_GET['view'];
                    $title = $_GET['title'];
                    



                    $questionstitle = mysqli_real_escape_string($connection,$_POST['questionstitle']);
                    $sql = "SELECT * FROM `questionaire` WHERE `questionstitle` = '{$questionstitle}' ";
                    $result = mysqli_query($connection,$sql);

                    if(mysqli_num_rows($result)>=1){
                        $status = "Duplicate</a>";

                    }else{
                     $sqlai ="UPDATE `question` SET `question` = '".$_POST['question']."' , `questiontitle` = '".$_POST['questionstitle']."' WHERE `id` = '$view'";
                        $res1 = mysqli_query($connection,$sqlai);
                        $insert = "INSERT INTO `questionaire`(`questionstitle`) VALUES ('".$_POST['questionstitle']."')";
                        $res2 = mysqli_query($connection,$insert);
                        $status = "Record Updated Successfully</a>";
                                            
                    }

                    
                    echo '<p style="color:#FF0000;">'.$status.'</p>';
                }}*/
                if (isset($_POST['add'])) {

                    $status="";
                    $view = $_GET['view'];
                    $updatequestion = "UPDATE `question` SET `question` = '".$_POST['question']."' WHERE `question`.`id` = '$view'";
                    $res1 = mysqli_query($connection,$updatequestion);
                    $status = "Record add Successfully. </br>";
                    echo '<center><p style="color:#FF0000;">'.$status.'</p><center>';

                }
            ?>

                <div class="header">
                    <a href="#" onclick="history.go(-2);">
        <button type="button" class="btn btn-success waves-effect">
            <i class="material-icons">keyboard_backspace</i>
            <span>Back</span>
        </button>
    </a><br>
                    <br>
                    <center><h2>Update Question</h2></center>
                </div>
            
            <div class="body">
                <form id="form_validation" action="" method="POST">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <center><h2><?php echo $_GET['title']; ?></h2></center>
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