<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br><br>
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php
if(isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Select image to upload: Choose file";
        echo "<br>";
        echo $_FILES["fileToUpload"]["name"] . " : Upload Image";
        echo "<br>";
        echo "File is an image: " . $check["mime"] . ".";
    } else {
        echo "File is not an image.";
    }
}
?>
