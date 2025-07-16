<?php
// $url_ford = "https://oyster-famous-lemming.ngrok-free.app/ford/day3/tableprocess.php";
// $para_ford = array(
//     'username' => 'test_user2',
//     'password' => '1254869754Qq!@',
//     'con_password' => '1254869754Qq!@',
//     'email' => 'testuser2@example.com',
//     'fname' => 'John',
//     'lname' => 'Smith',
//     'c_id' => '9876542210123',
//     'phone' => '0812345678',
//     'address' => '456 Test Avenue'
// );
// {"status":"101","msg":"Receive Data
//     Success","data":{"username":"uiop784511112111","password":"Ee12354678!!!","con_password":"Ee12354678!!!","email":"2uio2112121@iop.iop","fname":"opptsw","lname":"opuytsw","c_id":"1581211561822","phone":"0851581970","address":"3211"}}
// $url_dimon = "https://hawk-strong-abnormally.ngrok-free.app/ss5/day3/tableprocess.php";
// $para_dimon = array(
//     'username' => 'example_user',
//     'password' => '1254869754Qq!@',
//     'c_password' => '1254869754Qq!@',
//     'name' => 'John',
//     'lastname' => 'Doe',
//     'email' => 'john@example.com',
//     'cid' => '1234567890123',
//     'phone' => '0912345678',
//     'address' => '123 Example Street'
// );
//// {"ret_code":"101","msg":"success","data":{"username":"example_user","password":"1254869754Qq!@","c_password":"1254869754Qq!@","name":"John","lastname":"Doe","email":"john@example.com","cid":"1234567890123","phone":"0912345678","address":"123 Example Street"}}
$url_hunter = "https://together-gladly-airedale.ngrok-free.app/ss5/day3/file_process.php";
$para_hunter = array(
    'username' => 'example_user',
    'password' => '1254869754Qq!@',
    'c_password' => '1254869754Qq!@',
    'name' => 'John',
    'surname' => 'Smith',
    'email' => 'john@example.com',
    'cid' => '1234567890123',
    'phonenumber' => '0912345678',
    'address' => '123 Example Street'
);
///{"ret":"101","msg":"success","data":{"username":"example_user","password":"1254869754Qq!@","c_password":"1254869754Qq!@","name":"John","surname":"Smith","email":"john@example.com","cid":"1234567890123","phonenumber":"0912345678","address":"123 Example Street"}}

$ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url_ford);
// curl_setopt($ch, CURLOPT_URL, $url_dimon);
curl_setopt($ch, CURLOPT_URL, $url_hunter);
curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($para_ford));
// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($para_dimon));
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($para_hunter));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Receive server response ...

$server_output = curl_exec($ch);
curl_close($ch);

print_r($server_output);


?>