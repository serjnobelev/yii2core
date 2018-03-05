<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class UserForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $about;
    public $isAdmin = true;
    public $photo;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            //[['name', 'email', 'about'], 'filter' => 'trim', 'skipOnArray' => true],
            [['name', 'email', 'about'], 'trim'],
            ['name', 'string'],
            ['name', 'required', 'message' => Yii::t('userformmsg', 'Поле имя не может быть пустым')],
            [['email', 'password'], 'required'],
            [['email'], 'email'],
            ['email', 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'email'],
            [['about'], 'default', 'value' => 'Пусто'],
            // rememberMe must be a boolean value
            ['isAdmin', 'boolean'],
            //['photo', 'image']
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

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24 : 0);
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByEmail($this->email);
        }

        return $this->_user;
    }
}
