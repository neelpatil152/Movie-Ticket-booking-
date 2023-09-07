<?php

$mid=$_GET["mid"];
include_once 'dbfun.php';
$link= connect();
$query="delete from movies where mid=$mid";
mysqli_query($link, $query);
$_SESSION["msg"]="Movie delete successfully";
header("location: movies.php");

