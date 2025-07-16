<?php

session_start();
error_reporting(0);
ini_set("display_errors", 1);
date_default_timezone_set("Asia/Bangkok");
define("BASEPATH", realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'));
define("clientIP", $_SERVER["REMOTE_ADDR"]);

$url = "https://takeme.la/main/menubar_event";
// สร้าง cURL session
$ch = curl_init($url);

// กำหนดข้อมูลที่จะส่ง
$data = array(
    'session_data' => $_SESSION, // ส่ง $_SESSION ไปด้วย
    'cookie_data' => $_COOKIE, // ส่ง $_COOKIE ไปด้วย
);
// print_r($_SESSION);
// exit;
// กำหนดตัวเลือก cURL
$options = array(
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_RETURNTRANSFER => true,
);

// กำหนดตัวเลือกให้ cURL
curl_setopt_array($ch, $options);

// ดึงข้อมูลจาก URL
$response = curl_exec($ch);

// ปิด cURL session
curl_close($ch);

// แสดงผลลัพธ์
echo $response;
?>