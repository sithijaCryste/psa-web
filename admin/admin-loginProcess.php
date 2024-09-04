<?php
session_start();
include "dist/config/connection.php";


    $email = $_POST["useremail"];
    $password = $_POST["userpassword"];
    $remember = $_POST["remember"];

    // echo($username);

    if(empty($email)){
        echo("Please Enter Your Username");
    }elseif(empty($password)){
        echo("Please Enter Your Password");
    }else{
 
        $rs = Database::search("SELECT * FROM `admin` WHERE `email`='".$email."' AND `password`='".$password."' ");
        $num = $rs->num_rows;
        $d = $rs->fetch_assoc();
        if($num == 1){
        
            echo("success");

            $_SESSION["a"] = $d;

            if($remember == "true"){
                //set cookie

                setcookie("email",$email,time()+(60*60*24*365));
                setcookie("password",$password,time()+(60*60*24*365));

            }else{
                //destroy cookie

                setcookie("email","", -1);
                setcookie("password","", -1);

            }
            

        }else{
            echo("Inavlid Username or Password");
        }
    }

?>
