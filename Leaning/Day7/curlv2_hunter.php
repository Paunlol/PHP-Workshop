<?php
$url_hunter = "https://together-gladly-airedale.ngrok-free.app/ss5/day3/file_process.php";
$para_hunter = $_POST;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url_hunter);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($para_hunter));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Receive server response ...

$server_output = curl_exec($ch);
curl_close($ch);
print_r($server_output);


?>