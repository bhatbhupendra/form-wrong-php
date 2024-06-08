<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $target_location = $target_dir . basename($_FILES["document"]["name"]);
    echo $target_location;
    if(isset($_POST["submit"])) {
        move_uploaded_file($_FILES["document"]["tmp_name"], $target_location);
        print("Thank you. Your file is uploaded.");
    }
}
?>
<form method="POST" enctype="multipart/form-data">
Select document to upload (only pdf are allowed): <input type="file" name="document">
<input type="submit" value="Upload Document" name="submit">
</form>
