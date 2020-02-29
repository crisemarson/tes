
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
                if(isset($_GET['view']) && isset($_GET['title'])){
                    $view = $_GET['view'];
                    $title = $_GET['title'];
                    $sql = "SELECT * FROM question WHERE questiontitle = '$title'";
                    $res = mysqli_query($connection,$sql);
            ?>
            <?php 
                if (isset($_POST['add'])) {
                    while($row = mysqli_fetch_assoc($res)){
                    $status = "";
                    $view = $_GET['view'];
                    $title = $_GET['title'];
                    $id = $_GET['id'];
                    
                    $questionstitle = mysqli_real_escape_string($connection,$_POST['questionstitle']);
                    $sql = "SELECT * FROM `questionaire` WHERE `questionstitle` = '{$questionstitle}' ";
                    
                    $result = mysqli_query($connection,$sql);

                      if(mysqli_num_rows($result)>=1){

                        $status = "Duplicate@!!!";


                      }else{

                        $sqli ="UPDATE `question` SET `questiontitle` = '".$_POST['questionstitle']."' WHERE `questiontitle` = '$title'";
                        $res1 = mysqli_query($connection,$sqli);
                        $sqli1 ="UPDATE `questionaire` SET `questionstitle` = '".$_POST['questionstitle']."' WHERE `questionaire`.`id` = '$id'";
                        $res2 = mysqli_query($connection,$sqli1);
                        $status = "Record Updated Successfully";

                      }
                    echo '<p style="color:#FF0000;">'.$status.'</p>';
                }}
            ?>
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <a href="http://localhost/tes/pages/dean/Question_Categories.php"><button type="button" class="btn btn-success waves-effect">
                                    <i class="material-icons">keyboard_backspace</i>
                                    <span>Back</span>
                                </button></a>
                                <br><br>
                <h2>UPDATE TITLE</h2>
            </div>
            <div class="body">
                <form id="form_validation" action="" method="POST">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="questionstitle" value="<?php  echo $title;?>" required>
                            <label class="form-label">Input Title</label>
                        <?php } ?>
                        </div>
                    </div>
                    <button class="btn btn-primary waves-effect" name="add" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>


<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>