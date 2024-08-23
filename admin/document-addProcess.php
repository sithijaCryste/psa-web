<?php
session_start();
if(isset($_SESSION["a"])){
include "dist/config/connection.php";

Database::setupConnection();
$inputDocTitle = mysqli_real_escape_string(Database::$connection, trim($_POST["inputDocTitle"]));
$cat_id = mysqli_real_escape_string(Database::$connection, trim($_POST["cat"]));

// Validation checks
if (empty($inputDocTitle)) {
    echo ("Please Enter Document Title");
} else if (empty($cat_id)) {
    echo ("Please Choose a Category or Add");
} else {

    // Update the database
    if(isset($_FILES["docFile"])) {
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
                mkdir($directory, 0777, true);
            }

            $file_name = $directory . uniqid() . $file_extension;

            if(move_uploaded_file($file["tmp_name"], $file_name)) {
                $d = new DateTime();
                $tz = new DateTimeZone("Asia/Colombo");
                $d->setTimezone($tz);
                $date = $d->format("Y-m-d H:i:s");

                $query = "INSERT INTO `document` (`name`, `url`, `status_id`, `date`, `category_id`) VALUES ('$inputDocTitle', '$file_name', '1', '$date', '$cat_id')";

                if (Database::iud($query)) {
                    echo("success");
                } else {
                    echo("Error: Failed to insert into the database.");
                }
            } else {
                echo("Error: Failed to upload file.");
            }
        }
    } else {
        echo("Please select a PDF document to upload.");
    }
}

}else{
    header("location:../index.php");
}
?>
