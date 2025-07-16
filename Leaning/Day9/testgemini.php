<?php
$GEMINI_API_KEY = "AIzaSyDacV7d6BFCB5iUAnmQ7MlPjgRiCW5Tw5U";
$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=$GEMINI_API_KEY";
$array_header_gemini = array();
$array_header_gemini[] = "Content-Type: application/json";
$messages = "สวัสดี";
$array_res = "{
  'contents': [{
    'parts':[{'text':" . "'" . $messages . "'" . "}]
    }]
   }";
// echo $array_res;
// exit;
$res = cul($url, $array_res, $array_header_gemini);
$data = json_decode($res, true);
$text = isset($data['candidates'][0]['content']['parts'][0]['text']) ? $data['candidates'][0]['content']['parts'][0]['text'] : "";
print_r($data);
function cul($url, $array_res, $array_header_gemini)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $array_header_gemini);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $array_res);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Receive server response ...

    $server_output = curl_exec($ch);
    curl_close($ch);
    return $server_output;
}
?>