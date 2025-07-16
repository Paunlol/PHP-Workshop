<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
    <?php
    session_start();
    // echo "<pre>";
    // print_r($_SESSION);
    
    if (isset($_SESSION["username"])) {
        echo "<script>alert('Already Login');
        window.location.href='login_success';</script>";
        // header("Location: login_success.php");
    }
    ?>
</head>

<body class="m-5">
    <div class="container  border mb-2 p-3 shadow p-3 mb-5 bg-body rounded ">
        <div class="m-4">
            <h2 class="pl-3 pb-3">Login</h2>
            <div class="form-outline mb-4">
                <input class="form-control" name="username" id="username" type="username" class="form-control"
                    id="username" placeholder="Enter Username">
            </div>
            <div class="form-outline mb-4">
                <input class="form-control " name="password" id="password" type="password" class="form-control"
                    id="password" placeholder="Password">
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
            <div class="m-1 row">
                <button id="submit" type="button" class="btn btn-primary sm-mb-1 col-sm-12 col-lg-6">Login</button>
                <button type="button" class="btn btn-warning col-sm-12 col-lg-6 "
                    onclick="window.location.href='register'">Register</button>
            </div>
            <div id="alert" class=" alert  " role="alert">
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
<script>
    $(document).ready(function () {
        console.log("ready!");
    });
    $('#submit').click(function () {
        let username = $('#username').val()
        let password = $('#password').val()
        console.log(username, password);
        let p_username = ""
        let p_password = ""
        let reg_username = /^[A-Za-z0-9._@-]{5,20}$/
        let reg_password = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&+=!]).{8,20}$/

        if (!reg_username.test(username)) {
            $('#alert').removeClass("alert-success")
            $('#alert').addClass("alert-danger")
            $("#alert").html("wrong username")
            $("#username").focus()
            $("#alert").fadeOut(5000)
            return false;
        } else {
            p_username = username
        }

        if (!reg_password.test(password)) {
            $('#alert').removeClass("alert-success")
            $('#alert').addClass("alert-danger")
            $("#alert").html("wrong password")
            $("#password").focus()
            $("#alert").fadeOut(5000)
            return false;
        } else {
            p_password = password
        }

        if (p_username && p_password) {
            let dataString =
                'username=' + username + "&" +
                'password=' + password + "&"

            console.log(dataString);
            $.ajax({
                type: "POST", //METHOD "GET","POST"
                url: "login_process", //File ที่ส่งค่าไปหา
                data: dataString,//cache: false,
                success: function (data) {
                    console.log("data", data);
                    var receiveData = JSON.parse(data)
                    console.log("receiveData", receiveData);
                    if (receiveData.status == "101") {
                        $('#alert').removeClass("alert-danger")
                        $('#alert').addClass("alert-success")
                        $("#alert").html(receiveData.msg)
                        window.location.href = "login_success"
                    }
                    else {
                        $('#alert').removeClass("alert-success")
                        $('#alert').addClass("alert-danger")
                        $("#alert").html(receiveData.msg)
                    }
                }
            });
        }
    })


</script>

</html>