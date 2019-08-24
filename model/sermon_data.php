<?php
$arraysermons = getallsermons();
$delId= filter_input(INPUT_GET,'delID');
$editID= filter_input(INPUT_GET,'editID');
$add= filter_input(INPUT_GET,'addID');
$updateID= filter_input(INPUT_POST,'updateID');
$date_sermon= filter_input(INPUT_POST,'date_Sermon');
$link= filter_input(INPUT_POST,'link');
$summary=filter_input(INPUT_POST,"summary");