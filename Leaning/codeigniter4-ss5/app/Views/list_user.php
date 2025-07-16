<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show tabel User</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        table {
            border-radius: 5px;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th {
            background-color: aquamarine;
            border: 1px solid black;
            padding: 10px;

        }


        td {
            border-radius: 10px;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<table>
    <tr>
        <?php

        function month($m)
        {
            $x = (int) $m;
            // echo var_dump("01");
            // echo var_dump(01);
            $month = array(
                "0" => "ม.ค.",
                "1" => "ก.พ.",
                "2" => "มี.ค.",
                "3" => "เม.ย.",
                "4" => "พ.ค.",
                "5" => "มิ.ย.",
                "6" => "ก.ค.",
                "7" => "ส.ค.",
                "8" => "ก.ย.",
                "9" => "ต.ค.",
                "10" => "พ.ย.",
                "11" => "ธ.ค."
            );
            for ($i = 0; $i < $x; $i++) {
                return $month[$x - 1];
            }
        }
        function year($y)
        {
            if ($y != "") {
                return $y + 543;
            } else {
                return "error year";

            }

        }
        echo '<pre>';
        // var_dump($array_result);
        if (count($array_result) !== 0) {
            // $date = date_create();
            // echo date_format($date, "D/m/d H:i:s");
            // echo $date;
            echo $th = "<th>No</th>
        <th>Username</th>
        <th>Firstname - Lastname</th>
        <th>Citizen ID</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Province</th>
        <th>District</th>
        <th>Subdistrict</th>
        <th>Address</th>
        <th>Time Create</th>    
        <th>Time Update</th>
        <th>Status</th>
        <th>Action</th>";
            for ($i = 0; $i < count($array_result); $i++) {

                $id = $array_result[$i]->id;
                $newphone = $array_result[$i]->phone;
                $date_day_c = date_create($array_result[$i]->creattime);
                $date_month_c = date_create($array_result[$i]->creattime);
                $date_year_c = date_create($array_result[$i]->creattime);
                $date_time_c = date_create($array_result[$i]->creattime);
                // print_r($id . " ");
                $date_day_l = date_create($array_result[$i]->updatetime);
                $date_month_l = date_create($array_result[$i]->updatetime);
                $date_year_l = date_create($array_result[$i]->updatetime);
                $date_time_l = date_create($array_result[$i]->updatetime);
                // print_r($date);
                $date_d_c = date_format($date_day_c, "d");
                $date_m_c = date_format($date_month_c, "m");
                $date_y_c = date_format($date_year_c, "Y");
                $date_t_c = date_format($date_time_c, "H:i:s");
                // print_r($date);
                $date_d_l = date_format($date_day_l, "d");
                $date_m_l = date_format($date_month_l, "m");
                $date_y_l = date_format($date_year_l, "Y");
                $date_t_l = date_format($date_time_l, "H:i:s");
                // echo $date_d . " " . month($date_m) . " " . year($date_y) . " " . $date_t;
                // die();
                // echo date_format($date, "D/M/Y H:i:s");
        

                echo $td = "<form method='POST'><tr>
                    <td>" . ($i + 1) . "</td>" .
                    "<td>" . $array_result[$i]->username . "</td>" .
                    "<td>" . $array_result[$i]->fname . " - " . $array_result[$i]->lname . "</td>" .
                    "<td>" . $array_result[$i]->c_id . "</td>" .
                    "<td>" . $array_result[$i]->email . "</td>" .
                    "<td> <input name='newphone' value='$newphone'> </input></td>" .
                    "<td>" . ($array_result[$i]->pro_name ? $array_result[$i]->pro_name : "-") . "</td>" .
                    "<td>" . ($array_result[$i]->dis_name ? $array_result[$i]->dis_name : "-") . "</td>" .
                    "<td>" . ($array_result[$i]->sub_name ? $array_result[$i]->sub_name : "-") . "</td>" .
                    "<td>" . $array_result[$i]->address . "</td>" .
                    "<td>" . $date_d_c . " " . month($date_m_c) . " " . year($date_y_c) . " " . $date_t_c . "</td>" .
                    "<td>" . $date_d_l . " " . month($date_m_l) . " " . year($date_y_l) . " " . $date_t_l . "</td>" .
                    "<td>" . ($array_result[$i]->status == 1 ? "Active" : "Inactive") . "</td>" .
                    "<td>" .
                    "<input name='id' value='$id' type='hidden'>" .
                    "<button name='del' id='del'>Delete</button>" .
                    "<button name='up' id='up' value='$id'>Upload</button>" .
                    "</td>" .
                    "</tr></form>";

            }
        } else {
            echo $nodata = "<tr><td>No Data</td></tr>";
        }

        ?>

    </tr>
</table>

<body>

</body>
<script>
    $(document).ready(function () {
        console.log("ready!");
    });

    $('#del').click(function () {
        id = $('#id').val()
        console.log("id", id);
    })


    function ajax(params) {
        console.log("params", params);

        $.ajax({
            type: "POST", //METHOD "GET","POST"
            url: "tableprocess.php", //File ที่ส่งค่าไปหา
            data: dataString,//cache: false,
            success: function (data) {
                console.log("1", data);
                var receiveData = JSON.parse(data)
                console.log(receiveData);
                if (receiveData.status == "101") {
                    // alert(receiveData.msg);
                    // $("#warn").fadeIn()
                    $("#warn").html("Receive Data Success").css("color", "green");
                    window.location.href("connet.php")
                    // $("#warn").fadeOut(5000)
                }
                else {
                    // alert(receiveData.msg);
                    // $("#warn").fadeIn()
                    $("#warn").html(receiveData.msg).css("color", "red")
                    // $("#warn").fadeOut(5000)
                }
            }
        });
    }
</script>

</html>