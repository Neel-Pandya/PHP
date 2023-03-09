<!--1) Write php code to upload a file and display name, type and size of it. -->

<form action="" method="post" enctype="multipart/form-data">
    Select a file:
    <input type="file" name="fn" id="">
    <input type="submit" value="Submit" name="btn">
    <?php
    if (isset($_POST['btn'])) {
        if (isset($_FILES['fn'])) {
            $file_name = $_FILES['fn']['name'];
            $file_type = $_FILES['fn']['type'];
            $file_size = $_FILES['fn']['size'];
            move_uploaded_file($_FILES['fn']['tmp_name'], 'uploaded/' . $file_name);
            echo ('name of the file = ' . $file_name . "\n");
            echo ('Type of the file = ' . $file_type . "\n");
            echo ('Size of the file = ' . $file_size);
        }
    }

    ?>
</form>