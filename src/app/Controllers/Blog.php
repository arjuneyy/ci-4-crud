<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'CodeIgniter 4 Blog',
            'title' => 'Our Blog'
        ];
        echo view('templates/header', $data);
        echo view('blog');
        echo view('templates/footer');
    }
    
    public function post() {    
        $data = [
            'meta_title' => 'CodeIgniter 4 Single Post',
            'title' => 'Singe Post'
        ];    
        echo view('templates/header', $data);
        echo view('single_post');
        echo view('templates/footer');
    }
}
