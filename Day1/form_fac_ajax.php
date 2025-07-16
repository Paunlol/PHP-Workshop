<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>form_fac_ajax.php</title>
</head>

<body>
    <span>Input </span><input id="n1" type="text" name="dataString">
    <button id="btn" type="submit">submit</button>
    <div id="aws">Info Here-> </div>
</body>
<script>
    $(document).ready(function () {
        console.log("ready!");
    });

    // function sendData(params) {
    //     alert("asdasd")
    // }

    $("#btn").click(function () {
        var data_1 = $("#n1").val();
        var dataString = 'loop_data=' + data_1 + ""; //ค่าที่จะส่งไปพร้อมตัวแปร
        console.log(dataString);

        $.ajax({
            type: "POST", //METHOD "GET","POST"
            url: "loop.php", //File ที่ส่งค่าไปหา
            data: dataString,
            //cache: false,
            success: function (data) {
                // console.log(data);
                var d = JSON.parse(data)
                console.log(d);
                if (d.res_code == 201) {
                    var y = d.data1.key01 + "=" + d.data1.key02
                    $("#aws").html(y)
                }
                else {
                    alert(d.msg)
                }
                // console.log(y);
                //alert(data);
                // if(data==0){
                // //alert("success");
                // }
                // else{
                // alert("Unsuccess");
                // }
            }
        });
    });

</script>

</html>