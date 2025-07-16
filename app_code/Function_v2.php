<?php
class Function_v2
{
    public $name;
    public $sum_reward;
    public $sum_reward_money;
    public $sum_reward_detail;
    public $cnt_idx = 0;

    public function show($ln, $reward)
    {
        $ln = strtolower($ln);
        $txt_show21 = "";

        if ($this->name == 'coupon') {

            if ($ln == 'th') {
                foreach ($reward as $value) {
                    $txt_show21 .= '<img id="coin" src="../../../../images/icon_coupons/icon-คูปอง-' . $value . '-en.png" width="50px" valign="middle">= มีสิทธิ์รับรางวัล ' . number_format($value) . ' คูปอง<br />';
                }
            } else if ($ln == 'en') {
                foreach ($reward as $value) {
                    $txt_show21 .= '<img id="coin" src="../../../../images/icon_coupons/icon-คูปอง-' . $value . '-en.png" width="50px" valign="middle">= Have a chance to get reward ' . number_format($value) . ' Coupons<br />';
                }
            }
        } else if ($this->name == 'money') {

            if ($ln == 'th') {
                foreach ($reward as $value) {
                    $txt_show21 .= '<img id="coin" src="../../../../images/icon_condition/' . number_format($value) . '.png" width="50px" valign="middle">= มีสิทธิ์รับรางวัล ' . number_format($value) . ' บาท<br />';
                }
                $txt_show21 .= '<br /><br />';
                foreach ($reward as $value) {
                    $txt_show21 .= '<img id="coin" src="../../../../images/icon_condition/' . number_format($value) . '-No.png" width="50px" valign="middle">= ไม่มีสิทธิ์รับรางวัล ' . number_format($value) . ' บาท<br />';
                }
            }
            if ($ln == 'en') {
                foreach ($reward as $value) {
                    $txt_show21 .= '<img id="coin" src="../../../../images/icon_condition/' . number_format($value) . '.png" width="50px" valign="middle">= Have a chance to get reward ' . number_format($value) . ' Baht.<br />';
                }
                $txt_show21 .= '<br /><br />';
                foreach ($reward as $value) {
                    $txt_show21 .= '<img id="coin" src="../../../../images/icon_condition/' . number_format($value) . '-No.png" width="50px" valign="middle">= No have a chance to get reward ' . number_format($value) . ' Baht.<br />';
                }
            }
        }
        return $txt_show21;
    }

    public function get($reward, $con = NULL)
    {
        $txt_reward = "";
        // $value = $reward;
        $value = intval(str_replace(',', '', $reward));
        

        if ($this->name == 'coupon') {  
            $this->sum_reward += $value;  
            $this->cnt_idx++; 
            $this->reward_detail($value);

            $txt_reward = '<img src="../../../../images/icon_coupons/icon-คูปอง-' . $value . '-en.png"  width="50" height="50"/>';
        }
        if ($this->name == 'money') {
            if ($con != NULL && $con == "no") {
                
                $txt_reward = '<img src="../../../../images/icon_condition/' . number_format($value) . '-No.png"  width="100" />';
            } else {
                $this->sum_reward += $reward;  
                $this->cnt_idx++; 
                $this->reward_detail($value);

                $txt_reward = '<img src="../../../../images/icon_condition/' . number_format($value) . '.png"  width="100" />';
            }
        }

        return $txt_reward;
    }

    public function reward_detail($reward, $con = NULL)
    {
        if(isset($this->sum_reward_detail[$reward])){
            $this->sum_reward_detail[$reward] += 1;
        } else {
            $this->sum_reward_detail[$reward] = 1;
        }

    }

}
