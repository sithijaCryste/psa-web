<?php
session_start();
if (isset($_SESSION["a"])) {
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
        Database::iud("UPDATE `blog` SET `title`='" . $title . "',`title_sin`='" . $titleSi . "',`title_tam`='" . $titleTa . "', `content` = '" . $content . "', `content_sin` = '" . $contentSi . "', `content_tam` = '" . $contentTa . "', `date` = '" . $dateTime . "' WHERE `id`='" . $nid . "'");
echo("update Success");
        // Retrieve current images from the database

        // Handle image upload
        if (isset($_FILES["image"])) {
            $image = $_FILES["image"];

            // Retrieve current image path from the database
            $current_images_query = Database::search("SELECT `path` FROM `blog` WHERE `id`='" . $nid . "'");
            $current_images = mysqli_fetch_assoc($current_images_query);

            // Allowed image extensions
            $allowed_image_extensions = ["image/jpg", "image/jpeg", "image/png", "image/svg+xml"];
            $file_ex = $image["type"];

            if (!in_array($file_ex, $allowed_image_extensions)) {
                echo ("Please select a valid image.");
            } else {
                $new_file_extension = match ($file_ex) {
                    "image/jpg" => ".jpg",
                    "image/jpeg" => ".jpeg",
                    "image/png" => ".png",
                    "image/svg+xml" => ".svg",
                    default => "",
                };

                $file_name = "web/blog/" . uniqid() . $new_file_extension;

                if (move_uploaded_file($image["tmp_name"], $file_name)) {
                    // Delete old image
                    if (!empty($current_images['path'])) {
                        unlink($current_images['path']);
                    }

                    $update_query = "UPDATE `blog` SET `path` = '" . $file_name . "', `date` = '$dateTime' WHERE `id` = '" . $nid . "'";
                    $result = Database::iud($update_query);

                    if ($result === false) {
                        die("Error in updating: " . Database::$connection->error);
                    } else {
                        echo "success";
                    }
                } else {
                    echo "Failed to upload file: " . $image["name"];
                    return;
                }
            }
        }

        // Update the database with new paths

    }
} else {
    header("location:../index.php");
}
