<?php
/**
 * Created by PhpStorm.
 * User: mrily
 * Date: 26.03.2019
 * Time: 21:42
 */

namespace app\models;
use yii\base\Model;

class LikeForm extends Model
{
    public $like;

    public function rules()
    {

//        $str = $_POST['like'];


        return [
            [['like'], 'required', 'message' => 'Пустое поле'],
        ];
    }
}

