<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\testing\models\Answer */

$this->title = 'Создать ответ';
$this->params['breadcrumbs'][] = ['label' => 'Ответы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$id_question = Yii::$app->request->get('ID_question');
$title = Yii::$app->request->get('title');
if (!Yii::$app->request->get('title')) {
    $sql = Yii::$app->db->createCommand("SELECT `title` FROM `questions` WHERE id = {$id_question}")->query();
    $row = [];
    foreach ($sql as $item => $value) {
        $row[] = $value;
        $title = $row[0]['title'];
    }
}

?>
<div class="answer-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <h3> на вопрос:&nbsp;<?= Html::encode($title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
        'id_question' => $id_question,
    ]) ?>

    <?php
    if (Yii::$app->getSession()->hasFlash('success')) {
         echo Html::a('Завершить создание теста', ['/'], ['class' => 'btn btn-primary']);
    }
    ?>

</div>
