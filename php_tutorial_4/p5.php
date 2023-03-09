<!-- 5)Write a PHP code that allows users to upload image files with jpeg extension and size less than or equal to 20Kb and move the uploaded files to any folder. -->
<form action="" method="post" enctype="multipart/form-data">
    <small>Upload only jpeg file and size should be less than 20KB</small>
    <br>
    select a file :
    <input type="file" name="file" id="" required>
    <button type="submit" name="submit">Upload</button>
</form>
<?php
    if(isset($_POST['submit'])){
        if(isset($_FILES['file'])){
            if($_FILES['file']['type'] == 'image/jpeg' && $_FILES['file']['size'] <=20000){
                move_uploaded_file($_FILES['file']['tmp_name'],'uploaded/'.$_FILES['file']['name']);
            }
            else{
                echo "Please select jpeg file and file size should be less than or equal to  20KB";
            }
        }
    }
?>