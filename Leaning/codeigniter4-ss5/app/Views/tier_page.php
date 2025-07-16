<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tier_Page</title>
    <style>
        table {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
            margin: 0 auto;
            border: 1px solid black;
            border-collapse: collapse;
        }


        td {
            font-weight: 600;
            border: 1px solid black;
            border-collapse: collapse;
        }

        img {
            width: 200px;
        }

        .top3 {
            width: 30%;
            background-color: brown;
        }

        .top10 {
            background-color: skyblue;
        }

        .top {
            background-color: yellow;
        }

        .head {
            background-color: red;
        }
    </style>

</head>

<body>

    <?php
    // usort($allUsers, function ($a, $b) {
    //     return $b['user_gold'] > $a['user_gold']; // เปรียบเทียบจากมากไปน้อย
    // });
    echo "<pre>";
    // var_dump($allUsers);
    ?>
    <table>
        <tr>
            <th class="head">No</th>
            <th class="head">Detail</th>
            <th class="head">Note</th>
        </tr>
        <?php
        for ($i = 0; $i < count($allUsers); $i++) {
            if ($i == 0) {
                echo "<tr><td class='top3'>" . ($i + 1) . "</td>";
                echo "<td class='top3'>
                        <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                        <div>" . $allUsers[$i]['user_id'] . "</div>
                        <div>" . $allUsers[$i]['user_name'] . "</div>
                        </td>";
                echo "<td class='top3'>5,000</td></tr>";
            } else if ($i == 1) {
                echo "<tr><td class='top3'>" . ($i + 1) . "</td>";
                echo "<td class='top3'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                echo "<td class='top3'>4,000</td></tr>";
            } else if ($i == 2) {
                echo "<tr><td class='top3'>" . ($i + 1) . "</td>";
                echo "<td class='top3'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                echo "<td class='top3'>3,000</td></tr>";
            } else if ($i <= 8) {
                echo "<tr><td class='top10'>" . ($i + 1) . "</td>";
                echo "<td class='top10'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                echo "<td class='top10'>500</td></tr>";
            } else {
                echo "<tr><td class='top'>" . ($i + 1) . "</td>";
                echo "<td class='top'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                echo "<td class='top'>100</td></tr>";
            }
        }
        ?>
    </table>

</body>

</html>