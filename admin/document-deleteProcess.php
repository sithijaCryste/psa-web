<?php
session_start();
if (isset($_SESSION["a"])) {
    include "dist/config/connection.php";

    $docId = $_POST["d"];

    if (!empty($docId)) {
        $rs = Database::search("SELECT * FROM `document` WHERE `id` = '" . $docId . "'");
        $d = $rs->fetch_assoc();

        if ($d) {
            // Check and delete the first file if it exists
            if (!empty($d["url"]) && file_exists($d["url"])) {
                unlink($d["url"]); // Delete from the project
            }

            // Check and delete the second file if it exists
            if (!empty($d["url_tam"]) && file_exists($d["url_tam"])) {
                unlink($d["url_tam"]); // Delete from the project
            }

            // Delete the document entry from the database
            $result = Database::iud("DELETE FROM `document` WHERE `id` = '" . $docId . "'");

            if ($result === false) {
                die("Error in deletion: " . Database::$connection->error);
            } else {
                echo("Document successfully removed");
            }
        } else {
            echo("Document item not found");
        }
    } else {
        echo("Invalid document ID");
    }
} else {
    header("location:../index.php");
}
?>
