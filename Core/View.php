<?php

namespace Core;


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
}