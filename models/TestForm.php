<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use yii\base\Model;
/**
 * Description of TestForm
 *
 * @author vkalashnykov
 */
class TestForm extends Model{
    //put your code here
    public $name;
    public $email;
    public $text;
    
    public function attributeLabels() {
        return [
            'name'=> 'Imie',
            'email'=> 'E-mail',
            'text'=> 'Tekst wiadomości',  

        ];
    }
    
    public function rules() {
        return [
          [['name','email'],'required'],
            ['email','email'],
//            ['name','string','min'=>2,'tooShort'=>'Za krótkie'],
//            ['name','string','max'=>5,'tooLong'=>'Za długie']
            ['name','string','length'=>[2,5],'tooShort'=>'Za krótkie', 'tooLong'=>'Za długie'],
            ['name','myRule'],
            ['text','safe']
        ];
    }
    
    public function myRule($attr){
        if (!in_array($this->$attr, ['hello','world'])){
            $this->addError($attr,'Wrong');
        }
    }
}
