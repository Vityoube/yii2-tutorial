<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\components;

use yii\base\Widget;

class MyWidget extends Widget{
    
    public $name;
    
    public function init() {
        parent::init();
      
//        if ($this->name==null)$this->name='gość';
          ob_start();
    }
    
    public function run() {
        $content= ob_get_clean();
        $content= mb_strtoupper($content);
//        return $this->render('my',['name'=> $this->name]);  
        return $this->render('my', compact('content'));
    }
}
