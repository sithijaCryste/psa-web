<?php
include "connection.php";

$doc_id = $_POST["doc"];

if (empty($doc_id)) {
    echo ("Please Enter Your user email");
} else {
    $rs = Database::search("SELECT * FROM `document` WHERE `id` = '" . $doc_id . "' AND `status_id` = '1'");
    $num = $rs->num_rows;

    if ($num == 1) {
        $d = $rs->fetch_assoc();

        if ($d["status_id"] == 1) {
            Database::iud("UPDATE `document` SET `status_id` = '2' WHERE `id` = '" . $doc_id . "'");
            echo ("Pinned");
        }

        if ($d["status_id"] == 2) {
            Database::iud("UPDATE `document` SET `status_id` = '1' WHERE `id` = '" . $doc_id . "'");
            echo ("Unpinned");
        }
    } else {
        echo ("Invalid ID");
    }
}
?>