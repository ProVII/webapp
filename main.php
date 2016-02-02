<?php
session_start();
if (isset($_SESSION['username'])) {
    echo 'Welcome, ' . $_SESSION['username'];

    if (isset($_POST["try_another_image"])) {
        $target_file = $_POST['target_file'];
        unlink($target_file);
    }
} else {
    echo 'Please log in to view this page.';
    die();
}
?>

<br>
<br>
<form action="upload.php" method="post" enctype="multipart/form-data">
	Select an image to upload:
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
</form>

<br>
<br>
<br>
<form action="logout.php" method="POST">
	<input type="submit" value="Logout" required />
</form>