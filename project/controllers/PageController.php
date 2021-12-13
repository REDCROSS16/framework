<?php

    namespace project\controllers;
    use \Core\Controller;

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
    }


