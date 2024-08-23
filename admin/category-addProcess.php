<?php 

include "dist/config/connection.php";


Database::setupConnection();
$addcategory = mysqli_real_escape_string(Database::$connection, trim($_POST["c"]));
$addcategoryS = mysqli_real_escape_string(Database::$connection, trim($_POST["cs"]));
$addcategoryT = mysqli_real_escape_string(Database::$connection, trim($_POST["ct"]));
$addIcon = mysqli_real_escape_string(Database::$connection, trim($_POST["i"]));
// echo($brand);

if (empty($addcategory)){
    echo ("Please Enter Your Category Name");
} else if(empty($addIcon)){
    echo ("Please Enter Your Category Icon");
}else if (strlen($addcategory) > 20){
    echo ("Your Category Name Should Be Less Than 20 Characters");
} else {

    $rs = Database::search("SELECT * FROM `category` WHERE `cat_name` = '" . $addcategory . "'");
    $num = $rs->num_rows;
    
    if ($num > 0) {
        echo ("Your Category Name is Already Exist");
    } else {
        Database::iud("INSERT INTO `category` (`cat_name`,`cat_name_sin`,`cat_name_tam`,`icon`) VALUES ('" . $addcategory. "','".$addcategoryS."','".$addcategoryT."','".$addIcon."')");
        echo ("Success");
    }

}


?>