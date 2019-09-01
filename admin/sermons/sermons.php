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
include "../../model/sermon_db.php";
include "../../model/sermon_data.php";

if($delId !=NULL){
  deleteSermon($delId);
  header("Location: ./Sermons.php");
}
if (isset($editID)){
   $sermon=getByIDsermon($editID);
   include "./edit_Sermon.php";
}elseif(isset($add)){
   include "./add_sermon.php";
}else{
   include "./view_sermon.php";
}



 include "../views/adminFooter.php"?>