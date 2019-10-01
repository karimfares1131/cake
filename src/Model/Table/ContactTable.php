<?php

namespace App\Controller;
use App\Controller\ContactController;
use App\Controller\AppController;
use Cake\Core\App;


class Contact extends AppController{
    public $useTable = false;
    public function send($d){
        debug($d);
    }
}