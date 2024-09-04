<?php
session_start();
if(isset($_SESSION["a"])){
include "dist/config/connection.php";  // Include the Database class

// Ensure the database connection is set up
Database::setupConnection();

// Sanitize and validate inputs

$id = mysqli_real_escape_string(Database::$connection, trim($_POST["id"]));


if (isset($_FILES["image"])) {
    $image = $_FILES["image"];

    // Retrieve current image path from the database
    $current_images_query = Database::search("SELECT `path` FROM `about_img` WHERE `id`='" . $id . "'");
    $current_images = mysqli_fetch_assoc($current_images_query);

    // Allowed image extensions
    $allowed_image_extensions = ["image/jpg", "image/jpeg", "image/png", "image/svg+xml"];
    $file_ex = $image["type"];

    if (!in_array($file_ex, $allowed_image_extensions)) {
        echo("Please select a valid image.");
    } else {
        $new_file_extension = match ($file_ex) {
            "image/jpg" => ".jpg",
            "image/jpeg" => ".jpeg",
            "image/png" => ".png",
            "image/svg+xml" => ".svg",
            default => "",
        };

        $file_name = "web/about/" . uniqid() . $new_file_extension;

        if (move_uploaded_file($image["tmp_name"], $file_name)) {
            // Delete old image
            if (!empty($current_images['path'])) {
                unlink($current_images['path']);
            }
            $d = new DateTime();
            $tz = new DateTimeZone("Asia/Colombo");
            $d->setTimezone($tz);
            $date = $d->format("Y-m-d H:i:s");
            // Update image path in the database
            Database::iud("UPDATE `about_img` SET `path` = '".$file_name."' ,`date` = '".$date."' WHERE `id` = '".$id."'");

            echo("success");
        } else {
            echo "Failed to upload file: " . $image["name"];
            return;
        }
    }
}
}else{
    header("location:../index.php");
}
?>
