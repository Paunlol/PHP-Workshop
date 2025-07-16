<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function myview()
    {
        // echo "hi index2";
        $data['senddataview'] = "dataContro";
        $data['arr'] = array(
            'x1' => 'y1',
            'x2' => 'y2',
            'x3' => 'y3',
        );
        return view('my_view', $data);
    }
}
