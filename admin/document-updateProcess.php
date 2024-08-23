<?php
session_start();
if(isset($_SESSION["a"])){
include "dist/config/connection.php";

Database::setupConnection();
$inputDocTitle = mysqli_real_escape_string(Database::$connection, trim($_POST["inputDocTitle"]));
$cat_id = mysqli_real_escape_string(Database::$connection, trim($_POST["cat"]));
$doID = mysqli_real_escape_string(Database::$connection, trim($_POST["doID"]));

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

// Update document details
$updateQuery = "UPDATE `document` 
                SET `name` = '".$inputDocTitle."', 
                    `status_id` = '1', 
                    `date` = '".$date."', 
                    `category_id` = '".$cat_id."' 
                WHERE `id` = '".$doID."'";

Database::iud($updateQuery);

// Check if file is uploaded
if(isset($_FILES["docFile"])) {
    $current_document_query = Database::search("SELECT `url` FROM `document` WHERE `id`='" . $doID . "'");
    $current_document = mysqli_fetch_assoc($current_document_query);
    $file = $_FILES["docFile"];

    $allowed_file_extensions = array("application/pdf");
    $file_type = $file["type"];

    if(!in_array($file_type, $allowed_file_extensions)) {
        echo("Please select a valid PDF file.");
    } else {
        $file_extension = ".pdf";

        // Ensure the directory exists
        $directory = "web/document/";
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $file_name = $directory . uniqid() . $file_extension;

        if(move_uploaded_file($file["tmp_name"], $file_name)) {
            if (!empty($current_document['url'])) {
                unlink($current_document['url']);
            }
            $query = "UPDATE `document` SET `url` = '".$file_name."' WHERE `id` = '".$doID."'";
            Database::iud($query);
            
                echo("success");
            } else {
                echo("Error: Failed to update the database.");
            }
        
    }
} 

}else{
    header("location:../index.php");
}
?>
