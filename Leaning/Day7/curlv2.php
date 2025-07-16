<?php
$p_username = isset($_POST['username']) ? $_POST['username'] : "";
$p_password = isset($_POST['password']) ? $_POST['password'] : "";
$p_con_password = isset($_POST['con_password']) ? $_POST['con_password'] : "";
$p_email = isset($_POST['email']) ? $_POST['email'] : "";
$p_fname = isset($_POST['fname']) ? $_POST['fname'] : "";
$p_lname = isset($_POST['lname']) ? $_POST['lname'] : "";
$p_c_id = isset($_POST['c_id']) ? $_POST['c_id'] : "";
$p_phone = isset($_POST['phone']) ? ($_POST['phone']) : "";
$p_address = isset($_POST['address']) ? ($_POST['address']) : "";
$p_status = isset($_POST['status']) ? ($_POST['status']) : "";

$x = 1;

if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["con_password"]) && isset($_POST["email"]) && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["c_id"])) {

    $validate = true;

} else {
    $validate = false;
    $response = array(
        "status" => "555",
        "msg" => "array data incomplete",
        "data" => $_POST
    );
    echo json_encode($response);
}

if (isset($_POST["username"]) && $_POST["username"] == "") {
    $p_username = $_POST["username"];
    $response = array(
        "status" => "201",
        "msg" => "username error",
        "data" => $p_username
    );
    $x--;
    echo json_encode($response);
    exit;
} else if (isset($_POST["password"]) && $_POST["password"] == "") {
    $p_password = $_POST["password"];
    $response = array(
        "status" => "202",
        "msg" => "password error",
        "data" => $p_password
    );
    $x--;
    echo json_encode($response);
    exit;
} else if (isset($_POST["con_password"]) && $_POST["con_password"] == "") {
    $p_con_password = $_POST["con_password"];
    $response = array(
        "status" => "203",
        "msg" => "con_password error",
        "data" => $p_con_password
    );
    $x--;
    echo json_encode($response);
    exit;
} else if (isset($_POST["con_password"]) && isset($_POST["password"]) && $_POST["con_password"] !== $_POST["password"]) {
    $p_password = $_POST["password"];
    $response = array(
        "status" => "204",
        "msg" => "password not match error",
        "data" => $p_password
    );
    $x--;
    echo json_encode($response);
    exit;
} else if (isset($_POST["email"]) && $_POST["email"] == "") {
    $p_email = $_POST["email"];
    $response = array(
        "status" => "205",
        "msg" => "email error",
        "data" => $p_email
    );
    $x--;
    echo json_encode($response);
    exit;
} else if (isset($_POST["fname"]) && $_POST["fname"] == "") {
    $p_fname = $_POST["fname"];
    $response = array(
        "status" => "206",
        "msg" => "fname error",
        "data" => $p_fname
    );
    $x--;
    echo json_encode($response);
    exit;
} else if (isset($_POST["lname"]) && $_POST["lname"] == "") {
    $p_lname = $_POST["lname"];
    $response = array(
        "status" => "207",
        "msg" => "lname error",
        "data" => $p_lname
    );
    $x--;
    echo json_encode($response);
    exit;
} else if (isset($_POST["c_id"]) && $_POST["c_id"] == "") {
    $p_c_id = $_POST["c_id"];
    $response = array(
        "status" => "208",
        "msg" => "c_id error",
        "data" => $p_c_id
    );
    $x--;
    echo json_encode($response);
    exit;
} else if ($x == 1 && $validate == true) {
    check_reg(
        $_POST,
        $validate,
        $p_username,
        $p_password,
        $p_con_password,
        $p_email,
        $p_fname,
        $p_lname,
        $p_c_id,
        $p_phone,
        $p_address,
        $p_status
    );
    // echo json_encode($response);
    // write_log(json_encode($response));
    exit;
}

function check_reg(
    $i,
    $validate,
    $p_username = '',
    $p_password = '',
    $p_con_password = '',
    $p_email = '',
    $p_fname = '',
    $p_lname = '',
    $p_c_id = '',
    $p_phone = '',
    $p_address = '',
    $p_status = ''
) {
    $reg_username = "/^[A-Za-z0-9._@-]{5,20}$/";
    $reg_password = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    $reg_con_password = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    $reg_email = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $reg_fname = "/^[A-Za-zก-๙]{2,50}$/";
    $reg_lname = "/^[A-Za-zก-๙]{2,50}$/";
    $reg_c_id = "/^\d{13}$/";
    $reg_phone = "/^(0\d{1})\d{8}$/";

    $y = 1;

    // echo json_encode($i);
    if (isset($_POST['username']) && preg_match($reg_username, $i['username']) == FALSE) {
        $response = array(
            "status" => "302",
            "msg" => "reg username error",
            "data" => $i
        );
        $y--;
        echo json_encode($response);
    } else if (isset($_POST['password']) && preg_match($reg_password, $i['password']) == FALSE) {
        $response = array(
            "status" => "303",
            "msg" => "reg password error",
            "data" => $i
        );
        $y--;
        echo json_encode($response);
    } else if (isset($_POST['con_password']) && preg_match($reg_con_password, $i['con_password']) == FALSE) {
        $response = array(
            "status" => "303",
            "msg" => "reg confirm password error",
            "data" => $i
        );
        $y--;
        echo json_encode($response);
    } else if (isset($_POST['email']) && preg_match($reg_email, $i['email']) == FALSE) {
        $response = array(
            "status" => "303",
            "msg" => "reg email error",
            "data" => $i
        );
        $y--;
        echo json_encode($response);
    } else if (isset($_POST['fname']) && preg_match($reg_fname, $i['fname']) == FALSE) {
        $response = array(
            "status" => "303",
            "msg" => "reg fist name error",
            "data" => $i
        );
        $y--;
        echo json_encode($response);
    } else if (isset($_POST['lname']) && preg_match($reg_lname, $i['lname']) == FALSE) {
        $response = array(
            "status" => "303",
            "msg" => "reg last name error",
            "data" => $i
        );
        $y--;
        echo json_encode($response);
    } else if (isset($_POST['c_id']) && preg_match($reg_c_id, $i['c_id']) == FALSE) {
        $response = array(
            "status" => "303",
            "msg" => "reg ID error",
            "data" => $_POST
        );
        $y--;
        echo json_encode($response);
    } else if ($y == 1 && $validate == true) {

        $status = $p_status;
        if ($status == 1) {
            $date = date("Y-m-d H:i:s");
            $token_daimon = "PHEDsudlor";
            $p_token = md5($p_username . $date . $token_daimon);
            $url_daimon = 'https://hawk-strong-abnormally.ngrok-free.app/ss5/day3/token/regisprocesstoken.php';
            $para_daimon = array(
                "username" => $p_username,
                "password" => $p_password,
                "c_password" => $p_con_password,
                "name" => $p_fname,
                "lastname" => $p_lname,
                "email" => $p_email,
                "cid" => $p_c_id,
                "phone" => $p_phone,
                "address" => $p_address,
                "userdate" => $date,
                "input_token" => $p_token,
            );

            $res = cul($url_daimon, $para_daimon);
            $res2 = json_decode($res);

            if (isset($res2->ret_code) && $res2->ret_code == 101) {
                $response = array(
                    "status" => "101",
                    "msg" => "Receive Data Success",
                    "location" => "https://hawk-strong-abnormally.ngrok-free.app/ss5/day3/tableshow.php"
                );
                echo json_encode($response);
                // write_log(json_encode($response));
            } else {
                $response = array(
                    "status" => "000",
                    "msg" => isset($res2->msg) ? $res2->msg : null,
                );
                echo json_encode($response);
            }
        } else if ($status == 2) {
            $date = strtotime(date("Y-m-d H:i:s"));
            $token_hunter = "hunhunhun";
            $p_token = md5($p_username . $p_password . $p_con_password . $p_email . $p_fname . $p_lname . $p_c_id . $p_phone . $p_address . $date . $token_hunter);
            $url_hunter = "https://together-gladly-airedale.ngrok-free.app/ss5/day3/file_process.php";
            $para_hunter = array(
                "username" => $p_username,
                "password" => $p_password,
                "c_password" => $p_con_password,
                "name" => $p_fname,
                "surname" => $p_lname,
                "email" => $p_email,
                "cid" => $p_c_id,
                "phonenumber" => $p_phone,
                "address" => $p_address,
                "date" => $date,
                "user" => $p_token,
            );
            $res = cul($url_hunter, $para_hunter);
            $res2 = json_decode($res);
            // var_dump($res2);
            // die;
            if (isset($res2->ret) && $res2->ret == 101) {
                $response = array(
                    "status" => "101",
                    "msg" => "Receive Data Success",
                    "location" => "https://together-gladly-airedale.ngrok-free.app/ss5/day5/table_show.php"
                );
                echo json_encode($response);
                // write_log(json_encode($response));
            } else {
                $response = array(
                    "status" => "000",
                    "msg" => isset($res2->msg) ? $res2->msg : null,
                );
                echo json_encode($response);
            }
        } else if ($status == 3) {
            $date = date("Y-m-d H:i:s");
            $token_ford = "ba59abbe56e057";
            $p_token = md5($p_username . $p_password . $p_con_password . $p_email . $p_fname . $p_lname . $p_c_id . $p_phone . $p_address . $date . $token_ford);
            $url_ford = "https://oyster-famous-lemming.ngrok-free.app/ford/day3/tableprocess.php";
            $para_ford = array(
                "username" => $p_username,
                "password" => $p_password,
                "con_password" => $p_con_password,
                "fname" => $p_fname,
                "lname" => $p_lname,
                "email" => $p_email,
                "c_id" => $p_c_id,
                "phone" => $p_phone,
                "address" => $p_address,
                "date" => $date,
                "token" => $p_token,
            );
            $res = cul($url_ford, $para_ford);
            $res2 = json_decode($res);
            // var_dump($res2);
            // die;
            if (isset($res2->status) && $res2->status == 101) {
                $response = array(
                    "status" => "101",
                    "msg" => "Receive Data Success",
                    "location" => "https://oyster-famous-lemming.ngrok-free.app/ford/Day4/connet.php"
                );
                echo json_encode($response);
                // write_log(json_encode($response));
            } else {
                $response = array(
                    "status" => "000",
                    "msg" => isset($res2->msg) ? $res2->msg : null,
                );
                echo json_encode($response);
            }
        }

    } else {
        $response = array(
            "status" => "666",
            "msg" => "No Input Data",
        );
        echo json_encode($response);
    }
}

function write_log($log)
{
    //Something to write to txt log
    $date_log = date("Y-m-d H:i:s") . PHP_EOL .
        "IP : " . $_SERVER['REMOTE_ADDR'] . PHP_EOL .
        "DATA : " . $log . PHP_EOL . "-------------------------" . PHP_EOL;
    //Save string to log, use FILE_APPEND to append.
    file_put_contents('logs/log_' . date("Ymd") . '.txt', $date_log, FILE_APPEND);
}

function cul($url, $para)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($para));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Receive server response ...

    $server_output = curl_exec($ch);
    curl_close($ch);
    return $server_output;
}

// $_POST ;
// $_POST["username"] = "asdasd";
// $_POST["password"] = "eE12345678!";
// $_POST["con_password"] = "eE12345678!";
// // $_POST["password"] = "ฤฏฆโ!";
// // $_POST["con_password"] = "ฤฆฏโ!";
// $_POST["email"] = "asdf@asdf.com";
// $_POST["fname"] = "asda";
// $_POST["lname"] = "asda";
// $_POST["c_id"] = "1234567897894";
// $_POST["phone"] = "0831589977";
// $_POST["address"] = "1";


?>