<?php
$json = file_get_contents('https://poe.ninja/api/data/itemoverview?league=Settlers&type=Scarab');
$obj = json_decode($json);
echo $obj;
?>
