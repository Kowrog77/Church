<?php
function getallboard(){
    global $connect;
    $sql = "SELECT * FROM board";
    $pdostate = $connect->query($sql);
    $arraymembers = $pdostate->fetchAll();
    return $arraymembers;
}
function sortByID($a,$b){
    return ( $a['bID']-$b['bID'] );

}function getByIDboard($bID){
    global $connect;
    $sql = "SELECT * FROM board where bID = $bID";
    $pdostate = $connect->query($sql);
    $member = $pdostate->fetch();
    return $member;
}function editMember($Name,$name,$title,$contact,$bID){
    
    global $connect;
    $sqlAdd ="UPDATE `board` SET `name`='$Name',`position`='$title',`photo`='$name',`contact`='$contact' WHERE `bID` ='$bID'";
    $pdos=$connect->query($sqlAdd);
    ?>
    <div class="alert alert-warning" role="alert">
        
        <p>Post Edited</p>
        
    </div>
 <?php  
}