<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    
    <?php
    $ford = array(12, 13, 14);
    $ford = array("ford", "mild", "Ptod");
    echo "<pre>";
    print_r($ford);
    echo json_encode($ford); //เข้ารหัส
    $jsonford = json_encode($ford);
    echo json_decode($jsonford); //ถอดรหัส
    echo count($ford);

    // foreach ($variable as $key => $value) {
    //     # code...
    // }

    // for ($i=0; $i < ; $i++) { 
    //     # code...
    // }

?>

</body>
</html>