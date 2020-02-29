<?php 
date_default_timezone_set('Asia/Manila');


$connection = mysqli_connect("localhost", "root", "", "emarson");

if(!$connection) {
         
    echo "unable to conenct";
    
 
  }
?>