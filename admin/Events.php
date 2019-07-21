<?php
session_start();
if($_SESSION['adminvalid']!= "yesAdmin"){
    
  header("Location: ./adminlogin.php");
}
$pageName="Mount Comfort Admin";
$favicon="../images/favicon.jpg";
$styles ="../css/styles.css";
include "./views/adminHeader.php";
include "../model/database.php";
include "../model/post_db.php";
include "../model/admin_data.php";

if($delId !=NULL){
  deletePost($delId);
  header("Location: ./Events.php");
}
if (isset($editID)){
   $post=getByIDposts($editID);
   include "./edit_events.php";
}elseif(isset($add)){
   include "./add_events.php";
}else{
   include "./view_events.php";
}



 include "./views/adminFooter.php"?>