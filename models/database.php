<?php
$dsn = "mysql:host=localhost;dbname=mount_comfort;";


try{
    $connect = new PDO($dsn,"kr0862100","Koerog7189");
    
}catch(Exception $e){
    echo($e->getmessage());
    die();
}


?>