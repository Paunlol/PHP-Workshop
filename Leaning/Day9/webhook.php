<?php
session_start();
// session_destroy();
if (!isset($_SESSION['chat_history'])) {
    $_SESSION['chat_history'] = [];
    $newMessage = array(
        "role" => "user",
        "parts" => array(
            array("text" => "คุณคือผู้ช่วยส่วนตัวของฉันที่ช่วยจัดการชีวิตประจำวัน ฉันต้องการให้คุณจดจำตารางงาน นัดหมาย และกิจกรรมที่สำคัญของฉัน รวมถึงช่วยเตือนเมื่อถึงเวลาที่กำหนด คุณควรจะสามารถให้คำแนะนำในการบริหารเวลา และช่วยให้ฉันจัดลำดับความสำคัญของงานได้อย่างมีประสิทธิภาพ")
        )
    );
    $_SESSION['chat_history']["contents"][] = $newMessage;
    $jsonData = json_encode($_SESSION['chat_history']);
    ai($jsonData);
}
/*Get Data From POST Http Request*/
$datas = file_get_contents('php://input');
/*Decode Json From LINE Data Body*/
$deCode = json_decode($datas, true);
print_r($deCode);
file_put_contents('log.txt', date("Y-m-d H:i:s") . PHP_EOL . file_get_contents('php://input') . PHP_EOL, FILE_APPEND);

$replyToken = isset($deCode['events'][0]['replyToken']) ? $deCode['events'][0]['replyToken'] : "";
$userId = isset($deCode['events'][0]['source']['userId']) ? $deCode['events'][0]['source']['userId'] : "";
// $text = isset($deCode['events'][0]['message']['text']) ? $deCode['events'][0]['message']['text'] : "";
$text = "";
echo '<pre>';
$newMessage = array(
    "role" => "user",
    "parts" => array(
        array("text" => $text)
    )
);
$_SESSION['chat_history']["contents"][] = $newMessage;
$jsonData = json_encode($_SESSION['chat_history']);
// echo $jsonData;
ai($jsonData);
if (isset($deCode['events'][0]['message']['text'])) {
    $_SESSION['chat_history']['content'] = ["role" => "user", "text" => ["text" => "สวัสดีผมชื่อฟอด"]];
}
echo '<br>';
echo '<pre>';
// $space = strpos($text, "=");
// $word = substr($text, 0, $space);
// $newtext = substr($text, $space + 1);
$switch = 1;
// if ($word == "GPT") {
//     $switch = 2;
// } else if ($word == "Gemini") {
//     $switch = 1;
// } else {
//     $text_ai = "โปรดถามด้วยรูปแบบ gpt= **คำถาม** หรือ gemini= **คำถาม**";
// }

function ai($jsonData = array())
{
    $GEMINI_API_KEY = "AIzaSyDacV7d6BFCB5iUAnmQ7MlPjgRiCW5Tw5U";
    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=$GEMINI_API_KEY";
    $array_header = array();
    $array_header[] = "Content-Type: application/json";
    $array_res = $jsonData;
    $res = cul($url, $array_res, $array_header);
    $data = json_decode($res, true);
    $text_ai = isset($data['candidates'][0]['content']['parts'][0]['text']) ? $data['candidates'][0]['content']['parts'][0]['text'] : "";
    $newMessage2 = array(
        "role" => "model",
        "parts" => array(
            array("text" => $text_ai)
        )
    );
    $_SESSION['chat_history']["contents"][] = $newMessage2;
    $jsonData = json_encode($_SESSION['chat_history']);
    echo $jsonData;
    var_dump($data);
}

$messages = [];
$messages['replyToken'] = $replyToken;
$messages['messages'][0] = getFormatTextMessage($text_ai);
$encodeJson = json_encode($messages);
file_put_contents('log.txt', '==================msg================== ' . PHP_EOL, FILE_APPEND);
file_put_contents('log.txt', $encodeJson . PHP_EOL, FILE_APPEND);

$LINEDatas['url'] = "https://api.line.me/v2/bot/message/reply";
$LINEDatas['token'] = "sCoS1Xpk/urAFDSsKkY74NmECpnDLMpnNjBA06JA7RE+Tg3ma4E9RHIj6/gYXNk3NjMlq0oUJvv/w1jlCwTuuTIzBvEnpb+jDobbjwnEHtuQdelunvaQtYUpfFlQHYLu1rt8Bh9532aml3WxiLiuMQdB04t89/1O/w1cDnyilFU=";

$results = sentMessage($encodeJson, $LINEDatas);

/*Return HTTP Request 200*/
http_response_code(200);

function getFormatTextMessage($text)
{
    $datas = [];
    $datas['type'] = 'text';
    $datas['text'] = $text;

    return $datas;
}

function sentMessage($encodeJson, $datas)
{
    $datasReturn = [];
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $datas['url'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $encodeJson,
        CURLOPT_HTTPHEADER => array(
            "authorization: Bearer " . $datas['token'],
            "cache-control: no-cache",
            "content-type: application/json; charset=UTF-8",
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        $datasReturn['result'] = 'E';
        $datasReturn['message'] = $err;
    } else {
        if ($response == "{}") {
            $datasReturn['result'] = 'S';
            $datasReturn['message'] = 'Success';
        } else {
            $datasReturn['result'] = 'E';
            $datasReturn['message'] = $response;
        }
    }

    return $datasReturn;
}
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