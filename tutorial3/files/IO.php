<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Uploader</title>
</head>

<body>
    <h1>File Upload Form</h1>
    <p>Click the 'Choose File' button to select a file to upload.</p>
    <form method="post" action="IO.php" enctype="multipart/form-data">
        Choose File: <input type="file" name="file" size="10" />
        <input type="submit" value="Upload" />
    </form>

    <?php
        if ($_FILES['file']['type'] == "image/jpeg") {
            $name = $_FILES["file"]["name"];
            move_uploaded_file($_FILES["file"]["tmp_name"], "$name");
            echo "Uploaded image $name!<br> <img src='$name' alt='Error displaying img'/>";
        }
    ?>
</body>
</html>