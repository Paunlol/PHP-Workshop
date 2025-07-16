<?php
require_once("variable_db.php");
class mysqlclass
{
    var $connect;

    function connect_db()
    {
        $this->connect = mysqli_connect(server_ip, user_db, password_db);

        @mysqli_query($this->connect, "set character_set_results=utf8mb4");
        @mysqli_query($this->connect, "set character_set_client=utf8mb4");
        @mysqli_query($this->connect, "set character_set_connection=utf8mb4");
    }

    function dbname($dbname)
    {
        @mysqli_select_db($this->connect, $dbname);
        if (mysqli_error($this->connect) != "") {
            echo mysqli_error($this->connect);
        }
    }

    function closedb()
    {
        @mysqli_close($this->connect);
    }

    function select($sql)
    {
        $array_result = array();
        $result = @mysqli_query($this->connect, $sql);
        if ($result) {
            while ($row = mysqli_fetch_object($result)) {
                array_push($array_result, $row);
            }
            mysqli_free_result($result);

        } else {
            if (mysqli_error($this->connect) != "") {
                // echo mysqli_error($this->connect);
            }
            return false;
        }
        return $array_result;
    }

    function execute($sql)
    {
        $result = mysqli_query($this->connect, $sql);
        if ($result) {
            return true;
        } else {
            if (mysqli_error($this->connect) != "") {
                // echo mysqli_error($this->connect);
            }
            ;
            return false;
        }
    }
    function mysqli_real_escape_string($str)
    {
        $result = mysqli_real_escape_string($this->connect, $str);
        return $result;
    }
}
?>