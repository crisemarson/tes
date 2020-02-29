<!DOCTYPE html>
<html>
<head>
    <title>try</title>
</head>
<body>
   <?php
        if(isset($_FILES['userfile'])) {
            pre_r($_FILES);
            move_uploaded_file($_FILES['userfile']['tmp_name'],'../../docfiles/'.
                $_FILES['userfile']['name']);
        }
        function pre_r($array){
            echo "<pre>";
            print_r($array);
            echo "</pre>";
        }
?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="userfile">
        <input type="submit" name="" value="upload">
    </form>
</body>
</html>