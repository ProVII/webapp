<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if (isset($_POST["submit"]) && $_POST["submit"] != null) {
    $check = @getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image (or there was no file uploaded).";
        echo '<br><center>
        <form action="main.php" method="POST">
        <input type="submit" value="Try Another Image" required />
        </form></center>';
        $uploadOk = 0;
        die();
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file must be less than 5 MB.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo " Your file was not uploaded.";
    echo '<br><center>
	<form action="main.php" method="POST">
	<input type="submit" value="Try Another Image" required />
	</form></center>';
    die();
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

list($width_original, $height_original) = getimagesize($target_file);
// Ensure image size is not too large

if ($imageFileType == "jpg" || $imageFileType == "jpeg") {
    switch (buttonPressed()) {
        case 'grayscale' :
            echo buttonPressed();
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagejpeg($image, 'img_filter_grayscale' . basename($_FILES["fileToUpload"]["name"]) . '.jpg');
            imagedestroy($image);
            break;

        case 'edgedetect' :
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_EDGEDETECT);
            imagejpeg($image, 'img_filter_edgedetect' . basename($_FILES["fileToUpload"]["name"]) . '.jpg');
            imagedestroy($image);
            break;

        case 'emboss' :
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_EMBOSS);
            imagejpeg($image, 'img_filter_emboss' . basename($_FILES["fileToUpload"]["name"]) . '.jpg');
            imagedestroy($image);
            break;

        case 'mean_removal' :
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_MEAN_REMOVAL);
            imagejpeg($image, 'img_filter_mean_removal' . basename($_FILES["fileToUpload"]["name"]) . '.jpg');
            imagedestroy($image);
            break;

        case 'negate' :
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_NEGATE);
            imagejpeg($image, 'img_filter_negate' . basename($_FILES["fileToUpload"]["name"]) . '.jpg');
            imagedestroy($image);
            break;

        case 'sepia' :
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
            imagejpeg($image, 'sepia_100_50_0' . basename($_FILES["fileToUpload"]["name"]) . '.jpg');
            imagedestroy($image);
            break;

        default :
            echo '<br>' . buttonPressed();
            checkImage();
            break;
    }
} else if ($imageFileType == "png") {
    switch (buttonPressed()) {
        case 'grayscale' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagepng($image, 'img_filter_grayscale' . basename($_FILES["fileToUpload"]["name"]) . '.png');
            imagedestroy($image);
            break;

        case 'edgedetect' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_EDGEDETECT);
            imagepng($image, 'img_filter_edgedetect' . basename($_FILES["fileToUpload"]["name"]) . '.png');
            imagedestroy($image);
            break;

        case 'emboss' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_EMBOSS);
            imagepng($image, 'img_filter_emboss' . basename($_FILES["fileToUpload"]["name"]) . '.png');
            imagedestroy($image);
            break;

        case 'mean_removal' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_MEAN_REMOVAL);
            imagepng($image, 'img_filter_mean_removal' . basename($_FILES["fileToUpload"]["name"]) . '.png');
            imagedestroy($image);
            break;

        case 'negate' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_NEGATE);
            imagepng($image, 'img_filter_negate' . basename($_FILES["fileToUpload"]["name"]) . '.png');
            imagedestroy($image);
            break;

        case 'sepia' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
            imagepng($image, 'sepia_100_50_0' . basename($_FILES["fileToUpload"]["name"]) . '.png');
            imagedestroy($image);
            break;

        default :
            checkImage();
            break;
    }
} else if ($imageFileType == "gif") {
    switch (buttonPressed()) {
        case 'grayscale' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagegif($image, 'img_filter_grayscale' . basename($_FILES["fileToUpload"]["name"]) . '.gif');
            imagedestroy($image);
            break;

        case 'edgedetect' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_EDGEDETECT);
            imagegif($image, 'img_filter_edgedetect' . basename($_FILES["fileToUpload"]["name"]) . '.gif');
            imagedestroy($image);
            break;

        case 'emboss' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_EMBOSS);
            imagegif($image, 'img_filter_emboss' . basename($_FILES["fileToUpload"]["name"]) . '.gif');
            imagedestroy($image);
            break;

        case 'mean_removal' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_MEAN_REMOVAL);
            imagegif($image, 'img_filter_mean_removal' . basename($_FILES["fileToUpload"]["name"]) . '.gif');
            imagedestroy($image);
            break;

        case 'negate' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_NEGATE);
            imagegif($image, 'img_filter_negate' . basename($_FILES["fileToUpload"]["name"]) . '.gif');
            imagedestroy($image);
            break;

        case 'sepia' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
            imagegif($image, 'sepia_100_50_0' . basename($_FILES["fileToUpload"]["name"]) . '.gif');
            imagedestroy($image);
            break;

        default :
            checkImage();
            break;
    }
}

// Prints out the correct size of the image
function checkImage() {
    global $width_original, $height_original;
    if ($width_original > 1024 && $height_original > 768) {
        $width = 1024;
        $height = 768;
        printImage($width, $height);
    } else if ($width_original > 1024 && $height_original <= 768) {
        $width = 1024;
        printImage($width, $height_original);
    } else {
        $height = 768;
        printImage($width_original, $height);
    }
}

// Prints out the image
function printImage($width, $height) {
    global $width_original, $height_original, $target_file;

    echo "<br><br><br><center>
	<img src= \"$target_file\" alt=\"image\" width=\"$width\" 
	height=\"$height\" style=\"cursor:pointer;cursor:hand\" 
	onclick=\"this.src='$target_file'; this.height='$height_original'; 
	this.width='$width_original'\" ondblclick=\"this.src='$target_file';
	this.height='$height';this.width='$width'\" /></center>";
}

function buttonPressed() {
    if (isset($_POST["grayscale"])) {
        return 'grayscale';
    } else if (isset($_POST["edgedetect"])) {
        return 'edgedetect';
    } else if (isset($_POST["emboss"])) {
        return 'emboss';
    } else if (isset($_POST["mean_removal"])) {
        return 'mean_removal';
    } else if (isset($_POST["negate"])) {
        return 'negate';
    } else if (isset($_POST["sepia"])) {
        return 'sepia';
    } else {
        return 'not_found';
    }
}
?>
<script>
var button = document.getElementById("submit");

button.addEventListener("click" ajaxFunction, false);

var ajaxFunction = function () {
    echo buttonPressed();
    $image = imagecreatefromjpeg($target_file);
    imagefilter($image, IMG_FILTER_GRAYSCALE);
    imagejpeg($image, 'img_filter_grayscale'.basename($_FILES["fileToUpload"]["name"]).'.jpg');
    imagedestroy($image);
}
</script>

<br>
<br>
<center>
<input name "grayscale" type="button" id="submit" value="Grayscale" />
<input name "edgedetect" type="button" id="submit" value="EdgeDetect" />
<input name "emboss" type="button" id="submit" value="EMBOSS" />
<input name "mean_removal" type="button" id="submit" value="Mean Removal" />
<input name "negate" type="button" id="submit" value="Negate" />
<input name "sepia" type="button" id="submit" value="Sepia" />

<br><form action="main.php" method="POST">
<input type="submit" name="try_another_image" value="Try Another Image" />
<input type="hidden" name="target_file" value="<?php echo $target_file ?>">
</form></center>