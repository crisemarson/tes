<html lang="en">
<?php
include('config.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evaluation System Login Page</title>
    <!-- <link rel="stylesheet" href="include/style.css"> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="include/css/materialize.min.css">
     <!-- Compiled and minified CSS -->
  <script type="text/javascript" src="include/js/jquery-3.4.1.min.js"></script>
  <script src="include/js/materialize.js"></script>
  
    <!-- Compiled and minified JavaScript -->
    <script>
    // se;ect
        $(document).ready(function(){
        $('select').not('.disabled').formSelect();
        });
    </script>
</head>
<body>
<div class="container">
<!-- FORM -->
<div class="row">
<form method="POST">
    <div class="col s6 offset-s3">
      <div class="card">
        <!-- <div class="card-image">
          <img src="include/images/logo.png" height="20%" width="10">
          <span class="card-title">Card Title</span>
        </div> -->
        <div class="card-content card-panel hoverable">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="username" required>
                    <label for="">User ID</label>
                    </div>
                </div>  
                <div class="row">
                  <div class="input-field col s12">
                  <i class="material-icons prefix">lock</i>
                  <input type="password" name="password" required>
                  <label for="">Password</label>
                  </div>
                </div>  
                <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">group</i>
                          <select name="userType" required>
                              <option value="1">Admin</option>
                              <option value="2">Faculty</option>
                              <option value="3">Student</option>
                          </select>
                </div>
                  <div class="input-field col s6">
                    <button class="btn waves-effect waves-teal btn-flat" type="submit" name="signIn">LOGIN
                          <i class="material-icons right">send</i>
                    </button>
                  </div>
                </div>
              </div> 
             </div>
           </div>
        </form>
    </div>
  </div>  

</body>
</html>








<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

    $usertype = $_POST['userType'];
    if($usertype==1){
        $query = $mysqli->query("SELECT * FROM admin WHERE fid='$username' AND password='$password'") or die($mysqli->error);
        $row = $query->fetch_array();
        $user = $row['fid'];
        $pass = $row['password'];
        $role = $row['role_id'];
      if(!empty($username)){
          if($user==$username && $pass==$password){
              SESSION_START();
              $_SESSION['username']=$user;
              $_SESSION['role_id']=$role;
              ?>
              <script>window.location.href='admin/index.php'</script>
              <?php
            }else{
              echo "<script>M.toast({html: 'You entered an invalid account!'})</script>";
          }
      }
    }
    if($usertype==2){
        $query = $mysqli->query("SELECT * FROM teachers WHERE tid='$username' AND password='$password'") or die($mysqli->error);
        $row = $query->fetch_array();
        $user = $row['tid'];
        $pass = $row['password'];
        $role = $row['role_id'];
      if(!empty($username)){
          if($user==$username && $pass==$password){
              SESSION_START();
              $_SESSION['username']=$user;
              $_SESSION['role_id']=$role;
              ?>
              <script>window.location.href='faculty/index.php'</script>
              <?php
            }else{
              echo "<script>M.toast({html: 'You entered an invalid account!'})</script>";
          }
      }
    }
    if($usertype==3){
        $query = $mysqli->query("SELECT * FROM students WHERE sid='$username' AND password='$password'") or die($mysqli->error);
        $row = $query->fetch_array();
        $user = $row['sid'];
        $pass = $row['password'];
        $role = $row['role_id'];
        $name = $row['username'];
        $course = $row['course'];
      if(!empty($username)){
          if($user==$username && $pass==$password){
              SESSION_START();
              $_SESSION['username']=$user;
              $_SESSION['role_id']=$role;
              $_SESSION['firstname']=$name;
              $_SESSION['course']=$course;
              ?>
              <script>window.location.href='students/index.php'</script>
              <?php
            }else{
              echo "<script>M.toast({html: 'You entered an invalid account!'})</script>";
          }
      }
    }
  }
?>