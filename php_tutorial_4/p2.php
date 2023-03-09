<!--2) Write php code to upload a file and save that file in a folder call uploaded. -->
<form action="" method="post" enctype="multipart/form-data"> 
    select a file : 
    <input type="file" name="fn" id="" required>
    <input type="submit" value="Upload" name="btn">
</form>
<?php
    if(isset($_POST['btn'])){
        if(isset($_FILES['fn'])){
            move_uploaded_file($_FILES['fn']['tmp_name'],'uploaded/'.$_FILES['fn']['name']);
            echo "File uploaded successfully";
        }
    }
?>