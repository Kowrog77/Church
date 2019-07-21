<?php
function getAlladmin($userName){
    global $connect;
    $sql = "SELECT * FROM login_info Where username ='$userName'";
    $pdoStatement = $connect->query($sql);
    $Users=$pdoStatement->fetch();
    return $Users;
}
