<?php
session_start();
if(isset($_SESSION["a"])){
include "dist/config/connection.php";

$aboutId = $_POST["i"];

if (!empty($aboutId)) {
    $rs = Database::search("SELECT * FROM `about_img` WHERE `id`='" . $aboutId . "'");
    $d = $rs->fetch_assoc();
    
    if ($d) {
        // Check each image field individually
        if (!empty($d["path"]) && file_exists($d["path"])) {
            unlink($d["path"]); // Delete from the project
        }
        

        // Delete the about entry from the database
        $result = Database::iud("DELETE FROM `about_img` WHERE `id` = '" . $aboutId . "'");

        if ($result === false) {
            die("Error in deletion: " . Database::$connection->error);
        } else {
            echo("about Image successfully removed");
        }
    } else {
        echo("about image not found");
    }
} else {
    echo("Invalid about ID");
}

}else{
    header("location:../index.php");
}
?>
