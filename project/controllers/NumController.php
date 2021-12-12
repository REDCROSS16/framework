<?php

namespace project\controllers;

use core\Controller;

class NumController extends Controller
{
    public function sum($numbers)
    {
        echo (array_sum($numbers));
    }
}