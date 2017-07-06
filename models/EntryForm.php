<?php
/**
 * Created by PhpStorm.
 * User: rakymzhan
 * Date: 6/25/17
 * Time: 10:08 PM
 */
namespace app\models;

use Yii;
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