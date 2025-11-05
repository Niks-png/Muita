<?php 
$dataMuita= file_get_contents("https://deskplan.lv/muita/app.json");
$muita =  json_decode($dataMuita, true);
?>