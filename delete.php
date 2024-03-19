<?php

ini_set("display_errors",1);

include 'server.php';

$uid = base64_decode($_REQUEST['id']);
$sql = "UPDATE `image` SET `deleted` = '1' WHERE `id` = '$uid'";

get_query($sql);

header("Location:records.php");

?>