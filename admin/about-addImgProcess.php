<?php
session_start();
if(isset($_SESSION["a"])){
include "dist/config/connection.php";  // Include the Database class

// Ensure the database connection is set up
Database::setupConnection();

// Sanitize and validate inputs



// Validate inputs

    if(isset($_FILES["image"])){
        $image = $_FILES["image"];

        $allowed_image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");
        $file_ex = $image["type"];

        if(!in_array($file_ex,$allowed_image_extentions)){
            echo("Please select a valid image.");
        }else{

            $new_file_extention;

            if($file_ex == "image/jpg"){
                $new_file_extention=".jpg";
            }else if($file_ex == "image/jpeg"){
                $new_file_extention=".jpeg";
            }else if($file_ex == "image/png"){
                $new_file_extention =".png";
            }else if($file_ex == "image/svg+xml"){
                $new_file_extention = ".svg";
            }

            $file_name = "web/about/" .uniqid().$new_file_extention;

            move_uploaded_file($image["tmp_name"],$file_name);
            $d = new DateTime();
            $tz = new DateTimeZone("Asia/Colombo");
            $d->setTimezone($tz);
            $date = $d->format("Y-m-d H:i:s");
          
            Database::iud("INSERT INTO `about_img` (`path`,`date`) VALUES ('".$file_name."','".$date."')");

            echo("success");

           
        }
    }else{
        echo("Please Select a Product Image");
    }


}else{
    header("location:../index.php");
}
?>
