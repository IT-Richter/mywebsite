<?php

namespace App\Core;

abstract class AbstractController
{

    public function render($view, $params)
    {
        //foreach ($params AS $key => $value) {
        //    ${$key} = $value;
        //}
        extract($params);
        include __DIR__ . "/../../views/{$view}.php";
    }
}