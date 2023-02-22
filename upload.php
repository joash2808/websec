<!DOCTYPE html>
<html>
<head>
	<title>File Upload Form</title>
</head>
<body>
	<h1>File Upload Form</h1>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		Select file to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload File" name="submit">
	</form>
</body>
</html>

<?php
$target_dir = "uploads/";
$uploadOk = 1;

// Check if the upload form was submitted
if(isset($_POST["submit"])) {

    // Check if the file was uploaded without errors
    if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {

        // Check if the file has a valid extension
        $file_extension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
        if($file_extension != "php") {
            echo "Sorry, only PHP files are allowed.";
            $uploadOk = 0;
        }

        // Move the uploaded file to the uploads directory
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        if ($uploadOk && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Error uploading file. Please try again.";
        $uploadOk = 0;
    }
}
?>


