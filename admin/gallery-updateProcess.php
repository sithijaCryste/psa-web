<?php
session_start();
if (isset($_SESSION['a'])){

include "dist/config/connection.php";  // Include the Database class

// Ensure the database connection is set up
Database::setupConnection();

// Sanitize and validate inputs
$title = mysqli_real_escape_string(Database::$connection, trim($_POST["title"]));
$date = mysqli_real_escape_string(Database::$connection, trim($_POST["date"]));
$url = mysqli_real_escape_string(Database::$connection, trim($_POST["ytURL"]));
$id = mysqli_real_escape_string(Database::$connection, trim($_POST["id"]));

if (empty($date)){
    echo ("Please Enter the date");
}else{
    $time = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $time->setTimezone($tz);
    $NewTime = $time->format("H:i:s");
    // Combine the manually entered date with the current time
    $dateTime = $date . ' ' . $NewTime;
    // Validate inputs
    Database::iud("UPDATE `gallery` SET `url` = '".$url."', `date` = '".$dateTime."', `title` = '".$title."' WHERE `id` = '".$id."' ");
    echo ("success");
    // Optionally, close the database connection if you're done with it
}

}else{
    header("location:../index.php");

}

?>
