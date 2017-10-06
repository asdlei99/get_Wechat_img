<?php
/**
 * Created by PhpStorm.
 * User: Cantjie
 * Date: 2017-10-6
 * Time: 19:35
 */


$url = base64_decode(array_keys($_POST)[0].'==');
$ch=curl_init();
$timeout=1000;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$img=curl_exec($ch);
curl_close($ch);
$base64 = 'data:image/' . 'jpg' . ';base64,' . base64_encode($img);
echo $base64;
