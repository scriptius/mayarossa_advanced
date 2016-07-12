<?php
/**
 * Created by PhpStorm.
 * User: v.mamonov
 * Date: 12.07.2016
 * Time: 16:54
 */

namespace frontend\models;

use yii\base\Model;

class RegisterForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $repassword;

    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            [['username','password'], 'required'],
            //['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            //['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['repassword', 'compare', 'compareAttribute' => 'password'],

        ];
    }

}