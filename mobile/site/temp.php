<?php

use app\assets\MobileAsset;
use yii\helpers\Html;
MobileAsset::register($this);?>

<div class="site-about">
        <h1>Данный раздел в разработке</h1>
    <div class="form-group pull-left">
        <?= Html::a('На главную', ['site/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Перейти к объявлениям', ['activity/index'], ['class' => 'btn btn-info']) ?>
    </div>
</div>