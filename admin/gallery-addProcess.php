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

// Validate inputs
if (empty($title)) {
    echo("Please Enter Gallery Title");
} elseif (empty($date)) {
    echo("Please Enter Gallery Date");
} elseif (empty($url)) {
    echo("Please Enter Gallery Video URL");
} else {
    // Check if the URL already exists in the database
    $query = "SELECT * FROM `gallery` WHERE `url`='" . $url . "'";
    $rs = Database::search($query);

    // Debug: Echo the query to see if there's a syntax error
    // echo $query;

    if ($rs === false) {
        die("Error in query: " . Database::$connection->error);
    }

    $num = $rs->num_rows;

    if ($num > 0) {
        echo("Your URL Video Already Exists");
    } else {
        // Initialize the DateTime object
        $time = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $time->setTimezone($tz);
        $NewTime = $time->format("H:i:s");

        // Combine the manually entered date with the current time
        $dateTime = $date . ' ' . $NewTime;

        // Insert the new record
        $insert_query = "INSERT INTO `gallery` (`url`, `date`, `title`) VALUES('" . $url . "', '" . $dateTime . "', '" . $title . "')";

        // Debug: Echo the insert query to see if there's a syntax error
        // echo $insert_query;

        $result = Database::iud($insert_query);

        if ($result === false) {
            die("Error in query: " . Database::$connection->error);
        } else {
            echo("success");
        }
    }
}
}else{
    header("location:../index.php");
}
?>
