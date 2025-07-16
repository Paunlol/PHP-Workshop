<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE DAIMON</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            background-color: rgb(255, 41, 209);
            /* margin: auto; */
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: #003049;
        }

        /* .table_1 .table_2 {
            align-items: center;
        }

        .table_1 {
            margin: 0 auto;
            border-collapse: collapse;
            align-items: center;
            width: 70%
        }

        .table_1 {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            font-weight: 600;
            padding: 5px;
            text-align: left;
            border: 1px solid black;
            color: red;
            background-color: aliceblue;
        }

        .table_d td {
            padding: 5px;
            border: 1px solid black;
        }

        .age,
        .list {
            text-align: center;
        }

        .t_header th {
            color: blue;
        } */

        .div_table2 {
            /* margin-top: 20%; */
            outline: ;
            /* border: 1px solid red; */
            width: 60%;
            background-color: #669bbc;
            margin: 5% auto;
            box-shadow: 2px 2px 4px 4px rgb(136, 136, 136);
            border-radius: 10px;
        }

        .table_resister {
            margin: 0 auto;
            /* border: 1px solid red; */
        }

        .info {
            text-align: right;
            font-weight: 600;
        }

        .input {
            padding: 3px;
        }

        .input input,
        .input textarea {
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 600px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .btn_submit {
            background-color: #fdf0d5;
            color: #003049;
            /* text-align: center; */
            text-decoration: none;
            border: none;
            width: 97%;
            padding: 3% 20%;
            border-radius: 5px;
            font-size: 18px;
            font-weight: 600;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- <h2 style="text-align: center ;">HTML table</h2>
    <div class="div_table1">
        <table class="table_1">
            <thead>
                <tr class="t_header">
                    <th class="list">List</th>
                    <th>Name</th>
                    <th class="age">Age</th>
                    <th>Job</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table_d" style="border: 1px solid black;">
                    <td class="list">1</td>
                    <td>FORD</td>
                    <td class="age">22</td>
                    <td>Junior Developer</td>
                    <td>20,000 THB</td>
                </tr>
                <tr class="table_d">
                    <td class="list">2</td>
                    <td>Diamond</td>
                    <td class="age">33</td>
                    <td>Master Developer</td>
                    <td>45,000 THB</td>
                </tr>
                <tr class="table_d">
                    <td class="list">3</td>
                    <td>Hunter</td>
                    <td class="age">30</td>
                    <td>Senior Developer</td>
                    <td>65,000 THB</td>
                </tr>
            </tbody>
        </table>
    </div> -->
    <div class="div_table2">
        <h1 style="text-align: center ; padding-top:20px ;">Resister</h1>

        <table class="table_resister">
            <tbody class="tb_resister">
                <tr>
                    <td class="info">Username</td>
                    <td class="input"><input type="text" name="username" id="username"
                            placeholder="Enter your Username"><span style="color: red;"> *</span></td>
                </tr>
                <tr>
                    <td class="info">Password</td>
                    <td class="input"><input type="password" name="password" id="password"
                            placeholder="Enter your Password"><span style="color: red;"> *</span></td>
                </tr>
                <tr>
                    <td class="info">Confirm Password</td>
                    <td class="input"><input type="password" name="con_password" id="con_password"
                            placeholder="Confirm your Password"><span style="color: red;"> *</span></td>
                </tr>
                <tr>
                    <td class="info">Email</td>
                    <td class="input"><input type="email" name="email" id="email" placeholder="Enter your Email"><span
                            style="color: red;"> *</span></td>
                </tr>
                <tr>
                    <td class="info">First Name</td>
                    <td class="input"><input type="text" name="fname" id="fname"
                            placeholder="Enter your First Name"><span style="color: red;"> *</span></td>
                </tr>
                <tr>
                    <td class="info">Last Name</td>
                    <td class="input"><input type="text" name="lname" id="lname"
                            placeholder="Enter your Last Name"><span style="color: red;"> *</span></td>
                </tr>
                <tr>
                    <td class="info">Citizen ID</td>
                    <td class="input"><input type="number" name="c_id" id="c_id"
                            placeholder="Enter your Citizen ID"><span style="color: red;"> *</span></input></td>
                </tr>
                <tr>
                    <td class="info">Phone</td>
                    <td class="input"><input type="number" name="phone" id="phone"
                            placeholder="Enter your Phone"></input></td>
                </tr>
                <tr>
                    <td class="info">Address</td>
                    <td class="input"><textarea name="address" id="address" rows="5" cols=""
                            placeholder="Enter your Address"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn_submit" type="submit" style="" id="submit">Submit</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: center; padding:10px"><span id="warn" style="color: red; ">&nbsp;</span></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>


<script>
    $(document).ready(function () {
        console.log("ready!");
    });

    $("#submit").click(function () {
        let username = $("#username").val()
        let password = $("#password").val()
        let con_password = $("#con_password").val()
        let email = $("#email").val()
        let fname = $("#fname").val()
        let lname = $("#lname").val()
        let c_id = $("#c_id").val()
        let phone = $("#phone").val()
        let address = $("#address").val()

        let reg_username = /^[A-Za-z0-9._@-]{5,20}$/
        let reg_password = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&+=!]).{8,20}$/
        let reg_con_password = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&+=!]).{8,20}$/
        let reg_email = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
        let reg_fname = /^[A-Za-zก-๙]{2,50}$/
        let reg_lname = /^[A-Za-zก-๙]{2,50}$/
        let reg_c_id = /^\d{13}$/
        let reg_phone = /^(0\d{1})\d{8}$/

        if (username !== "" && !reg_username.test(username)) {
            $("#warn").html("Your Username must be 5-20 character").css("font-weight", "bold")
            $("#username").focus()
            return false;
        } else if (password !== "" && !reg_password.test(password)) {
            $("#warn").html("Your Password must be 8-20 characters, and include A-Z, a-z, 0-9, and special characters").css("font-weight", "bold")
            $("#password").focus()
            return false;
        } else if (con_password !== "" && !reg_con_password.test(con_password)) {
            $("#warn").html("Your Confirm Password Error").css("font-weight", "bold")
            $("#password").focus()
            return false;
        } else if (con_password !== "" && reg_con_password.test(con_password) !== reg_password.test(password)) {
            $("#warn").html("Your Password And Confirm Password Error").css("font-weight", "bold")
            $("#con_password").focus()
            return false;
        } else if (email !== "" && !reg_email.test(email)) {
            $("#warn").html("Your Email must be a valid format, e.g., example@domain.com").css("font-weight", "bold")
            $("#email").focus()
            return false;
        } else if (fname !== "" && !reg_fname.test(fname)) {
            $("#warn").html("Your First name must be 2-50 characters, A-Z, a-z, or Thai letters").css("font-weight", "bold")
            $("#fname").focus()
            return false;
        } else if (lname !== "" && !reg_lname.test(lname)) {
            $("#warn").html("Your Last name must be 2-50 characters, A-Z, a-z, or Thai letters").css("font-weight", "bold")
            $("#lname").focus()
            return false;
        } else if (c_id !== "" && !reg_c_id.test(c_id)) {
            $("#warn").html("Your ID must be 13 digits").css("font-weight", "bold")
            $("#c_id").focus()
            return false;
        }

        if (username == "") {
            // $("#warn").fadeIn()
            $("#warn").html("Please Enter You Username").css("font-weight", "bold")
            $("#username").focus()
            // $("#warn").fadeOut(2000)
            // $("#warn").html("& nbsp;").css("font-weight", "bold")
            return false
        } else if (password == "") {
            //$("#warn").fadeIn()
            $("#warn").html("Please Enter You Password").css("font-weight", "bold")
            $("#password").focus()
            //$("#warn").fadeOut(2000)
            return false
        } else if (con_password == "") {
            //$("#warn").fadeIn()
            $("#warn").html("Please Confirm You Password").css("font-weight", "bold")
            $("#con_password").focus()
            //$("#warn").fadeOut(2000)
            return false
        } else if (con_password !== password) {
            //$("#warn").fadeIn()
            $("#warn").html("Your Password Not Match").css("font-weight", "bold")
            $("#con_password").focus()
            //$("#warn").fadeOut(2000)
            return false
        } else if (email == "") {
            //$("#warn").fadeIn()
            $("#warn").html("Please Enter You Email").css("font-weight", "bold")
            $("#email").focus()
            //$("#warn").fadeOut(2000)
            return false
        } else if (fname == "") {
            //$("#warn").fadeIn()
            $("#warn").html("Please Enter You First Name").css("font-weight", "bold")
            $("#fname").focus()
            //$("#warn").fadeOut(2000)
            return false
        } else if (lname == "") {
            //$("#warn").fadeIn()
            $("#warn").html("Please Enter You Last Name").css("font-weight", "bold")
            $("#lname").focus()
            //$("#warn").fadeOut(2000)
            return false
        } else if (c_id == "") {
            //$("#warn").fadeIn()
            $("#warn").html("Please Enter You Citizen ID").css("font-weight", "bold")
            $("#c_id").focus()
            //$("#warn").fadeOut(2000)
            return false
        } else {
            $("#warn").html("&nbsp")
            var dataString =
                'username=' + username + "&" +
                'password=' + password + "&" +
                'c_password=' + con_password + "&" +
                'email=' + email + "&" +
                'name=' + fname + "&" +
                'lastname=' + lname + "&" +
                'cid=' + c_id + "&" +
                'phone=' + phone + "&" +
                'address=' + address + "&"
                ;
            // console.log(dataString);
            $.ajax({
                type: "POST", //METHOD "GET","POST"
                url: "../Day7/curlv2", //File ที่ส่งค่าไปหา
                data: dataString,//cache: false,
                success: function (data) {
                    console.log("1", data);
                    var receiveData = JSON.parse(data)
                    console.log(receiveData);
                    if (receiveData.ret_code == "101") {
                        // alert(receiveData.msg);
                        // $("#warn").fadeIn()
                        $("#warn").html("Receive Data Success").css("color", "green");
                        window.location.href = "https://together-gladly-airedale.ngrok-free.app/ss5/day5/table_show.php";
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

    })
</script>

</html>