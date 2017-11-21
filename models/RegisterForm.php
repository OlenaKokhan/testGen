<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * RegisterForm is the model behind the register form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class RegisterForm extends Model
{
    public $first_name;
    public $second_name;
    public $password;
    public $email;
    public $gender;
    public $age;
    public $photo;
    public $photo_thumb;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['first_name', 'second_name','age', 'gender'], 'filter', 'filter' => 'trim'],
            [['first_name', 'second_name'], 'required'],
            [['first_name', 'second_name'], 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            [['photo'],'file', 'extensions'=>'jpg, gif, png', 'maxFiles' => 1]
        ];
    }

    public function attributeLabels()
    {
        return [
            'password' => 'Password',
            'email' => 'Email',
            'first_name' => 'First Name',
            'second_name' => 'Second Name',
            'gender' => 'Gender',
            'age' => 'Age',
            'photo' => 'Photo',
            'photo_thumb' => 'Photo Thumb',
        ];
    }

    /**
     * Registers user.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function register()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->first_name = $this->first_name;
        $user->second_name = $this->second_name;
        $user->email = $this->email;
        $user->gender = $this->gender;
        $user->email = $this->email;
        $user->age = $this->age;
        $user->photo = $this->photo;
        $user->photo_thumb = $this->photo_thumb;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save(false) ? $user : null;
    }

}
