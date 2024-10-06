<?php
session_start();
if(isset($_SESSION["a"])){
include "dist/config/connection.php";

$blogId = $_POST["n"];

if (!empty($blogId)) {
    $rs = Database::search("SELECT * FROM `blog` WHERE `id`='" . $blogId . "'");
    $d = $rs->fetch_assoc();
    
    if ($d) {
        // Check each image field individually
        if (!empty($d["path"]) && file_exists($d["path"])) {
            unlink($d["path"]); // Delete from the project
        }
       

        // Delete the blog entry from the database
        $result = Database::iud("DELETE FROM `blog` WHERE `id` = '" . $blogId . "'");

        if ($result === false) {
            die("Error in deletion: " . Database::$connection->error);
        } else {
            echo("Gallery successfully removed");
        }
    } else {
        echo("blog item not found");
    }
} else {
    echo("Invalid gallery ID");
}

}else{
   header("location:../index.php"); 
}
?>
