<?php

use yii\helpers\Html; ?>

<div class="row">
        <h1>Данный раздел в разработке</h1>
    <div class="form-group pull-left">
        <?= Html::a('На главную', ['site/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Перейти к объявлениям', ['activity/index'], ['class' => 'btn btn-info']) ?>
    </div>
</div>