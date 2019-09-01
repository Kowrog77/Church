<?php
function getallposts(){
    global $connect;
    $sql = "SELECT * FROM post";
    $pdostate = $connect->query($sql);
    $arrayposts = $pdostate->fetchAll();
    return $arrayposts;
}
function sortByID($a,$b){
    return ($b['post_ID'] - $a['post_ID']);

}
function getByIDpost($post_ID){
    global $connect;
    $sql = "SELECT * FROM post where post_ID = $post_ID";
    $pdostate = $connect->query($sql);
    $post = $pdostate->fetch();
    return $post;
}
function getByTypepost($typeID){
    global $connect;
    $sql = "SELECT * FROM post where types_ID =$typeID";
    $pdostate = $connect->query($sql);
   $post =$pdostate->fetchALL();
    return $post;
}
function deletePost($delID){
    global $connect;
    $sqlDelete ="DELETE FROM post WHERE post_ID = $delID";
    $pdos=$connect->query($sqlDelete);
     
}
function getAlltypes(){
    global $connect;
    $sql = "SELECT * FROM post_type";
    $pdoStatement = $connect->query($sql);
    $arraytype=$pdoStatement->fetchAll();
    return $arraytype;
}

function addPost($date_event,$date_post,$link,$image_name,$type,$details){
    global $connect;
    $sqlAdd="INSERT INTO `post`( `types_ID`, `post_info`, `image_ID`, `link`, `date_event`, `date_post`) VALUES ('$type','$details','$image_name','$link','$date_event','$date_post')";
    $pdos=$connect->query($sqlAdd);
    ?>
    <div class="alert alert-warning mx-auto" role="alert">
        
        <p class="mx-auto">Post Added</p>
        
    </div>
 <?php   
}
function getatype($type_ID){
    global $connect;
    $sql = "SELECT * FROM post_type WHERE types_ID =$type_ID";
    $pdos =$connect->query($sql);
    $typename =$pdos->fetch();
    return $typename['typename'];
}
function editPost($date_event,$date_post,$link,$name,$type,$details,$postID){
    
    global $connect;
    $sqlAdd ="UPDATE `post` SET `types_ID`='$type',`post_info`='$details',`image_ID`='$name',`link`='$link',`date_event`='$date_event',`date_post`='$date_post' WHERE `post_ID` = '$postID'";
    $pdos=$connect->query($sqlAdd);
    ?>
    <div class="alert alert-warning" role="alert">
        
        <p>Post Edited</p>
        
    </div>
 <?php  
}