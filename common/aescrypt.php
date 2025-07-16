<?php

class aescrypt {
 
	private function ppkey($key){
        //เช็ค $key ว่ามีจำนวน 16, 24 หรือ 32 หรือไม่ ถ้ายาวกว่าก็ตัดให้เหลือ 16, 24 หรือ 32
        //หมายเหตุ: $key ต้องไม่น้อยกว่า 16 ตัว
        
        if (strlen($key) > 32) {
            $key = substr($key, 0, 32);
        } elseif (strlen($key) > 24) {
            $key = substr($key, 0, 24);
        } elseif (strlen($key) > 16) {
            $key = substr($key, 0, 16);
        }
        return $key;
    }
    
    public function Encrypt($data, $key){
        $key = $this->ppkey($key);
        $rtn = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $data, MCRYPT_MODE_CBC, str_repeat(chr(0),32));
        return base64_encode($rtn);
    }
    
    public function Decrypt($data, $key){ 
        $key = $this->ppkey($key);
        $rtn = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($data), MCRYPT_MODE_CBC, str_repeat(chr(0),32));
        return trim(rtrim($rtn, "\4"));
    }

}
