<?php
/* @var $this yii\web\View */
use yii\helpers\Html; ?>


<h1 style="text-align: center">Вы находитесь в разделе проверки знаний</h1>
<h3 style="text-align: center">выберите необходимый пункт</h3>
<!-- Button trigger modal -->

<div class="site-about" style="margin-top: 50px;">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-6" style="text-align: center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                    Охрана труда
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Список проверок по Охране труда</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    В данном разделе работник видит дату проведения следующей проверки знаний, касаемо
                                    лично его, а так же сопряжённой с его должностью или общие проверки
                                </p>
                            </div>
                            <div class="modal-footer">
                                <p>
                                    <?= Html::a('Перейти', ['/briefing/index_ot'], ['class' => 'btn btn-primary pull-right']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="text-align: center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong2">
                    Безопасность движения
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Список проверок по Безопасности движения</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    В данном разделе работник видит дату проведения следующей проверки знаний, касаемо
                                    лично его, а так же сопряжённой с его должностью или общие проверки
                                </p>
                            </div>
                            <div class="modal-footer">
                                <p>
                                    <?= Html::a('Перейти', ['/briefing/index_bd'], ['class' => 'btn btn-primary pull-right']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>