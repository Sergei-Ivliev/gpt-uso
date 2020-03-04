<?php
/**
 * @var $this yii\web\View
 * @var $model Briefing
 */

use app\models\Briefing;
use yii\helpers\Html;
?>
    <div class="row">
        <h1>Добавить событие</h1>

        <div class="form-group pull-right">
            <?= Html::a('Назад', ['briefing/index'], ['class' => 'btn btn-info']) ?>
        </div>
    </div>

<?= $this->render('_form', [
    'model' => $model,
]) ?>