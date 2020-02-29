
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
                            <h2>
                                All Question
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <?php 

                            $sql="SELECT * from question";
                            $result = mysqli_query($connection,$sql);
                            
                            $sqli="SELECT * from questionaire";
                            $resulti = mysqli_query($connection,$sqli);

                            ?>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Question Title</th>
                                        <th>Question</th>
                                        <!-- <th>Update</th>
                                        <th>Effect</th> -->
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    while($rows = mysqli_fetch_assoc($resulti)){
                                        
                                        while($row = mysqli_fetch_assoc($result)){
                                            
                                    ?>
                                    <tr>
                                        <th><?php echo $row['id'];?></th>
                                        <td><?php echo $row['questiontitle'];?></td>
                                        <td><?php echo $row['question'];?></td>
                                       <!--  <td><a href="Edit_Question.php?view=<?php echo $row['id'];?>&title=<?php echo $row['questiontitle'];?>">Select</a></td>
                                        <td><a href="">show</a> / <a href="">Hide</a></td> -->
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