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
}