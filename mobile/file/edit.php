<?php

/**
 * @var $this yii\web\View
 * @var $model File
 */

use app\assets\MobileAsset;
use app\models\File;
use yii\helpers\Html;
MobileAsset::register($this);

?>
<div class="row">
    <h1><?= Html::encode($model->id ? $model->title : 'Новый документ') ?></h1>

    <div class="form-group pull-right">
        <?= Html::a('Отмена', ['file/index'], ['class' => 'btn btn-info']) ?>
    </div>
</div>

<?= $this->render('upload', [
    'model' => $model,
]) ?>
