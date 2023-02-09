<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        echo "<h2>This is an admin shop area.</h2>";
    }

    public function product($type)
    {
        return "<h2> Admin product with type '".strtoupper($type)."'.";
    }
}
