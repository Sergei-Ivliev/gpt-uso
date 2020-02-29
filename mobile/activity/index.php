<?php

/**
 * @var $this yii\web\View
 * @var $provider ActiveDataProvider
 * @property User $user
 */

use app\assets\MobileAsset;
use app\models\Activity;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
MobileAsset::register($this);

$columns = [

    [
        'attribute' => 'title',
        'options' => ['style' => 'background-color:rgba(254, 255, 249, 0.8);'],
    ],
    [
        'attribute' => 'date_start', 'format' => ['date'],
        'options' => ['style' => 'background-color:rgba(254, 255, 249, 0.8);'],
    ],

];

if (Yii::$app->user->can('admin')) {
    $columns[] = [
        'class' => ActionColumn::class,
        'header' => 'Операции',
        'options' => ['style' => 'background-color:rgba(254, 255, 249, 0.8);'],
    ];
} else if (Yii::$app->user->can('user')) {
    $columns[] = [
        'class' => ActionColumn::class,
        'header' => 'Операции',
        'template' => '{view}',
        'options' => ['style' => 'background-color:rgba(254, 255, 249, 0.8);'],
    ];
}

?>

    <div class="site-about">
        <h1>Список событий</h1>
        <?=
        Yii::$app->user->can('admin') ? (
        Html::a('Создать', ['activity/update'], ['class' => 'btn btn-success pull-right'])
        ) : (
        Html::tag('p', Html::encode('Для просмотра подробного описания нажмите иконку в виде глаза'))
        )
        ?>
    </div>

<?= GridView::widget([
    'dataProvider' => $provider, // $provider->getModels() [....]
    'columns' => $columns,
]) ?>