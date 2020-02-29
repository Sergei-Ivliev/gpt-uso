<?php

/**
 * @var $this yii\web\View
 * @var $model Activity
 */

use app\assets\MobileAsset;
use app\models\Activity;
use yii\helpers\Html;
MobileAsset::register($this);

?>
<div class="site-abou">
    <h1><?= Html::encode($model->id ? $model->title : 'Новое событие') ?></h1>

</div>
<div class="form-group">
    <?= Html::a('Отмена', ['activity/index'], ['class' => 'btn btn-info']) ?>
</div>

<?= $this->render('_form', [
    'model' => $model,
]) ?>
