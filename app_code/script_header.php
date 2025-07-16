
<?php
// $adSense = '<script data-ad-client="ca-pub-2772296797953924" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';

// echo $adSense;

$script_Sponser = "<script> 
window.onload = function(){
	var br = document.createElement(\"BR\");
var textnode1 = document.createTextNode(\"Sponsored by WinNine Pacific : \");
var b1 = document.createElement(\"B\");
var b2 = document.createElement(\"B\");


var x = document.createElement(\"A\");
  var t = document.createTextNode(\"winnine.com.au\");
  x.setAttribute(\"href\", \"https://winnine.com.au/main.php\");
  x.appendChild(t)
 

b1.appendChild(textnode1);
b2.appendChild(x);
document.getElementsByClassName('note')[0].appendChild(br);
document.getElementsByClassName('note')[0].appendChild(b1);
document.getElementsByClassName('note')[0].appendChild(b2);
document.getElementsByClassName('foot')[0].innerHTML= 'Winnine Pacific Pty Ltd ,NSW Australia';
};

</script>";
echo $script_Sponser;

// $script_foot = "<script> 
// window.onload = function(){
// 	document.getElementsByClassName('foot')[0].innerHTML= 'Winnine Pacific Pty Ltd ,NSW Australia';

// };
// </script>";
// echo $script_foot;


$adSense = '

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script>
window.onload = function(){
	
	
	$( `

	<center><div>
	<ins class="adsbygoogle"
	style="display:inline-block;width:728px;height:90px"
	data-ad-client="ca-pub-2772296797953924"
	data-ad-slot="7190482976"
</ins>

	  </div></center>
	<br>
			<br> ` ).insertBefore(".note");
	 (adsbygoogle = window.adsbygoogle || []).push({});

}


 
 </script>
 

 ';


 echo $adSense;

 
$Google_Tag_Manager = "

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WDVTFSV');</script>
<!-- End Google Tag Manager -->


";


 echo $Google_Tag_Manager;




 

$adSense_stiky = '
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2772296797953924"
     crossorigin="anonymous"></script>


<script>
window.onload = function(){
	
	
	$( `

	<center><div style="
	float:right;width:160px;
	padding-right:10px;
	position: fixed;
	top:5%;
    right: 0;
    display: block;
	
	">
	<!-- TakeMe-BothEvent-Display -->
	<ins class="adsbygoogle"
		 style="display:inline-block;width:160px;height:600px"
		 data-ad-client="ca-pub-2772296797953924"
		 data-ad-slot="4194074189"></ins>
		 </div>
	</center>
	<center><div style="
	float:left;width:160px;
	padding-left:10px;
	position: fixed;
	top:5%;
    left: 0;
    display: block;
	
	">
	<!-- TakeMe-BothEvent-Display -->
	<ins class="adsbygoogle"
		 style="display:inline-block;width:160px;height:600px"
		 data-ad-client="ca-pub-2772296797953924"
		 data-ad-slot="4194074189"></ins>
		 </div>
	</center>
			<br> ` ).insertBefore(".section1");

	 (adsbygoogle = window.adsbygoogle || []).push({});

		 (adsbygoogle = window.adsbygoogle || []).push({});


}


 
 </script>
 

 ';
 
 $device = DetectDevice();
if($device == 'PC'){
	echo $adSense_stiky;
}



 function DetectDevice() {
	//Detect special conditions devices
	$iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
	$iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
	$iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
	$Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");
	//$webOS = stripos($_SERVER['HTTP_USER_AGENT'], "webOS");
	//do something with this information
	if ($iPod || $iPhone || $iPad) {
		//browser reported as an iPhone/iPod touch -- do something here
		//browser reported as an iPad -- do something here
		return "iOS";
	} else if ($Android) {
		//browser reported as an Android device -- do something here
		return "Android";
	} else {
		return "PC";
	}
}

 
?>

