<?php
session_start();
if(isset($_SESSION["a"])){
include "dist/config/connection.php";

$noticeId = $_POST["n"];

if (!empty($noticeId)) {
    $rs = Database::search("SELECT * FROM `notice` WHERE `id`='" . $noticeId . "'");
    $d = $rs->fetch_assoc();
    
    if ($d) {
        // Check each image field individually
        if (!empty($d["path"]) && file_exists($d["path"])) {
            unlink($d["path"]); // Delete from the project
        }
        

        // Delete the notice entry from the database
        $result = Database::iud("DELETE FROM `notice` WHERE `id` = '" . $noticeId . "'");

        if ($result === false) {
            die("Error in deletion: " . Database::$connection->error);
        } else {
            echo("Notice successfully removed");
        }
    } else {
        echo("Notice item not found");
    }
} else {
    echo("Invalid notice ID");
}

}else{
    header("location:../index.php");
}
?>
