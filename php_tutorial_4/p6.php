<!-- 6)Write a PHP code that allows you to upload a PDF file of size less than 100Kb and move the uploaded file to any folder. -->
<form action="" method="post" enctype="multipart/form-data">
    <h6>Select only pdf files that are less than 100KB</h6>
    <input type="file" name="file" id="" required>
    <input type="submit" value="submit " name="btn">
</form>
<?php 
    if(isset($_POST['btn'])){
        if(isset($_FILES['file'])){
            if($_FILES['file']['type'] == 'application/pdf' && $_FILES['file']['size']<100000){
                move_uploaded_file($_FILES['file']['tmp_name'],'uploaded/'.$_FILES['file']['name']);
                echo "Pdf file uploaded successfully";
            }
            else{
                echo "select only pdf files that are less than 100KB";
            }
        }
    }
?>