<?php
$arr = array(5, 6, 3, 6, 7, 50, 122, 43, 53, 51);
// $a = 0;
// for ($i = 122; $i >= $a; $i--) {
//     $b;
//     foreach ($arr as $k => $v) {
//         $b = $v;
//         if ($i == $b) {
//             echo $b;
//             echo "<br>";
//         }
//     }
// }

// echo $arr[0];

$arr = array(5, 6, 3, 6, 7, 50, 122, 43, 53, 51);

for ($i = 0; $i < count($arr); $i++) {
    echo "i= $i";
    for ($j = 0; $i > $j; $j++) {
        echo "j= $j";
        if ($arr[$i] > $arr[$j]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
    echo "<br>";

}
echo "<pre>";
print_r($arr);
?>