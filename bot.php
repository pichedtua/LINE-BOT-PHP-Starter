
<?php
$access_token = 'RsPR7b8G45RVH5r+NWu/fUcY5YRJziuVmwCG2z712gsiFV82UrXXgSCyBcXlXIONTUDYyzL+47syO7KHSgrt0/uzLpkkQaCqjuzrOUEA5wxkwKz0ne29RjGEp7ORs2ukUmgclKEof4T8iIsoF+dqlAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
