
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


            <!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                           <?php 
            				if(isset($_GET['view']) && isset($_GET['title'])){
            				    $view = $_GET['view'];
            				    $title = $_GET['title'];
            				    $sql = "SELECT * FROM question WHERE questiontitle = '$title'";
            				    $res = mysqli_query($connection,$sql);
  						    ?>
                        <div class="header">
                        	 <center><a href="http://localhost/tes/pages/dean/Question_Categories.php"><button type="button" class="btn btn-success waves-effect">
                                    <i class="material-icons">keyboard_backspace</i>
                                    <span>Back</span>
                                </button></a></center>
                            <h2>
                                <?php  echo $title;?>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                   <tr>
                                        <th>Question</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    	<?php 
											while($row = mysqli_fetch_assoc($res)){
                                                $sqli="SELECT * FROM questionaire";
                                                $resa = mysqli_query($connection,$sqli);
                                                
    									?>
                                        <td><?php  echo $row['question'];?></td>

                                        <td><a href="Edit_View_Question.php?&title=<?php  echo $row['questiontitle']; ?>&view=<?php echo $row['id']; ?>&id=<?php echo $_GET['id']; ?>">Select</a></td>
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>