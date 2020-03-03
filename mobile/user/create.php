<?php

use app\assets\MobileAsset;
use yii\helpers\Html;

MobileAsset::register($this);

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Создание пользователя';

$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="site-about">
        <div class="form-group">
            <?= Html::a('Назад', ['user/index'], ['class' => 'btn btn-info']) ?>
        </div>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
