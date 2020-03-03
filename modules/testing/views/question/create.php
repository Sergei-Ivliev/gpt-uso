<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\testing\models\Question */

$this->title = 'Создать вопрос';
$this->params['breadcrumbs'][] = ['label' => 'Вопросы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$ID_test = Yii::$app->request->get('ID_test');
$test_name = Yii::$app->request->get('test_name');

?>
<div class="question-create">

    <h1><?= Html::encode('Выберите тест: ' . $test_name) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ID_test' => $ID_test,
    ]) ?>

</div>
