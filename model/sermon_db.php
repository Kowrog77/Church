<?php
function getallsermons(){
    global $connect;
    $sql = "SELECT * FROM sermons";
    $pdostate = $connect->query($sql);
    $arraysermons = $pdostate->fetchAll();
    return $arraysermons;
}
function sortByID($a,$b){
    return ($b['serID'] - $a['serID']);

}
function deleteSermon($delID){
    global $connect;
    $sqlDelete ="DELETE FROM sermons WHERE serID = $delID";
    $pdos=$connect->query($sqlDelete);
     
}
function addsermon($date_sermon,$link,$summary){
    global $connect;
    $sqlAdd="INSERT INTO `sermons`(`video_link`, `Summary`, `date_sermon`) VALUES ('$link','$summary','$date_sermon')";
    $pdos=$connect->query($sqlAdd);
    ?>
    <div class="alert alert-warning mx-auto" role="alert">
        
        <p class="mx-auto">Sermon Added</p>
        
    </div>
 <?php   
}
function getByIDsermon($serID){
    global $connect;
    $sql = "SELECT * FROM sermons where serID = '$serID'";
    $pdostate = $connect->query($sql);
    $sermon = $pdostate->fetch();
    return $sermon;
}
function editSermon($date_sermon,$link,$summary,$serID){
    global $connect;
    $sqlAdd ="UPDATE `sermons` SET `video_link`='$link',`Summary`='$summary',`date_sermon`='$date_sermon' WHERE `serID` =$serID";
    $pdos=$connect->query($sqlAdd);
    ?>
    <div class="alert alert-warning" role="alert">
        
        <p>File Uploaded</p>
        
    </div>
 <?php  
}