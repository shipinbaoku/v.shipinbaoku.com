<?php
namespace api\models;

use common\models\User;
use yii\base\Model;

/**
 * Signup form
 */
class ApiSignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => '用户名已被占用.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Email已被占用.'],

            ['password', 'required'],
            ['password_repeat', 'required'],
            ['password', 'string', 'min' => 6],
            ['password_repeat','compare','compareAttribute'=>'password','message'=>'两次输入的密码不一致！'],
            /*['realname','required'],
            ['realname','string','max'=>128],*/
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => '用户名',
            //'realname' => '姓名',
            'password' => '密码',
            'password_repeat'=>'重复密码',
            'email' => '电子邮箱',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     * @throws \yii\base\Exception
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        //$user->realname=$this->realname;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
