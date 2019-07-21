<?php
function getallposts(){
    global $connect;
    $sql = "SELECT * FROM post";
    $pdostate = $connect->query($sql);
    $arrayposts = $pdostate->fetchAll();
    return $arrayposts;
}
function getByIDposts($post_ID){
    global $connect;
    $sql = "SELECT * FROM post where post_ID = $post_ID";
    $pdostate = $connect->query($sql);
    $post = $pdostate->fetch();
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
    $sqlAdd="INSERT INTO `post`( `type_ID`, `post_info`, `image_ID`, `link`, `date_event`, `date_post`) VALUES ('$type','$details','$image_name','$link','$date_event','$date_post')";
    $pdos=$connect->query($sqlAdd);
    ?>
    <div class="alert alert-warning mx-auto" role="alert">
        
        <p class="mx-auto">Post Added</p>
        
    </div>
 <?php   
}
function getatype($type_ID){
    global $connect;
    $sql = "SELECT * FROM post_type WHERE type_ID =$type_ID";
    $pdos =$connect->query($sql);
    $typename =$pdos->fetch();
    return $typename['typename'];
}