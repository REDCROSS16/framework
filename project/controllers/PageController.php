<?php

    namespace project\controllers;
    use Core\Controller;
    use \Project\Models\Page;

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
            echo '<img src="https://img5.goodfon.ru/original/1920x1080/9/18/zima-sneg-tigr-risunok-novyi-god-new-year-god-tigra-tiger-wi.jpg">';
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


        public function test()
        {
            $page = new Page;
            $data = $page->getById(2);
            echo '<pre>';
            print_r($data);


            $data = $page->getById(1);
            print_r($data);

            $data = $page->getByRange(1,2);
            print_r($data);
            echo '</pre>';
        }
    }


