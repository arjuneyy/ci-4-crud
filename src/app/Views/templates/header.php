<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= (isset($meta_title)? $meta_title : 'CodeIgniter 4 Default Title') ?> </title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/blog">Blogs</a></li>
            <li><a href="/blog/post">New Blog</a></li>
        </ul>
    </nav>