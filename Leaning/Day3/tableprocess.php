<?php
include_once("../include/webconfig.php");
//process
$p_username = isset($_POST['username']) ? $_POST['username'] : "";
$p_password = isset($_POST['password']) ? $_POST['password'] : "";
$p_con_password = isset($_POST['con_password']) ? $_POST['con_password'] : "";
$p_email = isset($_POST['email']) ? $_POST['email'] : "";
$p_fname = isset($_POST['fname']) ? $_POST['fname'] : "";
$p_lname = isset($_POST['lname']) ? $_POST['lname'] : "";
$p_c_id = isset($_POST['c_id']) ? $_POST['c_id'] : "";
$p_phone = isset($_POST['phone']) ? $_POST['phone'] : "";
$p_address = isset($_POST['address']) ? $_POST['address'] : "";
$p_date = isset($_POST['date']) ? $_POST['date'] : "";
$p_token = isset($_POST["token"]) ? $_POST["token"] : "";
$my_token = "ba59abbe56e057";
$x = 1;

if (isset($_POST['date']) && isset($_POST["token"])) {
    $p_tokenex = md5($p_username . $p_password . $p_con_password . $p_email . $p_fname . $p_lname . $p_c_id . $p_phone . $p_address . $p_date . $my_token);

    $present = date("Y-m-d H:i:s");
    if ($p_token !== $p_tokenex) {
        $response = array(
            "status" => "302",
            "msg" => "data is hack",
            "data" => $_POST
        );
        echo json_encode($response);
        exit;
    }
    if (abs(strtotime($present) - strtotime($p_date)) >= 300) {
        $response = array(
            "status" => "303",
            "msg" => "data is timeout",
            "data" => $_POST
        );
        echo json_encode($response);
        exit;
    }

} else {
    $response = array(
        "status" => "301",
        "msg" => "No data date & token",
        "data" => $_POST
    );
    echo json_encode($response);
    exit;
}

if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["con_password"]) && isset($_POST["email"]) && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["c_id"])) {

    $validate_data_array = true;

} else {
    $validate_data_array = false;
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
} else if ($x == 1 && $validate_data_array == true) {
    check_reg(
        $_POST,
        $validate_data_array,
        $p_username,
        $p_password,
        $p_con_password,
        $p_email,
        $p_fname,
        $p_lname,
        $p_c_id,
        $p_phone,
        $p_address,
    );

    // echo json_encode($response);
    // write_log(json_encode($response));
    exit;
}

function check_reg(
    $i,
    $validate_data_array,
    $p_username = '',
    $p_password = '',
    $p_con_password = '',
    $p_email = '',
    $p_fname = '',
    $p_lname = '',
    $p_c_id = '',
    $p_phone = '',
    $p_address = '',
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
    } else if ($y === 1 && $validate_data_array == true) {
        $web = new mysqlclass();
        $sql = "SELECT * FROM db_table;";
        $web->connect_db();
        if (empty($web->connect)) {
            echo "can't connect database";
            exit;
        }
        $web->dbname(db_name);
        $result = $web->select($sql);

        $sql_username = "SELECT username FROM db_table WHERE username = '$p_username'; ";
        $u = $web->select($sql_username);
        // print_r($u);
        if (count($u) > 0) {
            $response = array(
                "status" => "401",
                "msg" => "Duplicate Username",
                "data" => ""
            );
            echo json_encode($response);
            exit;
        }
        $sql_email = "SELECT email FROM db_table WHERE email = '$p_email';";
        $e = $web->select($sql_email);
        // print_r($e);
        if (count($e) > 0) {
            $response = array(
                "status" => "402",
                "msg" => "Duplicate Email",
                "data" => ""
            );
            echo json_encode($response);
            exit;
        }
        $sql_c_id = "SELECT c_id FROM db_table WHERE c_id = '$p_c_id';";
        $c = $web->select($sql_c_id);
        // print_r($c);
        if (count($c) > 0) {
            $response = array(
                "status" => "403",
                "msg" => "Duplicate Citizen ID",
                "data" => ""
            );
            echo json_encode($response);
            exit;
        }

        $sql_in = "INSERT INTO db_table (username, password, c_id, email, fname, lname , address , phone) 
           VALUES ('" . $p_username . "', '" . md5($p_password) . "','" . $p_c_id . "' , '" . $p_email . "', '" . $p_fname . "', '" . $p_lname . "', '" . $web->mysqli_real_escape_string($p_address) . "','" . $web->mysqli_real_escape_string($p_phone) . "');";


        $aws = $web->execute($sql_in);
        // var_dump($aws);

        // ดำเนินการคำสั่ง SQL
        if ($aws == true) {
            $response = array(
                "status" => "101",
                "msg" => "Receive Data Success",
                "data" => $_POST
            );
            echo json_encode($response);
            write_log(json_encode($response));
        } else {
            $response = array(
                "status" => "000",
                "msg" => "Insert Fail",
                "data" => $_POST
            );
            echo json_encode($response);
        }

        // ปิดการเชื่อมต่อ
        $web->closedb();
        exit;
    } else {
        echo "false";
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