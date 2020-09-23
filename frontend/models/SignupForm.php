<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $rePassword;
    public $vitifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => '该用户名已被占用，请修改'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['username', 'match','pattern'=>'/^[(\x{4E00}-\x{9FA5})a-zA-Z]+[(\x{4E00}-\x{9FA5})a-zA-Z_\d]*$/u','message'=>'用户名由字母，汉字，数字，下划线组成，且不能以数字和下划线开头。'],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => '该邮箱已占用，如您已经注册，请直接登录.'],

            [['password', 'rePassword',], 'required'],
            [['password', 'rePassword',], 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
            ['rePassword', 'compare', 'compareAttribute' => 'password', 'message' => '两次密码必须一致'], //两次密码必须一致
            ['vitifyCode', 'captcha'], //验证码验证
        ];
    }

    public function attributeLabels() //属性labels
    {
        return [
            'username' => '用户名',
            'email' => '邮箱',
            'password' => '密码',
            'rePassword' => '重复密码',
            'vitifyCode' => '验证码',
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
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
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        return $user->save() && $this->sendEmail($user);
        //return $user->save();

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' 账户验证'])
            ->setTo($this->email)
            ->setSubject(Yii::$app->name . ' 账户验证')
            ->send();
    }
}
