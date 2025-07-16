<?php
include_once("../include/webconfig.php");
$username_user = isset($_POST['username']) ? $_POST['username'] : "";
$password_user = isset($_POST['password']) ? ($_POST['password']) : "";
// $username_user = "uiop7845";
// $username_user = "qwe";
// $password_user = "5b6f1f79d1048b25b1d821bb1a218db1";
// $password_user = ("123789456@Rr");
// $password_user = md5("asd");
$reg_username = "/^[A-Za-z0-9._@-]{5,20}$/";
$reg_password = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

if ($username_user !== "" && preg_match($reg_username, $username_user) == false) {
    $response = array(
        "status" => "222",
        "msg" => "Username input is not in the correct format",
        "data" => "username: " . $username_user
    );
    echo json_encode($response);
} else if ($password_user !== "" && preg_match($reg_password, $password_user) == false) {
    $response = array(
        "status" => "333",
        "msg" => "Password input is not in the correct format",
        "data" => "password: " . $password_user
    );
    echo json_encode($response);
} else {
    postdata($username_user, $password_user, true);
}

function postdata($username_user, $password_user, $bool)
{
    // $servername = "127.0.0.1";
    // $username = "ford";
    // $password = "ford789789";
    // $dbname = "full_ss5";
    // $conn = mysqli_connect($servername, $username, $password);

    // mysqli_select_db($conn, $dbname);
    // if (!$conn) {
    //     $response = array(
    //         "status" => "444",
    //         "msg" => "Connection failed: " . mysqli_connect_error(),
    //         "data" => ""
    //     );
    //     echo json_encode($response);
    //     exit;
    // }
    // if ($conn->errno) {
    //     $response = array(
    //         "status" => "555",
    //         "msg" => "Connection failed: " . $conn->connect_error,
    //         "data" => ""
    //     );
    //     echo json_encode($response);
    //     exit;
    // }

    // @mysqli_query($conn, "set character_set_results=utf8mb4");
    // @mysqli_query($conn, "set character_set_client=utf8mb4");
    // @mysqli_query($conn, "set character_set_connection=utf8mb4");

    //////////////////// SQL
    $sql = "SELECT username,password,status FROM db_table WHERE username = '" . $username_user . "' AND password = '" . md5($password_user) . "';";
    $web = new mysqlclass();
    $web->connect_db();
    if (empty($web->connect)) {
        echo "can't connect database";
        exit;
    }
    $web->dbname(db_name);
    $result = $web->select($sql);
    // echo "<pre>";
    // print_r($result);
    // echo $sql;

    if (!$result) {
        $response = array(
            "status" => "666",
            "msg" => "Error in SQL query: ",
            "data" => ""
        );
        echo json_encode($response);
        exit;
    }

    $status_user = isset($result[0]->status) ? $result[0]->status : 0;

    // echo "<pre>";
    // print_r($array_result);
    //////////////////// SQL

    if (count($result) == 1) {
        if ($status_user == 1) {
            $response = array(
                "status" => "101",
                "msg" => " yes is Found",
                "data" => "username: " . $username_user . " " . "password: " . $password_user
            );
            echo json_encode($response);
            session_start();
            $_SESSION["username"] = $username_user;
        } else {
            $response = array(
                "status" => "001",
                "msg" => "username not active",
                "data" => "Status is " . $status_user
            );
            echo json_encode($response);
        }
    } else {
        $response = array(
            "status" => "000",
            "msg" => "username and password is NOT Found",
            "data" => ""
        );
        echo json_encode($response);
    }

}







?>