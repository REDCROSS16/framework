<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
        new Route('/page1/', 'page', 'show1'),
        new Route('/page2/', 'page', 'show2'),
        new Route('/test1/', 'test', 'act1'),
        new Route('/test2/', 'test', 'act2'),
        new Route('/test3/', 'test', 'act3'),

        new Route('/test/:var1/:var2', 'test', 'act'),

        new Route('/sumofnumber/:num1/:num2/:num3', 'num', 'sum'),

        new Route('/page/:id/', 'page', 'show'),

        new Route('/users/:id/', 'user', 'show'),
        new Route('/users/:id/:key/', 'user', 'info'),
        new Route('/user/all', 'user', 'all'),
        new Route('/user/first/:n/', 'user', 'first'),
	];
	
