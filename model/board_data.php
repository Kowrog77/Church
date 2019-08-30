<?php
$arrayboard= getallboard();
$editID= filter_input(INPUT_GET,'editID');

$Name= filter_input(INPUT_POST,'name');
$title= filter_input(INPUT_POST,'title');
$contact= filter_input(INPUT_POST,'contact');
