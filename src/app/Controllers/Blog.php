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

        $posts = ['Title 1', 'Title 2', 'Title 3'];
        $data['posts'] = $posts;
        
        return view('blog', $data);
    }
    
    public function post() {    
        $data = [
            'meta_title' => 'CodeIgniter 4 Single Post',
            'title' => 'Singe Post'
        ];    
        return view('single_post', $data);
    }
}
