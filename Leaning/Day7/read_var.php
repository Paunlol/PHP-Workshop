<?php
include_once("../include/webconfig.php");

$web = new mysqlclass();
$web->connect_db();
if (empty($web->connect)) {
    echo "can't connect database";
    exit;
}
$web->dbname(db_name);

$sql = "SELECT * FROM db_table WHERE status IN('0','1')  ORDER BY creattime DESC ;";

$res = $web->select($sql);
// echo "<pre>";
// print_r($res);
if (count($res) > 0) {
    for ($i = 0; $i < count($res); $i++) {
        echo $res[$i]->username;
        echo '<hr>';
    }
}
$web->closedb();
?>