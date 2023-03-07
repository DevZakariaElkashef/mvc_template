<?php

namespace App\Controllers;

use App\Models\Posts as ModelsPosts;
use Core\Controller;
use Core\View;

class Posts extends Controller
{
    public function indexAction()
    {
        $posts = ModelsPosts::getAll();

       View::Render('posts.php', [
        'posts' => $posts
       ]);
    }

    public function editAction()
    {
        echo 'Hello from the edit action in the Posts controller!';
    }

    public function before()
    {
        // echo '(before)';
    }

    public function after()
    {
        // echo '(after)';
    }
}