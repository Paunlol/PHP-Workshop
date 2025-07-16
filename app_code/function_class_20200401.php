<?php

class function_class {

    public function getTDColor($rank) {
        $color = array("#26b9b7", "#00b6f0", "#0171be", "#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
            case 2 : return $color[$rank];
            case 2 : return $color[$rank];
            default : return $color[3];
        }
    }

	public function getTDColor2($rank) {
        $color = array("#26b9b7", "#00b6f0", "#0171be", "#183959");
        switch ($rank) {
            case 1 : return $color[$rank];
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
            case 1 : return $color[4];
			case 2 : return $color[4];
			case 3 : return $color[4];
			case 4 : return $color[4];
			case 5 : return $color[4];
			case 6 : return $color[4];
			case 7 : return $color[4];
			case 8 : return $color[4];
			case 9 : return $color[4];
			case 10 : return $color[4];
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

	public function is_url_exist($user_id){
		//ÊÅÑº status à¾×èÍà»ÅÕèÂ¹ÅÔ§¤ìà»ç¹ cloud ËÃ×Í à«ÔÃì¿ winner
		if (file_exists('/home/www/takeme_web/assets/images/img_vj_logo/'.$user_id.'.png')) {
			$status = false;
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
