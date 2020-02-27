<?php

use app\models\Result;
use app\modules\testing\components\DisplayTest;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Pjax;

Result::userNeedTests();

?>

<?php Pjax::begin(); ?>

<?= Html::beginForm(['test/display-test'], 'post', ['data-pjax' => '', 'class' => 'form-inline']); ?>
<?= Html::dropdownList('id_test', null,
    ArrayHelper::map(Result::$testForUser, 'id', 'name')
);

?>
    <div class="form-group">
        <?= Html::submitButton('Пройти тест', ['class' => 'btn btn-primary btn-bg', 'name' => 'hash-button']) ?>
    </div>
<?= Html::endForm() ?>
<?= /** @var DisplayTest $id_test */
DisplayTest::widget(['id' => $id_test ? $id_test : Result::$firstID, 'message' => 'Good morning']) ?>

<?php Pjax::end(); ?>