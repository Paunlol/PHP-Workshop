<?php

session_start();
error_reporting(0);
ini_set("display_errors", 1);
date_default_timezone_set("Asia/Bangkok");
define("BASEPATH", realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'));
define("clientIP", $_SERVER["REMOTE_ADDR"]);
define("Language", $_COOKIE['10078_lang']);

require_once(BASEPATH . "/app_code/stdObject.php");
require_once(BASEPATH . "/app_code/config.php");
require_once(BASEPATH . "/app_code/connector.php");
$connector = new connector();

require_once(BASEPATH . "/app_code/function_class.php");
$fn = new function_class();

$_uri_checkip_office = $uri->checkip_office;
$data = http_build_query(array("clientIP" => clientIP));
$resx = @$connector->post($_uri_checkip_office, $data, "json");
// var_dump($resx);
if ($resx->code == '101') {
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
} else {
	error_reporting(0);
	ini_set("display_errors", 1);
}

function check_login_view_index1()
{
	if ((!isset($_SESSION['acc_name'])) || (!isset($_SESSION['acc_code']))) {
		$ads_id = isset($_SESSION["ads_id"]) ? $_SESSION["ads_id"] : 0;
		$ads_session_id = isset($_SESSION["ads_session_id"]) ? $_SESSION["ads_session_id"] : NULL;
		$ads_name = isset($_SESSION["ads_name"]) ? $_SESSION["ads_name"] : NULL;
		$ads_referer = isset($_SESSION["ads_referer"]) ? $_SESSION["ads_referer"] : NULL;
		$ads_domain = isset($_SESSION["ads_domain"]) ? $_SESSION["ads_domain"] : NULL;
		$ads_clientIP = isset($_SESSION["ads_clientIP"]) ? $_SESSION["ads_clientIP"] : NULL;
		$ads_typelog = isset($_SESSION["ads_typelog"]) ? $_SESSION["ads_typelog"] : NULL;
		$ads_platform = isset($_SESSION["ads_platform"]) ? $_SESSION["ads_platform"] : NULL;
		$ads_device = isset($_SESSION["ads_device"]) ? $_SESSION["ads_device"] : NULL;
		session_destroy();
		session_start();
		$_SESSION['redirect_url'] = substr($_SERVER['REQUEST_URI'], 1);
		if ((int) $ads_id !== 0) {
			$_SESSION["ads_id"] = $ads_id;
			$_SESSION["ads_session_id"] = $ads_session_id;
			$_SESSION["ads_name"] = $ads_name;
			$_SESSION['ads_referer'] = $ads_referer;
			$_SESSION['ads_domain'] = $ads_domain;
			$_SESSION["ads_clientIP"] = $ads_clientIP;
			$_SESSION["ads_typelog"] = $ads_typelog;
			$_SESSION["ads_platform"] = $ads_platform;
			$_SESSION["ads_device"] = $ads_device;
		}
		echo '<script> location.href="https://' . $_SERVER["SERVER_NAME"] . '/member/login" </script>';
		header("location:https://" . $_SERVER["SERVER_NAME"] . "/member/login");

		exit();
	}
}




if (basename($_SERVER['REQUEST_URI']) == "index1.php") {
	$array_team = array(999663227, 941571400, 100798288, 100882161, 146764472);
	//160476087
	$array_team = array();

	session_start();

	if (!isset($_SESSION["uid"])) {
		check_login_view_index1();
	}


	// $_uri_checkip_idx_reserv = "https://service.takeme.la/service/check_reserve_idx";
	// $data = http_build_query(array("clientIP" => clientIP,"idx" => $_SESSION["uid"]));
	// $resx = @$connector->post($_uri_checkip_idx_reserv, $data, "json");
	//var_dump($resx);
	// if($resx->code != '101'){
	// 	echo "
	// 	<html>
	// 	<body style='background-color:khaki;'> 
	// 	<p style='position:relative;
	// 	margin:0 auto;
	// 	clear:left;
	// 	height:auto;
	// 	z-index: 0;
	// 	text-align:center;'><center>IDX:".$_SESSION["uid"]." Access denied.<br>
	// 	Please contact Administrator.
	// 	</center></p>
	// 	</html>
	// 	</body>";
	// 	die;
	// }


	$data_index['url'] 	  	=  $_SERVER['REQUEST_URI'];
	$data_index['clientIP'] = clientIP;
	$data_index['user_id']  = $_SESSION["uid"];
	$data_index['date_time']  = date("Y-m-d H:i:s");
	$data_index['res_office_ip']  = json_encode($resx);
	$_uri_checkip_idx_reserv = "https://service.takeme.la/service/insert_index1";
	$data = http_build_query($data_index);
	$res_log = @$connector->post($_uri_checkip_idx_reserv, $data, "json");



	if ($resx->code != '101') {
		echo "
			<html>
			<body style='background-color:khaki;'> 
			<p style='position:relative;
			margin:0 auto;
			clear:left;
			height:auto;
			z-index: 0;
			text-align:center;'><center>IP Address Access denied.<br> 
			</center></p>
			</html>
			</body>";
		die;
	}



?>
	<script src="https://<?php echo $_SERVER["SERVER_NAME"] ?>/assets/js/jquery.min.js"></script>
	<style type="text/css">
		#line_nam_div {
			position: absolute;
			opacity: 0.2;

		}

		#canvas2 {
			position: absolute;
			z-index: 10 !important;
			display: none;
			left: 0;
		}

		.bt-rank {
			z-index: 99 !important;
			position: relative;
			margin: auto;
		}

		/* .btn{
			z-index: 99 !important;
		}
		 .btn-primary{
			z-index: 99 !important;
		} */
	</style>
	<canvas id="canvas" width='110px' height='80px' style="display:none;"></canvas>
	<div id="line_nam_div">
		<canvas id="canvas2"></canvas>
	</div>

	<script>
		$(".bt-rank").attr('disable', 'disable');
		console.log("Canvas pending...");
		window.onload = function() {
			console.log("Canvas running...");
			$(".bt-rank").attr('disable', '');
			var chk = 1;
			$("#btn-toponline").click(function() {
				$("#canvas2").toggle();
				if (chk == 1) {
					chk = 0;
					$("#canvas").html("");
					$("#canvas2").html("");
					var today = new Date();
					var canvas = document.getElementById("canvas");
					var ctx = canvas.getContext("2d");
					var time = today.getMinutes() + ":" + today.getSeconds();
					// ctx.fillStyle  = "#FFFFFF";
					ctx.fillStyle = "rgb(207, 204, 198,0.5)";
					ctx.rotate(20 * Math.PI / -180);
					ctx.font = "11px sans-serif";
					ctx.fillText("<?php echo $_SESSION['uid'] ?>" + "(<?= date('m-d H:i') ?>)", 0, 50, 100);

					var show1 = $(".box-table");

					var div_width = show1.width();
					var div_hight = show1.height() + 800;
					console.log(div_width, div_hight);

					// const canvas2 = document.getElementById("canvas2"),
					// context = canvas2.getContext("2d");
					img = new Image();


					img.src = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");

					// $("#canvas2").attr('width',div_width+'px');
					// $("#canvas2").attr('height',div_hight+'px');

					// img.onload = () => { // Only use the image after it's loaded
					// const pattern = context.createPattern(img, "repeat");
					// context.fillStyle = pattern;
					// context.fillRect(0, 0, div_width, div_hight);
					// }


				}

				//  elements = document.getElementsByTagName('div');

				// for (var i = 0; i < elements.length; i++) {
				// 		elements[i].style.backgroundImage = "url('"+img.src+"')";
				// }

				elements = document.getElementsByTagName('td');

				for (var i = 0; i < elements.length; i++) {
					elements[i].style.backgroundImage = "url('" + img.src + "')";
				}





			});


			$("#btn-toponline2").click(function() {
				$("#canvas2").toggle();
				if (chk == 1) {
					chk = 0;
					$("#canvas").html("");
					$("#canvas2").html("");
					var today = new Date();
					var canvas = document.getElementById("canvas");
					var ctx = canvas.getContext("2d");
					var time = today.getMinutes() + ":" + today.getSeconds();
					// ctx.fillStyle  = "#FFFFFF";
					ctx.fillStyle = "rgb(207, 204, 198,0.5)";
					ctx.rotate(20 * Math.PI / -180);
					ctx.font = "11px sans-serif";
					ctx.fillText("<?php echo $_SESSION['uid'] ?>" + "(<?= date('m-d H:i') ?>)", 0, 50, 100);

					var show1 = $(".box-table");

					var div_width = show1.width();
					var div_hight = show1.height() + 800;
					console.log(div_width, div_hight);

					// const canvas2 = document.getElementById("canvas2"),
					// context = canvas2.getContext("2d");
					img = new Image();


					img.src = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");

					// $("#canvas2").attr('width',div_width+'px');
					// $("#canvas2").attr('height',div_hight+'px');

					// img.onload = () => { // Only use the image after it's loaded
					// const pattern = context.createPattern(img, "repeat");
					// context.fillStyle = pattern;
					// context.fillRect(0, 0, div_width, div_hight);
					// }


				}

				//  elements = document.getElementsByTagName('div');

				// for (var i = 0; i < elements.length; i++) {
				// 		elements[i].style.backgroundImage = "url('"+img.src+"')";
				// }

				elements = document.getElementsByTagName('td');

				for (var i = 0; i < elements.length; i++) {
					elements[i].style.backgroundImage = "url('" + img.src + "')";
				}





			});

			$("#btn-toponline3").click(function() {
				$("#canvas2").toggle();
				if (chk == 1) {
					chk = 0;
					$("#canvas").html("");
					$("#canvas2").html("");
					var today = new Date();
					var canvas = document.getElementById("canvas");
					var ctx = canvas.getContext("2d");
					var time = today.getMinutes() + ":" + today.getSeconds();
					// ctx.fillStyle  = "#FFFFFF";
					ctx.fillStyle = "rgb(207, 204, 198,0.5)";
					ctx.rotate(20 * Math.PI / -180);
					ctx.font = "11px sans-serif";
					ctx.fillText("<?php echo $_SESSION['uid'] ?>" + "(<?= date('m-d H:i') ?>)", 0, 50, 100);

					var show1 = $(".box-table");

					var div_width = show1.width();
					var div_hight = show1.height() + 800;
					console.log(div_width, div_hight);

					// const canvas2 = document.getElementById("canvas2"),
					// context = canvas2.getContext("2d");
					img = new Image();


					img.src = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");

					// $("#canvas2").attr('width',div_width+'px');
					// $("#canvas2").attr('height',div_hight+'px');

					// img.onload = () => { // Only use the image after it's loaded
					// const pattern = context.createPattern(img, "repeat");
					// context.fillStyle = pattern;
					// context.fillRect(0, 0, div_width, div_hight);
					// }


				}

				//  elements = document.getElementsByTagName('div');

				// for (var i = 0; i < elements.length; i++) {
				// 		elements[i].style.backgroundImage = "url('"+img.src+"')";
				// }

				elements = document.getElementsByTagName('td');

				for (var i = 0; i < elements.length; i++) {
					elements[i].style.backgroundImage = "url('" + img.src + "')";
				}





			});

			// ".show_rankfull"
			if ($("#show_rankfull").length > 0) {
				console.log(99);
				$("#canvas2").toggle();
				$("#canvas").html("");
				$("#canvas2").html("");
				today = new Date();
				canvas = document.getElementById("canvas");
				ctx = canvas.getContext("2d");
				time = today.getMinutes() + ":" + today.getSeconds();
				ctx.fillStyle = "rgb(207, 204, 198,0.5)";
				ctx.rotate(20 * Math.PI / -180);
				ctx.font = "11px sans-serif";
				ctx.fillText("<?php echo $_SESSION['uid'] ?>" + "(<?= date('m-d H:i') ?>)", 0, 50, 100);

				show1 = $(".wrapper");

				div_width = show1.width();
				div_hight = show1.height();
				console.log(div_width, div_hight);

				canvas2 = document.getElementById("canvas2"),
					context = canvas2.getContext("2d"),
					img = new Image();


				img.src = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");


				elements = document.getElementsByTagName('td');

				for (var i = 0; i < elements.length; i++) {
					elements[i].style.backgroundImage = "url('" + img.src + "')";
				}

				elements = document.getElementsByTagName('th');

				for (var i = 0; i < elements.length; i++) {
					elements[i].style.backgroundImage = "url('" + img.src + "')";
				}

				// $("#canvas2").attr('width',div_width+'px');
				// $("#canvas2").attr('height',div_hight+'px');

				// img.onload = () => { // Only use the image after it's loaded
				//  pattern = context.createPattern(img, "repeat");
				// context.fillStyle = pattern;
				// context.fillRect(0, 0, div_width, div_hight);
				// }
			} else {
				console.log(88);
			}

		}
	</script>




<?
}

?>