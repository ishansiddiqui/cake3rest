<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class CocktailsController extends AppController {
    
     public $paginate = [
        'page' => 1,
        'limit' => 2,
        'maxLimit' => 100,
        'fields' => [
            'id', 'name', 'description'
        ],
        'sortWhitelist' => [
            'id', 'name', 'description'
        ]
    ]; 
     
     public function beforeFilter(Event $event) {
        
    //parent::beforeFilter();
        $this->Crud->addListener('Crud.Api');
      }
    
    
}

