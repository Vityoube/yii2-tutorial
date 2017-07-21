<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use app\models\Category;
use app\models\PostForm;
use Yii;
use function debug;
/**
 * Description of PostController
 *
 * @author vkalashnykov
 */
class PostController extends AppController{
    
    public $layout='basic';
    
    public function beforeAction($action) {
        if ($action->id=='index'){
            $this->enableCsrfValidation=false;
        }
        return parent::beforeAction($action);
    }
    public function actionIndex(){
        if (Yii::$app->request->isAjax){
            debug(Yii::$app->request->post());
            return 'test';
        }
//        $post= PostForm::findOne(2);
////        $post->email='22@2.com';
////        $post->save();
//        
//        $post->delete();
        
        PostForm::deleteAll();
        
        $post=new PostForm();
//        $post->name='Author';
////        $post->email='mail';
////        $post->text='Message text';
//        $post->save();
        
        if ($post->load(Yii::$app->request->post())){
            if ($post->save()){
                Yii::$app->session->setFlash('success','Data is ok');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error','Error');
            }
        }
        return $this->render('test', compact('post'));
    }
    
    public function actionShow(){
        $this->view->title='Article';
        $this->view->registerMetaTag(['name'=>'keywords','content'=>'keywords...']);
        $this->view->registerMetaTag(['name'=>'description','content'=>'Description of page...']);
        
//        $cats= Category::find()->all();
        $cats= Category::find()->with('products')->all();

        return $this->render('show', compact('cats'));
    }
}
