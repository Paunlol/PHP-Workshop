<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE ALL</title>
</head>

<body
    style="background-color: rgb(255, 255, 255); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #003049;">
    <div class="container my-5">
        <div class="card shadow-lg">
            <div class="card-header text-center bg-primary text-white">
                <h1>Register</h1>
            </div>
            <div class="card-body bg-light">
                <form id="register-form">
                    <div class="mb-3">
                        <label for="username" class="form-label fw-bold">Username <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Enter your Username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password <span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your Password">
                    </div>
                    <div class="mb-3">
                        <label for="con_password" class="form-label fw-bold">Confirm Password <span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="con_password" name="con_password"
                            placeholder="Confirm your Password">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
                    </div>
                    <div class="mb-3">
                        <label for="fname" class="form-label fw-bold">First Name <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fname" name="fname"
                            placeholder="Enter your First Name">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label fw-bold">Last Name <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="lname" name="lname"
                            placeholder="Enter your Last Name">
                    </div>
                    <div class="mb-3">
                        <label for="c_id" class="form-label fw-bold">Citizen ID <span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="c_id" name="c_id"
                            placeholder="Enter your Citizen ID">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label fw-bold">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone"
                            placeholder="Enter your Phone">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label fw-bold">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3"
                            placeholder="Enter your Address"></textarea>
                    </div>
                    <div class="pb-3">
                        <input type="radio" id="daimon" name="check" value="1">
                        <label for="daimon">Daimon</label><br>
                        <input type="radio" id="hunter" name="check" value="2">
                        <label for="hunter">Hunter</label><br></span>
                        <input type="radio" id="ford" name="check" value="3">
                        <label for="ford">Ford</label><br></span>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary w-100" id="submit">Submit</button>
                    </div>

                    <div class="text-center mt-3">
                        <span id="warn" class="text-danger"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
        let status = "";

        if ($("#daimon").is(":checked")) {
            status = $("#daimon").val();
            // alert("Value: " + status);
            // alert("Value: " + status);
        } else if ($("#hunter").is(":checked")) {
            status = $("#hunter").val();
            // alert("Value: " + status);
            // alert("Value: " + status);
        } else if ($("#ford").is(":checked")) {
            status = $("#ford").val();
            // alert("Value: " + status);
            // alert("Value: " + status);
        } else {
            alert("No option selected");
        }

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
        } else if (status !== "" && !reg_c_id.test(c_id)) {
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
        } else if (status == "") {
            //$("#warn").fadeIn()
            $("#warn").html("Please Check Radio Input").css("font-weight", "bold")
            $("#c_id").focus()
            //$("#warn").fadeOut(2000)
            return false
        } else {
            $("#warn").html("&nbsp")
            var dataString =
                'username=' + username + "&" +
                'password=' + password + "&" +
                'con_password=' + con_password + "&" +
                'email=' + email + "&" +
                'fname=' + fname + "&" +
                'lname=' + lname + "&" +
                'c_id=' + c_id + "&" +
                'phone=' + phone + "&" +
                'address=' + address + "&" +
                'status=' + status + "&"
                ;
            console.log("dataString", dataString);

            // console.log(dataString);
            $.ajax({
                type: "POST", //METHOD "GET","POST"
                url: "../Day7/curlv2.php", //File ที่ส่งค่าไปหา
                data: dataString,//cache: false,
                success: function (data) {
                    console.log("1", data);
                    var receiveData = JSON.parse(data)
                    console.log(receiveData);
                    if (receiveData.status == "101") {
                        // alert(receiveData.msg);
                        // $("#warn").fadeIn()
                        $("#warn").html("Receive Data Success").css("color", "green");
                        window.location.href = receiveData.location;
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