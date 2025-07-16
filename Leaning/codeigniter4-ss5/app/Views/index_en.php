<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>index_en</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        table {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
            margin: 0 auto;
            border: 1px solid black;
            border-collapse: collapse;
        }

        .img-coupon {
            width: 80px;
        }

        td {
            font-weight: 600;
            border: 1px solid black;
            border-collapse: collapse;
        }

        .img-user {
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

    <div class="wrapper">

        <div class="section1">

            <div class="pic-top"><img img src="/assets/images/pic-top.jpg" /></div>

            <div class="content">

                <h class="a2">
                    RISING DRAGON</h>
                <br /><br />

                Ranking<br />
                Host who received most Chinese Dragon<br /><br />
                Click here for rank preview<br /><br />

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
                        <div><img class='img-user' src='" . $allUsers[$i]['user_logo'] . "'></div>
                        <div>" . $allUsers[$i]['user_id'] . "</div>
                        <div>" . $allUsers[$i]['user_name'] . "</div>
                        </td>";
                            echo "<td class='top3 '><img class='img-coupon' src=\assets\icon_reward\coupon\icon-คูปอง-5000-en.png /></td></tr>";
                        } else if ($i == 1) {
                            echo "<tr><td class='top3'>" . ($i + 1) . "</td>";
                            echo "<td class='top3'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                            echo "<td class='top3'><img class='img-coupon' src=\assets\icon_reward\coupon\icon-คูปอง-3000-en.png /></td></tr>";
                        } else if ($i == 2) {
                            echo "<tr><td class='top3'>" . ($i + 1) . "</td>";
                            echo "<td class='top3'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                            echo "<td class='top3'><img class='img-coupon' src=\assets\icon_reward\coupon\icon-คูปอง-2000-en.png /></td></tr>";
                        } else if ($i <= 9) {
                            echo "<tr><td class='top10'>" . ($i + 1) . "</td>";
                            echo "<td class='top10'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                            echo "<td class='top10'><img class='img-coupon' src=\assets\icon_reward\coupon\icon-คูปอง-400-en.png /></td></tr>";
                        } else {
                            echo "<tr><td class='top'>" . ($i + 1) . "</td>";
                            echo "<td class='top'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                            echo "<td class='top'><img class='img-coupon' src=\assets\icon_reward\coupon\icon-คูปอง-100-en.png /></td></tr>";
                        }
                    }
                    ?>
                </table>
                <br><br>
                <h class="a1">EVENT DURATION</h>
                <br />
                21 JAN 2025 (10.00 AM) – 29 JAN 2025 (10.00 PM) GMT+7
                <br /><br />

                <h class="a1">EVENT DETAILS</h><br />
                ➤ Top 5 Broadcasters who receive most of gift,<br />
                will receive the rewards.<br />
                ➤ Broadcaster have to cumulate live/lock session/call<br />
                period total at least 5 hours, will be rewarded.<br />
                ➤ Broadcasters have to cumulate<br />
                gift more than 5,000 pieces, will be rewarded.<br /><br />

                <img src="/assets/images/01.png" />
                <br />
                Chinese Dragon 20 Coupons<br />
                will receive 2 Coupons/piece
                <br /><br />

                <h class="a1">Event Rewards
                </h><br />
                40,000 coupons (5 reward)<br />
                <br />

                <h class="a2">Total reward of 200,000 coupons<br />
                    <br />


                    <div class="note">
                        <font size="+2">Remarks</font><br />
                        ➤ For inquiries and problem report, contact<br />
                        LINE: @takemeclub / Fb: @TakeMeFanClub<br />
                        ➤ Checking and prize giving by the staff takes place within 5-7 days<br />
                        after the event has been over,<br />
                        ➤ In case of server maintenance or another reason causing players<br />
                        cannot be online during event holding,event still ends as it was.<br />
                        ➤ The team reserves the right not to count event points from gifts received<br />
                        from users who have not made a top-up earlier.<br />
                        ➤ In case of server maintenance or another reason<br />
                        causing players cannot be online during event holding,<br />
                        event still ends as it was.<br />
                        ➤ Ranking and time mainly based on server.<br />
                        ➤ Staff decision is final.<br />
                        <b>Sponsor by WinNine Pacific : <a href="https://winnine.com.au/main.php"
                                target="_blank">winnine.com.au</a></b><br />


                    </div><!-- /note -->

                    <div class="foot">WinNine Pacific Pty Ltd Level 20, Zenith Center, 821 Pacific Hwy, Chatswood NSW
                        2067 Australia</div>

            </div><!-- /section1 -->

        </div><!-- /wrapper -->

</body>

</html>