<?php

namespace project\controllers;

use Core\Controller;

class TestController extends Controller
{
    public function act1()
    {
        echo "Act1!!!!";
    }

    public function act2()
    {
        echo "Act2!!!!";
    }

    public function act3()
    {
        echo "Act3!!!!";
    }

    public function act($params)
    {
        echo "2";
        var_dump($params);
    }
}