<?php

namespace App\Core;

class CoreController extends AbstractController
{
    public function projects(){
        $this->render('core/projects',[]);
}

}