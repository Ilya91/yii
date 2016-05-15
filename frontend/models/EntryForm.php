<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.05.2016
 * Time: 12:53
 */

namespace frontend\models;


use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}