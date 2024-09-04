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
    echo("Please enter the News Content");
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
    if (isset($_FILES["main"]) && isset($_FILES["second"]) && isset($_FILES["third"])) {

        // Allowed image extensions
        $allowed_img_extensions = ["image/jpg", "image/jpeg", "image/png", "image/svg+xml"];
        $paths = [];

        foreach (['main', 'second', 'third'] as $file) {
            $file_info = $_FILES[$file];
            $file_extension = $file_info["type"];

            if (in_array($file_extension, $allowed_img_extensions)) {
                $new_img_extension = match ($file_extension) {
                    "image/jpg" => ".jpg",
                    "image/jpeg" => ".jpeg",
                    "image/png" => ".png",
                    "image/svg+xml" => ".svg",
                };

                $path = "web/news-image/" . uniqid() . $new_img_extension;
                if (move_uploaded_file($file_info["tmp_name"], $path)) {
                    $paths[] = $path;
                } else {
                    echo("Failed to upload file: " . $file_info["name"]);
                    return;
                }
            } else {
                echo("Unsupported image format for $file.");
                return;
            }
        }

        // Get current time
        $time = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $time->setTimezone($tz);
        $NewTime = $time->format("H:i:s");

        // Combine the manually entered date with the current time
        $dateTime = $date . ' ' . $NewTime;

        // SQL Insert Query with Corrected Syntax
        $insert_query = "INSERT INTO `news` (`header`, `header_sin`, `header_ta`, `content`, `content_sin`, `content_ta`, `main-img`, `img2`, `img3`, `date`,`status_id`) 
                        VALUES ('$title', '$titleSi', '$titleTa', '$content', '$contentSi', '$contentTa', '".$paths[0]."', '".$paths[1]."', '".$paths[2]."', '$dateTime','1')";

        $result = Database::iud($insert_query);

        if ($result === false) {
            die("Error in insertion: " . Database::$connection->error);
        } else {
            echo("success");
        }
    } else {
        echo("Please select all required product images.");
        return;
    }
}
}else{
    header("location:../index.php");
}

?>
