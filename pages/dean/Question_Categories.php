
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


<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------------------- -->

    <?php
        $status = "";
        $a=$_SESSION['identitynumber'];
        $d=date("Y-m-d H:i:s");
        $e=$_SESSION['name'];
        if(isset($_POST['add1'])){
            $update ="INSERT INTO `questionaire`(`employernumber`,`questionstitle`,`date`, `submittedby`) VALUES ('$a','". $_POST['questionstitle']."','$d','$e')";

            mysqli_query($connection,$update) or die(mysqli_error());
            $status = "Record add Successfully. </br>";
            echo '<center><p style="color:#FF0000;">'.$status.'</p><center>';
            header("Location: http://localhost/tes/pages/dean/Question_Categories.php");
        }
          ?>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>TITLE QUESTION</h2>
            </div>
            <div class="body">
                <form id="form_validation" action="" method="POST">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="questionstitle" required>
                            <label class="form-label">Name</label>
                        </div>
                    </div>
                    <button class="btn btn-primary waves-effect" name="add1" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>

<!-- #END# Basic Validation -->
<!-- ------------------------------------------------------------------------------------------------- -->                      
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    BASIC EXAMPLE
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <?php 
                     
                       $sql = "SELECT `questionaire`.`id`, `questionaire`.`employernumber`, `questionaire`.`questionstitle`, `questionaire`.`date`, `questionaire`.`submittedby` FROM `questionaire`";
                       $res = mysqli_query($connection,$sql);
                       

                    ?>
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Employernumber</th>
                                <th>Questions</th>
                                <th>Questionstitle</th>
                                <th>Date</th>
                                <th>Submittedby</th>
                                <th>Update</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                               while($row = mysqli_fetch_assoc($res)){
                                $QT = $row['questionstitle'];
                                $sqla = "SELECT `id`,COUNT(`questiontitle`) AS COUNT FROM `question` WHERE `questiontitle`='$QT'";
                                $counts = mysqli_query($connection,$sqla);
                                     while($rows = mysqli_fetch_assoc($counts)){                                          
                            ?>
                            <tr>
                                <td>
                                    <?php  echo $row['id']; ?>
                                </td>
                                <td>
                                   <?php  echo $row['employernumber']; ?>
                                </td>
                                <td>
                                    <a href="listquestion.php?view=<?php echo $rows['id'];?>&id=<?php  echo $row['id']; ?>&title=<?php  echo $row['questionstitle']; ?>"><li style="list-style: none;"><button type="button"><?php echo $rows['COUNT'];?></button></li></a>
                                </td>

                                <td>
                                    
                                    
                                    <a><li style="list-style: none;"><button type="button" class="btn btn-default waves-effect m-r-20" name="try" data-toggle="modal" data-target="#defaultModal" onclick="getQuestionTitle(this)"><?php  echo $row['questionstitle']; ?></button></li></a>
                                </td>
                                <td>
                                    <?php  echo $row['date']; ?>
                                </td>
                                <td>
                                    <?php  echo $row['submittedby']; ?>
                                </td>
                                <td>
                                    <a href="Edit_Title.php?view=<?php echo $rows['id'];?>&id=<?php  echo $row['id']; ?>&title=<?php  echo $row['questionstitle']; ?>"><li style="list-style: none;"><button type="button">Edit</button></li></a>
                                </td>
                            </tr>
                            <?php
                                }}
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
                <?php

                    if(isset($_POST['addko'])){
                        $update ="INSERT INTO `question`(`questiontitle`, `question`) VALUES ('". $_POST['questionstitle']."','". $_POST['question']."')";
                        mysqli_query($connection,$update) or die(mysqli_error());
                        header("Location:http://localhost/tes/pages/dean/Question_Categories.php");
                    }
                ?>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <form method="POST" action="">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="defaultModalLabel"></h4>
                            </div>
                            <div class="modal-body">
                                 <!-- Textarea -->
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>Input Question</h2>
                                                <input type="hidden" id="questiontitleValue" name="questionstitle">
                                            </div>
                                            <div class="body">
                                              
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea rows="4" class="form-control no-resize" name="question" placeholder="Please type what you want..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- #END# Textarea -->
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-link waves-effect" name="addko">SAVE CHANGES</button>
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>

<script type="text/javascript">
    function getQuestionTitle(e){
        console.log(e.textContent)
        document.getElementById('defaultModalLabel').innerHTML = e.textContent;
         document.getElementById('questiontitleValue').value = e.textContent;

    }
     function getQuestionQuestion(a){
        console.log(a.textContent)
        document.getElementById('defaultModalLabel1').innerHTML = a.textContent;
        document.getElementById('questiontitleValue1').value = e.textContent;
    }
</script>

