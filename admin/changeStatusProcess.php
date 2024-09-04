<?php

require "dist/config/connection.php";

$document_id = $_GET["p"];

$document_rs = Database::search("SELECT * FROM `document` WHERE `id`='".$document_id."'");
$document_num = $document_rs->num_rows;

if($document_num == 1){

    $document_data = $document_rs->fetch_assoc();
    $status = $document_data["status_id"];

    if($status == 1){
        Database::iud("UPDATE `document` SET `status_id`='2' WHERE `id`='".$document_id."'");
        echo("Pinned");
    }else if($status == 2){
        Database::iud("UPDATE `document` SET `status_id`='1' WHERE `id`='".$document_id."'");
        echo("Unpinned");
    }

}else{
    echo ("Something went wrong.");
}

?>