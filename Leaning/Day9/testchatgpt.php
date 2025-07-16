<?php
$OPENAI_API_KEY = "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";
$url = "https://api.openai.com/v1/chat/completions";
$array_header = array();
$array_header[] = "Content-Type: application/json";
$array_header[] = "Authorization: Bearer $OPENAI_API_KEY";
$messages = "สวัสดี";
$array_res = '{
    "model": "gpt-4o-mini",
    "store": true,
    "messages": [
      {"role": "user", "content": "' . $messages . '"}
    ]
  }';

$res = cul($url, $array_res, $array_header);
$data = json_decode($res, true);
$text = isset($data['choices'][0]['message']['content']) ? $data['choices'][0]['message']['content'] : "";
function cul($url, $array_res, $array_header)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $array_header);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $array_res);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  // Receive server response ...

  $server_output = curl_exec($ch);
  curl_close($ch);
  return $server_output;
}
?>