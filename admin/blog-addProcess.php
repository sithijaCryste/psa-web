<?php
session_start();
if(isset($_SESSION["a"])){
include "dist/config/connection.php";
Database::setupConnection();

// Sanitize input
$title = mysqli_real_escape_string(Database::$connection, trim($_POST["title"]));
$content = mysqli_real_escape_string(Database::$connection, trim($_POST["content"]));
$date = mysqli_real_escape_string(Database::$connection, trim($_POST["date"]));
$titleSi = mysqli_real_escape_string(Database::$connection, trim($_POST["titleSi"]));
$contentSi = mysqli_real_escape_string(Database::$connection, trim($_POST["contentSi"]));
$titleTa = mysqli_real_escape_string(Database::$connection, trim($_POST["titleTa"]));
$contentTa = mysqli_real_escape_string(Database::$connection, trim($_POST["contentTa"]));

// Validate input
if (empty($title)) {
    echo("Please enter the Product Name");
    return;
} elseif (strlen($title) >200) {
    echo("Title should be less than 200 characters");
    return;
} elseif (empty($content)) {
    echo("Please enter the Blog Content");
    return;
} elseif (empty($date)) {
    echo("Please enter the Date");
    return;
} elseif (empty($titleSi)) {
    echo("Please enter the Sinhala Title");
    return;
} elseif (empty($contentSi)) {
    echo("Please enter the Sinhala Content");
    return;
} elseif (empty($titleTa)) {
    echo("Please enter the Tamil Title");
    return;
} elseif (empty($contentTa)) {
    echo("Please enter the Tamil Content");
    return;
} else {

    // Check for image uploads
    if(isset($_FILES["image"])){
        $image = $_FILES["image"];

        $allowed_image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");
        $file_ex = $image["type"];

        if(!in_array($file_ex,$allowed_image_extentions)){
            echo("Please select a valid image.");
        }else{

            $new_file_extention;

            if($file_ex == "image/jpg"){
                $new_file_extention=".jpg";
            }else if($file_ex == "image/jpeg"){
                $new_file_extention=".jpeg";
            }else if($file_ex == "image/png"){
                $new_file_extention =".png";
            }else if($file_ex == "image/svg+xml"){
                $new_file_extention = ".svg";
            }

            $file_name = "web/blog/" .uniqid().$new_file_extention;

            move_uploaded_file($image["tmp_name"],$file_name);

            $time = new DateTime();
            $tz = new DateTimeZone("Asia/Colombo");
            $time->setTimezone($tz);
            $NewTime = $time->format("H:i:s");
        
            // Combine the manually entered date with the current time
            $dateTime = $date . ' ' . $NewTime;
            Database::iud("INSERT INTO `blog` (`title`,`title_tam`,`title_sin`,`content`,`content_tam`,`content_sin`,`path`,`date`) VALUES ('".$title."','".$titleTa."','".$titleSi."','".$content."','".$contentTa."','".$contentSi."','".$file_name."','".$dateTime."')");

            echo("success");

           
        }
        
       
    }else{
        echo("Please select blog images.");
    }
}
}else{
    header("location:../index.php");
}

?>
