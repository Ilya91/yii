<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.05.2016
 * Time: 18:28
 */

namespace frontend\models;


use yii\base\Model;

class Image extends Model
{
    public static function getImageUrl(){
        return 'image.png';
    }
}