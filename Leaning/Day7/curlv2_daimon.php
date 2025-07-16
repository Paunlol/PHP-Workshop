<?php
$url_daimon = "https://hawk-strong-abnormally.ngrok-free.app/ss5/day3/tableprocess.php";
$para_daimon = $_POST;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url_daimon);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($para_daimon));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Receive server response ...

$server_output = curl_exec($ch);
curl_close($ch);
print_r($server_output);


?>