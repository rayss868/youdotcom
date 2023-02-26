<?php


function keyd(){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.betterapi.net/gen');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close ($ch);

    return $result;
}



$data = json_decode(keyd());
$key = $data->key;


$req = curl_init();
curl_setopt($req, CURLOPT_URL, 'https://api.betterapi.net/youdotcom/chat?message='.$_GET['text'].'&key='.$key);
curl_setopt($req, CURLOPT_RETURNTRANSFER, 1);
$result1 = curl_exec($req);
curl_close ($req);
echo $result1;
?>