<?php

use app\models\Result;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\testing\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

Result::getCountUsers();

$this->title = 'Тесты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="container">
        <div class="test-box">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    ['attribute' => 'id',
                        'contentOptions' => ['style' => 'width:5%'],
                    ],
                    ['attribute' => 'name',
                        'contentOptions' => ['style' => 'width:20%'],
                    ],
                    ['attribute' => 'description',
                        'contentOptions' => ['style' => 'width:45%'],
                    ],
                    ['attribute' => 'passed',
                        'contentOptions' => ['style' => 'width:5%'],
                    ],
                    ['attribute' => 'total',
                        'contentOptions' => ['style' => 'width:5%'],
                    ],
                    ['attribute' => 'closed',
                        'contentOptions' => ['style' => 'width:5%'],
                    ],

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>

    </div>

</div>
