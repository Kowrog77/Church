<?php
session_start();
if($_SESSION['adminvalid']!= "yesAdmin"){
    
  header("Location: ../adminlogin.php");
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
include "../../model/post_db.php";
include "../../model/Event_data.php";

if($delId !=NULL){
  deletePost($delId);
  header("Location: ./Events.php");
}
if (isset($editID)){
   $post=getByIDpost($editID);
   include "./edit_event.php";
}elseif(isset($add)){
   include "./add_events.php";
}else{
   include "./view_events.php";
}



 include "../views/adminFooter.php"?>