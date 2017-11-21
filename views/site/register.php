<?php

/* @var $this yii\web\View */
/* @var $model app\models\RegisterForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>

<div class="row main">
    <div class="main-login main-center">

        <?php $form = ActiveForm::begin(['id' => 'form-signup','options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'first_name')->textInput(['autofocus' => true, 'class' => "form-control", 'id' => "first_name", 'placeholder' => "Enter First Name"]) ?>
        <?= $form->field($model, 'second_name')->textInput(['class' => "form-control", 'id' => "second_name", 'placeholder' => "Enter Second Name"]) ?>
        <?= $form->field($model, 'email')->textInput(['class' => "form-control", 'id' => "email", 'placeholder' => "Enter your Email"])?>
        <?= $form->field($model, 'password')->passwordInput(['class' => "form-control", 'id' => "password", 'placeholder' => "Enter your Password"])?>
        <?= $form->field($model, 'age')->dropDownList(\app\components\helpers\UserProfileHelper::getAgesArray(),[
            'id' => "age",
        ]);?>

        <?= $form->field($model, 'photo')->fileInput(['class' => "form-control", 'id' => "photo"])?>
        <?php $model->gender = 1;?>
        <?= $form->field($model, 'gender')->radioList(\app\components\helpers\UserProfileHelper::getGenders(),[
            'id' => "gender",
        ])?>

        <div class="form-group">
            <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

