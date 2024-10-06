<?php
session_start();
if (isset($_SESSION["a"])) {
    include "dist/config/connection.php";

    Database::setupConnection();
    $inputDocTitle = mysqli_real_escape_string(Database::$connection, trim($_POST["inputDocTitle"]));
    $inputDocTitleSi = mysqli_real_escape_string(Database::$connection, trim($_POST["inputDocTitleSi"]));
    $inputDocTitleTa = mysqli_real_escape_string(Database::$connection, trim($_POST["inputDocTitleTa"]));
    $cat_id = mysqli_real_escape_string(Database::$connection, trim($_POST["cat"]));

    // Validation checks
    if (empty($inputDocTitle)) {
        echo ("Please Enter Document Title");
    } else if (empty($inputDocTitleSi)) {
        echo ("Please Enter Document Sinhala Title");
    } else if (empty($inputDocTitleTa)) {
        echo ("Please Enter Document Tamil Title");
    } else if (empty($cat_id)) {
        echo ("Please Choose a Category or Add");
    } else {

        // Check if the first file is uploaded
        if (isset($_FILES["docFile"])) {
            $file = $_FILES["docFile"];
            $allowed_file_extensions = array("application/pdf");

            if (!in_array($file["type"], $allowed_file_extensions)) {
                echo ("Please select a valid PDF file for the first document.");
            } else {
                $file_extension = ".pdf";

                // Ensure the directory exists
                $directory = "web/document/";
                if (!is_dir($directory)) {
                    mkdir($directory, 0777, true);
                }

                $file_name1 = $directory . $inputDocTitle . $file_extension;

                // Move the first file to the server
                if (move_uploaded_file($file["tmp_name"], $file_name1)) {
                    $file_name2 = null;

                    // Check if the second file is uploaded
                    if (isset($_FILES["docFile2"]) && $_FILES["docFile2"]["error"] == 0) {
                        $file2 = $_FILES["docFile2"];

                        if (in_array($file2["type"], $allowed_file_extensions)) {
                            $file_name2 = $directory .$inputDocTitle. $file_extension;

                            // Move the second file to the server
                            if (!move_uploaded_file($file2["tmp_name"], $file_name2)) {
                                echo ("Error: Failed to upload the second file.");
                                exit();
                            }
                        } else {
                            echo ("Please select a valid PDF file for the second document.");
                            exit();
                        }
                    }

                    // Insert into the database
                    $d = new DateTime();
                    $tz = new DateTimeZone("Asia/Colombo");
                    $d->setTimezone($tz);
                    $date = $d->format("Y-m-d H:i:s");

                    $query = "INSERT INTO `document` (`name`,`name_sin`,`name_tam`, `url`, `url_tam`, `status_id`, `date`, `category_id`) 
                              VALUES ('$inputDocTitle','$inputDocTitleSi','$inputDocTitleTa', '$file_name1', " . ($file_name2 ? "'$file_name2'" : "NULL") . ", '1', '$date', '$cat_id')";

                    if (Database::iud($query)) {
                        echo ("success");
                    } else {
                        echo ("Error: Failed to insert into the database.");
                    }
                } else {
                    echo ("Error: Failed to upload the first file.");
                }
            }
        } else {
            echo ("Please select a PDF document to upload.");
        }
    }
} else {
    header("location:../index.php");
}
?>
