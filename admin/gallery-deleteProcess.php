<?php
session_start();
if (isset($_SESSION['a'])){
include "dist/config/connection.php";

$galleryId = $_POST["g"];

if (!empty($galleryId)) {
    
    $result = Database::iud("DELETE FROM `gallery` WHERE `id` = '".$galleryId."'");

    if ($result === false) {
   
        die("Error in deletion: " . Database::$connection->error);
    } else {
        
        echo("Gallery successfully removed");
    }
} else {
    
    echo("Invalid gallery ID");
}
}else{
    header("location:../index.php");
}
?>
