<?php
$servername = "127.0.0.1";
$username = "root";
$password = "xxxx";
$dbname = "full_ss5";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, $dbname);
// print_r($conn->errno);
// Check connection
if ($conn->errno) {
    die("Connection failed: " . $conn->connect_error);
}
@mysqli_query($conn, "set character_set_results=utf8mb4");
@mysqli_query($conn, "set character_set_client=utf8mb4");
@mysqli_query($conn, "set character_set_connection=utf8mb4");
$sql = "SELECT * FROM user_info;";
$result = mysqli_query($conn, $sql);

$array_result = array();
while ($row = mysqli_fetch_object($result)) {
    array_push($array_result, $row);
}
if (count($array_result) > 0) {
    for ($i = 0; $i < count($array_result); $i++) {
        echo "id =" . $array_result[$i]->id;
        echo "|username =" . $array_result[$i]->username;
        echo "<hr>";
    }
}

mysqli_close($conn);


// $servername = "127.1.1.1";
// $username = "ford";
// $password = "ford789789";
// $db = "full_ss5";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $db);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


// $sql = "SELECT * fROM db_table";
// $result = $conn->query($sql);
// echo "<pre>";
// print_r($result);
// print_r(mysqli_fetch_assoc($result));

// // print_r(fetch_assoc($result));

// if ($result->num_rows > 0) {
//     // output data of each row
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"] . " Username:" . $row["username"] . " Password:" . $row["password"] . " - Name: " . $row["fname"] . " " . $row["lname"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// $sql_in = "INSERT db_table
// (`username`,  `password`,  `c_id`,  `email`,  `fname`,  `lname`)
// VALUES (`user2`,  `123456`,  `74185296345678`,  `user2@user.com`,  `usertwol`,  `usertwol`)";


?>