<?php

use app\models\Position;
use app\models\User;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var $this yii\web\View
 * @var $model app\models\Briefing
 * @var $form ActiveForm
 */

?>
<?php
$last_first = User::find()->all();
?>
<div class="activity-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'section')->radioList(['Охрана труда' => 'Охрана труда','Безопасность движения' => 'Безопасность движения',]) ?>
    <?= $form->field($model, 'title')->textInput(['autocomplete' => 'off']) ?>
    <?= $form->field($model, 'date_start')->textInput(['type' => 'date']) ?>
    <?php
    $users = User::find()->all();
    // формируем массив, с ключем равным полю 'id' и значением равным полю 'title'
    $items = ArrayHelper::map($users,'id','fullname',);
    $params = [
        'prompt' => 'Выбрать'
    ];
    echo $form->field($model, 'user_id')->dropDownList($items,$params)->label('Кому');
    ?>
    <?php
    // получаем все должности
    $positions = Position::find()->all();
    // формируем массив, с ключем равным полю 'id' и значением равным полю 'title'
    $items = ArrayHelper::map($positions,'id','title');
    $params = [
        'prompt' => 'Выбрать'
    ];
    echo $form->field($model, 'position_id')->dropDownList($items,$params)->label('Должность');
    ?>
    <?= $form->field($model, 'type')->radioList(['Плановый' => 'Плановый','Вневплановый' => 'Внеплановый',]) ?>

    <div class="form-group" style="margin-top: 40px;">
        <?= Html::submitButton('Назначить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
