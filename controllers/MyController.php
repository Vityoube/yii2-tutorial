<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use yii\web\Controller;

/**
 * Description of MyController
 *
 * @author vkalashnykov
 */
class MyController extends Controller{
    //put your code here
    
    public function actionIndex($id=null){
        $hi ='Hello World!';
        $names=['Ivanov','Petrov','Sidorov'];
        if (!$id)$id='test';
//        return $this->render('index',['hello'=>$hi,'names'=>$names]);
        return $this->render('index',compact('hi','names','id'));
    }
}
