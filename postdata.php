<?php


require_once("DBFunctions.php");


$username = $_POST['username'];
$anger = $_POST["anger"];
$contempt = $_POST["contempt"];
$disgust = $_POST["disgust"];
$fear = $_POST["fear"];
$happy = $_POST["happy"];
$neutral = $_POST["neutral"];
$sadness = $_POST["sadness"];
$surprise = $_POST["surprise"];
$scale = $_POST["scale"];


$obj = new DatabaseFunctions();


$obj->insertValues($usernanme,$anger,$contempt,$disgust,$fear,$happy,$neutral,$sadness,$surprise,$scale);

echo "Done";

$obj = NULL;






?>