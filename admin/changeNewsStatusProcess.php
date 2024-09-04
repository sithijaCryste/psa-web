<?php

require "dist/config/connection.php";

$news_id = $_GET["n"];

$news_rs = Database::search("SELECT * FROM `news` WHERE `id`='".$news_id."'");
$news_num = $news_rs->num_rows;

if($news_num == 1){

    $news_data = $news_rs->fetch_assoc();
    $status = $news_data["status_id"];

    if($status == 1){
        Database::iud("UPDATE `news` SET `status_id`='2' WHERE `id`='".$news_id."'");
        echo("Pinned");
    }else if($status == 2){
        Database::iud("UPDATE `news` SET `status_id`='1' WHERE `id`='".$news_id."'");
        echo("Unpinned");
    }

}else{
    echo ("Something went wrong.");
}

?>