
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

<?php 
    if (!$_SESSION['id']) {
      
      header("Location: http://localhost/tes/login.php");
      die();
    } 


    echo "<pre>";
    echo $_SESSION['role'];
    echo "</pre>";
 ?>
 <!-- Start CSV -->
<?php
if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT INTO users(id,identitynumber,username,name,lastname,password,role,department,status,image) 
        values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','" . $column[6] . "','" . $column[7] . "','" . $column[8] . "','" . $column[9] . "')";
        
            $result = mysqli_query($connection, $sqlInsert);
            
            if (! empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
                header("Location:dean.php");
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
    }
}
?>

<script type="text/javascript">
$(document).ready(function() {
    $("#frmCSVImport").on("submit", function () {

        $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
                $("#response").addClass("error");
                $("#response").addClass("display-block");
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>
 <!-- End CSV -->

<!-- Example Tab -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    EXAMPLE TAB
                </h2>

            </div>
            <div class="body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" data-toggle="tab">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="info-box bg-pink hover-expand-effect">
                                        <div class="icon ">
                                            <i class="material-icons">face</i>
                                        </div>
                                        <div class="content">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text">Dean</div>
                                                <div class="number count-to" data-from="0" data-to="<?php 
                                                        $sql = "SELECT role, COUNT(*) as rolecount FROM users GROUP BY role;";
                                                        $counts = mysqli_query($connection,$sql);
                                                        $row = mysqli_fetch_assoc($counts);
                                                        echo $row['rolecount'];?>" data-speed="1000" data-fresh-interval="20">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#profile" data-toggle="tab">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="info-box bg-red hover-expand-effect">
                                        <div class="icon ">
                                            <i class="material-icons">face</i>
                                        </div>
                                        <div class="content">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text">Teacher</div>
                                                <div class="number count-to" data-from="0" data-to="<?php 
                                                    #$sql = "SELECT COUNT(`id`) FROM `users` WHERE `role` = \'student\'";
                                                    $sql = "SELECT COUNT(`id`) AS COUNT FROM `users` WHERE `role` = 'teacher' ";
                                                    $counts = mysqli_query($connection,$sql);
                                                    $row = mysqli_fetch_assoc($counts);
                                                    echo $row['COUNT'];?>" data-speed="1000" data-fresh-interval="20">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#messages" data-toggle="tab">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="info-box bg-cyan hover-expand-effect">
                                        <div class="icon ">
                                            <i class="material-icons">face</i>
                                        </div>
                                        <div class="content">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text">Student</div>
                                                <div class="number count-to" data-from="0" data-to="<?php 
                                                        #$sql = "SELECT COUNT(`id`) FROM `users` WHERE `role` = \'student\'";
                                                        $sql = "SELECT COUNT(`id`) AS COUNT FROM `users` WHERE `role` = 'student' ";
                                                        $counts = mysqli_query($connection,$sql);
                                                        $row = mysqli_fetch_assoc($counts);
                                                        echo $row['COUNT'];?>" data-speed="1000" data-fresh-interval="20">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li role="presentation">
                        <a href="#settings" data-toggle="tab">
                            <div class="row clearfix">    
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="info-box bg-light-green hover-expand-effect">
                                        <div class="icon ">
                                            <i class="material-icons">face</i>
                                        </div>
                                        <div class="content">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text">Chair Person</div>
                                                <div class="number count-to" data-from="0" data-to="<?php 
                                                        #$sql = "SELECT COUNT(`id`) FROM `users` WHERE `role` = \'student\'";
                                                        // $sql = "SELECT COUNT(`id`) AS COUNT FROM `users` WHERE `department` != '' ";
                                                        // $counts = mysqli_query($connection,$sql);
                                                        // $row = mysqli_fetch_assoc($counts);
                                                        // echo $row['COUNT'];
                                                        $sql = "SELECT COUNT(`id`) AS COUNT FROM `users` WHERE `role` = 'Chair Person' ";
                                                        $counts = mysqli_query($connection,$sql);
                                                        $row = mysqli_fetch_assoc($counts);
                                                        echo $row['COUNT'];?>" data-speed="1000" data-fresh-interval="20">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                            <!-- Tab panes -->
                <div class="tab-content">
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
<!-- ---------------------------------------------------------------------------------------------------------------------- -->

                        <?php
                            $status = "";
                            if(isset($_POST['add'])){
                                $user = $_POST['username'];
                                mysqli_query($connection,"DELETE FROM users WHERE identitynumber ='".$_POST['identitynumber']."'");
                                $query = "SELECT * FROM `users` WHERE username ='$user'";
                                $add = "INSERT INTO `users`(`identitynumber`, `username`, `name`, `lastname`, `password`, `role`, `status`) VALUES ('". $_POST['identitynumber']."','". $_POST['username']."','". $_POST['name']."','". $_POST['lastname']."','". $_POST['password']."','". $_POST['role']."','". $_POST['status']."')";
                                mysqli_query($connection,$add);
                                }
                                else{

                                }
                                // if(mysqli_num_rows($query) > 0){
                                //     echo "username already exist";
                                // }else{
                                //     $update ="INSERT INTO `users`(`identitynumber`, `username`, `name`, `lastname`, `password`, `role`, `status`) VALUES ('". $_POST['identitynumber']."','". $_POST['username']."','". $_POST['name']."','". $_POST['lastname']."','". $_POST['password']."','". $_POST['role']."','". $_POST['status']."')";
                                //      header("Location: http://localhost/tes/pages/dean/dean.php");
                                // }
                                // mysqli_query($connection,$update) or die(mysqli_error());
                                // header("Location: http://localhost/tes/pages/dean/dean.php");
                        ?>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<!-- Basic Validation -->
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Dean</h2>
                                    </div>

                                    <div class="body">
                                        <form id="form_validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                            <div class="form-group form-float">
                                                 <div class="form-line">
                                                    <input type="text" class="form-control" name="identitynumber" required>
                                                    <label class="form-label">identitynumber</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="username" required>
                                                    <label class="form-label">username</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="name" required>
                                                    <label class="form-label">name</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="lastname" required>
                                                    <label class="form-label">lastname</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="password" name="password" required>
                                                    <label class="form-label">Password</label>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <i class="material-icons" onclick="myFunction()" >remove_red_eye</i>
                                                        <script>
                                                            function myFunction() {
                                                                  var x = document.getElementById("password");
                                                                  if (x.type === "password") {
                                                                    x.type = "text";
                                                                  } else {
                                                                    x.type = "password";
                                                                  }
                                                               }
                                                        </script>
                                                    </div> 
                                               </div>
                                           </div>
                                            <input type="text" class="form-control invisible" name="role" value="Dean">
                                            <button name="add" class="btn btn-primary m-t-15 waves-effect">ADD</button>
                                            <input type="text" class="form-control invisible" name="status" value="active">
                                       </form>
                                   </div>
                               </div>
                           </div>
<!-- #END# Basic Validation -->
<!-- ------------------------------------------------------------------------------------------------- -->  
<!-- File Upload | Drag & Drop OR With Click & Choose -->
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                CSV FILE UPLOAD
                                            </h2>
                                                <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?>
                                                </div>                                    
                                          </div>
                                        <div class="body">
                                            <form action="" class="dropzone" name="frmCSVImport" id="frmCSVImport" method="post" enctype="multipart/form-data">
                                                <div class="fallback">
                                                     <input name="file" type="file" multiple />
                                                </div>
                                                <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
<!-- ------------------------------------------------------------------------------------------------- -->
                        <div class="row clearfix">  
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
                                                $id = $_SESSION['id'];
                                                $sql  = "SELECT * FROM users where role = 'dean'";
                                                $res = mysqli_query($connection,$sql);
                                             ?>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>username</th>
                                                        <th>name</th>
                                                        <th>lastname</th>
                                                        <th>status</th>
                                                        <th>Update</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                     while($row = mysqli_fetch_assoc($res)){
                                                     ?>
                                                    <tr> 
                                                        <td><?php  echo $row['identitynumber']; ?></td>
                                                        <td><?php  echo $row['username']; ?></td>
                                                        <td><?php  echo $row['name']; ?></td>
                                                        <td><?php  echo $row['lastname']; ?></td>
                                                        <td><?php  echo $row['status']; ?></td>
                                                        <td><a href="">edit</a></td>
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
                </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
                    <div role="tabpanel" class="tab-pane fade in" id="profile">
<!-- ---------------------------------------------------------------------------------------------------------------------- -->

                        <?php
                            $status = "";
                            if(isset($_POST['add1'])){
                                $update ="INSERT INTO `users`(`identitynumber`, `username`, `name`, `lastname`, `password`, `role`, `status`) VALUES ('". $_POST['identitynumber']."','". $_POST['username']."','". $_POST['name']."','". $_POST['lastname']."','". $_POST['password']."','". $_POST['role']."','". $_POST['status']."')";

                                mysqli_query($connection,$update) or die(mysqli_error());
                                $status = "Record add Successfully. </br>";
                                echo '<center><p style="color:#FF0000;">'.$status.'</p><center>';
                                header("Location: http://localhost/tes/pages/dean/dean.php");

                            }
                        ?>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<!-- Basic Validation -->
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Teacher</h2>
                                    </div>

                                    <div class="body">
                                        <form id="form_validation" action="" method="POST">
                                            <div class="form-group form-float">
                                                 <div class="form-line">
                                                    <input type="text" class="form-control" name="identitynumber" required>
                                                    <label class="form-label">identitynumber</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="username" required>
                                                    <label class="form-label">username</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="name" required>
                                                    <label class="form-label">name</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="lastname" required>
                                                    <label class="form-label">lastname</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="password1" name="password" required>
                                                    <label class="form-label">Password</label>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <i class="material-icons" onclick="myFunctions()" >remove_red_eye</i>
                                                        <script>
                                                            function myFunctions() {
                                                                  var x = document.getElementById("password1");
                                                                  if (x.type === "password") {
                                                                    x.type = "text";
                                                                  } else {
                                                                    x.type = "password";
                                                                  }
                                                               }
                                                        </script>
                                                    </div> 
                                               </div>
                                           </div>
                                            <input type="text" class="form-control invisible" name="role" value="Teacher">
                                            <button name="add1" class="btn btn-primary m-t-15 waves-effect">ADD</button>
                                            <input type="text" class="form-control invisible" name="status" value="active">
                                       </form>
                                   </div>
                               </div>
                           </div>
<!-- #END# Basic Validation -->
<!-- ------------------------------------------------------------------------------------------------- -->  
<!-- File Upload | Drag & Drop OR With Click & Choose -->
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                CSV FILE UPLOAD
                                            </h2>
                                                <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?>
                                                </div>                                    
                                          </div>
                                        <div class="body">
                                            <form action="" class="dropzone" name="frmCSVImport" id="frmCSVImport" method="post" enctype="multipart/form-data">
                                                <div class="fallback">
                                                     <input name="file" type="file" multiple />
                                                </div>
                                                <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
<!-- ------------------------------------------------------------------------------------------------- -->
                        <div class="row clearfix">  
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
                                                $id = $_SESSION['id'];
                                                $sql  = "SELECT * FROM users where role = 'teacher'";
                                                $res = mysqli_query($connection,$sql);
                                             ?>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>username</th>
                                                        <th>name</th>
                                                        <th>lastname</th>
                                                        <th>status</th>
                                                        <th>Update</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        while($row = mysqli_fetch_assoc($res)){
                                                     ?>
                                                    <tr> 
                                                        <td><?php  echo $row['identitynumber']; ?></td>
                                                        <td><?php  echo $row['username']; ?></td>
                                                        <td><?php  echo $row['name']; ?></td>
                                                        <td><?php  echo $row['lastname']; ?></td>
                                                        <td><?php  echo $row['status']; ?></td>
                                                        <td><a href="">edit</a></td>
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
                </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
                    <div role="tabpanel" class="tab-pane fade in" id="messages">
<!-- ---------------------------------------------------------------------------------------------------------------------- -->

                        <?php
                            $status = "";
                            if(isset($_POST['add2'])){
                                $update ="INSERT INTO `users`(`identitynumber`, `username`, `name`, `lastname`, `password`, `role`, `status`) VALUES ('". $_POST['identitynumber']."','". $_POST['username']."','". $_POST['name']."','". $_POST['lastname']."','". $_POST['password']."','". $_POST['role']."','". $_POST['status']."')";

                                mysqli_query($connection,$update) or die(mysqli_error());
                                $status = "Record add Successfully. </br>";
                                echo '<center><p style="color:#FF0000;">'.$status.'</p><center>';
                                header("Location: http://localhost/tes/pages/dean/dean.php");
                            }
                        ?>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<!-- Basic Validation -->
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Student</h2>
                                    </div>

                                    <div class="body">
                                        <form id="form_validation" action="" method="POST">
                                            <div class="form-group form-float">
                                                 <div class="form-line">
                                                    <input type="text" class="form-control" name="identitynumber" required>
                                                    <label class="form-label">identitynumber</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="username" required>
                                                    <label class="form-label">username</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="name" required>
                                                    <label class="form-label">name</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="lastname" required>
                                                    <label class="form-label">lastname</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="passworda" name="password" required>
                                                    <label class="form-label">Password</label>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <i class="material-icons" onclick="myFunctiona()" >remove_red_eye</i>
                                                        <script>
                                                            function myFunctiona() {
                                                                  var x = document.getElementById("passworda");
                                                                  if (x.type === "password") {
                                                                    x.type = "text";
                                                                  } else {
                                                                    x.type = "password";
                                                                  }
                                                               }
                                                        </script>
                                                    </div> 
                                               </div>
                                           </div>
                                            <input type="text" class="form-control invisible" name="role" value="Student">
                                            <button name="add2" class="btn btn-primary m-t-15 waves-effect">ADD</button>
                                            <input type="text" class="form-control invisible" name="status" value="active">
                                       </form>
                                   </div>
                               </div>
                           </div>
<!-- #END# Basic Validation -->
<!-- ------------------------------------------------------------------------------------------------- -->  
<!-- File Upload | Drag & Drop OR With Click & Choose -->
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                CSV FILE UPLOAD
                                            </h2>
                                                <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?>
                                                </div>                                    
                                          </div>
                                        <div class="body">
                                            <form action="" class="dropzone" name="frmCSVImport" id="frmCSVImport" method="post" enctype="multipart/form-data">
                                                <div class="fallback">
                                                     <input name="file" type="file" multiple />
                                                </div>
                                                <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
<!-- ------------------------------------------------------------------------------------------------- -->
                        <div class="row clearfix">  
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
                                                $id = $_SESSION['id'];
                                                $sql  = "SELECT * FROM users where role = 'Student'";
                                                $res = mysqli_query($connection,$sql);
                                             ?>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>username</th>
                                                        <th>name</th>
                                                        <th>lastname</th>
                                                        <th>status</th>
                                                        <th>Update</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                     while($row = mysqli_fetch_assoc($res)){
                                                     ?>
                                                    <tr> 
                                                        <td><?php  echo $row['identitynumber']; ?></td>
                                                        <td><?php  echo $row['username']; ?></td>
                                                        <td><?php  echo $row['name']; ?></td>
                                                        <td><?php  echo $row['lastname']; ?></td>
                                                        <td><?php  echo $row['status']; ?></td>
                                                        <td><a href="">edit</a></td>
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
                </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
                    <div role="tabpanel" class="tab-pane fade in" id="settings">
<!-- ---------------------------------------------------------------------------------------------------------------------- -->

                        <?php
                            $status = "";
                            if(isset($_POST['add3'])){
                                $update ="INSERT INTO `users`(`identitynumber`, `username`, `name`, `lastname`, `password`, `role`, `status`) VALUES ('". $_POST['identitynumber']."','". $_POST['username']."','". $_POST['name']."','". $_POST['lastname']."','". $_POST['password']."','". $_POST['role']."','". $_POST['status']."')";

                                mysqli_query($connection,$update) or die(mysqli_error());
                                $status = "Record add Successfully. </br>";
                                echo '<center><p style="color:#FF0000;">'.$status.'</p><center>';
                                header("Location: http://localhost/tes/pages/dean/dean.php");
                            }
                        ?>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<!-- Basic Validation -->
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Chair Person</h2>
                                    </div>

                                    <div class="body">
                                        <form id="form_validation" action="" method="POST">
                                            <div class="form-group form-float">
                                                 <div class="form-line">
                                                    <input type="text" class="form-control" name="identitynumber" required>
                                                    <label class="form-label">identitynumber</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="username" required>
                                                    <label class="form-label">username</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="name" required>
                                                    <label class="form-label">name</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="lastname" required>
                                                    <label class="form-label">lastname</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="password4" name="password" required>
                                                    <label class="form-label">Password</label>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <i class="material-icons" onclick="myFunction4()" >remove_red_eye</i>
                                                        <script>
                                                            function myFunction4() {
                                                                  var x = document.getElementById("password4");
                                                                  if (x.type === "password") {
                                                                    x.type = "text";
                                                                  } else {
                                                                    x.type = "password";
                                                                  }
                                                               }
                                                        </script>
                                                    </div> 
                                               </div>
                                           </div>
                                            <input type="text" class="form-control invisible" name="role" value="Chair Person">
                                            <button name="add3" class="btn btn-primary m-t-15 waves-effect">ADD</button>
                                            <input type="text" class="form-control invisible" name="status" value="active">
                                       </form>
                                   </div>
                               </div>
                           </div>
<!-- #END# Basic Validation -->
<!-- ------------------------------------------------------------------------------------------------- -->  
<!-- File Upload | Drag & Drop OR With Click & Choose -->
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                CSV FILE UPLOAD
                                            </h2>
                                                <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?>
                                                </div>                                    
                                          </div>
                                        <div class="body">
                                            <form action="" class="dropzone" name="frmCSVImport" id="frmCSVImport" method="post" enctype="multipart/form-data">
                                                <div class="fallback">
                                                     <input name="file" type="file" multiple />
                                                </div>
                                                <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
<!-- ------------------------------------------------------------------------------------------------- -->
                        <div class="row clearfix">  
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
                                                $id = $_SESSION['id'];
                                                $sql  = "SELECT * FROM users where role = 'Chair Person'";
                                                $res = mysqli_query($connection,$sql);
                                             ?>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>username</th>
                                                        <th>name</th>
                                                        <th>lastname</th>
                                                        <th>status</th>
                                                        <th>Update</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                     while($row = mysqli_fetch_assoc($res)){
                                                     ?>
                                                    <tr> 
                                                        <td><?php  echo $row['identitynumber']; ?></td>
                                                        <td><?php  echo $row['username']; ?></td>
                                                        <td><?php  echo $row['name']; ?></td>
                                                        <td><?php  echo $row['lastname']; ?></td>
                                                        <td><?php  echo $row['status']; ?></td>
                                                        <td><a href="">edit</a></td>
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
                </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- #END# Example Tab -->
<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>