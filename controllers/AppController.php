<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of AppController
 *
 * @author vkalashnykov
 */

use yii\web\Controller;

class AppController extends Controller{
        //put your code here
    
    public function debug($arr){
        echo '<pre>'.print_r($arr,true).'</pre>';
    }
}

