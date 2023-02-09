<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        echo "<h2>This is admin user area.</h2>";
    }

    public function getAllUsers()
    {
        return "<h2> Displaying all users.</h2>";
    }
}
