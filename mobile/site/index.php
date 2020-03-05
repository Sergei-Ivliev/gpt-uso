<?php

///* @var $this yii\web\View */

$this->title = 'УСОиТ';

use app\assets\MobileAsset;
use yii\helpers\Html;

MobileAsset::register($this);?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Добро пожаловать!</h1>

        <p class="lead">Вы находитесь на портале ознакомления и тестирования работников.</p>

        <?php
        if (Yii::$app->user->isGuest) {
            echo '<p class=\"lead\">Пожалуйста, авторизуйтесь или зарегистрируйтесь.</p>';
        }
        ?>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h2>Новости</h2>

                <p>Раздел, в котором отображаются новые события</p>

                <p>
                    <?= Html::a('Перейти', ['/activity/index'], ['class' => 'btn btn-primary']) ?>
                </p>
            </div>
            <div class="col-lg-3">
                <h2>Инструктажи и проверка знаний</h2>

                <p>В данном разделе работник видит дату проведения следующего повтороного инструктажа,
                а также, после ознакомления прилегающей информации, сможет пройти тестирование</p>

                <p>
                    <?= Html::a('Перейти', ['/briefing/index'], ['class' => 'btn btn-primary']) ?>
                </p>
            </div>
            <div class="col-lg-3">
                <h2>Документация</h2>

                <p>В данном разделе представлены все документы сопряжённые с занимаемой должностью работника</p>

                <p>
                    <?= Html::a('Перейти', ['/file/index'], ['class' => 'btn btn-primary']) ?>
                </p>
            </div>
            <div class="col-lg-3">
                <h2>Технические занятия</h2>

                <p>1 раз в квартал, работнику будет представлена презентация по ПТЭ, ИСИ, ИДП, местной инструкции
                    и после ознакомления, возможность пройти тестирование</p>

                <p>
                    <?= Html::a('Перейти', ['temp'], ['class' => 'btn btn-primary']) ?>
                </p>
            </div>
        </div>

    </div>
</div>
