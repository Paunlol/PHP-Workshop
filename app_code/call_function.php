<!-- <script src="sweetalert2@11.js"></script> -->
<?php
include("Function_v2.php");
// include("sweetalert2@11.js");

class coupon extends Function_v2
{
    public $name;

    public function __construct()
    { 
        $this->name = "coupon";
    }
}
class money extends Function_v2
{
    public $name;

    public function __construct()
    {
        $this->name = "money";
    }
}

$coupon = new coupon();
$money = new money(); 


