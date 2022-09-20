<?php

namespace App\Core;

class CoreController extends AbstractController
{
    public function index(){
        $this->render('core/index',[]);
    }
    public function show(){
        $this->render('core/projects',[]);
}

}