<?php

namespace App\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Mydev_model;
use App\Libraries\curl;

class Service extends BaseController
{
    public function __construct()
    {
        $this->config = new \Config\App();
        $this->mydev_model = new Mydev_model();
        $this->curl = new curl();
        $request = \Config\Services::request();
    }
    public function index()
    {
        // echo date("Y-m-d H:i:s");
        // echo "<br>";
        $rid = $this->request->getGet("rid");
        $ridx = $this->request->getPost("ridx");
        $met = $this->request->getMethod();
        // var_dump($met);
        // echo "<br>";
        // var_dump($rid);
        // echo "<br>";
        // var_dump($ridx);
        $sql = "SELECT * FROM db_table WHERE status = '1';";
        $r = $this->mydev_model->select($sql);
        // print_r($r);

        if (count($r) > 0) {
            for ($i = 0; $i < count($r); $i++) {
                // echo "username = " . $r[$i]->username;
                // echo "<br>";
            }
        }
        $reg_username = "/^[A-Za-z0-9._@-]{5,20}$/";
        $reg_email = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        $reg_c_id = "/^\d{13}$/";

        $username = $this->request->getGet('username');
        $email = $this->request->getGet('email');
        $c_id = $this->request->getGet('c_id');

        // $username = "Kijui1211";
        $password = "Kijui1222!";
        // $email = "Kijui1211@Kijui1222.as";
        $fname = "Kijuiwq";
        $lname = "Kijuiqw";
        // $c_id = "5841565112001";
        $phone = "0254578454";
        $address = "Kijuiqw";

        $insql = "INSERT INTO db_table (username, password, c_id, email, fname, lname , address , phone) VALUE ('" . $username . "','" . $password . "','" . $c_id . "','" . $email . "','" . $fname . "','" . $lname . "','" . $address . "','" . $phone . "');";

        $sqlcheck = "SELECT username , email , c_id FROM db_table WHERE username = '$username' OR email = '$email' OR c_id = '$c_id' LIMIT 3 ;";
        $a = $this->mydev_model->select($sqlcheck);

        $c_id = substr($c_id, 0, 13);
        // var_dump($c_id);
        // var_dump($a[0]->c_id);

        if ($username == "") {
            echo "nodata username";
            exit;
        }
        if ($email == "") {
            echo "nodata email";
            exit;
        }
        if ($c_id == "") {
            echo "nodata c_id";
            exit;
        }

        if (count($a) > 0) {
            // print_r($a);
            // echo 'have error ' . count($a) . ' data is already have';
            // echo '<br>';
            if (count($a) > 0) {
                for ($i = 0; $i < count($a); $i++) {
                    $msg = '';
                    $postdata = '';
                    if (strtolower($a[$i]->username) == strtolower($username)) {
                        $msg .= '{username}';
                        $postdata .= "username= " . $username . " ";
                    }

                    if (strtolower($a[$i]->email) == strtolower($email)) {
                        $msg .= '{email}';
                        $postdata .= "email= " . $email . " ";
                    }

                    if ($a[$i]->c_id == $c_id) {
                        $msg .= '{c_id}';
                        $postdata .= "c_id= " . $c_id . " ";
                    }
                    $response = array(
                        'status' => "201",
                        'msg' => 'Duplicate= ' . $msg,
                        // 'data' => $postdata
                    );
                    echo json_encode($response);
                }
            }
        } else {
            $response = array(
                'status' => "101",
                'msg' => 'yes',
                // 'data' => $postdata
            );
            $s = $this->mydev_model->execute($insql);
            // var_dump($s);
            echo json_encode($response);
        }

    }

    public function register()
    {
        return view('from');

    }
    public function process()
    {
        $p_username = $this->request->getPOST('username');
        $p_password = $this->request->getPOST('password');
        $p_con_password = $this->request->getPOST('con_password');
        $p_email = $this->request->getPOST('email');
        $p_fname = $this->request->getPOST('fname');
        $p_lname = $this->request->getPOST('lname');
        $p_c_id = $this->request->getPOST('c_id');
        $p_phone = $this->request->getPOST('phone');
        $p_address = $this->request->getPOST('address');
        $p_provinces = $this->request->getPOST('provinces');
        $p_districts = $this->request->getPOST('districts');
        $p_subdistricts = $this->request->getPOST('subdistricts');
        $p_date = $this->request->getPOST('date');
        $my_token = $this->request->getPOST('token');
        $my_token = "ba59abbe56e057";
        $x = 1;

        if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["con_password"]) && isset($_POST["email"]) && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["c_id"]) && isset($_POST["provinces"]) && isset($_POST["districts"]) && isset($_POST["subdistricts"])) {
            $response = "";
            $validate_data_array = true;

        } else {
            $validate_data_array = false;
            $response = array(
                "status" => "555",
                "msg" => "array data incomplete",
                "data" => $_POST
            );
            echo json_encode($response);
            exit;
        }

        if ($p_username == "") {
            $response = array(
                "status" => "201",
                "msg" => "username error",
                "data" => $p_username
            );
            $x--;
            echo json_encode($response);
            exit;
        } else if ($p_password == "") {
            $response = array(
                "status" => "202",
                "msg" => "password error",
                "data" => $p_password
            );
            $x--;
            echo json_encode($response);
            exit;
        } else if ($p_con_password == "") {
            $response = array(
                "status" => "203",
                "msg" => "con_password error",
                "data" => $p_con_password
            );
            $x--;
            echo json_encode($response);
            exit;
        } else if ($p_con_password !== $p_password) {
            $response = array(
                "status" => "204",
                "msg" => "password not match error",
                "data" => $p_password
            );
            $x--;
            echo json_encode($response);
            exit;
        } else if ($p_email && $p_email == "") {
            $p_email = $_POST["email"];
            $response = array(
                "status" => "205",
                "msg" => "email error",
                "data" => $p_email
            );
            $x--;
            echo json_encode($response);
            exit;
        } else if ($p_fname == "") {
            $response = array(
                "status" => "206",
                "msg" => "fname error",
                "data" => $p_fname
            );
            $x--;
            echo json_encode($response);
            exit;
        } else if ($p_lname == "") {
            $p_lname = $_POST["lname"];
            $response = array(
                "status" => "207",
                "msg" => "lname error",
                "data" => $p_lname
            );
            $x--;
            echo json_encode($response);
            exit;
        } else if ($p_c_id == "") {
            $response = array(
                "status" => "208",
                "msg" => "c_id error",
                "data" => $p_c_id
            );
            $x--;
            echo json_encode($response);
            exit;
        } else if ($p_provinces == "") {
            $response = array(
                "status" => "209",
                "msg" => "provinces error",
                "data" => $p_provinces
            );
            $x--;
            echo json_encode($response);
            exit;
        } else if ($p_districts == "") {
            $response = array(
                "status" => "210",
                "msg" => "districts error",
                "data" => $p_districts
            );
            $x--;
            echo json_encode($response);
            exit;
        } else if ($p_subdistricts == "") {
            $response = array(
                "status" => "211",
                "msg" => "subdistricts error",
                "data" => $p_subdistricts
            );
            $x--;
            echo json_encode($response);
            exit;
        }


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
        if (preg_match($reg_username, $p_username) == FALSE) {
            $response = array(
                "status" => "302",
                "msg" => "reg username error",
                "data" => $_POST
            );
            $y--;
            echo json_encode($response);
        } else if (preg_match($reg_password, $p_password == FALSE)) {
            $response = array(
                "status" => "303",
                "msg" => "reg password error",
                "data" => $_POST
            );
            $y--;
            echo json_encode($response);
        } else if (preg_match($reg_con_password, $p_con_password) == FALSE) {
            $response = array(
                "status" => "303",
                "msg" => "reg confirm password error",
                "data" => $_POST
            );
            $y--;
            echo json_encode($response);
        } else if (preg_match($reg_email, $p_email) == FALSE) {
            $response = array(
                "status" => "303",
                "msg" => "reg email error",
                "data" => $_POST
            );
            $y--;
            echo json_encode($response);
        } else if (preg_match($reg_fname, $p_fname) == FALSE) {
            $response = array(
                "status" => "303",
                "msg" => "reg fist name error",
                "data" => $_POST
            );
            $y--;
            echo json_encode($response);
        } else if (preg_match($reg_lname, $p_lname) == FALSE) {
            $response = array(
                "status" => "303",
                "msg" => "reg last name error",
                "data" => $_POST
            );
            $y--;
            echo json_encode($response);
        } else if (preg_match($reg_c_id, $p_c_id) == FALSE) {
            $response = array(
                "status" => "303",
                "msg" => "reg ID error",
                "data" => $_POST
            );
            $y--;
            echo json_encode($response);
        } else if ($y === 1 && $validate_data_array == true) {
            // $web = new mysqlclass();
            // $sql = "SELECT * FROM db_table;";
            // $web->connect_db();
            // if (empty($web->connect)) {
            //     echo "can't connect database";
            //     exit;
            // }
            // $web->dbname(db_name);

            $sql_username = "SELECT username FROM db_table WHERE username = '$p_username'; ";
            $u = $this->mydev_model->select($sql_username);
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
            $e = $this->mydev_model->select($sql_email);
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
            $c = $this->mydev_model->select($sql_c_id);
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

            $sql_in = "INSERT INTO db_table (username, password, c_id, email, fname, lname , address , phone,provinces,districts,subdistricts) 
                   VALUES ('" . $p_username . "', '" . md5($p_password) . "','" . $p_c_id . "' , '" . $p_email . "', '" . $p_fname . "', '" . $p_lname . "', '" . ($p_address) . "','" . ($p_phone) . "','" . ($p_provinces) . "','" . ($p_districts) . "','" . ($p_subdistricts) . "');";
            // $this->mydev_model->mysqli_real_escape_string

            $aws = $this->mydev_model->execute($sql_in);
            // var_dump($aws);

            // ดำเนินการคำสั่ง SQL
            if ($aws == true) {
                $response = array(
                    "status" => "101",
                    "msg" => "Receive Data Success",
                    "data" => $_POST
                );
                echo json_encode($response);
                $this->write_log(json_encode($response));
            } else {
                $response = array(
                    "status" => "000",
                    "msg" => "Insert Fail",
                    "data" => $_POST
                );
                echo json_encode($response);
            }

            // ปิดการเชื่อมต่อ
            // $web->closedb();
            exit;
        }


    }
    private function write_log($log)
    {
        //Something to write to txt log
        $date_log = date("Y-m-d H:i:s") . PHP_EOL .
            "IP : " . $_SERVER['REMOTE_ADDR'] . PHP_EOL .
            "DATA : " . $log . PHP_EOL . "-------------------------" . PHP_EOL;
        //Save string to log, use FILE_APPEND to append.
        file_put_contents('..\app\Controllers\log\log_' . date("Ymd") . '.txt', $date_log, FILE_APPEND);
    }
    public function login()
    {
        return view('login');

    }
    public function login_process()
    {
        $username_user = isset($_POST['username']) ? $_POST['username'] : "";
        $password_user = isset($_POST['password']) ? ($_POST['password']) : "";
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
        }

        $sql = "SELECT username,password,status FROM db_table WHERE username = '" . $username_user . "' AND password = '" . md5($password_user) . "';";
        $result = $this->mydev_model->select($sql);


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

        if (count($result) == 1) {
            if ($status_user == 1) {
                $response = array(
                    "status" => "101",
                    "msg" => " yes is Found",
                    "data" => "username: " . $username_user . " " . "password: " . md5($password_user)
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

    public function logout()
    {
        session_start();
        session_destroy();
        return view("login");
    }

    public function login_success()
    {
        session_start();
        if (!isset($_SESSION["username"])) {
            header("Location: login");
            exit;
        }
        echo "<pre>";
        print_r($_SESSION);
        echo "Username: " . $_SESSION["username"] . " <br>";
        echo "<a href='logout' >Logout</a> <br>";
        echo "<a href='login'>Login</a>";
    }

    public function data_tier()
    {
        $url_api = "https://takeme.la/tikky_training/tikky_api";
        $date_current = date("Y-m-d H:i:s");
        $token = md5($date_current . "myapiss5");
        $postdata = array(
            "d" => $date_current,
            "token" => $token,
        );
        $getdata = $this->curl->post($url_api, $postdata);
        $pdata = json_decode($getdata->body, true);
        $allUsers = array();
        if (count($pdata['more_data']) > 0) {

            for ($i = 0; $i < 15; $i++) {
                $dataarray = array(
                    'user_id' => $pdata['more_data'][$i]['user_id'],
                    'user_name' => $pdata['more_data'][$i]['user_name'],
                    'user_logo' => $pdata['more_data'][$i]['user_logo'],
                    'user_gold' => $pdata['more_data'][$i]['user_gold'],
                );
                array_push($allUsers, $dataarray);
            }
        } else {
            echo "nodata";
        }
        $data['allUsers'] = $allUsers;
        // print_r($allUsers);
        return view('tier_page', $data);
    }

    public function index_th()
    {
        $url_api = "https://takeme.la/tikky_training/tikky_api";
        $date_current = date("Y-m-d H:i:s");
        $token = md5($date_current . "myapiss5");
        $postdata = array(
            "d" => $date_current,
            "token" => $token,
        );
        $getdata = $this->curl->post($url_api, $postdata);
        $pdata = json_decode($getdata->body, true);
        $allUsers = array();
        if (count($pdata['more_data']) > 0) {

            for ($i = 0; $i < 15; $i++) {
                $dataarray = array(
                    'user_id' => $pdata['more_data'][$i]['user_id'],
                    'user_name' => $pdata['more_data'][$i]['user_name'],
                    'user_logo' => $pdata['more_data'][$i]['user_logo'],
                    'user_gold' => $pdata['more_data'][$i]['user_gold'],
                );
                array_push($allUsers, $dataarray);
            }
        } else {
            echo "nodata";
        }
        $data['allUsers'] = $allUsers;
        // print_r($allUsers);
        return view('index_th', $data);
    }
    public function index_en()
    {
        $url_api = "https://takeme.la/tikky_training/tikky_api";
        $date_current = date("Y-m-d H:i:s");
        $token = md5($date_current . "myapiss5");
        $postdata = array(
            "d" => $date_current,
            "token" => $token,
        );
        $getdata = $this->curl->post($url_api, $postdata);
        $pdata = json_decode($getdata->body, true);
        $allUsers = array();
        if (count($pdata['more_data']) > 0) {

            for ($i = 0; $i < 15; $i++) {
                $dataarray = array(
                    'user_id' => $pdata['more_data'][$i]['user_id'],
                    'user_name' => $pdata['more_data'][$i]['user_name'],
                    'user_logo' => $pdata['more_data'][$i]['user_logo'],
                    'user_gold' => $pdata['more_data'][$i]['user_gold'],
                );
                array_push($allUsers, $dataarray);
            }
        } else {
            echo "nodata";
        }
        $data['allUsers'] = $allUsers;
        // print_r($allUsers);
        return view('index_en', $data);
    }
    public function zipcode()
    {
        $p_zipcode = $this->request->getPOST('zipcode');
        if (isset($_POST["zipcode"])) {
            $sql_zipcode = "SELECT a.name_in_thai p_name ,b.name_in_thai d_name,c.name_in_thai s_name , c.zip_code ,a.id p_id,b.id d_id,c.id s_id,c.district_id
            FROM provinces a
            LEFT JOIN districts b
            ON  a.id = b.province_id
            LEFT JOIN subdistricts c
            ON b.id = c.district_id
            WHERE c.zip_code = $p_zipcode
            ;";
            $p = $this->mydev_model->select($sql_zipcode);
            $response = array(
                "status" => "333",
                "msg" => "zipcode complete",
                "data" => $p
            );
            echo json_encode($response);
            exit;
        } else {
            $response = array(
                "status" => "303",
                "msg" => "zipcode incomplete",
                "data" => ""
            );
            echo json_encode($response);
            exit;
        }
    }
    public function list_user()
    {
        $sql = "SELECT  a.id,a.username,a.password,a.c_id,a.email,a.fname,a.lname,a.address,a.creattime,a.updatetime,a.status,a.phone,b.name_in_thai pro_name,c.name_in_thai dis_name,d.name_in_thai sub_name
        FROM db_table a
        LEFT JOIN provinces b
        ON  a.provinces_id = b.id
        LEFT JOIN districts c
        ON a.districts_id = c.id
        LEFT JOIN subdistricts d
        ON a.subdistricts_id = d.id 
        ORDER BY a.id DESC
        ;";
        $array_result = $this->mydev_model->select($sql);

        // if (count($array_result) > 0) {
        //     $array_pds = array();
        //     for ($i = 0; $i < count($array_result); $i++) {
        //         $sql_pds = "SELECT a.name_in_thai p_name ,b.name_in_thai d_name,c.name_in_thai s_name ,a.id p_id,b.id d_id,c.id s_id
        //         FROM provinces a
        //         LEFT JOIN districts b
        //         ON  a.id = b.province_id
        //         LEFT JOIN subdistricts c
        //         ON b.id = c.district_id
        //         WHERE a.id ='" . $array_result[$i]->provinces . "'  AND b.id = '" . $array_result[$i]->districts . "' AND c.id = '" . $array_result[$i]->subdistricts . "'
        //         ;";
        //         array_push($array_pds, $this->mydev_model->select($sql_pds));
        //     }
        //     echo '<pre>';
        //     var_dump($array_pds);
        // }
        // foreach ($array_result as $key => $value) {
        //     foreach ($array_pds as $k => $v) {
        //         if($key)
        //     }
        // }



        if (isset($_POST["del"])) {
            $id = $_POST["id"];
            $del = "DELETE FROM db_table WHERE id=$id;";
            $result = $this->mydev_model->execute($del);
            if ($result == true) {
                echo "<script>
        window.location.href = 'list_user';
   </script>";
            } else {
                echo "No Dele";
            }
        }

        if (isset($_POST["up"])) {
            $id = $_POST["id"];
            $newphone = $_POST["newphone"];
            $update_phone = "UPDATE db_table SET phone = $newphone WHERE id=$id;";
            // print_r($newphone);
            $result = $this->mydev_model->execute($update_phone);
            if ($result == true) {
                echo "<script>
        window.location.href = 'list_user';
   </script>";
            } else {
                echo "No Up";
            }

        }
        $data['array_result'] = $array_result;
        return view('list_user', $data);

    }
    public function test01()
    {
        echo '<div>วาดรูปสี่เหลี่ยมXO(01)<div/>
        <form method="POST" action="">
        <input type="text" name="ox" placeholder="กรอกข้อมูลที่นี่">
        <button type="submit">ส่งข้อมูล</button>
        </form>
        ';
        $ox = $this->request->getPOST('ox');
        if (isset($_POST['ox']) && $ox >= 5 && $ox <= 50) {
            $x = $ox;
            for ($z = 0; $z <= $x; $z++) {
                for ($d = 0; $d < $z; $d++) {
                    echo "<span style='color:black;'>X</span>";
                    if ($z - $d == 1) {
                        for ($c = 0; $c <= $x - $d - 1; $c++) {
                            echo "<span style='color:red;'>O</span>";
                        }
                    }
                }
                echo "<br>";
            }
        } else {
            echo "กรุณากรอกเลขระหว่าง 5 - 50 ";
        }
    }
    public function test02()
    {
        echo '<div>วาดรูปสี่เหลี่ยมXO(02)<div/>
        <form method="POST" action="">
        <input type="text" name="ox2" placeholder="กรอกข้อมูลที่นี่">
        <button type="submit">ส่งข้อมูล</button>
        </form>
        ';
        $ox = $this->request->getPOST('ox2');
        if (isset($_POST['ox2']) && $ox >= 5 && $ox <= 50) {
            $x = $ox;
            for ($z = 0; $z <= $x; $z++) {
                for ($d = 0; $d < ($z) * 2; $d++) {
                    echo "<span style='color:black;'>X</span>";
                    if ($z - $d == 1) {
                        for ($c = 0; $c <= ($x - $d - 1) * 2; $c++) {
                            echo "<span style='color:red;'>O</span>";
                        }
                    }
                }
                echo "<br>";
            }
        } else {
            echo "กรุณากรอกเลขระหว่าง 5 - 50 ";
        }

    }
    public function test03()
    {
        echo '<div>วาดรูปสี่เหลี่ยมXO(03)<div/>
        <form method="POST" action="">
        <input type="text" name="ox2" placeholder="กรอกข้อมูลที่นี่">
        <button type="submit">ส่งข้อมูล</button>
        </form>
        ';
        $ox = $this->request->getPOST('ox2');
        if (isset($_POST['ox2']) && $ox >= 5 && $ox <= 50) {
            $x = $ox;
            for ($i = 1; $i <= $x; $i++) {
                if ($i % 5 == 0) {
                    for ($z = 1; $z <= $i; $z++) {
                        echo "<span style='color:red;'>O</span>";
                    }
                } else {
                    for ($z = 1; $z <= $i; $z++) {
                        if ($z % 5 == 0) {
                            echo "<span style='color:red;'>O</span>";
                        } else {
                            echo "<span style='color:black;'>X</span>";
                        }
                    }
                }
                echo '<br>';
            }
        } else {
            echo "กรุณากรอกเลขระหว่าง 5 - 50 ";
        }
    }
    public function test04()
    {
        echo '<div>วาดรูปสี่เหลี่ยมXO(04)<div/>
        <form method="POST" action="">
        <input type="text" name="ox2" placeholder="กรอกข้อมูลที่นี่">
        <button type="submit">ส่งข้อมูล</button>
        </form>
        ';
        $ox = $this->request->getPOST('ox2');
        if (isset($_POST['ox2']) && $ox >= 5 && $ox <= 50) {
            $x = $ox;
            for ($u = $x; $u >= 0; $u--) {
                for ($i = 1; $i <= $u; $i++) {
                    if ($u % 5 == 0) {
                        echo "<span style='color:red;'>O</span>";
                    } else if ($i % 5 == 0) {
                        echo "<span style='color:red;'>O</span>";
                    } else {
                        echo "<span style='color:Black;'>X</span>";
                    }

                }
                echo '<br>';
            }

        } else {
            echo "กรุณากรอกเลขระหว่าง 5 - 50 ";
        }
    }
    public function test05()
    {
        echo '<div>ผลรวมเลขคู่คี่(05)<div/>
        <form method="POST" action="">
        <input type="text" name="ox2" placeholder="กรอกข้อมูลที่นี่">
        <button type="submit">ส่งข้อมูล</button>
        </form>
        ';
        $ox = $this->request->getPOST('ox2');
        if (isset($_POST['ox2'])) {

            $n = $ox;
            $p = 0;
            $d = 0;
            $p_t = array();
            $d_t = array();
            for ($i = 1; $i <= $n; $i++) {
                if ($i % 2 == 0) {
                    array_push($p_t, $i);
                    $p = $p + $i;
                } else {
                    array_push($d_t, $i);
                    $d = $d + $i;
                }
            }
            echo 'คู่ ';
            echo $this->addsymbol($p_t, "+") . " = ";
            echo number_format($p);
            echo '<br>';
            echo 'คูี่ ';
            echo $this->addsymbol($d_t, "+") . " = ";
            echo number_format($d);
        }


    }
    public function test06()
    {
        echo '<div>การหาผลคูณของจำนวน(06)<div/>
        <form method="POST" action="">
        จำนวน n <input type="text" name="n" placeholder="กรอกข้อมูลที่นี่ $n"> <br>
        จำนวน d <input type="text" name="d" placeholder="กรอกข้อมูลที่นี่">
        <button type="submit">ส่งข้อมูล</button>
        </form>
        ';
        $get_n = $this->request->getPOST('n');
        $get_d = $this->request->getPOST('d');
        if (isset($_POST['n']) && isset($_POST['d']) && $get_n != "" && $get_d != "") {
            $n = $get_n;
            $d = $get_d;
            $i_ = 1;
            $aws_ = '';
            $a = 1;
            for ($i = 1; $i <= $n; $i++) {
                if ($i % $d == 0) {
                    if ($a == 1) {
                        $aws_ .= $i;
                    } else {
                        $aws_ .= "*";
                        $aws_ .= $i;
                    }
                    $i_ = $i_ * $i;
                    $a++;
                } else if ($d > $n) {
                    echo "ไม่เจอผลลัพธ์";
                    return false;
                }
            }
            echo $aws_, " = ", number_format($i_);
        }
    }
    public function test07()
    {
        echo '<div>หาผลรวมของ เลขคู่ ในช่วง 1 ถึง n จากนั้นนำผลรวมที่ได้ คูณ กับผลรวมของ เลขคี่ ในช่วงเดียวกัน(07)<div/>
        <form method="POST" action="">
        จำนวน n <input type="text" name="n" placeholder="กรอกข้อมูลที่นี่ $n"> <br>
        <button type="submit">ส่งข้อมูล</button>
        </form>
        ';
        $get_n = $this->request->getPOST('n');
        if (isset($_POST['n']) && $get_n != "") {
            $n = $get_n;
            $p = 0;
            $d = 0;
            $a = 1;
            $b = 1;
            $p_ = '';
            $d_ = '';
            $test = array();
            if ($n <= 0) {
                echo 'ไม่เจอผลลัพธ์';
                return false;
            } else {
                for ($i = 1; $i <= $n; $i++) {
                    if ($i % 2 == 0) {
                        if ($a == 1) {
                            $p_ .= "(";
                            $p_ .= $i;
                            // array_push($test, $i);
                        } else {
                            $p_ .= ",";
                            $p_ .= $i;
                            // array_push($test, $i);
                        }
                        $p = $p + $i;
                        $a++;
                    } else {
                        if ($b == 1) {
                            $d_ .= "(";
                            $d_ .= $i;
                        } else {
                            $d_ .= ",";
                            $d_ .= $i;
                        }
                        $d = $d + $i;
                        $b++;
                    }
                }
            }
            echo "ผลรวมเลขคู่ " . $p_ . ')' . ' = ' . $p;
            echo '<br>';
            echo "ผลรวมเลขคี่ " . $d_ . ')' . ' = ' . $d;
            echo '<br>';
            echo "ผลคุณเลขคู่เลขคี่ " . $p . 'x' . $d . ' = ' . $p * $d;
        }

    }
    public function test08()
    {
        echo '<div>หาผลรวมของ เลขคู่ ในช่วง 1 ถึง n จากนั้นนำผลรวมที่ได้ คูณ กับผลรวมของ เลขคี่ ในช่วงเดียวกัน(07)<div/>
        <form method="POST" action="">
        จำนวน n <input type="text" name="n" placeholder="กรอกข้อมูลที่นี่ $n"> <br>
        จำนวน d <input type="text" name="d" placeholder="กรอกข้อมูลที่นี่ $d"> <br>
        จำนวน m <input type="text" name="m" placeholder="กรอกข้อมูลที่นี่ $m"> <br>
        <button type="submit">ส่งข้อมูล</button>
        </form>
        ';
        $get_n = $this->request->getPOST('n');
        $get_d = $this->request->getPOST('d');
        $get_m = $this->request->getPOST('m');
        if (isset($_POST['n']) && $get_n != "" && isset($_POST['d']) && $get_d != "" && isset($_POST['m']) && $get_m != "") {
            $n = $get_n;
            $d = $get_d;
            $m = $get_m;
            $all = array();
            $plus = 1;
            $mod = 1;
            for ($i = 1; $i <= $n; $i++) {
                if ($i % $d == 0) {
                    array_push($all, $i);
                }
            }
            if (count($all) == 0) {
                echo "No number found";
                exit;
            } elseif ($n < $d || $m < 1) {
                echo "Invalid input";
                exit;
            }
            // print_r($all);
            echo '<br>';
            echo "input : n= " . $n . ' d= ' . $d . ' m= ' . $m;
            echo '<hr>';
            echo '<br>';
            if (count($all) > $m) {
                $all = array_slice($all, count($all) - $m, count($all));
                // print_r($all);
                for ($i = 0; $i < count($all); $i++) {
                    $plus = $plus * $all[$i];
                    $mod = ($mod * $all[$i]) % (10 ** 6);
                    echo ' mod= ', $mod;
                    echo ' all= ', $all[$i];
                    echo '<hr>';
                    echo '<br>';
                }
            } else {
                for ($i = 0; $i < count($all); $i++) {
                    $plus = ($plus) * $all[$i];
                    echo ' mod= ', $mod;
                    echo ' all= ', $all[$i];
                    echo '<hr>';
                    echo '<br>';
                    $mod = ($mod * $all[$i]) % (10 ** 6);
                }

            }
            echo 'Last input ' . $m . ' number divisible by ' . $d . ' = ';
            echo $this->addsymbol($all, "x");
            echo '<br>';
            if ($plus > 10 ** 19) {
                echo 'ผลลัพธ์ที่ได้ ' . ($plus);
            } else {
                echo 'ผลลัพธ์ที่ได้ ' . number_format($plus);
            }

            echo '<br>';

            if ($plus > (10 ** 6) && $plus >= 10 ** 20) {
                echo 'Mod(10**6) ' . " = " . '<span style="color:red;">' . number_format($mod) . '<span/>';
            } else if ($plus > (10 ** 6)) {
                echo 'Mod(10**6) ' . " = " . number_format($mod);
            }
        }
    }
    public function test09()
    {
        $x = 35;
        // echo 1 / 12;
        if (round($x / 12) > 1) {
            $t = $x / 12;
        } else {
            $t = 1;
        }
        $t = round($t);
        $a = 2;
        $b = 2;
        for ($z = 0; $z < $t; $z++) {
            echo '<table style="border: 1px solid black; width:100%; overflow-x:10px; border-collapse: collapse; " >';
            echo '<tr>';
            for ($e = 0; $e <= 12; $e++) {
                $n = ($z * 13) + $e + 2;
                if ($n > $x)
                    break;
                echo '<th class="" style="border: 1px solid black; " >แม่ ' . $n . '</th>';
                $a = $a + 1;
            }
            echo '</tr>';

            for ($i = 1; $i <= 12; $i++) {
                echo '<tr>';
                for ($g = 0; $g <= 12; $g++) {
                    $n = ($z * 13) + $g + 2;
                    if ($n > $x)
                        break;
                    echo '<td style="border: 1px solid black;" >' . $i . ' X ' . $n . ' = ' . $i * $n . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
            echo '<br>';
            echo '<br>';
        }
    }
    public function test10()
    {
        echo '<div style="text-align: center;">พิรามิดตัวเลข<div/>
        <form method="POST" action="">
        จำนวน n <input type="text" name="n" placeholder="กรอกข้อมูลที่นี่ $n"> <br>
        <button type="submit">ส่งข้อมูล</button>
        </form>
        ';
        $get_n = $this->request->getPOST('n');
        if (isset($_POST['n']) && $get_n != "") {
            $x = $get_n;
            $a = 1;
            echo '<div style="text-align: center;">';
            for ($i = 0; $i <= $x; $i++) {
                for ($j = 0; $j < $i; $j++) {
                    echo '<span> {' . $a . '} </span>';
                    $a++;
                }
                echo '<br>';
            }
            echo '</div>';
        }

    }
    public function test11()
    {
        echo '<div style="text-align: center;">พิรามิดตัวเลข Zig&Zag<div/>
        <form method="POST" action="">
        จำนวน n <input type="text" name="n" placeholder="กรอกข้อมูลที่นี่ $n"> <br>
        <button type="submit">ส่งข้อมูล</button>
        </form>
        ';
        $get_n = $this->request->getPOST('n');
        if (isset($_POST['n']) && $get_n != "") {
            $x = $get_n;
            $a = 1;
            $b = 1;
            echo '<div style="text-align: center;">';
            for ($i = 1; $i <= $x; $i++) {
                if ($i % 2 == 0) {
                    $b = $a + $i;
                    // echo 'A=', $a;
                    // echo 'I=', $i;
                    // echo 'B=', $b;
                    for ($j = 1; $j <= $i; $j++) {
                        echo '<span> {' . $b - $j . '} </span>';
                        $a++;
                    }
                } else {
                    for ($j = 0; $j < $i; $j++) {
                        echo '<span> {' . $a . '} </span>';
                        $a++;
                    }

                }
                echo '<br>';
            }
            echo '</div>';
        }

    }
    public function addsymbol($text = array(), $sym = "")
    {
        $data = "";
        if (is_array($text)) {
            for ($i = 0; $i < count($text); $i++) {
                if (count($text) - 1 == $i) {
                    $data .= $text[$i];
                } else {
                    $data .= $text[$i] . $sym;
                }
            }
            return $data;
        }
    }

}
