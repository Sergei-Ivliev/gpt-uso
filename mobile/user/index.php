<?php

/* @var $this yii\web\View */

/**
 * @var $model Position
 * @var $provider ActiveDataProvider
 */

use app\assets\AppAsset;
use app\assets\MobileAsset;
use app\models\Position;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

MobileAsset::register($this);

$this->title = 'Список работников';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Создать нового', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=  GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
    [
    'attribute' => 'last_name',
    'options' => ['style' => 'background-color:rgba(128, 203, 255, 0.64);'],
    ],
    [
    'attribute' => 'first_name',
    'options' => ['style' => 'background-color:rgba(128, 203, 255, 0.64);'],
    ],
    [
    'attribute' => 'status', 'format' => ['datetime'],
    'options' => ['style' => 'background-color:rgba(128, 203, 255, 0.64);'],
    ],
    [
    'class' => ActionColumn::class,
    'header' => 'Операции',
    'options' => ['style' => 'background-color:rgba(128, 203, 255, 0.64);'],
    'contentOptions' => ['style' => 'text-align:center']
    ],
    ],
    ])?>
</div>