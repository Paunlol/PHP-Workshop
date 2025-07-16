<?php
// echo "<pre>";
// print_r($_GET);
// echo "<hr>";
// echo "<pre>";
// print_r($_POST);
// var_dump($_POST);

if (isset($_POST['submit']) && isset($_POST['submit']) != "") {
    if (isset($_POST['number_data']) && isset($_POST['number_data']) != "") {
        $number = $_POST['number_data'];
        cal($number);
        // echo $number;
    } else {
        echo "Wrong not pass";
        exit;
    }

}
function cal($i)
{
    $result = "Wrong no point";
    if ($i >= 80) {
        echo "A";
    } else if ($i >= 70) {
        echo "B";
    } else if ($i >= 60) {
        echo "C";
    } else if ($i >= 50) {
        echo "D";
    } else {
        echo "F";
    }
    return $result;
}
?>