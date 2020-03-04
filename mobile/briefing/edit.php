<?php

/**
 * @var $this yii\web\View
 * @var $model Briefing
 */

use app\assets\MobileAsset;
use app\models\Briefing;
use yii\helpers\Html;
MobileAsset::register($this);
?>
<div class="site-about">
    <h1><?= Html::encode($model->id ? $model->title : 'Добавить проверку') ?></h1>

    <div class="form-group pull-right">
        <?= Html::a('Отмена', ['briefing/index'], ['class' => 'btn btn-info']) ?>
    </div>
</div>

<?= $this->render('_form', [
    'model' => $model,
]) ?>
