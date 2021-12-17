<?php

namespace project\controllers;

use Core\Controller;

class ProductController extends Controller
{
    private $products;

    public function __construct()
    {

        $this->products = [
            1 => [
                'name'     => 'product1',
                'price'    => 100,
                'quantity' => 5,
                'category' => 'category1',
            ],
            2 => [
                'name'     => 'product2',
                'price'    => 200,
                'quantity' => 6,
                'category' => 'category2',
            ],
            3 => [
                'name'     => 'product3',
                'price'    => 300,
                'quantity' => 7,
                'category' => 'category2',
            ],
            4 => [
                'name'     => 'product4',
                'price'    => 400,
                'quantity' => 8,
                'category' => 'category3',
            ],
            5 => [
                'name'     => 'product5',
                'price'    => 500,
                'quantity' => 9,
                'category' => 'category3',
            ],
            6 => [
                'name'     => 'грибы',
                'price'    => 5,
                'quantity' => 1,
                'category' => 'грибная',
            ]
        ];
    }

    function show($params)
    {
        $this->title = 'Показать продукт : ' . $this->products[$params['n']]['name'];
        return $this->render('product/show', [
            'product'  => $this->products[$params['n']]['name'],
            'price'    => $this->products[$params['n']]['price'],
            'quantity' => $this->products[$params['n']]['quantity'],
            'category' => $this->products[$params['n']]['category']
        ]);
    }


    function showAll() {
        $this->title = 'Показать все продукты';
        return $this->render('product/showAll',[
            'products' => $this->products
            ]
        );
    }

}