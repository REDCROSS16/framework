<?php

    namespace project\controllers;
    use Core\Controller;

    class PageController extends Controller
    {
        private $pages;

        public function __construct()
        {
            $this->pages = [
                1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
                2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
                3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
            ];
        }

        function show($params)
        {
            $this->title = $this->pages[$params['id']]['title'];
//            echo $this->pages[$params['id']];
            return $this->render('', '');
        }

        public function act()
        {

            $this->title = 'Показать Акт';
            return $this->render('page/act', [
                'var1' => 'eee',
                'var2' => 'bbb',
                'var3' => 'kkk',
            ]);
        }

        public function act2()
        {
            $this->title = 'Показать Акт2';
            return $this->render('page/act2', [
                'header' => 'список юзеров',
                'users'  => ['user1', 'user2', 'user3'],
            ]);
        }
    }


