<?php

    namespace project\controllers;
    use Core\Controller;

    class PageController extends Controller
    {
        private $pages;

        public function __construct()
        {
            $this->pages = [
                '1' => 'страница 1',
                '2' => 'страница 2',
                '3' => 'страница 3',
            ];
        }

        function show($params)
        {
            echo $this->pages[$params['id']];
        }

        public function act()
        {
            return $this->render('page/act', [
                'var1' => 'eee',
                'var2' => 'bbb',
                'var3' => 'kkk',
            ]);
        }

        public function act2()
        {
            return $this->render('page/act2', [
                'header' => 'список юзеров',
                'users'  => ['user1', 'user2', 'user3'],
            ]);
        }
    }


