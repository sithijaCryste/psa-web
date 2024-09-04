<?php
session_start();
if(isset($_SESSION["a"])){
include "dist/config/connection.php";
Database::setupConnection();

$nid = mysqli_real_escape_string(Database::$connection, trim($_POST["id"]));
$title = mysqli_real_escape_string(Database::$connection, trim($_POST["title"]));
$titleSi = mysqli_real_escape_string(Database::$connection, trim($_POST["titleSi"]));
$titleTa = mysqli_real_escape_string(Database::$connection, trim($_POST["titleTa"]));
$content = mysqli_real_escape_string(Database::$connection, trim($_POST["content"]));
$contentSi = mysqli_real_escape_string(Database::$connection, trim($_POST["contentSi"]));
$contentTa = mysqli_real_escape_string(Database::$connection, trim($_POST["contentTa"]));
$date = mysqli_real_escape_string(Database::$connection, trim($_POST["date"]));

if (empty($date)) {
    echo "Please enter the Date";
    return;
} else {
    $time = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $time->setTimezone($tz);
    $NewTime = $time->format("H:i:s");

    // Combine the manually entered date with the current time
    $dateTime = $date . ' ' . $NewTime;
    Database::iud("UPDATE `news` SET `header`='" . $title . "',`header_sin`='" . $titleSi . "',`header_ta`='" . $titleTa . "', `content` = '" . $content . "', `content_sin` = '" . $contentSi . "', `content_ta` = '" . $contentTa . "', `date` = '" . $dateTime . "' WHERE `id`='" . $nid . "'");
    
    // Retrieve current images from the database
    $current_images_query = Database::search("SELECT `main-img`, `img2`, `img3` FROM `news` WHERE `id`='" . $nid . "'");
    $current_images = mysqli_fetch_assoc($current_images_query);

    // Prepare paths array for updating images
    $paths = [
        'main-img' => $current_images['main-img'],
        'img2' => $current_images['img2'],
        'img3' => $current_images['img3']
    ];

    // Allowed image extensions
    $allowed_img_extensions = ["image/jpg", "image/jpeg", "image/png", "image/svg+xml"];

    // Handle image upload
    foreach (['main' => 'main-img', 'second' => 'img2', 'third' => 'img3'] as $file => $db_column) {
        if (isset($_FILES[$file])) {
            $file_info = $_FILES[$file];
            $file_extension = $file_info["type"];

            if (in_array($file_extension, $allowed_img_extensions)) {
                $new_img_extension = match ($file_extension) {
                    "image/jpg" => ".jpg",
                    "image/jpeg" => ".jpeg",
                    "image/png" => ".png",
                    "image/svg+xml" => ".svg",
                };

                $new_path = "web/news-image/" . uniqid() . $new_img_extension;
                if (move_uploaded_file($file_info["tmp_name"], $new_path)) {
                    // Delete old image
                    if (!empty($current_images[$db_column])) {
                        unlink($current_images[$db_column]);
                    }
                    // Update path
                    $paths[$db_column] = $new_path;
                } else {
                    echo "Failed to upload file: " . $file_info["name"];
                    return;
                }
            } else {
                echo "Unsupported image format for $file.";
                return;
            }
        }
    }

    // Update the database with new paths
    $update_query = "UPDATE `news` SET `main-img` = '" . $paths['main-img'] . "', `img2` = '" . $paths['img2'] . "', `img3` = '" . $paths['img3'] . "', `date` = '$dateTime' WHERE `id` = '" . $nid . "'";
    $result = Database::iud($update_query);

    if ($result === false) {
        die("Error in updating: " . Database::$connection->error);
    } else {
        echo "success";
    }
}

}else{
    header("location:../index.php");
}
?>
