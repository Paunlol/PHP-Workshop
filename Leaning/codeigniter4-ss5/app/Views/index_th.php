<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index_th</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        table {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
            margin: 0 auto;
            border: 1px solid black;
            border-collapse: collapse;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }


        td {
            font-weight: 600;
            border: 1px solid black;
            border-collapse: collapse;
        }

        .img-coupon {
            width: 80px;
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

            <div class="pic-top"><img src="/assets/images/pic-top.jpg" /></div>

            <div class="content">

                <h class="a2">
                    มังกรผงาด
                </h><br /><br />

                อันดับ<br />
                วีเจที่ได้รับ Chinese Dragon มากที่สุด<br /><br />

                ปุ่ม กดดูอันดับ เพิ่มเติม <br /><br />
                <button id="button_rank" onclick="toggleDisplay()">กดดูอันดับ</button>
                <br><br>
                <table id="table_rank">
                    <tr>
                        <th class="head">ลำดับ</th>
                        <th class="head">รายละเอียด</th>
                        <th class="head">บันทึก</th>
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
                            echo "<td class='top3 '><img class='img-coupon' src=\assets\icon_reward\coupon\icon-คูปอง-5000.png /></td></tr>";
                        } else if ($i == 1) {
                            echo "<tr><td class='top3'>" . ($i + 1) . "</td>";
                            echo "<td class='top3'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                            echo "<td class='top3'><img class='img-coupon' src=\assets\icon_reward\coupon\icon-คูปอง-3000.png /></td></tr>";
                        } else if ($i == 2) {
                            echo "<tr><td class='top3'>" . ($i + 1) . "</td>";
                            echo "<td class='top3'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                            echo "<td class='top3'><img class='img-coupon' src=\assets\icon_reward\coupon\icon-คูปอง-2000.png /></td></tr>";
                        } else if ($i <= 9) {
                            echo "<tr><td class='top10'>" . ($i + 1) . "</td>";
                            echo "<td class='top10'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                            echo "<td class='top10'><img class='img-coupon' src=\assets\icon_reward\coupon\icon-คูปอง-400.png /></td></tr>";
                        } else {
                            echo "<tr><td class='top'>" . ($i + 1) . "</td>";
                            echo "<td class='top'>
                    <div><img src='" . $allUsers[$i]['user_logo'] . "'></div>
                    <div>" . $allUsers[$i]['user_id'] . "</div>
                    <div>" . $allUsers[$i]['user_name'] . "</div>
                    </td>";
                            echo "<td class='top'><img class='img-coupon' src=\assets\icon_reward\coupon\icon-คูปอง-100.png /></td></tr>";
                        }
                    }
                    ?>
                </table>
                <!-- <button type="button" onclick="window.location.href='data_tier'">อันดับ</button> -->
                <br /><br />

                <h class="a1">ระยะเวลากิจกรรม</h>
                <br />
                21 มกราคม 2568 (10.00 น.) – 29 มกราคม 2568 (22.00 น.)
                <br /><br />

                <h class="a1">รายละเอียดกิจกรรม VJ</h><br />
                ➤ VJ ที่ได้รับของขวัญมากที่สุด 5 อันดับแรก จะได้รับรางวัล<br />
                ➤วีเจจะต้องมีเวลาไลฟ์ / เวลาไลฟ์ล็อกห้อง / รับสาย <br />
                รวมกัน 5 ชั่วโมงขึ้นไป จึงจะได้รับรางวัล<br />
                หากไม่ครบตามกำหนดจะไม่ได้รับรางวัล<br />
                ➤ วีเจที่ได้รับรางวัลจะต้องมีของขวัญ ขั้นต่ำ 5,000 ชิ้น<br /><br />

                <img src="/assets/images/01.png" width="166" />
                <br />
                Chinese Dragon 20 คูปอง<br />
                ได้รับ 2 คูปอง ต่อชิ้น<br /><br />

                <h class="a1">รางวัลกิจกรรม VJ
                </h><br />
                40,000 คูปอง จำนวน 5 รางวัล<br />
                <br />
                <h class="a2">รวม 200,000 คูปอง
                </h><br /><br />


                <div class="note">
                    <font size="+2">หมายเหตุ</font><br />
                    ➤ สอบถามข้อมูลและแจ้งปัญหาติดต่อ LINE: @takemeclub / Fb: @TakeMeFanClub<br />
                    ➤ กิจกรรมใดที่จัดอยู่ในช่วงเวลาปิดเซิร์ฟเวอร์หรือเหตุใดๆ<br />
                    ที่ทำให้ไม่สามารถออนไลน์ได้จะยึดเวลาจบกิจกรรมตามเดิม<br />
                    ➤ ทีมงานขอสงวนสิทธิ์จะไม่นับคะแนนกิจกรรม ที่ได้รับของขวัญจากยูสที่ไม่มีการเติมเงิน<br />
                    ➤ ทีมงานจะตรวจสอบรางวัลให้ภายใน 5-7 วันทำการหลังจบกิจกรรม<br />
                    ➤ กิจกรรมที่จัดอยู่ในช่วงเวลาปิดเซิร์ฟเวอร์หรือเหตุที่ทำให้ไม่สามารถออนไลน์ได้<br />
                    จะยึดเวลาจบกิจกรรมตามเดิม<br />
                    ➤ อันดับและเวลาอ้างอิงตาม Server เป็นหลัก<br />
                    ➤ ขอสงวนสิทธิ์ในการเปลี่ยนแปลงรายละเอียด โดยไม่ต้องแจ้งให้ทราบล่วงหน้า<br />
                    ➤ คำตัดสินของทีมงานถือว่าเป็นที่สิ้นสุด<br />
                    <b>Sponsor by WinNine Pacific : <a href="https://winnine.com.au/main.php"
                            target="_blank">winnine.com.au</a></b><br />

                </div><!-- /note -->

                <div class="foot">WinNine Pacific Pty Ltd Level 20, Zenith Center, 821 Pacific Hwy, Chatswood NSW 2067
                    Australia</div>

            </div><!-- /section1 -->

        </div><!-- /wrapper -->

        <script>
            let a = 0;
            function toggleDisplay() {
                const table = document.getElementById('table_rank');
                const button = document.getElementById('button_rank');
                if (a === 0) {
                    setTimeout(() => {
                        table.style.opacity = 1;
                    }, 100);
                    table.style.display = 'table';
                    button.innerHTML = 'กดซ้อนอันดับ';
                    a = 1;
                } else {
                    table.style.opacity = 0;
                    setTimeout(() => {
                        table.style.display = 'none';
                    }, 500);
                    button.innerHTML = 'กดดูอันดับ';
                    a = 0;
                }
            }
        </script>

</body>

</html>