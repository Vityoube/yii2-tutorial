<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use yii\db\ActiveRecord;
/**
 * Description of TestForm
 *
 * @author vkalashnykov
 */
class PostForm extends ActiveRecord{
    
    public static function tableName() {
        return 'posts';
    }


    public function attributeLabels() {
        return [
            'name'=> 'Imie',
            'email'=> 'E-mail',
            'text'=> 'Tekst wiadomości',  

        ];
    }
    
    public function rules() {
        return [
          [['name','text'],'required'],
            ['email','email'],
        ];
    }
    
}
