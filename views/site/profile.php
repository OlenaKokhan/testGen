<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

/* @var $model app\models\User */

$this->title = 'My Yii Application';
?>

<div class="row">
    <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        <div class="profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2><?= $model->first_name ?> <?= $model->second_name ?></h2>
                    <p><strong>Email: </strong> <?= $model->email ?> </p>
                    <p><strong>Age: </strong> <?= $model->age ?> </p>
                    <p><strong>Gender: </strong> <?= \app\components\helpers\UserProfileHelper::getGender($model->gender) ?> </p>
                </div>
                <div class="col-xs-12 col-sm-4">

                    <a data-fancybox="gallery"
                       href="<?= (($model->photo && $model->photo != "") ? $model->photo : '/uploads/1.png'); ?>">
                        <img class="profile_img"
                             src="<?= (($model->photo_thumb && $model->photo != "") ? $model->photo_thumb : '/uploads/1.png'); ?>"
                             alt=""/></a>
                </div>
            </div>
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis"></div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <?= Html::beginForm(['/site/logout'], 'post') ?>
                    <?= Html::submitButton(
                        '<span class="fa fa-user"></span> Logout',
                        ['class' => 'btn btn-info btn-block', 'id' => "button"]
                    ); ?>
                    <?= Html::endForm(); ?>

                </div>
                <div class="col-xs-12 col-sm-4 emphasis"></div>
            </div>
        </div>
    </div>
</div>

