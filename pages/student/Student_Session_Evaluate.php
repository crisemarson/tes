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
            <!-- Modal Size Example -->
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
    <?php 
        $sql  = "SELECT * FROM session";
        $res = mysqli_query($connection,$sql);

         $sqli  = "SELECT `session`.`subject`, `teacheraddsubject`.`subjects`, `teacheraddsubject`.`identitynumber` FROM `session`, `teacheraddsubject` WHERE `teacheraddsubject`.`identitynumber` = '".$_SESSION['identitynumber']."'";
        $result = mysqli_query($connection,$sqli);

        while($rows = mysqli_fetch_assoc($result)){

            // echo $rows['subjects'];
            // echo "<br>";  
            // echo $rows['subject'];
            // echo "<br>";  
            echo print_r($rows);
          
        }
          
             ?>


            
            
<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
                </div>
            </div>
            

 

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>