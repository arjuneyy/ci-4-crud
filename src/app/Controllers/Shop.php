<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }

    public function product($type ='default laptop')
    {
        return "<h2> Product with type '".strtoupper($type)."'.";
    }
}
