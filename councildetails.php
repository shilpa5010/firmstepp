<?php
ini_set('display_errors',0);
include("config.php");
include("functions.php");
if(isset($_GET['comp']) && $_GET['comp']=="insert") {
$str = new councilDetails();
$councilDet = $str->Add($_POST,$conn);
}

if(isset($_GET['comp']) && $_GET['comp']=="view") {
$str = new councilDetails();
$Details = $str->getCouncilDetails($conn);
$rows = array();
while($res = mysqli_fetch_object($Details)) {
    $rowsArr['details'] = $res;
    array_push($rows,$res);
}
header('Content-Type: application/json');
$result =  json_encode($rows);
echo $result;
}
