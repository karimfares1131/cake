<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class ContactController extends AppController{
   function index(){
       if($this->request->is('post')){
            $this->Contact->send($this->request->getData['Contact']);
       }
       
   }
}