<?php
session_start();
if(isset($_SESSION["a"])){
include "dist/config/connection.php";

$newsId = $_POST["n"];

if (!empty($newsId)) {
    $rs = Database::search("SELECT * FROM `news` WHERE `id`='" . $newsId . "'");
    $d = $rs->fetch_assoc();
    
    if ($d) {
        // Check each image field individually
        if (!empty($d["main-img"]) && file_exists($d["main-img"])) {
            unlink($d["main-img"]); // Delete from the project
        }
        if (!empty($d["img2"]) && file_exists($d["img2"])) {
            unlink($d["img2"]); // Delete from the project
        }
        if (!empty($d["img3"]) && file_exists($d["img3"])) {
            unlink($d["img3"]); // Delete from the project
        }

        // Delete the news entry from the database
        $result = Database::iud("DELETE FROM `news` WHERE `id` = '" . $newsId . "'");

        if ($result === false) {
            die("Error in deletion: " . Database::$connection->error);
        } else {
            echo("Gallery successfully removed");
        }
    } else {
        echo("News item not found");
    }
} else {
    echo("Invalid gallery ID");
}

}else{
   header("location:../index.php"); 
}
?>
