<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\YiiAsset;

$this->title = Html::encode(Yii::$app->user->identity->username);
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

YiiAsset::register($this);

?>

<h1>Страница пользователя  <u><?= Html::encode(Yii::$app->user->identity->username)?></u></h1>

<h3><?= Html::encode(Yii::$app->user->identity->first_name)?>,

    <?= Html::submitButton('можете изменить пароль', ['id' => 'changePass', 'class' => 'btn btn-primary btn-sm']) ?></h3>

<div class="container">
    <div id="changePassSlider" class="col-lg-3" style="display: none">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'reenter_password')->passwordInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Применить', ['id' => 'changedPass', 'class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>

<div>
    <h4>
        Посмотреть результаты теста можно  <?= Html::a('по этой ссылке', ['result/index'], ['class' => 'btn btn-info'])?>
    </h4>
</div>

<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Разворачиваемая панель #1
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
               <h4>В разработке</h4>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Разворачиваемая панель #2
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <h4>В разработке</h4>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Разворачиваемая панель #3
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <h4>В разработке</h4>
            </div>
        </div>
    </div>
</div>

<?= $this->registerJsFile('../../web/js/changePassSlide.js') ?>

