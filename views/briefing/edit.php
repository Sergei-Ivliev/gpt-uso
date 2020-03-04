<?php

/**
 * @var $this yii\web\View
 * @var $model Briefing
 */

use app\models\Briefing;
use yii\helpers\Html;

?>
<div class="site-about" style="margin-bottom: 30px;">
    <h1><?= Html::encode($model->id ? $model->title : 'Добавить событие') ?></h1>

    <div class="form-group pull-right">
        <?= Html::a('Отмена', ['briefing/index'], ['class' => 'btn btn-info']) ?>
    </div>
</div>

<?= $this->render('_form', [
    'model' => $model,
]) ?>
