<?php
namespace App\Controller;
use App\Controller\ContactController;
class Contact extends AppModel{
    public $useTable = false;
    public function send($d){
        debug($d);
    }
}