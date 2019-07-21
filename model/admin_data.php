<?php
$arrayposts = getallposts();
$arraytypes = getAlltypes();

$delId= filter_input(INPUT_GET,'delID');
$editID= filter_input(INPUT_GET,'editID');
$add= filter_input(INPUT_GET,'addID');
$updateID= filter_input(INPUT_POST,'updateID');
$date_event= filter_input(INPUT_POST,'date_event');
$date_post= filter_input(INPUT_POST,'date_post');
$link= filter_input(INPUT_POST,'link');
$image= filter_input(INPUT_POST,'image');
$type= filter_input(INPUT_POST,'type');
$details=filter_input(INPUT_POST,"details");