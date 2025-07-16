<link rel="stylesheet" href="https://takeme.la/assets/css/policy/bootstrap.min.css" >
<style type="text/css">
    /*Cookie Policy*/
    div.cookiePanelMain{

    position:fixed;
    bottom: 0px;
    z-index: 999;
    width:100%;
    padding:30px 0px 30px 0px;
    box-shadow: 5px 0px 5px 2px #333333;
    text-align: center;
    background: rgba(0,0,0,0.9);
    /*background: linear-gradient(180deg, rgba(191,7,86,1) 0%, rgba(247,50,135,1) 35%, rgba(238,72,144,1) 100%);*/
    color:#FFFFFF;
    font-size: 0.9em;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
}
div.cookieContent{
    width:70%;
    text-align: left;
    position:relative;
}
a.readPolicy{
    color:#fa1e7d;
}
*, ::after, ::before {
    box-sizing: unset;
}

</style>

 
        
    


<!--Cookie Policy-->
<script>
	var elm = document.createElement('div');
	elm.setAttribute("id", "div_1");
	var elm2 = '';
    if(getCookie('10078_lang')=='th' || getCookie('10078_lang')==null){
        elm2 = ' <div class="cookiePanelMain" id="cookiePanelMain" ><div class="container"><!-- Content here --><div class="container"><div class="row"><div class="col-sm-12 col-md-7 col-10 col-xl-8" align="left" style="font-size:1.2em;"><div style="font-size:1.2em">การใช้งานเว็บไซต์</div><div style="font-size:0.8em">การเข้าใช้เว็บไซต์นี้ (https://www.takeme.la/) บริษัทฯ ถือว่า ท่านได้ยอมรับใน <a href="https://takeme.la/policy/"   class="readPolicy">นโยบายข้อมูลส่วนบุคคล</a> ทั้งหมดที่ระบุไว้</div></div><div class="col-sm-12 col-md-4 col-8 col-xl-2"  align="center" style="margin-top10px;"><button type="button" onclick="hideCookie()" class="col-sm-12 col-md-6 col-xl-12 btn btn-primary">ยอมรับและดำเนินการต่อ</button></div></div></div></div></div>';
    }else if(getCookie('10078_lang')=='ch'){
         elm2 = ' <div class="cookiePanelMain" id="cookiePanelMain" ><div class="container"><!-- Content here --><div class="container"><div class="row"><div class="col-sm-12 col-md-7 col-10 col-xl-8" align="left" style="font-size:1.2em;"><div style="font-size:1.2em">访问网站的步骤</div><div style="font-size:0.8em">访问该网网站 (https://www.takeme.la/)  公司假定您已经同意上述所有 <a href="https://takeme.la/policy/"   class="readPolicy">的的个人政策</a></div></div><div class="col-sm-12 col-md-4 col-8 col-xl-2"  align="center" style="margin-top10px;"><button type="button" onclick="hideCookie()" class="col-sm-12 col-md-6 col-xl-12 btn btn-primary">同意并继续</button></div></div></div></div></div>';
    }else{
         elm2 = ' <div class="cookiePanelMain" id="cookiePanelMain" ><div class="container"><!-- Content here --><div class="container"><div class="row"><div class="col-sm-12 col-md-7 col-10 col-xl-8" align="left" style="font-size:1.2em;"><div style="font-size:1.2em">Access step of the website.</div><div style="font-size:0.8em">To start accessing this website (https://www.takeme.la/). The company assumes that you have accepted all <a href="https://takeme.la/policy/"   class="readPolicy">personal policy</a> as mentioned.</div></div><div class="col-sm-12 col-md-4 col-8 col-xl-2"  align="center" style="margin-top10px;"><button type="button" onclick="hideCookie()" class="col-sm-12 col-md-6 col-xl-12 btn btn-primary">Agree and Continue.</button></div></div></div></div></div>';
    }
	document.body.appendChild(elm);
	document.getElementById("div_1").innerHTML= elm2;
//document.cookie = "readcookie=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
var dc = document.cookie;
if(dc.indexOf("readcookie=") > -1 ){
    var x = document.getElementById("cookiePanelMain");
    x.style.display = "none";
}
console.log(document.cookie)
function hideCookie() {
  var dc = document.cookie;
 
  //alert(dc.indexOf("readcookie="));
  if(dc.indexOf("readcookie=") == -1 ){
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + (((1000*36000 *24)  * 30) * 12) ;
    now.setTime(expireTime);
    var value = "readcookie=ok;expires="+now.toGMTString()+";path=/;domain=.takeme.la;";
    document.cookie = value;
  }
  var x = document.getElementById("cookiePanelMain");
  x.style.display = "none";
}
function getCookie(name) {
    var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return v ? v[2] : null;
}
</script>
<?php

class function_class {

    public function getTDColorrand($rank) {
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be", "#183959");
        if($rank%2 == 0 ) {
            return $color[3];
        }else{
            return $color[1];
        }
    }

    public function getTDColor($rank) {
        $color = array("#26b9b7", "#00b6f0", "#0171be", "#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
            case 2 : return $color[$rank];
            case 2 : return $color[$rank];
            default : return $color[3];
        }
    }

	public function getTDColor1($rank) {
        $color = array("#26b9b7", "#00b6f0", "#183959", "#183959");
        switch ($rank) {
            case 1 : return $color[0];
            default : return $color[2];
        }
    }

	public function getTDColor2($rank) {
        $color = array("#26b9b7", "#00b6f0", "#183959", "#183959");
        switch ($rank) {
            case 1 : return $color[0];
            case 2 : return $color[1];
            default : return $color[3];
        }
    }

    public function getTDColor3($rank) {
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be", "#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
            case 2 : return $color[$rank];
            case 3 : return $color[$rank];
            default : return $color[4];
        }
    }

	public function getTDColor4($rank) {
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be","#0080bd", "#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
            default : return $color[5];
        }
    }

	public function getTDColor5($rank) {
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd", "#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
            default : return $color[6];
        }
    }

	public function getTDColor8($rank) {
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0095ad","#0080bd", "#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
            default : return $color[10];
        }
    }

	public function getTDColor10($rank) {
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be","#0080bd", "#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
            default : return $color[5];
        }
    }

	public function getTDColor10v2($rank) {
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0080bd","#00b6f0", "#0080bd", "#00b6f0","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
            default : return $color[12];
        }
    }
    public function getTDColor7($rank) {
        $color = array("#26b9b7", "#b5328c","#006bbd","#5f2384","#00a099","#00a099","#047d00","#047d00","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
		
            default : return $color[8];
        }
    }
    public function getTDColor3_v2($rank) {
        $color = array("#26b9b7", "#b5328c","#006bbd","#00a099", "#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
            case 2 : return $color[$rank];
            case 3 : return $color[$rank];
            default : return $color[4];
        }
    }
    public function getTDColor15_rookie($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#fa7b45","#5f2384","#5f2384","#00a099","#00a099","#00a099","#00a099","#00a099", "#047d00", "#047d00","##047d00","#047d00","#047d00","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
            case 11 : return $color[$rank];
            case 12 : return $color[$rank];
            case 13 : return $color[$rank];
            case 14 : return $color[$rank];
            case 15 : return $color[$rank];
            default : return $color[16];
        }
    }
    public function getTDColor15_v2($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#fa7b45","#5f2384","#047d00","#00a099","#00a099","#00a099","#00a099","#00a099", "#00a099", "#00a099","##00a099","#00a099","#00a099","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
            case 11 : return $color[$rank];
            case 12 : return $color[$rank];
            case 13 : return $color[$rank];
            case 14 : return $color[$rank];
            case 15 : return $color[$rank];
            default : return $color[16];
        }
    }
    public function getTDColor15_v3($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#fa7b45","#5f2384","#047d00","#00a099","#00a099","#00a099","#00a099","#00a099", "#67200f", "#67200f","#67200f","#67200f","#67200f","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
            case 11 : return $color[$rank];
            case 12 : return $color[$rank];
            case 13 : return $color[$rank];
            case 14 : return $color[$rank];
            case 15 : return $color[$rank];
            default : return $color[16];
        }
    }
    public function getTDColor15($rank) {
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0080bd","#00b6f0", "#0080bd", "#00b6f0","#26b9b7","#0171be","#0095ad","#0080bd","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
            case 11 : return $color[$rank];
            case 12 : return $color[$rank];
            case 13 : return $color[$rank];
            case 14 : return $color[$rank];
            case 15 : return $color[$rank];
            default : return $color[16];
        }
    }
    public function getTDColor5_v2($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#fa7b45","#5f2384","#00a099","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
	
            default : return $color[6];
        }
    }
    public function getTDColor5_v4($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#047d00","#00a099","#00a099","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
	
            default : return $color[6];
        }
    }
    public function getTDColor5_v3($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#00a099","#00a099","#00a099","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
	
            default : return $color[6];
        }
    }
    public function getTDColor10_v3($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#fa7b45","#5f2384","#00a099","#00a099","#047d00","#047d00","#3b81c4","#3b81c4","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
            case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
	
            default : return $color[11];
        }
    }
    public function getTDColor10_v4($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#fa7b45","#5f2384","#00a099","#3b81c4","#3b81c4","#3b81c4","#3b81c4","#3b81c4","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
            case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
	
            default : return $color[11];
        }
    }
    public function getTDColor10_v5($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#fa7b45","#00a099","#00a099","#00a099","#00a099","#00a099","#00a099","#00a099","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
            case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
	
            default : return $color[11];
        }
    }
    public function getTDColor10_v6($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#fa7b45","#047d00","#047d00","#00a099","#00a099","#00a099","#00a099","#00a099","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
            case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
	
            default : return $color[11];
        }
    }
    public function getTDColor10_v7($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#00a099","#00a099","#00a099","#047d00","#047d00","#047d00","#047d00","#047d00","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
            case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
	
            default : return $color[11];
        }
    }
    public function getTDColor4_v2($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#00a099","#00a099","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			
	
            default : return $color[5];
        }
    }

    public function getTDColor12($rank) {
        $color = array("#b5328c","#b5328c", "#006bbd","#fa7b45","#5f2384","#00a099","#00a099","#047d00","#047d00","#3b81c4","#3b81c4","#183959");
        return $color[$rank];
      
    }
    public function getTDColor20($rank) {
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0080bd","#00b6f0", "#0080bd", "#00b6f0","#26b9b7","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0080bd","#00b6f0", "#0080bd", "#00b6f0","#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
            case 11 : return $color[$rank];
            case 12 : return $color[$rank];
            case 13 : return $color[$rank];
            case 14 : return $color[$rank];
            case 15 : return $color[$rank];
            case 16 : return $color[$rank];
            case 17 : return $color[$rank];
            case 18 : return $color[$rank];
            case 19 : return $color[$rank];
            case 20 : return $color[$rank];
            default : return $color[22];
        }
    }
    public function getTDColor30($rank) {
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0095ad", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0095ad", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0095ad", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0080bd", "#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
            case 11 : return $color[$rank];
            case 12 : return $color[$rank];
            case 13 : return $color[$rank];
            case 14 : return $color[$rank];
            case 15 : return $color[$rank];
            case 16 : return $color[$rank];
            case 17 : return $color[$rank];
            case 18 : return $color[$rank];
            case 19 : return $color[$rank];
            case 20 : return $color[$rank];
            case 21 : return $color[$rank];
            case 22 : return $color[$rank];
            case 23 : return $color[$rank];
            case 24 : return $color[$rank];
            case 25 : return $color[$rank];
            case 26 : return $color[$rank];
            case 27 : return $color[$rank];
            case 28 : return $color[$rank];
            case 29 : return $color[$rank];
            case 30 : return $color[$rank];
            default : return $color[32];
        }
    }

    public function getTDColor50($rank) {
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0095ad", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0095ad", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0095ad", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0080bd", "#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
            case 11 : return $color[$rank];
            case 12 : return $color[$rank];
            case 13 : return $color[$rank];
            case 14 : return $color[$rank];
            case 15 : return $color[$rank];
            case 16 : return $color[$rank];
            case 17 : return $color[$rank];
            case 18 : return $color[$rank];
            case 19 : return $color[$rank];
            case 20 : return $color[$rank];
            case 21 : return $color[$rank];
            case 22 : return $color[$rank];
            case 23 : return $color[$rank];
            case 24 : return $color[$rank];
            case 25 : return $color[$rank];
            case 26 : return $color[$rank];
            case 27 : return $color[$rank];
            case 28 : return $color[$rank];
            case 29 : return $color[$rank];
            case 30 : return $color[$rank];
            case 31 : return $color[1];
            case 32 : return $color[2];
            case 33 : return $color[3];
            case 34 : return $color[4];
            case 35 : return $color[5];
            case 36 : return $color[6];
            case 37 : return $color[7];
            case 38 : return $color[8];
            case 39 : return $color[9];
            case 40 : return $color[10];
            case 41 : return $color[11];
            case 42 : return $color[12];
            case 43 : return $color[13];
            case 44 : return $color[14];
            case 45 : return $color[15];
            case 46 : return $color[16];
            case 47 : return $color[17];
            case 48 : return $color[18];
            case 49 : return $color[19];
            case 50 : return $color[20];
            default : return $color[32];
        }
    }

    public function getTDColor100($rank) { 
        $color = array("#26b9b7", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0095ad", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0095ad", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0171be","#0095ad", "#00b6f0","#0095ad","#0171be","#0095ad","#0080bd","#0095ad","#0080bd", "#183959");
        if($rank > 50){
            $rank = $rank - 50;
        }
        switch ($rank) {
            case 1 : return $color[$rank];
			case 2 : return $color[$rank];
			case 3 : return $color[$rank];
			case 4 : return $color[$rank];
			case 5 : return $color[$rank];
			case 6 : return $color[$rank];
			case 7 : return $color[$rank];
			case 8 : return $color[$rank];
			case 9 : return $color[$rank];
			case 10 : return $color[$rank];
            case 11 : return $color[$rank];
            case 12 : return $color[$rank];
            case 13 : return $color[$rank];
            case 14 : return $color[$rank];
            case 15 : return $color[$rank];
            case 16 : return $color[$rank];
            case 17 : return $color[$rank];
            case 18 : return $color[$rank];
            case 19 : return $color[$rank];
            case 20 : return $color[$rank];
            case 21 : return $color[$rank];
            case 22 : return $color[$rank];
            case 23 : return $color[$rank];
            case 24 : return $color[$rank];
            case 25 : return $color[$rank];
            case 26 : return $color[$rank];
            case 27 : return $color[$rank];
            case 28 : return $color[$rank];
            case 29 : return $color[$rank];
            case 30 : return $color[$rank];
            case 31 : return $color[1];
            case 32 : return $color[2];
            case 33 : return $color[3];
            case 34 : return $color[4];
            case 35 : return $color[5];
            case 36 : return $color[6];
            case 37 : return $color[7];
            case 38 : return $color[8];
            case 39 : return $color[9];
            case 40 : return $color[10];
            case 41 : return $color[11];
            case 42 : return $color[12];
            case 43 : return $color[13];
            case 44 : return $color[14];
            case 45 : return $color[15];
            case 46 : return $color[16];
            case 47 : return $color[17];
            case 48 : return $color[18];
            case 49 : return $color[19];
            case 50 : return $color[20];
            default : return $color[32];
        }
    }

	public function is_url_exist($user_id){
		//ÊÅÑº status à¾×èÍà»ÅÕèÂ¹ÅÔ§¤ìà»ç¹ cloud ËÃ×Í à«ÔÃì¿ winner
		if (file_exists('/home/www/takeme_web/assets/images/img_vj_logo/'.$user_id.'.png')) {
			$status = false;
            //$status = true;
		}
		else{
			$status = true;
		}
	   return $status;
	}

	public function getImage($src_url,$userid){
		$url	= $src_url;
		$img = '/home/www/takeme_web/assets/images/img_vj_logo/'.$userid.".png";
		
		//@file_put_contents($img, file_get_contents($url));
		//return $url;//Src ÃÙ» ¨Ò¡ cloud
		return "https://takeme.la/assets/images/img_vj_logo/".$userid.".png"; //Src ÃÙ» ¨Ò¡ à¤Ã×èÍ§àÇçº
		 
	}

    

}

function DateTostr($strDate,$lang = '')
{
    $strYear = date("Y",strtotime($strDate)); 
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strHoureng= date("h",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strMinuteInter= date("i A",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
    $strDay_num= date("d",strtotime($strDate));
    $strDay_str= date("S",strtotime($strDate));
    if($lang == 'th'){
        $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
        $strMonthThai=$strMonthCut[$strMonth];
        return " $strDay $strMonthThai ".($strYear+543)." ($strHour.$strMinute น.)";
    }elseif($lang == 'en'){
        $strMonthCut = Array("","January","February","March","April","May","June","July","August","September","October","November","December");
        $strMonth=$strMonthCut[$strMonth];
        return "$strMonth ".number_format($strDay_num)."$strDay_str $strYear  ($strHoureng.$strMinuteInter) GMT+7 ";
    }elseif($lang == 'id'){
        $strMonthCut = Array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        $strMonth=$strMonthCut[$strMonth];
        return "$strMonth ".number_format($strDay_num)."$strDay_str $strYear  ($strHoureng.$strMinuteInter) GMT+7 ";
    }elseif($lang == 'vn'){
        $strMonthCut = Array("","1","2","3","4","5","6","7","8","9","10","11","12");
        $strMonth=$strMonthCut[$strMonth];
        return number_format($strDay_num)." tháng $strMonth $strYear  ($strHoureng.$strMinuteInter)  GMT+7 ";
    }
    

    
}
function DateTostr_small($strDate,$lang = '')
{
    $strYear = date("Y",strtotime($strDate)); 
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strHoureng= date("h",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strMinuteInter= date("i A",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
    $strDay_num= date("d",strtotime($strDate));
    $strDay_str= date("S",strtotime($strDate));
    if($lang == 'th'){
        $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
        $strMonthThai=$strMonthCut[$strMonth];
        return " $strDay $strMonthThai ".($strYear+543)." ($strHour.$strMinute น.)";
    }elseif($lang == 'en'){
        $strMonthCut = Array("","JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC");
        $strMonth=$strMonthCut[$strMonth];
        return "$strMonth ".number_format($strDay_num)."$strDay_str $strYear  ($strHoureng.$strMinuteInter) GMT+7 ";
    }elseif($lang == 'id'){
        $strMonthCut = Array("","JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC");
        $strMonth=$strMonthCut[$strMonth];
        return "$strMonth ".number_format($strDay_num)."$strDay_str $strYear  ($strHoureng.$strMinuteInter) GMT+7 ";
    }elseif($lang == 'vn'){
        $strMonthCut = Array("","1","2","3","4","5","6","7","8","9","10","11","12");
        $strMonth=$strMonthCut[$strMonth];
        return number_format($strDay_num)." tháng $strMonth $strYear  ($strHoureng.$strMinuteInter)  GMT+7 ";
    }
    

    
}
function DateTostr_noTime($strDate,$lang = '')
{
    $strYear = date("Y",strtotime($strDate)); 
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strHoureng= date("h",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strMinuteInter= date("i A",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
    $strDay_num= date("d",strtotime($strDate));
    $strDay_str= date("S",strtotime($strDate));
    if($lang == 'th'){
        $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
        $strMonthThai=$strMonthCut[$strMonth];
        return " $strDay $strMonthThai ".($strYear+543);
    }elseif($lang == 'en'){
        $strMonthCut = Array("","JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC");
        $strMonth=$strMonthCut[$strMonth];
        return "$strMonth ".number_format($strDay_num)."$strDay_str $strYear";
    }elseif($lang == 'id'){
        $strMonthCut = Array("","JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC");
        $strMonth=$strMonthCut[$strMonth];
        return "$strMonth ".number_format($strDay_num)."$strDay_str $strYear";
    }elseif($lang == 'vn'){
        $strMonthCut = Array("","1","2","3","4","5","6","7","8","9","10","11","12");
        $strMonth=$strMonthCut[$strMonth];
        return number_format($strDay_num)." tháng $strMonth $strYear";
    }
    

    
}

function DateTostr_test($strDate,$lang = '')
{
    $strYear = date("Y",strtotime($strDate)); 
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strHoureng= date("h",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strMinuteInter= date("i A",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
    $strDay_num= date("d",strtotime($strDate));
    $strDay_str= date("S",strtotime($strDate));
    if($lang == 'th'){
        $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
        $strMonthThai=$strMonthCut[$strMonth];
        return " $strDay $strMonthThai ".($strYear+543)." ($strHour.$strMinute น.)";
    }elseif($lang == 'en'){
        $strMonthCut = Array("","January","February","March","April","May","June","July","August","September","October","November","December");
        $strMonth=$strMonthCut[$strMonth];
        return "$strMonth ".number_format($strDay_num)."$strDay_str $strYear  ($strHoureng.$strMinuteInter) GMT+7 ";
    }elseif($lang == 'id'){
        $strMonthCut = Array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        $strMonth=$strMonthCut[$strMonth];
        return "$strMonth ".number_format($strDay_num)."$strDay_str $strYear  ($strHoureng.$strMinuteInter) GMT+7 ";
    }elseif($lang == 'vn'){
        $strMonthCut = Array("","1","2","3","4","5","6","7","8","9","10","11","12");
        $strMonth=$strMonthCut[$strMonth];
        return number_format($strDay_num)." tháng $strMonth $strYear  ($strHoureng.$strMinuteInter)  GMT+7 ";
    }
    

    
}


?>
