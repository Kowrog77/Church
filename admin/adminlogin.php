<?php
session_start();
include "../model/database.php";
include "../model/admin_db.php";
$pageName="Mount Comfort Admin";
$favicon="../images/favicon.jpg";
$styles ="../css/styles.css";
$userName = filter_input(INPUT_POST,'username');
$passWord=filter_input(INPUT_POST,'password');
$lo = filter_input(INPUT_GET,'lo');
if($lo =="y"){
    if($_SESSION['adminvalid'] == "yesAdmin"){
    
        $_SESSION = array();
        session_destroy();
        header("Location: ./adminlogin.php");
    }
    
}
    if($userName != NULL && $passWord !=NULL ){
        $Users= getAlladmin($userName);
        if($Users!= Null){
            if($passWord==$Users['password']){
                $_SESSION['adminvalid']="yesAdmin";
               
                header("Location: ./Events.php");
            }
            else{
                echo("<div class='alert alert-warning' role='alert'>
                Incorrect Password
              </div>");
            }
        }
        else{
            echo("<div class='alert alert-warning' role='alert'>
               Incorrect Username
              </div>");
        }
    }
    include "./views/adminHeader.php";
    include "./loginForm.php";
?>


<? Include "./views/adminFooter.php"?>