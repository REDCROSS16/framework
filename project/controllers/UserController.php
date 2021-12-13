<?php

namespace project\controllers;

use core\controller;

class UserController extends Controller
{
    private $users;

    public function __construct()
    {
        $this->users = [
            1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
            2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
            3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
            4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
            5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
        ];
    }

    public function show($params)
    {
        echo '<h5>Name: ' . $this->users[$params['id']]['name'] . '</h5> <br>';
        echo '<h5>Age: ' . $this->users[$params['id']]['age'] . '</h5><br>';
        echo '<h5>Salary: ' . $this->users[$params['id']]['salary'] . '</h5> <br>';
    }

    /**
     * @param $params
     * В контроллере UserController, сделайте действие info,
     * которое будет выводить имя или возраст заданного юзера. Пусть это действие
     * будет доступно по адресу следующего вида: /user/:id/:key/, где key будет
     * иметь значение 'name', 'age' или 'salary'.
     */
    public function info($params)
    {
        echo $this->users[$params['id']][$params['key']];
    }


    public function all()
    {
        $result = '';
        foreach ($this->users as $user) {
            $result .= $user['name'] . '-' .  $user['age'] . '-' . $user['salary'] . '<br>';
        }

        echo $result;
    }


    public function first($params)
    {
        for ($i = 1; $i <= $params['n']; $i++)
        {

            echo $this->users[$i]['name'] . ' ';
            echo $this->users[$i]['age'] . ' ';
            echo $this->users[$i]['salary'] . ' ';
            echo "...<br>";
        }
    }
}
