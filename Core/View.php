<?php

namespace Core;

use Twig\Loader\FilesystemLoader;

class View
{
    public static function Render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = '../App/Views/' . $view;
        
        if(is_readable($file)){
            require $file;
        }else{
            throw new \Exception("file ($file) not found");
        }

    }


    public static function templateRender($template, $args = [])
    {
        static $twig = null;

        if($twig === null){

            $loader = new FilesystemLoader(dirname(__DIR__) . '/App/Views');
            $twig = new \Twig\Environment($loader);
        }

        echo $twig->render($template, $args);
    }
}