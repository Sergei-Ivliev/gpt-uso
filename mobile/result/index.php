<?php

/**
 * @var $this yii\web\View
 * @var $provider ActiveDataProvider
 */

use app\assets\MobileAsset;
use app\models\Result;
use yii\data\ActiveDataProvider;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;

MobileAsset::register($this);



$columns = [

    [
        'label' => 'Название',
        'attribute' => 'test_id', // авто-подключение зависимостей
        'value' => function (Result $model) {
            return $model->test->name;
        }
        // $model->test->name
    ],
    [
        'attribute' => 'status',
        'format' => 'boolean',
//        'options' => ['style' => 'width: 65px; color:blue'],
        'contentOptions' => function (Result $model){
            if ($model->status == 1) {
                return ['style' => 'background-color:#1fc61fd1; font-weight:bold; text-align:center'];
            } else {
                return ['style' => 'background-color:#f31d1dd4; font-weight:bold; text-align:center'];
            }
        }
    ],
];

if (Yii::$app->user->can('admin')) {
    $columns[] = [
        'class' => ActionColumn::class,
        'header' => 'Операции',
        'template' => '{view}',
        'contentOptions' => ['style' => 'text-align:center']
    ];
} else if (Yii::$app->user->can('user')) {
    $columns[] = [
        'class' => ActionColumn::class,
        'header' => 'Подробнее',
        'template' => '{view}',
        'contentOptions' => ['style' => 'text-align:center']
    ];
}

?>

    <div class="row">
        <h1>Список результатов</h1>
    </div>

<?= GridView::widget([
    'dataProvider' => $provider, // $provider->getModels() [....]
    'columns' => $columns,
]) ?>