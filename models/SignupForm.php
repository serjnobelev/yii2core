<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class SignupForm extends Model
{
    public $name;
    public $email;
    public $password;

    public function rules()
    {
        return [
            // username and password are both required
            [['name', 'email', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['name', 'string'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'email']
        ];
    }

    public function signup()
    {
        if($this->validate())
        {
            $user = new User();
            $user->attributes = $this->attributes;
            return $user->create();
        }
        exit('Такой email уже существует');
    }
}
