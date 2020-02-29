
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

<!-- Example Tab -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab">Section</a></li>
                                <li role="presentation"><a href="#profile" data-toggle="tab">Subject</a></li>
                                <li role="presentation"><a href="#messages" data-toggle="tab">Course</a></li>
                            </ul>
<!-- -------------------------------------------------------------------------------------------------------- -->
 <?php
    $status = "";
    if(isset($_POST['add'])){
    $d=date("Y-m-d H:i:s");
    $e=$_SESSION['name'];
   $sql = "INSERT INTO `section` (`section`, `date`, `submittedby`) VALUES ('".$_POST['section']."','$d','$e')";
    
    mysqli_query($connection,$sql) or die(mysqli_error());
    $status = "Record add Successfully. </br>";
    echo '<center><p style="color:#FF0000;">'.$status.'</p><center>';
    }
?>
<!-- -------------------------------------------------------------------------------------------------------- -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
<!-- ------------------------------------------------------------------------------------------------------------------ -->
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body">
                                                    <form action="" method="post">
                                                        <h2 class="card-inside-title">Add Section</h2>
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" name="section" class="form-control" />
                                                                <label class="form-label" >Input Section</label>
                                                            </div>
                                                        </div>
                                                        <button type="submit" name="add" class="btn btn-primary m-t-15 waves-effect">Add</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

   <!-- ------------------------------------------------------------------------------------------------------------------- -->
           
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>
                                                        BASIC EXAMPLE
                                                    </h2>
                                                </div>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <?php 
                                                           $sql  = "SELECT * FROM section";
                                                           $res = mysqli_query($connection,$sql);
                                                        ?>
                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>section</th>
                                                                    <th>submitted by</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
                                                                    while($row = mysqli_fetch_assoc($res)){
                                                                ?>
                                                                <tr>
                                                                    <td><?php  echo $row['id']; ?></td>
                                                                    <td><?php  echo $row['section']; ?></td>
                                                                    <td><?php  echo $row['submittedby']; ?></td>
                                                                </tr>
                                                                <?php
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
 <?php
    if(isset($_POST['adda'])){
    $trn_date = date("Y-m-d H:i:s");
    $a=$_SESSION['identitynumber'];
    $b=$_REQUEST['subcode'];
    $c=$_REQUEST['subjname'];
    $d=date("Y-m-d H:i:s");
    $e=$_SESSION['name'];
    $sql = "INSERT INTO `subject`(`employernumber`, `subcode`, `subjname`, `date`, `submittedby`) VALUES ('$a','$b','$c','$d','$e')";
    mysqli_query($connection,$sql) or die(mysqli_error());
    header("Location: http://localhost/tes/pages/dean/information_management.php");
    }
?>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
                                <div role="tabpanel" class="tab-pane fade" id="profile">
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
                                    <div class="row clearfix">   
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <form action="" method="POST">
                                                    <div class="body">
                                                        <h2 class="card-inside-title">Add subject code</h2>
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" name="subcode" class="form-control" />
                                                                <label class="form-label">Input subject code</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="body">
                                                        <h2 class="card-inside-title">Add subject name</h2>
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" name="subjname" class="form-control" />
                                                                <label class="form-label">Input subject name</label>
                                                            </div>
                                                        </div>
                                                        <button type="submit" name="adda" class="btn btn-primary m-t-15 waves-effect">Add</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
   <!-- -------------------------------------------------------------------------------------------------------------- -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>
                                                        BASIC EXAMPLE
                                                    </h2>
                                                </div>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <?php 
                                                           $id = $_SESSION['id'];
                                                           $sql  = "SELECT * FROM subject";
                                                           $res = mysqli_query($connection,$sql);
                                                        ?>
                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>subcode</th>
                                                                    <th>subject name</th>
                                                                    <th>submitted by</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
                                                                    while($row = mysqli_fetch_assoc($res)){
                                                                ?>
                                                                <tr>
                                                                    <td><?php  echo $row['id']; ?></td>
                                                                    <td><?php  echo $row['subcode']; ?></td>
                                                                    <td><?php  echo $row['subjname']; ?></td>
                                                                    <td><?php  echo $row['submittedby']; ?></td>
                                                                </tr>
                                                                <?php
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
 <?php
    if(isset($_POST['ADD'])){
    $trn_date = date("Y-m-d H:i:s");
    $a=$_SESSION['identitynumber'];
    $b=$_REQUEST['coursecode'];
    $c=$_REQUEST['coursename'];
    $d=date("Y-m-d H:i:s");
    $e=$_SESSION['name'];
    $sql = "INSERT INTO `course`(`employernumber`, `coursecode`, `coursename`, `date`, `submittedby`) VALUES('$a','$b','$c','$d','$e')";
    mysqli_query($connection,$sql) or die(mysqli_error());
    header("Location: http://localhost/tes/pages/dean/information_management.php");
    }
?>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
                                <div role="tabpanel" class="tab-pane fade" id="messages">
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
                                    <div class="row clearfix">   
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <form action="" method="post">
                                                    <div class="body">
                                                        <h2 class="card-inside-title">Add course code</h2>
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="coursecode" />
                                                                <label class="form-label">Input course code</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="body">
                                                        <h2 class="card-inside-title">Add course name</h2>
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="coursename" />
                                                                <label class="form-label">Input course name</label>
                                                            </div>
                                                        </div>
                                                        <button type="submit" name="ADD" class="btn btn-primary m-t-15 waves-effect">Add</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
   <!-- ------------------------------------------------------------------------------------------------------------------- -->
           
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>
                                                        BASIC EXAMPLE
                                                    </h2>
                                                </div>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <?php 
                                                           $sql  = "SELECT * FROM course";
                                                           $res = mysqli_query($connection,$sql);
                                                        ?>
                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Course Code</th>
                                                                    <th>Course Name</th>
                                                                    <th>Submitted By</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
                                                                    while($row = mysqli_fetch_assoc($res)){
                                                                ?>
                                                                <tr>
                                                                    <td><?php  echo $row['id']; ?></td>
                                                                    <td><?php  echo $row['coursecode']; ?></td>
                                                                    <td><?php  echo $row['coursename']; ?></td>
                                                                    <td><?php  echo $row['submittedby']; ?></td>
                                                                </tr>
                                                                <?php
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!-- ------------------------------------------------------------------------------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example Tab -->

<!-- -------------------------------------------------------------------------------------------------------------------- --> 
<!-- -------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>