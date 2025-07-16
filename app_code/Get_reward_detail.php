<?php

include_once("Function_v2.php");

class Get_reward_detail extends Function_v2 {

    public $cnt_reward = 0;
    public $name;

    public function __construct() {
        $this->name = 'detail';
    }

    
}

// $rwdetail = new Get_reward_detail();
// $rwdetail->cnt_reward = $res->more_data[0];
// echo "<pre>";
// print_r($rwdetail->cnt_reward);