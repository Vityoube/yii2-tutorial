<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author vkalashnykov
 */
namespace app\controllers\admin;

class UserController extends \app\controllers\AppController{
    //put your code here
    public function actionIndex(){
        return $this->render('index');
    }
}
