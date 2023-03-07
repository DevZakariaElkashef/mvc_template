<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class Home extends Controller
{
    public function indexAction()
    {
        View::Render('Home.php');
    }

    public function before()
    {
        // echo 'before <br>';
    }

    public function after()
    {
        // echo '<br> after';
    }

   
}