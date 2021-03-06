<?php

/**
 * @var $this yii\web\View
 * @var $model Activity
 */

use app\models\Activity;
use yii\helpers\Html;

?>
<div class="site-about" style="margin-bottom: 30px;">
    <h1><?= Html::encode($model->id ? $model->title : 'Новое событие') ?></h1>

    <div class="form-group pull-right">
        <?= Html::a('Отмена', ['activity/index'], ['class' => 'btn btn-info']) ?>
    </div>
</div>

<?= $this->render('_form', [
    'model' => $model,
]) ?>
