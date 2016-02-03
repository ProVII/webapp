<?php

$target_file = $_POST['target_file'];
$imageFileType = $_POST['image_file_type'];
$filename = $_POST['filename'];

if ($imageFileType == "jpg" || $imageFileType == "jpeg") {
    switch (buttonPressed()) {
        case 'grayscale' :
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagejpeg($image, 'uploads/img_filter_grayscale_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_grayscale_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_grayscale_' . $filename .' />
            </form></center>';
            break;

        case 'edgedetect' :
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_EDGEDETECT);
            imagejpeg($image, 'uploads/img_filter_edgedetect_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_edgedetect_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_edgedetect_' . $filename .' />
            </form></center>';
            break;

        case 'emboss' :
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_EMBOSS);
            imagejpeg($image, 'uploads/img_filter_emboss_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_emboss_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_emboss_' . $filename .' />
            </form></center>';
            break;

        case 'mean_removal' :
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_MEAN_REMOVAL);
            imagejpeg($image, 'uploads/img_filter_mean_removal_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_mean_removal_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_mean_removal_' . $filename .' />
            </form></center>';
            break;

        case 'negate' :
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_NEGATE);
            imagejpeg($image, 'uploads/img_filter_negate_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_negate_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_negate_' . $filename .' />
            </form></center>';
            break;

        case 'sepia' :
            $image = imagecreatefromjpeg($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
            imagejpeg($image, 'uploads/sepia_100_50_0_' . $filename);
            imagedestroy($image);
            checkImage('uploads/sepia_100_50_0_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/sepia_100_50_0_' . $filename .' />
            </form></center>';
            break;

        default :
            checkImage($target_file);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            </form></center>';
            break;
    }
} else if ($imageFileType == "png") {
    switch (buttonPressed()) {
        case 'grayscale' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagepng($image, 'uploads/img_filter_grayscale_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_grayscale_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_grayscale_' . $filename .' />
            </form></center>';
            break;

        case 'edgedetect' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_EDGEDETECT);
            imagepng($image, 'uploads/img_filter_edgedetect_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_edgedetect_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_edgedetect_' . $filename .' />
            </form></center>';
            break;

        case 'emboss' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_EMBOSS);
            imagepng($image, 'uploads/img_filter_emboss_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_emboss_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_emboss_' . $filename .' />
            </form></center>';
            break;

        case 'mean_removal' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_MEAN_REMOVAL);
            imagepng($image, 'uploads/img_filter_mean_removal_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_mean_removal_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_mean_removal_' . $filename .' />
            </form></center>';
            break;

        case 'negate' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_NEGATE);
            imagepng($image, 'uploads/img_filter_negate_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_negate_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_negate_' . $filename .' />
            </form></center>';
            break;

        case 'sepia' :
            $image = imagecreatefrompng($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
            imagepng($image, 'uploads/sepia_100_50_0_' . $filename);
            imagedestroy($image);
            checkImage('uploads/sepia_100_50_0_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/sepia_100_50_0_' . $filename .' />
            </form></center>';
            break;

        default :
            checkImage($target_file);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            </form></center>';
            break;
    }
} else if ($imageFileType == "gif") {
    switch (buttonPressed()) {
        case 'grayscale' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagegif($image, 'uploads/img_filter_grayscale_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_grayscale_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_grayscale_' . $filename .' />
            </form></center>';
            break;

        case 'edgedetect' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_EDGEDETECT);
            imagegif($image, 'uploads/img_filter_edgedetect_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_edgedetect_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_edgedetect_' . $filename .' />
            </form></center>';
            break;

        case 'emboss' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_EMBOSS);
            imagegif($image, 'uploads/img_filter_emboss_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_emboss_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_emboss_' . $filename .' />
            </form></center>';
            break;

        case 'mean_removal' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_MEAN_REMOVAL);
            imagegif($image, 'uploads/img_filter_mean_removal_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_mean_removal_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_mean_removal_' . $filename .' />
            </form></center>';
            break;

        case 'negate' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_NEGATE);
            imagegif($image, 'uploads/img_filter_negate_' . $filename);
            imagedestroy($image);
            checkImage('uploads/img_filter_negate_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/img_filter_negate_' . $filename .' />
            </form></center>';
            break;

        case 'sepia' :
            $image = imagecreatefromgif($target_file);
            imagefilter($image, IMG_FILTER_GRAYSCALE);
            imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
            imagegif($image, 'uploads/sepia_100_50_0_' . $filename);
            imagedestroy($image);
            checkImage('uploads/sepia_100_50_0_' . $filename);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            <input type="hidden" name="image_file" value=uploads/sepia_100_50_0_' . $filename .' />
            </form></center>';
            break;

        default :
            checkImage($target_file);
            echo '<br><center><form action="upload.php" method="POST">
            <input type="submit" name="try_another_filter" value="Try Another Filter" />
            </form></center>';
            break;
    }
}

list($width_original, $height_original) = getimagesize($target_file);

// Prints out the correct size of the image
function checkImage($target_file) {
    global $width_original, $height_original;
    if ($width_original > 1024 && $height_original > 768) {
        $width = 1024;
        $height = 768;
        printImage($width, $height, $target_file);
    } else if ($width_original > 1024 && $height_original <= 768) {
        $width = 1024;
        printImage($width, $height_original, $target_file);
    } else {
        $height = 768;
        printImage($width_original, $height, $target_file);
    }
}

// Prints out the image
function printImage($width, $height, $target_file) {
    global $width_original, $height_original;

    echo "<br><br><br><center>
    <img src= \"$target_file\" alt=\"image\" width=\"$width\" 
    height=\"$height\" style=\"cursor:pointer;cursor:hand\" 
    onclick=\"this.src='$target_file'; this.height='$height_original'; 
    this.width='$width_original'\" ondblclick=\"this.src='$target_file';
    this.height='$height';this.width='$width'\" /></center>";
}

// Checks which button is pressed.
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