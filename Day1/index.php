<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title><?php echo"HTML TEST"?></title>
</head>

<body style="font-family: sans-serif; box-sizing: initial">
    <!-- <?php echo"asdasd"?> -->
    <dive style="color: #186; font-size: 60px; margin: 10px">Hello World</dive><br />
    <div id="div1" onclick="clickx('div1')" class="curser div1">DIV 1</div>
    <div id="div2" onclick="clickx('div2')" class="curser div1">DIV 2</div>
    <div id="div3" onclick="clickx('div3')" class="curser div1">DIV 3</div>
    <div id="div4" onclick="clickx('div4')" class="curser div1">DIV 4</div>

    <br>
    <br>
    <br>
    <br>

    <div class="span1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut,
        expedita?</div><br /><br /><br /><br />
    <span class="span2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut,
        expedita?</span><br /><br /><br /><br />

    <article id="art1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, quasi?
    </article>
    <br />

    <footer class="sty red">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores,
        praesentium.
    </footer>
    <br />
    <article id="art1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, quasi?
    </article>
    <br />

    <footer class="sty red">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores,
        praesentium.
    </footer>
    <br />

</body>

<script>
    test = document.getElementById('div1')
    document.getElementById("div2").innerHTML = "FORD"
    // console.log(div1);

    function clickx(ele) {
        console.log("click");
        document.getElementById(ele).innerHTML = "function"
    }
</script>

</html>