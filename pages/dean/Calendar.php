
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
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
 <?php
    if(isset($_POST['add'])){
    $sql = "INSERT INTO `calendar`(`date`, `time`, `title`, `text`) VALUES ('".$_POST['date']."','".$_POST['time']."','".$_POST['title']."','".$_POST['text']."')";
    mysqli_query($connection,$sql) or die(mysqli_error());
    header("Location: http://localhost/tes/pages/dean/Calendar.php");
    }
?>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
<!--DateTime Picker -->
         
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATETIME EVENT
                            </h2>
                        </div>
                        <form action="" method="POST">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="date" placeholder="Please choose a date...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="timepicker form-control" name="time" placeholder="Please choose a time...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<h2 class="card-inside-title">Input Title</h2>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" placeholder="col-sm-4" />
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                    	<h2 class="card-inside-title">Input Text</h2>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" class="form-control no-resize" name="text" placeholder="Please type what you want..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" name="add" type="submit">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--#END# DateTime Picker -->

<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Calendar Event
                            </h2>
                        </div>
                        <div class="body">
                            <div class="clearfix row">
                                <?php 
                                    $sql  = "SELECT * FROM calendar";
                                    $res = mysqli_query($connection,$sql);
                                 ?>
                                 <?php 
                                        while($row = mysqli_fetch_assoc($res)){
                                    ?>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    
                                    <div class="demo-color-box bg-red" data-toggle="modal" data-target="#defaultModal"> 
                                        <div class="color-name"><?php  echo $row['date']; ?></div>
                                        <div class="color-name"><?php  echo $row['time']; ?></div>
                                    </div>

                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="header">
                            <h2>
                                <?php 
                            $sql  = "SELECT * FROM calendar";
                            $res = mysqli_query($connection,$sql);
                        ?>
                        <?php 
                            while($row = mysqli_fetch_assoc($res)){
                        ?>
                        <?php  echo $row['title']; ?>
                        <?php
                            }
                        ?>
                            </h2>
                        </div>
                        <h4 class="modal-title" id="defaultModalLabel">CARLOS HILADO MEMORIAL STATE COLLEGE EVENT</h4>
                    </div>
                    <?php 
                       $sql  = "SELECT * FROM calendar";
                       $res = mysqli_query($connection,$sql);
                    ?>
                    <div class="modal-body">
                        <?php 
                            while($row = mysqli_fetch_assoc($res)){
                        ?>
                        <?php  echo $row['text']; ?>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>