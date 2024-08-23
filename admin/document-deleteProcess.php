<?php
session_start();
if(isset($_SESSION["a"])){
include "dist/config/connection.php";

$docId = $_POST["d"];

if (!empty($docId)) {
    $rs = Database::search("SELECT * FROM `document` WHERE `id` = '" . $docId . "'");
    $d = $rs->fetch_assoc();
    
    if ($d) {
        // Check each image field individually
        if (!empty($d["url"]) && file_exists($d["url"])) {
            unlink($d["url"]); // Delete from the project
        }
        

        // Delete the notice entry from the database
        $result = Database::iud("DELETE FROM `document` WHERE `id` = '" . $docId . "'");

        if ($result === false) {
            die("Error in deletion: " . Database::$connection->error);
        } else {
            echo("document successfully removed");
        }
    } else {
        echo("document item not found");
    }
} else {
    echo("Invalid document ID");
}

}else{
    header("location:../index.php");
}
?>
