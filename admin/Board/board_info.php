<?php
session_start();
if($_SESSION['adminvalid']!= "yesAdmin"){
    
  header("Location:../adminlogin.php");
}
$pageName="Mount Comfort Admin";
$favicon="../../images/favicon.jpg";
$styles ="../../css/styles.css";
$logo = "../../images/logo.jpg";
$index="../../index.php";
$eventLink="../Events/Events.php";
$boardLink="../Board/board_info.php";
$sermonLink="../sermons/sermons.php";
$logout="./../adminlogin.php?lo=y";
include "../views/adminHeader.php";
include "../../model/database.php";
include "../../model/board_db.php";
include "../../model/board_data.php";


if (isset($editID)){
   $member=getByIDboard($editID);
   include "./edit_board.php";

}else{
   include "./view_board.php";
}



 include "../views/adminFooter.php"?>