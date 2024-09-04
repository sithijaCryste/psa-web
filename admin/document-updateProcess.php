<?php
session_start();
if (isset($_SESSION["a"])) {
    include "dist/config/connection.php";

    Database::setupConnection();
    $inputDocTitle = mysqli_real_escape_string(Database::$connection, trim($_POST["inputDocTitle"]));
    $inputDocTitleSi = mysqli_real_escape_string(Database::$connection, trim($_POST["inputDocTitleSi"]));
    $inputDocTitleTa = mysqli_real_escape_string(Database::$connection, trim($_POST["inputDocTitleTa"]));
    $cat_id = mysqli_real_escape_string(Database::$connection, trim($_POST["cat"]));
    $doID = mysqli_real_escape_string(Database::$connection, trim($_POST["doID"]));

    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");

    // Update document details
    $updateQuery = "UPDATE `document` 
                    SET `name` = '$inputDocTitle', 
                        `name_sin` = '$inputDocTitleSi', 
                        `name_tam` = '$inputDocTitleTa', 
                        `status_id` = '1', 
                        `date` = '$date', 
                        `category_id` = '$cat_id' 
                    WHERE `id` = '$doID'";

    Database::iud($updateQuery);

    // Fetch current document URLs
    $current_document_query = Database::search("SELECT `url`, `url_tam` FROM `document` WHERE `id` = '$doID'");
    $current_document = mysqli_fetch_assoc($current_document_query);

    // Check if the first file is uploaded
    if (isset($_FILES["docFile"])) {
        $file = $_FILES["docFile"];
        $allowed_file_extensions = array("application/pdf");
        $file_type = $file["type"];

        if (!in_array($file_type, $allowed_file_extensions)) {
            echo("Please select a valid PDF file.");
        } else {
            $file_extension = ".pdf";
            $directory = "web/document/";

            // Ensure the directory exists
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }

            $file_name = $directory . uniqid() . $file_extension;

            if (move_uploaded_file($file["tmp_name"], $file_name)) {
                // Remove the old file if it exists
                if (!empty($current_document['url'])) {
                    unlink($current_document['url']);
                }
                
                // Update the document URL in the database
                $query = "UPDATE `document` SET `url` = '$file_name' WHERE `id` = '$doID'";
                Database::iud($query);
                echo("File 1 upload success.");
            } else {
                echo("Error: Failed to upload the first file.");
            }
        }
    }

    // Check if the second file (docFile2) is uploaded
    if (isset($_FILES["docFile2"]) && $_FILES["docFile2"]["error"] == 0) {
        $file2 = $_FILES["docFile2"];
        $allowed_file_extensions = array("application/pdf");
        $file_type2 = $file2["type"];

        if (!in_array($file_type2, $allowed_file_extensions)) {
            echo("Please select a valid PDF file for the second document.");
        } else {
            $file_extension = ".pdf";
            $directory = "web/document/";
            $file_name2 = $directory . uniqid() . $file_extension;

            if (move_uploaded_file($file2["tmp_name"], $file_name2)) {
                // Remove the old file if it exists
                if (!empty($current_document['url_tam'])) {
                    unlink($current_document['url_tam']);
                }

                // Update the second document URL in the database (url_tam)
                $query2 = "UPDATE `document` SET `url_tam` = '$file_name2' WHERE `id` = '$doID'";
                Database::iud($query2);
                echo("File 2 upload success.");
            } else {
                echo("Error: Failed to upload the second file.");
            }
        }
    }

} else {
    header("location:../index.php");
}
?>
